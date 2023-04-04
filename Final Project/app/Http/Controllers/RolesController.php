<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function assignRole(Request $request, $id)
    {
        $user = User::find($id);
        if(!$user)
        {
            return response()->json(['message' => 'This user doesnt exist!']);
        }

        $user->syncRoles([$request->name]);

        return response()->json([
            'status' => true,
            'message' => 'Role assigned successfully!',
        ]);
    }

    public function removeRole(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['Message' => "This user doesn't exist!"]);
        }

        $roleName = $request->name;

        if(!$user->hasRole($roleName)){
            return response()->json(['Message' => "This user doesn't have {$roleName} role!"]);
        }

        // $user->removeRole($roleName);
        $user->syncRoles(['user']);

        return response()->json([
            '=======' => "==================== Remove Role ====================",
            'Message' => 'Role removed successfully!',
        ]);
    }
}