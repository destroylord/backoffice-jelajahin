<?php

namespace App\Http\Controllers;

use App\Models\MenuRestaurant;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuRestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuRestaurant = MenuRestaurant::orderBy('created_at', 'DESC')->get();
        return view('menu-restaurant.index', compact('menuRestaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        return view('menu-restaurant.create', compact('restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');

        $attr = $request->all();
        $fileName = date('YmdHi').".".$file->getClientOriginalExtension();
        $path = $file->storeAs('menu-restaurant', $fileName);

        $attr['image'] = $path;

        MenuRestaurant::create($attr);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuRestaurant  $menuRestaurant
     * @return \Illuminate\Http\Response
     */
    public function show(MenuRestaurant $menuRestaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuRestaurant  $menuRestaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuRestaurant $menuRestaurant)
    {
        $restaurants = Restaurant::all();
        return view('menu-restaurant.edit', compact('menuRestaurant','restaurants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuRestaurant  $menuRestaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuRestaurant $menuRestaurant)
    {
        $attr = $request->all();
        $file = $request->file('image');

        if ($request->hasFile('image')) {
            Storage::delete($menuRestaurant->image);
            $image = $file->store('menu-restaurant');
        } else {
            $image = $menuRestaurant->image;
        }

        $attr['image'] = $image;

        $menuRestaurant->update($attr);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuRestaurant  $menuRestaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotelId = MenuRestaurant::findOrFail($id);
        Storage::delete($hotelId->image);
        $hotelId->delete();

        return back();
    }
}
