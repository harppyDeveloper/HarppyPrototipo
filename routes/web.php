<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecController;

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

//Inicio de sesión
Route::get('/',[LoginController::class,'login'])
->name('login');
//Te manda aquí si no tienes la contraseña y usuario correctos
Route::post('/sesion',[LoginController::class,'MuestraLogin'])
->name('sesion');
//menu
Route::post('/menu',[LoginController::class,'menu'])
->name('menu');
Route::get('/menuP',[LoginController::class,'menuP'])
->name('menuP');
//Te manda a ver un recuerdo random
Route::get('/recuerdoRandom',[RecController::class,'random'])
->name('random');
//te confirma que ya guardaste tu recuerdo
Route::post('/recuerdo',[RecController::class,'save'])
->name('showRec');
//Te muestra la lista de todos los recuerdos
Route::get('/listaRecuerdos',[RecController::class,'index'])
->name('list');
//Te muestra quienes somos
Route::get('/Quienes_somos',[LoginController::class,'showUs'])
->name('who');
Route::get('/Quienes_somosB',[LoginController::class,'showUsB'])
->name('whoB');
Route::get('/Quienes_somosC',[LoginController::class,'showUsC'])
->name('whoC');
//
Route::get('/borrar',[LoginController::class,'borrar'])
->name('borrar');