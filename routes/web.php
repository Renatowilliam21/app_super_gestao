<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PrincipaController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipaController::class, 'principal']);

Route::get('/sobre', [SobreNosController::class, 'sobrenos']);

Route::get('/contato', [ContatoController::class, 'contato']);






