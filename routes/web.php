<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
Route::controller(WebController::class)->group(function(){
    Route::get('/',action: 'home');
    Route::get('/shop','shop');
    Route::get('/contact','contact');
    Route::get('/bundles','bundles');
    Route::get('/essentials','essentials');
    Route::get('/discounts','discounts');
    Route::get('/productdetails','productdetails');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
