<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ItemController;
// Route::get('/', [AuthController::class, 'index']);
// Route::middleware('auth')->group(function () {
// Route::get('/', [AuthController::class, 'index']);
// });

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('auth')->prefix('mypage')->name('mypage.')->group(function () {
  Route::get('/profile', [MypageController::class, 'edit'])->name('profile.edit');
  Route::post('/profile/update', [MypageController::class, 'update'])->name('profile.update');
});

Route::middleware('auth')->group(function () {
  Route::get('/', [ItemController::class, 'index'])->name('item.index');
  Route::get('/item/{id}', [ItemController::class, 'show'])->name('item.show');
});