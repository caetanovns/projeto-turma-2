<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;
use App\Models\User;

class Cliente extends Model
{
    

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
