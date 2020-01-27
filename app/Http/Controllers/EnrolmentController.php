<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Period;
use App\Models\Student;
use App\Models\Level;
use App\Models\Enrolment;

use App\Http\Requests\EnrolmentFormRequest;
use Flash;
use Carbon\Carbon;

class EnrolmentController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {

        if ($request) {
            //$students = Student::where('stu_status', '=', '1')->orderBy('stu_lastName', 'asc')->get();
            $levels = Level::where('lev_status', '=', '1')->orderBy('lev_name', 'asc')->get();
            $periods = Period::where('per_status', '=', '1')->get();
            $periodos = trim((string)$request->get('periodos'));
      	    $grados = trim((string)$request->get('grados'));

            $searchText = trim((string)$request->get('searchText'));
            $enrolments = DB::table('enrolments as e')
            ->join('students as s', 'e.stu_id', '=', 's.stu_id')
            ->join('levels as l', 'e.lev_id', '=', 'l.lev_id')
            ->join('periods as p', 'e.per_id', '=', 'p.per_id')
            ->select('e.enr_id', 'e.enr_status', 'e.enr_date', 's.stu_name', 's.stu_lastName', 
            's.stu_idCard', 'l.lev_name', 'l.lev_parallel', 'p.per_name', 'p.per_letter')
            ->where('s.stu_idCard','LIKE','%'.$searchText.'%')
            ->where('l.lev_id', 'LIKE', '%'.$grados.'%')
            ->where('p.per_id', 'LIKE', '%'.$periodos.'%')
            ->orderBy('s.stu_lastName','asc')
            ->orderBy('s.stu_name','asc')
            ->paginate(7);
        } 
        return view('enrolments.index', compact('levels', 'periods', 'enrolments', 'searchText'));
    }

    public function create() {
        //$students = Student::where('stu_status', '=', '1')->orderBy('stu_lastName', 'asc')->get();
        $now = Carbon::now('America/Guayaquil');
        $levels = Level::where('lev_status', '=', '1')->orderBy('lev_name', 'asc')->get();
        $periods = Period::where('per_status', '=', '1')->get();
        $students = DB::table('students as s')
        ->select(DB::raw('CONCAT(s.stu_idCard, " ",s.stu_lastName, " ",s.stu_name) as can'), 's.stu_id')
        ->where('s.stu_status', '=', '1')
        ->orderBy('s.stu_lastName', 'asc')
        ->orderBy('s.stu_name', 'asc')
        ->get();
        return view("enrolments.create", compact('students','levels', 'periods', 'now'));
    }

    public function store(EnrolmentFormRequest $request) {
        $enrolment = new Enrolment;
        $enrolment -> per_id = $request->get('per_id');
        $enrolment -> stu_id = $request->get('stu_id');
        $enrolment -> lev_id = $request->get('lev_id');
        $enrolment -> enr_date = $request->get('enr_date');
        $enrolment -> enr_status = '1';
        $enrolment -> save();
        Flash::success('Matrícula registrada');
        return redirect(route('enrolments.index'));
    }

    public function show($id) {
        return view('enrolments.show',['enrolment'=>Enrolment::findOrFail($id)]);
    }

    public function edit(Student $student) {
        //$enrolment = Enrolment::findOrFail($id);
        $students = DB::table('students as s')
        ->select(DB::raw('CONCAT(s.stu_lastName, " ",s.stu_name) as can'), 's.stu_id')
        ->where('s.stu_status', '=', '1')
        ->orderBy('s.stu_lastName', 'asc')
        ->orderBy('s.stu_name', 'asc')
        ->get();
        $levels = Level::where('lev_status', '=', '1')->orderBy('lev_name', 'asc')->get();
        $periods = Period::where('per_status', '=', '1')->get();

        return view("enrolments.edit", compact('enrolment', 'students', 
        'levels', 'periods'));

    }

    public function update(EnrolmentFormRequest $request, $id) {
        $enrolment = Enrolment::findOrFail($id);
        $enrolment -> per_id = $request->get('per_id');
        $enrolment -> stu_id = $request->get('stu_id');
        $enrolment -> lev_id = $request->get('lev_id');
        $enrolment -> enr_date = $request->get('enr_date');
        $enrolment -> enr_status = $request->get('enr_status');
        $enrolment -> update();
        Flash::success('Matrícula actualizada.');
        return redirect(route('enrolments.index'));
    }

    public function destroy($id) {
        
        $enrolment = Enrolment::findOrFail($id);
        $enrolment -> enr_status = '0';
        $enrolment -> update();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('enrolments.index'));
    }
    
}

