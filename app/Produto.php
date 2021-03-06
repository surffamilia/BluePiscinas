<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'quatidadeEstoque',
        'valorCompra',
        'valor',
        'ativo'
    ];
}
