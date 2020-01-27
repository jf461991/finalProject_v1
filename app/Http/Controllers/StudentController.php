<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Rol;
use App\Http\Requests\StudentFormRequest;
use Flash;

class StudentController extends Controller
{
    //Metodos
    public function __construct() {

    }
    //Función para la busqueda
    public function index(Request $request) {
        if ($request) {
            
            $searchText = trim((string)$request->get('searchText'));
            $students = DB::table('students as s')
            ->join('roles as r', 's.rol_id', '=', 'r.rol_id')
            ->select('s.stu_id', 's.stu_name', 's.stu_lastName', 's.stu_idCard', 's.stu_email', 
            'r.rol_name', 's.stu_photo', 's.stu_status')
            ->where('stu_lastName', 'LIKE', '%'.$searchText.'%')
            ->orwhere('stu_name', 'LIKE', '%'.$searchText.'%')
            ->orwhere('stu_idCard', 'LIKE', '%'.$searchText.'%')
            ->orderBy('stu_lastName', 'asc')
            ->orderBy('stu_name', 'asc')
            ->paginate(7);

            return view('students.index', compact('students', 'searchText'));
        } 
    }
    
    public function create() {

        $roles = Rol::all();
        return view('students.create', compact('roles')); 

        /* $users = DB::table('users as u')
        ->select(DB::raw('CONCAT(u.idCard," ",u.name," ",u.lastName) AS usuario'), 'u.id', 'u.name', 
        'u.lastName', 'u.idCard', 'u.email')
        ->where('u.rol_id', '=', '4')
        ->get(); */
       
        
    }
    //Función para el registro en la base de datos junto la Validación
    public function store(StudentFormRequest $request) {
        $student = new Student;
        $student -> rol_id = $request->get('rol_id');
        $student -> stu_name = $request->get('stu_name');
        $student -> stu_lastName = $request->get('stu_lastName');
        $student -> stu_idCard = $request->get('stu_idCard');
        $student -> stu_birthDate = $request->get('stu_birthDate');
        $student -> stu_address = $request->get('stu_address');
        $student -> stu_city = $request->get('stu_city');
        $student -> stu_gender = $request->get('stu_gender');
        $student -> stu_phone = $request->get('stu_phone');
        $student -> stu_lastLevelPass = $request->get('stu_lastLevelPass');
        $student -> stu_email = $request->get('stu_email');
        $student -> stu_password = bcrypt($request->get('stu_password'));
        if (request()->has('stu_photo')){
            $file = request()->file('stu_photo');
            $file->move(public_path().'/images/students/',$file->getClientOriginalName());
            $student -> stu_photo = $file -> getClientOriginalName();
        }
        $student -> stu_status = '1';
        $student -> save();
        
        return redirect(route('students.index'));
    }

    public function show($id) {
        $student = Student::findOrFail($id);
        $roles = Rol::all();
        return view('students.show', compact('student', 'roles'));
    }

    public function edit($id) {
        $student = Student::findOrFail($id);
        $roles = Rol::all();
        return view('students.edit', compact('student', 'roles'));
    }

    public function update(StudentFormRequest $request, $id) {
        $student = Student::findOrFail($id);
        $student -> rol_id = $request->get('rol_id');
        $student -> stu_name = $request->get('stu_name');
        $student -> stu_lastName = $request->get('stu_lastName');
        $student -> stu_idCard = $request->get('stu_idCard');
        $student -> stu_birthDate = $request->get('stu_birthDate');
        $student -> stu_address = $request->get('stu_address');
        $student -> stu_city = $request->get('stu_city');
        $student -> stu_gender = $request->get('stu_gender');
        $student -> stu_phone = $request->get('stu_phone');
        $student -> stu_lastLevelPass = $request->get('stu_lastLevelPass');
        $student -> stu_email = $request->get('stu_email');
        $student -> stu_password = bcrypt($request->get('stu_password'));
        if (request()->has('stu_photo')){
            $file = request()->file('stu_photo');
            $file->move(public_path().'/images/students/',$file->getClientOriginalName());
            $student -> stu_photo = $file -> getClientOriginalName();
        }
        $student -> stu_status = $request->get('stu_status');
        $student -> update();
        return redirect(route('students.index'));
        // return Redirect::to('personal/docentes');
    }

    public function destroy($id) {
        //Elimino con Query
        $student = Student::findOrFail($id);
        $student -> stu_status = '0';
        //$student -> delete();
        $student -> update();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('students.index'));
    }
}
