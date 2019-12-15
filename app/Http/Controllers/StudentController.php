<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
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
            $students = DB::table('students')
            ->where('stu_name','LIKE','%'.$searchText.'%')
            ->orwhere('stu_lastName','LIKE','%'.$searchText.'%')
            ->orwhere('stu_idCard','LIKE','%'.$searchText.'%')
            ->orderBy('stu_lastName', 'asc')
            ->paginate(7);

            return view('students.index', compact('students', 'searchText'));
        } 
    }
    
    public function create() {

        return view("students.create"); 

        /* $users = DB::table('users as u')
        ->select(DB::raw('CONCAT(u.idCard," ",u.name," ",u.lastName) AS usuario'), 'u.id', 'u.name', 
        'u.lastName', 'u.idCard', 'u.email')
        ->where('u.rol_id', '=', '4')
        ->get(); */
       
        
    }
    //Función para el registro en la base de datos junto la Validación
    public function store(StudentFormRequest $request) {
        $student = new Student;
        
        $student -> stu_name = $request->get('stu_name');
        $student -> stu_lastName = $request->get('stu_lastName');
        $student -> stu_idCard = $request->get('stu_idCard');
        $student -> stu_birthDate = $request->get('stu_birthDate');
        $student -> stu_address = $request->get('stu_address');
        $student -> stu_city = $request->get('stu_city');
        $student -> stu_gender = $request->get('stu_gender');
        $student -> stu_phone = $request->get('stu_phone');
        $student -> stu_email = $request->get('stu_email');

        if (request()->has('stu_photo')){
            $file = request()->file('stu_photo');
            $file->move(public_path().'/images/students/',$file->getClientOriginalName());
            $student -> stu_photo = $file -> getClientOriginalName();
        }
        $student -> save();
        return redirect(route('students.index'));
        
    }

    public function show($id) {
        return view('students.show',['student'=>Student::findOrFail($id)]);
    }

    public function edit($id) {
        
        return view('students.edit',['student'=>Student::findOrFail($id)]);

    }

    public function update(StudentFormRequest $request, $id) {
        $student = Student::findOrFail($id);
        
        $student -> stu_name = $request->get('stu_name');
        $student -> stu_lastName = $request->get('stu_lastName');
        $student -> stu_idCard = $request->get('stu_idCard');
        $student -> stu_birthDate = $request->get('stu_birthDate');
        $student -> stu_address = $request->get('stu_address');
        $student -> stu_city = $request->get('stu_city');
        $student -> stu_gender = $request->get('stu_gender');
        $student -> stu_phone = $request->get('stu_phone');
        $student -> stu_email = $request->get('stu_email');

        if (request()->has('stu_photo')){
            $file = request()->file('stu_photo');
            $file->move(public_path().'/images/students/',$file->getClientOriginalName());
            $student -> stu_photo = $file -> getClientOriginalName();
        }
        $student -> update();
        return redirect(route('students.index'));
        // return Redirect::to('personal/docentes');
    }

    public function destroy($id) {
        //Elimino con Query
        $student = Student::where('stu_id', $id)->delete();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('students.index'));
    }
}
