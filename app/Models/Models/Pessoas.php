<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{

	protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'telefone',
        'tipodoc',
        'numdoc'
    ];
    use HasFactory;
}
