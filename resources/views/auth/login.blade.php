@extends('webview.master')

@section('maincontent')
@section('title')
    {{ env('APP_NAME') }}-Login
@endsection

<div class="body-content">
    <div class="container">
        <div class="sign-in-page m-b-10">
            <div class="row">
                <!-- create a new account -->
                <div class="col-md-3 col-sm-2 create-new-account">

                </div>
                <!-- Sign-in -->
                <div class="mt-4 mb-4 card col-md-6 col-sm-8 sign-in">
                    <p class="pt-4 text-center"> <b>Hello, Welcome to your account.</b> </p>

                    <form class="register-form outer-top-xs" method="POST" action="{{ url('login') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email / Phone<span>*</span></label>
                            <input type="text" name="email" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                            <input type="password" name="password" class="form-control unicase-form-control text-input"
                                id="exampleInputPassword1">
                        </div>
                        <div class="radio outer-xs">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember
                                me!
                            </label>
                        </div>
                        <button type="submit" id="submit-button"
                            style="background:#000339;border:1px #000339;color: white;width:100%"
                            class="btn-block btn-upper btn btn-dark checkout-page-button">Login</button>
                        <div class="text-center radio outer-xs">
                            <a href="{{ url('forgot-password') }}" class="forgot-password pull-right"
                                style="color: #000">Forgot your
                                Password?</a>
                        </div>
                    </form>
                    <h4 class="text-center" style="margin-top: 20px;margin-bottom:20px;">
                        Need an account? <a href="{{ url('register') }}" style="color: #000">Register Now</a>
                    </h4>

                    <a href="{{ url('auth/google') }}"
                        style="margin-top: 0px !important;background: #e3e3e3;color: #0a0a0a;padding: 8px;border-radius: 6px;font-size: 24px;text-align: center;"
                        class="mb-4 ml-2">
                        <strong> <img src="{{ asset('public/search.png') }}" style="width: 30px;"> Login with
                            Google</strong>
                    </a>

                </div>
                <!-- Sign-in -->

                <!-- create a new account -->
                <div class="col-md-3 col-sm-2 create-new-account">

                </div>
                <!-- create a new account -->
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
    </div><!-- /.row -->
</div><!-- /.sigin-in-->

@endsection
