@extends('adminlte::page')

@section('title', 'Tanggapan')

@section('content_header')
    
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{ url('jadwal-penilaian-kesehatan') }}">Daftar Jadwal Penilaian Kesehatan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Jadwal Penilaian Kesehatan</li>
    </ol>
  </nav>

@stop

@section('content')

<h3 class="page-title">
    Form Detail Jadwal Penilaian Kesehatan
</h3>
<br/>
@if(session('msg'))
<div class="alert alert-info" role="alert">
    {{session('msg')}}
</div>
@endif
    <div class="card border border-dark">
    <div class="card-header border-dark bg-dark">
        <h5 class="mb-0 float-left">
            Form Detail
        </h5>
        <div class="float-right">
            <button onclick="location.href='{{ url('jadwal-penilaian-kesehatan') }}'" name="Find" class="btn btn-sm btn-info" title="Back"><i class="fa fa-angle-left"></i>  Kembali</button>
        </div>
    </div>

    <form method="post" action="/system-user/process-edit-system-user" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row form-group">
                <div class="col-md-3">
                    <div class="form-group">
                        <a class="text-dark">Bulan dan Tahun Periode<a class='red'> *</a></a>
                        <input class="form-control input-bb" type="month" name="periode" id="periode"
                            value="{{ $periode }}" readonly/>
                        @error('periode')
                            <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>

@stop

@section('footer')
    
@stop

@section('css')
    
@stop

@section('js')
    
@stop