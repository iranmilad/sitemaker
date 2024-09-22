<div class="footer footer-4">
    <div class="footer-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                    <x-footer-menu :alias="'quick_access'" style="1" />
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                    <h4 class="h4 text-uppercase">حساب من</h4>
                    <ul>
                        <li><a href="{{ route('register') }}">ثبت نام</a></li>
                        <li><a href="{{ route('login') }}">ورود به سیستم</a></li>
                        <li><a href="{{ route('dashboard.home') }}">حساب من</a></li>
                        <li><a href="{{ route('about-us') }}"> درباره ما</a></li>
                        <li><a href="{{ route('favorites') }}">لیست علاقه مندی ها</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                    <x-footer-menu :alias="'categories_footer'"  style="1"/>
                </div>
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
            </div>
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="row">
                <ul class="list-inline social-icons d-inline-flex align-items-center justify-content-center justify-content-sm-start col-12 col-sm-6 col-lg-4 d-none">
                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="فیس بوک"><i class="icon anm anm-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="توییتر"><i class="icon anm anm-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="پینترست"><i class="icon anm anm-pinterest-p"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="لینکدین"><i class="icon anm anm-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="اینستاگرام"><i class="icon anm anm-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="یوتیوب"><i class="icon anm anm-youtube"></i></a></li>
                </ul>
                <div class="copytext text-center col-12 col-md-12 col-lg-4 order-2 order-lg-0 mt-3 mt-lg-0">&copy; 2024 تمامی حقوق برای فروشگاه ساز محفوظ است.</div>

            </div>
        </div>
    </div>
</div>
