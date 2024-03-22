@extends('layouts.app')
@section('title', 'بلاگ')
@section('body', 'blog-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>بلاگ ماسونری</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="بازگشت به صفحه اصلی">صفحه اصلی</a><span
                                class="title"><i class="icon anm anm-angle -left-l"></i>وبلاگ</span><span
                                class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i>بلاگ ماسونری </span>
                        </div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <div class="container">
            <!--Toolbar-->
            <div class="toolbar toolbar-wrapper blog-toolbar">
                <div class="row align-items-center">
                    <div
                        class="col-12 col-sm-6 col-md-6 col-lg-6 text-right filters-toolbar-item d-flex justify-content-center justify-content-sm-start">
                        <div class="search-form mb-3 mb-sm-0">
                            <form class="d-flex" action="#">
                                <input class="search-input" type="text" placeholder="جستجوی وبلاگ...">
                                <button type="submit" class="search-btn"><i class="icon anm anm-search-l"></i></button>
                            </form>
                        </div>
                    </div>
                    <div
                        class="col-12 col-sm-6 col-md-6 col-lg-6 text-left filters-toolbar-item d-flex justify-content-between justify-content-sm-end">
                        <div class="filters-item d-flex align-items-center">
                            <label for="ShowBy" class="mb-0 ms-2">نمایش:</label>
                            <select name="ShowBy" id="ShowBy" class="filters-toolbar-sort">
                                <option value="title-ascending" selected="selected">10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                                <option>30</option>
                            </select>
                        </div>
                        <div class="filters-item d-flex align-items-center me-3">
                            <label for="SortBy" class="mb-0 ms-2">مرتب‌سازی:</label>
                            <select name="SortBy" id="SortBy" class="filters-toolbar-sort">
                                <option value="title-ascending" selected="selected">ویژه</option>
                                <option>جدیدترین</option>
                                <option>بیشترین نظرات</option>
                                <option>تاریخ انتشار</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Toolbar-->

            <!--Blog Grid-->
            <div class="blog-grid-view grid-mr-20">
                <!--شبکه ماسونری-->
                <div class="grid-masonary">
                    <div class="grid-sizer col-12 col-sm-6 col-md-6 col-lg-4"></div>
                    <div class="row m-0">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 blog-item col-item masonary-item">
                            <div class="blog-article zoomscal-hov shadow-15 rounded-0">
                                <div class="blog-img">
                                    <a class="featured-image zoom-scal rounded-0 rounded-bottom-0 mb-0"
                                        href="/blogPost"><img class="rounded-0 rounded-bottom-0 blur-up lazyload "
                                            data-src="{{ asset('storage/images/blog/post-img1.jpg')}}"
                                            src="{{ asset('storage/images/blog/post-img1.jpg')}}" alt="مجموعه فروشگاه جدید فروشگاه ما"
                                            width="740" height="410" /></a>
                                </div>
                                <div class="blog-content p-20">
                                    <h2 class="h3"><a href="/blogPost">مجموعه فروشگاه جدید فروشگاه ما</a></h2>
                                    <ul class="publish-detail d-flex-wrap">
                                        <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 ms-1"> ارسال شده
                                                توسط:</span> کاربر</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-01-02">02 فروردین
                                                1400</time></li>
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#">2 نظر</a></li>
                                    </ul>
                                    <p class="content">لورم ایپسوم به سادگی متن ساختگی متن ساختگی استاندارد صنعت چاپ و
                                        حروفچینی است...</p>
                                    <a href="/blogPost" class="btn btn-secondary btn-sm">بیشتر بخوانید</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 blog-item col-item masonary-item">
                            <div class="blog-article zoomscal-hov shadow-15 rounded-0">
                                <div class="blog-img">
                                    <a class="featured-image zoom-scal rounded-0 rounded-bottom-0 mb-0"
                                        href="/blogPost"><img class="rounded-0 rounded-bottom-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/blog/post-img2.jpg')}}"
                                            src="{{ asset('storage/images/blog/post-img2.jpg')}}" alt="ایده های هدیه برای همه"
                                            width="740" height="410" /></a>
                                </div>
                                <div class="blog-content p-20">
                                    <h2 class="h3"><a href="/blogPost">ایده های هدیه برای همه</a></h2>
                                    <ul class="publish-detail d-flex-wrap mb-3">
                                        <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 ms-1"> ارسال شده
                                                توسط:</span> کاربر</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-01-24">24 فروردین
                                                1400</time></li>
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#">۰ نظر</a></li>
                                    </ul>
                                    <a href="/blogPost" class="btn btn-secondary btn-sm">بیشتر بخوانید</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 blog-item col-item masonary-item">
                            <div class="blog-article zoomscal-hov shadow-15 rounded-0">
                                <div class="blog-img">
                                    <a class="featured-image zoom-scal rounded-0 rounded-bottom-0 mb-0"
                                        href="/blogPost"><img class="rounded-0 rounded-bottom-0 blur-up lazyload "
                                            data-src="{{ asset('storage/images/blog/post-img3.jpg')}}"
                                            src="{{ asset('storage/images/blog/post-img3.jpg')}}" alt="فروش با بهترین مجموعه"
                                            width="740" height="410" /></a>
                                </div>
                                <div class="blog-content p-20">
                                    <h2 class="h3"><a href="/blogPost">فروش با بهترین مجموعه</a></h2>
                                    <ul class="publish-detail d-flex-wrap">
                                        <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 ms-1"> ارسال شده
                                                توسط:</span> کاربر</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-02-14">14 تیر
                                                1400</time></li>
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#">4 نظر</a></li>
                                    </ul>
                                    <p class="content">تنوع‌های زیادی از قسمت‌های m در دسترس است، اما اکثر آنها به شکلی از
                                        طریق طنز تزریقی یا کلمات تصادفی دچار تغییر شده‌اند...</p>
                                    <a href="/blogPost" class="btn btn-secondary btn-sm">بیشتر بخوانید</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 blog-item col-item masonary-item">
                            <div class="blog-article zoomscal-hov shadow-15 rounded-0">
                                <div class="blog-img">
                                    <a class="featured-image zoom-scal rounded-0 rounded-bottom-0 mb-0"
                                        href="/blogPost"><img class="rounded-0 rounded-bottom-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/blog/post-img4.jpg')}}"
                                            src="{{ asset('storage/images/blog/post-img4.jpg')}}" alt="Word در ادبیات کلاسیک"
                                            width="740" height="410" /></a>
                                </div>
                                <div class="blog-content p-20">
                                    <h2 class="h3"><a href="/blogPost">واژه در ادبیات کلاسیک</a></h2>
                                    <ul class="publish-detail d-flex-wrap">
                                        <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 ms-1"> ارسال شده
                                                توسط:</span> کاربر</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-02-19">19 تیر
                                                1400</time></li>
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#">18 نظر</a></li>
                                    </ul>
                                    <p class="content">تنوع‌های زیادی از قسمت‌های موجود است، اما اکثریت آنها به شکلی از
                                        طریق طنز تزریقی دچار تغییر شده‌اند.</p>
                                    <a href="/blogPost" class="btn btn-secondary btn-sm">بیشتر بخوانید</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 blog-item col-item masonary-item">
                            <div class="blog-article zoomscal-hov shadow-15 rounded-0">
                                <div class="blog-img">
                                    <a class="featured-image zoom-scal rounded-0 rounded-bottom-0 mb-0"
                                        href="/blogPost"><img class="rounded-0 rounded-bottom-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/blog/post-img5.jpg')}}"
                                            src="{{ asset('storage/images/blog/post-img5.jpg')}}" alt="خلاق، انعطاف پذیر و مقرون به صرفه"
                                            width="740" height="410" /></a>
                                </div>
                                <div class="blog-content p-20">
                                    <h2 class="h3"><a href="/blogPost">خلاقانه، انعطاف پذیر و مقرون به
                                            صرفه</a></h2>
                                    <ul class="publish-detail d-flex-wrap">
                                        <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 ms-1"> ارسال شده
                                                توسط:</span> کاربر</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-03-08">08 تیر
                                                1400</time></li>
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#">6 نظر</a></li>
                                    </ul>
                                    <p class="content">تنوع‌های زیادی از قسمت‌های موجود است، اما اکثریت آنها به شکلی از
                                        طریق طنز تزریقی دچار تغییر شده‌اند.</p>
                                    <a href="/blogPost" class="btn btn-secondary btn-sm">بیشتر بخوانید</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 blog-item col-item masonary-item">
                            <div class="blog-article zoomscal-hov shadow-15 rounded-0">
                                <div class="blog-img">
                                    <a class="featured-image zoom-scal rounded-0 rounded-bottom-0 mb-0"
                                        href="/blogPost"><img class="rounded-0 rounded-bottom-0 blur-up lazyload"
                                            data-src="{{ asset('storage/images/blog/post-img6.jpg')}}"
                                            src="{{ asset('storage/images/blog/post-img6.jpg')}}" alt="برخلاف تصور عمومی" width="740"
                                            height="410" /></a>
                                </div>
                                <div class="blog-content p-20">
                                    <h2 class="h3"><a href="/blogPost">برخلاف تصور رایج</a></h2>
                                    <ul class="publish-detail d-flex-wrap">
                                        <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 ms-1"> ارسال شده
                                                توسط:</span> کاربر</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-03-28">28 تیر
                                                1400</time></li>
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#">۹ نظر</a></li>
                                    </ul>
                                    <p class="content">لورم ایپسوم به سادگی متن ساختگی صنعت چاپ و حروفچینی است...</p>
                                    <a href="/blogPost" class="btn btn-secondary btn-sm">بیشتر بخوانید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--پایان شبکه ماسونری-->
                <!-- صفحه بندی -->
                <nav class="clearfix pagination-bottom">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#"><i
                                    class="icon anm anm-angle-right-l"></i></a> </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="icon anm anm-angle-left-l"></i></a></li>
                    </ul>
                </nav>
                <!-- پایان صفحه بندی -->
            </div>
            <!--End Blog Grid-->
        </div>
        <!--پایان محتوای اصلی-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection
