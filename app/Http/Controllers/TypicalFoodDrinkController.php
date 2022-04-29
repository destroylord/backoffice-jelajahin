<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypicalFoodDrinkRequest;
use App\Models\{City, Province, TypicalFoodDrink};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TypicalFoodDrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typical_food_drinks = TypicalFoodDrink::orderBy('created_at', 'DESC')->get();
        return view('typical_food_drink.index', compact('typical_food_drinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('typical_food_drink.create', compact('provinces'));
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
    public function store(TypicalFoodDrinkRequest $request)
    {
        $file = $request->file('image');

        $attr = $request->all();
        $fileName = date('YmdHi').".".$file->getClientOriginalExtension();
        $path = $file->storeAs('typical_food_drink', $fileName);

        $attr['image'] = $path;

        TypicalFoodDrink::create($attr);
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypicalFoodDrink  $typical_food_drink
     * @return \Illuminate\Http\Response
     */
    public function show(TypicalFoodDrink $typical_food_drink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypicalFoodDrink  $typical_food_drink
     * @return \Illuminate\Http\Response
     */
    public function edit(TypicalFoodDrink $typical_food_drink)
    {
        $provinces = Province::all();
        return view('typical_food_drink.edit', compact('typical_food_drink','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypicalFoodDrink  $typical_food_drink
     * @return \Illuminate\Http\Response
     */
    public function update(TypicalFoodDrinkRequest $request, TypicalFoodDrink $typical_food_drink)
    {
        $attr = $request->all();
        $file = $request->file('image');

        if ($request->hasFile('image')) {
            Storage::delete($typical_food_drink->image);
            $image = $file->store('typical_food_drink');
        } else {
            $image = $typical_food_drink->image;
        }

        $attr['image'] = $image;

        $typical_food_drink->update($attr);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypicalFoodDrink  $typical_food_drink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typical_food_drinkId = TypicalFoodDrink::findOrFail($id);
        Storage::delete($typical_food_drinkId->image);
        $typical_food_drinkId->delete();

        return back();
    }
}
