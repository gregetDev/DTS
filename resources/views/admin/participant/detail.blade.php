@extends('layouts.admin')

@section('title', 'Participant')

@section('content')
   <!-- Begin Page Content -->
   <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Participant</h1>
        <p class="mb-4"></p>

        <!-- Content Row -->
        <div class="row">

            <!-- Ktp -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">NIK</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$participant[0]->nik}}</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ktp -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gambar Ktp</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="">Download -></a></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ijasah -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gambar Ijasah</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="">Download -></a></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DNS -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gambar DNS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="">Download -></a></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Identity</h6>
          </div>
          <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                        <p><b>Nama </b></p>
                        <p><b>E-Mail </b></p>
                        <p><b>No Hp </b></p>
                        <p><b>Nama Universitas </b></p>
                        <p><b>Semester </b></p>
                        <p><b>Ipk </b></p>
                        <p><b>Gender </b></p>
                        <p><b>Alamat </b></p>
                    </div>
    
                    <div class="col-md-10">
                        <p><b>: </b>{{$participant[0]->name}} </p>
                        <p><b>: </b>{{$participant[0]->email}} </p>
                        <p><b>: </b>{{$participant[0]->no_hp}} </p>
                        <p><b>: </b>{{$participant[0]->nama_universitas}} </p>
                        <p><b>: </b>{{$participant[0]->semester}} </p>
                        <p><b>: </b>{{$participant[0]->ipk}} </p>
                        <p><b>: </b>{{$participant[0]->jk}} </p>
                        <p><b>: </b>{{$participant[0]->alamat}} </p>
                    </div>
              </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

@endsection