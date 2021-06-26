<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'password'=>Hash::make($request->password),
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

    public function edit(Request $request, $id){
        
        $user = User::find($id);
        // echo "<pre>";
        // print_r($user);exit;

        return view('users.edit')->with('usersArr',$user);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->password);
        $user->contact = $request->input('contact');
        $user->type = $request->input('type');
        $user->created_at = date('Y-m-d h:i:s');
        $user->save() ;

        
        return redirect(url('/users'));
    }

    public function destroy(Request $request, $id){

        DB::table('users')->where('id',$id)->delete();
        
        return redirect('/users');
    }
}
