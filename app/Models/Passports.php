<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passports extends Model
{
    use HasFactory;

    protected $guarded =[];


    public function agent()
    {
        return $this->belongsTo(AgentsBd::class,'agentsBD');
    }

    public function servic()
    {
        return $this->belongsTo(Service::class, 'service');
    }


    public function mofas()
    {
        return $this->belongsTo(Mofa::class, 'passport', 'passport');
    }

    public function embassys()
    {
        return $this->belongsTo(Embassy::class, 'passport', 'passport');
    }

    public function userID()
    {
        return $this->belongsTo(Admin::class,'user_id');
    }

    public function trashBy()
    {
        return $this->belongsTo(Admin::class,'trash_by');
    }
}