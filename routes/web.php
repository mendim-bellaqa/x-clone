<?php


use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TweetsController;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');




Route::get('/tweets/create', [TweetsController::class, 'create'])->name('tweets.create');
Route::post('/tweets', [TweetsController::class, 'store'])->name('tweets.store');
Route::get('/tweets', [TweetsController::class, 'index'])->name('tweets.index');
Route::post('/tweets/{tweet}/like', [LikeController::class, 'like'])->name('tweets.like');
Route::delete('/tweets/{tweet}/unlike', [LikeController::class, 'unlike'])->name('tweets.unlike');
