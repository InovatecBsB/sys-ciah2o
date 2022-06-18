<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'categoria_id',
        'estoque',
        'custo',
        'venda',
        'desconto',
        'descricao'
    ];


    public function categorias () {
        return $this->belongsTo(Categoria::class);
    }
}
