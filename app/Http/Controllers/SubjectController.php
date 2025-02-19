<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Subject;
use App\Http\Requests\SubjectFormRequest;
use Flash;

class SubjectController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {
        if ($request) {
            $query = trim((string)$request->get('searchText'));
            //$roles = DB::table('docente')->where('doc_nombre','LIKE','%'.$query.'%')
            $subjects = DB::table('subjects')
            ->where('sub_name','LIKE','%'.$query.'%')
            //->where('sub_status', '=', '1')
            ->orderBy('sub_name','asc')
            ->paginate(7);
            return view('subjects.index',["subjects"=>$subjects,"searchText"=>$query]);
        } 
    }

    public function create() {
        return view("subjects.create");
    }

    public function store(SubjectFormRequest $request) {
        $sub_name=$request->sub_name;
        $subject = Subject::where('sub_name', $sub_name)->exists();

        if($subject === true){
            Flash::error('El registro ya existe');
            return redirect(route('subjects.index'));
        }
        else{
            $subject = new Subject;
            $subject -> sub_name = $request->get('sub_name');
            $subject -> sub_status = $request->get('sub_status');
            $subject -> save();
            Flash::success('Asignatura creada con éxito!');
            return redirect(route('subjects.index'));
        }
    }

    public function show($id) {
        return view('subjects.show',['subject'=>Subject::findOrFail($id)]);
    }

    public function edit($id) {
        return view('subjects.edit',['subject'=>Subject::findOrFail($id)]);

    }

    public function update(SubjectFormRequest $request, $id) {
        $subject = Subject::findOrFail($id);
        $subject -> sub_name = $request->get('sub_name');
        $subject -> sub_status = $request->get('sub_status');
        $subject -> update();
        
        return redirect(route('subjects.index'));
    }

    public function destroy($id) {
        
        //Elimnar con Eloquent
        //$subject = Subject::where('sub_id', $id)->delete();
        $subject = Subject::findOrFail($id);
        $subject -> sub_status = '0';
        //$subject -> delete();
        $subject -> update();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('subjects.index'));
    }
}