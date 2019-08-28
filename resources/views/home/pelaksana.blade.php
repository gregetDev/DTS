@extends('layouts.app')

@section('title', 'About Us')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact_responsive.css')}}">
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
                        <li>waktu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col col-lg-12">
                    <div class="cta_title text-center"><b>Waktu dan Tempat</b></div>
						<div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
							<div class="intro_body">
								<div class="row justify-content-md-center">
									<div class="col col-lg-4">
										<p>Waktu Pelatihan</p>
									</div>
									<div class="col col-lg-8">
										<p>: 9 Juli 2019 sampai dengan 27 Agustus 2019</p>
									</div>
								</div>
								<div class="row justify-content-md-center">
									<div class="col col-lg-4">
										<p>Tempat Penyelenggaraan</p>
									</div>
									<div class="col col-lg-8">
										<p>: Universitas Gunadarma, Kampus J6 - Lantai 6
										<br>Jl. Cikunir Raya No. 100 Jakamulya Bekasi Selatan
										<br>Telp. 087788119994</p>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
	</div>
@endsection
 
@section('js')
    <script src="{{asset('/js/contact.js')}}"></script>  
@endsection