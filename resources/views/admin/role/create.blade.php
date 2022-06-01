
@extends('layouts.app')

@extends('layouts.header')

@extends('layouts.menu_vertical')

@section('content')
    <div class="container-fluid py-4">
        <div class="row main-left mb-3">
            <div class="col">
                <div class="p-3 border bg-menu_color">
                    <h5 class="mb-0">Cadastrar Cargo</h5>
                </div>
            </div>
        </div>
        <div class="row main-left mb-3 pt-4">
            <div class="col">
                <form action="{{ route('role.store') }}" method="POST" class="needs-validation" novalidate>
                    @include('admin.role.__form');
                </form>
            </div>
        </div>
    </div>
@endsection
