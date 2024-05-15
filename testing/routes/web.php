<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::get('/data/create', [DataController::class, 'create'])->name('data.create');
// Route::get('/data/update/{id}', [DataController::class, 'update'])->name('data.edit');
Route::get('/data/{id}/edit', [DataController::class, 'edit'])->name('data.edit');
Route::put('/data/{id}', [DataController::class, 'update'])->name('data.update');
// Route::get('/data/{id}/delete', [DataController::class, 'delete'])->name('data.hapus');
Route::delete('/data/{id}', [DataController::class, 'destroy'])->name('data.hapus');
Route::post('/data/store', [DataController::class,'store'])->name('createData');
Route::get('/data',[DataController::class,'index'])->name('data');
