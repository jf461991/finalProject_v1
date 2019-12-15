<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrative extends Model
{
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'administratives';
    //atributo que va a ser primaryKey del modelo
    protected $primaryKey = 'adm_id';

    public $timestamps = false;

    protected $fillable = [
    
        'adm_name',
        'adm_lastName',
        'adm_idCard',
        'adm_birthDate',
        'adm_address',
        'adm_city',
        'adm_gender',
        'adm_phone',
        'adm_email',
        'adm_photo'
    ];
    
    protected $guarded = [

    ];
}
