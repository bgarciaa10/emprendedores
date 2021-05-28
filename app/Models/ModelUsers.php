<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ModelUsers extends Model
{
    protected $table = "users";
    public $timestamps = false;
    protected $fillable = ["id","name"
    ];

    protected $primaryKey = "id";

    public function pedidos(){
        return $this->belongsTo("App/Pedido");
    }

    public function roles(){
        return $this->belongsToMany("App/Role");
    }

    public function hasRole($role){
        if ($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }
}
