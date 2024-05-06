<?php

use App\Http\Controllers\AuthenthicationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Psy\CodeCleaner\FunctionContextPass;

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

Route::get('/', [PageController::class, 'IndexPage'])->name('IndexPage');

Route::get('/cart', [PageController::class, 'CartPage'])->name('CartPage');

Route::middleware('guest')->group(function(){
    Route::get('/login', [PageController::class, 'LoginPage'])->name('LoginPage');
    Route::get('/register', [PageController::class, 'RegisterPage'])->name('RegisterPage');
    
    Route::post('/register', [AuthenthicationController::class, 'Register'])->name('Register');
    Route::post('/login', [AuthenthicationController::class, 'Login'])->name('Login');
});

Route::middleware('customer')->group(function(){
    Route::post('/logout', [AuthenthicationController::class, 'Logout'])->name('Logout');
    Route::get('/profile', [PageController::class, 'ProfilePage'])->name('ProfilePage');
    Route::get('/change-password', [PageController::class, 'ChangePasswordPage'])->name('ChangePasswordPage');
    Route::patch('/change-password', [ProfileController::class, 'ChangePassword'])->name('ChangePassword');
    Route::patch('/profile/update-profile', [ProfileController::class, 'UpdateProfile'])->name('UpdateProfile');
    Route::post('/change-picture', [ProfileController::class, 'ChangePicture'])->name('ChangePicture');
    Route::get('/forum-discussion', [PageController::class, 'ForumDiscussionPage'])->name('ForumDiscussionPage');
    Route::post('/forum-discussion/post', [ForumController::class, 'AddForumQuestion'])->name('AddForumQuestion');
});

Route::middleware('tutor')->group(function(){
    Route::get('/add-course', [PageController::class, 'AddCoursePage'])->name('AddCoursePage');
    Route::post('/add-course/post', [CourseController::class, 'AddCourse'])->name('AddCourse');
    Route::get('/tutor-course-list/{TutorID}', [PageController::class, 'TutorCourseListPage'])->name('TutorCourseListPage');
});

Route::middleware('student')->group(function(){
    Route::post('/insert-cart/{CourseID}', [CourseController::class, 'InsertCart'])->name('InsertCart');
    Route::delete('/delete-cart/{CourseID}', [CourseController::class, 'DeleteCart'])->name('DeleteCart');
    Route::get('/subject/sub-topic', [PageController::class, 'SubTopicPage'])->name('SubTopicPage');
    Route::get('/subject', [PageController::class, 'SubjectPage'])->name('SubjectPage');
    Route::get('/tutor-list', [PageController::class, 'TutorListPage'])->name('TutorListPage');
    Route::get('/tutor-detail/{TutorID}', [PageController::class, 'TutorDetailPage'])->name('TutorDetailPage');
    Route::get('/rating-tutor/{TutorID}', [PageController::class, 'RatingTutor'])->name('RatingTutor');
});

Route::get('/about-us', [PageController::class, 'AboutUsPage'])->name('AboutUsPage');

Route::get('/student-rating/detail', [PageController::class, 'StudentRatingDetailPage'])->name('StudentRatingDetailPage');

Route::get('/payment', [PageController::class, 'PaymentPage'])->name('PaymentPage');

Route::get('/membership', [PageController::class, 'MembershipPage'])->name('MembershipPage');

Route::get('/student-report', [PageController::class, 'StudentReportPage'])->name('StudentReportPage');