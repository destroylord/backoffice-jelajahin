<?php

namespace App\Http\Controllers;

use App\Models\CategoryEvent;
use Illuminate\Http\Request;

class CategoryEventController extends Controller
{
    public function index()
    {
        $data = CategoryEvent::all();
        return view('categoryEvent.index' , compact('data'));
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

    public function destroy($id)
    {
        /** $model = CategoryEvent::find();
        $model->delete();
        return redirect('category-event');
        */
        $data = CategoryEvent::find($id);
        $data->delete();
        return redirect('/category-events');
    }
}
