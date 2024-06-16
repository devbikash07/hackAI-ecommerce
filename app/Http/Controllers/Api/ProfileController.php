<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\User;

class ProfileController extends Controller
{
    public function test() {
        return response()->json([ 'message' => 'Test' ]);
    }

    public function changePassword(ProfileRequest $request) : \Illuminate\Http\JsonResponse
    {
        $user = User::find($request->user_id);

        $old_password = $request->old_password;

        if (!\Hash::check($old_password, $user->password)) {
            return response()->json([ 'message' => 'Old password is incorrect' ], 422);
        }

        $user->password = bcrypt($request->password);
        $user->save();
        
        return response()->json([ 'message' => 'Profile updated successfully' ]);
    }
}
