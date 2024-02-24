<?php

use App\Http\Controllers\Admin\FirstController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SecondController;
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
})->name('nayon');


// invoke_method//
// Route::get('/test', LearnController::class);

// Route::post('/student/store', [FirstController::class, 'store'])->name('student.store');


Route::get('/about-us', [FirstController::class, 'about'])->name('about.us');

Route::get('/contact-us', [FirstController::class, 'contact'])->name('contact.us');

Route::get('/testone', [SecondController::class, 'test']);


Route::get('/laravel', [FirstController::class, 'laravel'])->name('laravel');


Route::post('/student/edit/', [FirstController::class, 'store'])->name('student.store');

Route::post('/about/store', [FirstController::class, 'aboutstore'])->name('about.store');

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
