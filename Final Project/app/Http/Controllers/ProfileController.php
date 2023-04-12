<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{   
    public function index()
    {
        $users = User::all();
        return view('pages.dashboard-profile',compact('users'));
    }


    public function updateProfile(Request $request, User $user)
    {
        $loggedInUser = Auth::user();

        if (!$loggedInUser->can('edit all profile') && $loggedInUser->id != $user->id){
            return response()->json(['message' => "You can't edit this profile"], 403);
        }

        $request['password'] = Hash::make($request->password);

        $user->update($request->all());

        return redirect()->back()->with('success', 'Profile Updated Successfully');;
    }

    public function deleteProfile(User $user)
    {
        $user->delete();
        Auth::logout();
        return view('pages.register')->with('success', 'Account Deleted Successfully');;
    }
}
