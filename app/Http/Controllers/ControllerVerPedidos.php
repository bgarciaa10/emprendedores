<?php


namespace App\Http\Controllers;


use App\Models\ModelPedidos;

class ControllerVerPedidos extends Controller
{
    public function index(){
        $varVerPedido = ModelPedidos::
        select('pedido.codigo',
            'pedido.subtotal',
            'pedido.total')
            ->where('user_username',Auth()->id())->get();

        return view('Cart.verPedidos', compact('varVerPedido'));
    }
}
