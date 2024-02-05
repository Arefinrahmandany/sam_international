<?php

namespace App\Models;

use App\Models\Roles;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends User
{
    use HasFactory;

    protected $guarded =[];

        // get user role

        public function roles()
        {
            return  $this -> belongsTo(Roles::class,'role_id','id');
        }

}
