@extends('layouts.app')

@section('title', 'Profile')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact_responsive.css')}}">
@endsection
	
@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/peserta.jpg')}}"data-speed="0.8"></div>
@endsection

@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">Profile</div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <div class="intro">
        <div class="container">
            <div class="row justify-content-center">
                @if ($status == 'requested')
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Informasi Tentang Anda</div>
            
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
    
                                <form action="/peserta" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">
    
                                        <label class="col-form-label text-md-right">Nomor Induk Kependudukan(KTP) <span>*</span></label>
                                        <input type="text" class="form-control" name="nik" value="{{{ Auth::user()->nik}}}" readonly="readonly" required>
    
                                    </div>
                                    <div class="form-group">
    
                                        <label class="col-form-label text-md-right">Nama Lengkap <span>*</span></label>
                                        <input type="text" class="form-control" value="{{{ Auth::user()->name}}}" readonly="readonly" required>
                                        
                                    </div>
                                    <div class="form-group">
    
                                        <label class="col-form-label text-md-right">No Handphone <span>*</span></label>
                                        <input type="text" class="form-control" value="{{{ Auth::user()->no_hp}}}" readonly="readonly" required >
                                        
                                    </div>
                                    <div class="form-group">
    
                                        <label class="col-form-label text-md-right">Alamat Email <span>*</span></label>
                                        <input type="text" class="form-control" value="{{{ Auth::user()->email}}}" readonly="readonly" required>
                                        
                                    </div>
                                    <div class="form-group">
    
                                        <label class="col-form-label text-md-right">Nama Universitas <span>*</span></label>
                                        <input type="text" class="form-control" value="{{{ Auth::user()->nama_universitas}}}" readonly="readonly" required>
                                        
                                    </div>
                                    <div class="form-group">
    
                                        <label class="col-form-label text-md-right">Semester <span>*</span></label>
                                        <input type="text" class="form-control" value="{{{ Auth::user()->semester}}}" readonly="readonly" required>
                                        
                                    </div>
                                    <div class="form-group">
    
                                        <label class="col-form-label text-md-right">IPK<span>*</span></label>
                                        <input type="text" name="ipk" class="form-control" placeholder="Masukan IPK Anda" required autofocus>
                                        
                                    </div>
                                    <div class="form-group">
    
                                        <label class="col-form-label text-md-right">Jenis Kelamin <span>*</span></label>
                                        <div class="form-radio">
                                            <input type="radio" name="gender" value="male" checked> Pria
                                            <input type="radio" name="gender" value="female"> Wanita
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
    
                                        <label class="col-form-label text-md-right">Alamat <span>*</span></label>
                                        <textarea type="text" name="alamat" class="form-control" required></textarea>
                                        
                                    </div>
    
                                    <div class="form-group">
                                        <label class="col-form-label text-md-right">Upload File (Untuk nama file yang diupload menggunakan format NIK_Ktp/NIK_Dns/NIK_Ijasah) <span>*</span></label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">Scan Ktp <br> (ex : 1234567891012131_Ktp)</div>
                                            <div class="col-md-9">
                                                : <input type="file" name="ktp" class="" value="ktp"  required>
                                            </div>
                                                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3"> DNS Semmester Terakhir <br> (ex : 1234567891012131_Dns)</div>
                                            <div class="col-md-9">
                                                : <input type="file" name="dns" class=""  required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">Scan Ijasah/Sk Skripsi <br> (ex : 1234567891012131_Ijasah)</div>
                                                <div class="col-md-9">
                                                    : <input type="file" name="ijasah" class=""  required>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <input type="submit" name="add" value="Add" class="btn btn-success">
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body align-self-center">
                                Terima Kasih Anda Sudah Melakukan Pendaftaran.
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('/js/speakers.js')}}"></script>    
@endsection
