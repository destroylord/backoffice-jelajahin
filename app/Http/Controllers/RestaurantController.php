<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantRequest;
use App\Models\{City, Province, Restaurant};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::orderBy('created_at', 'DESC')->get();
        return view('restaurant.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('restaurant.create', compact('provinces'));
    }

    public function getCity($id)
    {
        $city = City::where('province_id', $id)->get();

        return response()
                    ->json([
                        'data' => $city
                    ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantRequest $request)
    {
        $file = $request->file('image');

        $attr = $request->all();
        $fileName = date('YmdHi').".".$file->getClientOriginalExtension();
        $path = $file->storeAs('restaurant', $fileName);

        $attr['image'] = $path;

        dd($attr);

        Restaurant::create($attr);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        $provinces = Province::all();
        return view('restaurant.edit', compact('restaurant','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(RestaurantRequest $request, Restaurant $restaurant)
    {
        $attr = $request->all();
        $file = $request->file('image');

        if ($request->hasFile('image')) {
            Storage::delete($restaurant->image);
            $image = $file->store('restaurant');
        } else {
            $image = $restaurant->image;
        }

        $attr['image'] = $image;

        $restaurant->update($attr);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurantId = Restaurant::findOrFail($id);
        Storage::delete($restaurantId->image);
        $restaurantId->delete();

        return back();
    }
}
