<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewPassport extends Model
{
    use HasFactory;



    protected $table = 'new_passports';

    //table names
    protected $fillable = ['passport_number','name','email','phone','address','applying_country','agent_via','amount','photos'];

    // hidden for api
    protected $hidden = ['phone','email'];




}
