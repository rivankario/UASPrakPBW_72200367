@extends('layout.main')
@section('main')
<form action="/mahasiswa/updatemahasiswa/{{ $mahasiswa->id }}" method="POST" class="col-lg-10 pt-2 pb-2 py-4">
    @csrf
    @method('PUT')
    <div class="form-group w-25">
        <label>NIM</label>
        <input type="number" name="nim" class="form-control" value="{{ $mahasiswa -> nim }}" required>
    </div>
    <div class="form-group w-25">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa -> nama }}" required>
    </div>
    <label>Gender</label>
    <div class="form-check w-25">
        <input type="radio" name="gender" value="Pria" {{ $mahasiswa->gender == 'pria' ? 'checked':'' }} class="form-check-input">
        <label>Pria</label>
    </div>
    <div class="form-check w-25">
        <input type="radio" name="gender" value="Wanita" {{ $mahasiswa->gender == 'wanita' ? 'checked':'' }} class="form-check-input">
        <label>Wanita</label>
    </div>
    <label>Jurusan</label>
    <div class="form-check w-25">
        <input type="radio" name="jurusan" value="Teknologi Informasi" {{ $mahasiswa->jurusan == 'Teknologi Informasi' ? 'checked':'' }} class="form-check-input">
        <label>Teknologi Informasi</label>
    </div>
    <div class="form-check w-25">
        <input type="radio" name="jurusan" value="Sistem Informasi" {{ $mahasiswa->jurusan == 'Sistem Informasi' ? 'checked':'' }} class="form-check-input">
        <label>Sistem Informasi</label>
    </div>
    <label>Bidang Minat</label>
    <div class="form-check w-25">
        <input type="radio" name="bidangMinat" value="Layanan" {{ $mahasiswa->bidangMinat == 'Layanan' ? 'checked':'' }} class="form-check-input">
        <label>Layanan</label>
    </div>
    <div class="form-check w-25">
        <input type="radio" name="bidangMinat" value="Kesehatan" {{ $mahasiswa->bidangMinat == 'Kesehatan' ? 'checked':'' }} class="form-check-input">
        <label>Kesehatan</label>
    </div>
    <div class="form-check w-25">
        <input type="radio" name="bidangMinat" value="Bisnis" {{ $mahasiswa->bidangMinat == 'Bisnis' ? 'checked':'' }} class="form-check-input">
        <label>Bisnis</label>
    </div>
    <div class="form-group pt-3">
        <input type="submit" value="Save" class="btn btn-outline-primary">
    </div>
</form>
</div>
</div>
@endsection