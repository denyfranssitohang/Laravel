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
								<img src="" class="img-circle" alt="Avatar">
								<h3 class="name">{{$dosen->nama}}</h3>
								<span class="online-status status-available">Available</span>
							</div>							
						</div>
						<!-- END PROFILE HEADER -->						
					</div>
					<!-- END LEFT COLUMN -->
					<!-- RIGHT COLUMN -->
					<div class="profile-right">						
						<!-- TABBED CONTENT -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Mata Kuliah yang Diajar oleh Dosen {{$dosen->nama}}</h3>
							</div>
							<div class="panel-body">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Semester</th>
									</thead>
									<tbody>
										@foreach($dosen->matkul as $matkul)	
										<tr>
											<td>{{$matkul->nama}}</td>
											<td>{{$matkul->semester}}</td>
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

@stop

@section('footer')

@stop