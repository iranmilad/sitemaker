@extends('layouts.app')
@section('title', 'درباره ما')
@section('body', 'aboutus-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            {{-- contact page --}}
                            <livewire:LoadWidget blockId="block_51" />
                        </div>
                        <!--Breadcrumbs-->
                        {{ Breadcrumbs::render('about-us') }}
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <!-- بخش مقصد -->
        {{-- contact page --}}
        <livewire:LoadWidget blockId="block_50" />
        <!-- بخش پایان مقصد -->

        <!--بخش با رهبران ما ملاقات کنید-->
        <div class="team-section section d-none">
            <div class="container">
                <div class="section-header">
                    <p class="mb-2 mt-0">رهبران خوب آن را بهتر می کنند</p>
                    <h2>با رهبران ما ملاقات کنید</h2>
                </div>

                <div class="team-items row col-row row-cols-lg-4 row-cols-md-4 row-cols-sm-2 row-cols-2 text-center">
                    <div class="team-item col-item">
                        <div class="team-img zoom-scal rounded-0">
                            <img class="rounded-0 blur-up lazyload w-100" data-src="{{ asset('storage/images/about/about-team1.jpg')}}"
                                src="{{ asset('storage/images/about/about-team1.jpg')}}" alt= "شرایط" width="350"
                                height="350" />
                            <ul class="list-inline social-icons d-flex-justify-center">
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="فیس بوک"> <i
                                            class="icon anm anm-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="توییتر"> <i class="icon anm anm-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="پینترست"> <i
                                            class="icon anm anm-pinterest-p"></i></a></li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="اینستاگرام"> <i
                                            class="icon anm anm-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-bio pt-3">
                            <h3 class="mb-2">بروس ساتون</h3>
                            <p>مدیر عامل - بنیانگذار</p>
                        </div>
                    </div>
                    <div class="team-item col-item">
                        <div class="team-img zoom-scal rounded-0">
                            <img class="rounded-0 blur-up lazyload w-100" data-src="{{ asset('storage/images/about/about-team2.jpg')}}"
                                src="{{ asset('storage/images/about/about-team2.jpg')}}" alt= "شرایط" width="350"
                                height="350" />
                            <ul class="list-inline social-icons d-flex-justify-center">
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="فیس بوک"> <i
                                            class="icon anm anm-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="توییتر"> <i class="icon anm anm-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="پینترست"> <i
                                            class="icon anm anm-pinterest-p"></i></a></li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="اینستاگرام"> <i
                                            class="icon anm anm-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-bio pt-3">
                            <h3 class="mb-2">الن تورنتون</h3>
                            <p>مدیر محصولات</p>
                        </div>
                    </div>
                    <div class="team-item col-item">
                        <div class="team-img zoom-scal rounded-0">
                            <img class="rounded-0 blur-up lazyload w-100" data-src="{{ asset('storage/images/about/about-team3.jpg')}}"
                                src="{{ asset('storage/images/about/about-team3.jpg')}}" alt= "شرایط" width="350"
                                height="350" />
                            <ul class="list-inline social-icons d-flex-justify-center">
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="فیس بوک"> <i
                                            class="icon anm anm-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="توییتر"> <i class="icon anm anm-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="پینترست"> <i
                                            class="icon anm anm-pinterest-p"></i></a></li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="اینستاگرام"> <i
                                            class="icon anm anm-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-bio pt-3">
                            <h3 class="mb-2">لیزا جان</h3>
                            <p>بازاریابی</p>
                        </div>
                    </div>
                    <div class="team-item col-item">
                        <div class="team-img zoom-scal rounded-0">
                            <img class="rounded-0 blur-up lazyload w-100" data-src="{{ asset('storage/images/about/about-team1.jpg')}}"
                                src="{{ asset('storage/images/about/about-team1.jpg')}}" alt= "شرایط" width="350"
                                height="350" />
                            <ul class="list-inline social-icons d-flex-justify-center">
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="فیس بوک"> <i
                                            class="icon anm anm-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="توییتر"> <i class="icon anm anm-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="پینترست"> <i
                                            class="icon anm anm-pinterest-p"></i></a></li>
                                <li class="list-inline-item"><a class="clr-none" href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="اینستاگرام"> <i
                                            class="icon anm anm-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-bio pt-3">
                            <h3 class="mb-2">جکلی اسمیت</h3>
                            <p>طراح</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--پایان بخش Meet Our Leaders-->

        <!--پایان محتوای اصلی-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection
