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
              @foreach($get as $g)
              <div class="row">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h5 class="card-title mb-2"><b>{{ $g->judul }}</b></h5>
                            <hr>
                            <p class="card-text">{{ $g->content }}</p>

                            {{-- <a href="{{url('jawaban/'.$p->id)}}" class="card-link btn btn-primary">Jawab</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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