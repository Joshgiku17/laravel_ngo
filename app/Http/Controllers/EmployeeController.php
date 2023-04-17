<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class EmployeeController extends Controller
{
    public function index(){
        $employee=employee::all();
        return view('/employees',['employee'=>$employee]);
    }
    public function store(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $dob = $request->input('dob');
        $roleid = $request->input('roleid');
        $username = $request->input('username');
        
        DB::table('employees')->insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'dob' => $dob,
            'roleid' => $roleid ,
            'username' => $username
        ]);
        return redirect('/employees')->with('success','Registered successfully');
    
    }

}
