<?php

use App\Http\Controllers\Admin\FirstController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Psr7\Request;
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

Route::get('/', function () {
    return view('welcome');
});


// invoke_method//
Route::get('/test', LearnController::class);


Route::get('/contact-us', [FirstController::class, 'index'])->name('contact.us');

Route::get('/about-us', [FirstController::class, 'indexx'])->name('about.us');


Route::get('/country', [FirstController::class, 'country'])->name('country')->middleware('country');

// Route::get('/country', function(){
//     return view('country');
// })->middleware('country');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
