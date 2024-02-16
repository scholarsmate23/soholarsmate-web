<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\UserController;
use  App\Http\Controllers\CourseContrpoller;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});


Route::controller(UserController::class)->group(function(){
    Route::get('/about', 'viewAbout')->name('about');
    Route::get('/contact', 'viewContact')->name('contact');
    Route::get('/course', 'viewCourse')->name('course');
    Route::get('/scholarships', 'viewScholarship')->name('scholarships');
    Route::get('/events', 'viewEvents')->name('events');
    Route::get('/result', 'viewResult')->name('result');
    Route::get('/career', 'viewCareer')->name('career');
    Route::get('/gallery', 'viewGallery')->name('gallery');
});

Route::controller(CourseContrpoller::class)->group(function(){
    Route::get('/pre-foundation', 'viewFoundation')->name('foundation');
    Route::get('/akalan', 'viewAaklan')->name('akalan');
    Route::get('/tad-cbse', 'viewTadCbse')->name('tad.cbse');
    Route::get('/tad-icse', 'viewTadIcse')->name('tad.icse');
});
