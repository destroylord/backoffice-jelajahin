<?php

namespace App\Http\Controllers;

use App\Mail\{HostApprovedMail, HostRejectMail};
use App\Models\Host;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        // dd($findHost->email);
        $findHost->update([
            'status' => 1, // 1
            'verified_date' => Carbon::now()
        ]);


        Mail::to($findHost->email)->send(new HostApprovedMail($findHost));

        return redirect()
                ->route('host.index');

    }

    public function updateStatusReject($id)
    {

        $findHost = Host::find($id);

        $findHost->update([
            'status' => 2, // 0
            'updated_at' => now()
        ]);

        Mail::to($findHost->email)->send(new HostRejectMail($findHost));

        return redirect()
                ->route('host.index');

    }


    public function review($id)
    {
        $host = Host::find($id);
        return view('host.review', compact('host'));
    }
}
