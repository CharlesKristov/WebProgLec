<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('dashboard', [DashboardController::class, 'CheckSession'])->name('dashboard');;


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/cp', function () {
    return view('detail/cp');
})->name('cp');

Route::get('/hackathon', function () {
    return view('detail/hackathon');
})->name('hackathon');

Route::get('/ideation', function () {
    return view('detail/ideation');
})->name('ideation');

Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/capturetheflag', function () {
    return view('detail/ctf');
})->name('capturetheflag');


Route::get('/store_register', [RegisterController::class, 'store']);
Route::post('/user_login', [LoginController::class, 'login']);
Route::get('/user_logout', [LoginController::class, 'logout']);

Route::get('/competition_store', [LeaderController::class, 'update']);
Route::post('/member_store', [MemberController::class, 'store']);


Route::post('/payment', [PaymentController::class, 'uploadreceipt'])->name('payment.uploadreceipt');
