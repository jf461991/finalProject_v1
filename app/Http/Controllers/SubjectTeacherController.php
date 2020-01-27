<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Period;
use App\Models\SubjectTeacher;

use App\Http\Requests\SubjectTeacherFormRequest;
use Flash;

class SubjectTeacherController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {

        if ($request) {
            $teachers = Teacher::where('tea_status', '=', '1')->orderBy('tea_lastName', 'asc')->get();
            $subjects = Subject::where('sub_status', '=', '1')->orderBy('sub_name', 'asc')->get();
            $periods = Period::where('per_status', '=', '1')->get();

            $searchText = trim((string)$request->get('searchText'));
            $subjects_teachers = DB::table('subjects_teachers as st')
            ->join('subjects as s', 'st.sub_id', '=', 's.sub_id')
            ->join('teachers as t', 'st.tea_id', '=', 't.tea_id')
            ->join('periods as p', 'st.per_id', '=', 'p.per_id')
            ->select('st.st_id', 'st.st_status', 's.sub_name', 't.tea_name', 't.tea_lastName', 
            'p.per_name', 'p.per_letter')
            ->where('t.tea_lastName','LIKE','%'.$searchText.'%')
            ->orderBy('s.sub_name','asc')
            ->paginate(7);
        } 
        return view('subjects_teachers.index', compact('subjects', 'teachers', 'periods', 'searchText',  
        'subjects_teachers'));
    }
    

    public function create() {
        return view("subjects_teachers.create");
    }

    public function store(SubjectTeacherFormRequest $request) {
        $sub_id=$request->sub_id;
        $tea_id=$request->tea_id;
        $subjectteacher = SubjectTeacher::where('sub_id', $sub_id)
        ->where('tea_id', $tea_id)
        ->exists();
        if($subjectteacher === true){
            Flash::error('La asignación ya existe.');
            return redirect(route('subjects_teachers.index')); 
        }else{
            $subjectteacher = new SubjectTeacher;
            $subjectteacher -> sub_id = $request->get('sub_id');
            $subjectteacher -> tea_id = $request->get('tea_id');
            $subjectteacher -> per_id = $request->get('per_id');
            $subjectteacher -> st_status = $request->get('st_status');
            $subjectteacher -> save();
            Flash::success('Asignación creada con éxito.');
            return redirect(route('subjects_teachers.index'));
        }
    }

    public function show($id) {
        return view('subjects_teachers.show',['subjectteacher'=>SubjectTeacher::findOrFail($id)]);
    }

    public function edit($id) {
        $subjectteacher = SubjectTeacher::findOrFail($id);
        $teachers = Teacher::where('tea_status', '=', '1')->orderBy('tea_lastName', 'asc')->get();
        $subjects = Subject::where('sub_status', '=', '1')->orderBy('sub_name', 'asc')->get();
        $periods = Period::where('per_status', '=', '1')->get();

        return view("subjects_teachers.edit", compact('subjectteacher', 'teachers', 
        'subjects', 'periods'));

    }

    public function update(SubjectTeacherFormRequest $request, $id) {
        $subjectteacher = SubjectTeacher::findOrFail($id);
        $subjectteacher -> sub_id = $request->get('sub_id');
        $subjectteacher -> tea_id = $request->get('tea_id');
        $subjectteacher -> per_id = $request->get('per_id');
        $subjectteacher -> st_status = $request->get('st_status');
        $subjectteacher -> update();
        Flash::success('La asignación se ACTUALIZÓ correctamente.');
        return redirect(route('subjects_teachers.index'));
    }

    public function destroy($id) {
        
        //$subjectteacher = SubjectTeacher::where('ls_id', $id)->delete();
        $subjectteacher = SubjectTeacher::findOrFail($id);
        $subjectteacher -> st_status = '0';
        $subjectteacher -> update();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('subjects_teachers.index'));
    }
}
