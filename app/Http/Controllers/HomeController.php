<?php

namespace App\Http\Controllers;

use App\Participant;
use App\User;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        if (Participant::where('nik', '=', Auth::user()->nik)->exists()) {
            $status = 'confirm';
         }else{
            $status = 'requested';             
         }
        return view('home')->with('status', $status);
    }
}
