<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enrolment extends Model
{
    use SoftDeletes;
    protected $table = 'enrolments';
    //atributo que va a aer primaryKey del modelo
    protected $primaryKey = 'enr_id';

    public $timestamps = true;

    protected $fillable = [
        'stu_id',
        'per_id',
        'lev_id',
        'enr_date',
        'enr_status',
    ];
    
    protected $guarded = [

    ];

}
