<?php

<<<<<<< HEAD
use App\Http\Controllers\{DashboardController,CategoryEventController, TourController};
use App\Models\CategoryEvent;
=======
use App\Http\Controllers\{DashboardController, ProfileController, TourController};
>>>>>>> dbee3a1c917cceb92a3dc5cf70a19f25b063193e
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
<<<<<<< HEAD
    Route::get('/category-events', [CategoryEventController::class, 'index'])->name('categoryEvent.index');
    Route::post('/category-events', [CategoryEventController::class, 'create'])->name('categoryEvent.create');
    Route::delete('/category-events/{id}', [CategoryEventController::class, 'destroy']);
=======
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('tour', TourController::class );
>>>>>>> dbee3a1c917cceb92a3dc5cf70a19f25b063193e
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
