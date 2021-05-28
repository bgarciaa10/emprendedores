@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header"   style="color: #ffffff; background-color: #0d6efd; font-weight: bold">
                <i class="fas fa-warehouse fa-1x"></i>Detalle
            </div>

            <table class="table table-striped">
                @if(count($curso))
                    <ul class="text-center">
                        <li> Nombre: {{$curso[0]->name}}</li>
                        <li> Email: {{$curso[0]->email}}</li>
                        <li> Direccion: Barrios las nueves</li>
                        <li> Numero de telefono: 30948390</li>
                    </ul>

                    <thead>
                    <tr class="text-center" >

                        <th scope="col">{{__('Id Producto')}}</th>
                        <th scope="col">{{__('Nombre Producto')}}</th>
                        <th scope="col">{{__('Cantidad')}}</th>
                        <th scope="col">{{__('SubTotal')}}</th>



                    </tr>

                    </thead>
                @endif
                <tbody>
                @forelse( $curso as $enviados)
                    <tr class="text-center">
                        <!-- id_detalle":15,"cantidad":1,"product_id_product":22,"pedido_id":123 -->

                        <td>{{$enviados->id_product}}</td>
                        <td>{{$enviados->name_product}}</td>
                        <td>{{$enviados->cantidad}}</td>
                        <td>{{$enviados->precio_venta}}</td>


                    </tr>
                @empty
                    <p class="text-center">No existe registros</p>
                @endforelse
                <tr>
                    <td colspan="3"></td>
                    <td>Total: {{$curso[0]->subtotal}}</td>

                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td>Impuesto: {{$curso[0]->impuesto}}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

    </div>

@endsection
