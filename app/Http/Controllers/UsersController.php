<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){


        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create(){
    	
    	return view('users.create');
    }

    public function store(Request $request){

        // print_r($request->all());
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'contact' => 'required',
            'type' => 'required'

        ]);

        $query = DB::table('users')->insert([

            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'contact'=>$request->input('contact'),
            'type'=>$request->input('type'),
            'created_at'=>date('Y-m-d h:i:s')


        ]);

        if($query){

            // return back()->with('success','Data registered successfully');
            return redirect('/users')->with('success','Data registered successfully');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
    }
}
