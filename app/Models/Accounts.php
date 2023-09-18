<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    //table names
    protected $fillable = ['invoiceNumber','category','by_agent','refNumber','receiveFrom','debit','credit','description','receiveby','paymentSystem'];

}
