<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public function skins(){
        return $this->belongsToMany(Skin::class)->withPivot('precio','descripcion')->withTimestamps();
    }
}
