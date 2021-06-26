<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Branch;

class BranchController extends Controller
{
    public function index(){
    	$branch = DB::select("SELECT * FROM `branch`");
    	
        return view('branchs.index',compact('branch'));

    }

    public function create(){
    	return view('branchs.create');
    }

    public function store(Request $request){

        $query = DB::table('branch')->insert([
            'Branch_name' => $request->input('branch'),
            'Amount_per_patient' => $request->input('amount'),
            'status' => $request->input('type'),
            'created_at' => date('Y-m-d h:i:s')

        ]);
        
        if($query){
            return redirect('/branchs')->with('success','Branch registered successfully');
        }
    }

    public function edit($id){
        
        $branch = Branch::find($id);
        
        return view('branchs.edit')->with('branchArr',$branch);
    }

    public function update(Request $request, $id){
        $branch = Branch::find($id);


        $branch->Branch_name = $request->input('name');
        $branch->Amount_per_patient = $request->input('amount');
        $branch->updated_at = date('Y-m-d h:i:s');
        $branch->save();

        return redirect('/branchs');
    }

    public function destroy(Request $request, $id){
        
        DB::table('branch')->where('id',$id)->delete();

        return redirect('/branchs');
    }


}