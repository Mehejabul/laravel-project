<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\UserController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin', function () {
    return view('layouts.admin');
})->middleware(['auth', 'verified'])->name('admin');



Route::group(['prefix' => 'user'], function() {
       Route::get('/',[UserController::class, 'index'])->name('user.index');
       Route::get('/create',[UserController::class,'create'])->name('user.create');
       Route::post('/store',[UserController::class,'store'])->name('user.store');
       Route::get('/show/{slug}',[UserController::class,'show'])->name('user.show');
       Route::get('/edit/{slug}',[UserController::class,'edit'])->name('user.edit');
       Route::put('/update/{slug}',[UserController::class,'update'])->name('user.update');
       Route::get('/softdelete/{slug}',[Usercontroller::class,'softdelete'])->name('user.softdelete');
       Route::get('/delete/{slug}',[UserController::class,'softdelete'])->name('user.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
