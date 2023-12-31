<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;

    protected $table = 'agents';

    //table names
    //protected $fillable = ['name','phone','email','nid','debit','credit','balance','address'];

    protected $guarded =[];

    // hidden for api
    protected $hidden = ['phone', 'email'];

}
