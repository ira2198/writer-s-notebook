<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\users\authors\AuthorProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Блок доступный всем

Route::get('/', [MainController::class, 'index'])->name('main');



//  Авторизованные пользователи

Route::group(['prefix' => 'author'], static function () {
    Route::get('/profile', [AuthorProfileController::class, 'index'])->name('author.profile');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
