<?php

namespace App\Http\Controllers;

use App\Http\Requests\HiddenGemRequest;
use App\Models\{City, Province, HiddenGem};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HiddenGemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hidden_gems = HiddenGem::orderBy('created_at', 'DESC')->get();
        return view('hidden_gem.index', compact('hidden_gems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('hidden_gem.create', compact('provinces'));
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
    public function store(HiddenGemRequest $request)
    {
        $file = $request->file('image');

        $attr = $request->all();
        $fileName = date('YmdHi').".".$file->getClientOriginalExtension();
        $path = $file->storeAs('hidden_gem', $fileName);

        $attr['image'] = $path;

        HiddenGem::create($attr);
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HiddenGem  $hidden_gem
     * @return \Illuminate\Http\Response
     */
    public function show(HiddenGem $hidden_gem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HiddenGem  $hidden_gem
     * @return \Illuminate\Http\Response
     */
    public function edit(HiddenGem $hidden_gem)
    {
        $provinces = Province::all();
        return view('hidden_gem.edit', compact('hidden_gem','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HiddenGem  $hidden_gem
     * @return \Illuminate\Http\Response
     */
    public function update(HiddenGemRequest $request, HiddenGem $hidden_gem)
    {
        $attr = $request->all();
        $file = $request->file('image');

        if ($request->hasFile('image')) {
            Storage::delete($hidden_gem->image);
            $image = $file->store('restaurant');
        } else {
            $image = $hidden_gem->image;
        }

        $attr['image'] = $image;

        $hidden_gem->update($attr);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HiddenGem  $hidden_gem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hidden_gemId = HiddenGem::findOrFail($id);
        Storage::delete($hidden_gemId->image);
        $hidden_gemId->delete();

        return back();
    }
}
