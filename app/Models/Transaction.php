<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['firstName', 'lastName', 'phoneNumber', 'amountToSend', 'amountToRecieve', 'status', 'state', 'postalCode', 'sendCurrency',  'recieveCurrency'];
}
