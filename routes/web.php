<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCtr;
use App\Http\Controllers\CursoCtr;
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

Route::get('/',HomeCtr::class);

Route::controller(CursoCtr::class)->group(function(){
    /* definir una nueva ruta */
    Route::get('cursos', 'index');
    /* cursos/javascript */
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});