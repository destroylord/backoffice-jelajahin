<?php

namespace App\Http\Controllers;

use App\Models\CategoryEvent;
use Illuminate\Http\Request;

class CategoryEventController extends Controller
{
    public function index()
    {
        return view("categoryEvent.index");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        CategoryEvent::create([
            'name' =>$request->name
        ]);
        return back();
    }

    public function show()
    {
        
    }
}
