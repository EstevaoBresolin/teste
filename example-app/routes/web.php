<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;

Route::get('/jogos', function () {
    return view('about-us');
})-> name('homeIndex');



Route::get('/', [JogosController::class, 'index'])-> name('jogos');

// Route::view('/jogos', 'jogos',['name'=>'GTA']);

// Route::get('/jogos', function () {
//     return view('jogos');
// });

Route::fallback(function(){
    return 'Erro ao localizar rota';
});


