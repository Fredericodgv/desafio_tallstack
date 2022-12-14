<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Players;
use App\Http\Livewire\Teams;

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

// Route::get('/', Teste::class)->name('teste');

//Players
Route::get('/players', Players\Index::class, )->name('players.index');

//Teams
Route::get('/teams', Teams\Index::class)->name('teams.index');

//Ranking
Route::get('/ranking', Teams\Ranking::class)->name('ranking.index');