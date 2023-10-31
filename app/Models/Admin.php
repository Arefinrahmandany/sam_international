<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends User
{
    use HasFactory, Notifiable;

    protected $guarded =[];

    // get user role

    public function roles()
    {
        return  $this -> belongsTo(Roles::class,'role_id','id');
    }

}
