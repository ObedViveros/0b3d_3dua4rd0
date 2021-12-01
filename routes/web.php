<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
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

Route::get('/loogin', [Login::class, 'loogin'])
->name('loogin');
Route::post('/valida', [Login::class, 'valida'])
->name('valida');