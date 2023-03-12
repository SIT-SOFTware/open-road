<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TrashedClassController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\TrashedCourseController;

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

// Route::get('/faq', function () {
//     return view('webcontent.faq');
// })->name('faq');

Route::get('/faq', [FAQController::class, 'index'])->name('faq');

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/courses/massEdit', [CourseController::class, 'massEdit'])->name('courses.massEdit');
    Route::resource('/courses', CourseController::class);
    Route::get('/classes/massEdit', [ClassController::class, 'massEdit'])->name('classes.massEdit');
    Route::resource('/classes', ClassController::class);
    Route::resource('/faq', FAQController::class);
    Route::resource('/vehicles', VehicleController::class);

    Route::prefix('/trashed')->name('trashed.')->group(function(){
        
        //Prefix for trashed courses
        Route::prefix('/courses')->name('courses.')->group(function(){
            Route::get('/', [TrashedCourseController::class, 'index'])->name('index');
            Route::put('/{course}', [TrashedCourseController::class, 'update'])->name('update')->withTrashed();
            Route::delete('/{course}', [TrashedCourseController::class, 'destroy'])->name('destroy')->withTrashed();
        })->name('courses');

        //Prefix for trashed classes
        Route::prefix('/classes')->name('classes.')->group(function(){
            Route::get('/', [TrashedClassController::class, 'index'])->name('index');
            Route::put('/{class}', [TrashedClassController::class, 'update'])->name('update')->withTrashed();
            Route::delete('/{class}', [TrashedClassController::class, 'destroy'])->name('destroy')->withTrashed();
        })->name('classes');
    })->name('trashed');
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
