<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Construction\ConsTrucTionController;
use App\Http\Controllers\SliderShow\SlideShowController;
use App\Http\Controllers\CustomerReview\CustomerReviewController;
use App\Http\Controllers\Partner\PartnerController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;

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
    Route::get('/abc/construction', 'CategoryConsTruction')->name('construction.route');
    Route::post('/update/construction', 'UpdateConstruction')->name('update.construction');
});


//SlideShowController
Route::controller(SlideShowController::class)->group(function(){
    Route::get('/slideshow', 'SliderShow')->name('slideshow.route');
    Route::post('/store/slideshow', 'StoreSliderShow')->name('slideshow.store');
    Route::get('/all/slideshow', 'SliderShowAll')->name('slideshow.route.all');
    Route::get('/Edit/slideshow/{id}', 'SliderShowEdit')->name('slideshow.route.edit');
    Route::post('/update/slideshow', 'UpdateSliderShow')->name('slideshow.route.update');
    Route::get('/Delete/slideshow/{id}', 'SliderShowDelete')->name('slideshow.route.delete');
});

//CustomerReviewController
Route::controller(CustomerReviewController::class)->group(function(){

    Route::get('/customerreview', 'CustomerReview')->name('customerreview.route');
    Route::post('/add/customerreview', 'UpdateCustomerReview')->name('route.CustomerReview.update');
    Route::get('/all/customerreview', 'CustomerReviewAll')->name('route.CustomerReview.all');
    Route::get('/edit/customerreview/{id}', 'CustomerReviewEdit')->name('CustomerReview.route.edit');
    Route::post('/update/customerreview', 'UpdateEditCustomerReview')->name('CustomerReview.route.updateedit');
    Route::get('/Delete/customerreview/{id}', 'CustomerReviewDelete')->name('CustomerReview.route.delete');
   
});


//PartnerController
Route::controller(PartnerController::class)->group(function(){
    Route::get('/partner', 'Partner')->name('partner.route');
    Route::post('/add/partner', 'PartnerAddNew')->name('partner.route.add');
    Route::get('/all/partner', 'PartnerAll')->name('partner.route.all');
    Route::get('/edit/partner/{id}', 'PartnerEdit')->name('partner.route.edit');
    Route::post('/update/partner', 'PartnerUpdate')->name('partner.route.update');
    Route::get('/delete/partner/{id}', 'PartnerDelete')->name('partner.route.delete');
});


//AboutController
Route::controller(AboutController::class)->group(function(){
    Route::get('/about', 'AboutPage')->name('about.page');
    Route::post('/add/about', 'AboutPageAdd')->name('about.page.add');
    Route::get('/all/about', 'AboutPageAll')->name('about.page.all');
    Route::get('/edit/about/{id}', 'AboutPageEdit')->name('about.page.edit');
    Route::post('/update/about', 'AboutPageUpdate')->name('about.page.update');
    Route::get('/delete/about/{id}', 'AboutPageDelete')->name('about.page.delete');
    Route::get('/company', 'AboutCompanyPage')->name('about.page.company');
});


//categoryController
Route::controller(CategoryController::class)->group(function(){
    Route::get('/category', 'CategoryPage')->name('category.page');
    Route::get('/add/category', 'CategoryPageAdd')->name('category.page.add');
    Route::post('/store/category', 'CategoryPageUpdate')->name('category.page.store');
    Route::get('/all/category', 'CategoryPageAll')->name('category.page.all');
    Route::get('/edit/category/{id}', 'CategoryPageEdit')->name('category.page.edit');
    Route::post('/update/category', 'CategoryPageUpdateEdit')->name('category.page.update');
    Route::get('/delete/category/{id}', 'CategoryPageDelete')->name('category.page.delete');
});

Route::controller(SubCategoryController::class)->group(function(){
    Route::get('/subcategory', 'SubCategoryPage')->name('subcategory.page');
    Route::get('/add/subcategory', 'SubCategoryPageAdd')->name('subcategory.page.add');
    Route::post('/store/subcategory', 'SubCategoryPageUpdate')->name('subcategory.page.store');
    Route::get('/all/subcategory', 'SubCategoryPageAll')->name('subcategory.page.all');
    Route::get('/edit/subcategory/{id}', 'SubCategoryPageEdit')->name('subcategory.page.edit');
    Route::post('/update/subcategory', 'SubCategoryPageUpdateEdit')->name('subcategory.page.update');
    Route::get('/delete/subcategory/{id}', 'SubCategoryPageDelete')->name('subcategory.page.delete');
});




require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


