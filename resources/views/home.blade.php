@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if(Auth::user()->hasRole('admin'))
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Registro Productos</h5>
                                            <p class="card-text">Ingreso de todos los registro de productos</p>
                                            <a href="{{route('product.create')}}" class="btn btn-success">Ir</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Mostrar Pedidos</h5>
                                            <p class="card-text">Visualizacion de los pedidos de todos los clientes</p>
                                            <a href="{{route('mostrarPedidos.index')}}" class="btn btn-success">Ir</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card ">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Usuariios</h5>
                                            <p class="card-text">Visualizacion de usuarios y roles de usuarios</p>
                                            <a href="{{route('authroles.index')}}" class="btn btn-success">Ir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div>Acceso usuario</div>
                            <a href="{{route('verPedido.index')}}" class="btn btn-primary">Soy Usuario</a>
                            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
