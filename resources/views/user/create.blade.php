@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Cards</h1>
    </div>

    <div class="row">

      <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
          <form action="/user" method="POST">
            @csrf
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <label>First Name</label>
                  <input class="form-control" type="text" name="first_name">
              </div>
              <div class="form-group">
                  <label>Last Name</label>
                  <input class="form-control" type="text" name="last_name">
              </div>
            </div>
            <div class="card-footer">
              <div class="row">
                  <button type="submit" class="btn btn-success">Submit</button>
                  &nbsp;&nbsp;&nbsp;
                  <a href="{{route('artikel')}}" class="btn btn-info">Kembali</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection