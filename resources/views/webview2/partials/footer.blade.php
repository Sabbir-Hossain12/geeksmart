<section class="bg-white border-top mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ url('/venture/about_us') }}">
                    <i class="la la-file-text la-3x text-primary mb-2"></i>
                    <h4 class="h6">About Us</h4>
                </a>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ url('/venture/terms_codition') }}">
                    <i class="la la-file-text la-3x text-primary mb-2"></i>
                    <h4 class="h6">Terms & Conditions</h4>
                </a>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ url('/venture/faq') }}">
                    <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                    <h4 class="h6">FAQ</h4>
                </a>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ url('/venture/contact_us') }}">
                    <i class="la la-support la-3x text-primary mb-2"></i>
                    <h4 class="h6">Contact Us</h4>
                </a>
            </div>
            
        </div>
    </div>
</section>

<section class="bg-dark py-5 text-light footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 text-center text-md-left">
                <div class="mt-4">
                    <a href="{{ url('/') }}" class="d-block">
                        <img class="lazyload" src="{{ asset($basicinfo->logo) }}" data-src="{{ asset($basicinfo->logo) }}" alt="Geek Mart" height="44">
                    </a>
{{--                    <div class="my-3">--}}
{{--                        <span style="color: rgb(255, 255, 255); font-family: Inter; font-size: 15px; background-color: rgb(25, 25, 25);">--}}
{{--                            Geek Mart provides top notch Gadgets, Mobile Phone &amp; different Lifestyle products. We use our own channels to--}}
{{--                            import Original products. We deliver products anywhere in Bangladesh.</span>--}}
{{--                    </div>--}}
{{--                    <div class="d-inline-block d-md-block mb-4">--}}
{{--                        <form class="form-inline" method="POST" action="https://geekmartbd.com/subscribers">--}}
{{--                            <input type="hidden" name="_token" value="dabpOBbaFeNAMRbTbtLgXlFn1pubBLTApjbjXa7A">--}}
{{--                            <div class="form-group mb-0">--}}
{{--                                <input type="email" class="form-control" placeholder="Your Email Address" name="email" required>--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn btn-primary">--}}
{{--                                Subscribe--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                    <div class="w-300px mw-100 mx-auto mx-md-0">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        Contact Info
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <span class="d-block opacity-30">Address:</span>
                            <span class="d-block opacity-70">{{ $basicinfo->address }}</span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">Phone:</span>
                            <span class="d-block opacity-70">{{ $basicinfo->phone_one }}</span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">Email:</span>
                            <span class="d-block opacity-70">
                               <a href="mailto:{{ $basicinfo->email }}" class="text-reset">{{ $basicinfo->email ?? '' }}</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">

                    </h4>
                    <ul class="list-unstyled">
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        My Account
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('loginview') }}">
                                Login
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('dashboard') }}">
                                Customer Dashboard
                            </a>
                        </li>
                     
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ url('/track-order') }}">
                                Track Order
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="text-center text-md-left" current-verison="6.5.0">
                    <p>All right reserved &copy;{{ env('APP_NAME') ?? ''}}, Developed by <a href="https://danpitetech.com/" target="_blank">Danpite Tech</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <ul class="list-inline my-3 my-md-0 social colored text-center">
                    <li class="list-inline-item">
                        <a href="{{ $basicinfo->facebook }}" target="_blank" class="facebook"><i class="lab la-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ $basicinfo->twitter }}" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <img src="https://geekmartbd.com/public/uploads/all/MCk8SkdvYWD5CEyuUnqvOcjJxYQSOuqCECDXwkWn.png" height="30" class="mw-100 h-auto" style="max-height: 30px">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="https://geekmartbd.com" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-home fs-20 opacity-60 opacity-100 text-primary"></i>
                <span class="d-block fs-10 fw-600 opacity-60 opacity-100 fw-600">Home</span>
            </a>
        </div>
        <div class="col">
            <a href="https://geekmartbd.com/categories" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-list-ul fs-20 opacity-60 "></i>
                <span class="d-block fs-10 fw-600 opacity-60 ">Categories</span>
            </a>
        </div>
        <div class="col-auto">
            <a href="https://geekmartbd.com/cart" class="text-reset d-block text-center pb-2 pt-3">
                <span class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px" style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span class="d-block mt-1 fs-10 fw-600 opacity-60 ">
                    Cart
                                        (<span class="cart-count">0</span>)
                </span>
            </a>
        </div>
        <div class="col">
            <a href="https://geekmartbd.com/all-notifications" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i class="las la-bell fs-20 opacity-60 "></i>
                                    </span>
                <span class="d-block fs-10 fw-600 opacity-60 ">Notifications</span>
            </a>
        </div>
        <div class="col">
            <a href="https://geekmartbd.com/users/login" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-block mx-auto">
                    <img src="https://geekmartbd.com/public/assets/img/avatar-place.png" class="rounded-circle size-20px">
                </span>
                <span class="d-block fs-10 fw-600 opacity-60">Account</span>
            </a>
        </div>
    </div>
</div>