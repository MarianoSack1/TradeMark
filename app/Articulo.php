<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
        'nombre','precio','id_rubro' 
    ];

    function Rubro(){
        return $this->BelongsTo('App\Rubro');
    }
}

