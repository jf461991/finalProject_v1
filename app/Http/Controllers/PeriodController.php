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
            $query = trim((string)$request->get('searchText'));
            //$roles = DB::table('docente')->where('doc_nombre','LIKE','%'.$query.'%')
            $periods = DB::table('periods')
            ->where('per_name','LIKE','%'.$query.'%')
            ->paginate(7);
            return view('periods.index',["periods"=>$periods,"searchText"=>$query]);
        } 
    }

    public function create() {
        return view("periods.create");
    }

    public function store(PeriodFormRequest $request) {
        $period = new Period;
        $period -> per_name = $request->get('per_name');
        $period -> per_startDate = $request->get('per_startDate');
        $period -> per_endDate = $request->get('per_endDate');
        $period -> per_status = $request->get('per_status');
        $period -> save();
        return redirect(route('periods.index'));
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
        $period -> per_startDate = $request->get('per_startDate');
        $period -> per_endDate = $request->get('per_endDate');
        $period -> per_status = $request->get('per_status');
        $period -> update();
        return redirect(route('periods.index'));
    }

    public function destroy($id) {
        
        //Elimnar con Eloquent
        $period = Period::where('per_id', $id)->delete();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('periods.index'));
    }
}
