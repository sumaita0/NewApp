<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Show Edit Form
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    // Update Profile
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
            'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $user->profile_photo_path = $filename; // Save only the filename, not the full path
        }


        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }
}
