<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CtrlPessoas;



Route::get('/pessoas', [CtrlPessoas::class, 'listPessoas']);

