@extends('layout.master')

@section('title', "Halaman Edit Prodi")

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Program Studi</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url("/prodi") }}">Program Studi</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Program Studi</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Program Studi : {{ $prodi->nama }}</h3>
          </div>
          <div class="card-body">
            <form action="{{ url("/prodi/".$prodi->id) }}" method="post">
              @method("PUT")
              @csrf
              <div class="mb-3">
                <label class="form-label">Nama Prodi</label>
                <input class="form-control" type="text" name="nama" 
                       value="{{ old('nama', $prodi->nama) }}" 
                       placeholder="Masukkan nama program studi">
                @error('nama')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
              </div>                            
              <button type="submit" class="btn btn-warning">Update</button>
            </form>
          </div>
          <div class="card-footer">Footer</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection