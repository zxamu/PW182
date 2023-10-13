<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoInicio');

Route::get('/formularios', [diarioController::class, 'metodoFormularios'])->name('apodoFormularios');

Route::get('/recuerdos', [diarioController::class, 'metodoRecuerdos'])->name('apodoRecuerdos');



/* Route::view('/', 'welcome');

Route::view('/formularios', 'formularios');

Route::view('/recuerdos', 'recuerdos'); */