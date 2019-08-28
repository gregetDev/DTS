@extends('layout.admin')

@section('title', 'Admin | Galery')

@section('header')
    <h1 class="page-header">
        Galery
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('dashboard?m=1')}}">Home</a></li>
        <li class="active">Galery</li>
    </ol>
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <!-- Awal Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Galery</div>
                    </div>
                </div>

                <!-- Awal Panel Body -->
                <div class="panel-body">
                   
                </div>
                <!-- Akhir Panel Body -->

            </div>
             <!-- Akhir Panel -->
        </div>
    </div>

  
@endsection