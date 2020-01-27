<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Level;
use App\Models\Teacher;
use App\Models\Period;
use App\Models\LevelTeacher;

use App\Http\Requests\LevelTeacherFormRequest;
use Flash;

class LevelTeacherController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {

        if ($request) {
            $teachers = Teacher::where('tea_status', '=', '1')->orderBy('tea_lastName', 'asc')->get();
            $levels = Level::where('lev_status', '=', '1')->orderBy('lev_name', 'asc')->get();
            $periods = Period::where('per_status', '=', '1')->get();

            $searchText = trim((string)$request->get('searchText'));
            $levels_teachers = DB::table('levels_teachers as lt')
            ->join('levels as l', 'lt.lev_id', '=', 'l.lev_id')
            ->join('teachers as t', 'lt.tea_id', '=', 't.tea_id')
            ->join('periods as p', 'lt.per_id', '=', 'p.per_id')
            ->select('lt.lt_id', 'lt.lt_status', 'l.lev_name', 'l.lev_parallel', 't.tea_name', 't.tea_lastName', 
            'p.per_name', 'p.per_letter')
            ->where('l.lev_name','LIKE','%'.$searchText.'%')
            ->orderBy('l.lev_name','asc')
            ->orderBy('l.lev_parallel','asc')
            ->paginate(7);
        } 
        return view('levels_teachers.index', compact('teachers', 'levels', 'periods', 'searchText',  
        'levels_teachers'));
    }
    

    public function create() {
        return view("levels_teachers.create");
    }

    public function store(LevelTeacherFormRequest $request) {
        $lev_id=$request->lev_id;
        $tea_id=$request->tea_id;
        $levelteacher = LevelTeacher::where('lev_id', $lev_id)
        ->where('tea_id', $tea_id)
        ->exists();
        if($levelteacher === true){
            Flash::error('La asignación ya existe.');
            return redirect(route('levels_teachers.index')); 
        }else{
            $levelteacher = new LevelTeacher;
            $levelteacher -> lev_id = $request->get('lev_id');
            $levelteacher -> tea_id = $request->get('tea_id');
            $levelteacher -> per_id = $request->get('per_id');
            $levelteacher -> lt_status = $request->get('lt_status');
            $levelteacher -> save();
            Flash::success('Asignación creada con éxito.');
            return redirect(route('levels_teachers.index'));
        }
    }

    public function show($id) {
        return view('levels_teachers.show',['levelteacher'=>LevelTeacher::findOrFail($id)]);
    }

    public function edit($id) {
        $levelteacher = LevelTeacher::findOrFail($id);
        $teachers = Teacher::where('tea_status', '=', '1')->orderBy('tea_lastName', 'asc')->get();
        $levels = Level::where('lev_status', '=', '1')->orderBy('lev_name', 'asc')->get();
        $periods = Period::where('per_status', '=', '1')->get();

        return view("levels_teachers.edit", compact('levelteacher', 'teachers', 
        'periods', 'levels'));

    }

    public function update(LevelTeacherFormRequest $request, $id) {
        $levelteacher = LevelTeacher::findOrFail($id);
        $levelteacher -> lev_id = $request->get('lev_id');
        $levelteacher -> tea_id = $request->get('tea_id');
        $levelteacher -> per_id = $request->get('per_id');
        $levelteacher -> lt_status = $request->get('lt_status');
        $levelteacher -> update();
        Flash::success('La asignación se ACTUALIZÓ correctamente.');
        return redirect(route('levels_teachers.index'));
    }

    public function destroy($id) {
        
        //$levelteacher = LevelTeacher::where('ls_id', $id)->delete();
        $levelteacher = LevelTeacher::findOrFail($id);
        $levelteacher -> lt_status = '0';
        $levelteacher -> update();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('levels_teachers.index'));
    }
}
