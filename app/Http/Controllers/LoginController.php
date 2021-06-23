<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;
// use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function login()
	{
    	return view('login');
    }

    public function logout(Request $request)
	{

	    Auth::logout();

	    $request->session()->invalidate();

	    $request->session()->regenerateToken();

	    return redirect('login');

	}

    function dashboard(){    	
        
        $users = DB::table('users')->count();
        $branch = DB::table('branch')->count();
        $patients = DB::table('patients')->count();

        return view('dashboard',compact('users','branch','patients'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        else{
        	echo "wrong creds";
        	exit;
        }
    }
}
