<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function update(UserRequest $request, User $user)
    {
        $userByid = Auth::user()->id;
        $user = User::find($userByid);

        $user->name = $request->name;

        $user->save();

        return back();
    }
}
