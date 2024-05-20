<?php

use Livewire\Livewire;
use App\Models\Product;
use App\Livewire\Counter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Livewire\ProductComponent;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Auth\Mail\AuthController;
use App\Http\Controllers\Auth\Mail\LoginController;
use App\Http\Controllers\Auth\Mail\ResetPasswordController;
use App\Http\Controllers\Admin\ProductWaitingListController;
use App\Http\Controllers\Auth\Mail\ForgotPasswordController;

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





Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('login.home');
// Route::get('/loginRequire', [HomeController::class,'loginRequire'])->name('loginRequire');

// Route::post('/check_verify',[VerifyController::class, 'index'])->name('check_verify');

Route::get('login', [LoginController::class, 'index'])->name('login');
// Route::post('login', [LoginController::class,'login'])->name('user.login');
Route::post('login', [LoginController::class, 'login'])->name('user.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/forgotPassword', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forgot');
Route::post('/sendResetLinkEmail', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('forgot.send');
Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.email.update');

//Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::get('/register', [AuthController::class, 'show'])->name('register');
Route::post('/register', [AuthController::class, 'submit'])->name('register.submit');


// Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');
// Route::post('/send-verification-code', [AuthController::class, 'sendVerificationCode'])->name('send.verification.code');
// Route::post('/resend-verification-code', [AuthController::class, 'resendVerifyCode'])->name('resend.verification.code');

// Route::get('/verify/{id}/{mobile}', [AuthController::class, 'showVerificationForm'])->name('verify.form');
// Route::post('/verify', [AuthController::class, 'verifyCode'])->name('verify.code');
// Route::get('/registration-success', function () {
//     return view('auth.registration_success');
// })->name('registration.success');

// Route::get('/mobile-verification', [AuthController::class, 'showMobileVerificationForm'])->name('mobile.verification.form');
// Route::post('/mobile-verification', [AuthController::class, 'MobileVerificationSubmit'])->name('MobileVerificationSubmit');



// Route::get('/remember-code-entry/{id}/{mobile}', [AuthController::class, 'showRememberCodeForm'])->name('remember.code.form');
// Route::post('/remember', [AuthController::class, 'rememberCodeValidate'])->name('verify.remember.submit');


// // // Route to finish user Registered
// // Route::post('/userRegistered', [RegisterController::class, 'userRegistered'])->name('userRegistered');

// // // Route to resend verification code
// // Route::post('/resend-verification-code', [RegisterController::class, 'resendVerificationCode'])->name('resend.verification.code');

// Route::get('/blog/{slug}', [PostController::class, 'index'])->name('single.post');
// Route::get('/category/{slug?}',[CategoryController::class,'index'])->name('category');
// Route::get('/product/{id}',[ProductController::class,'index'])->name('single.product');



Route::get('/terms', function () {
    return view('terms');
})->name('terms');

// // auth user access
// Route::group(['middleware' => ['auth']],function(){
//     Route::get('/shipping', [OrderController::class,'shipping'])->name('shipping');
//     Route::get('/cart', [OrderController::class,'showCart'])->name('cart');
//     Route::post('/shipping', [OrderController::class,'shippingStore'])->name('shipping.store');
//     Route::get('/delivery/{deliveryType?}', [OrderController::class,'delivery'])->name('delivery');
//     Route::post('/delivery', [OrderController::class,'storeDelivery'])->name('delivery.store');
//     Route::get('/payment/{paymentMethod?}', [OrderController::class,'payment'])->name('payment');
//     Route::get('/orderComplete', [OrderController::class,'complete'])->name('order.complete');
// } );

Route::get('/wishlist/{id}', [WishlistController::class,'storeWishlist'])->name('storeWishlist');
Route::get('/delete-wishlist/{id}', [WishlistController::class,'delete'])->name('deleteFavorites');
Route::get('/favorites', [WishlistController::class, 'index'])->name('favorites');

Route::get('/about-us', [PageController::class, 'about'])->name('about-us');


Route::post('/search',  [SearchController::class, 'index'])->name('search');

Route::get('/contact-us',  [ContactController::class, 'index'])->name('contact-us');
Route::post('/contact-us',  [ContactController::class, 'sendMail'])->name('sendMail.contact-us');
Route::get('/terms',  [PageController::class, 'terms'])->name('terms');
Route::get('/page/{slug}',  [PageController::class, 'index'])->name('page.view');

// Route::get('/search/category/{query}', function () {
//     return view('search-blog');
// })->name('category.search');

// Route::get('/search/tag/{query}', function () {
//     return view('search-blog');
// })->name('tag.search');

// Route::get('/search/{query}', function () {
//     return view('search-blog');
// })->name('search');


// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');
// // Route::group(['middleware'=> ['
// // when user is not logged in
// // if user is logged in, we use dashboard
// // in this page we always use cookie instead of database



// Route::get('/payment-return', function () {
//     return view('payment-return');
// })->name('payment-return');



Route::get('/blog/{slug}', [PostController::class, 'index'])->name('single.post');
Route::get('/category/{slug?}{maxprice?}{minprice?}{page?}', [CategoryController::class, 'index'])->name('category');
Route::get('/product/{id}', [ProductController::class, 'index'])->name('single.product');

Route::post("/category",[CategoryController::class,'list'])->name('api.category');

Route::group(['middleware' => ['web']], function () {

    Route::post("/add-to-cart",[OrderController::class,'addToCart'])->name('addToCart');

    Route::get("/mini-cart", [OrderController::class,'showMiniCart'])->name('showMiniCart');

    Route::get("/cart-item-count", [OrderController::class,'getCartItemCount'])->name('getCartItemCount');

    Route::get('/cart/{id}', [OrderController::class,'cartItemDetail'])->name('cartItemDetail');

    Route::post("/remove-cart", [OrderController::class,'removeItemCart'])->name('removeItemCart');

    Route::post("/remove-all-cart",[OrderController::class,'removeAllCart'])->name('removeAllCart');

    Route::post("/update-cart", [OrderController::class,'updateCart'])->name('updateCart');


    Route::get('/set-cookie', function () {
        return response('Cookie set successfully')->cookie('language', 'ssa', 120);
    });


    Route::post('/file/upload', [FileController::class,'upload'])->name('dashboard.upload');
    Route::delete('/file/remove', [FileController::class,'remove'])->name('dashboard.remove');
});

// auth user access
Route::group(['middleware' => ['auth']],function(){
    Route::get('/shipping', [OrderController::class,'shipping'])->name('shipping');
    Route::get('/cart', [OrderController::class,'showCart'])->name('cart');
    Route::get('/checkout', [OrderController::class,'checkout'])->name('checkout');
    Route::post('/shipping', [OrderController::class,'shippingStore'])->name('shipping.store');
    Route::get('/delivery/{deliveryType?}', [OrderController::class,'delivery'])->name('delivery');
    Route::post('/delivery', [OrderController::class,'storeDelivery'])->name('delivery.store');
    Route::get('/payment/{paymentMethod?}', [OrderController::class,'payment'])->name('payment');
    Route::post('/orderComplete', [OrderController::class,'complete'])->name('order.complete');
} );




Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    // Define routes that have the 'dashboard' prefix



    Route::get('/', [UserController::class, 'index'])->name('dashboard.home');
    Route::get('/comments', [UserController::class, 'comments'])->name('dashboard.comments');
    Route::get('/user-info', [UserController::class, 'userInfo'])->name('dashboard.user-info');
    Route::post('/user-info-update', [UserController::class, 'userInfoUpdate'])->name('dashboard.user-info.update');
    Route::get('/orders', [UserController::class, 'orders'])->name('dashboard.orders');
    Route::get('/order/{id}', [UserController::class, 'order'])->name('dashboard.order');
    Route::post('/review', [UserController::class, 'review'])->name('dashboard.review.store');
    Route::get('/changepass', [UserController::class, 'changePass'])->name('dashboard.change-pass');
    Route::post('/change-password', [UserController::class, 'setNewPassword'])->name('dashboard.setNewPassword');
    Route::get('/notifications', [UserController::class, 'notifications'])->name('dashboard.notifications');
    Route::get('/favorites', [UserController::class, 'favorites'])->name('dashboard.favorites');
    Route::get('/checks', [UserController::class, 'checks'])->name('dashboard.checks');
    Route::get('/payment-deadline', [UserController::class, 'paymentDeadLine'])->name('dashboard.payment-deadline');
    Route::get('/invoice', [UserController::class, 'invoice'])->name('dashboard.invoice');
    Route::post('/sessions/store', [SessionController::class, 'store'])->name('sessions.store');
    Route::post('notifications', [SessionController::class, 'save'])->name('dashboard.messages.save');
    Route::get('/product/{id}/add-to-waiting-list', [ProductWaitingListController::class, 'addToWaitingList'])->name('product.waiting-list.add');
    Route::get('/product/{productId}/remove-waiting-list', [ProductWaitingListController::class, 'removeFromWaitingList'])->name('product.waiting-list.remove');

    // Add more routes as needed
});


// Livewire::setScriptRoute(function ($handle) {
//     return Route::get('/custom/livewire/livewire.js', $handle);
// });


// Livewire::setUpdateRoute(function ($handle) {
//     return Route::post('/custom/livewire/update', $handle);
// });


// Route::get('/counter', Counter::class);



// Route::get('/get-cookie', function () {
//     return request()->cookie('language');
// });





// Route::get('/', function () {
//     return view('index');
// })->name("home");

Route::get('/shop', function () {
    return view('shop');
})->name("shop");

Route::get('/product', function () {
    return view('product');
})->name("product");

// Route::get('/search', function () {
//     return view('search');
// })->name("search");

// Route::get('/wishlist', function () {
//     return view('wishlist');
// })->name("wishlist");

Route::get('/compare', function () {
    return view('compare');
})->name("compare");


// Route::get('/checkout', function () {
//     return view('checkout');
// })->name("checkout");

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

// Route::get('/blogPost', function () {
//     return view('blogPost');
// })->name("single.post");

// Route::get('/register', function () {
//     return view('auth/register');
// })->name("register");

// Route::get('/login', function () {
//     return view('auth/login');
// })->name("login");

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
Livewire::setScriptRoute(function ($handle) {
    return Route::get('/custom/livewire/livewire.js', $handle);
});


Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/custom/livewire/update', $handle);
});
