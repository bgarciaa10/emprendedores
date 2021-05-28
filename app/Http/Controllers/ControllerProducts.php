<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Models\ModelCategory;
use App\Models\ModelPedidos;
use App\Models\ModelProduct;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ControllerProducts extends Controller
{
   /* public function index()
    {
        $product = ModelProduct::paginate(5);
        return view('products.index')->with('product', $product);
    }
*/
    public function index(){

        $sqlComputadora = 'select * from product where category_id_category = "1"';
        $sqlMonitor = 'select * from product where category_id_category = "3"';
        $sqlTecladoMouse = 'select * from product where category_id_category = "4"';
        $datosEnviadosTecladoMouse = DB::select($sqlTecladoMouse);
        $datosEnviadosComputadora = DB::select($sqlComputadora);
        $datosEnviadosMonitor = Db::select($sqlMonitor);
        return view("welcome", compact(
            "datosEnviadosComputadora",
            "datosEnviadosMonitor",
                "datosEnviadosTecladoMouse"
        ));
    }

    public function create()
    {
        $varCategory = ModelCategory::all();
        return view('products.create', compact('varCategory'));
    }

    public function store(RequestProduct $request)
    {
        $varNameProduct = $request->get('name_product');
        $varDescriptionProduct = $request->get('description_product');
        $varPrecioVenta = $request->get('precio_venta');
        $varPrecioIngreso = $request->get('precio_ingreso');
        $varIdCategory = $request->get('category_id_category');
        $saveImg = $request->file('rutaImg')->store('public');
        $rutaImg = Storage::url($saveImg);
        $product = ModelProduct::create ([
            'name_product' => $varNameProduct,
            'description_product'  => $varDescriptionProduct,
            'precio_venta'  => $varPrecioVenta,
            'precio_ingreso' => $varPrecioIngreso,
            'rutaImg' => $rutaImg,
            'category_id_category' => $varIdCategory,

        ]);
        return redirect()->route('product.create')->with('status', 'Producto registrada');
    }


   /* public function store(RequestProduct $request)
    {

        $saveImg = $request->file('rutaImg')->store('public');
        $rutaImg = Storage::url($saveImg);

    return $rutaImg;
    }
*/
}
