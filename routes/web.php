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


Route::middleware('guest')->group(function(){
    Route::get('/login', [PageController::class, 'LoginPage'])->name('LoginPage');
    Route::get('/register', [PageController::class, 'RegisterPage'])->name('RegisterPage');
    Route::post('/register', [AuthenthicationController::class, 'Register'])->name('Register');
    Route::post('/login', [AuthenthicationController::class, 'Login'])->name('Login');
    Route::get('/membership', [PageController::class, 'MembershipPage'])->name('MembershipPage');
});

Route::middleware('customer')->group(function(){
    Route::post('/logout', [AuthenthicationController::class, 'Logout'])->name('Logout');
    Route::get('/profile', [PageController::class, 'ProfilePage'])->name('ProfilePage');
    Route::get('/change-password', [PageController::class, 'ChangePasswordPage'])->name('ChangePasswordPage');
    Route::patch('/change-password', [ProfileController::class, 'ChangePassword'])->name('ChangePassword');
    Route::patch('/profile/update-profile', [ProfileController::class, 'UpdateProfile'])->name('UpdateProfile');
    Route::get('/profile/history', [PageController::class, 'HistoryPage'])->name('HistoryPage');
    Route::post('/change-picture', [ProfileController::class, 'ChangePicture'])->name('ChangePicture');
    Route::get('/forum-discussion', [PageController::class, 'ForumDiscussionPage'])->name('ForumDiscussionPage');
    Route::delete('/forum-discussion/delete/question/{QuestionID}', [ForumController::class, 'DeleteForumQuestion'])->name('DeleteForumQuestion');
    Route::post('/forum-discussion/post/question', [ForumController::class, 'AddForumQuestion'])->name('AddForumQuestion');
    Route::get('/forum-discussion/detail/{QuestionID}', [PageController::class, 'ForumDiscussionDetailPage'])->name('ForumDiscussionDetailPage');
    Route::post('/forum-discussion/post/answer/{QuestionID}', [ForumController::class, 'AddForumAnswer'])->name('AddForumAnswer');
    Route::delete('/forum-discussion/delete/answer/{AnswerID}', [ForumController::class, 'DeleteForumAnswer'])->name('DeleteForumAnswer');
    Route::get('/my-course-list', [PageController::class, 'MyCourseListPage'])->name('MyCourseListPage');
    Route::get('/student-report', [PageController::class, 'StudentReportPage'])->name('StudentReportPage');
    Route::get('/course-detail-payment/{CourseID}', [PageController::class, 'CourseDetailPaymentPage'])->name('CourseDetailPaymentPage');
});

Route::middleware('tutor')->group(function(){
    Route::get('/add-course', [PageController::class, 'AddCoursePage'])->name('AddCoursePage');
    Route::post('/add-course/post', [CourseController::class, 'AddCourse'])->name('AddCourse');
    Route::get('/student-rating/detail', [PageController::class, 'StudentRatingDetailPage'])->name('StudentRatingDetailPage');
});

Route::middleware('student')->group(function(){
    Route::get('/cart', [PageController::class, 'CartPage'])->name('CartPage');
    Route::post('/insert-cart/{CourseID}', [CourseController::class, 'InsertCart'])->name('InsertCart');
    Route::delete('/delete-cart/{CourseID}', [CourseController::class, 'DeleteCart'])->name('DeleteCart');
    Route::get('/rating-tutor/{TutorID}-{CourseID}', [PageController::class, 'RatingTutorPage'])->name('RatingTutorPage');
    Route::get('/payment/{CourseID}', [PageController::class, 'PaymentPage'])->name('PaymentPage');
    Route::post('/payment/{CourseID}', [CourseController::class, 'Payment'])->name('Payment');
    Route::get('/membership', [PageController::class, 'MembershipPage'])->name('MembershipPage');
});

Route::get('/subject/sub-topic/{SubjectName}', [PageController::class, 'SubTopicPage'])->name('SubTopicPage');
Route::get('/subject', [PageController::class, 'SubjectPage'])->name('SubjectPage');
Route::get('/course-detail/{CourseID}', [PageController::class, 'CourseDetailPage'])->name('CourseDetailPage');
Route::get('/tutor-list', [PageController::class, 'TutorListPage'])->name('TutorListPage');
Route::get('/tutor-detail/{TutorID}', [PageController::class, 'TutorDetailPage'])->name('TutorDetailPage');
Route::get('/about-us', [PageController::class, 'AboutUsPage'])->name('AboutUsPage');
Route::get('/leaderboard', [PageController::class, 'LeaderboardPage'])->name('LeaderboardPage');
Route::get('/faq', [PageController::class, 'FAQPage'])->name('FAQPage');
Route::get('/job-vacancy', [PageController::class, 'JobVacancyPage'])->name('JobVacancyPage');