
@extends('layouts.app')

@extends('layouts.header')

@extends('layouts.menu_vertical')

@section('content')
    <div class="container-fluid py-4">
        <div class="row main-left mb-3">
            <div class="col">
                <div class="p-3 border bg-menu_color">
                    <h5 class="mb-0">Sistema Integração Ciah2o</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row g-6 main-left mb-3">
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card bg-primary c-board">
                    <div class="card-header">{{ __('Usuários') }}</div>

                    <div class="card-body">
                            <h4>Cadastrados</h4>
                            <div class="row">
                                <div class="col"><h5>Hoje</h5></div><div class="col-auto"><h5>68</h5></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Total</h5></div><div class="col-auto"><h5>126</h5></div>
                            </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card bg-secondary c-board">
                    <div class="card-header">{{ __('Estoque') }}</div>

                    <div class="card-body">
                        <h5>Produto em estoque</h5>
                        <div class="row">
                            <div class="col"><h5>Total</h5></div><div class="col-auto"><h5>230</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card bg-success c-board">
                    <div class="card-header">{{ __('Vendas') }}</div>
                    <div class="card-body">
                        <h5>No Cartão</h5>
                        <div class="row">
                            <div class="col"><h5>R$ 1.660,00</h5></div><div class="col-auto"></div>
                        </div>
                        <div class="row">
                            <div class="col"><h5>Total</h5></div><div class="col-auto"><h5>78</h5></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card bg-danger c-board">
                    <div class="card-header">{{ __('Vendas') }}</div>

                    <div class="card-body">
                        <h4>Em dinheiro</h4>
                        <div class="row">
                            <div class="col"><h5>R$ 1.660,00</h5></div><div class="col-auto"></div>
                        </div>
                        <div class="row">
                            <div class="col"><h5>Total</h5></div><div class="col-auto"><h5>130</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card bg-warning c-board">
                    <div class="card-header">{{ __('Vendas') }}</div>

                    <div class="card-body">
                        <h4>Mais vendido</h4>
                        <div class="row">
                            <div class="col"><h5>R$ 1.660,00</h5></div><div class="col-auto"></div>
                        </div>
                        <div class="row">
                            <div class="col"><h5>Total</h5></div><div class="col-auto"><h5>240</h5></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
