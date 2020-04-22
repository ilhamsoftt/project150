@extends('layout.app')
@section("title")Ujian @endsection
@section("pageTitle") List Ujian @endsection
@section("content")

<a href="{{route('ujian.create')}}" class="btn btn-lg btn-success mb-3">Tambah Data Ujian</a>

@include('msg')
<table class="table border">
    <thead>
        <th>No</th>
        <th>ID</th>
        <th>Nama Mata Kuliah</th>
        <th>Nama Dosen</th>
        <th>Jumlah Soal</th>
        <th>Keterangan</th>
        <th>AKSI</th>
    </thead>
    <tbody>
        @foreach ($data as $ujian)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$ujian->id}}</td>
            <td>{{$ujian->nama_mk}}</td>
            <td>{{$ujian->dosen}}</td>
            <td>{{$ujian->jumlah_soal}}</td>
            <td>{{$ujian->keterangan}}</td>
            <td>
                <a href="{{route('ujian.edit',['id'=>$ujian->id])}}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{route('ujian.destroy',['id'=>$ujian->id])}}" class="d-inline" method="POST" onsubmit="return confirm('Ujian akan dihapus?')">
                    @csrf
                    <input type="submit" class="btn btn-danger btn-sm" name="_method" value="DELETE"> 
                </form>
            </td>
            <td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection