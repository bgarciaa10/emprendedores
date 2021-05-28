<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestAuthRoles;
use App\Models\ModelAuthRoles;
use App\Models\ModelRoles;
use App\Models\ModelUsers;
use Illuminate\Http\Request;

class AuthRolesController extends Controller
{
    public function index()
    {
        $joinDatosEnviados = ModelAuthRoles::join('roles','role_user.role_id','roles.id')->
        join('users','role_user.user_id','users.id')->
         select('role_user.id', 'roles.description','users.name'
        )->get();
        return view('AuthRoles.index', compact('joinDatosEnviados'));
    }



    public function edit(Request $request, ModelAuthRoles $authroles)
    {
        $varRoles = ModelRoles::all();
        $varUsers = ModelUsers::all();
        return view('AuthRoles.edit', compact('authroles', 'varRoles', 'varUsers'));
    }

    public function update(RequestAuthRoles $request, ModelAuthRoles $authroles)
    {
        $data = $request->validated();
        $authroles->fill($data);
        $authroles->save();
        return redirect()->route('authroles.index')->with('status', 'Datos actualizados');
    }
}
