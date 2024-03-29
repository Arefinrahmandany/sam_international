<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaSubmission extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function country()
        {
            return  $this-> belongsTo(countries::class,'applyingcountry','id');
        }

}
