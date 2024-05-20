<div class="footer footer-7 ftr-bg-black">
    <div class="footer-top clearfix">
        <div class="container container-1330">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 footer-contact order-1 order-lg-0 mt-1 mt-md-4 mt-lg-0">
                    <x-footer-menu :alias="'footer_contact_us'"  style="1"/>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                    <h4 class="h4">حساب من</h4>
                    <ul>
                        <li><a href="{{ route('register') }}">ثبت نام</a></li>
                        <li><a href="{{ route('login') }}">ورود به سیستم</a></li>
                        <li><a href="{{ route('dashboard.home') }}">حساب من</a></li>
                        <li><a href="{{ route('dashboard.home') }}">سابقه سفارش</a></li>
                        <li><a href="{{ route('favorites') }}">لیست آرزوها</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                    <x-footer-menu :alias="'categories_footer'"  style="1"/>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                    <x-footer-menu :alias="'quick_access'" style="1" />
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                    <h4 class="h4">{{ $menus['namad_menu']->title}}</h4>
                    @foreach ($menus['namad_menu']->childMenus  as $menu)
                        <a  href="{{ $menu->link }}">
                        <img class="tw-w-16" src="{{  $menu->icon }}" width="100" height="100" alt="">
                        </a>
                    @endforeach
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-3 footer-instagram order-2 order-lg-0 mt-4 mt-lg-0 d-none">
                    <h4 class="h4">اینستاگرام</h4>
                    <!--Instagram grid-->
                    <div class="instagram-section instagram-grid position-relative">
                        <div class="row g-2 row-cols-xl-4 row-cols-lg-4 row-cols-md-4 row-cols-sm-4 row-cols-4">
                            <div class="instagram-item">
                                <a href="#;" class="zoom-scal rounded-5">
                                    <img class="rounded-5 blur-up lazyload" src="{{ asset('storage/images/instagram/organic-1.jpg')}}" data-src="{{ asset('storage/images/instagram/organic-1.jpg')}}" alt = "تصویر" width="110" height="110" />
                                    <span class="ins-icon d-flex-justify-center"><i class="icon anm anm-instagram"></i></span>
                                </a>
                            </div>
                            <div class="instagram-item">
                                <a href="#;" class="zoom-scal rounded-5">
                                    <img class="rounded-5 blur-up lazyload" src="{{ asset('storage/images/instagram/organic-2.jpg')}}" data-src="{{ asset('storage/images/instagram/organic-2.jpg')}}" alt = "تصویر" width="110" height="110" />
                                    <span class="ins-icon d-flex-justify-center"><i class="icon anm anm-instagram"></i></span>
                                </a>
                            </div>
                            <div class="instagram-item">
                                <a href="#;" class="zoom-scal rounded-5">
                                    <img class="rounded-5 blur-up lazyload" src="{{ asset('storage/images/instagram/organic-3.jpg')}}" data-src="{{ asset('storage/images/instagram/organic-3.jpg')}}" alt = "تصویر" width="110" height="110" />
                                    <span class="ins-icon d-flex-justify-center"><i class="icon anm anm-instagram"></i></span>
                                </a>
                            </div>
                            <div class="instagram-item">
                                <a href="#;" class="zoom-scal rounded-5">
                                    <img class="rounded-5 blur-up lazyload" src="{{ asset('storage/images/instagram/organic-4.jpg')}}" data-src="{{ asset('storage/images/instagram/organic-4.jpg')}}" alt = "تصویر" width="110" height="110" />
                                    <span class="ins-icon d-flex-justify-center"><i class="icon anm anm-instagram"></i></span>
                                </a>
                            </div>
                            <div class="instagram-item">
                                <a href="#;" class="zoom-scal rounded-5">
                                    <img class="rounded-5 blur-up lazyload" src="{{ asset('storage/images/instagram/organic-5.jpg')}}" data-src="{{ asset('storage/images/instagram/organic-5.jpg')}}" alt = "تصویر" width="110" height="110" />
                                    <span class="ins-icon d-flex-justify-center"><i class="icon anm anm-instagram"></i></span>
                                </a>
                            </div>
                            <div class="instagram-item">
                                <a href="#;" class="zoom-scal rounded-5">
                                    <img class="rounded-5 blur-up lazyload" src="{{ asset('storage/images/instagram/organic-6.jpg')}}" data-src="{{ asset('storage/images/instagram/organic-6.jpg')}}" alt = "تصویر" width="110" height="110" />
                                    <span class="ins-icon d-flex-justify-center"><i class="icon anm anm-instagram"></i></span>
                                </a>
                            </div>
                            <div class="instagram-item">
                                <a href="#;" class="zoom-scal rounded-5">
                                    <img class="rounded-5 blur-up lazyload" src="{{ asset('storage/images/instagram/organic-7.jpg')}}" data-src="{{ asset('storage/images/instagram/organic-7.jpg')}}" alt = "تصویر" width="110" height="110" />
                                    <span class="ins-icon d-flex-justify-center"><i class="icon anm anm-instagram"></i></span>
                                </a>
                            </div>
                            <div class="instagram-item">
                                <a href="#;" class="zoom-scal rounded-5">
                                    <img class="rounded-5 blur-up lazyload" src="{{ asset('storage/images/instagram/organic-8.jpg')}}" data-src="{{ asset('storage/images/instagram/organic-8.jpg')}}" alt = "تصویر" width="110" height="110" />
                                    <span class="ins-icon d-flex-justify-center"><i class="icon anm anm-instagram"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End Instagram grid-->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container container-1330">
            <div class="row">

                <ul class="list-inline social-icons d-inline-flex align-items-center justify-content-center justify-content-sm-start col-12 col-sm-6 col-lg-4">
                    @foreach ($menus['social_media_menu']->childMenus  as $menu)
                    <li class="list-inline-item">
                        <a class="d-flex-justify-center" href="{{ $menu->link }}" data-bs-toggle="tooltip" data-bs-placement="top">
                            <img src="{{  $menu->icon }}" width="30" height="30" alt="">
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="copytext text-center col-12 col-md-12 col-lg-4 order-2 order-lg-0 mt-3 mt-lg-0">&copy; 2024 تمامی حقوق برای فروشگاه ساز محفوظ است.</div>

                <ul class="payment-icons d-flex-center justify-content-center justify-content-sm-end col-12 col-sm-6 col-lg-4 mt-3 mt-sm-0 d-none">
                    <li><i class="icon anm anm-cc-visa"></i></li>
                    <li><i class="icon anm anm-cc-mastercard"></i></li>
                    <li><i class="icon anm anm-cc-amex"></i></li>
                    <li><i class="icon anm anm-cc-paypal"></i></li>
                    <li><i class="icon anm anm-cc-discover"></i></li>
                    <li><i class="icon anm anm-cc-stripe"></i></li>
                    <li><i class="icon anm anm-cc-jcb"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
