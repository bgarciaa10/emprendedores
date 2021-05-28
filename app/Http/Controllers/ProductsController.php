<?php

namespace App\Http\Controllers;

use App\Models\ModelAuthRoles;
use App\Models\ModeloDetalle;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $joinDatosEnviados = ModeloDetalle::join('product','detalles.product_id_product','product.id_product')->
        join('pedido','detalles.pedido_id','pedido.id')->
        select('detalles.cantidad', 'product.name_product','pedido.codigo'
        )->get();
        return view('/home',  compact('joinDatosEnviados'));
    }

    public function envioPrueba()
    {
        $joinDatosEnviados = ModeloDetalle::join('product','detalles.product_id_product','product.id_product')->
        join('pedido','detalles.pedido_id','pedido.id')->
        select('detalles.cantidad', 'product.name_product','pedido.codigo'
        )->get();
        return view('/home',  compact('joinDatosEnviados'));
    }
}
