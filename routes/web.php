<?php

use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialLinkController;
use App\Models\Slider;
use App\Models\SocialLink;
use Illuminate\Http\Request;
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
    return view('front.index', compact('sliders'));
});

Route::post('/callback', function (Request $request){
    dd($request->all());
})->name('callback.store');

Route::get('admin', function () {
    return view('back.home.index');
});


// Backend
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/slider', [SliderController::class, "index"])->name('slider.index');
    Route::get('/slider/create', [SliderController::class, "create"])->name('create');
    Route::post('/slider/upload', [SliderController::class, "store"])->name('slider.store');
});
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
