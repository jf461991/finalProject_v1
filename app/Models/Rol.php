<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
    use SoftDeletes;
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'roles';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'rol_id';

    public $timestamps = true;

    protected $fillable = [
        'rol_name',
        'rol_slug'
    ];
    
    protected $guarded = [

    ];

    /* public function user()
    {
        return $this->hasMany('App\User');
    } */
}
