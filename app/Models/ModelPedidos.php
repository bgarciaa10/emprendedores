<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ModelPedidos extends Model
{
    protected $table = "pedido";
    public $timestamps = false;
    protected $fillable = ["codigo","subtotal", "impuesto", "total", "estado", "users_id"];


    public function user(){
        return $this->belongsTo("App/User");
    }

    public function detalles(){
        return $this->hasMany("App/Detalles");
    }
}
