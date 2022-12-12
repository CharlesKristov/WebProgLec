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
    return view('detail/cp');
})->name('cp');
 
Route::get('/hackathon', function () {
    return view('detail/hackathon');
})->name('hackathon');

Route::get('/ideation', function () {
    return view('detail/ideation');
})->name('ideation');

Route::get('/capturetheflag', function () {
    return view('detail/capture');
})->name('capturetheflag');


Route::get('/store_register', [LeaderController::class, 'store']);
