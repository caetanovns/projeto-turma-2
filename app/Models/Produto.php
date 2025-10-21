<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProdutoCategoria;
use App\Models\Restaurante;
use App\Models\Pedido;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'produto_categorias_id',
        'restaurante_id',
        'disponivel'
    ];


    public function categoria(){
        return $this->belongsTo(ProdutoCategoria::class, 'produto_categorias_id');
    }

    public function restaurante(){
        return $this->belongsTo(Restaurante::class);
    }

    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
}
