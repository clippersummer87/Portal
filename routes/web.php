<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\ProblemaController;
use App\Http\Controllers\admin\CategoriaController;
use App\Http\Controllers\admin\TipoController;
use App\Http\Controllers\admin\SetorController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\PessoaController;

Route::get('/', function () {
    return view('welcome');
})->name('site');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    Route::get('/problemas', [ProblemaController::class, 'index'])->name('admin.problemas');
    Route::get('/problemas/adicionar', [ProblemaController::class, 'adicionar'])->name('admin.problemas.adicionar');
    Route::post('/problemas/salvar', [ProblemaController::class, 'salvar'])->name('admin.problemas.salvar');
    Route::get('/problemas/editar/{id}', [ProblemaController::class, 'editar'])->name('admin.problemas.editar');
    Route::put('/problemas/atualizar/{id}', [ProblemaController::class, 'atualizar'])->name('admin.problemas.atualizar');
    Route::get('/problemas/deletar/{id}', [ProblemaController::class, 'deletar'])->name('admin.problemas.deletar');

    Route::get('/categorias', [CategoriaController::class , 'index'])->name('admin.categorias');
    Route::get('/categorias/adicionar', [CategoriaController::class , 'adicionar'])->name('admin.categorias.adicionar');
    Route::post('/categorias/salvar', [CategoriaController::class , 'salvar'])->name('admin.categorias.salvar');
    Route::get('/categorias/editar/{id}', [CategoriaController::class , 'editar'])->name('admin.categorias.editar');
    Route::put('/categorias/atualizar/{id}', [CategoriaController::class , 'atualizar'])->name('admin.categorias.atualizar');
    Route::get('/categorias/deletar/{id}', [CategoriaController::class , 'deletar'])->name('admin.categorias.deletar');

    Route::get('/tipos', [TipoController::class, 'index'])->name('admin.tipos');
    Route::get('/tipos/adicionar', [TipoController::class, 'adicionar'])->name('admin.tipos.adicionar');
    Route::post('/tipos/salvar', [TipoController::class, 'salvar'])->name('admin.tipos.salvar');
    Route::get('/tipos/editar/{id}', [TipoController::class, 'editar'])->name('admin.tipos.editar');
    Route::put('/tipos/atualizar/{id}', [TipoController::class, 'atualizar'])->name('admin.tipos.atualizar');
    Route::get('/tipos/deletar/{id}', [TipoController::class, 'deletar'])->name('admin.tipos.deletar');

    Route::get('/setors', [SetorController::class, 'index'])->name('admin.setors');
    Route::get('/setors/adicionar', [SetorController::class, 'adicionar'])->name('admin.setors.adicionar');
    Route::post('/setors/salvar', [SetorController::class, 'salvar'])->name('admin.setors.salvar');
    Route::get('/setors/editar/{id}', [SetorController::class, 'editar'])->name('admin.setors.editar');
    Route::put('/setors/atualizar/{id}', [SetorController::class, 'atualizar'])->name('admin.setors.atualizar');
    Route::get('/setors/deletar/{id}', [SetorController::class, 'deletar'])->name('admin.setors.deletar');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/users/adicionar', [UserController::class, 'adicionar'])->name('admin.users.adicionar');
    Route::post('/users/salvar', [UserController::class, 'salvar'])->name('admin.users.salvar');
    Route::get('/users/editar/{id}', [UserController::class, 'editar'])->name('admin.users.editar');
    Route::put('/users/atualizar/{id}', [UserController::class, 'atualizar'])->name('admin.users.atualizar');
    Route::get('/users/deletar/{id}', [UserController::class, 'deletar'])->name('admin.users.deletar');

    Route::get('/pessoas/criar', [PessoaController::class, 'criar'])->name('pessoa.criar');
    Route::post('/pessoas', [PessoaController::class, 'salvar'])->name('pessoa.salvar');
    Route::get('/pessoas/editar/{id}', [PessoaController::class, 'editar'])->name('pessoa.editar');
    Route::put('/pessoas/editar/{id}', [PessoaController::class, 'atualizar'])->name('pessoa.atualizar');
    Route::get('/pessoas/deletar/{id}', [PessoaController::class, 'deletar'])->name('pessoa.deletar');
    Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoa.index');
    Route::get('/pessoas/visualizar/{id}', [PessoaController::class, 'visualizar'])->name('pessoa.visualizar');
});
