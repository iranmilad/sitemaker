@extends('layouts.app')
@section('title', 'سوالات متداول')
@section('body', 'faq-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>سوالات متداول</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="Back to the home page">خانه</a><span
                                class="title"><i class="icon anm anm-angle-left-l"></i>صفحات</span><span
                                class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i>سوالات متداول</span>
                        </div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">

            <!-- سبک فک -->
            <div class="row faqs-style mt-4 mt-md-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 mx-auto">
                    <div class="accordion" id="accordionFaq">
                        <div class="section pt-0">
                            <h3 class="faqttl mb-3">اصول خرید</h3>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">چه
                                        روش های حمل و نقل موجود هستند؟</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>لورم ایپسوم به سادگی متن ساختگی صنعت چاپ و حروفچینی است. لورم ایپسوم از دهه 1500
                                            به عنوان متن ساختگی استاندارد صنعت بوده است، زمانی که یک چاپگر ناشناخته یک گالری
                                            از نوع را برداشت و آن را به هم زد تا یک کتاب نمونه بسازد. این نه تنها از پنج قرن
                                            جان سالم به در برده است، بلکه از جهشی به حروفچینی الکترونیکی نیز جان سالم به در
                                            برده است که اساساً بدون تغییر باقی مانده است.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">چه
                                        آیا سیاست های حمل و نقل و بازگشت شما هستند؟</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingدو"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>تنوع‌های زیادی از قسمت‌های در دسترس است، اما اکثریت آن‌ها به شکلی دچار تغییر
                                            شده‌اند، با طنز تزریقی یا کلمات تصادفی که حتی کمی باورپذیر به نظر نمی‌رسند. اگر
                                            می خواهید از یک پاساژ استفاده کنید.</p>
                                        <div class="row">
                                            <div class="col-12 col-sm-5 col-md-5 col-lg-3 mb-3 mb-sm-0">
                                                <img class="blur-up lazyload"
                                                    data-src="{{ asset('storage/images/collection/sub-collection5.jpg')}}"
                                                    src="{{ asset('storage/images/collection/sub-collection5.jpg')}}" alt = "مجموعه"
                                                    title=" " width="365" height="365" />
                                            </div>
                                            <div class="col-12 col-sm-7 col-md-7 col-lg-9">
                                                <h3>ارسال رایگان</h3>
                                                <p class="mb-2">مأموریت ما ایجاد قالب با کیفیت بالا است که منحصر به فرد،
                                                    تمیز، آسان برای استفاده، کمتر اشکال، بارگیری آسان و دارای تمام ویژگی
                                                    هایی است که تاجر برای اجرای تجارت آنلاین خود به آن نیاز دارد. با موفقیت.
                                                </p>
                                                <p class="mb-2">فروشگاه خود را با قالب بهینه ما ایجاد کنید. الگوهای برتر
                                                    ما به حضور آنلاین شما برتری لازم را می دهد.</p>
                                                <p> با رابط کاربری آسان و پشتیبانی فوق العاده همراه است. شما می توانید طرح
                                                    خود را پیاده سازی کنید. با استفاده از بخش‌های آماده و گزینه‌های موجود
                                                    ما، می‌توانید به راحتی ظاهر فروشگاه را مطابق با نیاز خود تغییر دهید.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">انجام دهید ارسال بین المللی دارید؟</button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>بر خلاف تصور رایج، یک متن تصادفی نیست. این ریشه در یک قطعه از ادبیات کلاسیک لاتین
                                            مربوط به 45 قبل از میلاد دارد و قدمت آن را به بیش از 2000 سال می رساند. ریچارد
                                            مک کلینتاک، پروفسور لاتین در کالج همپدن-سیدنی در ویرجینیا، یکی از نامفهوم‌ترین
                                            واژه‌های لاتین، را از یک قطعه لورم ایپسوم جستجو کرد، و با مرور منابع کشف شده این
                                            کلمه در ادبیات کلاسیک، منبع کشف شد.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section pt-0">
                            <h3 class="faqttl mb-3">پرداخت ها</h3>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">چه روش‌های پرداخت پذیرفته می‌شوند؟</button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>لورم ایپسوم به سادگی متن ساختگی صنعت چاپ و حروفچینی است. لورم ایپسوم از دهه 1500
                                            به عنوان متن ساختگی استاندارد صنعت بوده است، زمانی که یک چاپگر ناشناخته یک گالری
                                            از نوع را برداشت و آن را به هم زد تا یک کتاب نمونه بسازد. این نه تنها از پنج قرن
                                            جان سالم به در برده است، بلکه از جهشی به حروفچینی الکترونیکی نیز جان سالم به در
                                            برده است که اساساً بدون تغییر باقی مانده است.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive"><button class="accordion-button collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                        aria-expanded="false" aria-controls="collapseFive">انجام دهید کارت های اعتباری بین
                                        المللی را می پذیرید؟</button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>هیچ جز سوگواری، اما بزرگترین دیم، اما درمان آسان. اکنون زخم ها نیاز به مراقبت
                                            دارند. بگذارید با محدودیت های خود زندگی کنیم. است، اعضا ارزش ندارند، گاهی اوقات
                                            در استخر. اما حتی اگر بخواهد یک توسعه دهنده باشد، آن را راه اندازی نمی کند. .
                                            دور . هیچ زندگی در هوا یا از بستر وجود ندارد. کارتون و عکاسی در فضای باز. هدف
                                            فوتبالی وجود ندارد</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-0">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">انجام دهید برای هر کالایی مالیات فروش
                                        می‌گیرید؟</button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>بر خلاف تصور رایج، یک متن تصادفی نیست. این ریشه در یک قطعه از ادبیات کلاسیک لاتین
                                            مربوط به 45 قبل از میلاد دارد و قدمت آن را به بیش از 2000 سال می رساند. ریچارد
                                            مک کلینتاک، پروفسور لاتین در کالج همپدن-سیدنی در ویرجینیا، یکی از نامفهوم‌ترین
                                            واژه‌های لاتین، را از یک قطعه لورم ایپسوم جستجو کرد، و با مرور منابع کشف شده این
                                            کلمه در ادبیات کلاسیک، منبع کشف شد.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="faqttl mb-3">بازگشت حمل و نقل</h3>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">I
                                    می خواهم خریدم را برگردانم! چه کار کنم؟</button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>لورم ایپسوم به سادگی متن ساختگی صنعت چاپ و حروفچینی است. لورم ایپسوم از دهه 1500 به
                                        عنوان متن ساختگی استاندارد صنعت بوده است، زمانی که یک چاپگر ناشناخته یک گالری از نوع
                                        را برداشت و آن را به هم زد تا یک کتاب نمونه بسازد. این نه تنها از پنج قرن جان سالم
                                        به در برده است، بلکه از جهشی به حروفچینی الکترونیکی نیز جان سالم به در برده است که
                                        اساساً بدون تغییر باقی مانده است.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">چگونه مدت زیادی طول می کشد تا بازپرداخت کنم؟</button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>این یک واقعیت ثابت شده است که خواننده هنگام نگاه کردن به صفحه‌بندی، با محتوای قابل
                                        خواندن یک صفحه، حواسش پرت می‌شود. نکته استفاده از این است که در مقایسه با استفاده از
                                        «محتوا در اینجا، محتوا در اینجا»، توزیع کم و بیش عادی حروف را دارد و آن را شبیه به
                                        انگلیسی خواندنی می‌کند. بسیاری از بسته های انتشارات دسکتاپ و ویرایشگرهای صفحه وب
                                        اکنون از استفاده می کنندبه عنوان متن مدل پیش فرض آنها.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNight" aria-expanded="false"
                                    aria-controls="collapseNight">چگونه آیا می توانم سفارش خود را لغو یا تغییر
                                    دهم؟</button>
                            </h2>
                            <div id="collapseNight" class="accordion-collapse collapse" aria-labelledby="headingNight"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>در هیچ زندگی در هوا یا از بستر وجود ندارد. کارتون و عکاسی در فضای باز. دروازه ای وجود
                                        ندارد، هدفی برای فوتبال وجود ندارد.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-0">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">چگونه
                                    آیا می توانم در صورت نیاز کمک دریافت کنم؟</button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p>بر خلاف تصور رایج، یک متن تصادفی نیست. این ریشه در یک قطعه از ادبیات کلاسیک لاتین
                                        مربوط به 45 قبل از میلاد دارد و قدمت آن را به بیش از 2000 سال می رساند. ریچارد مک
                                        کلینتاک، پروفسور لاتین در کالج همپدن-سیدنی در ویرجینیا، یکی از نامفهوم‌ترین واژه‌های
                                        لاتین، را از یک قطعه لورم ایپسوم جستجو کرد، و با مرور منابع کشف شده این کلمه در
                                        ادبیات کلاسیک، منبع کشف شد.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- پایان دادن به سبک فک -->
        </div>
        <!--End Main Content-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection
