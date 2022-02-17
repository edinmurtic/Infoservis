<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EdukatorController;
use App\Http\Controllers\PredmetController;
use App\Http\Controllers\OcjenaController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum','verified'])->get('students', [StudentController::class,'index'])->name('students');
Route::middleware(['auth:sanctum','verified'])->get('add_student', [StudentController::class,'create'])->name('add_student');
Route::middleware(['auth:sanctum','verified'])->post('store_student', [StudentController::class,'store'])->name('store_student');
Route::middleware(['auth:sanctum','verified'])->get('predmets', [PredmetController::class,'index'])->name('predmets');
Route::middleware(['auth:sanctum','verified'])->get('ocjenas', [OcjenaController::class,'index'])->name('ocjenas');

Route::middleware(['auth:sanctum','verified'])->get('edukators', [EdukatorController::class,'index'])->name('edukators');
Route::middleware(['auth:sanctum','verified'])->post('delete_student', [StudentController::class,'delete'])->name('delete_student');
Route::middleware(['auth:sanctum','verified'])->post('edit_student', [StudentController::class,'edit'])->name('edit_student');
Route::middleware(['auth:sanctum','verified'])->post('update_student', [StudentController::class,'update'])->name('update_student');

