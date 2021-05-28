@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header"   style="color: #1b1e21; background-color: #4aa0e6; font-weight: bold">
                <i class="fas fa-warehouse fa-1x"></i>Roles de Usuarios
            </div>

                <table class="table table-striped">

                    @if(count($joinDatosEnviados))
                        <thead>
                        <tr class="text-center" >

                            <th scope="col">{{__('Nombre Usuario')}}</th>
                            <th scope="col">{{__('Rol')}}</th>
                            <th scope="col">{{__('Editar')}}</th>
                        </tr>

                        </thead>
                    @endif
                    <tbody>
                    @forelse($joinDatosEnviados as $enviados)
                        <tr class="text-center">

                            <td>{{$enviados->name}}</td>
                            <td>{{$enviados->description}}</td>

                            <td>
                                <a href="{{route('authroles.edit',['authrole'=>$enviados])}}">
                                    <button type="button" class="btn btn-outline-success">{{__('Editar')}}</button>
                                </a>
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
