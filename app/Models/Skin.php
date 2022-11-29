<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skin extends Model
{
    use HasFactory;
    public function catgoria(){
        return $this->belongsTo(Categoria::class);
    }
}
