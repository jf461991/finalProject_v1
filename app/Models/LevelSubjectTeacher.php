<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevelSubjectTeacher extends Model
{
    use SoftDeletes;
    protected $table = 'levels_subjects_teachers';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'lst_id';

    public $timestamps = true;

    protected $fillable = [
        'lev_id',
        'st_id',
        'per_id',
        'lst_status'

    ];
    
    protected $guarded = [

    ];
}
