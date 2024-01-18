<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\v1\ContactController;
use App\Http\Controllers\v1\HomeController;
use App\Http\Controllers\v1\PostController;
use App\Http\Controllers\v1\ServiceController;
use App\Http\Controllers\v1\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MusicController;
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
// Route::get('music', function (){ return view('music');})->name('music');
Route::get('/music',[MusicController::class,'getInfo'])->name('music');
Route::get('musics',[MusicController::class,'manyAlbum'])->name('musics');
Route::get('video', [VideoController::class,'List'])->name('video');
Route::get('service', [ServiceController::class,'index'])->name('service');
Route::get('blog', [PostController::class,'index'])->name('blog');
Route::get('contact', [ContactController::class,'index'])->name('contact'); 


Route::get('/dashboard',[UserController::class,'connect'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('get-artiste', [UserController::class,'index'])->middleware(['auth','verified'])->name('get-artiste');
Route::post('add-artiste',[UserController::class, 'store'])->middleware(['auth','verified'])->name('add-artiste');

Route::post('message',[UserController::class, 'send'])->name('add-message');
Route::get('/test-mail', function () {
    $to = 'recipient@example.com';
    $subject = 'Test Email';
    $message = 'This is a test email from Laravel.';

    Mail::raw($message, function ($mail) use ($to, $subject) {
        $mail->to($to)->subject($subject);
    });

    return 'Test email sent successfully.';
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('users/profile', function ()
    {
        return view('');
    })->name('users.profile');
});

require __DIR__.'/auth.php';
