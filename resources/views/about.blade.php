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
                            <h1>درباره ما سبک 2</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="بازگشت به صفحه اصلی">صفحه اصلی</a><span
                                class="title"><i class="icon anm anm-angle -left-l"></i>صفحات</span><span
                                class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i>درباره ما سبک 2</span>
                        </div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <!-- بخش مقصد -->
        <div class="destination-section section pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="about-images">
                            <img class="rounded-0 w-100 blur-up lazyload" data-src="{{ asset('storage/images/about/about4.jpg')}}"
                                src="{{ asset('storage/images/about/about4.jpg')}}" alt="درباره ما" width="700" height="600" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="about-details faqs-style faqs-style2 px-50">
                            <h2 class="fs-3 mb-3">ما خدمات مستمر و مهربانی را برای مشتریان ارائه می دهیم</h2>
                            <p>تنوع‌های زیادی از قسمت‌های لورم اپیسوم در دسترس است، اما اکثریت آن‌ها به نوعی دچار تغییر
                                شده‌اند، با طنز تزریقی یا کلمات تصادفی که حتی کمی باورپذیر به نظر نمی‌رسند. اگر می‌خواهید از
                                قسمتی از لورم اپیسوم استفاده کنید، باید مطمئن شوید که هیچ چیز شرم‌آوری در وسط متن پنهان نشده
                                باشد.</p>
                            <div class="accordion" id="accordionFaq">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">مشتری سرویس</button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <p>لورم ایپسوم به سادگی متن ساختگی صنعت چاپ و حروفچینی است. لورم ایپسوم از دهه
                                                1500 به عنوان متن ساختگی استاندارد صنعت بوده است، زمانی که یک چاپگر ناشناخته
                                                یک گالری از نوع را برداشت و آن را به هم زد تا یک کتاب نمونه بسازد. این نه
                                                تنها پنج قرن باقی مانده است.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">آنلاین مشاوره</button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <p>تنوع‌های زیادی از قسمت‌های لورم اپیسوم در دسترس است، اما اکثریت آن‌ها به شکلی
                                                دچار تغییر شده‌اند، با طنز تزریقی یا کلمات تصادفی که حتی کمی باورپذیر به نظر
                                                نمی‌رسند. اگر می خواهید از یک پاساژ لورم اپیسوم استفاده کنید.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">فروش مدیریت</button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <p>بر خلاف تصور رایج، لورم اپیسوم یک متن تصادفی نیست. این ریشه در یک قطعه از
                                                ادبیات کلاسیک لاتین مربوط به 45 قبل از میلاد دارد و قدمت آن را به بیش از
                                                2000 سال می رساند. ریچارد مک کلینتاک، استاد لاتین در کالج همپدن-سیدنی در
                                                ویرجینیا، یکی از مبهم‌ترین واژه‌های لاتین کشف‌شده را جستجو کرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- بخش پایان مقصد -->

        <!-- بخش بنر مقابله -->
        <div class="destination-section section section-color-light">
            <div class="container">
                <div class="row row-cols-lg-4 row-cols-md-4 row-cols-sm-2 row-cols-2 g-4 text-center">
                    <div class="counteup-items">
                        <i class="icon anm anm-history fs-3 mb-3"></i>
                        <p class="counterup-number"><span class="counterup" data-count="50">50</span><span
                                class="ms-1 text">M+</span></p>
                        <h5 class="counteup-title">سالهای تاسیس</h5>
                    </div>
                    <div class="counteup-items">
                        <i class="icon anm anm-users-r fs-3 mb-3"></i>
                        <p class="counterup-number"><span class="counterup" data-count="100">100</span><span
                                class="ms-1 text">B+</span></p>
                        <h5 class="counteup-title">اعضای ماهر شرایط</h5>
                    </div>
                    <div class="counteup-items">
                        <i class="icon anm anm-handshake-l fs-3 mb-3"></i>
                        <p class="counterup-number"><span class="counterup" data-count="80">80</span><span
                                class="ms-1 text">M+</span></p>
                        <h5 class="counteup-title">مشتریان خوشحال</h5>
                    </div>
                    <div class="counteup-items">
                        <i class="icon anm anm-bar-chart-o fs-3 mb-3"></i>
                        <p class="counterup-number"><span class="counterup" data-count="70">70</span><span
                                class="ms-1 text">B+</span></p>
                        <h5 class="counteup-title">سفارشات ماهانه</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- پایان بخش بنر Counterup -->

        <!--بخش با رهبران ما ملاقات کنید-->
        <div class="team-section section">
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
