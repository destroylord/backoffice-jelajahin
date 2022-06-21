<?php

namespace App\Http\Controllers;

use App\Models\TransactionConfirmation;
use Illuminate\Http\Request;

class TransactionConfirmationController extends Controller
{
    public function index()
    {
        $transactionConfirms = TransactionConfirmation::all();
        return view('transaction.index', compact('transactionConfirms'));
    }

    public function updateAction()
    {

    }
}
