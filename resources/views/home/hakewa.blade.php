@extends('layouts.app')

@section('title', 'Peserta')

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
                <div class="current_page">Peserta</div>
                <div class="breadcrumbs ml-auto">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Hak Kewajiban</li>
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
                    <div class="cta_title text-center">Hak Penerima Beasiswa Fresh Graduate Academy (FGA) 2019</div>
                    <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
                        <div class="intro_body">
                            <p>
                                1. Mendapatkan Seminar Kit;
                            </p>
                            <p>
                                2. Mendapatkan Uang saku diklat sebesar Rp 750.000,00/bulan (Tujuh ratus lima puluh ribu rupiah)
                                yang akan diserahkan pada akhir pelaksanaan pelatihan sesuai ketentuan dari Kementerian Kominfo;
                            </p>
                            <p>
                                3. Mendapatkan Sertifikat dari Kementerian Kominfo dan Certificate of Completion dari Mitra
                                Pelatihan jika telah mengikuti pelatihan dan memenuhi persyaratan yang ditentukan;
                            </p>
                            <p>
                                4. Mendapat kesempatan untuk mengikuti Ujian Sertifikasi Industri jika memenuhi persyaratan yang
                                ditentukan;
                            </p>
                            <p>
                                5. Mendapat voucher (kupon) untuk mengikuti Ujian Sertifikasi Industri jika memenuhi persyaratan
                                yang ditentukan;
                            </p>
                            <p>
                                6. Mendapat kesempatan untuk mengikuti pelatihan online Kewirausahaan Digital dan Soft-Skills
                                Development;
                            </p>
                            <p>
                                7. Setelah menyelesaikan pelatihan, peserta mendapat kesempatan untuk mengikuti Program Pasca
                                Pelatihan berupa pemagangan dan/atau penempatan kerja bagi peserta yang memenuhi kualifikasi dan
                                belum memiliki pekerjaan penuh waktu.
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-12">
                        <div class="cta_title text-center">Kewajiban Penerima Beasiswa Fresh Graduate Academy (FGA) 2019</div>
                        <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
                            <div class="intro_body">
                                <p>
                                    1. Mengisi, menandatangani, dan mengunggah Form Komitmen Partisipasi Program Bantuan Pemerintah
                                    DTS 2019 sebelum pelaksanaan pelatihan;
                                </p>
                                <p>
                                    2. Mengisi dan menyerahkan lembar Kuesioner Monitoring secara online dan/atau offline yang akan
                                    diberikan di tengah masa pelaksanaan pelatihan;
                                </p>
                                <p>
                                    3. Menyusun, menandatangani, dan mengunggah Laporan Pertanggungjawaban Peserta Digital Talent
                                    Scholarship 2019 pada akhir pelaksanaan pelatihan;
                                </p>
                                <p>
                                    4. Menaati seluruh aturan yang telah ditentukan oleh perguruan tinggi, lembaga pelaksana, atau
                                    mitra pelaksana pelatihan tempat peserta melaksanakan pelatihan;
                                </p>
                                <p>
                                    5. Mengikuti pelatihan pertemuan tatap muka dan ujian sejumlah 144 Jam Pelajaran yang
                                    dilaksanakan dalam rentang waktu 36 hari sesuai dengan jadwal yang ditentukan oleh penyelenggara
                                    pelatihan;
                                </p>
                                <p>
                                    6. Menanggung komponen pembiayaan lain selain yang ditanggung oleh Kementerian Kominfo
                                    sebagaimana dimaksud pada poin Hak Peserta;
                                </p>
                                <p>
                                    7. Membawa laptop dengan kapasitas sesuai spesifikasi yang telah ditetapkan untuk setiap tema
                                    pelatihan;
                                </p>
                                <p>
                                    8. Bersikap jujur, bertanggung jawab serta menghindari segala bentuk kecurangan.
                                </p>
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