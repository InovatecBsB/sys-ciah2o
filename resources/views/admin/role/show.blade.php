
@extends('layouts.app')

@extends('layouts.header')

@extends('layouts.menu_vertical')

@section('content')
    <div class="container-fluid py-4">
        <div class="row main-left mb-3">
            <div class="col">
                <div class="p-3 border bg-menu_color">
                    <h5 class="mb-0">Permissão de gerenciamento para o cargo</h5>
                </div>
            </div>
        </div>
        <div class="row main-left mb-3 pt-4">
            <div class="col">
                <form action="{{ route('role.show.add',['role'=>$nome_role->id]) }}" method="POST">
                    @csrf
                    <label class="form-label"><h5>Adiciona novas Permissões do: {{ $nome_role->name }}</h5></label>
                    <select name="permission_id" id="" class="form-select">
                        @foreach($permissions as $permission)
                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                        @endforeach
                    </select>
                    <div class="py-3">
                        <button class="btn btn-sm btn-greenligth p-2" type="submit"><i class="fas fa-arrow-right-to-bracket"> </i>&nbsp; Adiciona Permissão</button>
    {{--                    <i class="fa-solid fa-arrow-down-to-bracket"></i>--}}
                    </div>
                </form>
            </div>
        </div>
        <div class="row main-left">
            <div class="col-lg-12">
                <label class="form-label"><h5>Lista de Permissão para: {{ $nome_role->name }}</h5></label>
                <table class="table table-bordered">
                    <thead class="bg-menu_color">
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($role_permissions as $per)
                        <tr>
                            <td>{{ $per->name }}</td>
                            <td>{{ $per->description }}</td>
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
