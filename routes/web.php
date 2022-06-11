<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    return redirect()->route('login');
});

Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('index.home');

Route::prefix('admin')->group(function (){
    Route::get('/roles', [RoleController::class, 'lista'])->name('lista.roles');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/roles', [RoleController::class, 'store'])->name('role.store');
    Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('role.edite');
    Route::get('/roles/{role}/delete', [RoleController::class, 'destroy'])->name('role.delete');
    Route::get('/roles/{role}/permission', [RoleController::class, 'show'])->name('role.show');
    Route::post('/roles/{role}/permission', [RoleController::class, 'show'])->name('role.show.add');
    Route::put('/roles/{role}/update', [RoleController::class, 'update'])->name('role.update');

    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/users/{user}/role', [UserController::class, 'add_role'])->name('user.role');
    Route::post('/users/{user}/role', [UserController::class, 'add_role'])->name('user.role.add_role');

    Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index');
    Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produto.create');
});
//Route::get('/admin/roles/{id}', [RoleController::class, 'show']);


