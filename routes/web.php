<?php

use App\Http\Controllers\AdminRequestController;
use App\Http\Controllers\EmbController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', RequestController::class);


Route::get('admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('auth')->group(function () {
    
        // Requests Routes
        Route::resource('/requests', AdminRequestController::class);
        Route::resource('/visa', VisaController::class);
        Route::resource('/embases', EmbController::class);
    
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/gellary/{id}',  [AdminRequestController::class, 'viewGellary'])->name('requests.gellary');
            
        });
        

    require __DIR__.'/auth.php';
});
