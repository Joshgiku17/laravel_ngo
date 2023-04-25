<?php

namespace App\Http\Controllers;
use App\Models\bene;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class BeneController extends Controller
{
    public function index(){
        $bene=bene::all();
        return view('/bene',['bene'=>$bene]);
    }
    public function store(Request $request){
        $names=$request->input('names');
        $address=$request->input('address');
        $phone_num=$request->input('phone_num');
        $dob=$request->input('dob');
        $work=$request->input('work');
        
        DB::table('benes')->insert([
            'names'=> $names,
            'address'=> $address,
            'phone_num'=> $phone_num,
            'dob'=>$dob,
            'work'=> $work
        ]);
        return redirect('/bene')->with('Success','Registered successfully');
    }
}
