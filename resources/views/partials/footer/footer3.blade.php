<div class="footer footer-3">
        <div class="footer-logo-links clearfix">
            <div class="container">
                <div class="row align-iteme-center">
                    <div class="col-12 col-sm-12 col-md-2 col-lg-3">
                        <div class="ftr-logo text-md-start">
                            <img class="logoImg" src="{{ $setting->settings['logo'] }}" alt="{{ $setting->settings['site_title'] }}" title="{{ $setting->settings['site_title'] }}" width="149" height="39" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 my-3 my-md-0 d-none">
                        <ul class="list-inline inline-links left-brd text-uppercase d-flex-justify-center">
                            <li class="list-inline-item"><a href="#">وضعیت سفارش</a></li>
                            <li class="list-inline-item"><a href="#">بازگشت و مبادله</a></li>
                            <li class="list-inline-item"><a href="#">پرسش های متداول</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 d-none">
                        <ul class="list-inline social-icons d-flex-justify-center justify-content-md-end">
                            <li class="list-inline-item"><a class="d-flex-justify-center" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="فیس بوک"><i class="icon anm anm-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="d-flex-justify-center" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="توییتر"><i class="icon anm anm-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="d-flex-justify-center" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="پینترست"><i class="icon anm anm-pinterest-p"></i></a></li>
                            <li class="list-inline-item"><a class="d-flex-justify-center" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="لینکدین"><i class="icon anm anm-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a class="d-flex-justify-center" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="اینستاگرام"><i class="icon anm anm-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="d-flex-justify-center" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="یوتیوب"><i class="icon anm anm-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top clearfix">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-contact">
                        <x-footer-menu :alias="'footer_contact_us'"  style="1"/>
                        <ul class="social-list d-flex tw-justify-start mt-2 align-items-center tw-flex-wrap tw-w-full">
                            @foreach ($menus['social_media_menu']->childMenus  as $menu)
                            <li class="my-2 mx-2">
                                <a class="social-media-icon" href="{{ $menu->link }}">
                                    <img src="{{  $menu->icon }}" width="30" height="30" alt="">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links ps-lg-5">
                        <x-footer-menu :alias="'quick_access'" style="1" />
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links ps-lg-5">
                        <x-footer-menu :alias="'categories_footer'"  style="1"/>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links ps-lg-5">
                        <h4 class="h4">حساب من</h4>
                        <ul>
                            <li><a href="{{ route('register') }}">ثبت نام</a></li>
                            <li><a href="{{ route('login') }}">ورود به سیستم</a></li>
                            <li><a href="{{ route('dashboard.home') }}">حساب من</a></li>
                            <li><a href="{{ route('about-us') }}"> درباره ما</a></li>
                            <li><a href="{{ route('favorites') }}">لیست علاقه مندی ها</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom clearfix">
            <div class="container">
                <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">

                    <div class="copytext">&copy; 2024 تمامی حقوق برای فروشگاه ساز محفوظ است.</div>
                </div>
            </div>
        </div>
    </div>
