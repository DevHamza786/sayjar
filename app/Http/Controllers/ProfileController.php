<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $emailVerified = $user->email_verified_at !== null;
        $phoneNumber = !empty($user->phone);
        $profileCompletionScore = $this->calculateProfileCompletion($emailVerified, $phoneNumber);
        return view('panel.profile.settings', compact('user', 'profileCompletionScore'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $user = User::find($request->userid);
        if ($request->hasFile('profile')) {
            if ($user->avatar) {
                Storage::delete('public/' . $user->avatar);
            }
            $path = $request->file('profile')->store('public/profile');
            $user->avatar = str_replace('public/', '', $path);
        }

        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        if ($user) {
            return redirect()->back()->with('success', 'Profile updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update profile.');
        }
    }

    private function calculateProfileCompletion($emailVerified, $phoneNumber)
    {
        $score = 0;

        // Check if the email is verified
        if ($emailVerified) {
            $score += 80; // Add 20 to the score if the email is verified
        } else {
            $score += 60; // Add 60 to the score if the email is not verified
        }

        // Check if a phone number is present
        if ($phoneNumber) {
            $score += 100; // Add 20 to the score if a phone number is present
        }

        // Ensure the score is not greater than 100
        return min($score, 100);
    }
}
