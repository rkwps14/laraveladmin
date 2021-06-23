<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){

    	$patient = DB::select("SELECT * FROM `patients`");


        return view('patients.index',compact('patient'));

    }

    public function create(){
    	return view('patients.create');
    }

    public function store(Request $request){

        $query = DB::table('patients')->insert([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            'age' => $request->input('age'),
            'DOB' => $request->input('dob'),
            'created_at' => date('Y-m-d h:i:s')

        ]);
        

    	if($query){
            return redirect('/')->with('success','Patient registered successfully');
        }
    }

}
