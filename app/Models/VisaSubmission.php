<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaSubmission extends Model
{
    use HasFactory;



    protected $table = 'visa_submissions';

    //table names
    protected $fillable = ['passport_number','applyingcountry','agency','application_date'];

}
