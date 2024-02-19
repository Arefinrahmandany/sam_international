<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passports extends Model
{
    use HasFactory;

    protected $guarded =[];


    public function agents()
    {
        return $this->belongsTo(AgentsBd::class, 'agentsBD', 'id');
    }

    public function services()
    {
        return $this->belongsTo(Service::class, 'service', 'id');
    }
}
