<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'produto',
        'unid_medida',
        'preco',
        'qtd_estoque',
        'qtd_minima',
        'data_val',
        'aplicacao'
    ];
}
