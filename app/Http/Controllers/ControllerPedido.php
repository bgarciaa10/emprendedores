<?php


namespace App\Http\Controllers;


use App\Models\ModelPedidos;

class ControllerPedido extends Controller
{

    public function index(){
        $joinDatosEnviados = ModelPedidos::join('users','pedido.user_username','users.id')->
        select('pedido.id', 'pedido.codigo', 'pedido.subtotal','users.name', 'pedido.estado'
        )->get();
        return view('Cart.mostrarPedidos',  compact('joinDatosEnviados'));
    }



}
