<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use Notifiable;
    use SoftDeletes;
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'students';
    //atributo que va a ser primaryKey del modelo
    protected $primaryKey = 'stu_id';

    public $timestamps = true;

    protected $fillable = [
        
        'rol_id',
        'stu_name',
        'stu_lastName',
        'stu_idCard',
        'stu_birthDate',
        'stu_address',
        'stu_city',
        'stu_gender',
        'stu_phone',
        'stu_lastLevelPass',
        'stu_photo',
        'stu_status',
        'stu_email',
        'stu_password'
    ];
    
    protected $guarded = [

    ];

    protected $hidden = [
        'stu_password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
