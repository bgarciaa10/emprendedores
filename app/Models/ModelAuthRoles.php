<?php


namespace App\Models;


use CreateRolesTable;
use CreateUsersTable;
use Illuminate\Database\Eloquent\Model;

class ModelAuthRoles extends Model
{
    protected $table = "role_user";
    public $timestamps = false;
    protected $fillable = ["id","role_id", "user_id"
    ];

    protected $primaryKey = "id";


    public function CreateRolesTable(){
        return $this->hasOne(CreateRolesTable::class);
    }

    public function CreateUsersTable(){
        return $this->hasOne(CreateUsersTable::class);
    }

}
