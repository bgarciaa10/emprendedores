<?php


namespace App\Http\Controllers;


use App\Models\ModeloDetalle;
use App\Models\ModelPedidos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControllerDetalles extends Controller
{


    public function index(Request $request){


        $curso = ModeloDetalle::join('pedido', 'detalles.pedido_id', 'pedido.id')->
            join('product', 'detalles.product_id_product','product.id_product')->
            join('users', 'pedido.user_username', 'users.id')->
            select('pedido.*',
            'users.*',
            'product.id_product',
            'detalles.cantidad',
            'product.precio_venta',
            'product.name_product'
            )
            ->where('pedido_id',$request->id)->get();



       return view('Cart.mostrarDetalle', compact('curso'));
    }


}
