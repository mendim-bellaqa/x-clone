<?php
use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group that
| contains the "web" middleware group. Now create something great!
|
*/

// Use the default authentication routes provided by Auth::routes()
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    // Protected routes here

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/tweets/create', [TweetsController::class, 'create'])->name('tweets.create');
    Route::post('/tweets', [TweetsController::class, 'store'])->name('tweets.store');
    Route::get('/tweets.edit', [TweetsController::class, 'edit'])->name('tweets.edit');
    Route::get('/tweets.destroy', [TweetsController::class, 'destroy'])->name('tweets.destroy');
    Route::get('/tweets', [TweetsController::class, 'index'])->name('tweets.index');
    Route::post('/tweets/{tweet}/like', [LikeController::class, 'like'])->name('tweets.like');
    Route::delete('/tweets/{tweet}/unlike', [LikeController::class, 'unlike'])->name('tweets.unlike');
     Route::post('/comments/{tweet}', [CommentController::class, 'store'])->name('comments.store');

});

Route::get('/', function () {
    return view('welcome');
});
// Define a named route for the base route
Route::get('/', [HomeController::class, 'index'])->name('base');

