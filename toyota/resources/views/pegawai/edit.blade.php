@extends('layout.master')
@section('konten')
  <div class="row">
    <div class="col-12">
            <form action="/pegawai/{{$pegawai->id}}/update" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
            <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->nama}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">agama</label>
    <input type="text" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->agama}}">
  </div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pegawai->alamat}}</textarea>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Avatar</label>
    <input type="file" name="avatar" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  @endsection