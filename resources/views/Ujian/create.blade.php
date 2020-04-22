@extends('layout.app')
@section("title")Input Ujian @endsection
@section("pageTitle") Tambah Data Ujian @endsection
@section("content")

<form action="{{route('ujian.store')}}" class="bg-white shadow-sm p-3" method="POST" >
    @csrf
   
     @include('msg')
  
    <div class="form-group">
        <label>Nama Mata Kuliah</label>
        <input type="text" name="txtnamamk" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Dosen</label>
        <input type="text" name="txtdosen" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Jumlah Soal</label>
        <input type="number" name="txtjumlah" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="txtketerangan" class="form-control">
    </div>

    <input type="submit" class="btn btn-primary" value="Save">
</form>

@endsection