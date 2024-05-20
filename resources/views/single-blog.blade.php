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
                            <h1>{{ $post->title}}</h1>
                        </div>
                        {{ Breadcrumbs::render('single.post',$post) }}
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
                        <livewire:LoadWidget blockId="block_24" :slug="$post->slug"/>
                        <!--پایان دسته-->
                        <!--بایگانی-->
                        <div class="sidebar-widget clearfix categories d-none">
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
                            <livewire:LoadWidget blockId="block_16" />
                        </div>
                        <!--پایان دادن به پست های اخیر-->
                        <!--برچسب های محبوب-->
                        <div class="sidebar-widget clearfix tags-clouds">
                            <livewire:LoadWidget blockId="block_22"  :slug="$post->slug" />
                        </div>
                        <!--پایان دادن به برچسب های محبوب-->
                    </div>
                    <!--پایان نوار کناری-->
                </div>

                <!-- محتوای وبلاگ-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                    <div class="blog-article">
                        <livewire:LoadWidget blockId="block_20"  :slug="$post->slug" />

                        <!-- محتوای وبلاگ -->
                        <div class="blog-content">

                            <livewire:LoadWidget blockId="block_18"  :slug="$post->slug" />
                            <livewire:LoadWidget blockId="block_19"  :slug="$post->slug" />
                            <hr />
                            <livewire:LoadWidget blockId="block_21"  :slug="$post->slug" />
                            <hr />
                            <div class="row blog-action d-flex-center justify-content-between">
                                <ul class="col-lg-6 tags-list d-flex-center d-none">
                                    <li class="item fw-600">برچسب‌های مرتبط:</li>
                                    <li class="item"><a class="text-link" href="blog-grid-sidebar.html">مد،</a></li>
                                    <li class="item"><a class="text-link" href="blog-grid-sidebar.html">کفش،</a></li>
                                    <li class="item"><a class="text-link" href="blog-grid-sidebar.html">لوازم جانبی</a>
                                    </li>
                                </ul>

                                <div class="col-lg-6 mt-2 mt-lg-0 social-sharing d-flex-center justify-content-lg-end d-none">
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
                            <div class="blog-nav d-flex-center justify-content-between mt-3 d-none">
                                <div class="nav-prev fs-14"><a href="#"><i
                                            class="align-middle ms-2 icon anm anm-angle-right-r"></i><span
                                            class ="align-middle">پست قبلی</span></a></div>
                                <div class="nav-next fs-14"><a href="#"><span class="align-middle">پست
                                            بعدی</span><i class="align-middle me-2 icon anm anm-angle-left-r"></i></a>
                                </div>
                            </div>
                            <!-- پایان ناوبری وبلاگ -->


                            <div class="author-bio d-none">
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

                            <livewire:LoadWidget blockId="block_23"  :slug="$post->slug" />
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
