<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'teachers';
    //atributo que va a ser primaryKey del modelo
    protected $primaryKey = 'tea_id';

    public $timestamps = false;

    protected $fillable = [
        'tea_name',
        'tea_lastName',
        'tea_idCard',
        'tea_birthDate',
        'tea_address',
        'tea_city',
        'tea_gender',
        'tea_phone',
        'tea_email',
        'tea_photo'
    ];
    
    protected $guarded = [

    ];
}
