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
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => $request->input('udpate')

        ]);
        

    	if($query){
            return redirect('/patients')->with('success','Patient registered successfully');
        }
    }

    public function edit($id){

        $pt = Patient::find($id);
        
        return view('patients.edit')->with('ptArr',$pt);
    }

    public function update(Request $request, $id){
        $patient = Patient::find($id);
        
        $patient->name = $request->input('name');
        $patient->contact = $request->input('contact');
        $patient->age = $request->input('age');
        $patient->DOB = $request->input('dob');
        $patient->updated_at = date('Y-m-d h:i:s');
        $patient->save() ;

        return redirect('/patients');
    }

    public function destroy(Request $request, $id){
        DB::table('patients')->where('id',$id)->delete();

        return redirect('/patients');
    }


    

}
