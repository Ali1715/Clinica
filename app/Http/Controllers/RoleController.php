<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

date_default_timezone_set('America/La_Paz');

class RoleController extends Controller
{


    
    public function index()
    {
        //$users = Persona::where('tipoe', 1)->paginate(10);
        $users = User::paginate(10);
        return (view('admin/roles.index', compact('users')));
    }


    public function create()
    {
        $permisos = Permission::all();
        return (view('admin/roles.create', compact('permisos')));
    }


    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permisos);
       
        return redirect()->route('admin/roles.create')->with('info', 'Se registro rol correctamente');
    }


    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return (view('admin/roles.edit', compact('user', 'roles')));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
      
        return redirect()->route('roles.edit', $user)->with('info', 'Se asignaron los roles correctamente');

    }

    public function destroy($id)
    {
        //
    }
}
