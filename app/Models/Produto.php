<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProdutoCategoria;
use App\Models\Restaurante;
use App\Models\Pedido;

class Produto extends Model
{
    
    public function categoria(){
        return $this->belongsTo(ProdutoCategoria::class);
    }

    public function restaurante(){
        return $this->belongsTo(Restaurante::class);
    }

    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
}
