<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Construction\ConsTrucTionController;
use App\Http\Controllers\SliderShow\SlideShowController;
use App\Http\Controllers\CustomerReview\CustomerReviewController;
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
    return view('frontend.index');
});




Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


//admin all router
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
    
});

//ConsTrucTionController
Route::controller(ConsTrucTionController::class)->group(function(){
    Route::get('/construction', 'CategoryConsTruction')->name('construction.route');
    Route::post('/update/construction', 'UpdateConstruction')->name('update.construction');
});


//SlideShowController
Route::controller(SlideShowController::class)->group(function(){
    Route::get('/category/slideshow', 'SliderShow')->name('slideshow.route');
    Route::post('/store/slideshow', 'StoreSliderShow')->name('slideshow.store');
    Route::get('/all/slideshow', 'SliderShowAll')->name('slideshow.route.all');
    Route::get('/Edit/slideshow/{id}', 'SliderShowEdit')->name('slideshow.route.edit');
    Route::post('/update/slideshow', 'UpdateSliderShow')->name('slideshow.route.update');
    Route::get('/Delete/slideshow/{id}', 'SliderShowDelete')->name('slideshow.route.delete');
});

//CustomerReviewController
Route::controller(CustomerReviewController::class)->group(function(){

    Route::get('/customerreview', 'CustomerReview')->name('customerreview.route');
    Route::post('/update/customerreview', 'UpdateCustomerReview')->name('route.CustomerReview.update');
    Route::get('/all/customerreview', 'CustomerReviewAll')->name('route.CustomerReview.all');
    Route::get('/edit/customerreview/{id}', 'CustomerReviewEdit')->name('CustomerReview.route.edit');
    Route::post('/editupdate/customerreview', 'UpdateEditCustomerReview')->name('CustomerReview.route.updateedit');
    Route::get('/Delete/customerreview/{id}', 'CustomerReviewDelete')->name('CustomerReview.route.delete');
   
});


require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


