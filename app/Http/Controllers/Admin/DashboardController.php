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
        return view('admin.dashboard.dashboard');

    }

    // GET CITIES FOR SELECTED ZONES
    public function getCities(Request $request)
    {
        $cities = City::select('id','country_id','name')->where('country_id', $request->country_id)->where('status', '1')->get();
        return ['cities' =>$cities];
    }

    public function getUsers(Request $request)
    {
       $user_type = $request->user_type;

        if($user_type == "1"){
            $users = User::orderBy('id','DESC')->where('role_users_id',2)->get();
        } elseif($user_type == "2"){
            $users = User::orderBy('id','DESC')->where('role_users_id',2)->get();
        } elseif($user_type == "3"){
            $users = User::orderBy('id','DESC')->where('role_users_id',2)->get();
        } elseif($user_type == "4"){
            $users = User::orderBy('id','DESC')->where('role_users_id',2)->where('profile_step', 'completed')->where('status','active')->get();
        } elseif($user_type == "5"){
            $users = User::orderBy('id','DESC')->where('role_users_id',2)->where('profile_step', 'completed')->where('status','inactive')->get();
        }

       return ['users' =>$users];
    }
}
