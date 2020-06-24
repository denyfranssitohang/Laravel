@extends('layout.master')

@section('content')
  <div class="main">
    @if(session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
    @endif
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
          <form action="/mahasiswa/create" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group{{$errors->has('nama_depan') ? ' has-error' : ''}}">
              <label for="nama_depan">Nama Depan</label>
              <input name="nama_depan" type="text" class="form-control"  id="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{old('nama_depan')}}">
              {{-- pesan error --}}
              @if($errors->has('nama_depan'))
                <span class="help-block">{{$errors->first('nama_depan')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('nama_belakang') ? ' has-error' : ''}}">
              <label for="nama_belakang">Nama Belakang</label>
              <input name="nama_belakang" type="text" class="form-control" id="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{old('nama_belakang')}}">
              {{-- pesan error --}}
              @if($errors->has('nama_belakang'))
                <span class="help-block">{{$errors->first('nama_belakang')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
              <label for="email">Email</label>
              <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
              {{-- pesan error --}}
              @if($errors->has('email'))
                <span class="help-block">{{$errors->first('email')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('nrp') ? ' has-error' : ''}}">
              <label for="nrp">NRP</label>
              <input name="nrp" type="text" class="form-control" id="nrp" aria-describedby="emailHelp" placeholder="NRP" value="{{old('nrp')}}">
              {{-- pesan error --}}
              @if($errors->has('nrp'))
                <span class="help-block">{{$errors->first('nrp')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}">
              <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                <option value="L"{{(old('jenis_kelamin') == 'L') ? ' selected' : ''}}>Laki-Laki</option>
                <option value="L"{{(old('jenis_kelamin') == 'P') ? ' selected' : ''}}>Perempuan</option>
              </select>
              {{-- pesan error --}}
              @if($errors->has('jenis_kelamin'))
                <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('jurusan') ? ' has-error' : ''}}">
              <label for="jurusan">Jurusan</label>
              <input name="jurusan" type="text" class="form-control" id="jurusan" aria-describedby="emailHelp" placeholder="Jurusan" value="{{old('jurusan')}}">
              {{-- pesan error --}}
              @if($errors->has('jurusan'))
                <span class="help-block">{{$errors->first('jurusan')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('alamat') ? ' has-error' : ''}}">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" class="form-control" id="alamat" rows="3">{{old('nama_depan')}}</textarea>
              {{-- pesan error --}}
              @if($errors->has('alamat'))
                <span class="help-block">{{$errors->first('alamat')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('alamat') ? ' has-error' : ''}}">
              <label for="exampleFormControlTextarea1">Avatar</label>
              <input type="file" name="avatar" class="form-control">
              {{-- pesan error --}}
              @if($errors->has('alamat'))
                <span class="help-block">{{$errors->first('alamat')}}</span>
              @endif
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
