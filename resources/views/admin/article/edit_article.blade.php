@extends('layouts.admin')

@section('title', 'Article')

@section('page-heading', 'Article')

@section('content')
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Articles</h6>
        </div>

        <div class="card-body">

            <!-- Awal Container -->
            <div class="container-fluid">
                <!-- Awal Artikel -->
                <div class="row">
                    <div class="col-md-12">
 
                        <form action="/artikel/update/{{$article->id}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" value="{{$article->id}}" name="id">
                            </div>
                            <select name="label" style="width:150px" class="form-control form-group pull-right" required>
                                <option value="Event">Event</option>
                                <option value="Tips & Tricks">Tips & Tricks</option>
                            </select>
                            <div class="form-group">
                                <input type="text" value="{{$article->judul}}" name="judul" class="form-control" placeholder="Masukan Judul" required autofocus>
                            </div>
                            <div class="form-group">
                                <textarea style="height:10%" name="isi" id="ckeditor" class="form-control ckeditor" required>{{$article->isi}}</textarea>
                            </div>
                            <div class="form-group">
                                Thumbnail : <input type="file" name="file" class="" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="edit" value="Update" class="btn btn-success">
                            </div>
                        </form>
                    
                    </div>
                </div>	
                <!-- Akhir Artikel  -->

            </div>
            <!-- Akhir Container -->
        </div>
    </div>
@endsection