<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourRequest;
use App\Models\{Tour, Province};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('tour.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourRequest $request)
    {
        $file = $request->file('image');

        $attr = $request->all();
        $fileName = date('YmdHi').".".$file->getClientOriginalExtension();
        $path = $file->storeAs('tour', $fileName);

        $attr['image'] = $path;

        Tour::create($attr);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $provinces = Province::all();
        return view('tour.edit', compact('tour','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TourRequest $request, Tour $tour)
    {
        $attr = $request->all();
        $file = $request->file('image');

        if ($request->hasFile('image')) {
            Storage::delete($tour->image);
            $image = $file->store('tour');
        } else {
            $image = $tour->image;
        }

        $attr['image'] = $image;

        $tour->update($attr);

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourId = Tour::findOrFail($id);
        Storage::delete($tourId->image);
        $tourId->delete();

        return back();
    }
}
