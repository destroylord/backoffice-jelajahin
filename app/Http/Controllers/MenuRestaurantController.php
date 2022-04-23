<?php

namespace App\Http\Controllers;

use App\Models\MenuRestaurant;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class MenuRestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu-restaurant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        dd($restaurants);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuRestaurant  $menuRestaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuRestaurant $menuRestaurant)
    {
        //
    }
}
