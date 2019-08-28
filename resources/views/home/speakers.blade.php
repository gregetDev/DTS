@extends('layouts.app')

@section('title', 'Speakers')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/speakers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/speakers_responsive.css')}}">
@endsection
	
@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/tutor.jpg')}}"data-speed="0.8"></div>
@endsection
    
@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">Instruktur</div>
                <div class="breadcrumbs ml-auto">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Instruktur</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <section id="team" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="section-title speaker_title h1">Pengajar Digital Talent Scholarship</h5>
                </div>
            </div>
            <div class="row">

               @foreach ($instructors as $item)
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="{{asset('/ckeditor/kcfinder/upload/images/'.$item->foto)}}" alt="card image"></p>
                                            <h4 class="card-title">{{($item->nama)}}</h4>
                                            <a style="position: absolute; bottom: 15px;" href="#" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">{{($item->nama)}}</h4>
                                            <p class="card-text"><?= substr($item->deskripsi,0,100)?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- /Team member -->
               @endforeach
               
            </div>
        </div>
    </section>
    <!-- /Speaker -->
    
    <!-- Pengajar Pendamping -->
    <section id="team" class="pb-5">
        <div class="container">
  
            <div class="row">
                <div class="col-md-12">
                    <h5 class="section-title speaker_title h1">Pengajar Pendamping</h5>
                </div>
            </div>

            <div class="row">

                @foreach ($asistant as $item)
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="{{asset('/ckeditor/kcfinder/upload/images/'.$item->foto)}}" alt="card image"></p>
                                            <h4 class="card-title">{{($item->nama)}}</h4>
                                            
                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">{{($item->nama)}}</h4>
                                            <p class="card-text">{{($item->deskripsi)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- /Team member -->
                @endforeach

            </div>
        </div>
        </section>
        <!-- /Pengajar Pendamping -->
    
        <!-- Sekertariat -->
        <section id="team" class="pb-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h5 class="section-title speaker_title h1">Sekretariat</h5>
                </div>
            </div>

            <div class="row">
               		
                @foreach ($sek as $item)
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="{{('/ckeditor/kcfinder/upload/images/'.$item->foto)}}" alt="card image"></p>
                                        <h4 class="card-title">{{($item->nama)}}</h4>
    
                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">{{($item->nama)}}</h4>
                                            <p class="card-text">{{($item->deskripsi)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- /Team member -->
                @endforeach
                
            </div>
        </div>
    </section>
@endsection
 
@section('js')
    <script src="{{asset('/js/speakers.js')}}"></script>    
@endsection