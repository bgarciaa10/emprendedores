<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    protected $table = "product";
    public $timestamps = false;
    protected $fillable = ["id_product","name_product", "description_product", "precio_venta",
        "precio_ingreso", "rutaImg", "category_id_category"];

    protected $primaryKey = "id_product";
}
