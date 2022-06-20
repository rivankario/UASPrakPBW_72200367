@extends('layout.main')
@section('main')
<div class="col-lg-10 vh-100 ">
    <div class="card mt-4">
      <div class="card-header">
        <a name=" " class="btn btn-primary" href="/user/adduser1" role="button"><i class="bi bi-plus-square-fill"></i> Add User</a>
        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/cari">
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
              <th scope="col">NIK</th>
              <th scope="col">Email</th>
              <th scope="col">Nama</th>
              <th scope="col">No. Telp</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $no => $u)
            <tr>
              <th scope="row">{{ $user->firstItem() + $no }}</th>
              <td>{{ $u->nik }}</td>
              <td>{{ $u->email }}</td>
              <td>{{ $u->name }}</td>
              <td>{{ $u->notelp }}</td>
              <td>
                <a href="/user/edituser1/{{ $u->id }}" class="btn btn-outline-primary"><i class="bi bi-pencil"></i></i></a>
                <a href="/user/deleteuser/{{ $u->id }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></i></a>
            </tr>
            @endforeach
          </tbody>
        </table>
        <span class="float-right">{{ $user->links()}}</span>
      </div>
    </div>
  </div>
</div>
</div>
@endsection