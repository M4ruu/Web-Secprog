<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\fileuploadController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/login', function () {
//     return view('login');
// });


// Route::get('/home', function () {
//     return view('home');
// });


Route::get('/test_register', function () {
    return view('/test_register');
});

Route::get('/fileupload', function () {
    return view('/fileupload');
});

Route::get('/', function () {
    return view('/dashboard');
});

//routetouploadpage
Route::get('/upload', [fileuploadController::class, 'index']);


//routefileupload
Route::get('file-upload', [fileuploadController::class, 'index']);
Route::post('file-upload', [fileuploadController::class, 'upload'])->name('file.upload');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');


Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');