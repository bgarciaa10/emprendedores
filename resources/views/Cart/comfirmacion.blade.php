@extends(' layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center aling-items-center">
            <div class="col-sm-8">
                <h1>Confirmacion</h1>
                <p>Tu pedido tiene el codigo. {{$pedido}}</p>
                <p>Nombre Producto {{$name}}</p>
            </div>
        </div>
    </div>

@endsection
