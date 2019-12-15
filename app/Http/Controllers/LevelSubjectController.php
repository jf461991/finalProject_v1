<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Period;
use App\Models\LevelSubject;

use App\Http\Requests\LevelSubjectFormRequest;
use Flash;

class LevelSubjectController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {

        if ($request) {
            
            $subjects = Subject::all();
            $levels = Level::all();
            $teachers = Teacher::all();
            $periods = Period::all();
            //$levels_subjects = LevelSubject::all();
            $searchText = trim((string)$request->get('searchText'));
            $levels_subjects = DB::table('levels_subjects_teachers as lst')
            ->join('levels as l', 'lst.lev_id', '=', 'l.lev_id')
            ->join('subjects as s', 'lst.sub_id', '=', 's.sub_id')
            ->join('teachers as t', 'lst.tea_id', '=', 't.tea_id')
            ->join('periods as p', 'lst.per_id', '=', 'p.per_id')
            ->select('lst.lesute_id', 'l.lev_name', 's.sub_name', 't.tea_name', 't.tea_lastName', 'p.per_name') //'u.photo'
            ->where('t.tea_lastName','LIKE','%'.$searchText.'%')
            ->orderBy('t.tea_lastName','desc')
            ->paginate(7);
        } 
        return view('levels_subjects.index', compact('subjects', 'levels', 'teachers', 'periods', 'searchText', 
        'levels_subjects'));
    }
    

    public function create() {
        $levels = Level::where('lev_id', '>', '0')->get();
        $subjects = Subject::where('sub_id', '>', '0')->get();
        $teachers = Teacher::where('tea_id', '>', '0')->get();
        $periods = Period::where('per_id', '>', '0')->get();

        return view("levels_subjects.create", compact('levels', 'subjects', 'teachers', 'periods'));
    }

    public function store(LevelSubjectFormRequest $request) {
        $levelsubject = new LevelSubject;
        $levelsubject -> lev_id = $request->get('lev_id');
        $levelsubject -> sub_id = $request->get('sub_id');
        $levelsubject -> tea_id = $request->get('tea_id');
        $levelsubject -> per_id = $request->get('per_id');
        $levelsubject -> save();
        return redirect(route('levels_subjects.index'));
    }

    public function show($id) {
        return view('levels_subjects.show',['levelsubject'=>LevelSubject::findOrFail($id)]);
    }

    public function edit($id) {
        $levelsubject = LevelSubject::findOrFail($id);
        $levels = DB::table('levels')->where('lev_id', '>', '0')->get();
        $subjects = DB::table('subjects')->where('sub_id', '>', '0')->get();
        $teachers = Teacher::where('tea_id', '>', '0')->get();
        $periods = DB::table('periods')->where('per_id', '>', '0')->get();

        return view("levels_subjects.edit", ["levels"=>$levels, "subjects"=>$subjects, "teachers"=>$teachers, 
        "periods"=>$periods, "levelsubject"=>$levelsubject]);

    }

    public function update(LevelSubjectFormRequest $request, $id) {
        $levelsubject = LevelSubject::findOrFail($id);
        $levelsubject -> lev_id = $request->get('lev_id');
        $levelsubject -> sub_id = $request->get('sub_id');
        $levelsubject -> tea_id = $request->get('tea_id');
        $levelsubject -> per_id = $request->get('per_id');
        $levelsubject -> update();
        return redirect(route('levels_subjects.index'));
    }

    public function destroy($id) {
        
        $levelsubject = LevelSubject::where('lesute_id', $id)->delete();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('levels_subjects.index'));
    }
    
}
