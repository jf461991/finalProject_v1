<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'levels';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'lev_id';

    public $timestamps = false;

    protected $fillable = [
        'lev_name'
    ];
    
    protected $guarded = [

    ];
}
