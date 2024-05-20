import $ from "jquery";
import KTBlockUI from "./tools/blockui";
import toastr from "toastr";
import * as Bootstrap from "bootstrap";
import { createElement, hydrate } from "preact";
import { MiniCartBox } from "./components";
import "toastr";
import "toastr/build/toastr.min.css";
/**
 * This file is for mini-cart blade component
 */

let block = new KTBlockUI(document.querySelector("#miniCart .offcanvas-body"));

let openedCanvas = false;

document
    .getElementById("miniCart")
    .addEventListener("show.bs.offcanvas", (e) => {
        if (openedCanvas === false) {
            $.ajax({
                method: "GET",
                url: "/api/mini-cart",
                beforeSend: () => {
                    block.block();
                },
                success: (response) => {
                    block.release();
                    if (response.items.length > 0) {
                        $("#mini-cart-items").html("");
                        $("#mini-cart-items-container").addClass("active");
                        hydrate(createElement(MiniCartBox, {items: response.items,removeFunc,updateFunc}),document.getElementById("mini-cart-items"));
                        $("#mini-cart-calculated").show();
                        $(".navbar-cart span").text(response.cart.count);
                        $("#mini-cart-price").text(response.cart.total);
                        $("#mini-cart-empty").hide();
                    }
                    else{
                        $("#mini-cart-items-container").removeClass("active");
                        $("#mini-cart-empty").show();
                        $("#mini-cart-calculated").hide();
                        $("#mini-cart-items").html("");
                        $(".navbar-cart span").text("0");
                    }
                },
                error: (err) => {
                    block.release();
                    toastr.error("مشکلی پیش آمده. مجدد امتحان کنید");
                },
            });
            openedCanvas = true;
        }
    });

document
    .getElementById("miniCart")
    .addEventListener("hide.bs.offcanvas", (e) => {
        openedCanvas = false;
    });


/**
 *
 * @param {number} id
 * @param {number} count
 * @param {method} cancelUpdate this is for when it cant update cart. then it should set previous count to its input
 */
function updateFunc(id,count){
    return new Promise((resolve, reject) => {
        $.ajax("/api/update-cart", {
            beforeSend: () => {
                block.block();
            },
            method: "POST",
            data: {
                id,
                count
            },
            success: (response) => {
                block.release();
                if (response.cart && response.cart.count > 0) {
                    $("#mini-cart-items").html("");
                    $("#mini-cart-items-container").addClass("active");
                    hydrate(createElement(MiniCartBox, { items: response.items, removeFunc, updateFunc }), document.getElementById("mini-cart-items"));
                    $("#mini-cart-calculated").show();
                    $(".navbar-cart span").text(response.cart.count);
                    $("#mini-cart-price").text(response.cart.total);
                    $("#mini-cart-empty").hide();
                } else {
                    $("#mini-cart-items-container").removeClass("active");
                    $("#mini-cart-empty").show();
                    $("#mini-cart-calculated").hide();
                    $("#mini-cart-items").html("");
                    $(".navbar-cart span").text("0");
                }
                resolve(response); // Resolve the promise with the response
            },
            error: (error) => {
                block.release();
                toastr.error("خطایی رخ داده است");
                reject(error); // Reject the promise with the error
            }
        });
    });

}

function removeFunc(id,target) {
    let item = $(target).closest(".mini-cart-box");
    $.ajax("/api/remove-cart", {
        beforeSend: function () {
            block.block();
        },
        method: "POST",
        data: {
            id,
        },
        success: function (response) {
            block.release();
            if (response.cart && response.cart.count > 0) {
                $("#mini-cart-items").html("");
                $("#mini-cart-items-container").addClass("active");
                hydrate(createElement(MiniCartBox, { items: response.items, removeFunc, updateFunc }), document.getElementById("mini-cart-items"));
                $("#mini-cart-calculated").show();
                $(".navbar-cart span").text(response.cart.count);
                $("#mini-cart-price").text(response.cart.total);
                $("#mini-cart-empty").hide();
            } else {
                $("#mini-cart-items-container").removeClass("active");
                $("#mini-cart-empty").show();
                $("#mini-cart-calculated").hide();
                $("#mini-cart-items").html("");
                $(".navbar-cart span").text("0");
            }
        },
        error: function (xhr, status, error) {
            block.release();
            toastr.error("خطایی رخ داده است");
        },
    });
}
