<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = DB::table('admins')
        ->where('username', session()->get('admin'))
        ->get();
        
        if(count($admin)>0){
            if ($admin[0]->level == '1') {
                $participant = DB::table('participants')
                ->where('status', 'confirm')
                ->get();
            } else if($admin[0]->level == '2') {
                $participant = DB::table('participants')
                ->where('status', 'valid')
                ->get();
            }
        }else{
            return redirect()->back();
        }

        return view('admin.participant.index',['participant' => $participant]);
    }

    public function detail(Participant $participant)
    {
        $nik = $participant->nik;
        $participants = DB::table('participants')
        ->join('users', 'users.nik', '=', 'participants.nik')
        ->where('participants.nik', $nik)   
        ->get();

        // return $participant;
        return view('admin.participant.detail', ['participant' => $participants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekstensi_diperbolehkan	= array('png', 'PNG', 'Png','jpg', 'JPG', 'Jpg', 'pdf', 'Pdf', 'PDF');
        $ktp = $request->file('ktp');
        $ktpnama =  $ktp->getClientOriginalName();
        $ktpekstensi = $ktp->getClientOriginalExtension();
        $ktpukuran = $ktp->getSize();
        $ktp_tmp = $ktp->getRealPath();

        $dns = $request->file('dns');
        $dnsnama = $dns->getClientOriginalName();
        $dnsekstensi = $dns->getClientOriginalExtension();
        $dnsukuran = $dns->getSize();
        $dns_tmp = $dns->getRealPath();

        $ijasah = $request->file('ijasah');
        $ijasahnama = $ijasah->getClientOriginalName();
        $ijasahekstensi = $ijasah->getClientOriginalExtension();
        $ijasahukuran = $ijasah->getSize();
        $ijasah_tmp = $ijasah->getRealPath();
       

        if(in_array($ktpekstensi, $ekstensi_diperbolehkan) === true && in_array($dnsekstensi, $ekstensi_diperbolehkan) === true && in_array($ijasahekstensi, $ekstensi_diperbolehkan) === true){
            if($ktpukuran < 1044070 && $dnsukuran < 1044070 && $ijasahukuran < 1044070){			
                move_uploaded_file($ktp_tmp, 'ckeditor/kcfinder/upload/images/'.$ktpnama);
                move_uploaded_file($dns_tmp, 'ckeditor/kcfinder/upload/images/'.$dnsnama);
                move_uploaded_file($ijasah_tmp, 'ckeditor/kcfinder/upload/images/'.$ijasahnama);

                Participant::create([
                    'nik'=> $request->nik,
                    'ipk'=> $request->ipk,
                    'jk'=> $request->gender,
                    'alamat'=>$request->alamat,
                    'ktp'=>$ktpnama,
                    'dns'=>$dnsnama,
                    'ijasah'=>$ijasahnama,
                    'status'=>'Confirm'
                
                    
                ]);
                return redirect('/home');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        // DB::table('participants')->where('nik',$participant->id)->update([
        //     'pegawai_nama' => $request->nama,
        //     'pegawai_jabatan' => $request->jabatan,
        //     'pegawai_umur' => $request->umur,
        $participant = $participant::find($participant->nik);

        if($participant->status == 'Confirm'){
            $status = 'Valid';
        }elseif($participant->status == 'Valid'){
            $status = 'Approved';
        }
        
        $participant->status = $status;
        $participant->save();

        return redirect('/peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        //
    }
}
