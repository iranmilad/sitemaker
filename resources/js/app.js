import iranData from "./iran_cities_with_coordinates.json";

// core version + navigation, pagination modules:
import toastr from "toastr";
import "toastr/build/toastr.css";
import "../css/vendors/toaster/toastr.css";

import "./search";


// this is my swiper .headerSlider


$(document).on("DOMContentLoaded", function () {
    if ($(".province")) {
        const provinceSelect = $(".province");
        const selectedProvince = $(this).val();

        // provinceSelect.append(
        //     '<option value="" selected disabled>لطفاً یک استان را انتخاب کنید</option>'
        // );
        iranData.forEach((province) => {
            provinceSelect.append(new Option(province.name, province.name));
            // select first province
        });

        // وقتی یک استان انتخاب می‌شود
        $(".province").on("change", function (event) {
            const selectedProvince = $(this).val();
            let elem = $(event.target).data("province-target");
            let citySelect = $(elem);

            // حذف تمام گزینه‌های فعلی در لیست شهر
            citySelect.empty();

            // اگر استانی انتخاب نشده باشد، لیست شهرها غیرفعال می‌شود
            if (selectedProvince === "") {
                citySelect.prop("disabled", true);
            } else {
                // فعال کردن لیست شهرها
                citySelect.prop("disabled", false);

                // افزودن گزینه‌های جدید به لیست شهر
                const cities = iranData.find(
                    (province) => province.name === selectedProvince
                ).cities;
                cities.forEach((city) => {
                    citySelect.append(new Option(city.name, city.name));
                });

                // بروزرسانی Select2 برای لیست شهرها
                citySelect.trigger("change");
            }
        });


    }
});



$(".payment-accordion:not(.disabled) input[type=checkbox]").on(
    "change",
    function () {
        // Uncheck all checkboxes except for this one
        $(".payment-accordion input[type=checkbox]")
            .not(this)
            .prop("checked", false);

        // Get the associated accordion body
        let accordionBody = $(this)
            .parent()
            .parent()
            .parent()
            .find(".payment-accordion-body");

        if ($(this).prop("checked")) {
            // If the checkbox is checked, slide down the accordion body
            $(".payment-accordion-body").slideUp();
            accordionBody.slideDown(300);
        } else {
            // If the checkbox is unchecked, slide up the accordion body
            accordionBody.slideUp(300);
        }
    }
);

let checked_shipping = false;

$(document).ready(function () {
    if (!$("#credit_payment").is(":checked")) {
        $("#last-shipping-pay").prop("disabled", true);
    }
    $("#credit_payment").on("change", function (e) {
        if ($(e.target).prop("checked")) {
            $("#last-shipping-pay").removeAttr("disabled");
            checked_shipping = true;
        }
    });
});









/**
 * Increase and Decrease the number of product in product page
 */
$(".product-counter-inner .count-plus").on("click", (e) => {
    e.preventDefault();
    let input = $(e.target).parent().parent().find("input");
    let value = parseInt(input.val()) + 1;
    input.val(value);
    if (value > 0) {
        $(".product-counter-inner .count-minus").css("opacity", 1);
    }
});

$(".product-counter-inner .count-minus").on("click", (e) => {
    e.preventDefault();
    let input = $(e.target).parent().parent().find("input");
    let value = parseInt(input.val()) - 1;
    if (value >= 1) {
        input.val(value);
        if (value === 1) {
            $(".product-counter-inner .count-minus").css("opacity", 0.4);
        }
    }
});

$(".product-counter-inner input").on("change", (e) => {
    let value = parseInt($(e.target).val());
    if (isNaN(value) || value < 1) {
        $(e.target).val(1);
        $(".product-counter-inner .count-minus").css("opacity", 0.4);
    } else if (value === 1) {
        $(".product-counter-inner .count-minus").css("opacity", 0.4);
    } else {
        $(".product-counter-inner .count-minus").css("opacity", 1);
    }
});

/**
 * Remove item from cart
 */
$(".product-basket .remove-item").on("click", function (e) {
    // remove its parent .product-basket
    e.preventDefault();
    $.ajax("/api/remove-cart", {
        method: "POST",
        data: {
            id: $(this).data("id"),
        },
        success: function (response) {
            window.location.reload();
        },
        error: function () {
            toastr.error("خطایی رخ داده است. مجددا تلاش کنید");
        },
    });
});


$("#remove-all-carts").on("click", function (e) {
    e.preventDefault();
    $.ajax("/api/remove-all-cart", {
        method: "POST",
        beforeSend: function () {
            removeAllCartsBlock.block();
        },
        success: function (response) {
            removeAllCartsBlock.release();
            window.location.reload();
        },
        error: function (err) {
            removeAllCartsBlock.release();
            toastr.error("خطایی رخ داده است. مجددا تلاش کنید");
        },
    });
});

// Shipping checkbox to collapse #anotherAddress
$("#sendtoanotheraddress").on("change", function () {
    if ($(this).is(":checked")) {
        $("#anotherAddress").slideDown();
    } else {
        $("#anotherAddress").slideUp();
    }
});


$(document).ready(function () {
    $('.header-cart').on('click', function (event) {
        event.preventDefault();

        $.ajax({
            url: '/mini-cart',
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                document.querySelector('[name="minicart"]').innerHTML = data.html;
                document.querySelector('.cart-count').textContent = data.total;


            },
            error: function (error) {
                console.error('Error fetching mini cart:', error);
            }
        });
    });
});


