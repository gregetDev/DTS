@extends('layouts.admin')

@section('title', 'Article')

@section('page-heading', 'Article')

@section('content')
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Articles</h6>
        </div>

        <div class="card-body">
            <!-- Awal Search -->
            <div class="box" style="margin-bottom: 50px;">
                <form class="form-inline float-md-right" action="/artikel/search" method="GET">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" name="pencarian" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hiden="true"></span></button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- Akhir Search -->

            <!-- Awal Container -->
            <div class="container-fluid">
                <!-- Awal Artikel -->
                <div class="row">
                    @foreach ($articles as $item)
    
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card">

                                <div class="card-header ">
                                    <img style="width: 100%;
                                    height: 15vw;
                                    object-fit: cover;" class="img-fluid card-img-top" src="{{asset('/ckeditor/kcfinder/upload/images/'.$item -> thumbnail) }}" alt="..."/>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-text"><a href="#">{{$item -> judul}}</a></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><a class="badge" href="#">{{$item -> label}}</a></h6>
                                </div>
                                
                                <div class="card-body">

                                    <div style="margin-bottom:15px" class="post-author float-md-left">
                                        <img class="rounded-circle" height="32" src="{{asset('ckeditor/kcfinder/upload/images/'.$item -> foto)}} " width="32">
                                        <a href="#">{{$item ->nama}}</a>
                                    </div>

                                    <div class="btn-group dropup float-md-right">
                                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fa fa-cog" aria-hiden="true"></span>
                                        </button>   
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/artikel/destroy/{{$item -> id}}" onclick="return confirm('Yakin ingin meghapus data ?')">Delete</a>
                                            <a class="dropdown-item" href="/artikel/edit/{{$item -> id}}">Edit</a>
                                        </div>
                                       
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>	
                <!-- Akhir Artikel  -->

                {{-- Awal Pagination --}}
                <div style="margin-top:20px" class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <?php
                        // config
                        $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
                        ?>
    
                        @if ($articles->lastPage() > 1)
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item {{ ($articles->currentPage() == 1) ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $articles->url(1) }}">First</a>
                                    </li>
                                @for ($i = 1; $i <= $articles->lastPage(); $i++)
                                    <?php
                                    $half_total_links = floor($link_limit / 2);
                                    $from = $articles->currentPage() - $half_total_links;
                                    $to = $articles->currentPage() + $half_total_links;
                                    if ($articles->currentPage() < $half_total_links) {
                                        $to += $half_total_links - $articles->currentPage();
                                    }
                                    if ($articles->lastPage() - $articles->currentPage() < $half_total_links) {
                                        $from -= $half_total_links - ($articles->lastPage() - $articles->currentPage()) - 1;
                                    }
                                    ?>
                                    @if ($from < $i && $i < $to)
                                        <li class="page-item {{ ($articles->currentPage() == $i) ? ' active' : '' }}">
                                            <a class="page-link" href="{{ $articles->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endif
                                @endfor
                                <li class="page-item {{ ($articles->currentPage() == $articles->lastPage()) ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $articles->url($articles->lastPage()) }}">Last</a>
                                </li>
                            </ul>
                        </nav>
                        @endif
                    </div>
                </div>
                {{-- Akhir Pagination --}}

            </div>
            <!-- Akhir Container -->
        </div>
    </div>
@endsection