<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevelSubject extends Model
{
    use SoftDeletes;
    protected $table = 'levels_subjects';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'ls_id';

    public $timestamps = true;

    protected $fillable = [
        'lev_id',
        'sub_id',
        'per_id',
        'ls_status'

    ];
    
    protected $guarded = [

    ];
}
