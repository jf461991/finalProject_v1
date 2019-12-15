<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'roles';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'rol_id';

    public $timestamps = false;

    protected $fillable = [
        'rol_name'
    ];
    
    protected $guarded = [

    ];

    /* public function user()
    {
        return $this->hasMany('App\User');
    } */
}
