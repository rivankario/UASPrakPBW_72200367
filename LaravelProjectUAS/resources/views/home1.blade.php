@extends('layout.main')
@section('main')
<div class="col-lg-10 vh-100 ">
    <br>
    <h3> Selamat datang {{ Auth::user()->name ?? '' }} </h3>
  </div>
</div>
@endsection