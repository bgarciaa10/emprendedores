<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ModelRoles extends Model
{
    protected $table = "roles";
    public $timestamps = false;
    protected $fillable = ["id","description"
    ];

    protected $primaryKey = "id";
}
