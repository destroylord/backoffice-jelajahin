<?php

use App\Http\Controllers\{DashboardController,CategoryEventController, TourController};
use App\Models\CategoryEvent;
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/category-events', [CategoryEventController::class, 'index'])->name('categoryEvent.index');
    Route::post('/category-events', [CategoryEventController::class, 'create'])->name('categoryEvent.create');
    Route::delete('/category-events/{id}', [CategoryEventController::class, 'destroy']);
    Route::get('/tour', [TourController::class, 'index'])->name('tour.index');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
