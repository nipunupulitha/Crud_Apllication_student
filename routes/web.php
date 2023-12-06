<?php

use App\Http\Controllers\StudentController;
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


// Route::resource('students', StudentController::class);

Route::get('/', function () {
    return redirect('/students');
});

Route::middleware(['web']) ->group(function () {
        Route::resource('students', StudentController::class);
    });


