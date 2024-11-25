<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->type == 2){
            $patients = User::where('user_type',1)->get();
            return view('admin.dashboard.dashboard',compact('patients'));
        } else {
            $doctors = User::where('user_type',2)->get();
            return view('admin.dashboard.patient-dashboard', compact('doctors'));
        }


    }
}
