@extends('layout.main')
@section('main')
<form action="/user/updateuser/{{ $user->id }}" method="POST" class="col-lg-10 pt-2 pb-2 py-4">
    @csrf
    @method('PUT')
    <div class="form-group w-25">
        <label>NIK</label>
        <input type="number" name="nik" class="form-control" value="{{ $user -> nik }}" required>
    </div>
    <div class="form-group w-25">
        <label>Nama User</label>
        <input type="text" name="name" class="form-control" value="{{ $user -> name }}" required>
    </div>
    <div class="form-group w-25">
        <label>E-mail</label>
        <input type="text" name="email" class="form-control" value="{{ $user -> email }}" required>
    </div>
    <div class="form-group w-25">
        <label>Nomor Telpon</label>
        <input type="text" name="notelp" class="form-control" value="{{ $user -> notelp }}" required>
    </div>
    <div class="form-group pt-3">
        <input type="submit" value="Save" class="btn btn-outline-primary">
    </div>
</form>
</div>
</div>
@endsection