<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;

        $user->update();

        return redirect('user');
    }
}
