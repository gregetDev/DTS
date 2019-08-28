<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function form()
    {
        if (session()->has('admin')){
            return redirect('/dashboard');
        }else{
        return view('admin.auth.login');
        }
    }

    public function attempt(Request $request)
    {
        $this->validate($request, [
            'email' => 'exists:admins,username',
            'password' => 'required',
        ]);
        $user = DB::table('admins')->where('username',$request->email)
        ->where('password', $request->password)
        ->get();
        
        if(count($user)>0){
            session()->put('admin', $request->email);
            session()->put('name', $request->email);
            return redirect('/dashboard');
        }else{
            return redirect()->back();
        }
    }
    public function logout(Request $request)
    {
       session()->forget('admin');
       return redirect('/admin');
    }
}
