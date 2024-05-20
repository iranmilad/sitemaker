@extends('layouts.app')
@section('title', 'یادآوری رمزعبور')
@section('body', 'account-page forgot-password-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>گذرواژه را فراموش کرده اید</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="/home" title="بازگشت به صفحه اصلی">صفحه اصلی</a><span
                                class="title"><i class="icon anm anm-angle -left-l"></i>حساب من</span><span
                                class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i>فراموش کردم رمز
                                عبور</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <div class="container">
            <div class="login-register">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <div class="inner h-100">
                            <form method="post" action="password/email" class="customer-form">
                                @csrf
                                <h2 class="text-center fs-4 mb-3">رمز عبور را فراموش کرده اید</h2>
                                <p class="text-center mb-4">لطفاً آدرس ایمیل خود را در زیر وارد کنید. پیوندی برای بازنشانی
                                    رمز عبور خود دریافت خواهید کرد.</p>
                                <div class="form-row">
                                    <div class="form-group col-12 mb-4">
                                        <label for="Email" class="d-none">ایمیل خود را وارد کنید <span
                                                class="required">*</span></label>
                                        <input type="email" name="email" placeholder="ایمیل خود را وارد کنید"
                                            id="Email" value="" required />
                                    </div>
                                    <div class="form-group col-12 mb-0">
                                        <div
                                            class="login-remember-forgot d-flex justify-content-between align-items-center">
                                            <input type="submit" class="btn btn-primary btn-lg"
                                                value="بازنشانی رمز عبور" />
                                            <a href="{{ route('login') }}" class="d-flex-justify-center btn-link">بازگشت به ورود<i
                                                    class="icon anm anm-angle-left-r me-2"></i> </a>
                                        </div>
                                    </div>
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
        <!--پایان محتوای اصلی-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection
