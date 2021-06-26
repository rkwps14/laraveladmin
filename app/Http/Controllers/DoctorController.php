<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DoctorController extends Controller
{   
    public function index(){
        
        $patients = DB::table('patients')
             ->select(DB::raw('date(created_at) as date, count(created_at) as patient_count'))
             ->groupBy('created_at')
             ->get();            


        return view('doctors.index', [
            'patients' => $patients
        ]);
    }
}
