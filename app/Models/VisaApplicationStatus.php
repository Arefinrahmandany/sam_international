<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaApplicationStatus extends Model
{
    use HasFactory;



    protected $table = 'visa_application_statuses';

    //table names
    protected $fillable = ['passport_number','visa_status','issueDate','expiryDate'];




}
