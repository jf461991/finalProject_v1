<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Administrative extends Model
{
    use SoftDeletes;
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'administratives';
    //atributo que va a ser primaryKey del modelo
    protected $primaryKey = 'adm_id';

    public $timestamps = true;

    protected $fillable = [
    
        'rol_id',
        'adm_name',
        'adm_lastName',
        'adm_idCard',
        'adm_birthDate',
        'adm_address',
        'adm_city',
        'adm_gender',
        'adm_phone',
        'adm_photo',
        'adm_status',
        'email',
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
