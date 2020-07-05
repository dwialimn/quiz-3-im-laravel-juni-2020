@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
          <div class="row">
              <div class="col-lg-6 mt-2">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-md-9">
                    <a style="float: right;" class="btn btn-primary" href="{{route('user')}}">User</a>
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
                <th>Judul</th>
                <th>Slug</th>
                <th>Tags</th>
                <th>Content</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $p)
              <tr style="text-align: center;">
                <td>{{$p->judul}}</td>
                <td>{{$p->slug}}</td>
                <td>{{$p->tags}}</td>
                <td>{{$p->content}}</td>
                <td><a class="btn btn-primary" href="{{url('artikel/'.$p->id)}}">Detail</a></td>
                <td>
                  <form action="{{url('artikel/'.$p->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>
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