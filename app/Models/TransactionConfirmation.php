<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionConfirmation extends Model
{
    use HasFactory;

    protected $table = 'transaction_experiences';

    protected $fillable = ['image', 'touris_amount', 'status'];
}
