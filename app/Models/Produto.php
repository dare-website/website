<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
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

    public function tipoProduto()
    {
        return $this->belongsTo(TipoProduto::class, 'id_tipo');
    }
}
