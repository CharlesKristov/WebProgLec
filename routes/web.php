<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderController;
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
    return view('cpdetailpage');
})->name('cp');

Route::get('/hackathon', function () {
    return view('hackathondetailpage');
})->name('hackathon');

Route::get('/store_register', [LeaderController::class, 'store']);
