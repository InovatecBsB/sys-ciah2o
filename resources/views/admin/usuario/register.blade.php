
@extends('layouts.app')

@extends('layouts.header')

@extends('layouts.menu_vertical')

@section('content')
    <div class="container-fluid py-4">
        <div class="row main-left mb-3">
            <div class="col">
                <div class="p-3 border bg-menu_color text-font_menu_color">
                    <h5 class="mb-0">Cadastrar Usuario</h5>
                </div>
            </div>
        </div>

        <div class="row main-left mb-3 pt-4">
            <div class="col">
{{--                <a class="btn btn-sm btn-greenligth p-2 text-font_menu_color" href=""><i class="fas fa-user-gear"></i> Criar novo Usuario</a>--}}
            </div>
        </div>
        <div class="row main-left">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header  bg-menu_color text-font_menu_color">{{ __('Novo Usuário') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.store') }}">
                           @include('admin.usuario.__form')
                        </form>
                        <div class="fdescription required text-center fs-6">
                            Este formulário contém campos obrigatórios marcados com
                            <i class="fas fa-circle-exclamation text-blue mt-sm-2 fs-6" title="Campo obrigatório" aria-label="Campo obrigatório"></i>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
