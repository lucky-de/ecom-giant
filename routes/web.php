<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {return view('welcome');});
Route::get('/', 'HomeController@index')->name('user.home');

Route::get('/contact-us', 'IndexController@contact_us')->name('user.contact_us');
Route::get('/about-us', 'IndexController@about_us')->name('user.about_us');
Route::get('/categories', 'IndexController@categories')->name('user.categories');
Route::get('/terms-and-condition', 'IndexController@terms_and_condition')->name('user.terms_and_condition');
Route::get('/make-money', 'IndexController@make_money')->name('user.make_money');
Route::get('/todays-deals', 'IndexController@todays_deals')->name('user.todays_deals');





Route::get('/', 'HomeController@index')->name('user.home');


Route::get('home', 'HomeController@index')->name('user.home');
Route::get('product-details', 'HomeController@product_details')->name('product_details');
Route::get('cart-data', 'HomeController@getCartData')->name('get_cart_data');
Route::post('cart', 'HomeController@postCart')->name('add_cart');
Route::get('view-cart', 'HomeController@viewCart')->name('view_cart');
Route::post('update-cart', 'HomeController@updateCart')->name('update_cart');
Route::post('delete-cart', 'HomeController@deleteCart')->name('delete_cart');

Route::get('checkout', 'HomeController@getCheckout')->name('checkout');
Route::post('checkout', 'HomeController@postCheckout')->name('checkout');

Route::get('order', 'HomeController@getOrder')->name('order');

Route::get('/dashboard', 'SellerController@dashboard')->name('user.dashboard');

/*Route::get('/dashboard', function () { return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';


 Route::get('/users/logout', ['as' => 'users.logout', 'uses' => 'Auth\AuthenticatedSessionController@destroy']);

Route::post('seller-store', 'HomeController@store')->name('admin.seller.store');
Route::post('user-login', 'HomeController@login')->name('admin.user.store');
Route::post('user-store', 'HomeController@userstore')->name('admin.user.register');
Route::post('vendor-product-store', 'SellerController@vendorProduct_store')->name('admin.vendorproduct.store');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        Route::get('login', 'AuthenticatedSessionController@create')->name('admin.login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('admin.adminlogin');
    });


    Route::middleware('admin')->group(function(){
        Route::get('dashboard', 'HomeController@index')->name('admin.dashboard');
        Route::get('homepagebanners', 'HomeController@home_page_banners')->name('admin.home_page_banners');

    });



    Route::get('logout', 'Auth\AuthenticatedSessionController@destroy')->name('admin.logout');
    Route::get('register', 'Auth\AuthenticatedSessionController@destroy')->name('admin.register');

       /*System Setting*/
    Route::get('system-setting', 'SystemSettingController@index')->name('admin.systemsetting.index');
    Route::post('system-setting-update', 'SystemSettingController@update')->name('admin.systemsetting.update');

       /*Profile Setting*/
    Route::get('profile-update', 'ProfileUpdateController@index')->name('admin.profileupdate.index');

    /*Category*/
    Route::get('category', 'CategoryController@index')->name('admin.category.index');
    Route::post('category', 'CategoryController@store')->name('admin.category.store');
    Route::get('category-list', 'CategoryController@list')->name('admin.category.list');
    Route::post('category-get', 'CategoryController@get_row')->name('admin.category.get');
    Route::post('category-update', 'CategoryController@update_row')->name('admin.category.update');
    Route::get('category-export', 'CategoryController@export')->name('admin.category.export');
    Route::post('category-delete', 'CategoryController@delete_row')->name('admin.category.delete');

    /*Floor*/
    Route::get('room-type', 'RoomTypesController@index')->name('admin.roomtype.index');
    Route::post('room-type', 'RoomTypesController@store')->name('admin.roomtype.store');
    Route::get('room-type-list', 'RoomTypesController@list')->name('admin.roomtype.list');
    Route::post('room-type-get', 'RoomTypesController@get_row')->name('admin.roomtype.get');
    Route::post('room-type-update', 'RoomTypesController@update_row')->name('admin.roomtype.update');
    Route::get('room-type-export', 'RoomTypesController@export')->name('admin.roomtype.export');
    Route::post('room-type-delete', 'RoomTypesController@delete_row')->name('admin.roomtype.delete');

    Route::get('brand', 'BrandController@index')->name('admin.brand.index');
    Route::post('brand', 'BrandController@store')->name('admin.brand.store');
    Route::get('brand-list', 'BrandController@list')->name('admin.brand.list');
    Route::post('brand-get', 'BrandController@get_row')->name('admin.brand.get');
    Route::post('brand-update', 'BrandController@update_row')->name('admin.brand.update');
    Route::get('brand-export', 'BrandController@export')->name('admin.brand.export');
    Route::post('brand-delete', 'BrandController@delete_row')->name('admin.brand.delete');

    Route::get('customers', 'VendorController@index')->name('admin.customers.index');
    Route::post('customers', 'VendorController@store')->name('admin.customers.store');
    Route::get('customers-list', 'VendorController@list')->name('admin.customers.list');
    Route::post('customers-get', 'VendorController@get_row')->name('admin.customers.get');
    Route::post('customers-update', 'VendorController@update_row')->name('admin.customers.update');
    Route::get('customers-export', 'VendorController@export')->name('admin.customers.export');
    Route::post('customers-delete', 'VendorController@delete_row')->name('admin.customers.delete');

    Route::get('vendors', 'VendorController@index')->name('admin.vendors.index');
    Route::post('vendors', 'VendorController@store')->name('admin.vendors.store');
    Route::get('vendors-list', 'VendorController@list')->name('admin.vendors.list');
    Route::post('vendors-get', 'VendorController@get_row')->name('admin.vendors.get');
    Route::post('vendors-update', 'VendorController@update_row')->name('admin.vendors.update');
    Route::get('vendors-export', 'VendorController@export')->name('admin.vendors.export');
    Route::post('vendors-delete', 'VendorController@delete_row')->name('admin.vendors.delete');

    Route::get('products', 'ProductsController@index')->name('admin.products.index');
    Route::post('products', 'ProductsController@store')->name('admin.products.store');
    Route::get('products-list', 'ProductsController@list')->name('admin.products.list');
    Route::post('products-get', 'ProductsController@get_row')->name('admin.products.get');
    Route::post('products-update', 'ProductsController@update_row')->name('admin.products.update');
    Route::get('products-export', 'ProductsController@export')->name('admin.products.export');
    Route::post('products-delete', 'ProductsController@delete_row')->name('admin.products.delete');

    Route::get('orders', 'OrdersController@index')->name('admin.orders.index');
    Route::post('orders', 'OrdersController@store')->name('admin.orders.store');
    Route::get('orders-list', 'OrdersController@list')->name('admin.orders.list');
    Route::post('orders-get', 'OrdersController@get_row')->name('admin.orders.get');
    Route::post('orders-update', 'OrdersController@update_row')->name('admin.orders.update');
    Route::get('orders-export', 'OrdersController@export')->name('admin.orders.export');
    Route::post('orders-delete', 'OrdersController@delete_row')->name('admin.orders.delete');



    Route::get('homepagebanners', 'HomePageBannerController@index')->name('admin.homepagebanners.index');
    Route::post('homepagebanners', 'HomePageBannerController@store')->name('admin.homepagebanners.store');
    Route::get('homepagebanners-list', 'HomePageBannerController@list')->name('admin.homepagebanners.list');
    Route::post('homepagebanners-get', 'HomePageBannerController@get_row')->name('admin.homepagebanners.get');
    Route::post('homepagebanners-update', 'HomePageBannerController@update_row')->name('admin.homepagebanners.update');
    Route::get('homepagebanners-export', 'HomePageBannerController@export')->name('admin.homepagebanners.export');
    Route::post('homepagebanners-delete', 'HomePageBannerController@delete_row')->name('admin.homepagebanners.delete');





});
