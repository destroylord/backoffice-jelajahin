<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Host;
use App\Models\Hotel;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $countRestaurant = Restaurant::count();
        $countHotel = Hotel::count();
        $countPendingHost = Host::where('status', '2')->count();
        $countPendingExperience = Experience::where('accepted', '2')->count();

        return view('welcome', compact('countRestaurant', 'countHotel', 'countPendingHost', 'countPendingExperience'));
    }
}
