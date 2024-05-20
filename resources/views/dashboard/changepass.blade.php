@extends('layouts.app')
@section('title', 'حساب کاربری')
@section('body', 'account-page my-account-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>حساب من</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="/home" title="بازگشت به صفحه اصلی">صفحه اصلی</a><span
                                class="title"><i class="icon anm anm-angle -left-l"></i>صفحات</span><span
                                class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i>حساب من </span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4 mb-lg-0">
                    <!-- نوار کناری داشبورد -->
                    <div class="dashboard-sidebar bg-block">
                        <div class="profile-top text-center mb-4 px-3">
                            <div class="profile-image mb-3">
                                <img class="rounded-circle blur-up lazyload"
                                    data-src="{{ asset('images/users/User-Profile.png') }}"
                                    src="{{ asset('images/users/User-Profile.png') }}" alt="user" width="130" />
                            </div>
                            <div class="profile-detail">
                                <h3 class="mb-1"> {{ auth()->user()->first_name . " " . auth()->user()->last_name}}</h3>
                                <p class="text-muted"> {{ auth()->user()->email}}</p>
                            </div>
                        </div>
                        <div class="dashboard-tab">
                            <ul class="nav nav-tabs flex-lg-column border-bottom-0" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">اطلاعات حساب</a>

                                </li>
                                <li class="nav-item">
                                    <a href="/dashboard/orders" class="nav-link {{ request()->is('dashboard/orders') ? 'active' : '' }}">سفارشات من</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dashboard/favorites" class="nav-link {{ request()->is('dashboard/favorites') ? 'active' : '' }}">لیست خواسته‌های من</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dashboard/changepass" class="nav-link {{ request()->is('dashboard/changepass') ? 'active' : '' }}">تنظیمات</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">خروج از سیستم</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Dashboard sidebar -->
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="dashboard-content tab-content h-100" id="top-tabContent">




                        <!-- Security -->
                        <div class="tab-pane fade h-100  show active" id="security">
                            <div class="settings-card mt-0 h-100">
                                <div class="dashboard-title d-flex-justify-center justify-content-between mb-4">
                                    <h2 class="mb-0">تغییر رمز عبور</h2>
                                </div>

                                <div class="settings-book-section dashboard-detail">
                                    <div class="row">

                                        <form class="row form mb-5" id="changepass-dashboard" method="post" action="{{ route('dashboard.setNewPassword')}}">
                                            @csrf
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="currentpass" class="form-label fs-7 required">رمز عبور فعلی</label>
                                                    <input name="currentpass" type="password" class="form-control fs-7 peer {{ $errors->has('currentpass') ? 'is-invalid' : '' }}" id="currentpass">
                                                    <div class="invalid-feedback">
                                                        @if($errors->has("currentpass"))
                                                        {{$errors->first("currentpass")}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="password" class="form-label fs-7 required">رمز عبور</label>
                                                    <input name="password" type="password" class="form-control fs-7 peer {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password">
                                                    <div class="invalid-feedback">
                                                        @if($errors->has("password"))
                                                        {{$errors->first("password")}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="password_confirmation" class="form-label fs-7 required">تکرار رمز عبور</label>
                                                    <input name="password_confirmation" type="password" class="form-control fs-7 peer {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="password_confirmation">
                                                    <div class="invalid-feedback">
                                                        @if($errors->has("password_confirmation"))
                                                        {{$errors->first("password_confirmation")}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-sm custom-btn-primary w-auto">ذخیره</button>
                                            </div>
                                        </form>
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Security -->
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
