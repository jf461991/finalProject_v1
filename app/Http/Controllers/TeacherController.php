<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;
use App\Models\Rol;
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

            $searchText = trim((string)$request->get('searchText'));
            $teachers = DB::table('teachers as t')
            ->join('roles as r', 't.rol_id', '=', 'r.rol_id')
            ->select('t.tea_id', 't.tea_name', 't.tea_lastName', 't.tea_idCard', 't.tea_email', 
            'r.rol_name', 't.tea_photo', 't.tea_status')
            ->where('tea_lastName', 'LIKE', '%'.$searchText.'%')
            ->orwhere('tea_name', 'LIKE', '%'.$searchText.'%')
            ->orwhere('tea_idCard', 'LIKE', '%'.$searchText.'%')
            ->orderBy('tea_lastName', 'asc')
            ->orderBy('tea_name', 'asc')
            ->paginate(7);

            return view('teachers.index', compact('teachers', 'searchText'));
        } 
    }
    
    public function create() {

        $roles = Rol::all();
        return view("teachers.create", compact('roles')); 
    }
    //Función para el registro en la base de datos junto la Validación
    public function store(TeacherFormRequest $request) {
        $teacher = new Teacher;
        $teacher -> rol_id = $request->get('rol_id');
        $teacher -> tea_name = $request->get('tea_name');
        $teacher -> tea_lastName = $request->get('tea_lastName');
        $teacher -> tea_idCard = $request->get('tea_idCard');
        $teacher -> tea_birthDate = $request->get('tea_birthDate');
        $teacher -> tea_address = $request->get('tea_address');
        $teacher -> tea_city = $request->get('tea_city');
        $teacher -> tea_gender = $request->get('tea_gender');
        $teacher -> tea_phone = $request->get('tea_phone');
        $teacher -> tea_email = $request->get('tea_email');
        $teacher -> password = bcrypt($request->get('password'));
        if (request()->has('tea_photo')){
            $file = request()->file('tea_photo');
            $file->move(public_path().'/images/teachers/',$file->getClientOriginalName());
            $teacher -> tea_photo = $file -> getClientOriginalName();
        }
        $teacher -> tea_status = '1';
        $teacher -> save();

        return redirect(route('teachers.index'));
    }

    public function show($id) {
        $teacher = Teacher::findOrFail($id);
        $roles = Rol::all();
        return view('teachers.show', compact('teacher', 'roles'));
    }

    public function edit($id) {
        $teacher = Teacher::findOrFail($id);
        $roles = Rol::all();
        return view('teachers.edit', compact('teacher', 'roles'));
    }

    public function update(TeacherFormRequest $request, $id) {
        $teacher = Teacher::findOrFail($id);
        
        $teacher -> rol_id = $request->get('rol_id');
        $teacher -> tea_name = $request->get('tea_name');
        $teacher -> tea_lastName = $request->get('tea_lastName');
        $teacher -> tea_idCard = $request->get('tea_idCard');
        $teacher -> tea_birthDate = $request->get('tea_birthDate');
        $teacher -> tea_address = $request->get('tea_address');
        $teacher -> tea_city = $request->get('tea_city');
        $teacher -> tea_gender = $request->get('tea_gender');
        $teacher -> tea_phone = $request->get('tea_phone');
        $teacher -> tea_email = $request->get('tea_email');
        $teacher -> password = bcrypt($request->get('password'));
        if (request()->has('tea_photo')){
            $file = request()->file('tea_photo');
            $file->move(public_path().'/images/teachers/',$file->getClientOriginalName());
            $teacher -> tea_photo = $file -> getClientOriginalName();
        }
        $teacher -> tea_status = $request->get('tea_status');
        $teacher -> update();
        return redirect(route('teachers.index'));
        // return Redirect::to('personal/docentes');
    }

    public function destroy($id) {
        //Elimnar con Eloquent
        $teacher = Teacher::findOrFail($id);
        $teacher -> tea_status = '0';
        //$student -> delete();
        $teacher -> update();
        Flash::error('Eliminado exitosamente.');
        return redirect(route('teachers.index'));
    }
}
