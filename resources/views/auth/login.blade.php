@extends('layouts.app')
@section('title', 'ورود به حساب کاربری')
@section('body', 'account-page login-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>ورود</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="/home" title="Back to the home page">خانه</a><span
                                class="title"><i class="icon anm anm-angle-left-l"></i>حساب من</span><span
                                class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i>ورود</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">
            <div class="login-register pt-2">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 offset-md-3 col-lg-6">
                        <div class="inner h-100">
                            <form method="post" action="{{ route('user.login') }}" class="customer-form">
                                @csrf
                                <h2 class="text-center fs-4 mb-3">ورود مشتریان </h2>
                                <p class="text-center mb-4">اگر حسابی نزد ما دارید، لطفا وارد شوید.</p>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="CustomerEmail" class="d-none">ایمیل <span
                                                class="required">*</span></label>
                                        <input type="email" name="email" placeholder="ایمیل" id="CustomerEmail"
                                            value="" required />
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="CustomerPassword" class="d-none">گذرواژه <span
                                                class="required">*</span></label>
                                        <input type="password" name="password" placeholder="رمزعبور"
                                            id="CustomerPassword" value="" required />
                                    </div>
                                    <div class="form-group col-12">
                                        <div
                                            class="login-remember-forgot d-flex justify-content-between align-items-center">
                                            <div class="remember-check customCheckbox">
                                                <input id="Remember" name="remember" type="checkbox" value="بخاطربسپار"
                                                     />
                                                <label for="remember"> مرا به خاطر بسپار</label>
                                            </div>
                                            <a href="/password/reset">گذرواژه خود را فراموش کرده اید؟</a>
                                        </div>
                                    </div>
                                    <div class="form-group col-12 mb-0">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">ورود به سیستم</button>
                                    </div>
                                </div>

                                <div class="d-none">
                                    <div class="login-divide"><span class="login-divide-text">یا</span></div>
                                    <p class="text-center fs-6 text-muted mb-3">با حساب اجتماعی وارد شوید</p>
                                    <div class="login-social d-flex-justify-center">
                                        <a class="social-link facebook rounded-5 d-flex-justify-center" href="#"><i
                                                class="icon anm anm-facebook-f ms-2"></i> فیس بوک</a>
                                        <a class="social-link google rounded-5 d-flex-justify-center" href="#"><i
                                                class="icon anm anm-google-plus-g ms-2"></i> گوگل </a>
                                        <a class="social-link twitter rounded-5 d-flex-justify-center" href="#"><i
                                                class="icon anm anm-twitter ms-2"></i> توییتر</a>
                                    </div>
                                </div>

                                <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted ">حساب ندارید؟
                                    <a href="{{ route('register') }}" class="btn-link">اکنون ثبت نام کنید</a>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Main Content-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection
