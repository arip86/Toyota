@extends('layout.master')
@section('konten')
<!-- <section class="content">
      <div class="container-fluid"> -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
          

<!-- ini untuk tampilan data pegawai -->	
        <div class="col-md-6">
<h3>Data Pegawai</h3>


</div>


<!-- ini untuk tampilan tambah pegawai -->
<div class="col-md-6">

  <div class="float-sm-right">
    <a href="/pegawai/export" class="btn btn-primary btn-sm">Export excel</a>
    <a href="/pegawai/exportpdf" class="btn btn-primary btn-sm">Export PDF</a>
  </div>
	<!-- Button trigger modal -->
<button type="button" class="mr-3 btn btn-primary float-sm-right btn-sm" data-toggle="modal" data-target="#exampleModal">
  Tambah Pegawai 
</button>
</div>

<!-- sampe sini -->
<!-- ini untuk tampilan database -->
<table class="table table-hover">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Agama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data_pegawai as $pegawai)
		<tr>
			<td><a href="/pegawai/{{$pegawai->id}}/profile">{{$pegawai->nama}}</a></td>
			<td>{{$pegawai->agama}}</td>
			<td>{{$pegawai->alamat}}</td>
			<td><a href="/pegawai/{{$pegawai->id}}/edit" class="btn btn-sm btn-warning">Edit</a>

        <a href="/pegawai/{{$pegawai->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau dihapus')">Delete</a>
      </td>

		</tr>
	</tbody>
	@endforeach
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        		<form action="/pegawai/create" method="POST">
        			{{csrf_field()}}
  					<div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">agama</label>
    <input type="text" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
@endsection