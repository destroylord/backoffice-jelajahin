<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionConfirmationController extends Controller
{
    public function index()
    {
        return view('transaction.index');
    }
}
