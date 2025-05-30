<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Order;
use App\Models\Orderproduct;
use App\Models\Size;
use App\Models\Stock;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
use DataTables;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class FindorderController extends Controller
{
    public function autoreturn()
    {
        return view('admin.content.findorder.autoreturn');
    }
    public function manualreturn()
    {
        return view('admin.content.findorder.manualreturn');
    }

    public function scanbarcode()
    {
        return view('admin.content.findorder.findfrom');
    }
    public function manualbarcode()
    {
        return view('admin.content.findorder.manualbarcode');
    }

    public function return(Request $request)
    {
        $id = $request->invoiceID;
        $order = Order::where('invoiceID', $id)->first();
        if ($order) {
            $ops = Orderproduct::where('order_id', $order->id)->get();
            if ($order->status == 'Shipped') {
                foreach ($ops as $op) {
                    $size = Size::where('product_id', $op->product_id)->where('size', $op->size)->first();
                    $size->sold -= $op->quantity;
                    $size->available_stock += $op->quantity;
                    $size->update();
                }
                $order->last_updated = date('Y-m-d');
                $order->status = 'Del. Failed';
                $order->update();
                $comment = new Comment();
                $comment->order_id = $id;
                $comment->comment = Auth::guard('admin')->user()->name . ' Successfully Update #' . $id . ' Order status to Del. Failed';
                $comment->admin_id = Auth::guard('admin')->user()->id;
                $comment->status = 1;
                $comment->save();
                Session::forget('unknownparcel');
                Session::forget('repeatparcel');
                return redirect()->back()->with('success', 'Percel received at our house mark as Del. Failed');
            } elseif ($order->status == 'Del. Failed') {
                Session::put('repeatparcel', 'Yes');
                return redirect()->back()->with('error', 'Already return this order please check again');
            } else {
                Session::put('unknownparcel', 'Yes');
                return redirect()->back()->with('error', 'Unknown parcel !');
            }
        } else {
            Session::put('unknownparcel', 'Yes');
            return redirect()->back()->with('error', 'Unknown parcel !');
        }
    }

    public function refreshbarcode()
    {
        Session::forget('unknownparcel');
        Session::forget('repeatparcel');
        return redirect()->back()->with('succes', 'Data refresh successfully');
    }

    public function chnagestatus(Request $request)
    {
        $id = $request->invoiceID;
        $order = Order::where('invoiceID', $id)->first();
        if ($order) {
            $ops = Orderproduct::where('order_id', $order->id)->get();
            if ($order->status == 'Packaging') {
                foreach ($ops as $op) {
                    $size = Size::where('product_id', $op->product_id)->where('size', $op->size)->first();
                    $size->sold += $op->quantity;
                    $size->available_stock -= $op->quantity;
                    $size->update();
                }
                $order->deliveryDate = date('Y-m-d');
                $order->status = 'Shipped';
                $order->update();

                $cu = Customer::where('order_id', $order->id)->first();
                $sendstatus = Http::get('http://bulksmsbd.net/api/smsapi?api_key=3z2e9owl4PGXLakGMAmv&type=text&number=' . $cu->customerPhone . '&senderid=RASHIBD.COM&message= অভিনন্দন,আপনার অর্ডারটি ' . $order->invoiceID . ' কুরিয়ার করা হয়েছে।মোটঃ' . $order->subTotal . ' টাকা। ডেলিভারির সময়ঃ ২-৩ দিন। ট্র্যাক পার্সেলঃ ' . $order->courier_tracking_link . ' , Hotline: 01888173003');

                if ($sendstatus) {
                    $comment = new Comment();
                    $comment->order_id = $order->id;
                    $comment->comment = 'Successfully send a sms to this customer';
                    $comment->admin_id = Auth::guard('admin')->user()->id;
                    $comment->status = 1;
                    $comment->save();
                }

                $comment = new Comment();
                $comment->order_id = $id;
                $comment->comment = Auth::guard('admin')->user()->name . ' Successfully Update #' . $id . ' Order status to Shipped';
                $comment->admin_id = Auth::guard('admin')->user()->id;
                $comment->status = 1;
                $comment->save();
                Session::forget('unknownparcel');
                Session::forget('repeatparcel');
                return redirect()->back()->with('success', 'Percel send for shipments');
            } elseif ($order->status == 'Shipped') {
                Session::put('repeatparcel', 'Yes');
                return redirect()->back()->with('error', 'Already scan this invoice id please check again');
            } else {
                Session::put('unknownparcel', 'Yes');
                return redirect()->back()->with('error', 'Unknown parcel !');
            }
        } else {
            Session::put('unknownparcel', 'Yes');
            return redirect()->back()->with('error', 'Unknown parcel !');
        }
    }

    public function orderdetails(Request $request)
    {
        $inIds = $request->invoice_id;
        Session::put('invoice_id', $inIds);
        return $inIds;
    }
    public function orderdetabybar(Request $request)
    {

        return view('admin.content.order.barcodeorder');
    }

    public function searchdata(Request $request)
    {

        $inIds = Session::get('invoice_id');

        foreach ($inIds as $inId) {
            $orders[] =  Order::with('orderproducts', 'admins', 'couriers', 'products', 'comments', 'cities', 'zones')
                ->join('customers', 'customers.order_id', '=', 'orders.id')
                ->select('orders.*', 'customers.customerPhone', 'customers.customerName', 'customers.customerAddress')
                ->where('invoiceID', $inId['value'])->first();
        }



        return Datatables::of($orders)
            ->addColumn('customerInfo', function ($orders) {
                return $orders->customerName . '<br>' . $orders->customerPhone . '<br>' . $orders->customerAddress . '<br> <span style="color:red;font-weight:bold;">' . $orders->entry_complete . '</span>';
            })
            ->addColumn('invoice', function ($orders) {
                return $orders->invoiceID . '<br>' . $orders->web_ID . '<br>' . $orders->created_at->diffForhumans();
            })
            ->editColumn('products', function ($orders) {
                $orderProducts = '';
                foreach ($orders->orderproducts as $product) {
                    $orderProducts = $orderProducts . $product->quantity . ' x ' . $product->productName . '<br>';
                }
                return rtrim($orderProducts, '<br>');
            })
            ->editColumn('user', function ($orders) {
                if ($orders->admins) {
                    return $orders->admins->name;
                } else {
                    return 'user not assign';
                }
            })
            ->editColumn('courier', function ($orders) {
                if (isset($orders->couriers->courierName) && isset($orders->cities->cityName) && isset($orders->zones->zoneName)) {
                    return $orders->couriers->courierName . '<br>' . $orders->cities->cityName . '<br>' . $orders->zones->zoneName;
                } elseif (isset($orders->couriers->courierName) && isset($orders->cities->cityName)) {
                    return $orders->couriers->courierName . '<br>' . $orders->cities->cityName;
                } elseif (isset($orders->couriers->courierName) && isset($orders->zones->zoneName)) {
                    return $orders->couriers->courierName . '<br>' . $orders->zones->zoneName;
                } elseif (isset($orders->couriers->courierName)) {
                    return $orders->couriers->courierName;
                } else {
                    return 'Not Selected';
                }
            })
            ->editColumn('notification', function ($orders) {
                return $orders->comments->comment;
            })
            ->addColumn('statusButton', function ($orders) {
                if (last(request()->segments()) == 'Paid') {
                    return '<span class="badge bg-soft-success text-success">Paid</span>';
                } else if (last(request()->segments()) == 'Return') {
                    return '<span class="badge bg-soft-danger text-danger">Return</span>';
                } else if (last(request()->segments()) == 'Lost') {
                    return '<span class="badge bg-soft-danger text-danger">Lost</span>';
                } else if (last(request()->segments()) == 'Pending Invoiced') {
                    return $orders->status = $this->statusList('Pending Invoiced', $orders->id);
                } else if (last(request()->segments()) == 'Checked Invoiced') {
                    return $orders->status = $this->statusList('Checked Invoiced', $orders->id);
                } else {
                    return $orders->status = $this->statusList($orders->status, $orders->id);
                }
            })

            ->addColumn('action', function ($orders) {
                return "<a href='javascript:void(0);' data-id='" . $orders->id . "' class='action-icon btn-editorder'> <i class='fas fa-1x fa-edit'></i></a> <br>
                <a href='javascript:void(0);' data-id='" . $orders->id . "' class='action-icon btn-delete'> <i class='fas fa-trash-alt'></i></a>";
            })
            ->escapeColumns([])->make();
    }

    public function statusList($status, $id)
    {
        $allStatus = array(
            'order' => array(
                "Processing" => array(
                    "name" => "Processing",
                    "icon" => "fe-tag",
                    "color" => "bg-primary"
                ),
                "On Hold" => array(
                    "name" => "On Hold",
                    "icon" => "far fa-stop-circle",
                    "color" => "bg-warning"
                ),
                "Payment Pending" => array(
                    "name" => "Payment Pending",
                    "icon" => "fe-tag",
                    "color" => "bg-info"
                ),
                "Canceled" => array(
                    "name" => "Canceled",
                    "icon" => "fe-trash-2",
                    "color" => "bg-danger"
                ),
                "Completed" => array(
                    "name" => "Completed",
                    "icon" => "fe-check-circle",
                    "color" => "bg-success"
                )
            ),
            'invoice' => array(
                "Pending Invoiced" => array(
                    "name" => "Pending Invoiced",
                    "color" => "bg-primary"
                ),
                "Checked Invoiced" => array(
                    "name" => "Checked Invoiced",
                    "color" => "bg-success"
                ),
                "Invoiced" => array(
                    "name" => "Invoiced",
                    "color" => "bg-warning"
                ),
                "Stock Out" => array(
                    "name" => "Stock Out",
                    "color" => "bg-info"
                ),
                "Canceled" => array(
                    "name" => "Canceled",
                    "color" => "bg-info"
                ),
                "Delivered" => array(
                    "name" => "Delivered",
                    "color" => "bg-info"
                )

            ),
            'delivered' => array(
                "Delivered" => array(
                    "name" => "Delivered",
                    "color" => "bg-primary"
                ),
                "Customer On Hold" => array(
                    "name" => "Customer On Hold",
                    "color" => "bg-warning"
                ),
                "Customer Confirm" => array(
                    "name" => "Customer Confirm",
                    "color" => "bg-warning"
                ),
                "Request to Return" => array(
                    "name" => "Request to Return",
                    "color" => "bg-warning"
                ),
                "Paid" => array(
                    "name" => "Paid",
                    "color" => "bg-info"
                ),
                "Return" => array(
                    "name" => "Return",
                    "color" => "bg-danger"
                ),
                "Lost" => array(
                    "name" => "Lost",
                    "color" => "bg-danger"
                )
            )
        );

        $temp = 'order';
        foreach ($allStatus as $key => $value) {
            foreach ($value as $kes => $val) {
                if ($kes == $status) {
                    $temp = $key;
                }
            }
        }
        $args = $allStatus[$temp];
        $html = '';
        foreach ($args as $value) {
            if ($args[$status]['name'] != $value['name']) {

                $html = $html . "<a class=' btn-sm dropdown-item btn-status' data-id='" . $id . "' data-status='" . $value['name'] . "' href='#'>" . $value['name'] . "</a>";
            }
        }
        $response = "<div class='btn-group dropdown'>
            <a href='javascript: void(0);' style='color:white'  class=' btn-sm table-action-btn dropdown-toggle arrow-none btn" . $args[$status]['color'] . " btn-xs' data-bs-toggle='dropdown' aria-expanded='false' >" . $args[$status]['name'] . " <i class='mdi mdi-chevron-down'></i></a>
            <div class='dropdown-menu dropdown-menu-right'>
            " . $html . "
            </div>
        </div>";

        return $response;
    }

    public function courierUpdateByCheckbox(Request $request)
    {

        $courier_id = $request['courierid'];
        $ids = $request['orders_id'];
        if ($ids) {
            foreach ($ids as $id) {
                $order = Order::find($id);
                $order->courier_id = $courier_id;
                $order->city_id = "";
                $order->zone_id = "";
                $order->save();
                $comment = new Comment();
                $comment->order_id = $id;
                $comment->comment = Auth::guard('admin')->user()->name . ' Successfully Update #DN' . $id . ' Order Courier. ';
                $comment->admin_id = Auth::guard('admin')->user()->id;
                $comment->save();
            }
            $response['status'] = 'success';
            $response['message'] = Auth::guard('admin')->user()->name . ' Successfully Update #DN' . $id . ' Order Courier';
        } else {
            $response['status'] = 'failed';
            $response['message'] = 'Unsuccessful to Assign User to this Order';
        }
        return json_encode($response);
    }
}
