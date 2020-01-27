<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectTeacher extends Model
{
    use SoftDeletes;
    protected $table = 'subjects_teachers';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'st_id';

    public $timestamps = true;

    protected $fillable = [
        'sub_id',
        'tea_id',
        'per_id',
        'st_status'

    ];
    
    protected $guarded = [

    ];
}
