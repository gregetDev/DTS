@extends('layouts.app')

@section('title', 'Pelaksanaan')

@section('css')

    <link rel="stylesheet" type="text/css" href="{{asset('/css/speakers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact_responsive.css')}}">
@endsection
	
@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/silabus.jpg')}}"data-speed="0.8"></div>
@endsection
    
@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">Pelatihan</div>
                <div class="breadcrumbs ml-auto">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Pelatihan</li>
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
                    <div class="cta_title text-center"><b>Pelatihan Machine learning</b></div>
						<div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
							<div class="intro_body">
								<p class="text-justify">
                                        
                                    Pelatihan ini akan membahas dasar-dasar Machine Learning dengan Python.
                                    Materi mencakup dasar-dasar pemrograman Python untuk Machine Learning, Supervised vs
                                    Unsupervised Learning, Statistical Modeling kaitannya dengan Machine Learning,
                                    alogritme-algoritme yang populer seperti: Classification, Regression, Clustering, dan
                                    Dimensional Reduction, dan juga model-model yang populer seperti: Train/Test Split, Gradient
                                    Descent, dan Mean Squared Error. Materi berikutnya adalah Deep Learning dengan Tensfor Flow
                                    dan GPU. Pelatihan ini akan fokus pada isi praktis disertai dengan praktek<br>
                                    <br> Spesifikasi laptop dan aplikasi adalah : <br>
                                    1. RAM min. 2GB.<br>
                                    2. OS : Windows 7,8, atau 10, MAC OSX.<br>
                                    3. Processor : 32/64-bit.<br>
                                    4. Web browser : versi terbaru Microsoft Internet Explorer, Google Chrome, atau 
                                    Mozilla Firefox yang telah terinstall versi terbaru Java dan Flash Player
                                         
                                </p>
							</div>
						</div>
					</div>	
                </div>
               
                <div class="row d-flex justify-content-center">
                    <div class="col d-flex justify-content-center">
                        <div class="button element_button button_1"><a data-toggle="modal" data-target="#Batch1Modal" href="">Batch 1 2019</a></div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="button element_button button_1"><a data-toggle="modal" data-target="#Batch2Modal" href="">Batch 2 2019</a></div>
                    </div>

                </div>

                <hr>
                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-waktu-tab" data-toggle="pill" href="#v-pills-waktu" role="tab" aria-controls="v-pills-waktu" aria-selected="true">Waktu</a>
                            <a class="nav-link" id="v-pills-tempat-tab" data-toggle="pill" href="#v-pills-tempat" role="tab" aria-controls="v-pills-tempat" aria-selected="false">Tempat</a>
                            <a class="nav-link" id="v-pills-pengajar-tab" data-toggle="pill" href="#v-pills-pengajar" role="tab" aria-controls="v-pills-pengajar" aria-selected="false">Pengajar</a>
                            <a class="nav-link" id="v-pills-peserta-tab" data-toggle="pill" href="#v-pills-peserta" role="tab" aria-controls="v-pills-peserta" aria-selected="false">Peserta</a>
                            <a class="nav-link" id="v-pills-silabus-tab" data-toggle="pill" href="#v-pills-silabus" role="tab" aria-controls="v-pills-silabus" aria-selected="false">Silabus</a>
                            <a class="nav-link" id="v-pills-hakewa-tab" data-toggle="pill" href="#v-pills-hakewa" role="tab" aria-controls="v-pills-hakewa" aria-selected="false">Hak & Kewajiban</a>
                            <a class="nav-link" id="v-pills-tata-tab" data-toggle="pill" href="#v-pills-tata" role="tab" aria-controls="v-pills-tata" aria-selected="false">Tata Tertib</a>
                        </div>      
                    </div>
                    <div class="col-md-10">

                        {{-- Awal Tab Content --}}
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-waktu" role="tabpanel" aria-labelledby="v-pills-waktu-tab">
                                <p><b>Waktu Pelatihan</b><br></p>
                                <p>9 Juli 2019 sampai dengan 27 Agustus 2019</p>
                            </div>

                            <div class="tab-pane fade" id="v-pills-tempat" role="tabpanel" aria-labelledby="v-pills-tempat-tab">
                                <p><b>Tempat Penyelengaraan</b></p>
                                <p>Universitas Gunadarma, Kampus J6 - Lantai 6
                                    <br>Jl. Cikunir Raya No. 100 Jakamulya Bekasi Selatan
                                    <br>Telp. 087788119994</p>
                            </div>

                            <div class="tab-pane fade" id="v-pills-pengajar" role="tabpanel" aria-labelledby="v-pills-pengajar-tab">
                                    
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p><b>Pengajar Digital Talent Scholarship</b></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach ($instructors as $item)
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="mainflip">
                                                        <div class="frontside">
                                                            <div class="card">
                                                                <div class="card-body text-center">
                                                                    <p><img class="rounded-circle img-fluid" src="{{asset('/ckeditor/kcfinder/upload/images/'.$item->foto)}}" alt="card image"></p>
                                                                    <h5 style="margin-top:15px" class="card-title">{{($item->nama)}}</h5>
                                                                    <div style="margin-bottom:15px" class="fixed-bottom ">
                                                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="backside">
                                                            <div class="card">
                                                                <div class="card-body text-center mt-4">
                                                                    <h5 class="card-title">{{($item->nama)}}</h5>
                                                                    <p style="font-size:12px" class="card-text"><?= substr($item->deskripsi,0,50)?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        @endforeach  
                                    </div>

                                    <div style="margin-top:12px" class="row">
                                        <div class="col-md-10">
                                            <p><b>Asisten Pendamping</b></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach ($asistant as $item)
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="mainflip">
                                                        <div class="frontside">
                                                            <div class="card">
                                                                <div class="card-body text-center">
                                                                    <p><img class="rounded-circle img-fluid" src="{{asset('/ckeditor/kcfinder/upload/images/'.$item->foto)}}" alt="card image"></p>
                                                                    <h5 style="margin-top:15px" class="card-title">{{($item->nama)}}</h5>
                                                                    <div style="margin-bottom:15px" class="fixed-bottom ">
                                                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="backside">
                                                            <div class="card">
                                                                <div class="card-body text-center mt-4">
                                                                    <h5 class="card-title">{{($item->nama)}}</h5>
                                                                    <p style="font-size:12px" class="card-text"><?= substr($item->deskripsi,0,50)?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        @endforeach  
                                    </div>

                                    <div style="margin-top:12px" class="row">
                                        <div class="col-md-10">
                                            <p><b>Sekretariat</b></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach ($sek as $item)
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="mainflip">
                                                        <div class="frontside">
                                                            <div class="card">
                                                                <div class="card-body text-center">
                                                                    <p><img class="rounded-circle img-fluid" src="{{asset('/ckeditor/kcfinder/upload/images/'.$item->foto)}}" alt="card image"></p>
                                                                    <h5 style="margin-top:15px" class="card-title">{{($item->nama)}}</h5>
                                                                    <div style="margin-bottom:15px" class="fixed-bottom ">
                                                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="backside">
                                                            <div class="card">
                                                                <div class="card-body text-center mt-4">
                                                                    <h5 class="card-title">{{($item->nama)}}</h5>
                                                                    <p style="font-size:12px" class="card-text"><?= substr($item->deskripsi,0,50)?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        @endforeach  
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-peserta" role="tabpanel" aria-labelledby="v-pills-peserta-tab">
                                <div class="elements_accordions_tabs">
                                    <center>
                                        <p><b>Pengumuman Hasil Seleksi Calon Peserta Program Fresh
                                                Graduate Academy DigitalTalent Scholarship Tahun 2019
                                                Kementerian Komunikasi dan Informatika Republik Indonesia</b><br></p>
                                    </center>
                                    <div class="row">
                                        <div class="col col-lg-12" id="tabs">
                                            <div class="tabs" >
                                                <div class="tabs_container">
            
                                                    <div class="tab_panels">
                                                        <div class="tab_panel active">
                                                            <div class="tab_panel_content">
                                                                <div class="table-responsive">
                                                                    <table style="color:black; margin-top:12px"  id="example" class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">No.</th>
                                                                                <th scope="col">Penyelenggara</th>
                                                                                <th scope="col">Tema Pelatihan</th>
                                                                                <th scope="col">Nama Peserta</th>
                                                                                <th scope="col">Asal Universitas</th>
                                                                                <th scope="col">Batch</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($pesertaMl as $item)
                                                                                <tr>
                                                                                
                                                                                    <td>{{($loop -> iteration)}}</td>
                                                                                    <td>Universitas Gunadarma</td>
                                                                                    <td>{{($item->tema)}}</td>
                                                                                    <td>{{($item->name)}}</td>
                                                                                    <td>{{($item->nama_universitas)}}</td>
                                                                                    @if ($item->email_verified_at<='2019-12-30 00:00:00')
                                                                                        <td>Batch 1</td>                       
                                                                                    @else
                                                                                        <td>Batch 2</td>
                                                                                    @endif
                                                                                
                                                                                </tr>
                                                                            @endforeach
                                                                            
                                                                            </tbody>
                                                                    </table>
                                                                    {{-- {{($peserta->links())}} --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-silabus" role="tabpanel" aria-labelledby="v-pills-silabus-tab">
                                {{-- <div class="elements_accordions_tabs">
                                    <center>
                                        <p><b>Daftar Silabus Digital Talent Scholarship Tahun 2019 Kementerian Komunikasi dan Informatika Republik Indonesia</b><br></p>
                                    </center>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tabs">
                                                <div class="tabs_container">
                                                    <div class="tab_panels">
                                                        <div class="tab_panel active">
                                                            <div class="tab_panel_content">
                                                                    <center>
                                                                    <div class="table-responsive">
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">1</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Amazon Web Service</span><span style="font-family: 'Calibri','sans-serif';"> (AWS)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Pendahuluan Cloud Computing</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Penjelasan program pelatihan secara umum</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Penjelasan tentang AWS dan Machine Learning.</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Pengantar Cloud computing: history, cloud benefit, cost, types of cloud computing, deployment models, security</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal;"><span style="font-size: 12.0pt;">&nbsp;</span></p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt;">&nbsp;</span></strong></p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">2</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Amazon Web Service</span><span style="font-family: 'Calibri','sans-serif';"> (AWS)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Konsep Teknologi Cloud Computing AWS</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.3</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.4</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.5</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Konsep teknologi cloud computing</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Virtualization</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Karakteristik Cloud Computing</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Elasticity pada Cloud Computing</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Pengantar cloud computing dengan AWS</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.6<br /><br /></span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.7<br /><br /></span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.8</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami public cloud pada deployment model cloud computing</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami private cloud pada deployment model cloud computing</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami hybird cloud pada deplotment model cloud compting</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">3</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Amazon Web Service</span><span style="font-family: 'Calibri','sans-serif';"> (AWS)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal Layanan pada Cloud Computing AWS</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 35.45pt; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="59">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.1<br /></span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.2<br /><br /></span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.3</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.4</span></p>
                                                                            </td>
                                                                            <td style="width: 212.6pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="354">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal model pengantaran layanan cloud computing</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui konsep pemindahan server fisik menjadi server virtual</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui ancaman keamanan dan cara mengatasinya</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal layanan umum pada cloud computing</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 35.45pt; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="59">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.5</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.6</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.7</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.8</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.9</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.10</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.11</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.12</span></p>
                                                                            </td>
                                                                            <td style="width: 212.6pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="354">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS VPC</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS Security Groups</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS Elastic Compute Cloud</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS Load Balancing</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS Elastic Block Store</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS Simple Storage Service</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS Relational Database Service</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS DynamoDB</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">4</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Amazon Web Service</span><span style="font-family: 'Calibri','sans-serif';"> (AWS)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal Security pada Cloud Computing AWS</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep keamanan AWS</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS Access Control and Management (IAM)</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS Security Complience Program</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.4</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.5</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.6</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Pengenalan AWS Well-Architected Framework</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal konsep Fault Tolerance dan High Availability</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Web hosting dengan AWS</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">5</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Amazon Web Service</span><span style="font-family: 'Calibri','sans-serif';"> (AWS)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal Pricing dan Biling Cloud Computing AWS</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Service Level Agreement dalam Cloud Computing</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS Cloud Pricing</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Billing Management System</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.4</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.5</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.6</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">AWS fundamental pricing</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Pricing details</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Overview of the Total Cost of Ownership Calculator</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">6</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Amazon Web Service</span><span style="font-family: 'Calibri','sans-serif';"> (AWS)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Persiapan Ujian AWS</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Persiapan Ujian</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Latihan Soal</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">7</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Amazon Web Service</span><span style="font-family: 'Calibri','sans-serif';"> (AWS)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal beberapa layanan Amazon Web Service untuk aplikasi machine learning</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal platform Google Colaboratory sebagai platform yang akan digunakan selama pelatihan</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.3</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.4</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.5</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.6</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Implementasi machine learning di Amazon</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Platform machine learning AWS Sagemaker</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui Amazon Rekognition</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui Amazon Poly</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui Amazon Lex</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui Amazon Comprehend</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.2<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Bereksplorasi dan mengenal antarmuka google colab</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Membuat program sederhana dengan platform Google Colaboratory</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 692.8px; border: 1pt solid black; background: #d9d9d9; padding: 0cm 5.4pt;" colspan="3">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 268px; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 0cm 5.4pt;">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 409.6px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt;" colspan="2">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">8</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 268px; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 0cm 5.4pt;">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 409.6px; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid windowtext; border-right: 1pt solid black; padding: 0cm 5.4pt;" colspan="2">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Basic Python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 268px; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: 1pt solid windowtext; padding: 0cm 5.4pt;">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 62.4px; border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0cm 5.4pt;">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            </td>
                                                                            <td style="width: 332.8px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt;">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami pemrograman dasar python beserta pengolahan variable</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Menerapkan beberapa struktur data majemuk dalam bahasa pemrograman python dan mengoperasikannya</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 268px; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: 1pt solid windowtext; padding: 0cm 5.4pt;">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 62.4px; border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0cm 5.4pt;">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.3</span></p>
                                                                            </td>
                                                                            <td style="width: 332.8px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt;">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Pengenalan sintaks dasar pemrograman bahasa python</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal beberapa tipe data dasar dan variable</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Melakukan operasi dasar variabel bertipe-data String</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 268px; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: 1pt solid windowtext; padding: 0cm 5.4pt;">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 62.4px; border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0cm 5.4pt;">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.3</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.4</span></p>
                                                                            </td>
                                                                            <td style="width: 332.8px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt;">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Menerapkan struktur data dan operasi dasar List</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Menerapkan struktur data dan operasi dasar Tuple</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Menerapkan struktur data dan operasi dasar Sets</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Menerapkan struktur data dan operasi dasar Dictionary</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 268px; border-top: none; border-left: 1pt solid black; border-bottom: 1pt solid black; border-right: none; padding: 0cm 5.4pt;">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 409.6px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt;" colspan="2">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">9</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Basic Python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami dasar peraturan pemrograman python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.1<br /><br /></span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.2<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan struktur percabangan dalam bahasa python</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan struktur perulangan dalam bahasa python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.3<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.4<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Melakukan pemrograman python dengan memanfaatkan fungsi</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Melakukan pemrograman python dengan memanfaatkan object oriented programming (OOP)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">10</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Python untuk Data Science</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal dan memahami library Numpy</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal dan memahami library Pandas</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.3<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengenal apa itu library NumPy</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami penggunaan atribut dan fungsi dari NumPy</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan program python dengan memanfaatkan library NumPy 1D dan 2D</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.3</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.4</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.5<br /><br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Membuat program python untuk melakukan read file</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Membuat program python untuk melaukan write file</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal apa itu library Pandas</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami penggunaan atribut dan fungsi dari Pandas</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Bekerja dengan Dataframe (salah satu class di library Pandas), dan mengimplementasikannya dalam program python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">11</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Python untuk Data Science</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal visualisasi dalam machine learning dan library Matplotlib</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Melakukan visualisasi dengan menggunakan library Matplotlib</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.1<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.3<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.4</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami pentingnya visualisasi data dalam analisis data untuk machine learning</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengenal apa itu library Matplotlib</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami hubungan erat Pandas dengan Matplotlib dan mengimplementasikannya dalam program python</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Melakukan visualisasi dengan class Line</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.1</span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.2</span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.3</span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.4</span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.5</span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.6</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Melakukan visualisasi dengan class Area plots</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Melakukan visualisasi dengan class Histogram</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Melakukan visualisasi dengan class Bar Chart</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Melakukan visualisasi dengan class Pie Chart</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Melakukan visualisasi dengan class Box plots</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Melakukan visualisasi dengan class Scatter plots</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">12</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Dasar Machine Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami terminologi machine learning dan beberapa contoh-contoh aplikasinya dalam kehidupan</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami python sebagai salah satu bahasa pemrograman yang cocok untuk machine learning</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami dua pendekatan machine learning, supervised dan unsupervised</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.3<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.2<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.3<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengenal machine learning dan perbedaannya dengan Artificial Inteligence dan Deep Learning</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami contoh kasus permasalahan yang dapat dieselesaikan machine learning</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Beberapa aplikasi penggunaan machine learning dalam kehidupan nyata</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengenal peran bahasa python untuk machine learning</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui beberapa library python penting untuk mendukung machine learning</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami dan mengimplementasikan kerangka kerja machine learning dengan library sklearn</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.1<br /><br /></span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui 2 teknik machine learning (supervised dan unsupervised)</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami supervised learning dan beberapa contohnya</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami unsupervised learning dan beberapa contohnya</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">13</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Essential Math untuk Machine Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami matematika aljabar liner dan mengimplementasikannya dalam program python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1<br /><br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.3</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.4</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui pentingnya pemahaman matematika aljabar linear untuk memahami machine learning dengan lebih mudah</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Perkalian dan Penjumlahan vektor dan Matriks</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Transpose dan Invers dari Matriks</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Eigenvektor dan Eigenvalue Matriks</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr style="height: 35.35pt;">
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 35.35pt;" width="295">
                                                                            <p><span style="font-family: calibri, sans-serif;">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 35.35pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: calibri, sans-serif;">1.5</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 35.35pt;" width="366">
                                                                            <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 11pt; line-height: 115%; color: black; font-family: calibri, sans-serif;">Memecahkan permasalahan aljabar linear dengan mengimplementasikan program python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">14</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Essential Math untuk Machine Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami matematika kalkulus dasar dan mengimplementasikannya dalam program python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.1<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Menetahui pentingnya pemahaman matematika kalkulus untuk memahami machine learning dengan lebih mudah</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Gradient dan univariate differentiation</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Multivariate differentiation</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.4<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memecahkan permasalahan kalkulus dengan mengimplementasikan program python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">15</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Algoritma Machine Learning: Regrssion</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma prediksi dengan linear regression</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma prediksi dengan non-linear regression</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.3<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.4</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami apa yang dimaksud dengan regresi linier</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma linear regression</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui contoh kasus yang bisa diselesaikan dengan linear regression</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan linear regression dengan python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.3<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengatahui tidak seluruh kasus bisa berbentuk linear</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma non-linear regression</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan non-linear regression dengan python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">16</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Algoritma Machine Learning: Classification</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami pendekatan classification dan mengukur performa model</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma K-Nearest Neighbor sebagai salah satu Classification</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma Decision Tree sebagai salah satu Classification</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.3</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.4</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami pendekatan classification dan perbedaannya dengan regression</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami evaluasi pengukuran dengan Jaccard Index dan F1 score</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep dasar K-Nearest Neighbor</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Algoritma K-Nearest Neighbor</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami decision boundary dengan K-Nearest Neighbor</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan K-Nearest Neighbor dengan python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep dasar Decision tree</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Algoritma Decision Tree</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan Decision tree dengan python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">17</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Algoritma Machine Learning: Classification</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">5.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma Logistic Regression sebagai salah satu Classification</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma Support Vector Machine sebagai salah satu Classification</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.1<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep dasar Logistic Regression dan perbedaannya dengan Regression</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Algoritma Logistic Regression</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan Logistic Regression dengan Python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">5.1<br /></span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">5.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">5.3<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep dasar Support Vector Machine</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Algoritma Support Vector Machine</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan Support Vector Machine dengan python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">18</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Algoritma Machine Learning: Clustering</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami pendekatan clustering dan perbedaannya dengan classification</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma K-Means sebagai salah satu Clustering</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami Hierarchial Clustering sebagai salah satu Clustering</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.3<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami pendekatan clustering</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui perbedaan clustering dengan classification</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui mengapa clustering dibutuhkan dalam beberapa kasus</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep dasar K-Means</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Algoritma K-Means</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan K-Means dengan python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.3<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep Hierarchial Clustering</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Algoritma Hierarchial Clustering</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan Hierarchial Clustering dengan python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">19</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Algoritma Machine Learning: Clustering</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.</span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">5.<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami DBSCAN sebagai salahsatu Clustering</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan salah satu algoritma machine learning.</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep DBSCAN</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Algoritma DBSCAN</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan DBSCAN dengan python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">5.1<br /><br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Bereksplorasi memecahkan permasahalan machine learning dengan sebuah dataset dan mengimplementasikannya di python tanpa notebook dari Instruktur</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">20</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Recommender System</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.</span></p>
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami Recommender System</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami Content Based sebagai salah satu pendekatan recommender system</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami Collaborative Filter sebagai salah satu pendekatan recommender system</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.2<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami apa yang dimaksud dengan terminologi Recommender System</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui dua pendekatan Recommender System, Content based dan Colaborative Filtering</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep Content Based Recommender System</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan Conent Based Recommender System dengan python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.1<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.2<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep Collaborative Filtering Recommender System</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan Collaborative Filtering dengan python</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">21</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Project Machine Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Evaluasi kemampuan analisis dan pemecahan masalah sebuah studi kasus machine learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Menyelesaikan project yang ada dalam project description</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Menyelesaikan project yang ada dalam project description</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">22</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Ujian Pertengahan</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Evaluasi pemahaman Amazon Web Service</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Evaluasi pemahaman Machine Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Simulasi Ujian AWS</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Ujian pilihan ganda machine learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">23</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Pengantar Neural Network</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep dasar neural network</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami terminologi error/cost function</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.3<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Hubungan logistic regression dengan perceptron dalam neural network</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Konsep dasar Neural network dan Komponen Perceptron (Weight, Bias, Activation function)</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan perceptron untuk logika AND dan OR</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.2<br /><br /></span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.3<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami step function vs sigmoid function</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Binary classification (sigmoid) vs Multiclass classification (softmax)</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami cross corelation sebagai salah satu error function yang paling umum digunakan</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">24</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Pengantar Neural Network</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma gradient descent</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal Multi-layer perceptron neural network dan algoritma training backpropagation.</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.1<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami peran error/cost function dalam pencarian model yang paling optimal</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami apa itu gradient</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma gradient descent</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.2<br /><br /></span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami arsitektur multi-layer perceptron</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami algoritma training multi-layer perceptron neural network dengan Backpropagation</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan Neural Network secara keseluruhan</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">25</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Pengantar Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami konsep dasar deep learning</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui beberapa model arsitektur yang umum digunakan dalam sebuah permasalahan</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.3<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.4<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami terminologi Deep Learning</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui alasan penggunaan Deep Learning</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui pilihan deep net yang tepat untuk sebuah studi kasus tertentu</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami bahwa deep learning memiliki tantangannya sendiri dan permasalahannya</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.2</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.3</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.4</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.5</span></p>
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.6</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui model arsitektur CNN secara garis besar</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui model arsitektur RNN secara garis besar</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui model arsitektur RBM secara garis besar</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui model arsitektur DBN secara garis besar</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui model arsitektur AE secara garis besar</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui model arsitektur RNTN secara garis besar</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">26</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Pengantar Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal library dan platform deep learning serta berinteraksi dengan beberapa diantaranya</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.1<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.2<br /><br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui beberapa library deep learning yang umum digunakan (Theano, H2O, Caffe, Torch)</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengenal beberapa platform deep learning terintegrasi yang umum digunakan (AWS, H2O, Deeplearning4j, predictionIO)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Bermain Deep Learning dengan beberapa platform online yang tersedia (Deepcognition, Playground)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">27</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Pengantar Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengenal library Tensorflow sebagai salah satu library yang paling sering digunakan dalam implementasi deep learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.3</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.4<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengenal library tensorflow</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengenal tipe data tensor</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui arsitektur tensorflow</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan program dasar dengan tensorflow pertama</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.5</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan linear regression dan logistic regression menggunakan library tensorflow</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">28</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Supervised dan Unsupervised Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami lebih dalam dan mengimplementasikan arsitektur Convolutional Neural Netwok (CNN)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.3<br /><br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.4</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui cara manusia memahami gambar</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami operasi konvolusi</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami cara kerja arsitektur Convolutional Neural Network (Convolution Layer, Max Pooling Layer, Fully Connected Layer)</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami proses training CNN</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.5</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan arsitektur Convolutional Neural Network menggunakan tensorflow</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">29</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Supervised dan Unsupervised Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami lebih dalam dan mengimplementasikan arsitektur Recurrent Neural Network (RNN) dan Long Short Term Memory (LSTM)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.2<br /><br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.3<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.4</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami permasalahan data sequential</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami cara kerja arsitektur Recurrent Neural Network (RNN) dan mengetahui masalah mendasar pada arsitektur ini</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami arsitektur Long Short Term Memory (LSTM) sebagai pengganti RNN</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui manfaat LSTM dalam language modelling</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.5</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan RNN dan LSTM menggunakan tensorflow</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">30</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Supervised dan Unsupervised Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami lebih dalam dan mengimplementasikan arsitektur Restricted Boltzman Machine (RBM)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.2<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">3.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami arsitektur Restricted Blotzmann Machine (RBM)</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami kasus yang bisa diselesaikan dengan arsitektur RBM</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami cara training RBM</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">3.4</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan RBM menggunakan tensorflow</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">31</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Supervised dan Unsupervised Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami lebih dalam dan mengimplementasikan arsitektur Autoencoder (AE)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.1<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.2<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.3</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">4.4<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami motivasi awal arsitektur Autoencoder (AE) diciptakan</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui permasalahan dimensi dan dimensionality reduction dengan PCA</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami arsitektur Autoencoder</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Mengetahui kasus-kasus yang dapat diselesaikan dengan Autoencoder (AE)</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">4.5</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengimplementasikan AE menggunakan tensorflow</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">32</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Accelerated Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami GPU sebagai pemroses alternatif yang lebih cepat dibanding CPU</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mempraktikkan dan memperbandingkan secara langsung Deep Learning dengan menggunakan CPU dan GPU</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.3<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.4<br /><br /></span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami permasalahan yang muncul jika data yang berjumlah besar</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami bahwa multiplikasi matriks dalam deep learning sangat memakan resource</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami Graphical Processing Unit sebagai alternatif sumber daya pemrosesan</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami perbedaan pemrosesan antara CPU dan GPU dan alasan mengapa GPU lebih unggul dari CPU</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Praktik implementasi salah satu algoritma deep learning dan melakukan perbandingan performa antara CPU dengan GPU</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">33</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Distributed dan Accelerated Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.<br /></span><span style="font-family: 'Calibri','sans-serif';">&nbsp;</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami alasan penggunaan platform cloud deep learning</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Memahami distributed deep learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.3</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">GPU sebagai hardware accelerator</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Keterbatasan performa GPU</span></p>
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Solusi menggunakan Cloud Platform</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Apa itu distributed deep learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">34</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Project Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Evaluasi kemampuan analisis dan pemecahan masalah sebuah studi kasus Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Menyelesaikan project yang ada dalam project description</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="margin-left: 30.05pt; text-align: right; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">1.2</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Menyelesaikan project yang ada dalam project description</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">35</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Project Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Evaluasi kemampuan membuat laporan dan presentasi sebuah studi kasus Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Presentasi project penyelesaian studi kasus yang telah dikerjakan pada hari sebelumnya</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.2</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Presentasi project penyelesaian studi kasus yang telah dikerjakan pada hari sebelumnya</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <p style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>
                                                                            <table style="margin-left: 12.5pt; border-collapse: collapse;" width="709">
                                                                            <tbody>
                                                                            <tr>
                                                                            <td style="width: 15.0cm; border: solid black 1.0pt; background: #D9D9D9; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="3" width="709">
                                                                            <p style="text-align: center;"><strong><span style="font-family: 'Calibri','sans-serif';">RENCANA PEMBELAJARAN</span></strong></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Pertemuan ke</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">36</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Topik</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 22.95pt; text-align: justify; text-indent: -21.25pt;"><span style="font-family: 'Calibri','sans-serif';">Ujian Akhir</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Deskripsi Singkat mengenai Topik </span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.<br /><br /></span></p>
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Mengingat kembali seluruh materi dalam rangkaian pelathian yang telah dijalani</span></p>
                                                                            <p style="text-align: justify;"><span style="font-family: 'Calibri','sans-serif';">Evaluasi pemahaman Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 1</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">1.1</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Memahami dan mengingat kembali materi pelatihan dari Machine Learning sampai Deep Learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Detail Materi Sesi 2</span></p>
                                                                            </td>
                                                                            <td style="width: 1.0cm; border: none; border-bottom: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="47">
                                                                            <p style="text-align: right;"><span style="font-family: 'Calibri','sans-serif';">2.1</span></p>
                                                                            </td>
                                                                            <td style="width: 219.7pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="366">
                                                                            <p style="text-align: justify; tab-stops: 30.05pt;"><span style="font-family: 'Calibri','sans-serif';">Ujian pilihan ganda machine learning</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td style="width: 177.2pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="295">
                                                                            <p><span style="font-family: 'Calibri','sans-serif';">Link Materi</span></p>
                                                                            </td>
                                                                            <td style="width: 248.05pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="413">
                                                                            <p style="margin-left: 30.05pt; text-align: justify; text-indent: -1.0cm;"><span style="font-family: 'Calibri','sans-serif';">http://bit.ly/2FRVP5f</span></p>
                                                                            </td>
                                                                            </tr>
                                                                            </tbody>
                                                                            </table>
                                                                    </div>
                                                                    </center>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="tab-pane fade" id="v-pills-hakewa" role="tabpanel" aria-labelledby="v-pills-hakewa-tab">

                                <div class="container">
                                    <div class="row justify-content-md-center">
                                        <div class="col col-lg-12">
                                            <p><b>Hak Penerima Beasiswa Fresh Graduate Academy (FGA) 2019</b></p>
                                            <p>
                                                <ol style="color:black">
                                                    <li> Mendapatkan Seminar Kit</li>
                                                    <li> Mendapatkan Uang saku diklat sebesar Rp 750.000,00/bulan (Tujuh ratus lima puluh ribu rupiah)</li>
                                                    yang akan diserahkan pada akhir pelaksanaan pelatihan sesuai ketentuan dari Kementerian Kominfo</li>
                                                    <li> Mendapatkan Sertifikat dari Kementerian Kominfo dan Certificate of Completion dari Mitra
                                                    Pelatihan jika telah mengikuti pelatihan dan memenuhi persyaratan yang ditentukan</li>
                                                    <li> Mendapat kesempatan untuk mengikuti Ujian Sertifikasi Industri jika memenuhi persyaratan yang
                                                    ditentukan</li>
                                                    <li> Mendapat voucher (kupon) untuk mengikuti Ujian Sertifikasi Industri jika memenuhi persyaratan
                                                    yang ditentukan</li>
                                                    <li> Mendapat kesempatan untuk mengikuti pelatihan online Kewirausahaan Digital dan Soft-Skills
                                                    Development</li>
                                                    <li> Setelah menyelesaikan pelatihan, peserta mendapat kesempatan untuk mengikuti Program Pasca
                                                    Pelatihan berupa pemagangan dan/atau penempatan kerja bagi peserta yang memenuhi kualifikasi dan
                                                    belum memiliki pekerjaan penuh waktu.</li>
                                                </ol>  

                                            </p> 
                                        </div>

                                        <div class="col col-lg-12">
                                            <p><b>Kewajiban Penerima Beasiswa Fresh Graduate Academy (FGA) 2019</b></p>
                                                
                                            <p>
                                                <ol style="color:black">
                                                    <li> Mengisi, menandatangani, dan mengunggah Form Komitmen Partisipasi Program Bantuan Pemerintah
                                                    DTS 2019 sebelum pelaksanaan pelatihan </li>
                                                    <li> Mengisi dan menyerahkan lembar Kuesioner Monitoring secara online dan/atau offline yang akan
                                                    diberikan di tengah masa pelaksanaan pelatihanporan Pertanggungjawaban Peserta Digital Talent
                                                    Scholarship 2019 pada akhir pelaksanaan pelatihan</li>
                                                    <li> Menyusun, menandatangani, dan mengunggah Laporan Pertanggungjawaban Peserta Digital Talent Scholarship 2019 pada akhir pelaksanaan pelatihan</li>
                                                    <li> Menaati seluruh aturan yang telah ditentukan oleh perguruan tinggi, lembaga pelaksana, atau
                                                    mitra pelaksana pelatihan tempat peserta melaksanakan pelatihan</li>
                                                    <li> Mengikuti pelatihan pertemuan tatap muka dan ujian sejumlah 144 Jam Pelajaran yang
                                                    dilaksanakan dalam rentang waktu 36 hari sesuai dengan jadwal yang ditentukan oleh penyelenggara
                                                    pelatihan</li>
                                                    <li> Menanggung komponen pembiayaan lain selain yang ditanggung oleh Kementerian Kominfo
                                                    sebagaimana dimaksud pada poin Hak Peserta</li>
                                                    <li> Membawa laptop dengan kapasitas sesuai spesifikasi yang telah ditetapkan untuk setiap tema
                                                    pelatihan</li>
                                                    <li> Bersikap jujur, bertanggung jawab serta menghindari segala bentuk kecurangan.</li>
                                                            
                                                </ol>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="v-pills-tata" role="tabpanel" aria-labelledby="v-pills-tata-tab">
                                <div class="container">
                                    <div class="row justify-content-md-center">
                                        <div class="col col-lg-12">
                                            <p><b>Tata Tertib</b></p>
                                            <p>
                                                <ol style="color:black">
                                                    <li>Peserta yang terlambat hadir lebih dari 15 menit dari jadwal yang telah ditetapkan dianggap
                                                    tidak mengikuti 1 (satu) kali pertemuan</li>
                                                
                                                    <li>Peserta tidak berhak menerima Sertifikat dari Kementerian Kominfo dan Certificate of
                                                    Completion dari Mitra Pelatihan, jika :</li>
                                                        <ul>
                                                            <li>a. Peserta tidak mengikuti pelatihan sebanyak 3 (tiga) pertemuan dan atau</li>
                                                            <li>b. Peserta tidak menyelesaikan pelatihan sampai akhir </li>
                                                        </ul>                                                
                                                    <li>Peserta yang tersebut pada poin 2a dan 2b akan dikenakan sanksi administrasi berupa :</li>
                                                        <ul>
                                                            <li>a. Tidak mendapatkan hak-hak yang seharusnya diterima sebagai peserta dan </li>
                                                            <li>b. Tidak dapat mengikuti atau diikutsertakan dari semua Program Kementerian
                                                            Kominfo yang diselenggarakan oleh Badan Litbang SDM</li>
                                                        </ul>
                                                    <li>Sanksi administrasi yang tersebut pada poin 3 tidak berlaku jika terjadi force majeure atau
                                                    peserta tidak dapat mengikuti pelatihan karena alasan kesehatan yang dibuktikan dengan Surat
                                                    Keterangan dari dokter rumah sakit pemerintah</li>
                                                
                                                    <li>Peserta yang memenuhi persyaratan untuk mengikuti Ujian Sertifikasi Industri, akan diberikan
                                                    fasilitas pembiayaan tes sertifikasi. Biaya yang timbul atas keikutsertaan dalam tes sertifikasi
                                                    selain biaya tes sertifikasi tersebut menjadi tanggung jawab peserta</li>
                                                
                                                    <li>Memakai pakaian bebas, rapi, dan sopan</li>
                                                
                                                    <li>Mengenakan tanda pengenal peserta selama pelatihan berlangsung</li>
                                                
                                                    <li>Hal-hal yang belum diatur dalam Pedoman ini akan disampaikan kemudian secara resmi oleh
                                                    pejabat yang berwenang.</li>
                                                </ol>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Akhir Tab Contetn --}}

                          </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Batch 1 Modal-->
    <div class="modal fade" id="Batch1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bacth 1</h5>
            </div>
            <div class="modal-body">Bact 1 dimulai dari tanggal 00-00-0000 sampai 0000000</div>
            </div>
        </div>
    </div>

    <!-- Batch 1 Modal-->
    <div class="modal fade" id="Batch2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bacth 2</h5>
            </div>
            <div class="modal-body">Bact 2 dimulai dari tanggal 22-22-2222 sampai 22-22-2222</div>
            </div>
        </div>
    </div>
@endsection
 
@section('js')
    <script src="{{asset('/js/contact.js')}}"></script>    
@endsection