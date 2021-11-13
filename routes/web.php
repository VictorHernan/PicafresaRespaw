<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DragonProgramador;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [DragonProgramador::class,'inicio'])
->name('datosarea');
//donde procesamos el formurio
Route::post('/calculaarea', [DragonProgramador::class, 'calculaArea'])
->name('calculaarea');