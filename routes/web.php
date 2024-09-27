<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'Read'])->name('Home.Read');
Route::get('/create', [HomeController::class, 'Create'])->middleware(['auth', 'verified']);
Route::post('/create', [HomeController::class, 'Assistant_Create'])->middleware(['auth', 'verified'])->name('Home.Assistant_Create');
Route::get('/update/{id}', [HomeController::class, 'Update'])->middleware(['auth', 'verified'])->name('Home.Update');
Route::post('/update', [HomeController::class, 'Update_Func'])->middleware(['auth', 'verified'])->name('Home.Update_Func');
Route::get('/delete/{id}', [HomeController::class, 'Delete'])->middleware(['auth', 'verified'])->name('Home.Delete');
Route::post('/delete', [HomeController::class, 'Delete_Func'])->middleware(['auth', 'verified'])->name('Home.Delete_Func');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
