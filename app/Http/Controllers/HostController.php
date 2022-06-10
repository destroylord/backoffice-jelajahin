<?php

namespace App\Http\Controllers;

use App\Models\Host;
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
            'status' => 1
        ]);


        return back();

    }

    public function updateStatusReject($id)
    {
        $findHost = Host::find($id);

        $findHost->update([
            'status' => 0
        ]);


        return back();

    }
}
