<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->user_type == 2){
            $patients = User::where('user_type',1)->get();
            return view('admin.dashboard.dashboard',compact('patients'));
        } else {
            $doctors = User::where('user_type',2)->get();
            return view('admin.dashboard.patient-dashboard', compact('doctors'));
        }

    }

    public function editProfile()
    {
        $user = auth()->user();
        return view('admin.dashboard.editProfile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'patient_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'cnic' => 'required|string|max:20',
            'dob' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Image validation
        ]);

        // Get the authenticated user
        $authUser = Auth::user();

        $user = User::find($authUser->id);

        // Update user profile information
        $user->first_name = $request->input('patient_name');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        $user->cnic = $request->input('cnic');
        $user->date_of_birth = $request->input('dob');

        // Handle image upload if present
        if ($request->hasFile('image')) {
            // Store the new image
            $imagePath = $request->file('image')->store('profiles', 'public');  // Store in 'profiles' directory
            $user->image_url = $imagePath;  // Save the image path in the database
        }

        // Save the updated user profile
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
