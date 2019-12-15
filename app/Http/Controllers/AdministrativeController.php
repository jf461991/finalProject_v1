<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Administrative;
use App\Http\Requests\AdministrativeFormRequest;
use Flash;

class AdministrativeController extends Controller
{
    //Metodos
    public function __construct() {

    }
    //Función para la busqueda
    public function index(Request $request) {
        if ($request) {
            $query = trim((string)$request->get('searchText'));
            $administratives = DB::table('administratives')
            ->where('adm_name','LIKE','%'.$query.'%')
            ->orwhere('adm_lastName','LIKE','%'.$query.'%')
            ->orwhere('adm_idCard','LIKE','%'.$query.'%')
            ->orderBy('adm_lastName', 'asc')
            ->paginate(7);
            return view('administratives.index',["administratives"=>$administratives, "searchText"=>$query]);
        } 
    }
    
    public function create() {
        
        return view("administratives.create"); 
    }
    //Función para el registro en la base de datos junto la Validación
    public function store(AdministrativeFormRequest $request) {
        $administrative = new Administrative;
        
        $administrative -> adm_name = $request->get('adm_name');
        $administrative -> adm_lastName = $request->get('adm_lastName');
        $administrative -> adm_idCard = $request->get('adm_idCard');
        $administrative -> adm_birthDate = $request->get('adm_birthDate');
        $administrative -> adm_address = $request->get('adm_address');
        $administrative -> adm_city = $request->get('adm_city');
        $administrative -> adm_gender = $request->get('adm_gender');
        $administrative -> adm_phone = $request->get('adm_phone');
        $administrative -> adm_email = $request->get('adm_email');

        if (request()->has('adm_photo')){
            $file = request()->file('adm_photo');
            $file->move(public_path().'/images/administratives/',$file->getClientOriginalName());
            $administrative -> adm_photo = $file -> getClientOriginalName();
        }
        $administrative -> save();
        return redirect(route('administratives.index'));
        
    }

    public function show($id) {
        return view('administratives.show',['administrative'=>Administrative::findOrFail($id)]);
    }

    public function edit($id) {
        
        return view('administratives.edit',['administrative'=>Administrative::findOrFail($id)]);

    }

    public function update(AdministrativeFormRequest $request, $id) {
        $administrative = Administrative::findOrFail($id);
        
        $administrative -> adm_name = $request->get('adm_name');
        $administrative -> adm_lastName = $request->get('adm_lastName');
        $administrative -> adm_idCard = $request->get('adm_idCard');
        $administrative -> adm_birthDate = $request->get('adm_birthDate');
        $administrative -> adm_address = $request->get('adm_address');
        $administrative -> adm_city = $request->get('adm_city');
        $administrative -> adm_gender = $request->get('adm_gender');
        $administrative -> adm_phone = $request->get('adm_phone');
        $administrative -> adm_email = $request->get('adm_email');

        if (request()->has('adm_photo')){
            $file = request()->file('adm_photo');
            $file->move(public_path().'/images/administratives/',$file->getClientOriginalName());
            $administrative -> adm_photo = $file -> getClientOriginalName();
        }
        $administrative -> update();
        return redirect(route('administratives.index'));
        // return Redirect::to('personal/docentes');
    }

    public function destroy($id) {
        //Eliminar con Eloquent
        $administrative = Administrative::where('adm_id', $id)->delete();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('administratives.index'));
    }
}
