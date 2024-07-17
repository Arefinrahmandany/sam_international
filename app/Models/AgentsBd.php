<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AgentsBd extends Model
{
    use HasFactory;

    protected $guarded =[];

    // Define the relationship with the Transaction model
    public function transactions()
    {
        return $this->hasMany(Transection::class, 'agent', 'id');
    }
    // Define the relationship with the Transaction model
    public function agents()
    {
        return $this->belongsTo(AgentsBd::class, 'agent', 'id');
    }

    public function passport()
    {
        return $this->hasOne(Passports::class,'agentsBD');
    }

}
