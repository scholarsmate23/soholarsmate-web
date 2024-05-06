<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\UserController;
use  App\Http\Controllers\CourseContrpoller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
});


Route::controller(UserController::class)->group(function(){
    Route::get('/', 'viewWelcome')->name('home');
    Route::get('/about', 'viewAbout')->name('about');
    Route::get('/contact', 'viewContact')->name('contact');
    Route::get('/course', 'viewCourse')->name('course');
    Route::get('/scholarships', 'viewScholarship')->name('scholarships');
    Route::get('/events', 'viewEvents')->name('events');
    Route::get('/result', 'viewResult')->name('result');
    Route::get('/career', 'viewCareer')->name('career');
    Route::get('/gallery', 'viewGallery')->name('gallery');
    Route::get('/student-zone', 'viewStudentZone')->name('student.zone');
    Route::get('/engineering', 'viewEngineering')->name('engineering');
    Route::get('/syllabus', 'viewSyllabus')->name('syllabus');
    Route::get('/medical', 'viewMedical')->name('medical');
    Route::get('/pre-foundation', 'viewFoundation')->name('pre.foundation');
    Route::get('/boards', 'viewBoards')->name('boards');
    Route::get('/download/pdf/{id}', 'downloadPdf')->name('pdf.download');
    Route::get('/pdf-viewer/{id}', 'showViewer')->name('pdf.viewer');
    Route::get('/calender', 'viewCalender')->name('calender');
    Route::get('/apply-form', 'viewApplication')->name('apply.form');
    Route::POST('/submitData', 'submitData')->name('submitData');
    Route::post('/save-contact',  'saveContact')->name('save.contact');
    Route::get('/discription/{id}', 'discriptionViewer')->name('discription.viewer');
    Route::get('/news-details/{id}', 'newsViewer')->name('news.details');

});

Route::controller(CourseContrpoller::class)->group(function(){
    Route::get('/akalan', 'viewAaklan')->name('akalan');
    Route::get('/tad-cbse', 'viewTadCbse')->name('tad.cbse');
    Route::get('/tad-icse', 'viewTadIcse')->name('tad.icse');
    Route::get('/prayash-jee', 'viewPrayashJee')->name('prayash.jee');
    Route::get('/prayash-neet', 'viewPrayashNeet')->name('prayash.neet');
    Route::get('/udgosh-jee', 'viewUdgoshJee')->name('udgosh.jee');
    Route::get('/safal-jee', 'viewSafalJee')->name('safal.jee');
    Route::get('/udgosh-neet', 'viewUdgoshNeet')->name('udgosh.neet');
    Route::get('/safal-neet', 'viewSafalNeet')->name('safal.neet');
    Route::get('/eklavya-tenth', 'viewEklavyaTenth')->name('eklavya.tenth');
    Route::get('/eklavya-ninth', 'viewEklavyaNinth')->name('eklavya.ninth');
    Route::get('/eklavya-eighth', 'viewEklavyaEight')->name('eklavya.eighth');
    Route::get('/tarun-math', 'viewTarunMath')->name('tarun.math');
    Route::get('/tarun-bio', 'viewTarunBio')->name('tarun.bio');
});

Route::post('/sent-mail', [MailController::class, 'sentMail']);


Route::middleware('auth')->group(function () {
    Route::controller(AdminController::class)->group(function() {
        Route::get('/manage-course', 'manageCourse')->name('manage.course');
        Route::get('/manage-contact', 'manageContacts')->name('manage.contact');
        Route::get('/manage-applicants', 'manageApplicants')->name('manage.applicants');
        Route::get('/manage-results', 'manageResults')->name('manage.results');
        Route::get('/manage-syllabus', 'manageSyllabus')->name('manage.syllabus');
        Route::get('/manage-career', 'manageCareer')->name('manage.career');
        Route::post('/upload-pdf', 'addSyllabus')->name('add.syllabus');
        Route::get('/manage-news', 'manageNews')->name('manage.news');
        Route::post('/add-news', 'addNews')->name('add.news');
        Route::post('/add-result', 'addResult')->name('add.result');
        Route::post('/add-career', 'addCareer')->name('add.career');
        Route::get('/job-applicants', 'manageJobApplicants')->name('job.applicants');
        Route::post('/delete-syllabus', 'deleteSyllabus')->name('delete.syllabus');
        Route::post('/delete-news', 'deleteNews')->name('delete.news');
        Route::post('/delete-career', 'deletCareer')->name('delete.career');
        Route::post('/delete-result', 'deletResult')->name('delete.result');

    });
    Route::controller(LoginRegisterController::class)->group(function() {
        Route::post('/logout', 'logout')->name('logout');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/register', 'register')->name('register');
        Route::post('/store', 'store')->name('store');
    });

    Route::controller(ImageController::class)->group(function() {
        Route::post('/image/upload', 'uploadImage')->name('image.upload');
        Route::post('/image/edit', 'editImage')->name('image.edit');
        Route::post('/image/delete', 'deleteImage')->name('image.delete');
        Route::get('/manage-gallery', 'manageGallery')->name('manage.gallery');
        Route::get('/manage-slider', 'manageSlider')->name('manage.slider');
        Route::post('/add/slider', 'addSliderImage')->name('add.slider');
        Route::post('/delete/slider', 'deleteSliderImage')->name('delete.slider');

    });

});
