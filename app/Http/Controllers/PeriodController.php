<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Period;
use App\Http\Requests\PeriodFormRequest;
use Flash;

class PeriodController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {
        if ($request) {
            $searchText = trim((string)$request->get('searchText'));
            //$roles = DB::table('docente')->where('doc_nombre','LIKE','%'.$query.'%')
            $periods = DB::table('periods')
            ->where('per_name','LIKE','%'.$searchText.'%')
            //->where('per_status', '=', '1')
            ->orderBy('per_name','asc')
            ->paginate(7);
            return view('periods.index', compact('periods', 'searchText'));
        } 
    }

    public function create() {
        return view("periods.create");
    }

    public function store(PeriodFormRequest $request) {
        $per_name=$request->per_name;
        $per_letter=$request->per_letter;
        $period = Period::where('per_name', $per_name)
        ->where('per_letter', $per_letter)
        ->exists();

        if($period === true){
            Flash::error('El registro ya existe');
            return redirect(route('periods.index'));
        }else{
            $period = new Period;
            $period -> per_name = $request->get('per_name');
            $period -> per_letter = $request->get('per_letter');
            $period -> per_startDate = $request->get('per_startDate');
            $period -> per_endDate = $request->get('per_endDate');
            $period -> per_status = $request->get('per_status');
            $period -> save();
            Flash::success('Período creado con éxito!');
            return redirect(route('periods.index'));
        }
    }

    public function show($id) {
        return view('periods.show',['period'=>Period::findOrFail($id)]);
    }

    public function edit($id) {
        return view('periods.edit',['period'=>Period::findOrFail($id)]);

    }

    public function update(PeriodFormRequest $request, $id) {
        $period = Period::findOrFail($id);
        $period -> per_name = $request->get('per_name');
        $period -> per_letter = $request->get('per_letter');
        $period -> per_startDate = $request->get('per_startDate');
        $period -> per_endDate = $request->get('per_endDate');
        $period -> per_status = $request->get('per_status');
        $period -> update();
        return redirect(route('periods.index'));
    }

    public function destroy($id) {
        
        //Elimnar con Eloquent
        //$period = Period::where('per_id', $id)->delete();
        $period = Period::findOrFail($id);
        $period -> per_status = '0';
        $period -> update();
        Flash::error('Eliminado exitosamente.');
        return redirect(route('periods.index'));
    }
}

