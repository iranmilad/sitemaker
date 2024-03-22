@extends('layouts.app')
@section('title', 'پست بلاگ')
@section('body', 'blog-page blog-details-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>جزئیات وبلاگ</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs">
                            <a href="index.html" title="بازگشت به صفحه اصلی">صفحه اصلی</a>
                            <span class="title">
                                <i class="icon anm anm-angle-left-l"></i>
                                وبلاگ</span>
                            <span class="main-title fw-bold">
                                <i class="icon anm anm-angle-left-l"></i>جزئیات وبلاگ
                            </span>
                        </div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 blog-sidebar sidebar sidebar-bg">
                    <!--Sidebar-->
                    <div class="sidebar-tags sidebar-sticky clearfix">
                        <!--دسته-->
                        <div class="sidebar-widget clearfix categories">
                            <div class="widget-title">
                                <h2>دسته</h2>
                            </div>
                            <div class="widget-content">
                                <ul class="sidebar-categories scrollspy clearfix">
                                    <li class="lvl-1 active"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">مد
                                            <span class="count">4</span></a></li>
                                    <li class="lvl-1"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">زیبایی <span
                                                class="count">6</span></a></li>
                                    <li class="lvl-1"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">لوازم جانبی
                                            <span class="count">8</span></a></li>
                                    <li class="lvl-1"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">پرطرفدار
                                            <span class="count">12</span></a></li>
                                    <li class="lvl-1"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">سبک زندگی
                                            <span class="count">13</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--پایان دسته-->
                        <!--بایگانی-->
                        <div class="sidebar-widget clearfix categories">
                            <div class="widget-title">
                                <h2>بایگانی</h2>
                            </div>
                            <div class="widget-content">
                                <ul class="sidebar-categories scrollspy clearfix">
                                    <li class="lvl-1"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">24 تیر
                                            1400</a></li>
                                    <li class="lvl-1"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">31 تیر
                                            1400</a></li>
                                    <li class="lvl-1"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">10 آوریل
                                            2023</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--پایان آرشیو-->
                        <!--پست های اخیر-->
                        <div class="sidebar-widget clearfix">
                            <div class="widget-title">
                                <h2>پست های اخیر</h2>
                            </div>
                            <div class="widget-content">
                                <div class="list list-sidebar-products">
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="blog-details.html"><img
                                                    class="featured-image blur-up lazyload"
                                                    data-src="{{ asset('storage/images/blog/post-img3-100x.jpg') }}"
                                                    src="{{ asset('storage/images/blog/post-img3-100x.jpg') }}"
                                                    alt="وبلاگ" width="100" height="100" /> </a></div>
                                        <div class="me-3 details">
                                            <a class="item-title" href="blog-details.html">ایده های هدیه برای همه</a>
                                            <div class="item-meta opacity-75"><time datetime="2023-01-02">02 فروردین
                                                    1400</time></div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="blog-details.html"><img
                                                    class="featured-image blur-up lazyload"
                                                    data-src="{{ asset('storage/images/blog/post-img2-100x.jpg') }}"
                                                    src="{{ asset('storage/images/blog/post-img2-100x.jpg') }}"
                                                    alt="وبلاگ" width="100" height="100" /> </a></div>
                                        <div class="me-3 details">
                                            <a class="item-title" href="blog-details.html">فروش با بهترین مجموعه</a>
                                            <div class="item-meta opacity-75"><time datetime="2023-01-24">24 فروردین
                                                    1400</time></div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="blog-details.html"><img
                                                    class="featured-image blur-up lazyload"
                                                    data-src="{{ asset('storage/images/blog/post-img3-100x.jpg') }}"
                                                    src="{{ asset('storage/images/blog/post-img3-100x.jpg') }}"
                                                    alt="وبلاگ" width="100" height="100" /> </a></div>
                                        <div class="me-3 details">
                                            <a class="item-title" href="blog-details.html">واژه در ادبیات کلاسیک</a>
                                            <div class="item-meta opacity-75"><time datetime="2023-02-14">14 تیر
                                                    1400</time></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--پایان دادن به پست های اخیر-->
                        <!--برچسب های محبوب-->
                        <div class="sidebar-widget clearfix tags-clouds">
                            <div class="widget-title">
                                <h2>برچسب های محبوب</h2>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list d-flex-wrap">
                                    <li class="item"><a class="rounded-3" href="blog-grid-sidebar.html">مد</a></li>
                                    <li class="item"><a class="rounded-3" href="blog-grid-sidebar.html">کفش</a></li>
                                    <li class="item"><a class="rounded-3" href="blog-grid-sidebar.html">زیبایی</a></li>
                                    <li class="item"><a class="rounded-3" href="blog-grid-sidebar.html">لوازم جانبی</a>
                                    </li>
                                    <li class="item"><a class="rounded-3" href="blog-grid-sidebar.html">پرطرفدار</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--پایان دادن به برچسب های محبوب-->
                    </div>
                    <!--پایان نوار کناری-->
                </div>

                <!-- محتوای وبلاگ-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                    <div class="blog-article">
                        <div class="blog-img mb-3">
                            <img class="rounded-0 blur-up lazyload"
                                data-src="{{ asset('storage/images/blog/post-img1-big.jpg') }}"
                                src="{{ asset('storage/images/blog/post-img1-big.jpg') }}"
                                alt="مجموعه فروشگاهی جدید فروشگاه ما" width="1200" height="700" />
                        </div>
                        <!-- محتوای وبلاگ -->
                        <div class="blog-content">
                            <h2 class="h1">فروش با بهترین مجموعه</h2>
                            <ul class="publish-detail d-flex-wrap">
                                <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 ms-1"> ارسال شده
                                        توسط:</span> کاربر</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-01-02">02 فروردین
                                        1400</time></li>
                                <li><i class="icon anm anm-comments-l"></i> <a href="#">2 نظر</a></li>
                                <li><i class="icon anm anm-tag-r"></i><span class="opacity-75">پست شده در</span><a
                                        class="ms-1" href="# ">لوازم جانبی</a>،<a class="ms-1"
                                        href="#">مد</a>،<a class="ms-1" href="#">کیف</a></li>
                            </ul>
                            <hr />
                            <div class="content">
                                <p>لورم ایپسوم به سادگی متن ساختگی صنعت چاپ و حروفچینی است. لورم ایپسوم از دهه 1500 به عنوان
                                    متن ساختگی استاندارد صنعت بوده است، زمانی که یک چاپگر ناشناخته یک گالی از نوع را برداشت
                                    و آن را به هم زد تا یک کتاب نمونه بسازد. این نه تنها از پنج قرن جان سالم به در برده است،
                                    بلکه از جهشی به حروفچینی الکترونیکی نیز جان سالم به در برده است که اساساً بدون تغییر
                                    باقی مانده است.</p>
                                <p>این یک واقعیت ثابت شده است که خواننده هنگام نگاه کردن به صفحه‌بندی، با محتوای قابل خواندن
                                    یک صفحه، حواسش پرت می‌شود. نکته استفاده از این است که در مقایسه با استفاده از «محتوا در
                                    اینجا، محتوا در اینجا»، توزیع کم و بیش عادی حروف را دارد و آن را شبیه به انگلیسی خواندنی
                                    می‌کند. بسیاری از بسته‌های انتشارات دسک‌تاپ و ویرایشگرهای صفحه وب اکنون از به عنوان متن
                                    مدل پیش‌فرض خود استفاده می‌کنند و جستجوی « » بسیاری از وب‌سایت‌ها را که هنوز در مراحل
                                    ابتدایی خود هستند، نشان می‌دهد.</p>
                                <blockquote>
                                    <p>تغییرهای زیادی از معابر در دسترس است، اما اکثر آنها به شکلی از طریق طنز تزریقی یا
                                        تصادفی شده دچار تغییر شده اند.دستوراتی که حتی اندکی هم باورپذیر به نظر نمی رسند.</p>
                                    <footer class="blockquote-footer m-0">هما الکس</footer>
                                </blockquote>
                                <p>قطعه استاندارد که از دهه 1500 استفاده می شد در زیر برای علاقه مندان بازتولید شده است.
                                    بخش‌های 1.10.32 و 1.10.33 از "برای علاقه مندان بازتولید شده است" توسط سیسرو نیز به شکل
                                    دقیق اصلی خود، همراه با نسخه‌های انگلیسی ترجمه 1914 توسط ، تکثیر شده‌اند.</p>
                                <h3>فهرست متن</h3>
                                <ul class="list-styled">
                                    <li>قطعه ای از ادبیات کلاسیک لاتین مربوط به 45 قبل از میلاد</li>
                                    <li>ادبیات کلاسیک، منبع غیرقابل شک را کشف کرد.</li>
                                    <li>اینترنت تمایل دارد در صورت لزوم قطعات از پیش تعریف شده را تکرار کند</li>
                                </ul>
                            </div>
                            <hr />
                            <div class="row blog-action d-flex-center justify-content-between">
                                <ul class="col-lg-6 tags-list d-flex-center">
                                    <li class="item fw-600">برچسب‌های مرتبط:</li>
                                    <li class="item"><a class="text-link" href="blog-grid-sidebar.html">مد،</a></li>
                                    <li class="item"><a class="text-link" href="blog-grid-sidebar.html">کفش،</a></li>
                                    <li class="item"><a class="text-link" href="blog-grid-sidebar.html">لوازم جانبی</a>
                                    </li>
                                </ul>

                                <div class="col-lg-6 mt-2 mt-lg-0 social-sharing d-flex-center justify-content-lg-end">
                                    <span class="sharing-lbl fw-600">اشتراک گذاری:</span>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="اشتراک گذاری در فیس بوک"><i class="icon anm anm-facebook-f"></i><span
                                            class="share-title d-none">فیس بوک</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="توییت در توییتر"><i
                                            class="icon anm anm-twitter"></i><span
                                            class="share-title d-none">تویتر</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="پین کردن پینترست"><i
                                            class="icon anm anm-pinterest-p"></i><span
                                            class="share-title d-none">پینترست</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="اشتراک گذاری در اینستاگرام"><i class="icon anm anm-linkedin-in"></i><span
                                            class="share-title d-none">اینستاگرام</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="اشتراک گذاری توسط ایمیل"><i class="icon anm anm-envelope-l"></i><span
                                            class="share-title d-none">ایمیل</span></a>
                                </div>
                            </div>
                            <!-- Blog Nav -->
                            <div class="blog-nav d-flex-center justify-content-between mt-3">
                                <div class="nav-prev fs-14"><a href="#"><i
                                            class="align-middle ms-2 icon anm anm-angle-right-r"></i><span
                                            class ="align-middle">پست قبلی</span></a></div>
                                <div class="nav-next fs-14"><a href="#"><span class="align-middle">پست
                                            بعدی</span><i class="align-middle me-2 icon anm anm-angle-left-r"></i></a>
                                </div>
                            </div>
                            <!-- پایان ناوبری وبلاگ -->
                            <hr />

                            <div class="author-bio">
                                <div class="author-image d-flex">
                                    <a class="author-img" href="#"><img class="blur-up lazyload"
                                            data-src="{{ asset('storage/images/users/user-img2.jpg') }}"
                                            src="{{ asset('storage/images/users/user-img2.jpg') }}" alt="نویسنده"
                                            width="200" height="200" /></a>
                                    <div class="author-info me-4">
                                        <h4 class="mb-2">جان آرتور</h4>
                                        <p class="text-muted mb-2"><span class="postcount">234 پست</span><span
                                                class="postsince me-2">از سال 2023</span></p>
                                        <p class="author-des">سلام، من یک وبلاگ نویس هما هستم که الگوی چندمنظوره را به
                                            اشتراک می گذارد که به شما و مشتریان شما یک تجربه خرید روان را می دهد که می تواند
                                            برای انواع فروشگاه ها مانند مد استفاده شود.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- نظرات وبلاگ -->
                            <div class="blog-comment section">
                                <h2 class="mb-4">نظرات (3)</h2>
                                <ol class="comments-list">
                                    <li class="comments-items">
                                        <div class="comments-item d-flex w-100">
                                            <div class="flex-shrink-0 comment-img"><img class="blur-up lazyload"
                                                    data-src="{{ asset('storage/images/users/user-img1.jpg') }}"
                                                    src="{{ asset('storage/images/users/user-img1.jpg') }}"
                                                    alt=" نظر" width="200" height="200" /></div>
                                            <div class="flex-grow-1 comment-content">
                                                <div class="comment-user d-flex-center justify-content-between">
                                                    <div class="comment-author fw-600">الکس سورت</div>
                                                    <div class="comment-date opacity-75"><time datetime="2023-01-02">02
                                                            فروردین 1400 </time></div>
                                                </div>
                                                <div class="comment-text my-2">در دهه 1960 با انتشار برگه‌های حاوی متن‌های
                                                    و اخیراً با نرم‌افزار انتشار رومیزی رایج شد.</div>
                                                <div class="comment-reply"><button type="button"
                                                        class="text-link text-decoration-none"><i
                                                            class="icon anm anm-reply ms-2"></i>پاسخ </button></div>
                                            </div>
                                        </div>
                                        <div class="comments-item d-flex w-100">
                                            <div class="flex-shrink-0 comment-img"><img class="blur-up lazyload"
                                                    data-src="{{ asset('storage/images/users/user-img2.jpg') }}"
                                                    src="{{ asset('storage/images/users/user-img2.jpg') }}"
                                                    alt=" نظر" width="200" height="200" /></div>
                                            <div class="flex-grow-1 comment-content">
                                                <div class="comment-user d-flex-center justify-content-between">
                                                    <div class="comment-author fw-600">ادمین</div>
                                                    <div class="comment-date opacity-75"><time datetime="2023-01-03">03
                                                            فروردین 1400</time></div>
                                                </div>
                                                <div class="comment-text my-2">در دهه 1960 با انتشار برگه‌های حاوی متن‌های
                                                    و اخیراً با نرم‌افزار انتشار رومیزی رایج شد.</div>
                                                <div class="comment-reply"><button type="button"
                                                        class="text-link text-decoration-none"><i
                                                            class="icon anm anm-reply ms-2"></i>پاسخ </button></div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <!-- پایان نظرات وبلاگ -->
                            <!-- فرم نظرات وبلاگ -->
                            <div class="formFeilds comment-form form-vertical">
                                <form method="post" action="#">
                                    <h2 class="mb-3">نظر بدهید</h2>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="commentName" class="d-none">نام</label>
                                                <input type="text" id="commentName" name="contact[name]"
                                                    placeholder="نام" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="commentEmail" class="d-none">ایمیل</label>
                                                <input type="email" id="commentEmail" name="contact[email]"
                                                    placeholder="ایمیل" value="" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="commentMessage" class="d-none">پیام</label>
                                                <textarea rows="5" id="commentMessage" name="contact[body]" placeholder="نوشتن نظر" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <input type="submit" class="btn btn-lg" value="ارسال نظر">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- پایان فرم نظرات وبلاگ -->
                        </div>
                        <!-- پایان محتوای وبلاگ -->
                    </div>
                </div>
                <!--پایان محتوای وبلاگ-->
            </div>
        </div>
        <!--پایان محتوای اصلی-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection
