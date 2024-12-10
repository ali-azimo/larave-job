<?php

use App\Http\Controllers\Contascontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Contas
Route::get('/index-contas', [Contascontroller::class, 'index'])->name('contas.index');
Route::get('/create-contas', [Contascontroller::class, 'create'])->name('contas.create');
Route::post('/store-contas', [Contascontroller::class, 'store'])->name('contas.store');

Route::get('/show-contas', [Contascontroller::class, 'show'])->name('contas.show');

Route::get('/edit-contas', [Contascontroller::class, 'edit'])->name('contas.edit');

Route::put('/update-contas', [Contascontroller::class, 'update'])->name('contas.update');

Route::delete('/destroy-contas', [Contascontroller::class, 'destroy'])->name('contas.destroy');
