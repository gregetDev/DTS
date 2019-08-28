@extends('layouts.admin')

@section('title', 'Instructor')

@section('page-heading', 'Instructor')

@section('content')
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Instructor</h6>
        </div>

        <div class="card-body">

            <!-- Awal Container -->
            <div class="container-fluid">
                <!-- Awal Instructor -->
                <div class="row">
                    <div class="col-md-12">
 
                        <form action="/instruktur" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                            <select name="kategori" style="width:193px" class="form-control form-group float-md-right" required>
                                <option value="Pengajar">Pengajar</option>
                                <option value="Pengajar Pendamping">Pengajar Pendamping</option>
                                <option value="Sekretariat">Sekretariat</option>
                            </select>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Full Name" required autofocus>
                            </div>
                            <div class="form-group">
                                <textarea style="height:150px" name="deskripsi" class="form-control" placeholder="Deskripsi" required></textarea>
                            </div>
                            <div class="form-group">
                                Profile Image : <input type="file" name="file" class="" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="add" value="Add" class="btn btn-success">
                            </div>
                        </form>
                     
                    </div>
                </div>	
                <!-- Akhir Instructor  -->

            </div>
            <!-- Akhir Container -->
        </div>
    </div>
@endsection