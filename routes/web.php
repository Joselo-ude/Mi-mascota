<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Productos;
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











//////con vistas
Route::get('/', [Home::class, 'index'] );

Route::get('gatos/Catalogo', [Productos::class,'gato']);
    

Route::get('Perros/catalogo', [Productos::class,'perro']);

Route::get('contacto', [Home::class, 'contacto']); 


