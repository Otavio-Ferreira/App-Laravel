<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});


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
    ->only(['index', 'create', 'store', 'destroy']);

    
