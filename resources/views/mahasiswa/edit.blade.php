@extends('layout.master')

@section('content')

  <div class="main">
    <div class="main-contect">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Edit Data Mahasiswa</h3>
                  @if (session('sukses'))
                    <div class="alert alert-success" role="alert">
                      {{ session('sukses') }}
                    </div>        
                  @endif
                </div>
                <div class="panel-body">
                  <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Depan</label>
                      <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$mahasiswa->nama_depan}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Belakang</label>
                      <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$mahasiswa->nama_belakang}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NRP</label>
                      <input name="nrp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NRP" value="{{$mahasiswa->nrp}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                      <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                        <option value="L" @if($mahasiswa->jenis_kelamin== 'Laki-Laki') selected @endif>Laki-Laki</option>
                        <option value="P" @if($mahasiswa->jenis_kelamin== 'Perempuan') selected @endif>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jurusan</label>
                      <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan" value="{{$mahasiswa->jurusan}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Alamat</label>
                      <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$mahasiswa->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Avatar</label>
                      <input type="file" name="avatar" class="form-control">
                    </div>

                    <button type="button" class="btn btn-secondary"><a href="/mahasiswa/{{$mahasiswa->id}}/profile">Cancel</a></button>
                    <button type="submit" class="btn btn-warning">Update</button>
                    
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop
