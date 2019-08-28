@extends('layouts.admin')

@section('title', 'Instrutor')

@section('content')
   <!-- Begin Page Content -->
   <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">All Instructors</h1>
        <p class="mb-4">Terdiri dari pengajar, pengajar pendamping dan sekretariat.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Instructors</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Foto</th>
                    <th><i class="fas fa-fw fa-cog"></i></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Foto</th>
                    <th><i class="fas fa-fw fa-cog"></i></th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($instrctors as $item)
                  <tr>
                      <td>{{$loop -> iteration}}</td>
                      <td>{{($item->nama)}}</td>
                      <td>{{($item->deskripsi)}}</td>
                      <td>{{($item->kategori)}}</td>
                      <td align="center"><img class="img img-fluid" src="{{('/ckeditor/kcfinder/upload/images/'.$item->foto)}}" width="32"></td>
                      <td align="center">
                          <a href="instruktur/edit/{{$item->id}}?m=4" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-edit"></i></a>
                          <a href="instruktur/destroy/{{$item->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin meghapus data ?')"><i class="fas fa-fw fa-trash"></i></a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

@endsection