@extends('layouts.app')

@section('title', 'Daftar')

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
<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col col-lg-12">
                <div class="cta_title text-center"><b>Digitalent Scholarship Batch 2</b></div>
                <p style="margin-top:12px" class="text-center">Agenda Pelaksanaan</p>

                <div class="d-flex justify-content-center">
                <table style="border-collapse: collapse; border: none;">
                    <tbody>
                        <tr style="height: 27.9pt;">
                            <td style="width: 233.75pt; border: solid #4472C4 1.0pt; border-right: none; background: #4472C4; padding: 0cm 5.4pt 0cm 5.4pt; height: 27.9pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;">
                                    <strong><span
                                            style="font-size: 13.0pt; font-family: 'Times New Roman','serif'; color: white;">Tanggal</span></strong>
                                </p>
                            </td>
                            <td style="width: 233.75pt; border: solid #4472C4 1.0pt; border-left: none; background: #4472C4; padding: 0cm 5.4pt 0cm 5.4pt; height: 27.9pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;">
                                    <strong><span
                                            style="font-size: 13.0pt; font-family: 'Times New Roman','serif'; color: white;">Kegiatan</span></strong>
                                </p>
                            </td>
                        </tr>
                        <tr style="height: 20.5pt;">
                            <td style="width: 233.75pt; border: solid #8EAADB 1.0pt; border-top: none; background: #D9E2F3; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.5pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;">
                                    <strong><span style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">19
                                            Agustus &ndash; 7 September 2019</span></strong></p>
                            </td>
                            <td style="width: 233.75pt; border-top: none; border-left: none; border-bottom: solid #8EAADB 1.0pt; border-right: solid #8EAADB 1.0pt; background: #D9E2F3; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.5pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span
                                        style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">Proses
                                        Rekrutmen</span></p>
                            </td>
                        </tr>
                        <tr style="height: 20.8pt;">
                            <td style="width: 233.75pt; border: solid #8EAADB 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.8pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;">
                                    <strong><span style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">9
                                            &ndash; 11 September 2019</span></strong></p>
                            </td>
                            <td style="width: 233.75pt; border-top: none; border-left: none; border-bottom: solid #8EAADB 1.0pt; border-right: solid #8EAADB 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.8pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span
                                        style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">Seleksi
                                        Administratif</span></p>
                            </td>
                        </tr>
                        <tr style="height: 21.05pt;">
                            <td style="width: 233.75pt; border: solid #8EAADB 1.0pt; border-top: none; background: #D9E2F3; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.05pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;">
                                    <strong><span style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">12
                                            &ndash; 14 September 2019</span></strong></p>
                            </td>
                            <td style="width: 233.75pt; border-top: none; border-left: none; border-bottom: solid #8EAADB 1.0pt; border-right: solid #8EAADB 1.0pt; background: #D9E2F3; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.05pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span
                                        style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">Seleksi
                                        Substansi</span></p>
                            </td>
                        </tr>
                        <tr style="height: 20.6pt;">
                            <td style="width: 233.75pt; border: solid #8EAADB 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.6pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;">
                                    <strong><span style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">23
                                            September 2019</span></strong></p>
                            </td>
                            <td style="width: 233.75pt; border-top: none; border-left: none; border-bottom: solid #8EAADB 1.0pt; border-right: solid #8EAADB 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.6pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span
                                        style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">Pembukaan DTS
                                        2019 Batch 2</span></p>
                            </td>
                        </tr>
                        <tr style="height: 20.95pt;">
                            <td style="width: 233.75pt; border: solid #8EAADB 1.0pt; border-top: none; background: #D9E2F3; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.95pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;">
                                    <strong><span style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">24
                                            September 2019 &ndash; 20 Oktober 2019</span></strong></p>
                            </td>
                            <td style="width: 233.75pt; border-top: none; border-left: none; border-bottom: solid #8EAADB 1.0pt; border-right: solid #8EAADB 1.0pt; background: #D9E2F3; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.95pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span
                                        style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">Pelaksanaan
                                        DTS 2019 Batch 2</span></p>
                            </td>
                        </tr>
                        <tr style="height: 20.55pt;">
                            <td style="width: 233.75pt; border: solid #8EAADB 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.55pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;">
                                    <strong><span style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">21
                                            Oktober 2019</span></strong></p>
                            </td>
                            <td style="width: 233.75pt; border-top: none; border-left: none; border-bottom: solid #8EAADB 1.0pt; border-right: solid #8EAADB 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.55pt;"
                                width="312">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span
                                        style="font-size: 13.0pt; font-family: 'Times New Roman','serif';">Penutupan DTS
                                        2019 Batch 2</span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>

            <div style="margin-top:50px" class="row">
                <div class="col-6 ">
                    <div class="d-flex justify-content-center">
                        <div class="button element_button button_1"><a href="register?tm=Machine Learning">Daftar Machine Learning</a>
                    </div>
                    </div></br>
                    <p align="justify">Pelatihan ini akan membahas dasar-dasar Machine Learning dengan Python.
                        Materi mencakup dasar-dasar pemrograman Python untuk Machine Learning, Supervised vs
                        Unsupervised Learning, Statistical Modeling kaitannya dengan Machine Learning,
                        alogritme-algoritme yang populer seperti: Classification, Regression, Clustering, dan
                        Dimensional Reduction, dan juga model-model yang populer seperti: Train/Test Split, Gradient
                        Descent, dan Mean Squared Error. Materi berikutnya adalah Deep Learning dengan Tensfor Flow
                        dan GPU. Pelatihan ini akan fokus pada isi praktis disertai dengan praktek.</p>
                    <p align="justify">Untuk spesifikasi laptop dan aplikasi adalah : </p>
                    <p align="justify">RAM min. 2GB</p>
                    <p align="justify">OS: Windows 7,8, atau 10, MAC OSX</p>
                    <p align="justify">Processor: 32/64-bit</p>
                    <p align="justify">Web browser: versi terbaru Microsoft Internet Explorer, Google Chrome, atau
                        Mozilla Firefox yang telah terinstall versi terbaru Java dan Flash Player</p>
                    </br>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center">
                        <div class="button element_button button_1"><a href="register?tm=Cloud Computing">Daftar Cloud Computing</a>
                    </div>
                    </div></br>
                    <p align="justify">Pelatihan ini akan membahas dasar-dasar Machine Learning dengan Python.
                        Materi mencakup dasar-dasar pemrograman Python untuk Machine Learning, Supervised vs
                        Unsupervised Learning, Statistical Modeling kaitannya dengan Machine Learning,
                        alogritme-algoritme yang populer seperti: Classification, Regression, Clustering, dan
                        Dimensional Reduction, dan juga model-model yang populer seperti: Train/Test Split, Gradient
                        Descent, dan Mean Squared Error. Materi berikutnya adalah Deep Learning dengan Tensfor Flow
                        dan GPU. Pelatihan ini akan fokus pada isi praktis disertai dengan praktek.</p>
                    <p align="justify">Untuk spesifikasi laptop dan aplikasi adalah : </p>
                    <p align="justify">RAM min. 2GB</p>
                    <p align="justify">OS: Windows 7,8, atau 10, MAC OSX</p>
                    <p align="justify">Processor: 32/64-bit</p>
                    <p align="justify">Web browser: versi terbaru Microsoft Internet Explorer, Google Chrome, atau
                        Mozilla Firefox yang telah terinstall versi terbaru Java dan Flash Player</p>
                    </br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('/js/speakers.js')}}"></script>    
@endsection

