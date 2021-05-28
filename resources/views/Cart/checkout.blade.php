@extends('layouts.app')

@section('content')
    <div class="container" id="contenedor">
        <div class="encabeza2">
            <img id="imagen" src="storage/107831.png">
        </div>
        <div class="row">
            <div class="col-sm-12 bg-light">
                <div class="card-header"   style="color: #1b1e21; background-color: #4aa0e6; font-weight: bold">
                    <i class="fas fa-warehouse fa-1x"></i>Carrito de Compras
                </div>
                @if(count(Cart::getContent()))
                    <table class="table">
                        <thead>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Eliminar</th>
                        </thead>
                        <tbody>
                        @foreach(Cart::getContent() as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>
                                    <form action="{{route('cart.removeitem')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <button type="submit" class="btn btn-link btn-sm text-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="jumbotron text-center w-100">
                        <p>Carrito Vacio</p>
                        <p><a href="/" class="btn btn-success">Comprar</a></p>

                    </div>


                @endif
            </div>

            <div class="container">
                <div class="row mr-6">
                    <div class="col-sm-6" >
                        <form action="{{route('cart.clear')}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger rounded-pill mx-auto d-block">
                                Vaciar Carrito
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-6" >
                        <a href="{{route('cart.procesarpedido')}}" class="btn btn-primary rounded-pill">Procesar Pedido</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
