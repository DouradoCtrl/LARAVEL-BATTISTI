<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/produtos', function () {
    return view('produtos');
});

/* ROTA COMUM */
Route::get('/contato', function () {
    return view('contatos');
});

/* ROTA OBRIGATÓRIA */
Route::get('/produtos_obrigatorio/{id}', function ($id) {
    return view('product', ['id' => $id]);
});

/* ROTA OPCIONAL */
/* CASO NENHUM VALOR SEJA PASSADO NO PARÂMETRO O VALOR DEFAULT SERÁ NULL */
Route::get('/produtos_opcional/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});

/* QUERY PARAMETERS */
/* URL: http://localhost:8000/produtos_query?search=camisa */
Route::get('/produtos_query', function () {
    $busca = request('search');
    return view('produtos_query', ['busca' => $busca]);
});


Route::get('/url_estrutura', function () {
    return view('url_estrutura');
});
