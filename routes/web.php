<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\leader;



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

//Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'viewAboutUs'])->name('aboutus');
Route::get('/competition/cp', [HomeController::class, 'viewCp'])->name('cp');
Route::get('/competition/hackathon', [HomeController::class, 'viewHackathon'])->name('hackathon');
Route::get('/competition/ideation', [HomeController::class, 'viewIdeation'])->name('ideation');
Route::get('/competition/ctf', [HomeController::class, 'viewCtf'])->name('capturetheflag');

//User Dashboard Route
Route::get('dashboard', [DashboardController::class, 'CheckSession'])->name('dashboard');
Route::get('dashboard/payment', [DashboardController::class, 'viewPayment'])->name('payment');
Route::post('dashboard/payment/upload', [PaymentController::class, 'uploadreceipt'])->name('payment.uploadreceipt');
Route::get('competition_store', [LeaderController::class, 'update']);
Route::get('dashboard/timeline', [DashboardController::class, 'viewTimeline'])->name('timeline');
Route::post('member_store', [MemberController::class, 'store']);

//Login and Logout Route
Route::get('login', [LoginController::class, 'index'])->name('loginPage');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//Register Route
Route::get('register', [RegisterController::class, 'index'])->name('registerPage');
Route::post('store_register', [RegisterController::class, 'store'])->name('register');

// admin route
Route::get('admin', [DashboardAdminController::class, 'index'])->name('admin');

