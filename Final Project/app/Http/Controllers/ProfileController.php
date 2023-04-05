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

        return $this->index();
    }

    public function deleteProfile(User $user)
    {
        $logedInUser = Auth::user();

        if (!$logedInUser->can('delete all profile') && $logedInUser->id != $user->id){
            return response()->json([

                'Error' => "You can't delete this profile"
            ], 403);
        }

        $user->delete();
        return view('pages.register');
    }
}
