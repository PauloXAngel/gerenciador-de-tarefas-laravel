<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskListController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/task-lists', [TaskListController::class, 'index'])
        ->name('task-lists.index');

    Route::post('/task-lists', [TaskListController::class, 'store'])
        ->name('task-lists.store');
});

require __DIR__ . '/auth.php';
