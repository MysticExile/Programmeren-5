<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
## View
Route::get('/champions', [App\Http\Controllers\ChampionsController::class, 'index'])->name('champions');

## Create
Route::get('/champions/create', [App\Http\Controllers\ChampionsController::class, 'create'])->name('champions.create');
Route::post('/champions/store', [App\Http\Controllers\ChampionsController::class, 'store'])->name('champions.store');

## Update
Route::get('/champions/store/{id}', [App\Http\Controllers\ChampionsController::class, 'edit'])->name('champions.edit');
Route::post('/champions/update/{id}', [App\Http\Controllers\ChampionsController::class, 'update'])->name('champions.update');

## Delete
Route::get('/champions/delete/{id}', [App\Http\Controllers\ChampionsController::class, 'destroy'])->name('champions.delete');
