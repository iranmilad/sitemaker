<div class="footer footer-2 ftr-bg-black">
        <div class="footer-top border-0 clearfix">
            <div class="container container-1330">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 ftr-lft-logo mb-4 mb-lg-0">
                        <div class="ftr-logoText mb-4">
                            <img class="logoImg" src="{{ asset('storage/images/logo-white.png')}}" alt="قالب Html چند منظوره Hema" title="قالب Html چند منظوره Hema" width="149" height="39" />
                        </div>
                        <li class="list-inline-item">{{ $info ?? ''}}</li>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 ftr-rgt-menu">
                        <div class="row flex-column-reverse flex-md-row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-contact mt-1 mt-md-0">
                                <x-footer-menu :alias="'footer_contact_us'"  style="1"/>

                                <ul class="list-inline social-icons mt-3">
                                    @foreach ($menus['social_media_menu']->childMenus  as $menu)
                                    <li class="list-inline-item">
                                        <a class="social-media-icon" href="{{ $menu->link }}"  data-bs-toggle="tooltip" data-bs-placement="top">
                                            <img src="{{  $menu->icon }}" width="30" height="30" alt="">
                                        </a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">پیوندها</h4>
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
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                <h4 class="h4">{{ $menus['namad_menu']->title}}</h4>
                                @foreach ($menus['namad_menu']->childMenus  as $menu)
                                    <a  href="{{ $menu->link }}">
                                    <img class="tw-w-16" src="{{  $menu->icon }}" width="100" height="100" alt="">
                                    </a>
                                @endforeach


                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links d-none">
                                <div class="footer-newsletter icon-arrow">
                                    <form action="#" method="post">
                                        <label class="h4 mb-2">عضویت در خبرنامه</label>
                                        <p>به باشگاه مشتریان وفادار ما بپیوندید و تخفیف های جدید را دریافت کنید:</p>
                                        <div class="input-group">
                                            <input type="email" class="form-control input-group-field newsletter-input" name="email" value="" placeholder="آدرس ایمیل را وارد کنید..."  required />
                                            <button type="submit" class="input-group-btn text-link newsletter-submit" name="commit"><i class="icon anm anm-arw-left"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle clearfix d-none">
            <div class="container container-1330">
                <ul class="ftr-info list-inline d-inline-flex w-100 justify-content-center text-center flex-column flex-sm-row">
                    <li class="list-inline-item">ارسال رایگان برای تمامی سفارش های بالای 500 هزار تومان <a href="#" class="text-link text-uppercase ms-1">هم اکنون خرید کنید</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom border-0 clearfix">
            <div class="container container-1330">
                    <div class="copytext">&copy; 2024 تمامی حقوق برای فروشگاه ساز محفوظ است.</div>
            </div>
        </div>
    </div>
