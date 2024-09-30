<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\IngressoController;
use App\Http\Controllers\VendaController;

// Rota para a página inicial
Route::get('/', function () {
    return view('layouts/app');
});

// Rotas de recursos
Route::resource('eventos', EventoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('ingressos', IngressoController::class);
Route::resource('vendas', VendaController::class);

Route::get('vendas/relatorio', [VendaController::class, 'relatorio']);
