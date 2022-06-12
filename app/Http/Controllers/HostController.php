<?php

namespace App\Http\Controllers;

use App\Models\Host;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HostController extends Controller
{
    public function index()
    {

        $hosts = Host::all();
        return view('host.index', compact('hosts'));
    }

    public function updateStatusAcc($id)
    {
        $findHost = Host::find($id);

        $findHost->update([
            'status' => 1,
            'verified_date' => Carbon::now()
        ]);


        return redirect()
                ->route('host.index');

    }

    public function updateStatusReject($id)
    {
        $findHost = Host::find($id);

        $findHost->update([
            'status' => 0
        ]);


        return redirect()
                ->route('host.index');

    }


    public function review($id)
    {
        $host = Host::find($id);
        return view('host.review', compact('host'));
    }
}
