<?php


use App\Http\Controllers\{DashboardController, MenuRestaurantController, HotelController, ProfileController, RestaurantController, HiddenGemController};

use Illuminate\Support\Facades\Route;


// Route::redirect('/', 'login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('/hotel',HotelController::class)->except(['destroy']);
    Route::get('/hotel/{lodging:uuid_lodging}/delete', [HotelController::class, 'destroy'])->name('hotel.destroy');

    //Restaurant
    Route::resource('/restaurant', RestaurantController::class)->except(['destroy']);
    Route::get('/getcity/{id}', [RestaurantController::class, 'getCity'])->name('restaurant.city');
    Route::get('/restaurant/{uuid_restaurant}/delete', [RestaurantController::class, 'destroy'])->name('restaurant.destroy');

    // Menu-Restaurant
    Route::resource('/menu-restaurant', MenuRestaurantController::class)->except('destroy');
    Route::get('/menu-restaurant/{uuid_menu}/delete', [MenuRestaurantController::class, 'destroy'])->name('menu-restaurant.destroy');

    //HiddenGem
    Route::resource('/hidden_gem', HiddenGemController::class)->except(['destroy']);
    Route::get('/getcity/{id}', [HiddenGemController::class, 'getCity'])->name('hidden_gem.city');
    Route::get('/hidden_gem/{id}/delete', [HiddenGemController::class, 'destroy'])->name('hidden_gem.destroy');

});

require __DIR__.'/auth.php';

