<div class="footer footer-8 border-top">
    <div class="footer-logo-links clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="ftr-logo text-md-start">
                        <img class="logoImg" src="{{ $setting->settings['logo'] }}" alt="{{ $setting->settings['site_title'] }}" title="{{ $setting->settings['site_title'] }}" width="149" height="39" />
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <ul class="list-inline inline-links d-flex-justify-center ftr-links">
                        <li class="list-inline-item"><a href="{{ route('register') }}">ثبت نام</a></li>
                        <li class="list-inline-item"><a href="{{ route('login') }}">ورود به سیستم</a></li>
                        <li class="list-inline-item"><a href="{{ route('dashboard.home') }}">حساب من</a></li>
                        <li class="list-inline-item"><a href="{{ route('dashboard.home') }}">سابقه سفارش</a></li>
                        <li class="list-inline-item"><a href="{{ route('favorites') }}">لیست آرزوها</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ftr-links">
                    <x-footer-menu :alias="'footer_contact_us'"  style="1"/>
                </div>



            </div>
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    @foreach ($menus['namad_menu']->childMenus  as $menu)
                        <a  href="{{ $menu->link }}">
                        <img class="tw-w-16" src="{{  $menu->icon }}" width="50" height="50" alt="">
                        </a>
                    @endforeach
                </div>
                <div class="copytext">&copy; 2024 تمامی حقوق برای فروشگاه ساز محفوظ است.</div>
            </div>
        </div>
    </div>
</div>
