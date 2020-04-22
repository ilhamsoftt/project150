@extends('layout.app')
@section("title")Edit Ujian @endsection
@section("pageTitle") Edit Data Ujian @endsection
@section("content")

<form action="{{route('ujian.update',['id'=>$ujian->id])}}" class="bg-white shadow-sm p-3" method="POST" >
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label>Nama Mata Kuliah</label>
        <input type="text" name="txtnamamk" value="{{$ujian->nama_mk}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Dosen</label>
        <input type="text" name="txtdosen" value="{{$ujian->dosen}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Jumlah Soal</label>
        <input type="number" name="txtjumlah" value="{{$ujian->jumlah_soal}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="txtketerangan" value="{{$ujian->keterangan}}" class="form-control">
    </div>

    <input type="submit" class="btn btn-primary" value="Save">
</form>

@endsection