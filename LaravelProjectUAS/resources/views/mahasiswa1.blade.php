@extends('layout.main')
@section('main')
<div class="col-lg-10 vh-100 ">
    <div class="card mt-4">
      <div class="card-header">
        <a name=" " class="btn btn-primary" href="/mahasiswa/addmahasiswa1" role="button"><i class="bi bi-plus-square-fill"></i> Add Mahasiswa</a>
        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
          <input class="form-control mr-sm-2" name = "cari" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      <div class="card-body">
        @if(session('alert'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('alert')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        @if(session('alert-success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('alert-success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        @if(session('alert-danger'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('alert-danger')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Gender</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Bidang Minat</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mahasiswa as $no => $m)
            <tr>
              <th scope="row">{{ $mahasiswa->firstItem() + $no }}</th>
              <td>{{ $m->nim }}</td>
              <td>{{ $m->nama }}</td>
              <td>{{ $m->gender }}</td>
              <td>{{ $m->jurusan }}</td>
              <td>{{ $m->bidangMinat }}</td>
              <td>
                <a href="/mahasiswa/editmahasiswa1/{{ $m->id }}" class="btn btn-outline-primary"><i class="bi bi-pencil"></i></i></a>
                <a href="/mahasiswa/deletemahasiswa/{{ $m->id }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></i></a>
            </tr>
            @endforeach
          </tbody>
        </table>
        <span class="float-right">{{ $mahasiswa->links()}}</span>
      </div>
    </div>
  </div>
@endsection