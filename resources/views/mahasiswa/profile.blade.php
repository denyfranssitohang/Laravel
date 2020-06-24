@extends('layout.master')

{{-- section css xeditable --}}
@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop


@section('content')

<div class="main">
	<!-- MAIN CONTENT -->	
	<div class="main-content">
		<div class="container-fluid">
			@if (session('sukses'))
			    <div class="alert alert-success" role="alert">
			      {{ session('sukses') }}
			    </div>
			@elseif (session('error'))        
				<div class="alert alert-danger" role="alert">
			      {{ session('error') }}
			    </div>
			 @endif
			<div class="panel panel-profile">
				<div class="clearfix">
					<!-- LEFT COLUMN -->
					<div class="profile-left">
						<!-- PROFILE HEADER -->
						<div class="profile-header">
							<div class="overlay"></div>
							<div class="profile-main">
								<img src="{{$mahasiswa->getAvatar()}}" class="img-circle" alt="Avatar">
								<h3 class="name">{{$mahasiswa->nama_depan}}</h3>
								<span class="online-status status-available">Available</span>
							</div>
							<div class="profile-stat">
								<div class="row">
									<div class="col-md-4 stat-item">
										{{$mahasiswa->matkul->count()}} <span>Mata Kuliah</span>
									</div>
									<div class="col-md-4 stat-item">
										15 <span>Awards</span>
									</div>
									<div class="col-md-4 stat-item">
										2174 <span>Points</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END PROFILE HEADER -->
						<!-- PROFILE DETAIL -->
						<div class="profile-detail">
							<div class="profile-info">
								<h4 class="heading">Data Diri</h4>
								<ul class="list-unstyled list-justify">
									<li>NRP <span>{{$mahasiswa->nrp}}</span></li>
									<li>Jenis Kelamin <span>{{$mahasiswa->jenis_kelamin}}</span></li>
									<li>Jurusan <span>{{$mahasiswa->jurusan}}</span></li>
									<li>Alalmat <span>{{$mahasiswa->alamat}}</span></li>
								</ul>
							</div>
							<div class="text-center">
								<a href="/mahasiswa" class="btn btn-dark" role="button">Back</a>
								<a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning " role="button">Edit Profile</a>
							</div>

						</div>
						<!-- END PROFILE DETAIL -->
					</div>
					<!-- END LEFT COLUMN -->
					<!-- RIGHT COLUMN -->
					<div class="profile-right">
						<!-- Button trigger modal nilai-->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						  Tambah Nilai
						</button>
						<!-- TABBED CONTENT -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Mata Kuliah</h3>
							</div>
							<div class="panel-body">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Kode</th>
											<th>Nama</th>
											<th>Semester</th>
											<th>Nilai</th>
											<th>Dosen</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

										@foreach($mahasiswa->matkul as $matkul)
										<tr>
											<td>{{$matkul->kode}}</td>
											<td>{{$matkul->nama}}</td>
											<td>{{$matkul->semester}}</td>
											{{-- element editable --}}
											<td><a href="#" class="nilai" data-type="text" data-pk="{{$matkul->id}}" data-url="/api/mahasiswa/{{$mahasiswa->id}}/editnilai" data-title="Masukkan nilai">{{$matkul->pivot->nilai}}</a></td>
											{{-- end element editable --}}
											<td><a href="/dosen/{{$matkul->dosen_id}}/profile">{{$matkul->dosen->nama}}</a></td>
											<td><a href="/mahasiswa/{{$mahasiswa->id}}/{{$matkul->id}}/deletenilai" class="btn btn-danger btn-sm" role="button" onclick="return confirm('Yakin ingin menghapus')">Delete</a></td>
										</tr>
										@endforeach									
									</tbody>
								</table>
							</div>
						</div>
						<!-- END TABBED CONTENT -->

						{{-- chart content --}}
						<div class="panel">
							<div id="chartNilai">
								
							</div>
						</div>
						{{-- end chart content --}}
					</div>
					<!-- END RIGHT COLUMN -->
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
	
	<!-- Modal Nilai-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	    	{{-- form tambah nilai --}}
	        <form action="/mahasiswa/{{$mahasiswa->id}}/addnilai" method="POST" enctype="multipart/form-data">
            	@csrf
            	<div class="form-group">
				    <label for="matkul">Mata Kuliah</label>
				    <select class="form-control" id="matkul" name="matkul">
				      @foreach($matakuliah as $mk)
				      	<option value="{{$mk->id}}">{{$mk->nama}}</option>
				      @endforeach
				    </select>
				  </div>			
	            <div class="form-group{{$errors->has('nama_depan') ? ' has-error' : ''}}">
	              <label for="nama_depan">Nilai</label>
	              <input name="nilai" type="text" class="form-control"  id="nilai" aria-describedby="emailHelp" placeholder="Nilai" value="{{old('nama_depan')}}">
	              {{-- pesan error --}}
	              @if($errors->has('nama_depan'))
	                <span class="help-block">{{$errors->first('nama_depan')}}</span>
	              @endif
	            </div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

@stop

@section('footer')

{{-- script xeditable --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
	Highcharts.chart('chartNilai', {

	    title: {
	        text: 'Grafik NIlai Mahasiswa'
	    },

	    // subtitle: {
	    //     text: 'Source: thesolarfoundation.com'
	    // },

	    yAxis: {
	        title: {
	            text: 'Nilai'
	        }
	    },

	    xAxis: {
	        accessibility: {
	            rangeDescription: 'Mata Kuliah'
	        },
	        categories: {!!json_encode($categories)!!}, // echo spesial (agar data tidak diubah menjadi html)
	    },

	    // legend: {
	    //     layout: 'vertical',
	    //     align: 'right',
	    //     verticalAlign: 'middle'
	    // },

	    plotOptions: {
	        line: {
	            dataLabels: {
	                enabled: true
	            },
	            enableMouseTracking: true
	        }
	    },

	    series: [{
	        name: 'Nilai',
	        data: {!!json_encode($nilai)!!} // echo spesial (agar data tidak diubah menjadi html)]
	    }],

	    responsive: {
	        rules: [{
	            condition: {
	                maxWidth: 500
	            },
	            chartOptions: {
	                legend: {
	                    layout: 'horizontal',
	                    align: 'center',
	                    verticalAlign: 'bottom'
	                }
	            }
	        }]
	    }

	});

	// script jquery (editable() method)
	$(document).ready(function() {
	    $('.nilai').editable();
	});

</script>

@stop