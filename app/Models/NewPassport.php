<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class NewPassport extends Model
{
    use HasFactory, Notifiable;



    protected $table = 'new_passports';

    //table names
    //protected $fillable = ['passport_number','name','email','phone','address','applying_country','agent_via','amount','photos'];
    protected $guarded =[];

    // hidden for api
    protected $hidden = ['phone','email'];




}
