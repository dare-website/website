<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    use HasFactory;
    protected $table = 'tipo_produtos';
    protected $fillable = [
        'nome',
        'cor',
        'abreviatura',
        'texto',
        'preparação',
        'formato'

    ];
}
