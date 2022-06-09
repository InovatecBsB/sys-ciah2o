
@extends('layouts.app')

@extends('layouts.header')

@extends('layouts.menu_vertical')

@section('content')
    <div class="container-fluid py-4">
        <div class="row main-left mb-3">
            <div class="col">
                <div class="p-3 border bg-menu_color">
                    <h5 class="mb-0 text-font_menu_color">Listagem de Produtos</h5>
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
                <a class="btn btn-sm btn-greenligth p-2 text-font_menu_color" href="{{ route('produto.create') }}"><i class="fas fa-user-gear"></i> Criar novo Produto</a>
            </div>
        </div>
        <div class="row main-left">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead class="bg-menu_color">
                    <tr class="text-font_menu_color">
                        <th>Código</th>
                        <th>Categoria</th>
                        <th>Produto</th>
                        <th>Descriçao</th>
                        <th>Estoque</th>
                        <th>Preço</th>
                        <th>Açoes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produtos as $produto)

                        <tr>
                            <td>{{ $produto->codigo }}</td>
                            <td>{{ $produto->categoria }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->estoque }}</td>
                            <td>{{ $produto->preco }}</td>
                            <td>
                                <a class="btn btn-sm btn-outline-dark" href="{{ route('produto.edit',['produto'=>$produto->id]) }}"><i class="fas fa-pen-to-square"></i> Edit</a>
                                <a class="btn btn-sm btn-outline-primary" href=""><i class="fas fa-network-wired"></i> view</a>
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
