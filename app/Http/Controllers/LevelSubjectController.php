<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Level;
use App\Models\Subject;
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
            $subjects = Subject::where('sub_status', '=', '1')->orderBy('sub_name', 'asc')->get();
            $levels = Level::where('lev_status', '=', '1')->orderBy('lev_name', 'asc')->get();
            $periods = Period::where('per_status', '=', '1')->get();

            $searchText = trim((string)$request->get('searchText'));
            $levels_subjects = DB::table('levels_subjects as ls')
            ->join('levels as l', 'ls.lev_id', '=', 'l.lev_id')
            ->join('subjects as s', 'ls.sub_id', '=', 's.sub_id')
            ->join('periods as p', 'ls.per_id', '=', 'p.per_id')
            ->select('ls.ls_id', 'ls.ls_status', 'l.lev_name', 'l.lev_parallel', 's.sub_name', 
            'p.per_name', 'p.per_letter')
            ->where('l.lev_name','LIKE','%'.$searchText.'%')
            ->orderBy('l.lev_name','asc')
            ->orderBy('l.lev_parallel','asc')
            ->paginate(7);
        } 
        return view('levels_subjects.index', compact('subjects', 'levels', 'periods', 
        'levels_subjects', 'searchText'));
    }
    

    public function create() {
        return view("levels_subjects.create");
    }

    public function store(LevelSubjectFormRequest $request) {

        $lev_id=$request->lev_id;
        $sub_id=$request->sub_id;
        $levelsubject = LevelSubject::where('lev_id', $lev_id)
        ->where('sub_id', $sub_id)
        ->exists();
        if($levelsubject === true){
            Flash::error('ERROR: La asignación ya existe.');
            return redirect(route('levels_subjects.index'));  
        }else{
            $levelsubject = new LevelSubject;
            $levelsubject -> lev_id = $request->get('lev_id');
            $levelsubject -> sub_id = $request->get('sub_id');
            $levelsubject -> per_id = $request->get('per_id');
            $levelsubject -> ls_status = $request->get('ls_status');
            $levelsubject -> save();
            Flash::success('Asignación creada con éxito.');
            return redirect(route('levels_subjects.index'));
        }
    }

    public function show($id) {
        return view('levels_subjects.show',['levelsubject'=>LevelSubject::findOrFail($id)]);
    }

    public function edit($id) {
        $levelsubject = LevelSubject::findOrFail($id);
        $subjects = Subject::where('sub_status', '=', '1')->orderBy('sub_name', 'asc')->get();
        $levels = Level::where('lev_status', '=', '1')->orderBy('lev_name', 'asc')->get();
        $periods = Period::where('per_status', '=', '1')->get();

        return view("levels_subjects.edit", compact('levelsubject', 'subjects', 
        'levels', 'periods'));

    }

    public function update(LevelSubjectFormRequest $request, $id) {
        $levelsubject = LevelSubject::findOrFail($id);
        $levelsubject -> lev_id = $request->get('lev_id');
        $levelsubject -> sub_id = $request->get('sub_id');
        $levelsubject -> per_id = $request->get('per_id');
        $levelsubject -> ls_status = $request->get('ls_status');
        $levelsubject -> update();
        Flash::success('La asignación se ACTUALIZÓ correctamente.');
        return redirect(route('levels_subjects.index'));
    }

    public function destroy($id) {
        
        $levelsubject = LevelSubject::findOrFail($id);
        $levelsubject -> ls_status = '0';
        $levelsubject -> update();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('levels_subjects.index'));
    }
    
}