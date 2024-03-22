<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("home");

Route::get('/shop', function () {
    return view('shop');
})->name("shop");

Route::get('/product', function () {
    return view('product');
})->name("product");

Route::get('/search', function () {
    return view('search');
})->name("search");

Route::get('/wishlist', function () {
    return view('wishlist');
})->name("wishlist");

Route::get('/compare', function () {
    return view('compare');
})->name("compare");

Route::get('/cart', function () {
    return view('cart');
})->name("cart");

Route::get('/checkout', function () {
    return view('checkout');
})->name("checkout");

Route::get('/orderStatus', function () {
    return view('orderStatus');
})->name("orderStatus");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/faqs', function () {
    return view('faqs');
})->name("faqs");

Route::get('/blog', function () {
    return view('blog');
})->name("blog");

Route::get('/blogPost', function () {
    return view('blogPost');
})->name("blogPost");

Route::get('/register', function () {
    return view('auth/register');
})->name("register");

Route::get('/login', function () {
    return view('auth/login');
})->name("login");

Route::get('/forgotPassword', function () {
    return view('auth/forgotPassword');
})->name("forgotPassword");

Route::get('/account', function () {
    return view('auth/account');
})->name("account");

// Route::group(['prefix' => 'dashboard'], function () {
//     // Define routes that have the 'dashboard' prefix

//     Route::get('/', function () {
//         // Your dashboard home page logic
//         return view('dashboard.dashboard');
//     })->name('dashboard.home');

//     Route::get('/user-info', function () {
//         // Your dashboard home page logic
//         return view('dashboard.user-info');
//     })->name('dashboard.home');

//     // Add more routes as needed
// });
