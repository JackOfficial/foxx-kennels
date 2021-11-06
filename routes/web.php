<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\dogbreedController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/account', [pagesController::class, 'account'])->name('account');

//---------------------------- SOCIALITE ROUTES --------------------------------
Route::get('redirect', [SocialController::class, 'redirect']);
Route::get('callback', [SocialController::class, 'callback']);

//---------------------------- ADMIN --------------------------------

Route::get('/admin', function(){
    return view('admin.index');
});

Route::get('/admin/datatable', function(){
    return view('admin.datatable');
});

Route::get('/admin/summernote', function(){
    return view('admin.summernote');
});

Route::resource('dogbreed', dogbreedController::class);
