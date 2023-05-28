<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InicioControl;
use App\Http\Controllers\Admin\MundoControl;
use App\Http\Controllers\Admin\MediaControl;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', [InicioControl::class, 'traer_inicio']);

Route::get('sobre_mundo/personajes', [MundoControl::class, 'traer_personajes']);
Route::get('sobre_mundo/organizaciones', [MundoControl::class, 'traer_organizaciones']);
Route::get('sobre_mundo/akuma_no_mi', [MundoControl::class, 'traer_akuma']);

Route::get('sobre_media/anime', [MediaControl::class, 'traer_anime']);
Route::get('sobre_media/manga', [MediaControl::class, 'traer_manga']);


