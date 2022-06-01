<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use function Sodium\add;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $roles = Role::all();
        return view('admin.role.lista', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo =  Role::create($request->all());
        if($cargo->exists()) {
            session()->flash('sucessos','Cadastrado com sucesso!');
        }else{
            session()->flash('error','Error ao gravar no banco de dados!');
        }
        return redirect()->route('lista.roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {


        //TODO aqui adiciona permissão na role
        if ($request->permission_id) {
            $role = Role::all()->find($id);
            $role->permissions()->attach($request->permission_id);
        }

        $nome_role = Role::find($id);
        $permissions = Permission::all();
        $role_permissions = Role::with('permissions')->findOrFail($id)->permissions;

//        $permissions = Role::find($id)->load('roles.permissions')->permissions->transform(function ($role){
//                return $role;
//        });
//        dd($permissions);

        return view('admin.role.show', compact('permissions','nome_role','role_permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $role = DB::table('roles')->find($id);
        if (!$role)
            return redirect()->back();

        return view('admin.role.edit', compact('role'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        DB::table('roles')->where('id',$id)->update($dados);
        session()->flash('sucessos','Atualizado com sucesso!');
        return redirect()->route('lista.roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $role = Role::findOrFail($id);
        if ($role->users()->exists() || $role->permissions()->exists()) {
            session()->flash('verifica_papel','Existem dados relacionados a esse cargo!');
            return redirect()->route('lista.roles');
        }else{
            $role->delete();
            session()->flash('sucessos','Cargo deletado com sucesso!');
//            $role->users()->detach();
//            $role->permissions()->detach();
//            Role::with('permissions')->findOrFail($id)->delete();

            return redirect()->route('lista.roles');
        }
    }
}
