<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\SliderController;
use App\Models\About;
use App\Models\Slider;
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
    $sliders = Slider::all();
    $abouts = About::all();
    return view('front.index', compact('sliders', 'abouts'));
});
Route::get('admin', function () {
    return view('back.home.index');
});


// Backend
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('/slider', SliderController::class);
    Route::resource('/about', AboutController::class);
});
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
