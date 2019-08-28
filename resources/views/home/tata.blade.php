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
                        <li>Tata Tertib</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <div class="intro">
        <div class="cta_title text-center">Tata Tertib Pelatihan Fresh Graduate Academy (FGA) 2019</div>
        <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">
            <div class="intro_body">
                <p>
                    1. Peserta yang terlambat hadir lebih dari 15 menit dari jadwal yang telah ditetapkan dianggap
                    tidak mengikuti 1 (satu) kali pertemuan;
                </p>
                <p>
                    2. Peserta tidak berhak menerima Sertifikat dari Kementerian Kominfo dan Certificate of
                    Completion dari Mitra Pelatihan, jika:
                    <p>&emsp;&emsp;a. Peserta tidak mengikuti pelatihan sebanyak 3 (tiga) pertemuan; dan/ atau
                    </p>
                    <p>&emsp;&emsp;b. Peserta tidak menyelesaikan pelatihan sampai akhir;</p>
                </p>
                <p>
                    3. Peserta yang tersebut pada poin 2a dan 2b akan dikenakan sanksi administrasi berupa:
                    <p>&emsp;&emsp;a. Tidak mendapatkan hak-hak yang seharusnya diterima sebagai peserta; dan
                    </p>
                    <p>&emsp;&emsp;b. Tidak dapat mengikuti atau diikutsertakan dari semua Program Kementerian
                        Kominfo yang diselenggarakan oleh Badan Litbang SDM;</p>
                </p>
                <p>
                    4. Sanksi administrasi yang tersebut pada poin 3 tidak berlaku jika terjadi force majeure atau
                    peserta tidak dapat mengikuti pelatihan karena alasan kesehatan yang dibuktikan dengan Surat
                    Keterangan dari dokter rumah sakit pemerintah;
                </p>
                <p>
                    5. Peserta yang memenuhi persyaratan untuk mengikuti Ujian Sertifikasi Industri, akan diberikan
                    fasilitas pembiayaan tes sertifikasi. Biaya yang timbul atas keikutsertaan dalam tes sertifikasi
                    selain biaya tes sertifikasi tersebut menjadi tanggung jawab peserta;
                </p>
                <p>
                    6. Memakai pakaian bebas, rapi, dan sopan;
                </p>
                <p>
                    7. Mengenakan tanda pengenal peserta selama pelatihan berlangsung;
                </p>
                <p>
                    8. Hal-hal yang belum diatur dalam Pedoman ini akan disampaikan kemudian secara resmi oleh
                    pejabat yang berwenang.
                </p>
            </div>
        </div>
    </div>
@endsection
 
@section('js')
    <script src="{{asset('/js/contact.js')}}"></script>    
@endsection