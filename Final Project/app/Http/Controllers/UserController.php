<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
    $users = User::all();

    return view('pages.dashboard-users',compact('users'));
    }

    public function show(User $user){
        return $user->getRoleNames()[0];
    }

    public function assignRole(Request $request){
        $user = User::find($request->user_id);

        $user->syncRoles([$request->role]);

        return $this->index();
    }

    
}
