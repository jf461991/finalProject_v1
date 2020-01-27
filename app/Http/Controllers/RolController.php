<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Rol;
use App\Http\Requests\RolFormRequest;
use Flash;

class RolController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {
        if ($request) {
            $searchText = trim((string)$request->get('searchText'));
            //$roles = DB::table('docente')->where('doc_nombre','LIKE','%'.$query.'%')
            $roles = DB::table('roles')
            ->where('rol_name','LIKE','%'.$searchText.'%')
            ->paginate(7);
            return view('roles.index', compact('roles', 'searchText'));
        } 
    }

    public function create() {
        return view("roles.create");
    }

    public function store(RolFormRequest $request) {
        $rol = new Rol;
        $rol -> rol_name = $request->get('rol_name');
        $rol -> rol_slug = $request->get('rol_slug');
        $rol -> save();
        return redirect(route('roles.index'));
    }

    public function show($id) {
        return view('roles.show',['rol'=>Rol::findOrFail($id)]);
    }

    public function edit($id) {
        return view('roles.edit',['rol'=>Rol::findOrFail($id)]);

    }

    public function update(RolFormRequest $request, $id) {
        $rol = Rol::findOrFail($id);
        $rol -> rol_name = $request->get('rol_name');
        $rol -> rol_slug = $request->get('rol_slug');
        $rol -> update();
        return redirect(route('roles.index'));
    }

    public function destroy($id) {
        
        //Elimnar con Eloquent
        $rol = Rol::where('rol_id', $id)->delete();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('roles.index'));
    }
}
