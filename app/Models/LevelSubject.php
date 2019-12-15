<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelSubject extends Model
{
    protected $table = 'levels_subjects_teachers';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'lesute_id';

    public $timestamps = false;

    protected $fillable = [
        'lev_id',
        'sub_id',
        'tea_id',
        'per_id',

    ];
    
    protected $guarded = [

    ];
}
