<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'periods';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'per_id';

    public $timestamps = false;

    protected $fillable = [
        'per_name',
        'per_startDate',
        'per_endDate',
        'per_status'
    ];
    
    protected $guarded = [

    ];
}
