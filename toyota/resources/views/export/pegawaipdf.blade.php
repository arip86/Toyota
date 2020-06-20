<h3 align="center">Data pegawai</h3>
<table class="table" style="border:1px solid #ddd" align="center">

	<thead>
		<tr>
			<th>Nama</th>
			<th>agama</th>
			<th>alamat</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pegawai as $p)
		<tr>
			<td>{{$p->nama}}</td>
			<td>{{$p->agama}}</td>
			<td>{{$p->alamat}}</td>
		</tr>
		@endforeach
	</tbody>
</table>