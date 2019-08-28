@extends('layouts.app')

@section('title', 'Pelaksanaan')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact_responsive.css')}}">
@endsection
	
@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/tentang.jpg')}}"data-speed="0.8"></div>
@endsection
    
@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">About Us</div>
                <div class="breadcrumbs ml-auto">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Tentang</li>
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
                    <div class="cta_title text-center"><b>Tentang Kami</b></div>
						<div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
							<div class="intro_body">
								<p class="text-justify">
								Program Digital Talent Scholarship Tahun 2019 (DTS 2019) merupakan program pengembangan sumber daya manusia (SDM) yang dilaksanakan Kementerian Komunikasi dan Informatika (Kemenkominfo) sebagai bagian dari program pembangunan prioritas nasional.
								Program pelatihan kompetensi DTS 2019 ditujukan untuk meningkatkan keterampilan (up-skilling) SDM bidang Komunikasi dan Informatika sehingga dapat meningkatkan produktivitas dan daya saing bangsa.
								Program DTS 2019 secara garis besar dibagi menjadi empat akademi, yaitu:
								</p>
								<p>
								1. Fresh Graduate Academy (FGA) , program pelatihan bagi lulusan D3, D4 dan S1 bidang TIK dan MIPA, terbuka bagi penyandang disabilitas;	
								</p>
								<p>
								2. Vocational School Graduate Academy (VSGA) , program pelatihan bagi lulusan SMK;
								</p>
								<p>
								3. Coding Teacher Academy (CTA) , program pelatihan bagi para guru yang mengajar bidang TIK pada SMK, SMA, SMALB, dan Madrasah Aliyah (Terbuka bagi Guru PNS dan Non PNS); dan
								</p>
								<p>
								4. Online Academy (OA) , program pelatihan secara online bagi masyarakat umum termasuk ASN, mahasiswa, dan pelaku industri.
								</p>
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