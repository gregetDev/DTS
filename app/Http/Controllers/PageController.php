<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function home()
    {
        $articles = DB::table('articles')
        ->join('admins', 'admins.username', '=', 'articles.author')
        ->limit(3)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('home.index', ['artikel' => $articles]);
    }
    public function about()
    {
        return view('home.about');
    }
    public function pelatihanMl()
    {
        $instructors = DB::table('instructors')
        ->where('kategori', 'pengajar')
        ->get();

        $asistant = DB::table('instructors')
        ->where('kategori', 'pengajar pendamping')
        ->get();

        $sek = DB::table('instructors')
        ->where('kategori', 'sekretariat')
        ->get();

        $pesertaMl = DB::table('users')
        ->join('participants', 'participants.nik', '=', 'users.nik')
        ->where('tema', 'Machine Learning')
        ->where('status', 'Approved')
        ->get();
        
        return view('home.pelatihanMl', ['instructors' => $instructors,'asistant'=> $asistant,'sek' => $sek,'pesertaMl' => $pesertaMl]);
    }

    public function pelatihanCc()
    {
        $instructors = DB::table('instructors')
        ->where('kategori', 'pengajar')
        ->get();

        $asistant = DB::table('instructors')
        ->where('kategori', 'pengajar pendamping')
        ->get();

        $sek = DB::table('instructors')
        ->where('kategori', 'sekretariat')
        ->get();

        $pesertaCc = DB::table('users')
        ->join('participants', 'participants.nik', '=', 'users.nik')
        ->where('tema', 'Cloud Computing')
        ->where('status', 'Approved')
        ->get();
        
        return view('home.pelatihanCc', ['instructors' => $instructors,'asistant'=> $asistant,'sek' => $sek,'pesertaMl' => $pesertaCc]);
    }
    public function jadwal()
    {
        return view('home.jadwal');
    }
    public function news(articles $articles)
    {
        return view('home.news', ['$articles' => $articles]);
    }
    public function newss()
    {
         $articles = DB::table('articles')
        ->join('admins', 'admins.username', '=', 'articles.author')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('home.news', ['articles' => $articles]);
    }
    public function speakers()
    {
        $instructors = DB::table('instructors')
        ->where('kategori', 'pengajar')
        ->get();

        $asistant = DB::table('instructors')
        ->where('kategori', 'pengajar pendamping')
        ->get();

        $sek = DB::table('instructors')
        ->where('kategori', 'sekretariat')
        ->get();
        return view('home.speakers', ['instructors' => $instructors,'asistant'=> $asistant,'sek' => $sek]);
    }
    public function daftarpeserta()
    {
        $participants = DB::table('participants')
        ->paginate(28);
        return view('home.daftarpeserta',['participants' => $participants]);
    }
    public function hakewa()
    {
       
        return view('home.hakewa');
    }
    public function tata()
    {
       
        return view('home.tata');
    }
    public function silabus()
    {
       
        return view('home.silabus');
    }
    public function contact()
    {
       
        return view('home.contact');
    }
    public function daftar()
    {
       
        return view('home.daftar');
    }
}
