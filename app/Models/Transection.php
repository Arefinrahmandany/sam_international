<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transection extends Model
{
    use HasFactory;

    protected $guarded =[];

    // Define the relationship with the AgentsBd model
    public function agentDetails()
    {
        return $this->belongsTo(AgentsBd::class, 'agent', 'id');
    }

	public function trashBy()
    {
        return $this->belongsTo(Admin::class,'trash_by', 'id');
    }

}