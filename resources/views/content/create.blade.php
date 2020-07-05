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
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Buat Artikel</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" type="text" name="judul">
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input class="form-control" type="text" name="slug">
            </div>
            <div class="form-group">
                <label>Tags</label>
                <input class="form-control" type="text" name="tags">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" style="border-radius: 5px;" rows="8" name="content"></textarea>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
                <button type="submit" class="btn btn-success">Submit</button>
                &nbsp;&nbsp;&nbsp;
                <a href="{{route('artikel')}}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection