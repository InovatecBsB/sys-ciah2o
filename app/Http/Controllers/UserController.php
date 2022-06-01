<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
    public function index()
    {
        $users = User::all()->load('roles');
        return view('admin.usuario.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('admin.usuario.register', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserValidateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserValidateRequest $request)
    {

        $user = User::create($request->all());
        if($user->exists()) {
            session()->flash('sucessos','Usuario cadastrado com sucesso!');
        }else{
            session()->flash('error','Error ao gravar no banco de dados!');
        }

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')->find($id);
        if (!$user)
            return redirect()->back();

        return view('admin.usuario.edit', compact('user'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_role(Request $request, $id)
    {

        $nome_user = User::find($id);
        $roles = Role::all();
        $user_roles = User::with('roles')->findOrFail($id)->roles;

        return view('admin.usuario.add_role', compact('roles', 'nome_user', 'user_roles'));
    }
}
