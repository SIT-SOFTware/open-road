<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdvertisementController;

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

Route::get('/', function(){
    return view('welcome');
})->name('welcome');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/editfaq', function () {
    return view('editfaq');
})->name('editfaq');

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/courses', CourseController::class);
    Route::resource('/classes', ClassController::class);
});

//Resource Controllers 

Route::resource('/advertisements', AdvertisementController::class);

Route::resource('/info', StuffController::class)->middleware('auth')->parameters(['info' => 'stuff:STUFF_ID']);

//Middleware Controllers 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
