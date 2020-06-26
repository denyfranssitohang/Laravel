<table class="table" style="border: 1px solid #ddd">

	<thead>
		<tr>
			<th>Nama Lengkap</th>
			<th>NRP</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
			<th>Rata-Rata Nilai</th>
			<th>Alamat</th>
		</tr>
	</thead>
	<tbody>
		@foreach($mahasiswa as $mhs)
		<tr>
			<td>{{$mhs->nama_lengkap()}}</td>
			<td>{{$mhs->nrp}}</td>
			<td>{{$mhs->jenis_kelamin}}</td>
			<td>{{$mhs->jurusan}}</td>
			<td>{{$mhs->rataRata()}}</td>
			<td>{{$mhs->alamat}}</td>
		</tr>
		@endforeach
	</tbody>
	
</table>