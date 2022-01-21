<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class HomeController extends Controller
{
    public function index(){

        /* Role::create([
            'name'     => 'Super Administrador',
            'key_name' => 'superadmin'
        ]); */

        /* $role = new Role;
        $role -> name = 'Secretario General';
        $role -> key_name = 'secgeneral';
        $role  ->  save(); */

        $roles = Role::all() -> toArray();
/*         $roles = Role::where('key_name', 'superadmin') ->first()->toArray(); */

        $role = Role::find(3)->toArray();

        $role->name = 'Super prueba';
        $role->save();
        dd($roles);

        $nombre_completo = 'Emanuel Saucedo';
        return view('hola', compact('nombre_completo'));
    }
}
