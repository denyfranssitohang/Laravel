@extends('layout.master')

@section('content')
  <div class="main">
    <div class="main-contect">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">  
                <div class="panel-heading">
                  <h3 class="panel-title">Data Mahasiswa</h3> 
                  <br>
                  <div class="left">                 
                    <!-- Button trigger modal -->
                    {{-- <i class="lnr lnr-plus-circle"></i> --}}
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><span>Tambah Data Mahasiswa</span>
                    </button>
                  </div>
                </div>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>NRP</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>    
                      </tr>
                    </thead>
                    <tbody>
                      {{-- looping data dari database --}}
                      @foreach ($data_mahasiswa as $mhs)
                      <tr>
                        <td><a href="/mahasiswa/{{$mhs->id}}/profile">{{$mhs->nama_depan}}</a></td>
                        <td><a href="/mahasiswa/{{$mhs->id}}/profile">{{$mhs->nama_belakang}}</a></td>
                        <td>{{$mhs->nrp}}</td>
                        <td>{{$mhs->jenis_kelamin}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>{{$mhs->alamat}}</td>
                        <td><a href="/mahasiswa/{{$mhs->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a></td>
                        <td><a href="/mahasiswa/{{$mhs->id}}/delete" class="btn btn-danger btn-sm" role="button" onclick="return confirm('Yakin ingin menghapus')">Delete</a></td>
                      </tr>      
                      @endforeach  
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/mahasiswa/create" method="POST">
            @csrf
            <div class="form-group">
              <label for="nama_depan">Nama Depan</label>
              <input name="nama_depan" type="text" class="form-control @error('nama_depan') is-invalid @enderror"  id="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{ old('nama_depan') }}">
              {{--  pesan error jika field kosong  --}}
              @error('nama_depan')                
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="nama_belakang">Nama Belakang</label>
              <input name="nama_belakang" type="text" class="form-control" id="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="nrp">NRP</label>
              <input name="nrp" type="text" class="form-control" id="nrp" aria-describedby="emailHelp" placeholder="NRP">
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                <option>Laki-Laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input name="jurusan" type="text" class="form-control" id="jurusan" aria-describedby="emailHelp" placeholder="Jurusan">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
            </div>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            
          </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

@stop
