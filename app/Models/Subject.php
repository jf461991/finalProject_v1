<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'subjects';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'sub_id';

    public $timestamps = false;

    protected $fillable = [
        'sub_name'
    ];
    
    protected $guarded = [

    ];
}
