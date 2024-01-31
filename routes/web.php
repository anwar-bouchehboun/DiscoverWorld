<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/welcom', function () {
//     return view('wlecom');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/adventure/{item}', [HomeController::class, 'show'])->name('adventure.show');
Route::get('/Post', function () {
    return view('Post');
})->middleware(['auth', 'verified'])->name('Post');

Route::middleware('auth')->group(function () {
    Route::resource('poste', PosteController::class);
    // ImageController
    Route::resource('imagesposte', ImageController::class);    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';