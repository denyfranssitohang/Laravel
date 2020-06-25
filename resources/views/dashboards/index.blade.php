@extends('layout/master')

@section('content')
<br><br>
<div class="main">
    <div class="main-contect">
	    <div class="container-fluid">
	        <div class="row">
		        <div class="col-md-6">
		            <!-- TABBED CONTENT -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Peringkat 5 Tertinggi</h3>
						</div>
						<div class="panel-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Peringkat</th>
										<th>Nama</th>
										<th>Nilai</th>
									</tr>
								</thead>
								<tbody>
									@php
										$peringkat = 1;
									@endphp
									@foreach(peringkat5Tertinggi() as $mhs)
									<tr>
										<td>{{$peringkat}}</td>
										<td>{{$mhs->nama_lengkap()}}</td>
										<td>{{$mhs->rataRataNilai}}</td>
									</tr>
									@php
										$peringkat++;
									@endphp
									@endforeach	

								</tbody>
							</table>
						</div>
					</div>
						<!-- END TABBED CONTENT -->
			    </div>
		        <div class="col-md-3">
					<div class="metric">
						<span class="icon"><i class="fa fa-user"></i></span>
						<p>
							<span class="number">{{totalMahasiswa()}}</span>
							<span class="title">Total Mahasiswa</span>
						</p>
					</div>
				</div>
			    <div class="col-md-3">
					<div class="metric">
						<span class="icon"><i class="fa fa-user"></i></span>
						<p>
							<span class="number">{{totalDosen()}}</span>
							<span class="title">Total Dosen</span>
						</p>
					</div>
				</div>
		    </div>
        </div>
    </div>
</div>

@stop