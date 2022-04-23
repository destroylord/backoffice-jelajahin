<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        return view('tour.index');
    }

    public function create()
    {
        return view('tour.create');
    }
}
