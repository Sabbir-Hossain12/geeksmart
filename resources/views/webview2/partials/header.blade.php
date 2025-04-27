<!-- Header -->
<!-- Top Bar -->
<div class="top-navbar bg-white border-bottom border-soft-secondary z-1035 h-35px h-sm-auto">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col">
                <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">

                </ul>
            </div>

            <div class="col-5 text-right d-none d-lg-block">
                <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                    <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                        <a href="tel:01818512513" class="text-reset d-inline-block opacity-60 py-2">
                            <i class="la la-phone"></i>
                            <span>Hotline</span>
                            <span>{{ $basicinfo->phone_one }}</span>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                        <a href="{{ route('loginview') }}" class="text-reset d-inline-block opacity-60 py-2">Login</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('registerview') }}" class="text-reset d-inline-block opacity-60 py-2">Registration</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Top Bar -->

<header class=" sticky-top  z-1020 bg-white border-bottom shadow-sm">
    <div class="position-relative logo-bar-area z-1">
        <div class="container">
            <div class="d-flex align-items-center">

                <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                    <a class="d-block py-20px mr-3 ml-0" href="https://geekmartbd.com">
                        <img src="{{ asset($basicinfo->logo) }}" alt="Geek Mart" class="mw-100 h-30px h-md-40px" height="40">
                    </a>

                </div>
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x"></i>
                    </a>
                </div>

                <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                    <div class="position-relative flex-grow-1">
                        <form action="{{ url('search') }}" method="GET" class="stop-propagation">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                    <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left"></i></button>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="border-0 border-lg form-control" id="search" name="keyword" placeholder="I am shopping for..." autocomplete="off">
                                    <div class="input-group-append d-none d-lg-block">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="la la-search la-flip-horizontal fs-18"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content" class="text-left">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="#" class="nav-box-link">
                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                        </a>
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="compare">
                        <a href="{{ url('track-order') }}" class="d-flex align-items-center text-reset">
                            <i class="la la-truck la-2x opacity-80"></i>
                            <span class="flex-grow-1 ml-1">
{{--                    <span class="badge badge-primary badge-inline badge-pill">0</span>--}}
{{--                <span class="nav-box-text d-none d-xl-block opacity-70">Track Order</span>--}}
                </span>
                        </a> </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="wishlist">
                        <a href="{{ route('loginview') }}" class="d-flex align-items-center text-reset">
                            <i class="la la-user-o la-2x opacity-80"></i>
                            <span class="flex-grow-1 ml-1">
{{--                    <span class="badge badge-primary badge-inline badge-pill">0</span>--}}
{{--                    <span class="nav-box-text d-none d-xl-block opacity-70">Wishlist</span>--}}
                            </span>
                        </a>
                    </div>
                </div>

                <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0">
                    <div class="nav-cart-box dropdown h-100" id="cart_items">
                        <a href="javascript:void(0)" onclick="checkcart(this)" class="d-flex align-items-center text-reset h-100" data-toggle="dropdown" data-display="static">
                            <i class="la la-shopping-cart la-2x opacity-80"></i>
                            <span class="flex-grow-1 ml-1">
                    <span class="badge badge-primary badge-inline badge-pill cart-count">{{ intval(Cart::subtotal()) }}</span>
                    <span class="nav-box-text d-none d-xl-block opacity-70">Cart</span>
                                
                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation">

{{--                            <div class="text-center p-3">--}}
{{--                                <i class="las la-frown la-3x opacity-60 mb-3"></i>--}}
{{--                                <h3 class="h6 fw-700">Your Cart is empty</h3>--}}
{{--                            </div>--}}
                            <div class="text-center p-3">
                                <ul class="list-unstyled">
                                    <li id="checkcartview">
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bg-white border-top border-gray-200 py-1">
        <div class="container">
            <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-center">
                @forelse($categories->take(8) as $category) 
                <li class="list-inline-item mr-0">
                    <a href="{{ url('products/category/'.$category->slug) }}" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                        {{ $category->category_name }}
                    </a>
                </li>
                @empty
                @endforelse
               
                
            </ul>
        </div>
    </div>
</header>

<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div id="order-details-modal-body">

            </div>
        </div>
    </div>
</div>
