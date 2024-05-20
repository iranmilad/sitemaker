<div class="footer footer-1">
    <div class="newsletterbg clearfix d-none">
        <div class="container">
            <form action="#" method="post" class="footer-newsletter">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3 mb-md-0">
                        <label class="h3 mb-1 clr-none">در خبرنامه ما ثبت نام کنید و 10% تخفیف دریافت کنید</label>
                        <p>ثبت نام کنید تا در جریان باشید. به‌روزرسانی‌ها، دسترسی به معاملات انحصاری و موارد دیگر را دریافت کنید.</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="input-group">
                            <input type="email" class="form-control input-group-field newsletter-input" name="email" value="" placeholder="آدرس ایمیل خود را وارد کنید..."  required  />
                            <button type="submit" class="input-group-btn btn btn-secondary newsletter-submit" name="commit">اشتراک</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                    <h4 class="h4">منو</h4>
                    <ul>
                        <li><a href="{{ route('dashboard.home') }}">حساب من</a></li>
                        <li><a href="{{ route('about-us') }}">درباره ما</a></li>
                        <li><a href="{{ route('login') }}">ورود به سیستم</a></li>
                        <li><a href="{{ route('contact-us') }}">تماس با ما</a></li>
                        <li><a href="{{ route('terms') }}">شرایط و قوانین</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                    <x-footer-menu :alias="'quick_access'" style="1" />
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
                    <div class="tw-col-span-1 mt-4">
                        <p class="fw-bold fs-6 title-dot text-white">{{ $menus['namad_menu']->title}}</p>
                        <div class="row mt-3 tw-justify-center">
                            <ul class="social-list d-flex tw-justify-start mt-2 align-items-center tw-flex-wrap tw-w-full">
                                @foreach ($menus['namad_menu']->childMenus  as $menu)
                                <li class="my-2">
                                    <a  href="{{ $menu->link }}">
                                    <img class="tw-w-16" src="{{  $menu->icon }}" width="100" height="100" alt="">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- <h4 class="h4">با ما تماس بگیرید</h4>
                    <p class="address d-flex"><i class="icon anm anm-map-marker-al pt-1"></i> تهران میدان آزادی خیابان سهروردی پلاک ۲</p>
                    <p class="phone d-flex align-items-center"><i class="icon anm anm-phone-l"></i> <b class="me-1 d-none">تلفن:</b> <a href="tel:401234567890" dir="ltr">(+40) 123 456 7890</a></p>
                    <p class="email d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> <b class="me-1 d-none">ایمیل:</b> <a href="mailto:info@example.com">info@example.com</a></p>
                    <ul class="list-inline social-icons mt-3">
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="فیسبوک"><i class="icon anm anm-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="توییتر"><i class="icon anm anm-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="پینترست"><i class="icon anm anm-pinterest-p"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="لینکدین"><i class="icon anm anm-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="اینستاگرام"><i class="icon anm anm-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="یوتیوب"><i class="icon anm anm-youtube"></i></a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                {{-- <ul class="payment-icons d-flex-center mb-2 mb-md-0">
                    <li><i class="icon anm anm-cc-visa"></i></li>
                    <li><i class="icon anm anm-cc-mastercard"></i></li>
                    <li><i class="icon anm anm-cc-amex"></i></li>
                    <li><i class="icon anm anm-cc-paypal"></i></li>
                    <li><i class="icon anm anm-cc-discover"></i></li>
                    <li><i class="icon anm anm-cc-stripe"></i></li>
                    <li><i class="icon anm anm-cc-jcb"></i></li>
                </ul> --}}
                <div class="copytext">&copy; 2024 . تمامی حقوق برای سایت ساز محفوظ است.</div>
            </div>
        </div>
    </div>
</div>
