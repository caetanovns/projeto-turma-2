<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurante extends Model
{
    
    use HasFactory;

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
