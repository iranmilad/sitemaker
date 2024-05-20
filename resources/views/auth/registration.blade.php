@extends('layouts.app')
@section('title', 'ثبت نام')
@section('body', 'account-page register-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>ایجاد یک حساب</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="/home" title="بازگشت به صفحه اصلی">صفحه اصلی</a><span
                                class="title"><i class="icon anm anm-angle-left-l"></i>حساب من</span><span
                                class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i>ایجاد یک حساب</span>
                        </div>
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
                    <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <div class="inner h-100">
                            <form method="post" action="{{ route('register.submit') }}" class="customer-form">
                                @csrf
                                <h2 class="text-center fs-4 mb-4">اگر مشتری جدید هستید اینجا ثبت نام کنید</h2>
                                <div class="form-row" >

                                    <div class="form-group col-12">
                                        <label for="email" class="d-none">ایمیل <span
                                                class="required">*</span></label>
                                        <input type="email" name="email" placeholder="پست الکترونیک"
                                            id="email" value="" required />
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="Password" class="d-none">گذرواژه <span
                                                class="required">*</span></label>
                                        <input type="password" name="password" placeholder="کلمه عبور"
                                            id="Password" value="" required />
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="password_confirmation" class="d-none">تأیید رمز عبور <span
                                                class="required">*</span></label>
                                        <input id="password_confirmation" type="Password" name="password_confirmation"
                                            placeholder="تأیید رمز عبور" required />
                                    </div>
                                    <div class="form-group col-12">
                                        <div
                                            class="login-remember-forgot d-flex justify-content-between align-items-center">
                                            <div class="agree-check customCheckbox">
                                                <input id="agree" name="agree" type="checkbox" value="agree"
                                                    required />
                                                <label for="agree"> من با <a href="/terms"> شرایط و خط مش</a> موافقم. </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12 mb-0">
                                        <input type="submit" class="btn btn-primary btn-lg w-100" value="ثبت نام" />
                                    </div>
                                </div>

                                <div class="d-none">
                                    <div class="login-divide"><span class="login-divide-text">یا</span></div>

                                    <p class="text-center fs-6 text-muted mb-3">یا ثبت نام کنید با</p>
                                    <div class="login-social d-flex-justify-center">
                                        <a class="social-link facebook rounded-5 d-flex-justify-center" href="#"><i
                                                class="icon anm anm-facebook-f me-2"></i> فیس بوک</a>
                                        <a class="social-link google rounded-5 d-flex-justify-center" href="#"><i
                                                class="icon anm anm-google-plus-g me-2"></i> Google </a>
                                        <a class="social-link twitter rounded-5 d-flex-justify-center" href="#"><i
                                                class="icon anm anm-twitter me-2"></i> توییتر</a>
                                    </div>
                                </div>

                                <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted">از قبل یک حساب دارید؟
                                    <a href="{{ route('login') }}" class="btn-link">اکنون وارد شوید</a></div>


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
