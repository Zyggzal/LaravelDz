<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'Read'])->name('Home.Read');
Route::get('/create', [HomeController::class, 'Create']);
Route::post('/create', [HomeController::class, 'Assistant_Create'])->name('Home.Assistant_Create');
Route::get('/update/{id}', [HomeController::class, 'Update'])->name('Home.Update');
Route::post('/update', [HomeController::class, 'Update_Func'])->name('Home.Update_Func');
Route::get('/delete/{id}', [HomeController::class, 'Delete'])->name('Home.Delete');
Route::post('/delete', [HomeController::class, 'Delete_Func'])->name('Home.Delete_Func');
