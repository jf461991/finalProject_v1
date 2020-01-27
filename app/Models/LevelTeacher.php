<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevelTeacher extends Model
{
    use SoftDeletes;
    protected $table = 'levels_teachers';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'lt_id';

    public $timestamps = true;

    protected $fillable = [
        'lev_id',
        'tea_id',
        'per_id',
        'lt_status'

    ];
    
    protected $guarded = [

    ];
}
