<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurante extends Model
{
    
    use HasFactory;
    use SoftDeletes;

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
