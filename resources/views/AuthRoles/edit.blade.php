@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header" style="color: #1b1e21; background-color: #4aa0e6; font-weight: bold">
                        Actualización de datos
                    </div>
                    <div class="card-body">

                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                            <form action="{{route('authroles.update',['authroles'=>$authroles->id])}}" method="POST" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="role_id">Rol</label>
                                <select class="form-control" name="role_id" id="role_id" value="{{old('role_id')}}" required="required">

                                    @if(count($varRoles)>0)
                                        <option value="selected" > Seleccione Categoria
                                        @foreach($varRoles as $roles)
                                            <option value="{{$roles->id}}"> {{$roles->name}}</option>
                                        @endforeach
                                    @else
                                        <option>No hay categorias disponibles</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="user_id">Nombre Rol</label>
                                <select class="form-control" name="user_id" id="user_id" value="{{old('user_id')}}" required="required">

                                    @if(count($varUsers)>0)
                                        <option value="selected" > Seleccione Categoria
                                        @foreach($varUsers as $users)
                                            <option value="{{$users->id}}"> {{$users->name}}</option>
                                        @endforeach
                                    @else
                                        <option>No hay categorias disponibles</option>
                                    @endif
                                </select>
                            </div>
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a href="{{ url()->previous() }}"   class="btn btn-outline-secondary">Regresar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


