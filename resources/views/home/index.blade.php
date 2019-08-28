@extends('layouts.app')

@section('title', 'Digital Talent Scholarship 2019')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/custom.css')}}">
@endsection
	
@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru.jpg')}}"data-speed="0.8"></div>
@endsection
    
@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content">
                <div class="home_title">DIGITAL TALENT</div>
                <div class="home_title">SCHOLARSHIP</div>
                <div class="home_title">2019<br></div>
                <div class="home_location">Fresh Graduate Academy(FGA)<br></div>
                <div class="home2">Machine Learning</div>
                <div class="home_date">9 Juli - 27 Agustus 2019</div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <div class="intro">
        <div class="">
            <div class="row">
                <div class="col col-md-8">

                    <div class="cta_title text-center"><b>Deskripsi Akademi</b></div>

                    <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
                        <div class="intro_body">
                            <p class="text-justify">
                                Program Fresh Graduate Academy (FGA) merupakan program pelatihan bidang TIK yang berfokus pada
                                enam
                                (6) tema pelatihan yakni Artificial Intelligence, Big Data Analytics, Cloud Computing,
                                Cybersecurity, Internet of Things, dan Machine Learning. Pelatihan ini ditujukan bagi 6.075
                                orang
                                lulusan D3/D4/S1 bidang TIK dan MIPA yang belum bekerja, agar memiliki kompetensi secara
                                profesional
                                dan sesuai dengan perkembangan ilmu pengetahuan dan teknologi di era revolusi industri 4.0.
                            <br>
                            </p>
                                
                            <p class="text-justify">
                                Penyelenggaraan program FGA ini berlangsung selama 144 jam pelajaran yang meliputi kegiatan
                                pelatihan tatap muka (offline), kelas pendamping atau add on, uji kompetensi, dan sertifikasi.
                                Dalam
                                penyelenggaraan program Fresh Graduate Academy, Kementerian Komunikasi dan Informatika
                                bekerjasama
                                dengan 20 universitas negeri dan 11 universitas swasta yang tersebar di seluruh Indonesia serta
                                global tech companies. Universitas dalam program ini berperan menjadi penyedia sarana dan
                                prasarana
                                serta instruktur pelatihan sesuai dengan skema pelatihan. Pada akhir pelatihan, peserta
                                pelatihan
                                akan disertifikasi kompetensi oleh global tech companies.
                            <br>
                            </p>
                                
                            <p class="text-justify">
                                Kelas pendamping atau add-on yang akan didapat oleh peserta FGA yaitu kewirausahaan digital
                                (Digipreneur) dan Soft Skills Development. Digipreneur bertujuan untuk menciptakan tenaga kerja
                                terampil di bidang IT yang memiliki wawasan kewirausahaan untuk terus berinovasi di industri
                                4.0.
                                Pelatihan yang akan dilaksanakan secara online ini akan menambah pengetahuan dan keterampilan
                                peserta dalam bidang kewirausahaan digital, cara memulai usaha digital, sampai dengan cara
                                mengelola
                                usaha digital. Materi pelatihan akan disampaikan oleh tokoh-tokoh digital dari berbagai bidang
                                seperti bidang kesehatan, makanan, properti, pertanian, transportasi, games, crowdfunding,
                                e-commerce, dan fintech. Sedangkan, Soft Skills Development bertujuan agar Peserta Digital
                                Talent
                                Scholarship 2019 menjadi pribadi yang mampu bersaing di era digital, memiliki inisiatif,
                                bertindak
                                secara efektif serta dapat menyesuaikan diri dengan dunia kerja. Pelatihan akan dilakukan secara
                                online melalui platform e-learning. Materi akan disampaikan oleh tenaga profesional dalam bentuk
                                video dan presentasi.
                            <br>
                            </p>
                            
                            <p class="text-justify">
                                Diharapkan, dengan terselenggaranya program FGA ini, dapat memberikan kemampuan siap pakai bagi
                                lulusan S1 dan D3/D4 yang akan berdampak untuk mengurangi angka pengangguran, serta mampu
                                memenuhi
                                kebutuhan tenaga terampil di bidang teknologi. Kementerian Komunikasi dan Informasi dalam hal
                                ini
                                berupaya untuk menciptakan ekosistem seimbang untuk memaksimalkan peran triple helix (instansi
                                pemerintahan, sektor privat, dan institusi pendidikan) untuk menjadi fasilitator dan akselerator
                                pendukung ekonomi digital.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div style="color:black"  class="card">
                        <div class="card-header">Persyaratan</div>

                        <div class="card-body">
                            <ol class="pr">
                                <style>
                                .pr li{
                                    margin-top:20px;
                                    margin-left:25px;
                                };
                                </style>
                                <li >Warga Negara Indonesia</li>
                                <li>Usia Maksimal 29 Tahun pada saat mendaftar</li>
                                <li>Lulusan atau Mahasiswa yang sedang menuliskan Tugas Akhir dari Jenjang Pendidikan D3, D4, atau Strata-1 yang terkait terkait dalam bidang TIK, MIPA, dan Teknik lainnya yang berhubungan dengan TIK</li>
                                <li>Belum Mendapatkan Pekerjaan Tetap/Pernah Bekerja tapi sedang tidak
                                    bekerja</li>
                                <li>Lolos Seleksi Administrasi dan Tes Substansi (Seleksi Substansi
                                    dilaksanakan secara online</li>
                                <li>Terbuka bagi penyandang disabilitas : Netra (Universitas Sebelas Maret),
                                    Rungu & Daksa (Universitas Brawijaya)</li>
                                <li>Scan KTP</li>
                                <li>Scan Ijazah D3,D4 atau Strata-1/Surat Keterangan Lulus dan Transkrip
                                    Nilai dalam 1 file dengan format PDF (Bagi mahasiswa tingkat akhir melampirkan surat
                                    keterangan dari prodi/KRS yang menerangkan sedang menulis tugas akhir dan transkrip terakhir
                                    bagian bulan dan tahun lulus diisikan expected graduation date)</li>
                                <li>Menyetujui Surat Pernyataan Peserta DTS 2019</li>
                                <li>Menyetujui Syarat dan Ketentuan DTS 2019</li>
                                <li>Menyetujui Tata Tertib DTS 2019</li>
                                <li>Sanggup membawa laptop dengan spesifikasi tertentu sesuai dengan
                                        persyaratan di masing-masing tema pelatihan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top:50px" class="row">
                <div class="col-md-12">
                    <div class="h5"><center>Alur Pendaftaran Digital Talent Scholarship 2019</div>
                </div>
            </div>
            <div style="margin-bottom:50px" class="row">
                <img class="img-fluid" src="images/alur.jpg">
            </div>
        </div>
    </div>

    {{-- Nesws --}}
    <div class="cta">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/header2.jpg"
				data-speed="0.8"></div>
			<div class="container">
				<div  style="margin-bottom:20px" class="cta_title text-center">
					Berita Terbaru!
				</div>
                <div class="row">
                    @foreach ($artikel as $item)
                        <?php
                            $art = substr($item->isi,0,200);
                        ?>

                        <div class="col-md-4" style="margin-bottom:10px">
                            <div class="cta_content text-center">

                                <div class="card cardB">
                                    <img height="197px" class="card-img-top" src="{{asset('/ckeditor/kcfinder/upload/images/'.$item->thumbnail)}}" alt="Card image cap">

                                    <div class="card-body">
                                        <h5 class="card-title">{{($item->judul)}}</h5>
                                        <p class="card-text"><?= $art ?></p>
                                        <a style="margin-top:50px" href="news" class="btn btn-primary">Lihat Berita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
					<a style="margin-top:50px" href="news" class="cta_button btn btn-primary right">Lihat Selengkapnya -></a>
                </div>
			</div>
		</div>

@endsection
 
@section('js')
    <script src="{{asset('/js/custom.js')}}"></script>
    <script src="{{asset('/js/contact.js')}}"></script>
@endsection