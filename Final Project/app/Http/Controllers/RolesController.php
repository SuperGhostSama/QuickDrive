<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index(){
        $roles = Role::all()->pluck('name');

        return response()->json($roles);
    }
}