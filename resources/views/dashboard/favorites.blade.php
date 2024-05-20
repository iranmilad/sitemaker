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



                        <!-- My Wishlist -->
                        <div class="tab-pane fade h-100 show active" id="wishlist">
                            <div class="orders-card mt-0 h-100">
                                <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                    <h2 class="mb-0">لیست آرزوهای من</h2>
                                </div>

                                <div class="table-bottom-brd table-responsive">
                                    <table class="table align-middle text-center order-table">
                                        <thead>
                                            <tr class="table-head text-nowrap">
                                                <th scope="col">تصویر</th>
                                                <th scope="col">شناسه محصول</th>
                                                <th scope="col">جزئیات محصول</th>
                                                <th scope="col">قیمت</th>
                                                <th scope="col">اقدام</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($favorites && count($favorites) > 0)
                                                @foreach($favorites as $favorite)
                                                    <tr>
                                                        <td><img class="blur-up lazyload"
                                                                data-src="{{ $favorite->img }}"
                                                                src="{{ $favorite->img }}"
                                                                width="50" alt="محصول" title="محصول" /></td>
                                                        <td><span class="id">{{ $favorite->id }}</span></td>
                                                        <td><span class="name">{{ $favorite->title }}  </span></td>
                                                        <td><span class="price fw-500">{{ $favorite->sale_price>0 ?   $favorite->sale_price : $favorite->price  }} تومان </span></td>
                                                        <td>
                                                            <a href="{{ $favorite->link }}" class="btn btn-md text-nowrap">افزودن به سبد خرید</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                            <tr><td>محصولی به علاقه مندی شما اضافه نشده است.</td></tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End My Wishlist -->

                        <!-- Saved Cards -->
                        <div class="tab-pane fade h-100" id="payment">
                            <div class="banks-card mt-0 h-100">
                                <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                    <h2 class="mb-0">کارت های ذخیره شده</h2>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addCardModal"><i class="icon anm anm-plus-r ms-1"></i> افزودن
                                        جدید</button>
                                    <!-- مدال کارت جدید -->
                                    <div class="modal fade" id="addCardModal" tabindex="-1"
                                        aria-labelledby="addCardModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="modal-title" id="addCardModalLabel">جزئیات کارت</h2>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="add-card-from" method="post" action="#">
                                                        <div class="form-row">
                                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <label class="d-none">شماره کارت</label>
                                                                <input name="card-number" placeholder="شماره کارت"
                                                                    value="" id="شماره کارت" type="text" />
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                                <label for="bank-card" class="d-none">کارت <span
                                                                        class="required">*</span></label>
                                                                <select id="bank-card" class="form-control">
                                                                    <option value="0" label="انتخاب کارت"
                                                                        selected="selected">انتخاب کارت</option>
                                                                    <option value="visa">ویزا</option>
                                                                    <option value="mastercard">Mastercard</option>
                                                                    <option value="american_Express">آمریکن اکسپرس</option>
                                                                    <option value="discover">کشف</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                                <label for="cvv-code" class="d-none">کد CVV <span
                                                                        class="required">*</span></label>
                                                                <input name="cvv-code" placeholder="CVV Code"
                                                                    value="" id="cvv-code" type="text" />
                                                            </div>
                                                            <div
                                                                class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-md-0">
                                                                <label for="card-month" class="d-none">ماه <span
                                                                        class="required">*</span></label>
                                                                <select id="card-month" class="form-control">
                                                                    <option value="0" label="Select a month"
                                                                        selected="selected">انتخاب یک ماه</option>
                                                                    <option value="1">ژانويه</option>
                                                                    <option value="2">فوریه</option>
                                                                    <option value="3">مارس</option>
                                                                    <option value="4">آوریل</option>
                                                                    <option value="5">مه</option>
                                                                    <option value="6">ژوئن</option>
                                                                    <option value="7">ژوئیه</option>
                                                                    <option value="8">مرداد</option>
                                                                    <option value="9">سپتامبر</option>
                                                                    <option value="10">اکتبر</option>
                                                                    <option value="11">نوامبر</option>
                                                                    <option value="12">دسامبر</option>
                                                                </select>
                                                            </div>
                                                            <div
                                                                class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-0">
                                                                <label for="card-year" class="d-none">سال <span
                                                                        class="required">*</span></label>
                                                                <select id="card-year" class="form-control">
                                                                    <option value="0" label="Select a year"
                                                                        selected="selected">انتخاب یک سال</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="submit" class="btn btn-primary m-0"><span>افزودن
                                                            کارت</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End New Card Modal -->
                                </div>

                                <div class="bank-book-section">
                                    <div class="row g-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                        <div class="address-select-box active">
                                            <div class="address-box bg-block">
                                                <div
                                                    class="top bank-logo d-flex-justify-center justify-content-between mb-3">
                                                    <img src="{{ asset('storage/images/icons/bank-logo1.png') }}"
                                                        class="bank-logo" width="40" alt="" />
                                                    <img src="{{ asset('storage/images/icons/visa-logo.png') }}"
                                                        class="network-logo" width="50" alt="" />
                                                </div>
                                                <div class="middle">
                                                    <div class="card-number mb-3">
                                                        <h6>شماره کارت</h6>
                                                        <p class="text-muted">3742 4545 5400 126</p>
                                                    </div>
                                                    <div
                                                        class="name-validity d-flex-justify-center justify-content-between">
                                                        <div class="left">
                                                            <h6>نام روی کارت</h6>
                                                            <p class="text-muted">هما جکنو</p>
                                                        </div>
                                                        <div class="right">
                                                            <h6>اعتبار</h6>
                                                            <p class="text-muted">XX/XX</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bottom d-flex-justify-center justify-content-between">
                                                    <button type="button" class="bottom-btn btn btn-gray btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editCardModal">ویرایش</button>
                                                    <button type="button"
                                                        class="bottom-btn btn btn-gray btn-sm">حذف</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="address-select-box">
                                            <div class="address-box bg-block">
                                                <div
                                                    class="top bank-logo d-flex-justify-center justify-content-between mb-3">
                                                    <img src="{{ asset('storage/images/icons/bank-logo2.png') }}"
                                                        class="bank-logo" width="100" alt="" />
                                                    <img src="{{ asset('storage/images/icons/visa-logo.png') }}"
                                                        class="network-logo" width="50" alt="" />
                                                </div>
                                                <div class="middle">
                                                    <div class="card-number mb-3">
                                                        <h6>شماره کارت</h6>
                                                        <p class="text-muted">3742 4545 5400 126</p>
                                                    </div>
                                                    <div
                                                        class="name-validity d-flex-justify-center justify-content-between">
                                                        <div class="left">
                                                            <h6>نام روی کارت</h6>
                                                            <p class="text-muted">هما جکنو</p>
                                                        </div>
                                                        <div class="right">
                                                            <h6>اعتبار</h6>
                                                            <p class="text-muted">XX/XX</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bottom d-flex-justify-center justify-content-between"><button
                                                        type="button" class="bottom-btn btn btn-gray btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editCardModal">ویرایش</button>
                                                    <button type="button"
                                                        class="bottom-btn btn btn-gray btn-sm">حذف</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Edit Bank card Modal -->
                                    <div class="modal fade" id="editCardModal" tabindex="-1"
                                        aria-labelledby="editCardModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="modal-title" id="editCardModalLabel">ویرایش جزئیات کارت
                                                    </h2>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="add-card-from" method="post" action="#">
                                                        <div class="form-row">
                                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <label for="editCard-number" class="d-none">شماره
                                                                    کارت</label>
                                                                <input name="editCard-number" placeholder="شماره کارت"
                                                                    value="" id="editCard-number" type="text" />
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                                <label for="editBank-card" class="d-none">کارت <span
                                                                        class="required">*</span></label>
                                                                <select id="editBank-card" class="form-control">
                                                                    <option value="0" label="انتخاب کارت"
                                                                        selected="selected">انتخاب کارت</option>
                                                                    <option value="visa">ویزا</option>
                                                                    <option value="mastercard">Mastercard</option>
                                                                    <option value="american_Express">آمریکن اکسپرس</option>
                                                                    <option value="discover">کشف</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                                <label for="editCvv-code" class="d-none">کد CVV <span
                                                                        class="required">*</span></label>
                                                                <input name="editCvv-code" placeholder="CVV Code"
                                                                    value="" id="editCvv-code" type="text" />
                                                            </div>
                                                            <div
                                                                class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-md-0">
                                                                <label for="editCard-month" class="d-none">ماه <span
                                                                        class="required">*</span></label>
                                                                <select id="editCard-month" class="form-control">
                                                                    <option value="0" label="Select a month"
                                                                        selected="selected">انتخاب یک ماه</option>
                                                                    <option value="1">ژانويه</option>
                                                                    <option value="2">فوریه</option>
                                                                    <option value="3">مارس</option>
                                                                    <option value="4">آوریل</option>
                                                                    <option value="5">مه</option>
                                                                    <option value="6">ژوئن</option>
                                                                    <option value="7">ژوئیه</option>
                                                                    <option value="8">مرداد</option>
                                                                    <option value="9">سپتامبر</option>
                                                                    <option value="10">اکتبر</option>
                                                                    <option value="11">نوامبر</option>
                                                                    <option value="12">دسامبر</option>
                                                                </select>
                                                            </div>
                                                            <div
                                                                class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-0">
                                                                <label for="editCard-year" class="d-none">سال <span
                                                                        class="required">*</span></label>
                                                                <select id="editCard-year" class="form-control">
                                                                    <option value="0" label="Select a year"
                                                                        selected="selected">انتخاب یک سال</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="submit" class="btn btn-primary m-0"><span>ذخیره
                                                            کارت</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- پایان ویرایش کارت بانکی Modal -->
                                </div>
                            </div>
                        </div>
                        <!-- End Saved Cards -->

                        <!-- Profile -->
                        <div class="tab-pane fade h-100" id="profile">
                            <div class="profile-card mt-0 h-100">
                                <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                    <h2 class="mb-0">نمایه</h2>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editProfileModal"><i class="icon anm anm-plus-r ms-1"></i>
                                        ویرایش</button>
                                </div>
                                <div class="profile-book-section mb-4">
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">نام شرکت</h6>
                                        </div>
                                        <div class="right">
                                            <p>فروشگاه مد</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">آدرس ایمیل</h6>
                                        </div>
                                        <div class="right">
                                            <p>info@example.com</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">شماره تلفن</h6>
                                        </div>
                                        <div class="right">
                                            <p dir="ltr">(+40) 123 456 7890</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">شهر / ایالت</h6>
                                        </div>
                                        <div class="right">
                                            <p>کالیفرنیا، باربادوس</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">کشور / منطقه</h6>
                                        </div>
                                        <div class="right">
                                            <p>ایالات متحده آمریکا</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">آدرس خیابان</h6>
                                        </div>
                                        <div class="right">
                                            <p>نام شرکت Inc</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">کد پستی</h6>
                                        </div>
                                        <div class="right">
                                            <p>2356830</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">دسته</h6>
                                        </div>
                                        <div class="right">
                                            <p>لباس</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">سال تاسیس</h6>
                                        </div>
                                        <div class="right">
                                            <p>2023</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">کل کارکنان</h6>
                                        </div>
                                        <div class="right">
                                            <p>58 - 100 نفر</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Profile Modal -->
                                <div class="modal fade" id="editProfileModal" tabindex="-1"
                                    aria-labelledby="editProfileModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="editProfileModalLabel">Edit Profile details
                                                </h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="edit-profile-from" method="post" action="#">
                                                    <div class="form-row">
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                                            <div
                                                                class="profileImg img-thumbnail shadow bg-white rounded-circle d-flex-justify-center position-relative mx-auto">
                                                                <img src="{{ asset('storage/images/users/user-img3.jpg') }}"
                                                                    class="rounded-circle" alt="profile" width="200"
                                                                    height="200" />
                                                                <div class="thumb-edit">
                                                                    <label for="profileUpload"
                                                                        class="d-flex-center justify-content-center position-absolute top-0 start-100 translate-middle p-2 rounded-circle shadow btn btn-secondary mt-3"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="ویرایش"><i
                                                                            class="icon anm anm-pencil-ar an-1x"></i></label>
                                                                    <input type="file" id="profileUpload"
                                                                        class="image-upload d-none" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="editProfile-Companyname" class="d-none">Company
                                                                name</label>
                                                            <input name="editProfile-Companyname"
                                                                placeholder="Company name" value=""
                                                                id="editProfile-Companyname" type="text" />
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="editProfile-Emailaddress" class="d-none">Email
                                                                address</label>
                                                            <input name="editProfile-Emailaddress"
                                                                placeholder="Email address" value=""
                                                                id="editProfile-Emailaddress" type="email" />
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="editProfile-Phonenumber" class="d-none">Phone
                                                                number</label>
                                                            <input name="editProfile-Phonenumber"
                                                                placeholder="Phone number" value=""
                                                                id="editProfile-Phonenumber" type="text" />
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="editProfile-zone" class="d-none">City / State
                                                                <span class="required">*</span></label>
                                                            <select name="editProfile_zone_id" id="editProfile-zone">
                                                                <option value="">Select Region / State</option>
                                                                <option value="AL">Alabama</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="AZ">Arizona</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="CA">California</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="editProfile-country" class="d-none">Country /
                                                                Region <span class="required">*</span></label>
                                                            <select name="editProfile_country_id"
                                                                id="editProfile-country">
                                                                <option value="">Select Country / Region</option>
                                                                <option value="AI" label="آنگویلا">آنگویلا</option>
                                                                <option value="AG" label="آنتیگوا و باربودا">آنتیگوا
                                                                    و باربودا</option>
                                                                <option value="AR" label="آرژانتین">آرژانتین
                                                                </option>
                                                                <option value="AW" label="آروبا">آروبا</option>
                                                                <option value="BS" label="باهاما">باهاما</option>
                                                                <option value="BB" label="باربادوس">باربادوس
                                                                </option>
                                                                <option value="BZ" label="بلیز">بلیز</option>
                                                                <option value="BM" label="برمودا">برمودا</option>
                                                                <option value="BO" label="بولیوی">بولیوی</option>
                                                                <option value="BR" label="برزيل">برزيل</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="editProfile-Streetaddress" class="d-none">Street
                                                                address</label>
                                                            <input name="editProfile-Streetaddress"
                                                                placeholder="Street address" value=""
                                                                id="editProfile-Streetaddress" type="text" />
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="editProfile-Zipcode" class="d-none">Zip
                                                                code</label>
                                                            <input name="editProfile-Zipcode" placeholder="Zip code"
                                                                value="" id="editProfile-Zipcode"
                                                                type="text" />
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="editProfile-Category"
                                                                class="d-none">Category</label>
                                                            <input name="editProfile-Category"
                                                                placeholder="Phone number" value=""
                                                                id="editProfile-Category" type="text" />
                                                        </div>
                                                        <div
                                                            class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-md-0">
                                                            <label for="editProfile-YearEstablished" class="d-none">Year
                                                                Established</label>
                                                            <input name="editProfile-YearEstablished"
                                                                placeholder="YearEstablished" value=""
                                                                id="editProfile-YearEstablished" type="text" />
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-0">
                                                            <label for="editProfile-TotalEmployees" class="d-none">Zip
                                                                code</label>
                                                            <input name="editProfile-TotalEmployees"
                                                                placeholder="Zip code" value=""
                                                                id="editProfile-TotalEmployees" type="text" />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="submit" class="btn btn-primary m-0"><span>Save
                                                        Profile</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Edit Profile Modal -->

                                <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                    <h2 class="mb-0">Login details</h2>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editLoginModal"><i class="icon anm anm-plus-r ms-1"></i>
                                        Edit</button>
                                </div>
                                <div class="profile-login-section">
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">Email address</h6>
                                        </div>
                                        <div class="right">
                                            <p>info@example.com</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">Phone number</h6>
                                        </div>
                                        <div class="right">
                                            <p dir="ltr">(+40) 123 456 7890</p>
                                        </div>
                                    </div>
                                    <div class="details d-flex align-items-center mb-2">
                                        <div class="left">
                                            <h6 class="mb-0 body-font fw-500">Password</h6>
                                        </div>
                                        <div class="right">
                                            <p>xxxxxxx</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Login details Modal -->
                                <div class="modal fade" id="editLoginModal" tabindex="-1"
                                    aria-labelledby="editLoginModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="editLoginModalLabel">Edit Login details</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="edit-Loginprofile-from" method="post" action="#">
                                                    <div
                                                        class="form-row row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1">
                                                        <div class="form-group">
                                                            <label for="editLogin-Emailaddress" class="d-none">Email
                                                                address <span class="required">*</span></label>
                                                            <input name="editLogin-Emailaddress"
                                                                placeholder="Email address" value=""
                                                                id="editLogin-Emailaddress" type="email" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="editLogin-Phonenumber" class="d-none">Phone
                                                                number <span class="required">*</span></label>
                                                            <input name="editLogin-Phonenumber"
                                                                placeholder="Phone number" value=""
                                                                id="editLogin-Phonenumber" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="editLogin-Password" class="d-none">Current
                                                                Password <span class="required">*</span></label>
                                                            <input name="editLogin-Password"
                                                                placeholder="Current Password" value=""
                                                                id="editLogin-Password" type="password" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="editLogin-NewPassword" class="d-none">New
                                                                Password <span class="required">*</span></label>
                                                            <input name="editLogin-NewPassword"
                                                                placeholder="New Password" value=""
                                                                id="editLogin-NewPassword" type="password" />
                                                            <small class="form-text text-muted">Your password must be 8-20
                                                                characters long, contain letters and numbers, and must not
                                                                contain spaces, special characters.</small>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="editLogin-Verify" class="d-none">Verify <span
                                                                    class="required">*</span></label>
                                                            <input name="editLogin-Verify" placeholder="Verify"
                                                                value="" id="editLogin-Verify" type="text" />
                                                            <small class="form-text text-muted">To confirm, type the new
                                                                password again.</small>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="submit" class="btn btn-primary m-0"><span>Save
                                                        changes</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Edit Login details Modal -->
                            </div>
                        </div>
                        <!-- End Profile -->

                        <!-- Security -->
                        <div class="tab-pane fade h-100" id="security">
                            <div class="settings-card mt-0 h-100">
                                <div class="dashboard-title d-flex-justify-center justify-content-between mb-4">
                                    <h2 class="mb-0">Settings</h2>
                                </div>

                                <div class="settings-book-section dashboard-detail">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="account-setting">
                                                <h4 class="mb-3">Notifications</h4>
                                                <div class="account-detail form-group">
                                                    <div class="customCheckbox clearfix mb-2">
                                                        <input name="NotificationsAC" id="n1" value="1"
                                                            checked="checked" type="checkbox" />
                                                        <label for="n1" class="mb-0">Allow Desktop
                                                            Notifications</label>
                                                    </div>
                                                    <div class="customCheckbox clearfix mb-2">
                                                        <input name="NotificationsAC" id="n2" value="2"
                                                            type="checkbox" />
                                                        <label for="n2" class="mb-0">Enable
                                                            Notifications</label>
                                                    </div>
                                                    <div class="customCheckbox clearfix mb-2">
                                                        <input name="NotificationsAC" id="n3" value="3"
                                                            type="checkbox" />
                                                        <label for="n3" class="mb-0">Get notification for my own
                                                            activity</label>
                                                    </div>
                                                    <div class="customCheckbox clearfix mb-2">
                                                        <input name="NotificationsAC" id="n4" value="4"
                                                            type="checkbox" />
                                                        <label for="n4" class="mb-0">Receive offers from our
                                                            partners</label>
                                                    </div>
                                                    <div class="customCheckbox clearfix mb-2">
                                                        <input name="NotificationsAC" id="n5" value="5"
                                                            type="checkbox" />
                                                        <label for="n5" class="mb-0">Sign up for our
                                                            newsletter</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="account-setting">
                                                <h4 class="mb-3">Deactivate account</h4>
                                                <div class="account-detail form-group">
                                                    <div class="customRadio clearfix mb-2">
                                                        <input name="DeactivateAC" id="d1" value="1"
                                                            checked="checked" type="radio" />
                                                        <label for="d1" class="mb-0">I have a privacy
                                                            concern</label>
                                                    </div>
                                                    <div class="customRadio clearfix mb-2">
                                                        <input name="DeactivateAC" id="d2" value="2"
                                                            type="radio" />
                                                        <label for="d2" class="mb-0">This is temporary</label>
                                                    </div>
                                                    <div class="customRadio clearfix mb-2">
                                                        <input name="DeactivateAC" id="d3" value="3"
                                                            type="radio" />
                                                        <label for="d3" class="mb-0">Other</label>
                                                    </div>
                                                    <button type="button" class="btn btn-sm my-2">Deactivate
                                                        Account</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-setting">
                                        <h4 class="mb-3">Delete account</h4>
                                        <div class="account-detail form-group">
                                            <div class="customRadio clearfix mb-2">
                                                <input name="DeleteAC" id="da1" value="1"
                                                    checked="checked" type="radio" />
                                                <label for="da1" class="mb-0">No longer usable</label>
                                            </div>
                                            <div class="customRadio clearfix mb-2">
                                                <input name="DeleteAC" id="da2" value="2"
                                                    type="radio" />
                                                <label for="da2" class="mb-0">Want to switch on other
                                                    account</label>
                                            </div>
                                            <div class="customRadio clearfix mb-2">
                                                <input name="DeleteAC" id="da3" value="3"
                                                    type="radio" />
                                                <label for="da3" class="mb-0">Other</label>
                                            </div>
                                            <button type="button" class="btn btn-sm my-2">Delete Account</button>
                                        </div>
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
