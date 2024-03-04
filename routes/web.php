<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project\ProjectController;

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
});

Route::get('/about', [ProjectController::class, 'Index']);




Route::get('/construction', function () {
    return view('construction');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/modelhouse', function () {
    return view('modelhouse');
});

Route::get('/estimate', function () {
    return view('estimate');
});

Route::get('/recruitment', function () {
    return view('recruitment');
});

Route::get('/contact', function () {
    return view('contact');
});