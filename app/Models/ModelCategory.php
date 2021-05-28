<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{
    protected $table = "category";
    public $timestamps = false;
    protected $fillable = ["id_category","name_category"];

    protected $primaryKey = "id_category";
}
