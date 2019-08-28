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
                    <div class="cta_title text-center"><b>Pelatihan Cloud Computing</b></div>
						<div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
							<div class="intro_body">
								<p class="text-justify">
                                        
                                    Pelatihan ini secara garis besar bertujuan untuk memberikan pemahaman dan pengalaman 
                                    kepada peserta dalam perancangan sistem dan aplikasi menggunakan Cloud Computing. 
                                    Peserta dibekali dengan teori dan praktik untuk memahami, menggunakan, serta 
                                    mengaplikasikan Cloud Computing sederhana.<br>
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