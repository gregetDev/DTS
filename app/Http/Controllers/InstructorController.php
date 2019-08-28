<?php

namespace App\Http\Controllers;

use App\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = DB::table('instructors')
        ->get();

        return view('/admin/instructor/index',['instrctors' => $instructors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instructor.add_instructor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekstensi_diperbolehkan	= array('png', 'PNG', 'Png','jpg', 'JPG', 'Jpg');
        $file = $request->file('file');
        $nama = $file->getClientOriginalName();
        $ekstensi = $file->getClientOriginalExtension();
        $ukuran = $file->getSize();
        $file_tmp = $file->getRealPath();

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){			
                move_uploaded_file($file_tmp, 'ckeditor/kcfinder/upload/images/'.$nama);

                Instructor::create([
                    'nama'=> $request->nama,
                    'foto'=> $nama,
                    'deskripsi'=> $request->deskripsi,
                    'kategori'=>$request->kategori
                    
                ]);
                return redirect('/instruktur');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        return view('/admin/instructor/edit_instructor', ['instructor' => $instructor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        $instructor = $instructor::find($instructor->id);
        $instructor->nama = $request->nama;
        $instructor->deskripsi = $request->deskripsi;
        $instructor->kategori = $request->kategori;
        
        $instructor->save();

        return redirect('/instruktur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        Instructor::find($instructor->id)->delete();

        return redirect('/instruktur');
    }
}
