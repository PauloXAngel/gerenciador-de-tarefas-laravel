<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskListController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [TaskListController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/lists', [TaskListController::class, 'index'])->name('task-lists.index');
    Route::post('/lists', [TaskListController::class, 'store'])->name('task-lists.store');
});

require __DIR__.'/auth.php';
