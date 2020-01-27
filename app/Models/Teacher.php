<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'teachers';
    //atributo que va a ser primaryKey del modelo
    protected $primaryKey = 'tea_id';

    public $timestamps = true;

    protected $fillable = [
        'rol_id',
        'tea_name',
        'tea_lastName',
        'tea_idCard',
        'tea_birthDate',
        'tea_address',
        'tea_city',
        'tea_gender',
        'tea_phone',
        'tea_photo',
        'tea_status',
        'tea_email',
        'password'
        
    ];
    
    protected $guarded = [

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
