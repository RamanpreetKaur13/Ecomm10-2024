<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CmsPageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\FamilyColorController;
use App\Http\Controllers\Admin\ProductDetailController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\SectionMgmtController;
use App\Http\Controllers\Admin\GridCardsController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\CarouselItemController;

use App\Http\Controllers\Front\HomeController;

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
    return view('welcome');
});

// front routes 
Route::namespace('App\Http\Controllers\Front')->group(function(){

    Route::get('/' , [HomeController::class ,'home'])->name('home');
    Route::get('header' , [HomeController::class ,'header'])->name('header');
});


Route::prefix('admin')->name('admin.')->namespace('App\Http\Controllers\Admin')->group(function(){
    // Route::middleware(['guest'])->group(function () {
        Route::match(['get' , 'post'] ,'login' ,  'AdminController@login')->name('login')->middleware('guest');

    // });
    Route::middleware(['admin'])->group(function () {
        Route::get('dashboard' , 'AdminController@dashboard')->name('dashboard');
        Route::get('logout' , 'AdminController@logout')->name('logout');
        Route::match(['get' , 'post'] , 'password' , 'AdminController@AdminPassword')->name('password');
        Route::match(['get' , 'post'] , 'admin-details' , 'AdminController@adminDetails')->name('admin-details');
        Route::post('check-current-password' , 'AdminController@checkCurrentPassword')->name('check-current-password');

        Route::resource('cms-page', CmsPageController::class);
        Route::post('update-cms-page-status' , 'CmsPageController@updateCmsPageStatus')->name('update-cms-page-status');
        Route::get('cms-page/delete/{id}' , 'CmsPageController@delete');

        //subadmins
        Route::resource('subadmins', AdminController::class);
        Route::post('update-subadmin-status' , 'AdminController@updateSubadminStatus')->name('update-subadmin-status');
        Route::get('subadmin/delete/{id}' , 'AdminController@delete');
        Route::get('subadmins/roles/{id}' , 'AdminController@editSubadminRoles')->name('subadmins.roles');
        Route::post('subadmins/update/roles/{id}' , 'AdminController@updateSubadminRoles')->name('subadmins.update.roles');

        // Categories
        Route::resource('categories', CategoryController::class);
        Route::post('update-category-status' , 'CategoryController@updateCategoryStatus')->name('update-category-status');
        Route::get('category/delete/{id}' , 'CategoryController@delete');
        // delete category image from folder and db
        Route::get('category-image/delete/{id}' , 'CategoryController@deleteImage');

        // products
        Route::resource('products', ProductController::class);
        Route::post('update-product-status' , 'ProductController@updateProductStatus')->name('update-product-status');
        Route::get('product/delete/{id}' , 'ProductController@delete');
        // delete product video from folder and db
        Route::get('product-video/delete/{id}' , 'ProductController@deleteVideo');
        // delete product image from folder and db
        Route::get('product-image/delete/{id}' , 'ProductController@deleteImage');
        Route::get('product-details/{id}' , 'ProductDetailController@productDetails')->name('product-details');
        Route::post('add-products-details/{id}' , 'ProductDetailController@addProductDetails')->name('add-products-details');

        // update product attr status
        Route::post('update-product-attribute-status' , 'ProductDetailController@updateProductAttrStatus')->name('update-product-attribute-status');
        Route::get('product-attribute/delete/{id}' , 'ProductDetailController@delete');

        // products family colors
        Route::resource('family-colors', FamilyColorController::class);
        Route::post('update-family-colors-status' , 'FamilyColorController@updateFamilyColorStatus')->name('update-family-colors-status');
        Route::get('family-colors/delete/{id}' , 'FamilyColorController@delete');

        //brands
        Route::resource('brands', BrandController::class);
        Route::post('update-brand-status' , 'BrandController@updateBrandStatus')->name('update-brand-status');
        Route::get('brand/delete/{id}' , 'BrandController@delete');
        Route::get('brand-image/delete/{id}' , 'BrandController@deleteImage');
        Route::get('brand-logo/delete/{id}' , 'BrandController@deleteLogo');


        //section management 
        Route::resource('section-management', SectionMgmtController::class);
        Route::controller(SectionMgmtController::class)->group(function(){
            Route::post('update-homepage-section-status' , 'updateHomepageSectionStatus')->name('update-homepage-section-status');
            Route::get('homepageSection/delete/{id}' , 'delete');
        });

        // banners
        Route::resource('banners', BannerController::class);
        Route::controller(BannerController::class)->group(function(){
            Route::post('update-banner-status' , 'updateBannerStatus')->name('update-banner-status');
            Route::get('banner/delete/{id}' , 'delete');
        });

        // Grid Cards
        Route::resource('grid-cards', GridCardsController::class);
        Route::controller(GridCardsController::class)->group(function(){
            Route::post('update-grid-status' , 'updateGridStatus')->name('update-grid-status');
            Route::get('grid/delete/{id}' , 'delete');
        });

        // Carousel Cards
        Route::resource('carousel', CarouselController::class);
        Route::controller(CarouselController::class)->group(function(){
            Route::post('update-carousel-status' , 'updateCarouselStatus')->name('update-carousel-status');
            Route::get('carousel/delete/{id}' , 'delete');
        });

        // Carousel item Cards
        Route::resource('carousel-items', CarouselItemController::class);
        Route::controller(CarouselItemController::class)->group(function(){
            Route::post('update-carouselitem-status' , 'updateCarouselitemStatus')->name('update-carouselitem-status');
            Route::get('carouselitem/delete/{id}' , 'delete');
        });


        
    });
});
