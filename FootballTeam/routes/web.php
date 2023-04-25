<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;

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

Route::resource('teams',TeamController::class);

Route::controller(GameController::class)->group(function(){

    Route::get('games/create/{id}','create')->name('games.create');
    Route::post('games','store')->name('games.store');
    Route::get('games/{game}','show')->name('games.show');
    Route::get('games','index')->name('games.index');
    Route::get('games/{game}/edit','edit')->name('games.edit');
    Route::put('games/{game}','update')->name('games.update');
    Route::delete('games/{game}','destroy')->name('games.destroy');

});

// Route::get('games/create/{id}',[GameController::class,'create'])->name('games.create');
// Route::resource('games',GameController::class);
