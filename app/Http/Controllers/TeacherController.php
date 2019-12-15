<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;
use App\Http\Requests\TeacherFormRequest;
use Flash;

class TeacherController extends Controller
{
    //Metodos
    public function __construct() {

    }
    //Función para la busqueda
    public function index(Request $request) {
        if ($request) {
            $query = trim((string)$request->get('searchText'));
            $teachers = DB::table('teachers')
            ->where('tea_name','LIKE','%'.$query.'%')
            ->orwhere('tea_lastName','LIKE','%'.$query.'%')
            ->orwhere('tea_idCard','LIKE','%'.$query.'%')
            ->orderBy('tea_lastName', 'asc')
            ->paginate(7);
            return view('teachers.index',["teachers"=>$teachers, "searchText"=>$query]);
        } 
    }
    
    public function create() {
        
        return view("teachers.create"); 
    }
    //Función para el registro en la base de datos junto la Validación
    public function store(TeacherFormRequest $request) {
        $teacher = new Teacher;
        
        $teacher -> tea_name = $request->get('tea_name');
        $teacher -> tea_lastName = $request->get('tea_lastName');
        $teacher -> tea_idCard = $request->get('tea_idCard');
        $teacher -> tea_birthDate = $request->get('tea_birthDate');
        $teacher -> tea_address = $request->get('tea_address');
        $teacher -> tea_city = $request->get('tea_city');
        $teacher -> tea_gender = $request->get('tea_gender');
        $teacher -> tea_phone = $request->get('tea_phone');
        $teacher -> tea_email = $request->get('tea_email');

        if (request()->has('tea_photo')){
            $file = request()->file('tea_photo');
            $file->move(public_path().'/images/teachers/',$file->getClientOriginalName());
            $teacher -> tea_photo = $file -> getClientOriginalName();
        }
        $teacher -> save();
        return redirect(route('teachers.index'));
        
    }

    public function show($id) {
        return view('teachers.show',['teacher'=>Teacher::findOrFail($id)]);
    }

    public function edit($id) {
        
        return view('teachers.edit',['teacher'=>Teacher::findOrFail($id)]);

    }

    public function update(TeacherFormRequest $request, $id) {
        $teacher = Teacher::findOrFail($id);
        
        $teacher -> tea_name = $request->get('tea_name');
        $teacher -> tea_lastName = $request->get('tea_lastName');
        $teacher -> tea_idCard = $request->get('tea_idCard');
        $teacher -> tea_birthDate = $request->get('tea_birthDate');
        $teacher -> tea_address = $request->get('tea_address');
        $teacher -> tea_city = $request->get('tea_city');
        $teacher -> tea_gender = $request->get('tea_gender');
        $teacher -> tea_phone = $request->get('tea_phone');
        $teacher -> tea_email = $request->get('tea_email');

        if (request()->has('tea_photo')){
            $file = request()->file('tea_photo');
            $file->move(public_path().'/images/teachers/',$file->getClientOriginalName());
            $teacher -> tea_photo = $file -> getClientOriginalName();
        }
        $teacher -> update();
        return redirect(route('teachers.index'));
        // return Redirect::to('personal/docentes');
    }

    public function destroy($id) {
        //Elimnar con Eloquent
        $teacher = Teacher::where('tea_id', $id)->delete();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('teachers.index'));
    }
}
