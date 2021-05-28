<?php

namespace App\Http\Controllers;

use App\Models\ModeloDetalle;
use App\Models\ModelPedido;
use App\Models\ModelPedidos;
use App\Models\ModelProduct;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function add(Request $request){

        $product = ModelProduct::find($request->id_product);
        Cart::add(
            $product->id_product,
            $product->name_product,
            $product->precio_venta,
            1,
            array("id_product"=>$product->id_product)
        );
        return back()->with('succes', "$product->name_product !Se agrego con exito al carrito de compras");
    }

    public function cart(){
        $params = [
          'title' => 'Shopping Cart Checkout'
        ];
        return view('Cart.checkout')->with($params);
    }

    public function removeitem(Request $request){
        $product = ModelProduct::find($request->id);
        $curso = ModelProduct::where('id_product', $request->id)->firstOrFail();
        Cart::remove(['id'=>$request->id]);
        return back() -> with("succes ", "$product->nombre el carrito de compras");
    }

    public function clear(){
        Cart::clear();
        return back()->with('succes', "se ha vaciado el cart shooping");
    }

    public function procesarpedido(Request $request){

        if (Cart::getContent()->count()>0):

            $pedido = new ModelPedidos();
            $pedido->codigo = 'COD'.time();
            $pedido->subtotal = number_format(Cart::getSubtotal(), 2);
            $pedido->impuesto = number_format(Cart::getSubtotal()*0.12, 2);
            $pedido->total = number_format(Cart::getSubtotal(), 2);
            $pedido->estado = 0;
            $pedido->user_username = Auth::user()->id;
            $pedido->save();

            foreach (Cart::getContent() as $r):

                $detalle = new ModeloDetalle();
                $detalle->cantidad = $r->quantity;
                $detalle->product_id_product = $r->id;
                $detalle->pedido_id = $pedido->id;
                $detalle->save();
            endforeach;

            Cart::clear();
            return view('Cart.comfirmacion')->with([
                'pedido'=>$pedido->codigo,
                'name' => $r->name,
            ]);
        else:
            return redirect('Cart.checkout');
                endif;
//        return view('Cart.checkout');
    }
}
