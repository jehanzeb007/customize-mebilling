<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\UserProfileUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        $data = [];
        $data['title'] = 'Profile';
        $data['user'] = user();

        return view("profile.index", $data);
    }

    public function updateProfile(UserProfileUpdateRequest $request)
    {
        try {
            $user = Auth::user();
            $user->name = $request->name;
            $user->email = $request->email;

            if ($request->has('password') && Hash::check($request->password, $user->password)) {
                $user->password = Hash::make($request->new_password);
                $user->save();
            }

            if ($request->has('profile_picture')) {
                if ($user->profile_picture) {
                    Storage::delete('public/' . $user->profile_picture);
                }

                $profile_picture = $request->file('profile_picture')->store('profile', 'public');
                $user->profile_picture = $profile_picture;
            }

            $user->update();
            return response()->json(['success' => true, 'message' => 'Your Profile has been Updated.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
