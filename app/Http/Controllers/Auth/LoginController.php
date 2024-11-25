<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user_Auth = Auth::User();
            
            return redirect('/admin/users/list');
          
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if($request->email){
            $user = User::where('email',$request->email)->first();
            if($user == null){
                return response()->json(['errors'=>[
                    'email' => ['Please provide valid email address.'],
                ]],422);
            } elseif($user->status == "0"){
                return response()->json(['errors'=>[
                    'password' => ['The provided credentials are not active. Please contact your admin.'],
                ]],422);
            }
            if(Hash::check($request->password,$user->password)){
                Auth::loginUsingId($user->id);
            } else{
                return response()->json(['errors'=>[
                    'password' => ['Please provide valid password.'],
                ]],422);
            }
        }

        if (Auth::check()) {

            $request->session()->regenerate();

            $user_Auth = Auth::User();

            return response()->json([
                'status' => 3,
                'redirect_url' => route('admin.dashboard.index'),
            ]);
        }
    }
}
