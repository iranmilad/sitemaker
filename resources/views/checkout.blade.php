@extends('layouts.app')
@section('title', 'تکمیل سفارش')
@section('body', 'checkout-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>شیوه پرداخت یک صفحه ای 2</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="Back to the home page">خانه</a><span
                                class="main-title"><i class="icon anm anm-angle-left-l"></i>شیوه پرداخت یک صفحه ای 2</span>
                        </div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <!--برنامه پرداخت مرحله ناو-->
                    <div id="nav-tabs" class="step-checkout">
                        <ul class="nav nav-tabs step-items">
                            <li class="nav-item onactive">
                                <a class="nav-link active" data-bs-toggle="tab" href="#steps1">روش تسویه حساب</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#steps2">آدرس</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#steps3">خلاصه سفارش</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#steps4">پرداخت</a>
                            </li>
                        </ul>
                    </div>
                    <!--پایان پرداخت مرحله ناو-->

                    <!--برگه محتوای پرداخت-->
                    <div class="tab-content checkout-form">
                        <div class="tab-pane active" id="steps1">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                                    <div class="block h-100">
                                        <div class="block-content">
                                            <h3 class="title">به عنوان مهمان بررسی کنید یا ثبت نام کنید</h3>
                                            <p class="text-gray">برای راحتی در آینده با ما ثبت نام کنید:</p>
                                            <ul class="list-unstyled radio-group mb-4">
                                                <li>
                                                    <div class="checkout customRadio">
                                                        <input type="radio" id="option-1" name="selector"
                                                            checked="" />
                                                        <label for="option-1"> به عنوان مهمان پرداخت کنید</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkout customRadio">
                                                        <input type="radio" id="option-2" name="selector" />
                                                        <label for="option-2"> ثبت نام</label>
                                                    </div>
                                                </li>
                                            </ul>

                                            <h3 class="title">ثبت نام کنید و در زمان صرفه جویی کنید!</h3>
                                            <p class="text-gray">برای راحتی در آینده با ما ثبت نام کنید:</p>
                                            <ul class="lists-style1 text-gray mb-3">
                                                <li>سریع و آسان بررسی کنید</li>
                                                <li>دسترسی آسان به سابقه و وضعیت سفارش خود</li>
                                            </ul>
                                            <button type="submit" name="Continue" class="btn btn-primary">ادامه</button>
                                            <button type="submit" name="Continue"
                                                class="btn btn-secondary me-2 btnNext">آدرس بعدی</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="block h-100">
                                        <div class="block-content">
                                            <form method="post" action="#" class="login-form">
                                                <h3 class="title">از قبل ثبت نام کرده اید؟</h3>
                                                <p class="text-gray">لطفاً در زیر وارد شوید:</p>
                                                <div class="row">
                                                    <div class="col-12 form-group"><label for="CustomerEmail"
                                                            class="form-label">آدرس ایمیل <span
                                                                class="required">*</span></label>
                                                        <input type="email" name="customer[email]" placeholder=""
                                                            id="CustomerEmail" autofocus="" class="form-control">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label for="CustomerPassword" class="form-label">گذرواژه <span
                                                                class="required">*</span></label>
                                                        <input type="password" value="" name="customer[password]"
                                                            placeholder="" id="CustomerPassword" class="form-control">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <div class="remember-me customCheckbox">
                                                            <input id="Remember" name="Remember" type="checkbox"
                                                                value="به خاطر بسپار" required />
                                                            <label for="remember"> مرا به خاطر بسپار</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-between align-items-center">
                                                        <input type="submit" class="btn" value="ورود به سیستم">
                                                        <a href="forgot-password.html" class="btn-link">گذرواژه خود را
                                                            فراموش کرده اید؟</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="steps2">
                            <!--آدرس حمل و نقل-->
                            <div class="block shipping-address mb-4">
                                <div class="block-content">
                                    <h3 class="title mb-3">آدرس حمل و نقل</h3>
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="firstname" class="form-label">نام <span
                                                        class="required">*</span></label>
                                                <input name="firstname" value="" id="firstname" type="text"
                                                    required class="form-control">
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="lastname" class="form-label">نام خانوادگی <span
                                                        class="required">*</span></label>
                                                <input name="lastname" value="" id="lastname" type="text"
                                                    required class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="email" class="form-label">ایمیل <span
                                                        class="required">*</span></label>
                                                <input name="email" value="" id="email" type="email"
                                                    required class="form-control">
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="phone" class="form-label">تلفن <span
                                                        class="required">*</span></label>
                                                <input name="phone" value="" id="phone" type="tel"
                                                    required class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6"><label
                                                    for="address-1" class="form-label">آدرس <span
                                                        class="required">*</span></label>
                                                <input name="address_1" value="" id="address-1" type="text"
                                                    required placeholder="آدرس خیابان" class="form-control">
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="address-1" class="form-label d-none d-sm-block">&nbsp;</label>
                                                <input name="address_2" value="" id="address-2" type="text"
                                                    required placeholder="آپارتمان، سوئیت، واحد و غیره (اختیاری)"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="postcode" class="form-label">کد پستی / ZIP <span
                                                        class="required">*</span></label>
                                                <input name="postcode" value="" id="postcode" type="text"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="address_country1" class="form-label">کشور <span
                                                        class="required">*</span></label>
                                                <select id="address_country1" name="address[country]"
                                                    data-default="ایالات متحده" class="form-control">
                                                    <option value="0" label="انتخاب کشور" selected="selected">انتخاب
                                                        کشور</option>
                                                    <optgroup id="country-optgroup-Africa" label="آفریقا">
                                                        <option value="DZ" label="الجزایر">الجزایر</option>
                                                        <option value="AO" label="آنگولا">آنگولا</option>
                                                        <option value="BJ" label="بنین">بنین</option>
                                                        <option value="BW" label="بوتسوانا">بوتسوانا</option>
                                                        <option value="BF" label="بورکینافاسو">بورکینافاسو</option>
                                                        <option value="BI" label="بوروندی">بوروندی</option>
                                                        <option value="CM" label="کامرون">کامرون</option>
                                                        <option value="CV" label="کیپ ور">کیپ ورد</option>
                                                        <option value="CF" label="جمهوری آفریقای مرکزی">جمهوری آفریقای
                                                            مرکزی</option>
                                                        <option value="TD" label="چاد">چاد</option>
                                                        <option value="KM" label="کومور">کومور</option>
                                                        <option value="CG" label="کنگو - برازاویل">کنگو - برازاویل
                                                        </option>
                                                        <option value="CD" label="کنگو - کینشاسا">کنگو - کینشاسا
                                                        </option>
                                                        <option value="CI" label="ساحل عاج">ساحل عاج</option>
                                                        <option value="DJ" label="جیبوتی">جیبوتی</option>
                                                        <option value="EG" label="مصر">مصر</option>
                                                        <option value="GQ" label="گیینه استوایی">گیینه استوایی
                                                        </option>
                                                        <option value="ER" label="اریتره">اریتره</option>
                                                        <option value="ET" label="اتیوپی">اتیوپی</option>
                                                        <option value="GA" label="گابن">گابن</option>
                                                        <option value="GM" label="گامبیا">گامبیا</option>
                                                        <option value="GH" label="غنا">غنا</option>
                                                        <option value="GN" label="گینه">گینه</option>
                                                        <option value="GW" label="گیینه بیسائو">گیینه بیسائو</option>
                                                        <option value="KE" label="کنیا">کنیا</option>
                                                        <option value="LS" label="لسوتو">لسوتو</option>
                                                        <option value="LR" label="لیبریا">لیبریا</option>
                                                        <option value="LY" label="لیبی">لیبی</option>
                                                        <option value="MG" label="ماداگاسکار">ماداگاسکار</option>
                                                        <option value="MW" label="مالاوی">مالاوی</option>
                                                        <option value="ML" label="مالی">مالی</option>
                                                        <option value="MR" label="موریتانیا">موریتانیا</option>
                                                        <option value="MU" label="موریس">موریس</option>
                                                        <option value="YT" label="مایو">مایو</option>
                                                        <option value="MA" label="مراکش">مراکش</option>
                                                        <option value="MZ" label="موزامبیک">موزامبیک</option>
                                                        <option value="NA" label="نامیبیا">نامیبیا</option>
                                                        <option value="NE" label="نیجر">نیجر</option>
                                                        <option value="NG" label="نیجریه">نیجریه</option>
                                                        <option value="RW" label="روآندا">روآندا</option>
                                                        <option value="RE" label="رئونیون">رئونیون</option>
                                                        <option value="SH" label="سنت هلنا">سنت هلنا</option>
                                                        <option value="SN" label="سنگال">سنگال</option>
                                                        <option value="SC" label="سیشل">سیشل</option>
                                                        <option value="SL" label="سیرا لئون">سیرا لئون</option>
                                                        <option value="SO" label="سومالی">سومالی</option>
                                                        <option value="ZA" label="آفریقای جنوبی">آفریقای جنوبی
                                                        </option>
                                                        <option value="SD" label="سودان">سودان</option>
                                                        <option value="SZ" label="سوازیلند">سوازیلند</option>
                                                        <option value="ST" label="سائوتومه و پرنسیپ">سائوتومه و پرنسیپ
                                                        </option>
                                                        <option value="TZ" label="تانزانیا">تانزانیا</option>
                                                        <option value="TG" label="توگو">توگو</option>
                                                        <option value="TN" label="تونس">تونس</option>
                                                        <option value="UG" label="اوگاندا">اوگاندا</option>
                                                        <option value="EH" label="صحرای غربی">صحرای غربی</option>
                                                        <option value="ZM" label="زامبیا">زامبیا</option>
                                                        <option value="ZW" label="زیمبابوه">زیمبابوه</option>
                                                    </optgroup>
                                                    <optgroup id="country-optgroup-Americas" label = "آمریکا">
                                                        <option value="AI" label="آنگویلا">آنگویلا</option>
                                                        <option value="AG" label="آنتیگوا و باربودا">آنتیگوا و باربودا
                                                        </option>
                                                        <option value="AR" label="آرژانتین">آرژانتین</option>
                                                        <option value="AW" label="آروبا">آروبا</option>
                                                        <option value="BS" label="باهاما">باهاما</option>
                                                        <option value="BB" label="باربادوس">باربادوس</option>
                                                        <option value="BZ" label="بلیز">بلیز</option>
                                                        <option value="BM" label="برمودا">برمودا</option>
                                                        <option value="BO" label="بولیوی">بولیوی</option>
                                                        <option value="BR" label="برزيل">برزيل</option>
                                                        <option value="VG" label="جزایر ویرجین بریتانیا">جزایر ویرجین
                                                            بریتانیا</option>
                                                        <option value="CA" label="کانادا">کانادا</option>
                                                        <option value="KY" label="جزایر کیمن">جزایر کیمن</option>
                                                        <option value="CL" label="شیلی">شیلی</option>
                                                        <option value="CO" label="کلمبیا">کلمبیا</option>
                                                        <option value="CR" label="کاستاریکا">کاستاریکا</option>
                                                        <option value="CU" label="کوبا">کوبا</option>
                                                        <option value="DM" label="دومینیکا">دومینیکا</option>
                                                        <option value="DO" label="جمهوری دومینیکن">جمهوری دومینیکن
                                                        </option>
                                                        <option value="EC" label="اکوادور">اکوادور</option>
                                                        <option value="SV" label="السالوادور">السالوادور</option>
                                                        <option value="FK" label="جزایر فالکلند">جزایر فالکلند
                                                        </option>
                                                        <option value="GF" label="گویان فرانسه">گویان فرانسه</option>
                                                        <option value="GL" label="گرینلند">گرینلند</option>
                                                        <option value="GD" label="گرنادا">گرنادا</option>
                                                        <option value="GP" label="گوادلوپ">گوادلوپ</option>
                                                        <option value="GT" label="گواتمالا">گواتمالا</option>
                                                        <option value="GY" label="گویان">گویان</option>
                                                        <option value="HT" label="هائیتی">هائیتی</option>
                                                        <option value="HN" label="هندوراس">هندوراس</option>
                                                        <option value="JM" label="جامائیکا">جامائیکا</option>
                                                        <option value="MQ" label="مارتینیک">مارتینیک</option>
                                                        <option value="MX" label="مکزیک">مکزیک</option>
                                                        <option value="MS" label="مونتسرات">مونتسرات</option>
                                                        <option value="AN" label="آنتیل هلند">آنتیل هلند</option>
                                                        <option value="NI" label="نیکاراگوئه">نیکاراگوئه</option>
                                                        <option value="PA" label="پاناما">پاناما</option>
                                                        <option value="PY" label="پاراگوئه">پاراگوئه</option>
                                                        <option value="PE" label="پرو">پرو</option>
                                                        <option value="PR" label="پورتوریکو">پورتوریکو</option>
                                                        <option value="BL" label="سنت بارتلمی">سنت بارتلمی</option>
                                                        <option value="KN" label="سنت کیتس و نویس">سنت کیتس و نویس
                                                        </option>
                                                        <option value="LC" label="سنت لوسیا">سنت لوسیا</option>
                                                        <option value="MF" label="سنت مارتین">سنت مارتین</option>

                                                        <option value="VC" label="نت وینسنت و گرنادین ها">سنت وینسنت و
                                                            گرنادین ها</option>
                                                        <option value="SR" label="سورینام">سورینام</option>
                                                        <option value="TT" label="رینیداد و توباگو">ترینیداد و توباگو
                                                        </option>
                                                        <option value="TC" label="جزایر تورکس و کایکوس">جزایر تورکس و
                                                            کایکوس</option>
                                                        <option value="VI" label="جزایر ویرجین ایالات متحده">ایالات
                                                            متحده جزایر ویرجین</option>
                                                        <option value="US" label="ایالات متحده">ایالات متحده</option>
                                                        <option value="UY" label="اروگوئه">اروگوئه</option>
                                                        <option value="VE" label="ونزوئلا">ونزوئلا</option>
                                                    </optgroup>
                                                    <optgroup id="country-optgroup-As" label="اسیا">
                                                        <option value="AF" label="افغانستان">افغانستان</option>
                                                        <option value="AM" label="ارمنستان">ارمنستان</option>
                                                        <option value="AZ" label="آذربایجان">آذربایجان</option>
                                                        <option value="BH" label="بحرین">بحرین</option>
                                                        <option value="BD" label="بنگلادش">بنگلادش</option>
                                                        <option value="BT" label="بوتان">بوتان</option>
                                                        <option value="BN" label="برونئی">برونئی</option>
                                                        <option value="KH" label="کامبوج">کامبوج</option>
                                                        <option value="CN" label="چین">چین</option>
                                                        <option value="GE" label="گرجستان">گرجستان</option>
                                                        <option value="HK" label="هنگ کنگ چین">هنگ کنگ SAR چین
                                                        </option>
                                                        <option value="IN" label="هند">هند</option>
                                                        <option value="ID" label="اندونزی">اندونزی</option>
                                                        <option value="IR" label="ایران">ایران</option>
                                                        <option value="IQ" label="عراق">عراق</option>
                                                        <option value="IL" label="اسرائیل">اسرائیل</option>
                                                        <option value="JP" label="ژاپن">ژاپن</option>
                                                        <option value="JO" label="اردن">اردن</option>
                                                        <option value="KZ" label="قزاقستان">قزاقستان</option>
                                                        <option value="KW" label="کویت">کویت</option>
                                                        <option value="KG" label="قرقیزستان">قرقیزستان</option>
                                                        <option value="LA" label="لائوس">لائوس</option>
                                                        <option value="LB" label="لبنان">لبنان</option>
                                                        <option value="MO" label="ماکائو چین">ماکائو SAR چین</option>
                                                        <option value="MY" label="مالزی">مالزی</option>
                                                        <option value="MV" label="مالدیو">مالدیو</option>
                                                        <option value="MN" label="مغولستان">مغولستان</option>
                                                        <option value="MM" label="میانمار [برمه]">میانمار [برمه]
                                                        </option>
                                                        <option value="NP" label="نپال">نپال</option>
                                                        <option value="NT" label="منطقه خنثی">منطقه خنثی</option>
                                                        <option value="KP" label="کره شمالی">کره شمالی</option>
                                                        <option value="OM" label="عمان">عمان</option>
                                                        <option value="PK" label="پاکستان">پاکستان</option>
                                                        <option value="PS" label="سرزمین های فلسطینی">سرزمین های
                                                            فلسطینی</option>
                                                        <option value="YD"
                                                            label="People's Democratic Republic of یمن">جمهوری دموکراتیک
                                                            خلق یمن</option>
                                                        <option value="PH" label="فیلیپین">فیلیپین</option>
                                                        <option value="QA" label="قطر">قطر</option>
                                                        <option value="SA" label="عربستان سعودی">عربستان سعودی
                                                        </option>
                                                        <option value="SG" label="سنگاپور">سنگاپور</option>
                                                        <option value="KR" label="کره جنوبی">کره جنوبی</option>
                                                        <option value="LK" label="سری‌لانکا">سری‌لانکا</option>
                                                        <option value="SY" label="سوریه">سوریه</option>
                                                        <option value="TW" label="تایوان">تایوان</option>
                                                        <option value="TJ" label="تاجیکستان">تاجیکستان</option>
                                                        <option value="TH" label="تایلند">تایلند</option>
                                                        <option value="TL" label="تیمور شرقی">تیمور شرقی</option>
                                                        <option value="TR" label="ترکیه">ترکیه</option>
                                                        <option value="TM" label="ترکمنستان">ترکمنستان</option>
                                                        <option value="AE" label="امارات متحده عربی">امارات متحده عربی
                                                        </option>
                                                        <option value="UZ" label="ازبکستان">ازبکستان</option>
                                                        <option value="VN" label="ویتنام">ویتنام</option>
                                                        <option value="YE" label="یمن">یمن</option>
                                                    </optgroup>
                                                    <optgroup id="country-optgroup-Eu" label="اروپا">
                                                        <option value="AL" label="آلبانی">آلبانی</option>
                                                        <option value="AD" label="آندورا">آندورا</option>
                                                        <option value="AT" label="اتریش">اتریش</option>
                                                        <option value="BY" label="بلاروس">بلاروس</option>
                                                        <option value="BE" label="بلژیک">بلژیک</option>
                                                        <option value="BA" label="بوسنی و هرزگوین">بوسنی و هرزگوین
                                                        </option>
                                                        <option value="BG" label="بلغارستان">بلغارستان</option>
                                                        <option value="HR" label="کرواسی">کرواسی</option>
                                                        <option value="CY" label="قبرس">قبرس</option>
                                                        <option value="CZ" label="جمهوری چک">جمهوری چک</option>
                                                        <option value="DK" label="دانمارک">دانمارک</option>
                                                        <option value="DD" label="آلمان شرقی">آلمان شرقی</option>
                                                        <option value="EE" label="استونی">استونی</option>
                                                        <option value="FO" label="جزایر فارو">جزایر فارو</option>
                                                        <option value="FI" label="فنلاند">فنلاند</option>
                                                        <option value="FR" label="فرانسه">فرانسه</option>
                                                        <option value="DE" label="آلمان">آلمان</option>
                                                        <option value="GI" label="جبل الطارق">جبل الطارق</option>
                                                        <option value="GR" label="یونان">یونان</option>
                                                        <option value="GG" label="گرنزی">گرنزی</option>
                                                        <option value="HU" label="مجارستان">مجارستان</option>
                                                        <option value="IS" label="ایسلند">ایسلند</option>
                                                        <option value="IE" label="ایرلند">ایرلند</option>
                                                        <option value="IM" label="جزیره مرد">جزیره مرد</option>
                                                        <option value="IT" label="ایتالیا">ایتالیا</option>
                                                        <option value="JE" label="جرسی">جرسی</option>
                                                        <option value="LV" label="لتونی">لتونی</option>
                                                        <option value="LI" label="لیختن اشتاین">لیختن اشتاین</option>
                                                        <option value="LT" label="لیتوانی">لیتوانی</option>
                                                        <option value="LU" label="لوکزامبورگ">لوکزامبورگ</option>
                                                        <option value="MK" label="مقدونیه">مقدونیه</option>
                                                        <option value="MT" label="مالتا">مالتا</option>
                                                        <option value="FX" label="متروپولیتن فرانسه">متروپولیتن فرانسه
                                                        </option>
                                                        <option value="MD" label="مولداوی">مولداوی</option>
                                                        <option value="MC" label="موناکو">موناکو</option>
                                                        <option value="ME" label="مونته نگرو">مونته نگرو</option>
                                                        <option value="NL" label="هلند">هلند</option>
                                                        <option value="NO" label="نروژ">نروژ</option>
                                                        <option value="PL" label="لهستان">لهستان</option>
                                                        <option value="PT" label="پرتغال">پرتغال</option>
                                                        <option value="RO" label="عمان">رومانی</option>
                                                        <option value="RU" label="روسیه">روسیه</option>
                                                        <option value="SM" label="سن مارینو">سن مارینو</option>
                                                        <option value="RS" label="صربستان">صربستان</option>
                                                        <option value="CS" label="صربستان و مونته نگرو">صربستان و
                                                            مونته نگرو</option>
                                                        <option value="SK" label="اسلواکی">اسلواکی</option>
                                                        <option value="SI" label="اسلوونی">اسلوونی</option>
                                                        <option value="ES" label="اسپانیا">اسپانیا</option>
                                                        <option value="SJ" label="سوالبارد و یان ماین">سوالبارد و یان
                                                            ماین</option>
                                                        <option value="SE" label="سوئد">سوئد</option>
                                                        <option value="CH" label="سوئیس">سوئیس</option>
                                                        <option value="UA" label="اوکراین">اوکراین</option>
                                                        <option value="SU"
                                                            label="اتحادیه جمهوری های سوسیالیستی شوروی">اتحادیه جمهوری های
                                                            سوسیالیستی شوروی</option>
                                                        <option value="GB" label="بریتانیا">بریتانیا</option>
                                                        <option value="VA" label="شهر واتیکان">شهر واتیکان</option>
                                                        <option value="AX" label="جزایر آلند">جزایر آلند</option>
                                                    </optgroup>
                                                    <optgroup id="country-optgroup-اقیانوسیه" label="اقیانوسیه">
                                                        <option value="AS" label="ساموآی آمریکا">ساموآی آمریکا
                                                        </option>
                                                        <option value="AQ" label="قطب جنوب">قطب جنوب</option>
                                                        <option value="AU" label="استرالیا">استرالیا</option>
                                                        <option value="BV" label="جزیره بووه">جزیره بووه</option>
                                                        <option value="IO" label="منطقه اقیانوس هند بریتانیا">منطقه
                                                            اقیانوس هند بریتانیا</option>
                                                        <option value="CX" label="جزیره کریسمس">جزیره کریسمس</option>
                                                        <option value="CC" label="جزایر کوکوس [کیلینگ]">جزایر کوکوس
                                                        </option>
                                                        <option value="CK" label="جزایر کوک">جزایر کوک</option>
                                                        <option value="FJ" label="فیجی">فیجی</option>
                                                        <option value="PF" label="پلی‌نزی فرانسه">پلی‌نزی فرانسه
                                                        </option>
                                                        <option value="TF" label="سرزمین های جنوبی فرانسه">سرزمین های
                                                            جنوبی فرانسه</option>
                                                        <option value="GU" label="گوام">گوام</option>
                                                        <option value="HM" label="جزیره هرد و جزایر مک دونالد">جزیره
                                                            هرد و جزایر مک دونالد</option>
                                                        <option value="KI" label="کیریباتی">کیریباتی</option>
                                                        <option value="MH" label="جزایر مارشال">جزایر مارشال</option>
                                                        <option value="FM" label="میکرونزی">میکرونزی</option>
                                                        <option value="NR" label="نائورو">نائورو</option>
                                                        <option value="NC" label="کالدونیای جدید">کالدونیای جدید
                                                        </option>
                                                        <option value="NZ" label="نیوزیلند">نیوزیلند</option>
                                                        <option value="NU" label="نیو">نیو</option>
                                                        <option value="NF" label="جزیره نورفولک">جزیره نورفولک
                                                        </option>
                                                        <option value="MP" label="جزایر ماریانای شمالی">جزایر ماریانای
                                                            شمالی</option>
                                                        <option value="PW" label="پالائو">پالائو</option>
                                                        <option value="PG" label="پاپوآ گینه نو">پاپوآ گینه نو
                                                        </option>
                                                        <option value="PN" label="جزایر پیتکرن">جزایر پیتکرن</option>
                                                        <option value="WS" label="ساموآ">ساموآ</option>
                                                        <option value="SB" label="جزایر سلیمان">جزایر سلیمان</option>
                                                        <option value="GS"
                                                            label="گرجستان جنوبی و جزایر ساندویچ جنوبی">گرجستان جنوبی و
                                                            جزایر ساندویچ جنوبی</option>
                                                        <option value="TK" label="توکلائو">توکلائو</option>
                                                        <option value="TO" label="تونگا">تونگا</option>
                                                        <option value="TV" label="تووالو">تووالو</option>
                                                        <option value="UM" label="جزایر کوچک دورافتاده ایالات متحده">
                                                            ایالات متحده جزایر دورافتاده کوچک</option>
                                                        <option value="VU" label="وانواتو">وانواتو</option>
                                                        <option value="WF" label="والیس و فوتونا">والیس و فوتونا
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="address_State" class="form-label">وضعیت <span
                                                        class="required">*</span></label>
                                                <select id="address_State" name="address[State]" data-default=""
                                                    class="form-control">
                                                    <option value="0" label="یک ایالت را انتخاب کنید"
                                                        selected="selected">یک حالت را انتخاب کنید</option>
                                                    <option value="AL">آلاباما</option>
                                                    <option value="AK">آلاسکا</option>
                                                    <option value="AZ">آریزونا</option>
                                                    <option value="AR">آرکانزاس</option>
                                                    <option value="CA">کالیفرنیا</option>
                                                    <option value="CO">کلرادو</option>
                                                    <option value="CT">کانکتیکات</option>
                                                    <option value="DE">دلاور</option>
                                                    <option value="DC">منطقه کلمبیا</option>
                                                    <option value="FL">فلوریدا</option>
                                                    <option value="GA">گرجستان</option>
                                                    <option value="HI">هاوایی</option>
                                                    <option value="ID">آیداهو</option>
                                                    <option value="IL">ایلینوی</option>
                                                    <option value="IN">ایندیانا</option>
                                                    <option value="IA">آیووا</option>
                                                    <option value="KS">کانزاس</option>
                                                    <option value="KY">کنتاکی</option>
                                                    <option value="LA">لوئیزیانا</option>
                                                    <option value="ME">مین</option>
                                                    <option value="MD">مریلند</option>
                                                    <option value="MA">ماساچوست</option>
                                                    <option value="MI">میشیگان</option>
                                                    <option value="MN">مینسوتا</option>
                                                    <option value="MS">می سی سی پی</option>
                                                    <option value="MO">میسوری</option>
                                                    <option value="MT">مونتانا</option>
                                                    <option value="NE">نبراسکا</option>
                                                    <option value="NV">نوادا</option>
                                                    <option value="NH">نیوهمپشایر</option>
                                                    <option value="NJ">نیوجرسی</option>
                                                    <option value="NM">نیومکزیکو</option>
                                                    <option value="NY">نیویورک</option>
                                                    <option value="NC">کارولینای شمالی</option>
                                                    <option value="ND">داکوتای شمالی</option>
                                                    <option value="OH">اوهایو</option>
                                                    <option value="OK">اوکلاهما</option>
                                                    <option value="OR">اورگان</option>
                                                    <option value="PA">پنسیلوانیا</option>
                                                    <option value="RI">رود آیلند</option>
                                                    <option value="SC">کارولینای جنوبی</option>
                                                    <option value="SD">داکوتای جنوبی</option>
                                                    <option value="TN">تنسی</option>
                                                    <option value="TX">تگزاس</option>
                                                    <option value="UT">یوتا</option>
                                                    <option value="VT">ورمونت</option>
                                                    <option value="VA">ویرجینیا</option>
                                                    <option value="WA">واشنگتن</option>
                                                    <option value="WV">ویرجینیای غربی</option>
                                                    <option value="WI">ویسکانسین</option>
                                                    <option value="WY">وایومینگ</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="address_province" class="form-label">شهرک / شهر <span
                                                        class="required">*</span></label><select id="address_province"
                                                    name="address[province]" data-default="" class="form-control">
                                                    <option value="0" label="انتخاب شهر" selected="selected">انتخاب
                                                        شهر</option>
                                                    <option value="AR">آرکانزاس</option>
                                                    <option value="CA">کالیفرنیا</option>
                                                    <option value="DE">دلاور</option>
                                                    <option value="FL">فلوریدا</option>
                                                    <option value="GA">گرجستان</option>
                                                    <option value="HI">هاوایی</option>
                                                    <option value="ID">آیداهو</option>
                                                    <option value="KS">کانزاس</option>
                                                    <option value="LA">لوئیزیانا</option>
                                                    <option value="ME">مین</option>
                                                    <option value="NC">کارولینای شمالی</option>
                                                    <option value="OR">اورگان</option>
                                                    <option value="PA">پنسیلوانیا</option>
                                                    <option value="RI">رود آیلند</option>
                                                    <option value="SC">کارولینای جنوبی</option>
                                                    <option value="SD">داکوتای جنوبی</option>
                                                    <option value="UT">یوتا</option>
                                                    <option value="VA">ویرجینیا</option>
                                                    <option value="WY">وایومینگ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-12 mb-0">
                                                <div class="checkout-tearm customCheckbox">
                                                    <input id="checkout_tearm" name="tearm" type="checkbox"
                                                        value="تیم پرداخت" required />
                                                    <label for="checkout_tearm"> ذخیره آدرس در حساب من</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!--آدرس پایان ارسال-->
                            <!--آدرس صورتحساب-->
                            <div class="block billing-address mb-4">
                                <div class="block-content">
                                    <h3 class="title mb-3">آدرس صورتحساب</h3>
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-12">
                                                <div class="checkout-tearm customCheckbox">
                                                    <input id="add_tearm" name="tearm" type="checkbox"
                                                        value="تیم پرداخت" required />
                                                    <label for="add_tearm"> مانند آدرس حمل و نقل</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="address-11" class="form-label">آدرس <span
                                                        class="required">*</span></label>
                                                <input name="address_11" value="" id="address-11" type="text"
                                                    required placeholder="آدرس خیابان" class="form-control">
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6"><label
                                                    for="address-12" class="form-label d-none d-sm-block">&nbsp;</label>
                                                <input name="address_12" value="" id="address-12" type="text"
                                                    required placeholder="آپارتمان، سوئیت، واحد و غیره (اختیاری)"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="postcode2" class="form-label">کد پستی / ZIP <span
                                                        class="required">*</span></label>
                                                <input name="postcode2" value="" id="postcode2" type="text"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="address_country2" class="form-label">کشور <span
                                                        class="required">*</span></label>
                                                <select id="address_country2" name="address[country1]"
                                                    data-default="ایالات متحده" class="form-control">
                                                    <option value="0" label="انتخاب کشور" selected="selected">انتخاب
                                                        کشور</option>
                                                    <optgroup id="country-optgroup-Af" label="آفریقا">
                                                        <option value="DZ" label="الجزایر">الجزایر</option>
                                                        <option value="AO" label="آنگولا">آنگولا</option>
                                                        <option value="BJ" label="بنین">بنین</option>
                                                        <option value="BW" label="بوتسوانا">بوتسوانا</option>
                                                        <option value="BF" label="بورکینافاسو">بورکینافاسو</option>
                                                        <option value="BI" label="بوروندی">بوروندی</option>
                                                        <option value="CM" label="کامرون">کامرون</option>
                                                        <option value="CV" label="کیپ ور">کیپ ورد</option>
                                                        <option value="CF" label="جمهوری آفریقای مرکزی">جمهوری آفریقای
                                                            مرکزی</option>
                                                        <option value="TD" label="چاد">چاد</option>
                                                        <option value="KM" label="کومور">کومور</option>
                                                        <option value="CG" label="کنگو - برازاویل">کنگو - برازاویل
                                                        </option>
                                                        <option value="CD" label="کنگو - کینشاسا">کنگو - کینشاسا
                                                        </option>
                                                        <option value="CI" label="ساحل عاج">ساحل عاج</option>
                                                        <option value="DJ" label="جیبوتی">جیبوتی</option>
                                                        <option value="EG" label="مصر">مصر</option>
                                                        <option value="GQ" label="گیینه استوایی">گیینه استوایی
                                                        </option>
                                                        <option value="ER" label="اریتره">اریتره</option>
                                                        <option value="ET" label="اتیوپی">اتیوپی</option>
                                                        <option value="GA" label="گابن">گابن</option>
                                                        <option value="GM" label="گامبیا">گامبیا</option>
                                                        <option value="GH" label="غنا">غنا</option>
                                                        <option value="GN" label="گینه">گینه</option>
                                                        <option value="GW" label="گیینه بیسائو">گیینه بیسائو</option>
                                                        <option value="KE" label="کنیا">کنیا</option>
                                                        <option value="LS" label="لسوتو">لسوتو</option>
                                                        <option value="LR" label="لیبریا">لیبریا</option>
                                                        <option value="LY" label="لیبی">لیبی</option>
                                                        <option value="MG" label="ماداگاسکار">ماداگاسکار</option>
                                                        <option value="MW" label="مالاوی">مالاوی</option>
                                                        <option value="ML" label="مالی">مالی</option>
                                                        <option value="MR" label="موریتانیا">موریتانیا</option>
                                                        <option value="MU" label="موریس">موریس</option>
                                                        <option value="YT" label="مایو">مایو</option>
                                                        <option value="MA" label="مراکش">مراکش</option>
                                                        <option value="MZ" label="موزامبیک">موزامبیک</option>
                                                        <option value="NA" label="نامیبیا">نامیبیا</option>
                                                        <option value="NE" label="نیجر">نیجر</option>
                                                        <option value="NG" label="نیجریه">نیجریه</option>
                                                        <option value="RW" label="روآندا">روآندا</option>
                                                        <option value="RE" label="رئونیون">رئونیون</option>
                                                        <option value="SH" label="سنت هلنا">سنت هلنا</option>
                                                        <option value="SN" label="سنگال">سنگال</option>
                                                        <option value="SC" label="سیشل">سیشل</option>
                                                        <option value="SL" label="سیرا لئون">سیرا لئون</option>
                                                        <option value="SO" label="سومالی">سومالی</option>
                                                        <option value="ZA" label="آفریقای جنوبی">آفریقای جنوبی
                                                        </option>
                                                        <option value="SD" label="سودان">سودان</option>
                                                        <option value="SZ" label="سوازیلند">سوازیلند</option>
                                                        <option value="ST" label="سائوتومه و پرنسیپ">سائوتومه و پرنسیپ
                                                        </option>
                                                        <option value="TZ" label="تانزانیا">تانزانیا</option>
                                                        <option value="TG" label="توگو">توگو</option>
                                                        <option value="TN" label="تونس">تونس</option>
                                                        <option value="UG" label="اوگاندا">اوگاندا</option>
                                                        <option value="EH" label="صحرای غربی">صحرای غربی</option>
                                                        <option value="ZM" label="زامبیا">زامبیا</option>
                                                        <option value="ZW" label="زیمبابوه">زیمبابوه</option>
                                                    </optgroup>
                                                    <optgroup id="country-optgroup-Am" label = "آمریکا">
                                                        <option value="AI" label="آنگویلا">آنگویلا</option>
                                                        <option value="AG" label="آنتیگوا و باربودا">آنتیگوا و باربودا
                                                        </option>
                                                        <option value="AR" label="آرژانتین">آرژانتین</option>
                                                        <option value="AW" label="آروبا">آروبا</option>
                                                        <option value="BS" label="باهاما">باهاما</option>
                                                        <option value="BB" label="باربادوس">باربادوس</option>
                                                        <option value="BZ" label="بلیز">بلیز</option>
                                                        <option value="BM" label="برمودا">برمودا</option>
                                                        <option value="BO" label="بولیوی">بولیوی</option>
                                                        <option value="BR" label="برزيل">برزيل</option>
                                                        <option value="VG" label="جزایر ویرجین بریتانیا">جزایر ویرجین
                                                            بریتانیا</option>
                                                        <option value="CA" label="کانادا">کانادا</option>
                                                        <option value="KY" label="جزایر کیمن">جزایر کیمن</option>
                                                        <option value="CL" label="شیلی">شیلی</option>
                                                        <option value="CO" label="کلمبیا">کلمبیا</option>
                                                        <option value="CR" label="کاستاریکا">کاستاریکا</option>
                                                        <option value="CU" label="کوبا">کوبا</option>
                                                        <option value="DM" label="دومینیکا">دومینیکا</option>
                                                        <option value="DO" label="جمهوری دومینیکن">جمهوری دومینیکن
                                                        </option>
                                                        <option value="EC" label="اکوادور">اکوادور</option>
                                                        <option value="SV" label="السالوادور">السالوادور</option>
                                                        <option value="FK" label="جزایر فالکلند">جزایر فالکلند
                                                        </option>
                                                        <option value="GF" label="گویان فرانسه">گویان فرانسه
                                                        </option>
                                                        <option value="GL" label="گرینلند">گرینلند</option>
                                                        <option value="GD" label="گرنادا">گرنادا</option>
                                                        <option value="GP" label="گوادلوپ">گوادلوپ</option>
                                                        <option value="GT" label="گواتمالا">گواتمالا</option>
                                                        <option value="GY" label="گویان">گویان</option>
                                                        <option value="HT" label="هائیتی">هائیتی</option>
                                                        <option value="HN" label="هندوراس">هندوراس</option>
                                                        <option value="JM" label="جامائیکا">جامائیکا</option>
                                                        <option value="MQ" label="مارتینیک">مارتینیک</option>
                                                        <option value="MX" label="مکزیک">مکزیک</option>
                                                        <option value="MS" label="مونتسرات">مونتسرات</option>
                                                        <option value="AN" label="آنتیل هلند">آنتیل هلند</option>
                                                        <option value="NI" label="نیکاراگوئه">نیکاراگوئه</option>
                                                        <option value="PA" label="پاناما">پاناما</option>
                                                        <option value="PY" label="پاراگوئه">پاراگوئه</option>
                                                        <option value="PE" label="پرو">پرو</option>
                                                        <option value="PR" label="پورتوریکو">پورتوریکو</option>
                                                        <option value="BL" label="سنت بارتلمی">سنت بارتلمی</option>
                                                        <option value="KN" label="سنت کیتس و نویس">سنت کیتس و نویس
                                                        </option>
                                                        <option value="LC" label="سنت لوسیا">سنت لوسیا</option>
                                                        <option value="MF" label="سنت مارتین">سنت مارتین</option>
                                                        <option value="PM" label="سنت پیر و میکلون">سنت پیر و میکلون
                                                        </option>
                                                        <option value="VC" label="نت وینسنت و گرنادین ها">سنت وینسنت
                                                            و گرنادین ها</option>
                                                        <option value="SR" label="سورینام">سورینام</option>
                                                        <option value="TT" label="رینیداد و توباگو">ترینیداد و
                                                            توباگو</option>
                                                        <option value="TC" label="جزایر تورکس و کایکوس">جزایر تورکس
                                                            و کایکوس</option>
                                                        <option value="VI" label="جزایر ویرجین ایالات متحده">ایالات
                                                            متحده جزایر ویرجین</option>
                                                        <option value="US" label="ایالات متحده">ایالات متحده
                                                        </option>
                                                        <option value="UY" label="اروگوئه">اروگوئه</option>
                                                        <option value="VE" label="ونزوئلا">ونزوئلا</option>
                                                    </optgroup>
                                                    <optgroup id="country-optgroup-اسیا" label="اسیا">
                                                        <option value="AF" label="افغانستان">افغانستان</option>
                                                        <option value="AM" label="ارمنستان">ارمنستان</option>
                                                        <option value="AZ" label="آذربایجان">آذربایجان</option>
                                                        <option value="BH" label="بحرین">بحرین</option>
                                                        <option value="BD" label="بنگلادش">بنگلادش</option>
                                                        <option value="BT" label="بوتان">بوتان</option>
                                                        <option value="BN" label="برونئی">برونئی</option>
                                                        <option value="KH" label="کامبوج">کامبوج</option>
                                                        <option value="CN" label="چین">چین</option>
                                                        <option value="GE" label="گرجستان">گرجستان</option>
                                                        <option value="HK" label="هنگ کنگ چین">هنگ کنگ SAR چین
                                                        </option>
                                                        <option value="IN" label="هند">هند</option>
                                                        <option value="ID" label="اندونزی">اندونزی</option>
                                                        <option value="IR" label="ایران">ایران</option>
                                                        <option value="IQ" label="عراق">عراق</option>
                                                        <option value="IL" label="اسرائیل">اسرائیل</option>
                                                        <option value="JP" label="ژاپن">ژاپن</option>
                                                        <option value="JO" label="اردن">اردن</option>
                                                        <option value="KZ" label="قزاقستان">قزاقستان</option>
                                                        <option value="KW" label="کویت">کویت</option>
                                                        <option value="KG" label="قرقیزستان">قرقیزستان</option>
                                                        <option value="LA" label="لائوس">لائوس</option>
                                                        <option value="LB" label="لبنان">لبنان</option>
                                                        <option value="MO" label="ماکائو چین">ماکائو SAR چین
                                                        </option>
                                                        <option value="MY" label="مالزی">مالزی</option>
                                                        <option value="MV" label="مالدیو">مالدیو</option>
                                                        <option value="MN" label="مغولستان">مغولستان</option>
                                                        <option value="MM" label="میانمار [برمه]">میانمار [برمه]
                                                        </option>
                                                        <option value="NP" label="نپال">نپال</option>
                                                        <option value="NT" label="منطقه خنثی">منطقه خنثی</option>
                                                        <option value="KP" label="کره شمالی">کره شمالی</option>
                                                        <option value="OM" label="عمان">عمان</option>
                                                        <option value="PK" label="پاکستان">پاکستان</option>
                                                        <option value="PS" label="سرزمین های فلسطینی">سرزمین های
                                                            فلسطینی</option>
                                                        <option value="YD" label="جمهوری دموکراتیک خلق یمن">جمهوری
                                                            دموکراتیک خلق یمن</option>
                                                        <option value="PH" label="فیلیپین">فیلیپین</option>
                                                        <option value="QA" label="قطر">قطر</option>
                                                        <option value="SA" label="عربستان سعودی">عربستان سعودی
                                                        </option>
                                                        <option value="SG" label="سنگاپور">سنگاپور</option>
                                                        <option value="KR" label="کره جنوبی">کره جنوبی</option>
                                                        <option value="LK" label="سری‌لانکا">سری‌لانکا</option>
                                                        <option value="SY" label="سوریه">سوریه</option>
                                                        <option value="TW" label="تایوان">تایوان</option>
                                                        <option value="TJ" label="تاجیکستان">تاجیکستان</option>
                                                        <option value="TH" label="تایلند">تایلند</option>
                                                        <option value="TL" label="تیمور شرقی">تیمور شرقی</option>
                                                        <option value="TR" label="ترکیه">ترکیه</option>
                                                        <option value="TM" label="ترکمنستان">ترکمنستان</option>
                                                        <option value="AE" label="امارات متحده عربی">امارات متحده
                                                            عربی</option>
                                                        <option value="UZ" label="ازبکستان">ازبکستان</option>
                                                        <option value="VN" label="ویتنام">ویتنام</option>
                                                        <option value="YE" label="یمن">یمن</option>
                                                    </optgroup>
                                                    <optgroup id="country-optgroup-Europe" label="اروپا">
                                                        <option value="AL" label="آلبانی">آلبانی</option>
                                                        <option value="AD" label="آندورا">آندورا</option>
                                                        <option value="AT" label="اتریش">اتریش</option>
                                                        <option value="BY" label="بلاروس">بلاروس</option>
                                                        <option value="BE" label="بلژیک">بلژیک</option>
                                                        <option value="BA" label="بوسنی و هرزگوین">بوسنی و هرزگوین
                                                        </option>
                                                        <option value="BG" label="بلغارستان">بلغارستان</option>
                                                        <option value="HR" label="کرواسی">کرواسی</option>
                                                        <option value="CY" label="قبرس">قبرس</option>
                                                        <option value="CZ" label="جمهوری چک">جمهوری چک</option>
                                                        <option value="DK" label="دانمارک">دانمارک</option>
                                                        <option value="DD" label="آلمان شرقی">آلمان شرقی</option>
                                                        <option value="EE" label="استونی">استونی</option>
                                                        <option value="FO" label="جزایر فارو">جزایر فارو</option>
                                                        <option value="FI" label="فنلاند">فنلاند</option>
                                                        <option value="FR" label="فرانسه">فرانسه</option>
                                                        <option value="DE" label="آلمان">آلمان</option>
                                                        <option value="GI" label="جبل الطارق">جبل الطارق</option>
                                                        <option value="GR" label="یونان">یونان</option>
                                                        <option value="GG" label="گرنزی">گرنزی</option>
                                                        <option value="HU" label="مجارستان">مجارستان</option>
                                                        <option value="IS" label="ایسلند">ایسلند</option>
                                                        <option value="IE" label="ایرلند">ایرلند</option>
                                                        <option value="IM" label="جزیره مرد">جزیره مرد</option>
                                                        <option value="IT" label="ایتالیا">ایتالیا</option>
                                                        <option value="JE" label="جرسی">جرسی</option>
                                                        <option value="LV" label="لتونی">لتونی</option>
                                                        <option value="LI" label="لیختن اشتاین">لیختن اشتاین
                                                        </option>
                                                        <option value="LT" label="لیتوانی">لیتوانی</option>
                                                        <option value="LU" label="لوکزامبورگ">لوکزامبورگ</option>
                                                        <option value="MK" label="مقدونیه">مقدونیه</option>
                                                        <option value="MT" label="مالتا">مالتا</option>
                                                        <option value="FX" label="متروپولیتن فرانسه">متروپولیتن
                                                            فرانسه</option>
                                                        <option value="MD" label="مولداوی">مولداوی</option>
                                                        <option value="MC" label="موناکو">موناکو</option>
                                                        <option value="ME" label="مونته نگرو">مونته نگرو</option>
                                                        <option value="NL" label="هلند">هلند</option>
                                                        <option value="NO" label="نروژ">نروژ</option>
                                                        <option value="PL" label="لهستان">لهستان</option>
                                                        <option value="PT" label="پرتغال">پرتغال</option>
                                                        <option value="RO" label="عمان">رومانی</option>
                                                        <option value="RU" label="روسیه">روسیه</option>
                                                        <option value="SM" label="سن مارینو">سن مارینو</option>
                                                        <option value="RS" label="صربستان">صربستان</option>
                                                        <option value="CS" label="صربستان و مونته نگرو">صربستان و
                                                            مونته نگرو</option>
                                                        <option value="SK" label="اسلواکی">اسلواکی</option>
                                                        <option value="SI" label="اسلوونی">اسلوونی</option>
                                                        <option value="ES" label="اسپانیا">اسپانیا</option>
                                                        <option value="SJ" label="سوالبارد و یان ماین">سوالبارد و
                                                            یان ماین</option>
                                                        <option value="SE" label="سوئد">سوئد</option>
                                                        <option value="CH" label="سوئیس">سوئیس</option>
                                                        <option value="UA" label="اوکراین">اوکراین</option>
                                                        <option value="SU"
                                                            label="اتحادیه جمهوری های سوسیالیستی شوروی">اتحادیه جمهوری های
                                                            سوسیالیستی شوروی</option>
                                                        <option value="GB" label="بریتانیا">بریتانیا</option>
                                                        <option value="VA" label="شهر واتیکان">شهر واتیکان</option>
                                                        <option value="AX" label="جزایر آلند">جزایر آلند</option>
                                                    </optgroup>
                                                    <optgroup id="country-optgroup-Oc" label="اقیانوسیه">
                                                        <option value="AS" label="ساموآی آمریکا">ساموآی آمریکا
                                                        </option>
                                                        <option value="AQ" label="قطب جنوب">قطب جنوب</option>
                                                        <option value="AU" label="استرالیا">استرالیا</option>
                                                        <option value="BV" label="جزیره بووه">جزیره بووه</option>
                                                        <option value="IO" label="منطقه اقیانوس هند بریتانیا">منطقه
                                                            اقیانوس هند بریتانیا</option>
                                                        <option value="CX" label="جزیره کریسمس">جزیره کریسمس
                                                        </option>
                                                        <option value="CC" label="جزایر کوکوس [کیلینگ]">جزایر کوکوس
                                                        </option>
                                                        <option value="CK" label="جزایر کوک">جزایر کوک</option>
                                                        <option value="FJ" label="فیجی">فیجی</option>
                                                        <option value="PF" label="پلی‌نزی فرانسه">پلی‌نزی فرانسه
                                                        </option>
                                                        <option value="TF" label="سرزمین های جنوبی فرانسه">سرزمین
                                                            های جنوبی فرانسه</option>
                                                        <option value="GU" label="گوام">گوام</option>
                                                        <option value="HM" label="جزیره هرد و جزایر مک دونالد">جزیره
                                                            هرد و جزایر مک دونالد</option>
                                                        <option value="KI" label="کیریباتی">کیریباتی</option>
                                                        <option value="MH" label="جزایر مارشال">جزایر مارشال
                                                        </option>
                                                        <option value="FM" label="میکرونزی">میکرونزی</option>
                                                        <option value="NR" label="نائورو">نائورو</option>
                                                        <option value="NC" label="کالدونیای جدید">کالدونیای جدید
                                                        </option>
                                                        <option value="NZ" label="نیوزیلند">نیوزیلند</option>
                                                        <option value="NU" label="نیو">نیو</option>
                                                        <option value="NF" label="جزیره نورفولک">جزیره نورفولک
                                                        </option>
                                                        <option value="MP" label="جزایر ماریانای شمالی">جزایر
                                                            ماریانای شمالی</option>
                                                        <option value="PW" label="پالائو">پالائو</option>
                                                        <option value="PG" label="پاپوآ گینه نو">پاپوآ گینه نو
                                                        </option>
                                                        <option value="PN" label="جزایر پیتکرن">جزایر پیتکرن
                                                        </option>
                                                        <option value="WS" label="ساموآ">ساموآ</option>
                                                        <option value="SB" label="جزایر سلیمان">جزایر سلیمان
                                                        </option>
                                                        <option value="GS"
                                                            label="گرجستان جنوبی و جزایر ساندویچ جنوبی">گرجستان جنوبی و
                                                            جزایر ساندویچ جنوبی</option>
                                                        <option value="TK" label="توکلائو">توکلائو</option>
                                                        <option value="TO" label="تونگا">تونگا</option>
                                                        <option value="TV" label="تووالو">تووالو</option>
                                                        <option value="UM"
                                                            label="جزایر کوچک دورافتاده ایالات متحده">ایالات متحده جزایر
                                                            دورافتاده کوچک</option>
                                                        <option value="VU" label="وانواتو">وانواتو</option>
                                                        <option value="WF" label="والیس و فوتونا">والیس و فوتونا
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 mb-sm-0">
                                                <label for="address_State1" class="form-label">وضعیت <span
                                                        class="required">*</span></label>
                                                <select id="address_State1" name="address[State]" data-default=""
                                                    class="form-control">
                                                    <option value="0" label="یک ایالت را انتخاب کنید"
                                                        selected="selected">یک حالت را انتخاب کنید</option>
                                                    <option value="AL">آلاباما</option>
                                                    <option value="AK">آلاسکا</option>
                                                    <option value="AZ">آریزونا</option>
                                                    <option value="AR">آرکانزاس</option>
                                                    <option value="CA">کالیفرنیا</option>
                                                    <option value="CO">کلرادو</option>
                                                    <option value="CT">کانکتیکات</option>
                                                    <option value="DE">دلاور</option>
                                                    <option value="DC">منطقه کلمبیا</option>
                                                    <option value="FL">فلوریدا</option>
                                                    <option value="GA">گرجستان</option>
                                                    <option value="HI">هاوایی</option>
                                                    <option value="ID">آیداهو</option>
                                                    <option value="IL">ایلینوی</option>
                                                    <option value="IN">ایندیانا</option>
                                                    <option value="IA">آیووا</option>
                                                    <option value="KS">کانزاس</option>
                                                    <option value="KY">کنتاکی</option>
                                                    <option value="LA">لوئیزیانا</option>
                                                    <option value="ME">مین</option>
                                                    <option value="MD">مریلند</option>
                                                    <option value="MA">ماساچوست</option>
                                                    <option value="MI">میشیگان</option>
                                                    <option value="MN">مینسوتا</option>
                                                    <option value="MS">می سی سی پی</option>
                                                    <option value="MO">میسوری</option>
                                                    <option value="MT">مونتانا</option>
                                                    <option value="NE">نبراسکا</option>
                                                    <option value="NV">نوادا</option>
                                                    <option value="NH">نیوهمپشایر</option>
                                                    <option value="NJ">نیوجرسی</option>
                                                    <option value="NM">نیومکزیکو</option>
                                                    <option value="NY">نیویورک</option>
                                                    <option value="NC">کارولینای شمالی</option>
                                                    <option value="ND">داکوتای شمالی</option>
                                                    <option value="OH">اوهایو</option>
                                                    <option value="OK">اوکلاهما</option>
                                                    <option value="OR">اورگان</option>
                                                    <option value="PA">پنسیلوانیا</option>
                                                    <option value="RI">رود آیلند</option>
                                                    <option value="SC">کارولینای جنوبی</option>
                                                    <option value="SD">داکوتای جنوبی</option>
                                                    <option value="TN">تنسی</option>
                                                    <option value="TX">تگزاس</option>
                                                    <option value="UT">یوتا</option>
                                                    <option value="VT">ورمونت</option>
                                                    <option value="VA">ویرجینیا</option>
                                                    <option value="WA">واشنگتن</option>
                                                    <option value="WV">ویرجینیای غربی</option>
                                                    <option value="WI">ویسکانسین</option>
                                                    <option value="WY">وایومینگ</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6 mb-0">
                                                <label for="address_province2" class="form-label">شهرک / شهر <span
                                                        class="required">*</span></label>
                                                <select id="address_province2" name="address[province]"
                                                    data-default="" class="form-control">
                                                    <option value="0" label="انتخاب شهر" selected="selected">
                                                        انتخاب شهر</option>
                                                    <option value="AR">آرکانزاس</option>
                                                    <option value="CA">کالیفرنیا</option>
                                                    <option value="DE">دلاور</option>
                                                    <option value="FL">فلوریدا</option>
                                                    <option value="GA">گرجستان</option>
                                                    <option value="HI">هاوایی</option>
                                                    <option value="ID">آیداهو</option>
                                                    <option value="KS">کانزاس</option>
                                                    <option value="LA">لوئیزیانا</option>
                                                    <option value="ME">مین</option>
                                                    <option value="NC">کارولینای شمالی</option>
                                                    <option value="OR">اورگان</option>
                                                    <option value="PA">پنسیلوانیا</option>
                                                    <option value="RI">رود آیلند</option>
                                                    <option value="SC">کارولینای جنوبی</option>
                                                    <option value="SD">داکوتای جنوبی</option>
                                                    <option value="UT">یوتا</option>
                                                    <option value="VA">ویرجینیا</option>
                                                    <option value="WY">وایومینگ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!--آدرس صورتحساب پایانی-->

                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary btnPrevious ms-1">بازگشت به روش
                                    پرداخت</button>
                                <button type="button" class="btn btn-primary btnNext me-1">خلاصه سفارش بعدی</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="steps3">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-7 col-lg-8">
                                    <!--خلاصه سفارش-->
                                    <div class="block order-summary">
                                        <div class="block-content">
                                            <h3 class="title mb-3">خلاصه سفارش</h3>
                                            <div class="table-responsive table-bottom-brd order-table">
                                                <table class="table table-hover align-middle mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="action">&nbsp;</th>
                                                            <th class="text-end">تصویر</th>
                                                            <th class="text-end proName">محصول</th>
                                                            <th class="text-center">تعداد</th>
                                                            <th class="text-center">قیمت</th>
                                                            <th class="text-center">مجموع فرعی</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center cart-delete"><a href="#"
                                                                    class="btn btn-secondary cart-remove remove-icon position-static"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Remove to Cart"><i
                                                                        class="icon anm anm-times-r"></i></a></td>
                                                            <td class="text-end"><a href="product-layout1.html"
                                                                    class="thumb"><img
                                                                        class="rounded-0 blur-up lazyload"
                                                                        data-src="{{ asset('storage/images/products/product1-120x170.jpg')}}"
                                                                        src="{{ asset('storage/images/products/product1-120x170.jpg')}}"
                                                                        alt="محصول" title="محصول" width="120"
                                                                        height="170" /></a></td>
                                                            <td class="text-end proName">
                                                                <div class="list-view-item-title">
                                                                    <a href="product-layout1.html">پیراهن کوبایی
                                                                        آکسفورد</a>
                                                                </div>
                                                                <div class="cart-meta-text">
                                                                    رنگ: مشکی<br>سایز: کوچک
                                                                </div>
                                                            </td>
                                                            <td class="text-center">2</td>
                                                            <td class="text-center">99.00 تومان</td>
                                                            <td class="text-center"><strong>198.00 تومان</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center cart-delete"><a href="#"
                                                                    class="btn btn-secondary cart-remove remove-icon position-static"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Remove to Cart"><i
                                                                        class="icon anm anm-times-r"></i></a></td>
                                                            <td class="text-end"><a href="product-layout1.html"
                                                                    class="thumb"><img
                                                                        class="rounded-0 blur-up lazyload"
                                                                        data-src="{{ asset('storage/images/products/product2-120x170.jpg')}}"
                                                                        src="{{ asset('storage/images/products/product2-120x170.jpg')}}"
                                                                        alt="محصول" title="محصول" width="120"
                                                                        height="170" /></a></td>
                                                            <td class="text-end proName">
                                                                <div class="list-view-item-title">
                                                                    <a href="product-layout1.html">کلاهک کاف</a>
                                                                </div>
                                                                <div class="cart-meta-text">
                                                                    رنگ: مشکی<br>سایز: کوچک
                                                                </div>
                                                            </td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">128.00 تومان</td>
                                                            <td class="text-center"><strong>128.00 تومان</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--پایان خلاصه سفارش-->
                                    <!--نظر سفارش-->
                                    <div class="block order-comments my-4">
                                        <div class="block-content">
                                            <h3 class="title mb-3">نظر سفارش</h3>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="form-group col-md-12 col-lg-12 col-xl-12 mb-0">
                                                        <textarea class="resize-both form-control" rows="3" placeholder="نظر خود را اینجا بگذارید"></textarea>
                                                        <small class="mt-2 d-block">*پس انداز شامل تبلیغات، کوپن، و حمل و
                                                            نقل (در صورت وجود) است.</small>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <!--پایان دادن نظر سفارش-->
                                </div>
                                <div class="col-12 col-sm-12 col-md-5 col-lg-4">
                                    <!--اعمال کد تبلیغاتی-->
                                    <div class="block mb-3 application-code mb-4">
                                        <div class="block-content">
                                            <h3 class="title mb-3">اعمال کد تبلیغاتی</h3>
                                            <div id="coupon" class="coupon-dec">
                                                <p>کد تبلیغاتی دارید؟ سپس چند عدد و حروف ترکیبی تصادفی از پس انداز عالی
                                                    فاصله دارید!</p>
                                                <div class="input-group mb-0 d-flex">
                                                    <input id="coupon-code" required type="text"
                                                        class="form-control" placeholder="کد تبلیغاتی/تخفیف">
                                                    <button class="coupon-btn btn btn-primary"
                                                        type="submit">اعمال</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Apply Promocode-->
                                    <!--خلاصه سبد خرید-->
                                    <div class="cart-info mb-4">
                                        <div class="cart-order-detail cart-col">
                                            <div class="row g-0 border-bottom pb-2">
                                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>زیر
                                                        مجموع</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">326.00 تومان</span></span>
                                            </div>
                                            <div class="row g-0 border-bottom py-2">
                                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>تخفیف
                                                        کوپن</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">-25.00 تومان</span></span>
                                            </div>
                                            <div class="row g-0 border-bottom py-2">
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title"><strong>مالیات</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">10.00 تومان</span></span>
                                            </div>
                                            <div class="row g-0 border-bottom py-2">
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title"><strong>ارسال</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">ارسال رایگان</span></span>
                                            </div>
                                            <div class="row g-0 pt-2">
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>مجموع</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b
                                                        class="money">311.00 تومان</b></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--خلاصه سبد خرید-->
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary ms-1 btnPrevious">بازگشت به خلاصه
                                    سفارش</button>
                                <button type="button" class="btn btn-primary me-1 btnNext">بعدی اقدام به
                                    پرداخت</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="steps4">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-7 col-lg-8">
                                    <!--روش های تحویل-->
                                    <div class="block mb-3 delivery-methods mb-4">
                                        <div class="block-content">
                                            <h3 class="title mb-3">روش های تحویل</h3>
                                            <div class="delivery-methods-content">
                                                <div class="customRadio clearfix"><input id="formcheckoutRadio1"
                                                        value="" name="radio1" type="radio" class="radio"
                                                        checked="checked">
                                                    <label for="formcheckoutRadio1" class="mb-0">تحویل استاندارد 2.99
                                                        تومان (3-5 روز)</label>
                                                </div>
                                                <div class="customRadio clearfix">
                                                    <input id="formcheckoutRadio2" value="" name="radio1"
                                                        type="radio" class="radio">
                                                    <label for="formcheckoutRadio2" class="mb-0">تحویل اکسپرس 10.99
                                                        تومان (1-2 روز)</label>
                                                </div>
                                                <div class="customRadio clearfix mb-0">
                                                    <input id="formcheckoutRadio3" value="" name="radio1"
                                                        type="radio" class="radio">
                                                    <label for="formcheckoutRadio3" class="mb-0">20.00 تومان در همان
                                                        روز (تحویل عصر)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--پایان روش های تحویل-->
                                    <!--روش های پرداخت-->
                                    <div class="block mb-3 payment-methods mb-4">
                                        <div class="block-content">
                                            <h3 class="title mb-3">روش های پرداخت</h3>
                                            <div class="payment-accordion-radio">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item card mb-2">
                                                        <div class="card-header" id="headingOne">
                                                            <button class="card-link" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                <span class="customRadio clearfix mb-0">
                                                                    <input id="paymentRadio1" value=""
                                                                        name="payment" type="radio" class="radio"
                                                                        checked="checked" />
                                                                    <label for="paymentRadio1" class="mb-0">پرداخت با
                                                                        کارت اعتباری</label>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body px-0">
                                                                <fieldset>
                                                                    <div class="row">
                                                                        <div
                                                                            class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                                            <label for="input-cardname">نام روی کارت <span
                                                                                    class="required">*</span></label>
                                                                            <input name="cardname" value=""
                                                                                placeholder="" id="input-cardname"
                                                                                class="form-control" type="text"
                                                                                pattern="[0-9\-]*">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                                                            <label>نوع کارت اعتباری <span
                                                                                    class="required">*</span></label>
                                                                            <select name="country_id"
                                                                                class="form-control">
                                                                                <option value="">لطفاً انتخاب کنید
                                                                                </option>
                                                                                <option value="1">آمریکن اکسپرس
                                                                                </option>
                                                                                <option value="2">ویزا کارت</option>
                                                                                <option value="3">کارت اصلی</option>
                                                                                <option value="4">کارت کشف</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div
                                                                            class="form-group col-12 col-sm-4 col-md-4 col-lg-4">
                                                                            <label for="input-cardno">شماره کارت اعتباری
                                                                                <span class="required">*</span></label>
                                                                            <input name="cardno" value=""
                                                                                placeholder="" id="input-cardno"
                                                                                class="form-control" type="text"
                                                                                pattern="[0-9\-]*">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-12 col-sm-4 col-md-4 col-lg-4">
                                                                            <label for="input-cvv">کد CVV <span
                                                                                    class="required">*</span></label>
                                                                            <input name="cvv" value=""
                                                                                placeholder="" id="input-cvv"
                                                                                class="form-control" type="text"
                                                                                pattern="[0-9\-]*">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-12 col-sm-4 col-md-4 col-lg-4">
                                                                            <label>تاریخ انقضا <span
                                                                                    class="required">*</span></label>
                                                                            <input type="text" name="exdate"
                                                                                data-jdp data-jdp-min-date="today"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div
                                                                            class="form-group col-12 col-sm-4 col-md-4 col-lg-4 mb-0">
                                                                            <button class="btn btn-primary"
                                                                                type="submit">ارسال</button>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item card mb-2">
                                                        <div class="card-header" id="headingTwo">
                                                            <button class="card-link" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                <span class="customRadio clearfix mb-0">
                                                                    <input id="paymentRadio2" value=""
                                                                        name="payment" type="radio"
                                                                        class="radio" />
                                                                    <label for="paymentRadio2" class="mb-0">پرداخت با
                                                                        پی پال</label>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body px-0">
                                                                <p>از طریق پی پال پرداخت کنید، اگر حساب پی پال ندارید،
                                                                    می‌توانید با کارت اعتباری خود پرداخت کنید.</p>
                                                                <div class="input-group mb-0 d-flex">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="PayPal@example.com" required>
                                                                    <button class="btn btn-primary"
                                                                        type="submit">پرداخت 99.00 USD</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item card mb-2">
                                                        <div class="card-header" id="headingThree">
                                                            <button class="card-link" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                <span class="customRadio clearfix mb-0">
                                                                    <input id="paymentRadio3" value=""
                                                                        name="payment" type="radio"
                                                                        class="radio" />
                                                                    <label for="paymentRadio3" class="mb-0">پرداخت
                                                                        چک</label>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body px-0">
                                                                <p>لطفاً چک خود را به نام فروشگاه، خیابان فروشگاه، شهرک
                                                                    فروشگاه، ایالت/شهرستان فروشگاه، کدپستی فروشگاه ارسال
                                                                    کنید.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item card mb-0">
                                                        <div class="card-header" id="headingFour">
                                                            <button class="card-link" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseFour">
                                                                <span class="customRadio clearfix mb-0">
                                                                    <input id="paymentRadio4" value=""
                                                                        name="payment" type="radio"
                                                                        class="radio" />
                                                                    <label for="paymentRadio4" class="mb-0">تحویل
                                                                        نقدی</label>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div id="collapseFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body px-0">
                                                                <p>نقد هنگام تحویل به ترتیبی اطلاق می‌شود که در آن پرداخت
                                                                    برای خرید مستقیماً توسط خریدار به شخصی که کالا را تحویل
                                                                    می‌دهد انجام می‌شود.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--پایان دادن به روش های پرداخت-->
                                </div>
                                <div class="col-12 col-sm-12 col-md-5 col-lg-4">
                                    <!--خلاصه سبد خرید-->
                                    <div class="cart-info">
                                        <div class="cart-order-detail cart-col">
                                            <div class="row g-0 border-bottom pb-2">
                                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>زیر
                                                        مجموع</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">226.00 تومان</span></span>
                                            </div>
                                            <div class="row g-0 border-bottom py-2">
                                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>تخفیف
                                                        کوپن</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">-25.00تومان</span></span>
                                            </div>
                                            <div class="row g-0 border-bottom py-2">
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title"><strong>مالیات</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">10.00 تومان</span></span>
                                            </div>
                                            <div class="row g-0 border-bottom py-2">
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title"><strong>ارسال</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                        class="money">ارسال رایگان</span></span>
                                            </div>
                                            <div class="row g-0 pt-2">
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>مجموع</strong></span>
                                                <span
                                                    class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b
                                                        class="money">311.00 تومان</b></span>
                                            </div>

                                            <a href="order-success.html" id="cartCheckout"
                                                class="btn btn-lg my-4 checkout w-100">ثبت سفارش</a>
                                            <div class="paymnet-img text-center"><img
                                                    src="{{ asset('storage/images/icons/safepayment.png')}}" alt = "پرداخت"
                                                    width="299" height="28" /></div>
                                        </div>
                                    </div>
                                    <!--خلاصه سبد خرید-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--انتهای برگه پرداخت محتوای-->
                </div>
            </div>
        </div>
        <!--End Main Content-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection

@section('js')
            <!-- Step checkout JS nav -->
            <script>
                $(document).ready(function(){
                // Add active class to the current list tem (highlight it)
                let checkoutList = document.getElementById("nav-tabs");
                let checkoutItems = checkoutList.getElementsByClassName("nav-item");
                for (let i = 0; i < checkoutItems.length; i++) {
                checkoutItems[i].addEventListener("click", function() {
                let current = document.getElementsByClassName("onactive");
                current[0].className = current[0].className.replace(" onactive", "");
                this.className += " onactive";
                });
                }

                // Nav next/prev
                $('.btnNext').click(function() {
                const nextTabLinkEl = $('.nav-tabs .active').closest('li').next('li').find('a')[0];
                const nextTab = new bootstrap.Tab(nextTabLinkEl);
                nextTab.show();
                });
                $('.btnPrevious').click(function() {
                const prevTabLinkEl = $('.nav-tabs .active').closest('li').prev('li').find('a')[0];
                const prevTab = new bootstrap.Tab(prevTabLinkEl);
                prevTab.show();
                });
                });
            </script>
            <script>
                $(document).ready(function() {
                    jalaliDatepicker.startWatch({
                        minDate: "attr",
                        maxDate: "attr",
                        time:true,
                        // date:false
                    });
                    /* Below is a js demo | you don't need to use */
                    setTimeout(function(){
                        let elm=document.getElementById('input[data-jdp-min-date="today"]')[0];
                        elm.focus();
                        jalaliDatepicker.hide();
                        jalaliDatepicker.show(elm);
                    }, 1000);
                });
            </script>
@endsection
