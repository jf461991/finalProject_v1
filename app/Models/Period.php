<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Period extends Model
{
    use SoftDeletes;
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'periods';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'per_id';

    public $timestamps = true;

    protected $fillable = [
        'per_name',
        'per_letter',
        'per_startDate',
        'per_endDate',
        'per_status'
    ];
    
    protected $guarded = [

    ];
}
