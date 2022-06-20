@extends('layout.main')
@section('main')
<form action="/mahasiswa/savemahasiswa" method="POST" class="col-lg-10 pt-2 pb-2 py-4">
    @csrf
    <div class="form-group w-25">
        <label>NIM</label>
        <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM" required>
    </div>
    <div class="form-group w-25">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
    </div>
    <label>Gender</label>
    <div class="form-check w-25">
        <input type="radio" name="gender" value="Pria" class="form-check-input">
        <label>Pria</label>
    </div>
    <div class="form-check w-25">
        <input type="radio" name="gender" value="Wanita" class="form-check-input">
        <label>Wanita</label>
    </div>
    <label>Jurusan</label>
    <div class="form-check w-25">
        <input type="radio" name="jurusan" value="Teknologi Informasi" class="form-check-input">
        <label>Teknologi Informasi</label>
    </div>
    <div class="form-check w-25">
        <input type="radio" name="jurusan" value="Sistem Informasi" class="form-check-input">
        <label>Sistem Informasi</label>
    </div>
    <label>Bidang Minat</label>
    <div class="form-check w-25">
        <input type="radio" name="bidangMinat" value="Layanan" class="form-check-input">
        <label>Layanan</label>
    </div>
    <div class="form-check w-25">
        <input type="radio" name="bidangMinat" value="Kesehatan" class="form-check-input">
        <label>Kesehatan</label>
    </div>
    <div class="form-check w-25">
        <input type="radio" name="bidangMinat" value="Bisnis" class="form-check-input">
        <label>Bisnis</label>
    </div>
    <div class="form-group pt-3">
        <input type="submit" value="Save" class="btn btn-outline-primary">
    </div>
</form>
</div>
</div>
@endsection