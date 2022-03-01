<?php

use App\Http\Controllers\{DashboardController,CategoryEventController};
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/category-events', [CategoryEventController::class, 'index'])->name('categoryEvent.index');
    Route::post('/category-events', [CategoryEventController::class, 'create'])->name('categoryEvent.create');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
