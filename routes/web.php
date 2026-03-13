<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Esta línea crea automáticamente todas las rutas del CRUD (index, create, store, edit, update, destroy)
Route::resource('clientes', ClienteController::class);
