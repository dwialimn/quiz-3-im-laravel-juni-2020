@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
          <div class="row">
              <div class="col-lg-6 mt-2">
                  <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-md-9">
                    <a style="float: right;" class="btn btn-primary" href="{{route('tambah')}}">Tambah</a>
                  </div>
                  <div class="col-md-3">
                    <a style="float: right;" class="btn btn-primary" href="{{route('buat')}}">Artikel</a>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr style="text-align: center;">
                <th>Nama</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $p)
              <tr style="text-align: center;">
                <td>{{$p->first_name}} {{$p->last_name}}</td>
                <td>
                  <a class="btn btn-primary" href="{{url('artikel/')}}">Edit</a>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <a class="btn btn-primary" href="{{url('artikel/')}}">Hapus</a>
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