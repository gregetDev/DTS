@extends('layouts.app')

@section('title', 'Digital Talent Scholarship 2019')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact_responsive.css')}}">
@endsection
	
@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru.jpg')}}"data-speed="0.8"></div>
@endsection
    
@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">Contact</div>
                <div class="breadcrumbs ml-auto">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <div class="contact">
		<div class="contact_map_background">

			<!-- Contact Map -->
			<div class="contact_map">

				<!-- Google Map -->
				<div class="map">
					<div id="google_map" class="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact_form_container">
						<div class="contact_form_title">Get in touch</div>
						<form action="#" class="contact_form" id="contact_form">
							<input type="text" class="contact_input" placeholder="Name" required="required">
							<input type="email" class="contact_input" placeholder="E-mail" required="required">
							<input type="text" class="contact_input" placeholder="Subject" required="required">
							<textarea name="contact_textarea" id="contact_textarea" class="contact_textarea contact_input" placeholder="Message" required="required"></textarea>
							<button class="button contact_button"><span>Send Message</span></button>
						</form>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="contact_info_container">
						<div>
							<a href="#">
								<div class="logo_container d-flex flex-row align-items-start justify-content-start">
									<div class="logo_image"><div><img src="images/coba2.png" alt=""></div></div>
								</div>
							</a>	
						</div>
						<div class="contact_info_list_container">
							<ul class="contact_info_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div class="contact_info_icon text-center"><img src="images/contact_1.png" alt=""></div></div>
									<div class="contact_info_text">Jalan Cikunir Raya No. 100 Jakamulya, Bekasi City, West Java 17146, Indonesia</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div class="contact_info_icon text-center"><img src="images/contact_2.png" alt=""></div></div>
									<div class="contact_info_text">087788119994</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div class="contact_info_icon text-center"><img src="images/contact_3.png" alt=""></div></div>
									<div class="contact_info_text">blablablabla@staffsite.gunadarma.ac.id</div>
								</li>
							</ul>
						</div>
						<div class="contact_info_pin"><div></div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
 
@section('js')
    <script src="{{asset('/js/contact.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
@endsection