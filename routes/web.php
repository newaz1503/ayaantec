<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CeoController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Front\FrontendController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/pass', function() {
    return bcrypt('123456');
});
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

// ========================
// Route::get('/homee', [FrontendController::class, 'homee'])->name('homee');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
// ========================




Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/comming-soon', [FrontendController::class, 'comming_soon'])->name('comming.soon');
Route::get('/single_news/{id}', [FrontendController::class, 'single_news'])->name('single_news');
Route::get('/single_product/{id}', [FrontendController::class, 'single_product'])->name('single_product');
Route::get('/single_service/{id}', [FrontendController::class, 'single_service'])->name('single_service');
Route::get('/term', [FrontendController::class, 'term'])->name('term');
Route::get('/privecy', [FrontendController::class, 'privecy'])->name('privecy');
Route::get('/refound', [FrontendController::class, 'refound'])->name('refound');
Route::post('/subscribe', [FrontendController::class, 'subscription'])->name('subscription');
Route::post('/contact-mail', [FrontendController::class, 'contact_mail'])->name('contact.mail');

Route::group(['prefix' => 'admin/' ,'as'=>'admin.'] , function () {
    Route::match(['get', 'post'], '/',[AdminController::class ,'login'])->name('login');

    Route::group(['middleware'=>'admin'], function () {

        Route::get('dashboard',[AdminController::class ,'index'])->name('dashboard');
        Route::get('/logout',[AdminController::class ,'logout'])->name('logout');

        Route::middleware(['admin'])->group(function () {
        Route::get('/all-users',[AdminController::class ,'all_users'])->name('all');
        Route::match(['get', 'post'], '/add-user',[AdminController::class ,'add_user']);
        Route::match(['get', 'post'], '/edit-user/{id}',[AdminController::class ,'edit_user']);
        Route::post('update-user-status',[AdminController::class ,'updateUserStatus']);
        Route::any('/print',[AdminController::class ,'printdata'])->name('print');
        Route::any('/money_receipt',[AdminController::class ,'money_receipt'])->name('money_receipt');
        Route::get('/delete-user/{id}',[AdminController::class ,'delete_user']);
        Route::match(['get', 'post'], '/settings/{id}',[AdminController::class ,'settings']);
        });

        Route::group(['prefix' => 'banner/' ,'as'=>'banner.'] , function () {
            Route::get('index',[BannerController::class, 'index'])->name('index');
            Route::get('create',[BannerController::class, 'create'])->name('create');
            Route::post('store',[BannerController::class, 'store'])->name('store');
            Route::get('edit/{id}',[BannerController::class, 'edit'])->name('edit');
            Route::get('delete/{id}',[BannerController::class, 'delete'])->name('delete');
            Route::post('update/{id}',[BannerController::class, 'update'])->name('update');
        });


        // ceo

        Route::get('/ceo', [CeoController::class, 'ceo'])->name('ceo');
        Route::post('/ceostore', [CeoController::class, 'store'])->name('ceostore');
        // Route::get('edit/{id}',[CeoController::class, 'edit'])->name('edit');
        Route::get('delete/{id}',[CeoController::class, 'ceodelete'])->name('ceodelete');






        Route::group(['prefix' => 'product/' ,'as'=>'banner.'] , function () {
            Route::get('index',[ProductController::class, 'index'])->name('index');
            Route::match(['get', 'post'], '/create',[ProductController::class ,'create']);
            Route::post('store',[ProductController::class, 'store'])->name('store');
            Route::get('edit/{id}',[ProductController::class, 'edit'])->name('edit');
            Route::get('delete/{id}',[ProductController::class, 'delete'])->name('delete');
            Route::post('update/{id}',[ProductController::class, 'update'])->name('update');
            Route::post('update-product-status',[ProductController::class, 'updateProductStatus'])->name('updateProductStatus');
        });
        // Route::group(['prefix' => 'cms/' ,'as'=>'cms.'] , function () {
        //     Route::get('index',[CmsController::class, 'index'])->name('index');
        //     Route::match(['get', 'post'], '/add',[CmsController::class ,'create']);
        //     Route::match(['get', 'post'], '/edit/{id}',[CmsController::class ,'edit']);
        //     Route::get('delete/{id}',[CmsController::class, 'delete'])->name('delete');
        //     Route::post('update-cms-status',[CmsController::class, 'updateCmsStatus'])->name('updateCmsStatus');
        // });
        Route::group(['prefix' => 'services/' ,'as'=>'service.'] , function () {
            Route::get('index',[ServiceController::class, 'index'])->name('index');
            Route::match(['get', 'post'], '/create',[ServiceController::class ,'create']);
            Route::match(['get', 'post'], '/edit/{id}',[ServiceController::class ,'edit']);
            Route::get('delete/{id}',[ServiceController::class, 'delete'])->name('delete');
            Route::post('update-service-status',[ServiceController::class, 'updateServiceStatus'])->name('updateServiceStatus');
        });
        // Route::group(['prefix' => 'social/' ,'as'=>'social.'] , function () {
        //     Route::get('index',[SocialController::class, 'index'])->name('index');
        //     Route::match(['get', 'post'], '/add',[SocialController::class ,'add']);
        //     Route::match(['get', 'post'], '/edit/{id}',[SocialController::class ,'edit']);
        //     Route::get('delete/{id}',[SocialController::class, 'delete'])->name('delete');
        //     Route::post('update-social-status',[SocialController::class, 'updateSocialStatus'])->name('updateSocialStatus');
        // });
        // Route::group(['prefix' => 'web/' ,'as'=>'social.'] , function () {
        //     Route::get('index',[WebController::class, 'index'])->name('index');
        //     Route::match(['get', 'post'], '/add',[WebController::class ,'add']);
        //     Route::match(['get', 'post'], '/edit/{id}',[WebController::class ,'edit']);
        //     Route::get('delete/{id}',[WebController::class, 'delete'])->name('delete');
        //     Route::post('update-web-status',[WebController::class, 'updateWebStatus'])->name('updateWebStatus');
        // });
        Route::group(['prefix' => 'about/' ,'as'=>'service.'] , function () {
            Route::get('index',[AboutController::class, 'index'])->name('index');
            Route::match(['get', 'post'], '/edit/{id}',[AboutController::class ,'edit']);
        });
        Route::group(['prefix' => 'news/' ,'as'=>'news.'] , function () {
            Route::get('index',[NewsController::class, 'index'])->name('index');
            Route::match(['get', 'post'], '/add',[NewsController::class ,'add']);
            Route::match(['get', 'post'], '/edit/{id}',[NewsController::class ,'edit']);
            Route::get('delete/{id}',[NewsController::class, 'delete'])->name('delete');
            Route::post('update-news-status',[NewsController::class, 'updateNewsStatus'])->name('updateNewsStatus');
        });
        // Route::group(['prefix' => 'blog/' ,'as'=>'blog.'] , function () {
        //     Route::get('index',[BlogController::class, 'index'])->name('index');
        //     Route::match(['get', 'post'], '/add',[BlogController::class ,'add']);
        //     Route::match(['get', 'post'], '/edit/{id}',[BlogController::class ,'edit']);
        //     Route::get('delete/{id}',[BlogController::class, 'delete'])->name('delete');
        //     Route::post('update-blog-status',[BlogController::class, 'updateBlogStatus'])->name('updateBlogStatus');
        // });
        Route::group(['prefix' => 'subs/' ,'as'=>'subs.'] , function () {
            Route::get('index',[FrontendController::class, 'index'])->name('index');
            Route::get('view/{id}',[FrontendController::class, 'view'])->name('view');
            Route::get('delete/{id}',[FrontendController::class, 'delete'])->name('delete');
        });

    });
});




Route::prefix('menubar')->group(function(){
	Route::get('view/menu',[AdminController::class, 'view'])->name('view_menu');
	Route::get('add/menu',[AdminController::class, 'add'])->name('add_menu');
	Route::post('store/menu',[AdminController::class, 'store'])->name('store_menu');
	Route::get('edit/menu/{id}',[AdminController::class, 'edit'])->name('edit_menu');
	Route::post('update/menu/{id}',[AdminController::class, 'update'])->name('update_menu');
	Route::get('delete/menu/{id}',[AdminController::class, 'delete'])->name('delete_menu');
});





