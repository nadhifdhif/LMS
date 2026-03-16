<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* Home */
Route::get('/', function () {
    return redirect()->route('login');
});

/* App */
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/courses', function () {
        return view('courses.index');
    })->name('courses');

    Route::get('/students', function () {
        return view('students.index');
    })->name('students');

});

/* Profile */
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';