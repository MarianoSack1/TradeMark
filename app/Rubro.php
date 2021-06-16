<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    protected $fillable = [
        'nombre' 
    ];


    function Articulo(){
        return $this->hasMany('App\Articulo');
    }
}
