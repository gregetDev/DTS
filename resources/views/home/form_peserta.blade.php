@extends('layouts.app')

@section('title', 'Daftar')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/speakers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/speakers_responsive.css')}}">
@endsection

@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/silabus.jpg')}}"data-speed="0.8"></div>
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
   
@endsection

@section('js')
    <script src="{{asset('/js/speakers.js')}}"></script>    
@endsection

