<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CtrlPessoas;




Route::get('/', [CtrlPessoas::class, 'index']);

Route::post('/pessoas/', [CtrlPessoas::class, 'insert'])->name('pessoas.insert');

Route::put('/pessoas/{id}', [CtrlPessoas::class, 'update'])->name('pessoas.update');

Route::delete('/pessoas/{id}', [CtrlPessoas::class, 'delete'])->name('pessoas.delete');


Route::resource('pessoas', CtrlPessoas::class);