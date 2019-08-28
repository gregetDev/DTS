@extends('layouts.admin')

@section('title', 'Participant')

@section('content')
   <!-- Begin Page Content -->
   <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">All Participants</h1>
        <p class="mb-4">Klik Pada Gambar Untuk Zoom</p>

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
                    <th>Nik</th>
                    <th>Ipk</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Ktp</th>
                    <th>Dns</th>
                    <th>Ijasah</th>
                    <th><i class="fas fa-fw fa-cog"></i></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Ipk</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Ktp</th>
                    <th>Dns</th>
                    <th>Ijasah</th>
                    <th><i class="fas fa-fw fa-cog"></i></th>
                  </tr>
                </tfoot>
                <tbody>
                    @foreach ($participant as $item)
                        <tr>
                            <td class="align-middle">{{$loop -> iteration}}</td>
                            <td class="align-middle">{{($item->nik)}}</td>
                            <td class="align-middle">{{($item->ipk)}}</td>
                            <td class="align-middle">{{($item->jk)}}</td>
                            <td class="align-middle">{{($item->alamat)}}</td>
                            <td class="align-middle" align="center"><img class="img img-fluid" data-toggle="modal" data-target="#{{substr($item->ktp,17,3)}}" src="{{('/ckeditor/kcfinder/upload/images/'.$item->ktp)}}" width="32"></td>
                            <td class="align-middle" align="center"><img class="img img-fluid" data-toggle="modal" data-target="#{{substr($item->dns,17,3)}}" src="{{('/ckeditor/kcfinder/upload/images/'.$item->dns)}}" width="32"></td>
                            <td class="align-middle" align="center"><img class="img img-fluid" data-toggle="modal" data-target="#{{substr($item->ijasah,17,3)}}" src="{{('/ckeditor/kcfinder/upload/images/'.$item->ijasah)}}" width="32"></td>
                            <td class="align-middle" align="center">
                                <a href="peserta/update/{{$item->nik}}" class="btn btn-primary btn-sm">Process</a>
                                <a href="peserta/detail/{{$item->nik}}" class="btn btn-warning btn-sm">Detail</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="{{substr($item->ktp,17,3)}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img img-fluid" align="center" src="{{('/ckeditor/kcfinder/upload/images/'.$item->ktp)}}"></td>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="{{substr($item->dns,17,3)}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img img-fluid" align="center" src="{{('/ckeditor/kcfinder/upload/images/'.$item->dns)}}"></td>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="{{substr($item->ijasah,17,3)}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body" align="center">
                                        <img class="img img-fluid" src="{{('/ckeditor/kcfinder/upload/images/'.$item->ijasah)}}"></td>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

@endsection