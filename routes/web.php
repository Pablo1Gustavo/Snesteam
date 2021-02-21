<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[GameController::class,'indexUser'])->name('view-main');

Route::get('/admin/games',[GameController::class,'index'])->name('admin.games.index');
Route::get('admin/games/create',[GameController::class,'create'])->name('admin.games.create');
Route::post('admin/games/store',[GameController::class,'store'])->name('admin.games.store');
Route::delete('admin/games/{id}',[GameController::class,'destroy'])->name('admin.games.destroy');
Route::get('admin/games/edit/{id}',[GameController::class,'edit'])->name('admin.games.edit');
Route::put('admin/games/{id}',[GameController::class,'update'])->name('admin.games.update');
Route::get('/games',[GameController::class,'indexUser'])->name('view-main');
