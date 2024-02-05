<?php

namespace App\Models;

use App\Models\AgentsBd;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passports_new extends Model
{
    use HasFactory;

    protected $guarded =[];


    public function Agents()
    {
        return $this->belongsTo(AgentsBd::class, 'agent_via', 'id');
    }

}
