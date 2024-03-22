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
                        <div class="breadcrumbs"><a href="index.html" title="بازگشت به صفحه اصلی">صفحه اصلی</a><span
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
                                    data-src="{{ asset('storage/images/users/user-img2.jpg') }}"
                                    src="{{ asset('storage/images/users/user-img3.jpg') }}" alt="user" width="130" />
                            </div>
                            <div class="profile-detail">
                                <h3 class="mb-1">جکنو جانسن</h3>
                                <p class="text-muted">info@example.com</p>
                            </div>
                        </div>
                        <div class="dashboard-tab">
                            <ul class="nav nav-tabs flex-lg-column border-bottom-0" id="top-tab" role="tablist">
                                <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#info"
                                        class="nav-link active">اطلاعات حساب</a></li>
                                <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#address"
                                        class="nav-link">دفتر آدرس</a> </li>
                                <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#orders"
                                        class="nav-link">سفارشات من</a> </li>
                                <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#orderstracking"
                                        class="nav-link">ردیابی سفارش‌ها</a> </li>
                                <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#wishlist"
                                        class="nav-link">لیست خواسته‌های من</a> </li>
                                <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#payment"
                                        class="nav-link">کارت‌های ذخیره‌شده</a> </li>
                                <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#profile"
                                        class="nav-link">نمایه</a></li>
                                <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#security"
                                        class="nav-link">تنظیمات</a> </li>
                                <li class="nav-item"><a href="login.html" class="nav-link">خروج از سیستم</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Dashboard sidebar -->
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="dashboard-content tab-content h-100" id="top-tabContent">
                        <!-- اطلاعات حساب -->
                        <div class="tab-pane fade h-100 show active" id="info">
                            <div class="account-info h-100">
                                <div class="welcome-msg mb-4">
                                    <h2>سلام، <span class="text-primary">جکنو جانسن</span></h2>
                                    <p>از داشبورد حساب من می توانید یک عکس فوری از فعالیت اخیر حساب خود را مشاهده کرده و
                                        اطلاعات حساب خود را به روز کنید. پیوند زیر را برای مشاهده یا ویرایش اطلاعات انتخاب
                                        کنید.</p>
                                </div>

                                <div class="row g-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 row-cols-1 mb-4">
                                    <div class="counter-box">
                                        <div class="bg-block d-flex-center flex-nowrap">
                                            <img class="blur-up lazyload"
                                                data-src="{{ asset('storage/images/icons/sale.png') }}"
                                                src="{{ asset('storage/images/icons/sale.png') }}" alt="آیکن"
                                                width="64" height= "64" />
                                            <div class="content">
                                                <h3 class="fs-5 mb-1 text-primary">238</h3>
                                                <p>کل سفارش</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="counter-box">
                                        <div class="bg-block d-flex-center flex-nowrap">
                                            <img class="blur-up lazyload"
                                                data-src="{{ asset('storage/images/icons/homework.png') }}"
                                                src="{{ asset('storage/images/icons/homework.png') }}" alt="آیکن"
                                                width="64" height= "64" />
                                            <div class="content">
                                                <h3 class="fs-5 mb-1 text-primary">124</h3>
                                                <p>سفارشات معلق</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="counter-box">
                                        <div class="bg-block d-flex-center flex-nowrap">
                                            <img class="blur-up lazyload"
                                                data-src="{{ asset('storage/images/icons/order.png') }}"
                                                src="{{ asset('storage/images/icons/order.png') }}" alt="آیکن"
                                                width="64" height= "64" />
                                            <div class="content">
                                                <h3 class="fs-5 mb-1 text-primary">102</h3>
                                                <p>در انتظار پرداخت‌ها</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="account-box">
                                    <h3 class="mb-3">اطلاعات حساب</h3>
                                    <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                        <div class="box-info mb-4">
                                            <div class="box-title d-flex-center">
                                                <h4>اطلاعات تماس</h4> <a href="#"
                                                    class="btn-link me-auto">ویرایش</a>
                                            </div>
                                            <div class="box-content mt-3">
                                                <h5>هما جنسون</h5>
                                                <p class="mb-2">info@example.com</p>
                                                <p><a href="#" class="btn-link">تغییر رمز عبور</a></p>
                                            </div>
                                        </div>
                                        <div class="box-info mb-4">
                                            <div class="box-title d-flex-center">
                                                <h4>خبرنامه</h4> <a href="#" class="btn-link me-auto">ویرایش</a>
                                            </div>
                                            <div class="box-content mt-3">
                                                <p>شما در حال حاضر مشترک هیچ خبرنامه ای نیستید.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-info mb-4">
                                        <div class="box-title d-flex-center">
                                            <h4>کتاب آدرس</h4> <a href="#" class="btn-link me-auto">ویرایش</a>
                                        </div>
                                        <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                            <div class="box-content mt-3">
                                                <h5>آدرس صورتحساب پیش فرض</h5>
                                                <address class="mb-2">نام شرکت <br />نام شهر خیابان خیابان، <br />نام
                                                    ایالت و کد پستی.</address>
                                                <p><a href="#" class="btn-link">ویرایش آدرس</a></p>
                                            </div>
                                            <div class="box-content mt-3">
                                                <h5>آدرس پیش فرض ارسال</h5>
                                                <address class="mb-2">شما آدرس حمل و نقل پیش‌فرض تنظیم نکرده‌اید.
                                                </address>
                                                <p><a href="#" class="btn-link">ویرایش آدرس</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Account Info -->

                        <!-- Address Book -->
                        <div class="tab-pane fade h-100" id="address">
                            <div class="address-card mt-0 h-100">
                                <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                    <h2 class="mb-0">کتاب آدرس</h2>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addNewModal"><i class="icon anm anm-plus-r ms-1"></i> افزودن
                                        جدید</button>
                                    <!-- مدال آدرس جدید -->
                                    <div class="modal fade" id="addNewModal" tabindex="-1"
                                        aria-labelledby="addNewModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="modal-title" id="addNewModalLabel">جزئیات آدرس</h2>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="add-address-from" method="post" action="#">
                                                        <div
                                                            class="form-row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                                            <div class="form-group">
                                                                <label for="new-name" class="d-none">نام</label>
                                                                <input name="name" placeholder="Name" value=""
                                                                    id="new-name" type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-type" class="d-none">نوع آدرس <span
                                                                        class="required">*</span></label>
                                                                <select name="new_type_id" id="new-type">
                                                                    <option value="">نوع آدرس را انتخاب کنید</option>
                                                                    <option value="home">صفحه اصلی</option>
                                                                    <option value="office">دفتر</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-company" class="d-none">شرکت</label>
                                                                <input name="company" placeholder="Company"
                                                                    value="" id="new-company" type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-apartment" class="d-none">آپارتمان <span
                                                                        class="required">*</span></label>
                                                                <input name="apartment" placeholder="Apartment"
                                                                    value="" id="new-apartment" type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-street-address" class="d-none">آدرس خیابان
                                                                    <span class="required">*</span></label>
                                                                <input name="street_address" placeholder="آدرس خیابان"
                                                                    value="" id="new-street-address"
                                                                    type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-city" class="d-none">شهر <span
                                                                        class="required">*</span></label>
                                                                <input name="city" placeholder="City" value=""
                                                                    id="new-city" type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-postcode" class="d-none">کد پستی <span
                                                                        class="required">*</span></label>
                                                                <input name="postcode" placeholder="کد پستی"
                                                                    value="" id="new-postcode" type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-telephone" class="d-none">تلفن <span
                                                                        class="required">*</span></label>
                                                                <input name="telephone" placeholder="Telephone"
                                                                    value="" id="new-telephone" type="tel">
                                                            </div>
                                                            <div class="form-group mb-md-0">
                                                                <label for="new-zone" class="d-none">منطقه / ایالت <span
                                                                        class="required">*</span></label>
                                                                <select name="new_zone_id" id="new-zone">
                                                                    <option value="">منطقه / ایالت را انتخاب کنید
                                                                    </option>
                                                                    <option value="AL">آلاباما</option>
                                                                    <option value="AK">آلاسکا</option>
                                                                    <option value="AZ">آریزونا</option>
                                                                    <option value="AR">آرکانزاس</option>
                                                                    <option value="CA">کالیفرنیا</option>
                                                                    <option value="CO">کلرادو</option>
                                                                    <option value="CT">کانکتیکات</option>
                                                                    <option value="DE">دلاور</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="new-country" class="d-none">کشور <span
                                                                        class="required">*</span></label>
                                                                <select name="new_country_id" id="new-country">
                                                                    <option value="">کشور را انتخاب کنید</option>
                                                                    <option value="AI" label="آنگویلا">آنگویلا
                                                                    </option>
                                                                    <option value="AG" label="آنتیگوا و باربودا">
                                                                        آنتیگوا و باربودا</option>
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
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="submit" class="btn btn-primary m-0"><span>افزودن
                                                            آدرس</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End New Address Modal -->
                                </div>

                                <div class="address-book-section">
                                    <div class="row g-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                        <div class="address-select-box active">
                                            <div class="address-box bg-block">
                                                <div class="top d-flex-justify-center justify-content-between mb-3">
                                                    <h5 class="m-0">هما جکنو</h5>
                                                    <span class="product-labels start-auto end-0"><span
                                                            class="lbl pr-label1">صفحه اصلی</span></span>
                                                </div>
                                                <div class="middle">
                                                    <div class="address mb-2 text-muted">
                                                        <address class="m-0">123، The Company Name Inc، <br />نام شهر
                                                            خیابان خیابان، <br />نام ایالت و کد پستی.</address>
                                                    </div>
                                                    <div class="number">
                                                        <p>تلفن همراه: <a href="tel:401234567890" dir="ltr">(+40) 123
                                                                456 7890</a></p>
                                                    </div>
                                                </div>
                                                <div class="bottom d-flex-justify-center justify-content-between">
                                                    <button type="button" class="bottom-btn btn btn-gray btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#addEditModal">ویرایش</button>
                                                    <button type="button"
                                                        class="bottom-btn btn btn-gray btn-sm">حذف</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="address-select-box">
                                            <div class="address-box bg-block">
                                                <div class="top d-flex-justify-center justify-content-between mb-3">
                                                    <h5 class="m-0">هما جکنو</h5>
                                                    <span class="product-labels start-auto end-0"><span
                                                            class="lbl pr-label4">دفتر</span></span>
                                                </div>
                                                <div class="middle">
                                                    <div class="address mb-2 text-muted">
                                                        <address class="m-0">123، The Company Name Inc، <br />نام شهر
                                                            خیابان خیابان، <br />نام ایالت و کد پستی.</address>
                                                    </div>
                                                    <div class="number">
                                                        <p>تلفن همراه: <a href="tel:401234567890" dir="ltr">(+40) 123
                                                                456 7890</a></p>
                                                    </div>
                                                </div>
                                                <div class="bottom d-flex-justify-center justify-content-between">
                                                    <button type="button" class="bottom-btn btn btn-gray btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#addEditModal">ویرایش</button>
                                                    <button type="button"
                                                        class="bottom-btn btn btn-gray btn-sm">حذف</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ویرایش Address Modal -->
                                    <div class="modal fade" id="addEditModal" tabindex="-1"
                                        aria-labelledby="addEditModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="modal-title" id="addEditModalLabel">ویرایش جزئیات آدرس</h2>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="edit-address-from" method="post" action="#">
                                                        <div
                                                            class="form-row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                                            <div class="form-group">
                                                                <label for="edit-name" class="d-none">نام</label>
                                                                <input name="name" placeholder="Name" value=""
                                                                    id="edit-name" type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit-type" class="d-none">نوع آدرس <span
                                                                        class="required">*</span></label>
                                                                <select name="edit_type_id" id="edit-type">
                                                                    <option value="">نوع آدرس را انتخاب کنید</option>
                                                                    <option value="home">صفحه اصلی</option>
                                                                    <option value="office">دفتر</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit-company" class="d-none">شرکت</label>
                                                                <input name="company" placeholder="Company"
                                                                    value="" id="edit-company" type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit-apartment" class="d-none">آپارتمان <span
                                                                        class="required">*</span></label>
                                                                <input name="apartment" placeholder="Apartment"
                                                                    value="" id="edit-apartment" type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit-street-address" class="d-none">آدرس
                                                                    خیابان <span class="required">*</span></label>
                                                                <input name="street_address" placeholder="آدرس خیابان"
                                                                    value="" id="edit-street-address"
                                                                    type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit-city" class="d-none">شهر <span
                                                                        class="required">*</span></label>
                                                                <input name="city" placeholder="City" value=""
                                                                    id="edit-city" type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit-postcode" class="d-none">کد پستی <span
                                                                        class="required">*</span></label>
                                                                <input name="postcode" placeholder="کد پستی"
                                                                    value="" id="edit-postcode" type="text" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="edit-telephone" class="d-none">تلفن <span
                                                                        class="required">*</span></label>
                                                                <input name="telephone" placeholder="Telephone"
                                                                    value="" id="edit-telephone" type="tel">
                                                            </div>
                                                            <div class="form-group mb-md-0">
                                                                <label for="edit-zone" class="d-none">منطقه / ایالت <span
                                                                        class="required">*</span></label><select
                                                                    name="edit_zone_id" id="edit-zone">
                                                                    <option value="">منطقه / ایالت را انتخاب کنید
                                                                    </option>
                                                                    <option value="AL">آلاباما</option>
                                                                    <option value="AK">آلاسکا</option>
                                                                    <option value="AZ">آریزونا</option>
                                                                    <option value="AR">آرکانزاس</option>
                                                                    <option value="CA">کالیفرنیا</option>
                                                                    <option value="CO">کلرادو</option>
                                                                    <option value="CT">کانکتیکات</option>
                                                                    <option value="DE">دلاور</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="edit-country" class="d-none">کشور <span
                                                                        class="required">*</span></label>
                                                                <select name="edit_country_id" id="edit-country">
                                                                    <option value="">کشور را انتخاب کنید</option>
                                                                    <option value="AI" label="آنگویلا">آنگویلا
                                                                    </option>
                                                                    <option value="AG" label="آنتیگوا و باربودا">
                                                                        آنتیگوا و باربودا</option>
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
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="submit" class="btn btn-primary m-0"><span>ذخیره
                                                            آدرس</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- پایان ویرایش آدرس آدرس -->
                                </div>
                            </div>
                        </div>
                        <!-- End Address Book -->

                        <!-- My Orders -->
                        <div class="tab-pane fade h-100" id="orders">
                            <div class="orders-card mt-0 h-100">
                                <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                    <h2 class="mb-0">سفارشات من</h2>
                                </div>

                                <div class="table-bottom-brd table-responsive">
                                    <table class="table align-middle text-center order-table">
                                        <thead>
                                            <tr class="table-head text-nowrap">
                                                <th scope="col">تصویر</th>
                                                <th scope="col">شناسه سفارش</th>
                                                <th scope="col">جزئیات محصول</th>
                                                <th scope="col">قیمت</th>
                                                <th scope="col">وضعیت</th>
                                                <th scope="col">مشاهده</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="blur-up lazyload"
                                                        data-src="{{ asset('storage/images/products/product1-120x170.jpg') }}"
                                                        src="{{ asset('storage/images/products/product1-120x170.jpg') }}"
                                                        width="50" alt="محصول" title="محصول" /></td>
                                                <td><span class="id">#12301</span></td>
                                                <td><span class="name">پیراهن کوبایی آکسفورد</span></td>
                                                <td><span class="price fw-500">99.00 تومان </span></td>
                                                <td><span class="badge rounded-pill bg-success custom-badge">ارسال
                                                        شد</span></td>
                                                <td><a href="product-layout1.html" class="view"><i
                                                            class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><img class="blur-up lazyload"
                                                        data-src="{{ asset('storage/images/products/product2-120x170.jpg') }}"
                                                        src="{{ asset('storage/images/products/product2-120x170.jpg') }}"
                                                        width="50" alt="محصول" title="محصول" /></td>
                                                <td><span class="id">#12302</span></td>
                                                <td><span class="name">کلاه کاف</span></td>
                                                <td><span class="price fw-500">128.00 تومان </span></td>
                                                <td><span class="badge rounded-pill bg-danger custom-badge">در
                                                        انتظار</span></td>
                                                <td><a href="product-layout2.html" class="view"><i
                                                            class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><img class="blur-up lazyload"
                                                        data-src="{{ asset('storage/images/products/product3-120x170.jpg') }}"
                                                        src="{{ asset('storage/images/products/product3-120x170.jpg') }}"
                                                        width="50" alt="محصول" title="محصول" /></td>
                                                <td><span class="id">#12303</span></td>
                                                <td><span class="name">پیراهن یقه فلانل</span></td>
                                                <td><span class="price fw-500">114.00 تومان </span></td>
                                                <td><span class="badge rounded-pill bg-dark custom-badge">در حال
                                                        پردازش</span></td>
                                                <td><a href="product-layout3.html" class="view"><i
                                                            class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><img class="blur-up lazyload"
                                                        data-src="{{ asset('storage/images/products/product4-120x170.jpg') }}"
                                                        src="{{ asset('storage/images/products/product4-120x170.jpg') }}"
                                                        width="50" alt="محصول" title="محصول" /></td>
                                                <td><span class="id">#12304</span></td>
                                                <td><span class="name">هودی کلاه دار نخی</span></td>
                                                <td><span class="price fw-500">198.00 تومان </span></td>
                                                <td><span class="badge rounded-pill bg-secondary custom-badge">لغو
                                                        شد</span></td>
                                                <td><a href="product-layout4.html" class="view"><i
                                                            class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End My Orders -->

                        <!-- Orders tracking -->
                        <div class="tab-pane fade h-100" id="orderstracking">
                            <div class="orders-card mt-0 h-100">
                                <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                    <h2 class="mb-0">ردیابی سفارشات</h2>
                                </div>

                                <form class="orderstracking-from" method="post" action="#">
                                    <p class="mb-3">برای پیگیری سفارش خود لطفاً شناسه سفارش خود را در کادر زیر وارد کنید
                                        و دکمه "ردیابی" را فشار دهید. این در رسید و در ایمیل تأییدی که باید دریافت می‌کردید
                                        به شما داده شد.</p>
                                    <div class="row align-items-center">
                                        <div class="form-group col-md-5 col-lg-5">
                                            <label for="orderId" class="d-none">شناسه سفارش <span
                                                    class="required-f">*</span></label>
                                            <input name="orderId" placeholder="Order ID" value="" id="orderId"
                                                type="text" مورد نیاز>
                                        </div>
                                        <div class="form-group col-md-5 col-lg-5">
                                            <label for="billingEmail" class="d-none">ایمیل صورت‌حساب <span
                                                    class="required-f">*</span></label>
                                            <input name="billingEmail" placeholder="ایمیل صورت‌حساب" value=""
                                                id="billingEmail" type="text" مورد نیاز>
                                        </div>
                                        <div class="form-group col-md-2 col-lg-2">
                                            <button type="submit" class="btn rounded w-100"><span>آهنگ</span></button>
                                        </div>
                                    </div>
                                </form>

                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <h3>وضعیت سفارش شماره: 000123</h3>
                                        <!-- ترتیب وضعیت -->
                                        <div class="row mt-3">
                                            <div class="col-lg-2 col-md-3 col-sm-4">
                                                <div class="product-img mb-3 mb-sm-0">
                                                    <img class="rounded-0 blur-up lazyload"
                                                        data-src="{{ asset('storage/images/products/orders-tracking-product.jpg') }}"
                                                        src="{{ asset('storage/images/products/orders-tracking-product.jpg') }}"
                                                        alt ="product" title="" width="545" height="700" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-sm-8">
                                                <div class="tracking-detail d-flex-center">
                                                    <ul>
                                                        <li>
                                                            <div class="left"><span>نام سفارش</span></div>
                                                            <div class="right"><span>کلاه کاف</span></div>
                                                        </li>
                                                        <li>
                                                            <div class="left"><span>شماره مشتری</span></div>
                                                            <div class="right"><span>000123</span></div>
                                                        </li>
                                                        <li>
                                                            <div class="left"><span>تاریخ سفارش</span></div>
                                                            <div class="right"><span>14 نوامبر 2021</span></div>
                                                        </li>
                                                        <li>
                                                            <div class="left"><span>تاریخ ارسال</span></div>
                                                            <div class="right"><span>16 نوامبر 2021</span></div>
                                                        </li>
                                                        <li>
                                                            <div class="left"><span>آدرس حمل و نقل</span></div>
                                                            <div class="right"><span>55 Gallaxy Enque, 2568 steet, 23568
                                                                    NY</span></div>
                                                        </li>
                                                        <li>
                                                            <div class="left"><span>شرکت حامل</span></div>
                                                            <div class="right"><span>Ipsum</span></div>
                                                        </li>
                                                        <li>
                                                            <div class="left"><span>شماره پیگیری شرکت مخابراتی</span>
                                                            </div>
                                                            <div class="right"><span>000123</span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 mt-4 mt-lg-0">
                                                <div class="tracking-map map-section ratio ratio-16x9 h-100">
                                                    <iframe src="https://www.google.com/maps/embed?pb=" allowfullscreen=""
                                                        height="650"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Status Order -->
                                        <!-- Tracking Steps -->
                                        <div class="tracking-steps nav mt-5 mb-4 clearfix">
                                            <div class="step done"><span>سفارش انجام شد</span></div>
                                            <div class="step done"><span>آماده شدن برای ارسال</span></div>
                                            <div class="step current"><span>ارسال شد</span></div>
                                            <div class="step"><span>تحویل شد</span></div>
                                        </div>
                                        <!-- پایان مراحل پیگیری -->
                                        <!-- جدول سفارش -->
                                        <div class="table-bottom-brd table-responsive">
                                            <table class="table align-middle text-center order-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">تاریخ</th>
                                                        <th scope="col">زمان</th>
                                                        <th scope="col">توضیح</th>
                                                        <th scope="col">مکان</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>14 مه 2023</td>
                                                        <td>08.00 صبح</td>
                                                        <td><span class="badge rounded-pill bg-success custom-badge">ارسال
                                                                شد</span></td>
                                                        <td>کانادا</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15 مه 2023</td>
                                                        <td>12:00 صبح</td>
                                                        <td><span class="badge rounded-pill bg-dark custom-badge">اطلاعات
                                                                حمل و نقل دریافت شد</span></td>
                                                        <td>کالیفرنیا</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16 مه 2023</td>
                                                        <td>10.00 صبح</td>
                                                        <td><span class="badge rounded-pill bg-secondary custom-badge">اسکن
                                                                مبدأ</span></td>
                                                        <td>لاندون</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- پایان جدول سفارش -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Orders tracking -->

                        <!-- My Wishlist -->
                        <div class="tab-pane fade h-100" id="wishlist">
                            <div class="orders-card mt-0 h-100">
                                <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                    <h2 class="mb-0">لیست آرزوهای من</h2>
                                </div>

                                <div class="table-bottom-brd table-responsive">
                                    <table class="table align-middle text-center order-table">
                                        <thead>
                                            <tr class="table-head text-nowrap">
                                                <th scope="col">تصویر</th>
                                                <th scope="col">شناسه سفارش</th>
                                                <th scope="col">جزئیات محصول</th>
                                                <th scope="col">قیمت</th>
                                                <th scope="col">اقدام</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="blur-up lazyload"
                                                        data-src="{{ asset('storage/images/products/product1-120x170.jpg') }}"
                                                        src="{{ asset('storage/images/products/product1-120x170.jpg') }}"
                                                        width="50" alt="محصول" title="محصول" /></td>
                                                <td><span class="id">#12301</span></td>
                                                <td><span class="name">پیراهن کوبایی آکسفورد</span></td>
                                                <td><span class="price fw-500">99.00 تومان </span></td>
                                                <td><a href="cart-style1.html" class="btn btn-md text-nowrap">افزودن به
                                                        سبد خرید</a></td>
                                            </tr>
                                            <tr>
                                                <td><img class="blur-up lazyload"
                                                        data-src="{{ asset('storage/images/products/product2-120x170.jpg') }}"
                                                        src="{{ asset('storage/images/products/product2-120x170.jpg') }}"
                                                        width="50" alt="محصول" title="محصول" /></td>
                                                <td><span class="id">#12302</span></td>
                                                <td><span class="name">کلاه کاف</span></td>
                                                <td><span class="price fw-500">128.00 تومان </span></td>
                                                <td><a href="cart-style1.html" class="btn btn-md text-nowrap">افزودن به
                                                        سبد خرید</a></td>
                                            </tr>
                                            <tr>
                                                <td><img class="blur-up lazyload"
                                                        data-src="{{ asset('storage/images/products/product3-120x170.jpg') }}"
                                                        src="{{ asset('storage/images/products/product3-120x170.jpg') }}"
                                                        width="50" alt="محصول" title="محصول" /></td>
                                                <td><span class="id">#12303</span></td>
                                                <td><span class="name">پیراهن یقه فلانل</span></td>
                                                <td><span class="price fw-500">114.00 تومان </span></td>
                                                <td><a href="cart-style1.html" class="btn btn-md text-nowrap">افزودن به
                                                        سبد خرید</a></td>
                                            </tr>
                                            <tr>
                                                <td><img class="blur-up lazyload"
                                                        data-src="{{ asset('storage/images/products/product4-120x170.jpg') }}"
                                                        src="{{ asset('storage/images/products/product4-120x170.jpg') }}"
                                                        width="50" alt="محصول" title="محصول" /></td>
                                                <td><span class="id">#12304</span></td>
                                                <td><span class="name">هودی کلاه دار نخی</span></td>
                                                <td><span class="price fw-500">198.00 تومان </span></td>
                                                <td><a href="cart-style1.html" class="btn btn-md text-nowrap">افزودن به
                                                        سبد خرید</a></td>
                                            </tr>
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
