@extends('layouts.app')
@section('title', 'سبد خرید')
@section('body', 'cart-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>سبک سبد خرید شما1</h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="بازگشت به صفحه اصلی">صفحه اصلی</a><span
                                class="main-title"><i class="icon anm anm -angle-left-l"></i>سبک سبد خرید شما1</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <div class="container">
            <div class="row">
                <!--محتوای سبد خرید-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">
                    <div class="alert alert-success py-2 alert-dismissible fade show cart-alert" role="alert">
                        <i class="align-middle icon anm anm-truck icon-large ms-2"></i><strong class="text-uppercase">تبریک
                            می‌گوییم!</strong> شما ارسال رایگان دارید!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <!--پیام هشدار پایان-->

                    <!--فرم سبد خرید-->
                    <form action="#" method="post" class="cart-table table-bottom-brd">
                        <table class="table align-middle">
                            <thead class="cart-row cart-header small-hide position-relative">
                                <tr>
                                    <th class="action">&nbsp;</th>
                                    <th colspan="2" class="text-end">محصول</th>
                                    <th class="text-center">قیمت</th>
                                    <th class="text-center">مقدار</th>
                                    <th class="text-center">مجموع</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart-row cart-flex position-relative">
                                    <td class="cart-delete text-center small-hide"><a href="#"
                                            class="cart-remove remove-icon position-static" data-bs-toggle="tooltip"
                                            data-bs-placement ="top" title="حذف به سبد خرید"><i
                                                class="icon anm anm-times-r"></i></a></td>
                                    <td class="cart-image cart-flex-item">
                                        <a href="product-layout1.html"><img class="cart-image rounded-0 blur-up lazyload"
                                                data-src="{{ asset('storage/images/products/product1-120x170.jpg')}}"
                                                src="{{ asset('storage/images/products/product1-120x170.jpg')}}"
                                                alt="تاپ روسری خواب غروب آفتاب" width="120" height="170" /></a>
                                    </td>
                                    <td class="cart-meta small-text-right cart-flex-item">
                                        <div class="list-view-item-title">
                                            <a href="product-layout1.html">پیراهن کوبایی آکسفورد</a>
                                        </div>
                                        <div class="cart-meta-text">
                                            رنگ: سیاه<br>سایز: کوچک<br>تعداد: 2
                                        </div>
                                        <div class="cart-price d-md-none">
                                            <span class="money fw-500">99.00 تومان</span>
                                        </div>
                                    </td>
                                    <td class="cart-price cart-flex-item text-center small-hide">
                                        <span class="money">99.00 تومان</span>
                                    </td>
                                    <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                        <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="#;"><i
                                                        class="icon anm anm-minus-r"></i></a>
                                                <input class="cart-qty-input qty" type="text" name="updates[]"
                                                    value="1" pattern="[0-9]*" />
                                                <a class="qtyBtn plus" href="#;"><i
                                                        class="icon anm anm-plus-r"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" title="حذف"
                                            class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 ms-3">حذف</a>
                                    </td>
                                    <td class="cart-price cart-flex-item text-center small-hide">
                                        <span class="money fw-500">198.00 تومان</span>
                                    </td>
                                </tr>
                                <tr class="cart-row cart-flex position-relative">
                                    <td class="cart-delete text-center small-hide"><a href="#"
                                            class="cart-remove remove-icon position-static" data-bs-toggle="tooltip"
                                            data-bs-placement ="top" title="حذف به سبد خرید"><i
                                                class="icon anm anm-times-r"></i></a></td>
                                    <td class="cart-image cart-flex-item">
                                        <a href="product-layout1.html"><img class="cart-image rounded-0 blur-up lazyload"
                                                data-src="{{ asset('storage/images/products/product2-120x170.jpg')}}"
                                                src="{{ asset('storage/images/products/product2-120x170.jpg')}}"
                                                alt="تاپ روسری خواب غروب آفتاب" width="120" height="170" /></a>
                                    </td>
                                    <td class="cart-meta small-text-right cart-flex-item">
                                        <div class="list-view-item-title">
                                            <a href="product-layout1.html">کلاهک کاف</a>
                                        </div>
                                        <div class="cart-meta-text">
                                            رنگ: سیاه<br>اندازه: کوچک<br>تعداد: 1
                                        </div>
                                        <div class="cart-price d-md-none">
                                            <span class="money fw-500">128.00 تومان</span>
                                        </div>
                                    </td>
                                    <td class="cart-price cart-flex-item text-center small-hide">
                                        <span class="money">128.00 تومان</span>
                                    </td>
                                    <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                        <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="#;"><i
                                                        class="icon anm anm-minus-r"></i></a>
                                                <input class="cart-qty-input qty" type="text" name="updates[]"
                                                    value="1" pattern="[0-9]*" />
                                                <a class="qtyBtn plus" href="#;"><i
                                                        class="icon anm anm-plus-r"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" title="حذف"
                                            class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 ms-3">حذف</a>
                                    </td>
                                    <td class="cart-price cart-flex-item text-center small-hide">
                                        <span class="money fw-500">128.00 تومان</span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-start"><a href="#"
                                            class="btn btn-outline-secondary btn-sm cart-continue"><i
                                                class="icon anm anm-angle- left-r ms-2 d-none"></i> ادامه خرید</a></td>
                                    <td colspan="3" class="text-end">
                                        <button type="submit" name="clear"
                                            class="btn btn-outline-secondary btn-sm small-hide"><i
                                                class="icon anm anm-times-r ms-2 d-none"></i> پاک کردن سبد خرید</button>
                                        <button type="submit" name="update"
                                            class="btn btn-secondary btn-sm cart-continue me-2"><i
                                                class="icon anm anm-sync-ar ms-2 d-none"> </i> به روز رسانی سبد
                                            خرید</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                    <!--پایان سبد خرید-->

                    <!--یادداشت با برآورد حمل و نقل-->
                    <div class="row my-4 pt-3">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-12 cart-col">
                            <div class="cart-note mb-4">
                                <h5>یک یادداشت به سفارش خود اضافه کنید</h5>
                                <label for="cart-note">یادداشت هایی درباره سفارش شما، به عنوان مثال. یادداشت های ویژه برای
                                    تحویل.</label>
                                <textarea name="note" id="cart-note" class="form-control cart-note-input" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-12 cart-col">
                            <div class="cart-discount">
                                <h5>کدهای تخفیف</h5>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label for="address_zip">اگر کد کوپن خود را دارید وارد کنید.</label>
                                        <div class="input-group0">
                                            <input class="form-control" type="text" name="coupon" required />
                                            <input type="submit" class="btn text-nowrap mt-3" value="اعمال کوپن" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col">
                            <div id="shipping-calculator" class="mt-4 mt-lg-0">
                                <h5>برآورد حمل و نقل را دریافت کنید</h5>
                                <form class="estimate-form row row-cols-lg-3 row-cols-md-3 row-cols-1" action="#"
                                    method="post">
                                    <div class="form-group">
                                        <label for="address_country">کشور</label>
                                        <select id="address_country" name="address[country]" data-default="ایالات متحده">
                                            <option value="0" label="انتخاب کشور ... " selected="selected">انتخاب
                                                کشور...</option>
                                            <optgroup id="country-optgroup-Africa" label="آفریقا">
                                                <option value="DZ" label="الجزایر">الجزایر</option>
                                                <option value="AO" label="آنگولا">آنگولا</option>
                                                <option value="BJ" label="بنین">بنین</option>
                                                <option value="BW" label="بوتسوانا">بوتسوانا</option>
                                                <option value="BF" label="بورکینافاسو">بورکینافاسو</option>
                                                <option value="BI" label="بوروندی">بوروندی</option>
                                                <option value="CM" label="کامرون">کامرون</option>
                                                <option value="CV" label="کیپ ورد">کیپ ورد</option>
                                                <option value="CF" label="جمهوری آفریقای مرکزی">جمهوری آفریقای مرکزی
                                                </option>
                                                <option value="TD" label="چاد">چاد</option>
                                                <option value="KM" label="کومور">کومور</option>
                                                <option value="CG" label="کنگو - برازاویل">کنگو - برازاویل</option>
                                                <option value="CD" label="کنگو - کینشاسا">کنگو - کینشاسا</option>
                                                <option value="CI" label="ساحل عاج">ساحل عاج</option>
                                                <option value="DJ" label="جیبوتی">جیبوتی</option>
                                                <option value="EG" label="مصر">مصر</option>
                                                <option value="GQ" label="گینه استوایی">گیینه استوایی</option>
                                                <option value="ER" label="اریتره">اریتره</option>
                                                <option value="ET" label="اتیوپی">اتیوپی</option>
                                                <option value="GA" label="گابن">گابن</option>
                                                <option value="GM" label="گامبیا">گامبیا</option>
                                                <option value="GH" label="غنا">غنا</option>
                                                <option value="GN" label="گینه">گینه</option>
                                                <option value="GW" label="گینه بیسائو">گیینه بیسائو</option>
                                                <option value="KE" label="کنیا">کنیا</option>
                                                <option value="LS" label="لسوتو">لسوتو</option>
                                                <option value="LR" label="لیبریا">لیبریا</option>
                                                <option value="LY" label="لیبی">لیبی</option>
                                                <option value="MG" label="ماداگاسکار">ماداگاسکار</option>
                                                <option value="MW" label="مالاوی">مالاوی</option>
                                                <option value="ML" label="مالی">مالی</option>
                                                <option value="MR" label="موریتانی">موریتانیا</option>
                                                <option value="MU" label="موریس">موریس</option>
                                                <option value="YT" label="مایوت">مایو</option>
                                                <option value="MA" label="مراکش">مراکش</option>
                                                <option value="MZ" label="موزامبیک">موزامبیک</option>
                                                <option value="NA" label="نامیبیا">نامیبیا</option>
                                                <option value="NE" label="نیجر">نیجر</option>
                                                <option value="NG" label="نیجریه">نیجریه</option>
                                                <option value="RW" label="رواندا">روآندا</option>
                                                <option value="RE" label="تجدید دیدار">رئونیون</option>
                                                <option value="SH" label="سنت هلنا">سنت هلنا</option>
                                                <option value="SN" label="سنگال">سنگال</option>
                                                <option value="SC" label="سیشل">سیشل</option>
                                                <option value="SL" label="سیرا لئون">سیرا لئون</option>
                                                <option value="SO" label="سومالی">سومالی</option>
                                                <option value="ZA" label="آفریقای جنوبی">آفریقای جنوبی</option>
                                                <option value="SD" label="سودان">سودان</option>
                                                <option value="SZ" label="سوازیلند">سوازیلند</option>
                                                <option value="ST" label="سائوتومه و پرنسیپ">سائوتومه و پرنسیپ
                                                </option>
                                                <option value="TZ" label="تانزانیا">تانزانیا</option>
                                                <option value="TG" label="رفتن">توگو</option>
                                                <option value="TN" label="تونس">تونس</option>
                                                <option value="UG" label="اوگاندا">اوگاندا</option>
                                                <option value="EH" label="صحرا غربی">صحرای غربی</option>
                                                <option value="ZM" label="زامبیا">زامبیا</option>
                                                <option value="ZW" label="زیمبابوه">زیمبابوه</option>
                                            </optgroup>
                                            <optgroup id="country-optgroup-Americas" label="قاره آمریکا">
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
                                                <option value="BR" label="برزیل">برزيل</option>
                                                <option value="VG" label="جزایر ویرجین بریتانیا">جزایر ویرجین بریتانیا
                                                </option>
                                                <option value="CA" label="کانادا">کانادا</option>
                                                <option value="KY" label="جزایر کیمن">جزایر کیمن</option>
                                                <option value="CL" label="شیلی">شیلی</option>
                                                <option value="CO" label="کلمبیا">کلمبیا</option>
                                                <option value="CR" label="کاستاریکا">کاستاریکا</option>
                                                <option value="CU" label="کوبا">کوبا</option>
                                                <option value="DM" label="دومینیکا">دومینیکا</option>
                                                <option value="DO" label="جمهوری دومینیکن">جمهوری دومینیکن</option>
                                                <option value="EC" label="اکوادور">اکوادور</option>
                                                <option value="SV" label="السالوادور">السالوادور</option>
                                                <option value="FK" label="جزایر فالکلند">جزایر فالکلند</option>
                                                <option value="GF" label="گویان فرانسه">گویان فرانسه</option>
                                                <option value="GL" label="گرینلند">گرینلند</option>
                                                <option value="GD" label="گرانادا">گرنادا</option>
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
                                                <option value="KN" label="سنت کیتس و نویس">سنت کیتس و نویس</option>
                                                <option value="LC" label="سنت لوسیا">سنت لوسیا</option>
                                                <option value="MF" label="سنت مارتین">سنت مارتین</option>
                                                <option value="PM" label="سنت پیر و میکلون">سنت پیر و میکلون</option>
                                                <option value="VC" label="سنت وینسنت و گرنادین ها">سنت وینسنت و
                                                    گرنادین ها</option>
                                                <option value="SR" label="سورینام">سورینام</option>
                                                <option value="TT" label="ترینیداد و توباگو">ترینیداد و توباگو
                                                </option>
                                                <option value="TC" label="جزایر تورکس و کایکوس">جزایر تورکس </option>
                                                <option value="VI" label="جزایر ویرجین ایالات متحده">ایالات متحده
                                                    جزایر ویرجین</option>
                                                <option value="US" label="ایالات متحده">ایالات متحده</option>
                                                <option value="UY" label="اروگوئه">اروگوئه</option>
                                                <option value="VE" label="ونزوئلا">ونزوئلا</option>
                                            </optgroup>
                                            <optgroup id="country-optgroup-اسیا" label="آسیا">
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
                                                <option value="HK" label="هنگ کنگ SAR چین">هنگ کنگ SAR چین</option>
                                                <option value="IN" label="هند">هند</option>
                                                <option value="ID" label="اندونزی">اندونزی</option>
                                                <option value="IR" label="ایران">ایران</option>
                                                <option value="IQ" label="عراق">عراق</option>
                                                <option value="IL" label="اسرائيل">اسرائیل</option>
                                                <option value="JP" label="ژاپن">ژاپن</option>
                                                <option value="JO" label="اردن">اردن</option>
                                                <option value="KZ" label="قزاقستان">قزاقستان</option>
                                                <option value="KW" label="کویت">کویت</option>
                                                <option value="KG" label="قرقیزستان">قرقیزستان</option>
                                                <option value="LA" label="لائوس">لائوس</option>
                                                <option value="LB" label="لبنان">لبنان</option>
                                                <option value="MO" label="ماکائو SAR چین">ماکائو SAR چین</option>
                                                <option value="MY" label="مالزی">مالزی</option>
                                                <option value="MV" label="مالدیو">مالدیو</option>
                                                <option value="MN" label="مغولستان">مغولستان</option>
                                                <option value="MM" label="میانمار [برمه]">میانمار [برمه]</option>
                                                <option value="NP" label="نپال">نپال</option>
                                                <option value="NT" label="منطقه خنثی">منطقه خنثی</option>
                                                <option value="KP" label="کره شمالی">کره شمالی</option>
                                                <option value="OM" label="عمان">عمان</option>
                                                <option value="PK" label="پاکستان">پاکستان</option>
                                                <option value="PS" label="سرزمین های فلسطینی">سرزمین های فلسطینی
                                                </option>
                                                <option value="YD" label="جمهوری دموکراتیک خلق یمن">جمهوری دموکراتیک
                                                    خلق یمن</option>
                                                <option value="PH" label="فیلیپین">فیلیپین</option>
                                                <option value="QA" label="قطر">قطر</option>
                                                <option value="SA" label="عربستان سعودی">عربستان سعودی</option>
                                                <option value="SG" label="سنگاپور">سنگاپور</option>
                                                <option value="KR" label="کره جنوبی">کره جنوبی</option>
                                                <option value="LK" label="سری لانکا">سری‌لانکا</option>
                                                <option value="SY" label="سوریه">سوریه</option>
                                                <option value="TW" label="تایوان">تایوان</option>
                                                <option value="TJ" label="تاجیکستان">تاجیکستان</option>
                                                <option value="TH" label="تایلند">تایلند</option>
                                                <option value="TL" label="تیمور شرقی">تیمور شرقی</option>
                                                <option value="TR" label="بوقلمون">ترکیه</option>
                                                <option value="TM" label="ترکمنستان">ترکمنستان</option>
                                                <option value="AE" label="امارات متحده عربی">امارات متحده عربی
                                                </option>
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
                                                <option value="BA" label="بوسنی و هرزگوین">بوسنی و هرزگوین</option>
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
                                                <option value="IM" label="جزیره من">جزیره مرد</option>
                                                <option value="IT" label="ایتالیا">ایتالیا</option>
                                                <option value="JE" label="پیراهن ورزشی">جرسی</option>
                                                <option value="LV" label="لتونی">لتونی</option>
                                                <option value="LI" label="لیختن اشتاین">لیختن اشتاین</option>
                                                <option value="LT" label="لیتوانی">لیتوانی</option>
                                                <option value="LU" label="لوکزامبورگ">لوکزامبورگ</option>
                                                <option value="MK" label="مقدونیه">مقدونیه</option>
                                                <option value="MT" label="مالت">مالتا</option>
                                                <option value="FX" label="متروپولیتن فرانسه">متروپولیتن فرانسه
                                                </option>
                                                <option value="MD" label="مولداوی">مولداوی</option>
                                                <option value="MC" label="موناکو">موناکو</option>
                                                <option value="ME" label="مونته نگرو">مونته نگرو</option>
                                                <option value="NL" label="هلند">هلند</option>
                                                <option value="NO" label="نروژ">نروژ</option>
                                                <option value="PL" label="لهستان">لهستان</option>
                                                <option value="PT" label="کشور پرتغال">پرتغال</option>
                                                <option value="RO" label="رومانی">رومانی</option>
                                                <option value="RU" label="روسیه">روسیه</option>
                                                <option value="SM" label="سن مارینو">سن مارینو</option>
                                                <option value="RS" label="صربستان">صربستان</option>
                                                <option value="CS" label="صربستان و مونته نگرو">صربستان و مونته نگرو
                                                </option>
                                                <option value="SK" label="اسلواکی">اسلواکی</option>
                                                <option value="SI" label="اسلوونی">اسلوونی</option>
                                                <option value="ES" label="اسپانیا">اسپانیا</option>
                                                <option value="SJ" label="سوالبارد و یان ماین">سوالبارد و یان ماین
                                                </option>
                                                <option value="SE" label="سوئد">سوئد</option>
                                                <option value="CH" label="سوئیس">سوئیس</option>
                                                <option value="UA" label="اوکراین">اوکراین</option>
                                                <option value="SU" label="اتحادیه جمهوری های سوسیالیستی شوروی">اتحادیه
                                                    جمهوری های سوسیالیستی شوروی</option>
                                                <option value="GB" label="انگلستان">بریتانیا</option>
                                                <option value="VA" label="شهر واتیکان">شهر واتیکان</option>
                                                <option value="AX" label="جزایر آلند">جزایر آلند</option>
                                            </optgroup>
                                            <optgroup id="country-optgroup-اقیانوسیه" label="اقیانوسیه">
                                                <option value="AS" label="ساموآی آمریکایی">ساموآی آمریکا</option>
                                                <option value="AQ" label="جنوبگان">قطب جنوب</option>
                                                <option value="AU" label="استرالیا">استرالیا</option>
                                                <option value="BV" label="جزیره بووه">جزیره بووه</option>
                                                <option value="IO" label="قلمرو اقیانوسی بریتانیا">منطقه اقیانوس هند
                                                    بریتانیا</option>
                                                <option value="CX" label="جزیره کریسمس">جزیره کریسمس</option>
                                                <option value="CC" label="جزایر کوکوس [کیلینگ]">جزایر کوکوس [کیلینگ]
                                                </option>
                                                <option value="CK" label="جزایر کوک">جزایر کوک</option>
                                                <option value="FJ" label="فیجی">فیجی</option>
                                                <option value="PF" label="پلینزی فرانسه">پلی‌نزی فرانسه</option>
                                                <option value="TF" label="سرزمین های جنوبی فرانسه">سرزمین های جنوبی
                                                    فرانسه</option>
                                                <option value="GU" label="گوام">گوام</option>
                                                <option value="HM" label="جزیره هرد و جزایر مک دونالد">جزیره هرد و
                                                    جزایر مک دونالد</option>
                                                <option value="KI" label="کیریباتی">کیریباتی</option>
                                                <option value="MH" label="جزایر مارشال">جزایر مارشال</option>
                                                <option value="FM" label="میکرونزی">میکرونزی</option>
                                                <option value="NR" label="نائورو">نائورو</option>
                                                <option value="NC" label="کالدونیای جدید">کالدونیای جدید</option>
                                                <option value="NZ" label="نیوزلند">نیوزیلند</option>
                                                <option value="NU" label="نیوئه">نیو</option>
                                                <option value="NF" label="جزیره نورفولک">جزیره نورفولک</option>
                                                <option value="MP" label="جزایر ماریانای شمالی">جزایر ماریانای شمالی
                                                </option>
                                                <option value="PW" label="پالائو">پالائو</option>
                                                <option value="PG" label="پاپوآ گینه نو">پاپوآ گینه نو</option>
                                                <option value="PN" label="جزایر پیتکرن">جزایر پیتکرن</option>
                                                <option value="WS" label="ساموآ">ساموآ</option>
                                                <option value="SB" label="جزایر سلیمان">جزایر سلیمان</option>
                                                <option value="GS" label="جورجیا جنوبی و جزایر ساندویچ جنوبی">گرجستان
                                                    جنوبی و جزایر ساندویچ جنوبی</option>
                                                <option value="TK" label="توکلائو">توکلائو</option>
                                                <option value="TO" label="تونگا">تونگا</option>
                                                <option value="TV" label="تووالو">تووالو</option>
                                                <option value="UM" label="جزایر کوچک دورافتاده ایالات متحده">ایالات
                                                    متحده جزایر دورافتاده کوچک</option>
                                                <option value="VU" label="وانواتو">وانواتو</option>
                                                <option value="WF" label="والیس و فوتونا">والیس و فوتونا</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="address_province">ایالت</label>
                                        <select id="address_province" name="address[province]" data-default="">
                                            <option value="0" label="یک ایالت را انتخاب کنید..."
                                                selected="selected">یک حالت را انتخاب کنید...</option>
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
                                    <div class="form-group">
                                        <label for="address_zip">پستی/کد پستی</label>
                                        <input type="text" id="address_zip" name="address[zip]" />
                                    </div>
                                    <div class="actionRow">
                                        <input type="button" class="btn btn-secondary get-rates"
                                            value="محاسبه حمل و نقل" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--پایان یادداشت با برآورد حمل و نقل-->
                </div>
                <!--پایان محتوای سبد خرید-->

                <!--Cart Sidebar-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                    <div class="cart-info sidebar-sticky">
                        <div class="cart-order-detail cart-col">
                            <div class="row g-0 border-bottom pb-2">
                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>زیر مجموع</strong></span>
                                <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                        class="money">226.00 تومان</span></span>
                            </div>
                            <div class="row g-0 border-bottom py-2">
                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>تخفیف کوپن</strong></span>
                                <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                        class="money">-25.00تومان</span></span>
                            </div>
                            <div class="row g-0 border-bottom py-2">
                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>مالیات</strong></span>
                                <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                        class="money">10.00 تومان</span></span>
                            </div>
                            <div class="row g-0 border-bottom py-2">
                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>ارسال</strong></span>
                                <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                        class="money">ارسال رایگان</span></span>
                            </div>
                            <div class="row g-0 pt-2">
                                <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>مجموع</strong></span>
                                <span
                                    class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b
                                        class="money">311.00 تومان</b></span>
                            </div>

                            <p class="cart-shipping mt-3">ارسال و مالیات محاسبه شده در هنگام تسویه حساب</p>
                            <p class="cart-shipping fst-normal freeShipclaim"><i
                                    class="ms-2 align-middle icon anm anm-truck-l"></i><b>ارسال رایگان</b> واجد شرایط</p>
                            <div class="customCheckbox cart-tearm">
                                <input type="checkbox" value="allen-vela" id="cart-tearm">
                                <label for="cart-tearm">من با شرایط و ضوابط موافقم</label>
                            </div>
                            <a href="checkout-style1.html" id="cartCheckout" class="btn btn-lg my-4 checkout w-100">ادامه
                                به پرداخت</a>
                            <div class="paymnet-img text-center"><img src="{{ asset('storage/images/icons/safepayment.png')}}"
                                    alt="پرداخت" width="299" height="28" /></div>
                        </div>
                    </div>
                </div>
                <!--پایان نوار کناری سبد خرید-->
            </div>
        </div>
        <!--پایان محتوای اصلی-->

        <!--محصولات مرتبط-->
        <section class="section product-slider pb-0">
            <div class="container">
                <div class="section-header">
                    <h2>شما هم ممکن است بپسندید</h2>
                </div>
                <!--شبکه محصول-->
                <div class="product-slider-4items gp10 arwOut5 grid-products" dir="ltr">
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- شروع تصویر محصول -->
                            <div class="product-image">
                                <!-- شروع تصویر محصول -->
                                <a href="product-layout1.html" class="product-img rounded-0"><img
                                        class="rounded-0 blur-up lazyload" src="{{ asset('storage/images/products/product1.jpg')}}"
                                        alt= "محصول" title="محصول" width="625" height="808" /></a>
                                <!-- تصویر محصول نهایی -->
                                <!-- برچسب محصول -->
                                <div class="product-labels"><span class="lbl on-sale">فروش</span></div>
                                <!-- برچسب محصول نهایی -->
                                <!--دکمه محصول-->
                                <div class="button-set style1">
                                    <!--دکمه سبد خرید-->
                                    <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="فروشگاه سریع"><i
                                                class ="icon anm anm-cart-l"></i><span class="text">فروشگاه
                                                سریع</span></span>
                                    </a>
                                    <!--دکمه پایان سبد خرید-->
                                    <!--دکمه نمایش سریع-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="نمایش سریع"><i
                                                class ="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--دکمه نمایش سریع پایانی-->
                                    <!--دکمه لیست آرزوها-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class=" نماد anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a><!--دکمه پایان لیست علاقه مندی ها-->
                                    <!--دکمه مقایسه-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class=" نماد anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--دکمه مقایسه پایان-->
                                </div>
                                <!--دکمه پایان محصول-->
                            </div>
                            <!-- تصویر محصول نهایی -->
                            <!-- شروع جزئیات محصول -->
                            <div class="product-details text-right">
                                <!-- نام محصول -->
                                <div class="product-name">
                                    <a href="product-layout1.html">پیراهن کوبایی آکسفورد</a>
                                </div>
                                <!-- نام محصول نهایی -->
                                <!-- قیمت محصول -->
                                <div class="product-price">
                                    <span class="price old-price">114.00 تومان</span><span class="price">99.00
                                        تومان</span>
                                </div>
                                <!-- قیمت محصول نهایی -->
                                <!-- بررسی محصول -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star-o"></i>
                                    <span class="caption hidden me-1">3 نظر</span>
                                </div>
                                <!-- بررسی نهایی محصول -->
                            </div>
                            <!-- جزئیات محصول نهایی -->
                        </div>
                    </div>
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- شروع تصویر محصول -->
                            <div class="product-image">
                                <!-- شروع تصویر محصول -->
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- تصویر -->
                                    <img class="primary rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product2.jpg')}}"
                                        src="{{ asset('storage/images/products/product2.jpg')}}" alt="محصول" title=" محصول"
                                        width="625" height="808" />
                                    <!-- پایان تصویر -->
                                    <!-- تصویر شناور -->
                                    <img class="hover rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product2-1.jpg')}}"
                                        src="{{ asset('storage/images/products/product2-1.jpg')}}" alt="محصول " title="محصول"
                                        width="625" height="808" />
                                    <!-- پایان تصویر شناور -->
                                </a>
                                <!-- تصویر محصول نهایی -->
                                <!--دکمه محصول-->
                                <div class="button-set style1">
                                    <!--دکمه سبد خرید-->
                                    <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="انتخاب گزینه ها"><i
                                                class ="icon anm anm-cart-l"></i><span class="text">گزینه ها را انتخاب
                                                کنید</span></span>
                                    </a>
                                    <!--دکمه پایان سبد خرید-->
                                    <!--دکمه نمایش سریع-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="نمایش سریع"><i
                                                class ="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--دکمه نمایش سریع پایانی-->
                                    <!--دکمه لیست آرزوها-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class="icon anm anm-heart-l "></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--دکمه پایان لیست علاقه مندی ها-->
                                    <!--دکمه مقایسه-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class=" نماد anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--دکمه مقایسه پایان-->
                                </div>
                                <!--دکمه پایان محصول-->
                            </div>
                            <!-- تصویر محصول نهایی -->
                            <!-- شروع جزئیات محصول -->
                            <div class="product-details text-right">
                                <!-- نام محصول -->
                                <div class="product-name">
                                    <a href="product-layout1.html">کلاهک کاف</a>
                                </div>
                                <!-- نام محصول نهایی -->
                                <!-- قیمت محصول -->
                                <div class="product-price">
                                    <span class="price">128.00 تومان</span>
                                </div>
                                <!-- قیمت محصول نهایی -->
                                <!-- بررسی محصول -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star"></i>
                                    <span class="caption hidden me-1">8 نظر</span>
                                </div>
                                <!-- بررسی نهایی محصول -->
                            </div>
                            <!-- جزئیات محصول نهایی -->
                        </div>
                    </div>
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- شروع تصویر محصول -->
                            <div class="product-image">
                                <!-- شروع تصویر محصول -->
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- تصویر -->
                                    <img class="primary rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product3.jpg')}}"
                                        src="{{ asset('storage/images/products/product3.jpg')}}" alt="محصول" title=" محصول"
                                        width="625" height="808" />
                                    <!-- پایان تصویر -->
                                    <!-- تصویر شناور -->
                                    <img class="hover rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product3-1.jpg')}}"
                                        src="{{ asset('storage/images/products/product3-1.jpg')}}" alt="محصول " title="محصول"
                                        width="625" height="808" />
                                    <!-- پایان تصویر شناور -->
                                </a>
                                <!-- تصویر محصول نهایی -->
                                <!-- برچسب محصول -->
                                <div class="product-labels"><span class="lbl pr-label3">پرطرفدار</span></div>
                                <!-- برچسب محصول نهایی -->
                                <!--دکمه محصول-->
                                <div class="button-set style1">
                                    <!--دکمه سبد خرید-->
                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="افزودن به سبد خرید"><i
                                                class="icon anm anm-cart-l"></i><span class="text">افزودن به سبد
                                                خرید</span></span>
                                    </a>
                                    <!--دکمه پایان سبد خرید-->
                                    <!--دکمه نمایش سریع-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="نمایش سریع"><i
                                                class="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--دکمه نمایش سریع پایانی-->
                                    <!--دکمه لیست آرزوها-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به لیست علاقه مندی ها"><i
                                            class=" نماد anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--دکمه پایان لیست علاقه مندی ها-->
                                    <!--دکمه مقایسه-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class=" نماد anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--دکمه مقایسه پایان-->
                                </div>
                                <!--دکمه پایان محصول-->
                            </div>
                            <!-- تصویر محصول نهایی -->
                            <!-- شروع جزئیات محصول -->
                            <div class="product-details text-right">
                                <!-- نام محصول -->
                                <div class="product-name">
                                    <a href="product-layout1.html">پیراهن یقه فلانل</a>
                                </div>
                                <!-- نام محصول نهایی -->
                                <!-- قیمت محصول -->
                                <div class="product-price">
                                    <span class="price">99.00 تومان</span>
                                </div>
                                <!-- قیمت محصول نهایی -->
                                <!-- بررسی محصول -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star-o"></i> <i class="icon anm anm-star-o"></i><i
                                        class="icon anm anm-star-o"></i>
                                    <span class="caption hidden me-1">10 نظر</span>
                                </div>
                                <!-- بررسی نهایی محصول -->
                            </div>
                            <!-- جزئیات محصول نهایی -->
                        </div>
                    </div>
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- شروع تصویر محصول -->
                            <div class="product-image">
                                <!-- شروع تصویر محصول -->
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- تصویر -->
                                    <img class="primary rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product4.jpg')}}"
                                        src="{{ asset('storage/images/products/product4.jpg')}}" alt="محصول" title=" محصول"
                                        width="625" height="808" />
                                    <!-- پایان تصویر -->
                                    <!-- تصویر شناور -->
                                    <img class="hover rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product4-1.jpg')}}"
                                        src="{{ asset('storage/images/products/product4-1.jpg')}}" alt="محصول " title="محصول"
                                        width="625" height="808" />
                                    <!-- پایان تصویر شناور -->
                                </a>
                                <!-- تصویر محصول نهایی -->
                                <!-- برچسب محصول -->
                                <div class="product-labels"><span class="lbl on-sale">50% تخفیف</span></div>
                                <!-- برچسب محصول نهایی -->
                                <!--دکمه محصول-->
                                <div class="button-set style1">
                                    <!--دکمه سبد خرید-->
                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به سبد خرید"><i class="icon anm anm-cart-l"></i><span
                                                class="text">افزودن به سبد خرید</span></span></a>
                                    <!--دکمه پایان سبد خرید-->
                                    <!--دکمه نمایش سریع-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="مشاهده سریع"><i
                                                class ="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--دکمه نمایش سریع پایانی-->
                                    <!--دکمه لیست آرزوها-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title=" لیست علاقه مندی ها"><i
                                            class=" نماد anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--دکمه پایان لیست علاقه مندی ها-->
                                    <!--دکمه مقایسه-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class=" نماد anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--دکمه مقایسه پایان-->
                                </div>
                                <!--دکمه پایان محصول-->
                            </div>
                            <!-- تصویر محصول نهایی -->
                            <!-- شروع جزئیات محصول -->
                            <div class="product-details text-right">
                                <!-- نام محصول -->
                                <div class="product-name">
                                    <a href="product-layout1.html">کلاه‌پوش نخی</a>
                                </div>
                                <!-- نام محصول نهایی -->
                                <!-- قیمت محصول -->
                                <div class="product-price">
                                    <span class="price old-price">198.00تومان</span><span
                                        class="price">99.00تومان</span>
                                </div>
                                <!-- قیمت محصول نهایی -->
                                <!-- بررسی محصول -->
                                <div class="product-review">
                                    <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                        class="icon anm anm-star-o"> </i><i class="icon anm anm-star-o"></i><i
                                        class="icon anm anm-star-o"></i>
                                    <span class="caption hidden me-1">0 نظر</span>
                                </div>
                                <!-- بررسی نهایی محصول -->
                            </div>
                            <!-- جزئیات محصول نهایی -->
                        </div>
                    </div>
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- شروع تصویر محصول -->
                            <div class="product-image">
                                <!-- شروع تصویر محصول -->
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- تصویر -->
                                    <img class="primary rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product5.jpg')}}"
                                        src="{{ asset('storage/images/products/product5.jpg')}}" alt="محصول" title=" محصول"
                                        width="625" height="808" />
                                    <!-- پایان تصویر -->
                                    <!-- تصویر شناور -->
                                    <img class="hover rounded-0 blur-up lazyload"
                                        data-src="{{ asset('storage/images/products/product5-1.jpg')}}"
                                        src="{{ asset('storage/images/products/product5-1.jpg')}}" alt="محصول " title="محصول"
                                        width="625" height="808" />
                                    <!-- پایان تصویر شناور -->
                                </a>
                                <!-- تصویر محصول نهایی -->
                                <!-- برچسب محصول -->
                                <div class="product-labels"><span class="lbl pr-label2">داغ</span></div>
                                <!-- برچسب محصول نهایی -->
                                <!--دکمه محصول-->
                                <div class="button-set style1"><!--دکمه سبد خرید-->
                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal"
                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="افزودن به سبد خرید"><i class="icon anm anm-cart-l"></i><span
                                                class="text">افزودن به سبد خرید</span></span>
                                    </a>
                                    <!--دکمه پایان سبد خرید-->
                                    <!--دکمه نمایش سریع-->
                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                        data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="مشاهده سریع"><i
                                                class ="icon anm anm-search-plus-l"></i><span class="text">نمایش
                                                سریع</span></span>
                                    </a>
                                    <!--دکمه نمایش سریع پایانی-->
                                    <!--دکمه لیست آرزوها-->
                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title=" لیست علاقه مندی ها"><i
                                            class=" نماد anm anm-heart-l"></i><span class="text">افزودن به لیست علاقه
                                            مندی ها</span></a>
                                    <!--دکمه پایان لیست علاقه مندی ها-->
                                    <!--دکمه مقایسه-->
                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="افزودن به مقایسه"><i
                                            class=" نماد anm anm-random-r"></i><span class="text">افزودن به
                                            مقایسه</span></a>
                                    <!--دکمه مقایسه پایان-->
                                </div>
                                <!--دکمه پایان محصول-->
                            </div>
                            <!-- تصویر محصول نهایی -->
                            <!-- شروع جزئیات محصول -->
                            <div class="product-details text-right">
                                <!-- نام محصول -->
                                <div class="product-name">
                                    <a href="product-layout1.html">شلوارک زنانه جین</a>
                                </div>
                                <!-- نام محصول نهایی -->
                                <!-- قیمت محصول -->
                                <div class="product-price">
                                    <span class="price">39.00 تومان</span>
                                </div>
                                <!-- قیمت محصول نهایی -->
                                <!-- بررسی محصول -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                        class="icon anm anm-star-o"></i> <i class="icon anm anm-star-o"></i><i
                                        class="icon anm anm-star-o"></i>
                                    <span class="caption hidden me-1">3 نظر</span>
                                </div>
                                <!-- بررسی نهایی محصول -->
                            </div>
                            <!-- جزئیات محصول نهایی -->
                        </div>
                    </div>
                </div>
                <!--End Product Grid-->
            </div>
        </section>
        <!--پایان محصولات مرتبط-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

    <!-- Product Quickshop Modal-->
    @include('partials.quickShopModal')
    <!-- End Product Quickshop Modal -->

    <!-- Product Addtocart Modal-->
    @include('partials.productAddtocartModal')
    <!-- End Product Addtocart Modal -->

    <!-- Product Quickview Modal-->
    @include('partials.productQuickviewModal')
    <!--End Product Quickview Modal-->

@endsection
