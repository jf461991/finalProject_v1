<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Rol;
use App\Http\Requests\UserFormRequest;
use Flash;

class UserController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {
        if ($request) {
            $searchText = trim((string)$request->get('searchText'));
            $users = DB::table('users as u')
            ->join('roles as r', 'u.rol_id', '=', 'r.rol_id')
            ->select('u.id', 'u.name', 'u.lastName', 'u.idCard', 'u.email', 'u.password', 'r.rol_name')
            ->where('u.name','LIKE','%'.$searchText.'%')
            ->orwhere('u.lastName','LIKE','%'.$searchText.'%')
            ->orwhere('u.idCard','LIKE','%'.$searchText.'%')
            ->orderBy('u.lastName','asc')
            ->paginate(7);

            return view('users.index', compact('users','searchText'));
        } 
    }

    public function create() {
        
        $roles = DB::table('roles')->where('rol_id', '>', '0')->get();
        return view("users.create", compact('roles'));
    }

    public function store(UserFormRequest $request) {
        $user = new User;
        $user -> rol_id = $request->get('rol_id');
        $user -> name = $request->get('name');
        $user -> lastName = $request->get('lastName');
        $user -> idCard = $request->get('idCard');
        $user -> email = $request->get('email');
        $user -> password = bcrypt($request->get('password'));
        $user -> save();
        return redirect(route('users.index'));
    }

    public function show($id) {
        return view('users.show',['user'=>User::findOrFail($id)]);
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        $roles = DB::table('roles')->where('rol_id', '>', '0')->get();
        return view('users.edit',["user"=>$user, "roles"=>$roles]);

    }

    public function update(UserFormRequest $request, $id) {
        $user = User::findOrFail($id);
        $user -> rol_id = $request->get('rol_id');
        $user -> name = $request->get('name');
        $user -> lastName = $request->get('lastName');
        $user -> idCard = $request->get('idCard');
        $user -> email = $request->get('email');
        $user -> password = bcrypt($request->get('password'));
        $user -> update();
        return redirect(route('users.index'));
    }

    public function destroy($id) {
        
        $user = User::where('id', $id)->delete();
        Flash::success('Eliminado exitosamente.');
        return redirect(route('users.index'));
    }
    
}
