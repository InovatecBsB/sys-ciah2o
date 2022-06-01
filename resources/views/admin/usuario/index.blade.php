
@extends('layouts.app')

@extends('layouts.header')

@extends('layouts.menu_vertical')

@section('content')
    <div class="container-fluid py-4">
        <div class="row main-left mb-3">
            <div class="col">
                <div class="p-3 border bg-menu_color">
                    <h5 class="mb-0 text-font_menu_color">Lista de usuarios</h5>
                </div>
            </div>
        </div>
{{--        @if(session()->has('verifica_papel'))--}}
{{--            <x-message.alert type="danger" message="Alerta !" />--}}
{{--        @endif--}}
        @if(session()->has('sucessos'))
            <x-message.alert type="success" message=" " />
        @endif
{{--        @if(session()->has('error'))--}}
{{--            <x-message.alert type="warning" message=" " />--}}
{{--        @endif--}}
        <div class="row main-left mb-3 pt-4">
            <div class="col">
                <a class="btn btn-sm btn-greenligth p-2 text-font_menu_color" href="{{ route('user.create') }}"><i class="fas fa-user-gear"></i> Criar novo Usuario</a>
            </div>
        </div>
        <div class="row main-left">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead class="bg-menu_color">
                        <tr class="text-font_menu_color">
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>CPF</th>
                            <th>Perfil</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->cpf }}</td>
                                @if($user->roles()->exists())
                                    @foreach($user->roles as $role)
                                            <td>{{ $role->name }}</td>
                                    @endforeach
                                @else
                                    <td></td>
                                @endif
                            <td>{{ $user->status }}</td>
                            <td>
                                <a class="btn btn-sm btn-outline-dark" href="{{ route('user.edit',['user'=>$user->id]) }}"><i class="fas fa-pen-to-square"></i> Edit</a>
                                <a class="btn btn-sm btn-outline-dark" href="{{ route('user.role',['user'=>$user->id]) }}">Perfil</a>
                                <a class="btn btn-sm btn-outline-primary" href=""><i class="fas fa-network-wired"></i> Rede</a>
                                <a class="btn btn-sm btn-outline-danger" href=""><i class="fas fa-trash-can"> </i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Roles') }}</div>--}}

{{--                    <div class="card-body">--}}

{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
