@extends('layouts.app')

@section('title', 'Biodata')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/speakers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/speakers_responsive.css')}}">
@endsection

@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/daftar.jpg')}}"data-speed="0.8"></div>
@endsection

@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">Pendaftaran</div>
                <div class="breadcrumbs ml-auto">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Pendaftaran</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <section id="team" class="pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    {{-- Awal Card --}}
                        <div class="card">
                            <div class="card-header">{{ __('Register') }}</div>
      
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-xl-4">
                                        <label for="name" class="col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-4">
                                        <label for="nik" class="col-form-label text-md-right">{{ __('No. Indentitas (KTP)') }}</label>

                                        <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" required>
        
                                        @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-4">
                                        <label for="no_hp" class="col-form-label text-md-right">{{ __('No. Handphone') }}</label>

                                        <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" required>
        
                                        @error('no_hp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-xl-4">
                                        <label for="nama_universitas" class="col-form-label text-md-right">{{ __('Nama Universitas') }}</label>

                                        
                                        <input id="nama_universitas" type="text" class="form-control @error('nama_universitas') is-invalid @enderror" name="nama_universitas" required>
        
                                        @error('nama_universitas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-4">
                                        <label for="semester" class="col-form-label text-md-right">{{ __('Semester') }}</label>
                                        
                                        <input id="semester" type="text" class="form-control @error('semester') is-invalid @enderror" name="semester" required>
        
                                        @error('semester')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-4">
                                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-xl-4">
                                        <label for="tema" class="col-form-label text-md-right">{{ __('Tema') }}</label>
                                        @php
                                            @$tema = $_GET['tm']
                                        @endphp
                                        <input id="tema" type="text" class="form-control @error('tema') is-invalid @enderror" name="tema" value="<?= $tema?>" readonly="readonly" required autocomplete="email">

                                        @error('tema')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-4">
                                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-4">
                                        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                
                            </div>
                            {{-- Akhir Card Body --}}

                        </div>
                        {{-- Akhir Card --}}

                        <div style="margin-top:15px" class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{asset('/js/speakers.js')}}"></script>    
@endsection

