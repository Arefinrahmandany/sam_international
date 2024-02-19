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

}
