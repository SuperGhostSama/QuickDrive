<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
    $users = DB::table('users')->select('name', 'email')->get();

    return response()->json([
        'data' => $users
        ]);
    }
}
