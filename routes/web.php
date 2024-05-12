<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticator;
use Illuminate\Support\Facades\Route;



//////////////////////////////////////////
//// forma agrupoda de rotas nomeadas ////
//////////////////////////////////////////


// Route::controller(SeriesController::class)->group(function(){
    //     Route::get('/series', 'index')->name('series.index');
//     Route::get('/series/create', 'create')->name('series.create');
//     Route::post('/series/store', 'store')->name('series.store');
// });

///////////////////////////
//// rota para deletar ////
///////////////////////////

// Route::delete('/series/destroy/{serie}', [SeriesController::class, 'destroy'])->name('series.destroy');

//////////////////////////////////////////////////////////
//// froma simplificada que segue o padrão do laravel ////
//////////////////////////////////////////////////////////

Route::resource('/series', SeriesController::class)
->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::middleware(Autenticator::class)->group(function(){
    Route::get('/', function () {
        return redirect('/series');
    })->middleware(Autenticator::class);
    
    Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');
    
    Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
    Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');
});
    
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('sigin');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/register', [UsersController::class, 'create'])->name('users.create');
Route::post('/register', [UsersController::class, 'store'])->name('users.store');