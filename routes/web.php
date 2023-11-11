<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\v1\ContactController;
use App\Http\Controllers\v1\HomeController;
use App\Http\Controllers\v1\PostController;
use App\Http\Controllers\v1\ServiceController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('detail/{slug}', [HomeController::class,'show'])->name('detail');

Route::get('about', function (){ return view('about');})->name('about');
Route::get('music', function (){ return view('music');})->name('music');
Route::get('video', function (){ return view('video');})->name('video');
Route::get('service', [ServiceController::class,'index'])->name('service');
Route::get('blog', [PostController::class,'index'])->name('blog');
Route::get('contact', [ContactController::class,'index'])->name('contact'); 


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
