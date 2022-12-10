<?php

use App\Http\Controllers\MenuuserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\fileuploadController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditprofileController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Gambar;
use GuzzleHttp\Promise\Create;

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

//routetest
Route::get('/test', function () {
    return view('test');
});

//routeeditprofile
// Route::get('/editprofile', function () {
//     return view('editprofile');
// });

Route::get('/editprofile', [EditprofileController::class, 'index']);

//routemenuuser
Route::get('/menuuser', function () {
    return view('/menuuser');
});

Route::get('/register', function () {
    return view('/register');
});

Route::get('/fileupload', function () {
    return view('/fileupload');
});

Route::get('/', function () {
    return view('/dashboard');
});

// Route::get('/editprofile', function () {
//     return view('/editprofile');
// });

//routetouploadpage
Route::get('/upload', [fileuploadController::class, 'index']);

// Route::get('/menuuser',[MenuuserController::class, 'index']);


//routefileupload
Route::get('file-upload', [fileuploadController::class, 'index']);
Route::post('file-upload', [fileuploadController::class, 'upload'])->name('file.upload');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');


// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//routemenuuser
Route::get('menuuser', [HomeController::class, 'index'])->name('menuuser')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//routecreate
Route::get('/create', [CreateController::class, 'index']);
Route::post('/create', [CreateController::class, 'validateTitle']);



Route::get('/editketerangan/{id}', [EditprofileController::class, 'edit']);

// Route::post('/editketerangan/{id}', function($id){
//     $gambar = Gambar::find($id);
//     $gambar->keterangan = request('keterangan');
//     $gambar->save();
//     return redirect('/editprofile');
// });

Route::post('/editketerangan/{id}',[EditprofileController::class, 'update']);

Route::get('/deleteitem/{id}', function($id){
    Gambar::find($id)->delete();
    return redirect('/editprofile');
});