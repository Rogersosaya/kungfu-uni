<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TaoluModernoJueza;
use App\Http\Livewire\TaoluPantalla;
use App\Http\Livewire\TaoluModernoJuezb;
use App\Http\Livewire\TaoluTradicionalJuezb;
use App\Http\Livewire\SandaAplicacion;
use App\Http\Livewire\SandaPantalla;
use App\Http\Controllers\TaoluModernoJuezaController;
use App\Http\Controllers\TaoluModernoJuezbController;
use App\Http\Controllers\TaoluTradicionalController;
use App\Http\Controllers\SandaAplicacionController;
use App\Http\Controllers\WelcomeController;
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
Route::get('/', [WelcomeController::class, 'index'])->name('welcome')->middleware('welcome');
Route::post('/judge', [WelcomeController::class, 'storeJudge'])->name('store-judge');
Route::post('/participants', [WelcomeController::class, 'storeParticipant'])->name('store-participant');
Route::post('/performance', [WelcomeController::class, 'storePerformance'])->name('store-performance');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('taolu/moderno/jueza', TaoluModernoJueza::class)->name('taolu-moderno-jueza')->middleware(['taolu']);
Route::get('taolu/pantalla', TaoluPantalla::class)->name('taolu-pantalla');

Route::get('taolu/moderno/juezb', TaoluModernoJuezb::class)->name('taolu-moderno-juezb')->middleware(['taolub']);

Route::get('taolu/tradicional/juezb', TaoluTradicionalJuezb::class)->name('taolu-tradicional-juezb')->middleware(['tradicional']);

Route::get('sanda/aplicacion', SandaAplicacion::class)->name('sanda-aplicacion')->middleware(['sanda']);

Route::get('sanda/pantalla', SandaPantalla::class)->name('sanda-pantalla');
Route::get('no-welcome', function () {
    return view('no-welcome');
})->name('no-welcome');

Route::get('no-taolu-moderno-jueza', [TaoluModernoJuezaController::class, 'index'])->name('no-taolu-moderno-jueza');
Route::get('no-taolu-moderno-juezb', [TaoluModernoJuezbController::class, 'index'])->name('no-taolu-moderno-juezb');

Route::get('no-taolu-tradicional-juezb', function () {
    return view('taolu.tradicional.juezb');
})->name('no-taolu-tradicional-juezb');

Route::get('no-sanda-aplicacion', function () {
    return view('sanda.aplicacion');
})->name('no-sanda-aplicacion');


// Route::get('taolu/moderno/jueza', function () {
//     return view('taolu/moderno/jueza');
// })->name('taolu-moderno-jueza');
