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
                        Registro de Productos
                    </div>
                    <div class="card-body">

                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul> @endif <form action="{{route('product.store')}}" id="dynamic_form" method="POST" novalidate enctype="multipart/form-data" >

                            @csrf

                            <div class="form-group">
                                <label for="name_product">Nombre Product</label>
                                <input class="form-control col-md-auto"  type="text"  name="name_product" id="name_product" value="{{old('name_product')}}" maxlength="50"
                                       required="required"
                                >
                                @if($errors->has('name_product'))
                                    <p class="text-danger">{{$errors->first('name_product')}}</p>
                                @endif
                            </div>
                                <div class="form-group">
                                    <label for="description_product">Descripcion Producto</label>
                                    <input class="form-control col-md-auto"  type="text"  name="description_product" id="description_product" value="{{old('description_product')}}" maxlength="50"
                                           required="required"
                                    >
                                    @if($errors->has('description_product'))
                                        <p class="text-danger">{{$errors->first('description_product')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="precio_venta">Precio Venta</label>
                                    <input class="form-control col-md-auto"  type="number"  name="precio_venta" id="precio_venta" value="{{old('precio_venta')}}" maxlength="50"
                                           required="required"
                                    >
                                    @if($errors->has('precio_venta'))
                                        <p class="text-danger">{{$errors->first('precio_venta')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="precio_ingreso">Precio Ingreso</label>
                                    <input class="form-control col-md-auto"  type="number"  name="precio_ingreso" id="precio_ingreso" value="{{old('precio_ingreso')}}" maxlength="50"
                                           required="required"
                                    >
                                    @if($errors->has('precio_ingreso'))
                                        <p class="text-danger">{{$errors->first('precio_ingreso')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    @csrf
                                    <label for="rutaImg">Ingrese una Imagen</label>
                                    <input class="form-control col-md-auto"  type="file"   name="rutaImg" id="rutaImg" maxlength="50"
                                           required="required"
                                    >
                                    @if($errors->has('rutaImg'))
                                        <p class="text-danger">{{$errors->first('rutaImg')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="category_id_category">Categoria</label>
                                    <select class="form-control" name="category_id_category" id="category_id_category" value="{{old('category_id_category')}}" required="required">

                                        @if(count($varCategory)>0)
                                            <option value="selected" > Seleccione Categoria
                                            @foreach($varCategory as $categorys)
                                                <option value="{{$categorys->id_category}}"> {{$categorys->name_category}}</option>
                                            @endforeach
                                        @else
                                            <option>No hay categorias disponibles</option>
                                        @endif
                                    </select>
                                </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a href="{{ url()->previous() }}"  class="btn btn-outline-secondary"><span> Cancelar</span></a>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
