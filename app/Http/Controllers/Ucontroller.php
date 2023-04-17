<?php

namespace App\Http\Controllers;
use App\Model\org;
use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class Ucontroller extends Controller
{
    // public function index()
    // {
    //     return view('login');
    // }
   
    public function store(Request $request)
    {
        $org_name = $request->input('org_name');
        $email = $request->input('email');
        $username = $request->input('username');
        $pwd = $request->input('pwd');
        $addresee = $request->input('addresee');
        $phone = $request->input('phone');
        $web = $request->input('web');
        
        DB::table('orgs')->insert([
            'org_name' => $org_name,
            'email' => $email,
            'username' => $username,
            'pwd' => $pwd,
            'addresee' => $addresee,
            'phone' => $phone,
            'web' => $web

            
        ]);
        
        // $msg_ok=['message'=>'Account created'];
        return redirect('/index')->with('success','Registered successfully');
    }
    public function login(Request $request){
      
        $username = $request->input('username');
        $pwd = $request->input('pwd');
        $user=DB::table('orgs')->where('username',$username)->where('pwd',$pwd)->get();
        if (!isset($user[0])) {
            // abort(404, 'The requested array key does not exist.');
            return redirect('/login')->with('danger', 'Invalid Credentials');
        }
        
        if($user[0] -> pwd == $pwd){
            $request->session()->put('user', $request->input('username'));
            return redirect('/admin');

        }else{
            return redirect('/login')->with('danger', 'Invalid Credentials');

        }
  
}
}
