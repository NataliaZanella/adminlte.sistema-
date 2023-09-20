<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//Inicio e Login

Route::get('/', function () {
    return view('auth.login');
});

//Dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index']);

//Usuários

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



//Adicionar dotações/contratos
Route::get('/adicionar', [HomeController::class, 'adicionar']);
Route::post('/adicionar', [HomeController::class, 'store_dotacao']);



//alterar
//Pesquisa de Dotações/Contratos

Route::get('/dotacaos/search', 'DotacaoController@search');

Route::get('/dotacaos', [DotacaoController::class, 'index'])->name('dotacaos.index');