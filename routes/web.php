<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(BlogController::class)->group(function () {

Route::get('/addpost', 'addPostGet')->middleware(['auth', 'verified']);
Route::post('/addpost', 'addpost')->name('addpostpost');

});


Route::controller(BlogController::class)->group(function () {

   
    Route::get('/login', 'loginGet');
    Route::get('/registration','registrationGet');
    Route::get('/userdata', 'userDataGet');
    Route::get('/addpost', 'addPostGet');
    
    Route::get('/','home');
    Route::post('/registration','registrationPost')->name('registrationpost');
    Route::post('/login','loginPost')->name('loginpost');
    
    Route::get('/email', 'email');
    Route::get('/dashboard', 'dashboard');
    Route::get('/logout','logout');
    Route::post('/addpost', 'addpost')->name('addpostpost');
    Route::get('/all', 'all');
    Route::get('/dance', 'dance');
    Route::get('/singing', 'singing');
    Route::get('/speaking', 'publicSpeaking');
    Route::get('/userall', 'userAll');
    Route::get('/userdance', 'userDance');
    Route::get('/usersinging', 'userSinging');
    Route::get('/userspeaking', 'userPublicSpeaking');
    Route::get('/yourpost', 'yourPost');
    Route::get('/yourdraft','yourDraft');
    Route::get('/postdata','getpostdata');
});


require __DIR__.'/auth.php';
