
@extends('layouts.app')

@extends('layouts.header')

@extends('layouts.menu_vertical')

@section('content')
    <div class="container-fluid py-4">
        <div class="row main-left mb-3">
            <div class="col">
                <div class="p-3 border bg-menu_color">
                    <h5 class="mb-0">Atualizar Cargo</h5>
                </div>
            </div>
        </div>
        <div class="row main-left mb-3 pt-4">
            <div class="col">
                <form action="{{ route('role.update', ['role'=>$role->id]) }}" method="POST" class="needs-validation" novalidate>
                    @method('PUT')
                    @include('admin.role.__form')
                </form>
            </div>
        </div>
    </div>
@endsection
