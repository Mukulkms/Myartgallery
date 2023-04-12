<?php

use App\Http\Controllers\home;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\ProfileController;
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
Route::get('/',[home::class,'welcome']);
Route::get('home',[home::class,'home']);
Route::get('/about',[home::class,'about']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('image-gallery',[ImageGalleryController::class,'index'] );
Route::post('image-gallery',[ImageGalleryController::class,'upload'])->middleware('auth');
Route::delete('image-gallery/{id}',[ImageGalleryController::class,'destroy']);

