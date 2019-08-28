@extends('layouts.app')

@section('title', 'Jadwal')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/news.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/news_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
@endsection
	
@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/pelaksanaan.jpg')}}"data-speed="0.8"></div>
@endsection
    
@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">Pelaksanaan</div>
                <div class="breadcrumbs ml-auto">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Jadwal</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <div class="intro">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-12">
                    <div class="cta_title text-center"><b>Jadwal Pelaksanaan</b></div>
                    <center>
                    <div class="news_item">
                        <div class="news_image_container">
                            <div class="news_image"><img src="images/jadwal.png" alt="">
                            <p>Jadwal pelaksanaan Pelatihan Digital Talent Scholarship 2019 </p>
                            </div>
                        </div>								
                    </div>   
                    </center>         
                </div>
            </div>
        </div>
	</div>
@endsection
 
@section('js')
    <script src="{{asset('/js/contact.js')}}"></script>    
@endsection