<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'subjects';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'sub_id';

    public $timestamps = true;

    protected $fillable = [
        'sub_name',
        'sub_status'
    ];
    
    protected $guarded = [

    ];
}
