<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ModeloDetalle extends Model
{
    protected $table = "detalles";
    public $timestamps = false;
    protected $fillable = ["cantidad","product_id_product", "pedido_id"];


    public function user(){
        return $this->belongsTo("App/Pedido");
    }

    public function detalles(){
        return $this->hasMany("App/Produc");
    }

}
