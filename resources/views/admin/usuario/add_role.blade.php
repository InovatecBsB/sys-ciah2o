
@extends('layouts.app')

@extends('layouts.header')

@extends('layouts.menu_vertical')

@section('content')
    <div class="container-fluid py-4">
        <div class="row main-left mb-3">
            <div class="col">
                <div class="p-3 border bg-menu_color">
                    <h5 class="mb-0 text-font_menu_color">Definição de Cargo para usuário</h5>
                </div>
            </div>
        </div>
        <div class="row main-left mb-3 pt-4">
            <div class="col">
                <form action="{{ route('user.role.add_role',['user'=>$nome_user->id]) }}" method="POST">
                    @csrf
                    <label class="form-label"><h5>Adiciona novo perfil do: {{ $nome_user->name }}</h5></label>
                    <select name="user_id" id="" class="form-select">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    <div class="py-3">
                        <button class="btn btn-sm btn-greenligth p-2" type="submit"><i class="fas fa-arrow-right-to-bracket"> </i>&nbsp; Adiciona Perfil</button>
                        {{--                    <i class="fa-solid fa-arrow-down-to-bracket"></i>--}}
                    </div>
                </form>
            </div>
        </div>
        <div class="row main-left">
            <div class="col-lg-12">
                <label class="form-label"><h5>Lista de Perfil para: {{ $nome_user->name }}</h5></label>
                <table class="table table-bordered">
                    <thead class="bg-menu_color">
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user_roles as $user_role)
                        <tr>
                            <td>{{ $user_role->name }}</td>
                            <td>{{ $user_role->description }}</td>
                            <td>
                                <a class="btn btn-sm btn-outline-danger" href=""><i class="fas fa-trash-can"> </i> Delete</a>
                            </td>
                        </tr>
                        {{--                        @foreach($permission as $key=>$per)--}}
                        {{--                        @endforeach--}}
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
