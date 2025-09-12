<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StatusPedido;
use App\Models\Produto;
use App\Models\Cliente;

class Pedido extends Model
{
    
    public function status(){
        return $this->belongsTo(StatusPedido::class);
    }

    public function produtos(){
        return $this->belongsToMany(Produto::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
