<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\leader;
use Whoops\Run;

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

//General Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'viewAboutUs'])->name('aboutus');
Route::get('/competition/cp', [HomeController::class, 'viewCp'])->name('cp');
Route::get('/competition/hackathon', [HomeController::class, 'viewHackathon'])->name('hackathon');
Route::get('/competition/ideation', [HomeController::class, 'viewIdeation'])->name('ideation');
Route::get('/competition/ctf', [HomeController::class, 'viewCtf'])->name('capturetheflag');

//User Route
Route::group(['middleware'=>'user'], function() {
    Route::get('dashboard', [DashboardController::class, 'CheckSession'])->name('dashboard');
    Route::get('dashboard/payment', [DashboardController::class, 'viewPayment'])->name('payment');
    Route::post('dashboard/payment/upload', [PaymentController::class, 'uploadreceipt'])->name('payment.uploadreceipt');
    Route::get('competition_store', [LeaderController::class, 'update']);
    Route::get('dashboard/timeline', [DashboardController::class, 'viewTimeline'])->name('timeline');
    Route::post('member_store', [MemberController::class, 'store']);
});

//Guest Route
Route::group(['middleware'=>'guest'], function() {
    Route::get('login', [LoginController::class, 'index'])->name('loginPage');
    Route::get('register', [RegisterController::class, 'index'])->name('registerPage');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('store_register', [RegisterController::class, 'store'])->name('register');
});

// Admin routes
Route::group(['middleware'=>'admin'], function() {
    Route::get('admin/verify', [DashboardAdminController::class, 'verify'])->name('verify-payment');
    Route::get('admin/manage', [DashboardAdminController::class, 'manage'])->name('manage-team');
    Route::get('admin/verify/{id}', [AdminController::class, 'verifyPayment'])->name('verify');
    Route::get('admin/update/{id}', [AdminController::class, 'update'])->name('view-update');
    Route::get('admin/destroy/{id}', [AdminController::class, 'destroy'])->name('destroy-member');
    Route::patch('admin/updatemember/{id}', [AdminController::class, 'editMember'])->name('update-member');
});
// Auth routes
Route::group(['middleware'=>'auth'], function() {
    Route::get('forgot', [ForgotPasswordController::class, 'index'])->name('forgotPage');
    Route::post('forgot', [ForgotPasswordController::class, 'sendlink'])->name('forgot');
    Route::get('reset/{token}', [ResetPasswordController::class, 'index'])->name('resetPage');
    Route::post('reset', [ResetPasswordController::class, 'resetpass'])->name('reset');
    Route::get('/updateProfile', [DashboardController::class, 'viewUpdateLeader'])->name('updateLeader');
    Route::post('/updateProfile', [LeaderController::class, 'updateProfile'])->name('update');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});


