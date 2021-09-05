<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\RentsController;
use App\Http\Controllers\UserController;
use App\Models\Rents;
use Illuminate\Support\Facades\Route;

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


Route::resource('usuarios', UserController::class)->names('user')->parameters(['usuarios' => 'user']);
Route::resource('carros', CarsController::class)->names('car')->parameters(['carros' => 'car']);
//Route::resource('locacoes', RentsController::class)->names('rent')->parameters(['locacoes' => 'rent']);


/* Rents */

Route::get('/locacoes', [RentsController::class, 'index'])->name('rent.index');

Route::get('/locacoes/visualizar-locacao/{rent}', [RentsController::class, 'show'])->name('rent.show');

Route::get('/locacoes/novo/{user}', [RentsController::class, 'create'])->name('rent.create');

Route::get('/locacoes/editar/{rent}', [RentsController::class, 'edit'])->name('rent.edit');

Route::post('/locacoes/pesquisar-usuario', [RentsController::class, 'searchUser'])->name('rent.searchUser');

Route::post('/locacoes/registrar', [RentsController::class, 'store'])->name('rent.store');

Route::put('/locacoes/update/{rent}', [RentsController::class, 'update'])->name('rent.update');

Route::delete('/locacoes/deletar/{rent}', [RentsController::class, 'destroy'])->name('rent.destroy');
