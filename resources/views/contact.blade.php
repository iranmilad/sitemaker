@extends('layouts.app')
@section('title', 'تماس با ما')
@section('body', 'contact-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>تماس با ما استایل 1</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="بازگشت به صفحه اصلی">صفحه اصلی</a><span
                                class="title"><i class="icon anm anm-angle-left-l"></i>صفحات</span><span
                                class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i>تماس با ما استایل
                                1</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <div class="container contact-style1">
            <!-- فرم تماس - جزئیات -->
            <div class="contact-form-details section pt-0">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <!-- فرم تماس -->
                        <div class="formFeilds contact-form form-vertical mb-4 mb-md-0">
                            <div class="section-header">
                                <h2>بیایید با هم تماس بگیریم!</h2>
                                <p>شما می توانید به هر طریقی که برای شما مناسب است با ما تماس بگیرید. ما 24/7 از طریق فکس یا
                                    ایمیل در دسترس هستیم. همچنین می توانید از فرم تماس سریع زیر استفاده کنید یا شخصاً به
                                    دفتر ما مراجعه کنید. خوشحال می شویم به سوالات شما پاسخ دهیم.</p>
                            </div>

                            <form name="contactus" method="post" id="contact-form" class="contact-form">
                                <div class="form-row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" id="ContactFormName" name="name" class="form-control"
                                                placeholder="نام" />
                                            <span class="error_msg" id="name_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" id="ContactFormEmail" name="email" class="form-control"
                                                placeholder="ایمیل" />
                                            <span class="error_msg" id="email_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" id="ContactFormPhone" name="phone"
                                                pattern="[0-9\-]*" placeholder="شماره تلفن" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" id="ContactSubject" name="subject" class="form-control"
                                                placeholder="عنوان" />
                                            <span class="error_msg" id="subject_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <textarea id="ContactFormMessage" name="message" class="form-control" rows="5" placeholder="پیام"></textarea>
                                            <span class="error_msg" id="message_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group mailsendbtn mb-0 w-100">
                                            <input class="btn btn-lg" type="submit" name="contactus" value="ارسال پیام" />
                                            <div class="loading"><img class="img-fluid"
                                                    src="{{ asset('storage/images/icons/ajax-loader.gif') }}"
                                                    alt="منتظر بمانید" width="16" height="16"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="response-msg"></div>
                        </div>
                        <!-- پایان فرم تماس -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <!-- اطلاعات تماس -->
                        <div class="contact-details bg-block">
                            <h3 class="mb-3 fs-5">اطلاعات ذخیره</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2 address">
                                    <strong class="d-block mb-2">آدرس :</strong>
                                    <p><i class="icon anm anm-map-marker-al ms-2 d-none"></i> 123، نام شرکت، نام شهر خیابان
                                        خیابان، نام ایالت و کد پستی.</p>
                                </li>
                                <li class="mb-2 phone"><strong>تلفن :</strong><i class="icon anm anm-phone ms-2 d-none"></i>
                                    <a href="tel:401234567890 " dir="ltr">(+40) 123 456 7890</a></li>
                                <li class="mb-0 email"><strong dir="ltr">:ایمیل </strong><i
                                        class="icon anm anm-envelope-l ms-2 d-none"></i> <a
                                        href="mailto:contact@example.com">contact@example.com</a></li>
                            </ul>
                            <hr>
                            <div class="open-hours">
                                <strong class="d-block mb-2">ساعت کاری</strong>
                                <p class="lh-lg">
                                    دوشنبه - شنبه: 9:30 صبح تا 6:30 عصر<br>
                                    یکشنبه: 11:00 صبح تا 5:00 بعد از ظهر
                                </p>
                            </div>
                            <hr>
                            <div class="follow-us">
                                <label class="d-block mb-3"><strong>در ارتباط بمانید</strong></label>
                                <ul class="list-inline social-icons">
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="فیس بوک"><i
                                                class="icon anm anm-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="توییتر"><i
                                                class="icon anm anm-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="پینترست"><i
                                                class="icon anm anm-pinterest-p"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="لینکدین"><i
                                                class="icon anm anm-linkedin-in"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="گوگل پلاس"><i
                                                class="icon anm anm-google-plus-g"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="واتس اپ"><i
                                                class="icon anm anm-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- پایان اطلاعات تماس -->
                    </div>
                </div>
            </div>
            <!-- پایان فرم تماس - جزئیات -->

            <!-- نقشه تماس -->
            <div class="contact-maps section p-0">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="map-section ratio ratio-16x9">
                            <iframe class="rounded-5" src="https://www.google.com/maps/embed?pb=" allowfullscreen=""
                                height="650"></iframe>
                            <div class="map-section-overlay-wrapper">
                                <div class="map-section-overlay rounded-0">
                                    <h3>فروشگاه ما</h3>
                                    <div class="content mb-3">
                                        <p class="mb-2">123، نام شرکت شما،<br>تورنتو، کانادا</p>
                                        <p>دوشنبه - جمعه، 10 صبح تا 9 بعد از ظهر<br>شنبه، 11 صبح تا 9 بعد از ظهر<br>یکشنبه،
                                            11 صبح تا 5 بعد از ظهر</p>
                                    </div>
                                    <p><a href="https://www.google.com/maps?daddr=80+Spadina+Ave,+Toronto"
                                            class="btn btn-secondary btn-sm">دریافت مسیرها</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- پایان نقشه تماس -->
        </div>
        <!--پایان محتوای اصلی-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

    @section('js')
    <script src="{{ Vite::asset('resources/js/ajax_sendmail.js') }}"></script>
    @endsection

@endsection
