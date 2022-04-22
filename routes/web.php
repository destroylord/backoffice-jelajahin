<?php

use App\Http\Controllers\{DashboardController, ProfileController, TourController};
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/category-events', [CategoryEventController::class, 'index'])->name('categoryEvent.index');
    Route::post('/category-events', [CategoryEventController::class, 'create'])->name('categoryEvent.create');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::resource('/tour',TourController::class)->except(['destroy']);
    Route::get('/tour/{tour:uuid_tour}/delete', [TourController::class, 'destroy'])->name('tour.destroy');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
