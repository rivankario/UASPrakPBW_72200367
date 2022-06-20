@extends('layout.main')
@section('main')
<form action="/user/saveuser" method="POST" class="col-lg-10 pt-2 pb-2 py-4">
    @csrf
    <div class="form-group w-25">
        <label>NIK</label>
        <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK Pengguna" required>
    </div>
    <div class="form-group w-25">
        <label>Nama</label>
        <input type="name" name="name" class="form-control" placeholder="Masukkan Nama Pengguna" required>
    </div>
    <div class="form-group w-25">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Masukkan Email Pengguna" required>
    </div>
    <div class="form-group w-25">
        <label>Nomor Telpon</label>
        <input type="notelp" name="notelp" class="form-control" placeholder="Masukkan Nomor Telpon Pengguna" required>
    </div>
    <div class="form-group w-25">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan Nama Pengguna" required>
    </div>
    <div class="form-group pt-4">
        <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
    </div>
</form>
</div>
</div>
@endsection