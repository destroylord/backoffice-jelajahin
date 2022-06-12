<?php

namespace App\Http\Controllers;

use App\Models\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $experiences = Experience::all();
        return view('experience.index', compact('experiences'));
    }

    public function updateStatusAcc($id)
    {
        $findExperience = Experience::find($id);

        $findExperience->update([
            'accepted' => 1
        ]);


        return back();

    }

    public function updateStatusReject($id)
    {
        $findExperience = Experience::find($id);

        $findExperience->update([
            'accepted' => 0
        ]);


        return back();

    }

    public function review($id)
    {
        $experience = Experience::find($id);
        return view('experience.review', compact('experience'));
    }
}
