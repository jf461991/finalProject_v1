<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'students';
    //atributo que va a ser primaryKey del modelo
    protected $primaryKey = 'stu_id';

    public $timestamps = false;

    protected $fillable = [
        
        'stu_name',
        'stu_lastName',
        'stu_idCard',
        'stu_birthDate',
        'stu_address',
        'stu_city',
        'stu_gender',
        'stu_phone',
        'stu_email',
        'stu_photo'
    ];
    
    protected $guarded = [

    ];
}
