<?php

use App\Http\Controllers\{DashboardController, ProfileController};
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
