<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    //table names
    protected $fillable = ['invoiceNumber','receiveFrom','debit','credit','due','description','receiveby','paymentSystem'];

}
