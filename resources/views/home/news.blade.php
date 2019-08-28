@extends('layouts.app')

@section('title', 'Berita')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/news.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/news_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
@endsection
	
@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/berita.jpg')}}"data-speed="0.8"></div>
@endsection
    
@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">Berita</div>
                <div class="breadcrumbs ml-auto">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <div class="news">
        <div class="container">
            <div class="row">
                    <div class="col-lg-8">
                        <div class="news_items">	
                            
                            @foreach ($articles as $item)													
                                <div class="news_item" id=''>
                                    <div class="news_image_container">
                                        <div class="news_image"><img src="{{asset('/ckeditor/kcfinder/upload/images/'.$item->thumbnail)}}"  alt=""></div>
                                    </div>

                                    <div class="news_body">
        
                                        <div class="news_title"><a href="#">{{($item->judul)}}</a></div>
        
                                        <div class="news_info">
                                            <ul>
                                                <!-- News Author -->
                                                <li>
                                                    <div class="news_author_image"><img src="{{asset('/ckeditor/kcfinder/upload/images/'.$item->foto)}}" alt=""></div>
                                                    <span>by <a>{{($item->nama)}}</a></span>
                                                </li>
                                                <!-- Label -->
                                                <li><span>in <a>{{($item->label)}}</a></span></li>
                                                <!-- Tanggal -->
                                                <li><a>{{($item->created_at)}}</a></li>
                                            </ul>
                                        </div>

                                        <div class="news_text">
                                            <?php
                                                $art = $item->isi;
                                            ?>
                                            <p>
                                                <?= $art ?>
                                            </p>
                                        </div>
        
                                    </div>

                                </div>
                            @endforeach

                            <!-- Pagination -->
                        </div>
                    </div>
                

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="latest_posts">
                                <div class="latest_posts_title">Latest Posts</div>
                                <div class="latest_container">
                                    @foreach ($articles as $item)

                                        <!-- Latest -->
                                        <div class="latest d-flex flex-row align-items-start justify-content-start">
                                            <div>
                                                <div class="latest_image"><img src="{{asset('/ckeditor/kcfinder/upload/images/'.$item->thumbnail)}}" alt=""></div>
                                            </div>

                                            <div class="latest_content">

                                                <div class="latest_title"><a href="">{{($item->judul)}}</a></div>
                                                <div class="latest_date">{{($item->created_at)}}</div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
            
            </div>
        </div>
    </div>
@endsection
 
@section('js')
    <script src="{{asset('/js/news.js')}}"></script>   
@endsection