<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Level;
use App\Http\Requests\LevelFormRequest;
use Flash;

class LevelController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {
        if ($request) {
            $query = trim((string)$request->get('searchText'));
            //$roles = DB::table('docente')->where('doc_nombre','LIKE','%'.$query.'%')
            $levels = DB::table('levels')
            ->where('lev_name','LIKE','%'.$query.'%')
            ->orderBy('lev_name', 'asc')
            ->paginate(7);
            return view('levels.index',["levels"=>$levels,"searchText"=>$query]);
        } 
    }

    public function create() {
        return view("levels.create");
    }

    public function store(LevelFormRequest $request) {
        $lev_name=$request->lev_name;
        $lev_parallel=$request->lev_parallel;
        $level = Level::where('lev_name', $lev_name)
        ->where('lev_parallel', $lev_parallel)
        ->exists();

        if($level === true){
            Flash::error('El registro ya existe');
            return redirect(route('levels.index'));
        }else{
            $level = new Level;
            $level -> lev_name = $request->get('lev_name');
            $level -> lev_parallel = $request->get('lev_parallel');
            $level -> lev_status = $request->get('lev_status');
            $level -> save();
            Flash::success('Grado creado con éxito!');
            return redirect(route('levels.index'));
        }
    }

    public function show($id) {
        return view('levels.show',['level'=>Level::findOrFail($id)]);
    }

    public function edit($id) {
        return view('levels.edit',['level'=>Level::findOrFail($id)]);

    }

    public function update(LevelFormRequest $request, $id) {
        $level = Level::findOrFail($id);
        $level -> lev_name = $request->get('lev_name');
        $level -> lev_parallel = $request->get('lev_parallel');
        $level -> lev_status = $request->get('lev_status');
        $level -> update();
        return redirect(route('levels.index'));
    }

    public function destroy($id) {
        
        //Elimnar con Eloquent
        //$level = Level::where('lev_id', $id)->delete();
        $level = Level::findOrFail($id);
        $level -> lev_status = '0';
        $level -> update();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('levels.index'));
    }
    
}