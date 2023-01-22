<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoEn extends Model
{
    use HasFactory;
    protected $table = 'produtos_en';
    protected $fillable = [
        'id',
        'nome',
        'id_tipo',
        'avatar',
        'alcool',
        'texto',
        'preparacao',
        'formato',
        'balanca'

    ];
}
