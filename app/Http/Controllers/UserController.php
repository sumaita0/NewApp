<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\Service;

class UserController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $user = Auth::user();

       

        $services = Service::all();

        return view('user.dashboard', compact('user',  'services'));
    }

    // My Bookings
   //

    // Edit Profile
    public function editProfile()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    // Update Profile
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'profile_photo_path' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('name', 'email', 'phone');

        if ($request->hasFile('profile_photo_path')) {
            $fileName = time() . '.' . $request->profile_photo_path->extension();
            $request->profile_photo_path->move(public_path('images'), $fileName);
            $data['profile_photo_path'] = $fileName;
        }

        $user->update($data);

        return redirect()->route('user.dashboard')->with('success', 'Profile updated successfully!');
    }
}
