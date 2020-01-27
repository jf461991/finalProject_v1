<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Level;
use App\Models\SubjectTeacher;
use App\Models\Period;
use App\Models\LevelSubjectTeacher;

use App\Http\Requests\LevelSubjectTeacherFormRequest;
use Flash;

class LevelSubjectTeacherController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {

        if ($request) {
            $levels = Level::where('lev_status', '=', '1')->orderBy('lev_name', 'asc')->get();
            $subjectsteachers = SubjectTeacher::where('st_status', '=', '1')->get();
            $periods = Period::where('per_status', '=', '1')->get();

            $searchText = trim((string)$request->get('searchText'));
            $levels_subjects_teachers = DB::table('levels_subjects_teachers as lst')
            ->join('levels as l', 'lst.lev_id', '=', 'l.lev_id')
            ->join('subjects_teachers as st', 'lst.st_id', '=', 'st.st_id')
            ->join('periods as p', 'lst.per_id', '=', 'p.per_id')
            ->select('lst.lst_id', 'l.lev_name', 'l.lev_parallel', 'st.sub_id', 'st.tea_id', 
            'p.per_name', 'p.per_letter')
            ->where('t.tea_lastName','LIKE','%'.$searchText.'%')
            ->orderBy('l.lev_name','asc')
            ->orderBy('l.lev_parallel','asc')
            ->paginate(7);
        } 
        return view('levels_subjects_teachers.index', compact('levels', 'subjectsteachers', 'periods', 'searchText',  
        'levels_subjects_teachers'));
    }
}
