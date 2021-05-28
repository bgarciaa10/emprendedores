@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header"   style="color: #ffffff; background-color: #0d6efd; font-weight: bold">
                <i class="fas fa-warehouse fa-1x"></i>Pedidos
            </div>

            <table class="table table-striped">

                @if(count($joinDatosEnviados))
                    <thead>
                    <tr class="text-center" >

                        <th scope="col">{{__('Id')}}</th>
                        <th scope="col">{{__('Codigo')}}</th>
                        <th scope="col">{{__('SubTotal')}}</th>
                        <th scope="col">{{__('Usuario')}}</th>
                        <th scope="col">{{__('Detalle')}}</th>

                    </tr>

                    </thead>
                @endif
                <tbody>
                @forelse($joinDatosEnviados as $enviados)
                    <tr class="text-center">

                        <td>{{$enviados->id}}</td>
                        <td>{{$enviados->codigo}}</td>
                        <td>{{$enviados->subtotal}}</td>
                        <td>{{$enviados->name}}</td>
                        <td>
                            <form action="{{route("cart.index")}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$enviados->id}}">
                                <button type="submit" class="btn btn-outline-success">{{__('Detalle')}}</button>
                            </form>
                        </td>

                    </tr>
                @empty
                    <p class="text-center">No existe registros</p>
                @endforelse
                </tbody>
            </table>

            <a href="{{ url()->previous() }}"  class="btn btn-outline-secondary"><span> Cancelar</span></a>
        </div>
    </div>

    </div>

@endsection
