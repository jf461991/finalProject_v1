<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use SoftDeletes;
    //Declarar una variable protected , variable php
    //vamos a hacer referencia a tabla estudiantes
    protected $table = 'levels';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'lev_id';

    public $timestamps = true;

    protected $fillable = [
        'lev_name',
        'lev_parallel',
        'lev_status'
    ];
    
    protected $guarded = [

    ];
}
