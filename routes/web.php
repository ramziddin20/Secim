<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\InformationWorkController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\OurSuperiorityController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TelegramController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\YoutubeController;
use App\Models\About;
use App\Models\Facebook;
use App\Models\InformationWork;
use App\Models\Instagram;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Telegram;
use App\Models\University;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your informationwork. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $seos = Seo::all();
    $sliders = Slider::all();
    $instagram = Instagram::all();
    $telegram = Telegram::all();
    $youtube = Youtube::all();
    $facebook = Facebook::all();
    $universities = University::all();
    $abouts = About::all();
    $service = Service::all();
    $informationWork = InformationWork::all();
    return view('front.index', compact('sliders', 'abouts', 'service', 'informationWork', 'universities', 'telegram', 'youtube', 'instagram', 'facebook', 'seos'));
})->name('front.index');
Route::post('/contactsend', [ContactController::class, 'store'])->name('contact.store');
Route::get('admin', function () {
    return view('back.home.index');
});


// Backend
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('/slider', SliderController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/advantages', OurSuperiorityController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/informationWork', InformationWorkController::class);
    Route::resource('/university', UniversityController::class);
    Route::resource('/facebook', FacebookController::class);
    Route::resource('/instagram', InstagramController::class);
    Route::resource('/telegram', TelegramController::class);
    Route::resource('/youtube', YoutubeController::class);
    Route::resource('/seo', SeoController::class);
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
});
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
