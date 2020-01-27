<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Administrative;
use App\Models\Rol;
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
            $searchText = trim((string)$request->get('searchText'));
            $administratives = DB::table('administratives as a')
            ->join('roles as r', 'a.rol_id', '=', 'r.rol_id')
            ->select('a.adm_id', 'a.adm_name', 'a.adm_lastName', 'a.adm_idCard', 'a.email', 
            'r.rol_name', 'a.adm_photo', 'a.adm_status')
            ->where('adm_lastName', 'LIKE', '%'.$searchText.'%')
            ->orwhere('adm_name', 'LIKE', '%'.$searchText.'%')
            ->orwhere('adm_idCard', 'LIKE', '%'.$searchText.'%')
            ->orderBy('adm_lastName', 'asc')
            ->orderBy('adm_name', 'asc')
            ->paginate(7);

            return view('administratives.index', compact('administratives', 'searchText'));
        } 
    }
    
    public function create() {
        
        $roles = Rol::all();
        return view("administratives.create", compact('roles')); 
    }
    //Función para el registro en la base de datos junto la Validación
    public function store(AdministrativeFormRequest $request) {
        $administrative = new Administrative;
        $administrative -> rol_id = $request->get('rol_id');
        $administrative -> adm_name = $request->get('adm_name');
        $administrative -> adm_lastName = $request->get('adm_lastName');
        $administrative -> adm_idCard = $request->get('adm_idCard');
        $administrative -> adm_birthDate = $request->get('adm_birthDate');
        $administrative -> adm_address = $request->get('adm_address');
        $administrative -> adm_city = $request->get('adm_city');
        $administrative -> adm_gender = $request->get('adm_gender');
        $administrative -> adm_phone = $request->get('adm_phone');
        $administrative -> email = $request->get('email');
        $administrative -> password = bcrypt($request->get('password'));
        if (request()->has('adm_photo')){
            $file = request()->file('adm_photo');
            $file->move(public_path().'/images/administratives/',$file->getClientOriginalName());
            $administrative -> adm_photo = $file -> getClientOriginalName();
        }
        $administrative -> adm_status = '1';
        $administrative -> save();
        return redirect(route('administratives.index'));
        
    }

    public function show($id) {
        $administrative = Administrative::findOrFail($id);
        $roles = Rol::all();
        return view('administratives.show', compact('administrative', 'roles'));
    }

    public function edit($id) {
        
        $administrative = Administrative::findOrFail($id);
        $roles = Rol::all();
        return view('administratives.edit', compact('administrative', 'roles'));

    }

    public function update(AdministrativeFormRequest $request, $id) {
        $administrative = Administrative::findOrFail($id);
        $administrative -> rol_id = $request->get('rol_id');
        $administrative -> adm_name = $request->get('adm_name');
        $administrative -> adm_lastName = $request->get('adm_lastName');
        $administrative -> adm_idCard = $request->get('adm_idCard');
        $administrative -> adm_birthDate = $request->get('adm_birthDate');
        $administrative -> adm_address = $request->get('adm_address');
        $administrative -> adm_city = $request->get('adm_city');
        $administrative -> adm_gender = $request->get('adm_gender');
        $administrative -> adm_phone = $request->get('adm_phone');
        $administrative -> email = $request->get('email');
        $administrative -> password = bcrypt($request->get('password'));
        if (request()->has('adm_photo')){
            $file = request()->file('adm_photo');
            $file->move(public_path().'/images/administratives/',$file->getClientOriginalName());
            $administrative -> adm_photo = $file -> getClientOriginalName();
        }
        $administrative -> adm_status = $request->get('adm_status');
        $administrative -> update();
        return redirect(route('administratives.index'));
        // return Redirect::to('personal/docentes');
    }

    public function destroy($id) {
        //Eliminar con Eloquent
        $administrative = Administrative::findOrFail($id);
        $administrative -> adm_status = '0';
        //$student -> delete();
        $administrative -> update();
        Flash::error('Eliminado exitosamente.');
        return redirect(route('administratives.index'));
    }
}
