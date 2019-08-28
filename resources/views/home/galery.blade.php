@extends('layouts.app')

@section('title', 'Galery')

@section('css')
   
<link rel="stylesheet" type="text/css" href="{{asset('/css/elements.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/elements_responsive.css')}}">
@endsection
	
@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/gallery.jpg')}}"data-speed="0.8"></div>
@endsection
    
@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">Gallery</div>
                <div class="breadcrumbs ml-auto">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <section id="team" class="pb-5">
        <div class="elements">
        
            <div class="container">
        
                <div class="row">
    
                    @foreach ($Image as $item)
                    <!-- Team member -->
                    <div style="margin-bottom:20px" class="col-xs-12 col-sm-6 col-md-4">
                        <div>
                            <div class="img-thumbnail">
                                <img style="width: 100%;
                                height: 15vw;
                                object-fit: cover;" src="{{asset('/uploads/'.$item->filename)}}" class="img-fluid">
                            </div>
                        </div>
                    </div>  
                    <!-- /Team member -->
                    @endforeach
    
                </div>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <?php
                        // config
                        $link_limit = 7;
                        ?>
    
                        @if ($Image->lastPage() > 1)
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item {{ ($Image->currentPage() == 1) ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $Image->url(1) }}">First</a>
                                    </li>
                                @for ($i = 1; $i <= $Image->lastPage(); $i++)
                                    <?php
                                    $half_total_links = floor($link_limit / 2);
                                    $from = $Image->currentPage() - $half_total_links;
                                    $to = $Image->currentPage() + $half_total_links;
                                    if ($Image->currentPage() < $half_total_links) {
                                        $to += $half_total_links - $Image->currentPage();
                                    }
                                    if ($Image->lastPage() - $Image->currentPage() < $half_total_links) {
                                        $from -= $half_total_links - ($Image->lastPage() - $Image->currentPage()) - 1;
                                    }
                                    ?>
                                    @if ($from < $i && $i < $to)
                                        <li class="page-item {{ ($Image->currentPage() == $i) ? ' active' : '' }}">
                                            <a class="page-link" href="{{ $Image->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endif
                                @endfor
                                <li class="page-item {{ ($Image->currentPage() == $Image->lastPage()) ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $Image->url($Image->lastPage()) }}">Last</a>
                                </li>
                            </ul>
                        </nav>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
 
@section('js')
    <script src="{{asset('/js/elements.js')}}"></script>   
    <script src="{{asset('/js/contact.js')}}"></script>     
@endsection