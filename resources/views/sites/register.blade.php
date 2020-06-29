<!doctype html>
<html lang="en">

  @include('layout.partialfrontend.css')

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
     </div>    
    
    @include('layout/partialfrontend/_barlogin')

    @include('layout/partialfrontend/_navbar')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-end justify-content-center text-center">
          <div class="col-lg-7">
            <h2 class="mb-0">Pendaftaran Online</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          </div>
        </div>
      </div>
    </div>     

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="/">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Pendaftaran</span>
      </div>
    </div>

    <div class="site-section">
      {{-- form menggunakan laravel collective --}}
      {!! Form::open(['url' => '/postregister']) !!}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">                        
                        <div class="col-md-12 form-group">
                          {!! Form::text('nama_depan','',['class'=>'form-control form-control-lg','placeholder'=>'Nama Depan']) !!}
                        </div>
                        <div class="col-md-12 form-group">
                          {!! Form::text('nama_belakang','',['class'=>'form-control form-control-lg','placeholder'=>'Nama Belakang']) !!}
                        </div>
                        <div class="col-md-12 form-group">
                          {!! Form::email('email','',['class'=>'form-control form-control-lg','placeholder'=>'Email']) !!}
                        </div>
                        <div class="col-md-12 form-group">
                          <div class="form-select form-select-lg" id="service-select">
                          {!! Form::select('jenis_kelamin',[''=>'Pilih Jenis Kelamin','L' => 'Laki-Laki', 'P' => 'Perempuan'],'L'); !!}
                          </div>
                        </div>
                        {{-- <div class="col-md-12 form-group">
                          {!! Form::text('jurusan','',['class'=>'form-control form-control-lg','placeholder'=>'Jurusan']) !!}
                        </div> --}}
                        <div class="col-md-12 form-group">
                          {!! Form::textarea('alamat','',['class'=>'form-control form-control-lg','placeholder'=>'Alamat']) !!}
                        </div>
                        {{-- <div class="col-md-12 form-group">
                          {!! Form::password('password','',['class'=>'form-control form-control-lg','placeholder'=>'Password']) !!}
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Kirim" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
        
     @include('layout/partialfrontend/_footer')

      <!-- .site-wrap -->
    @include('layout.partialfrontend._scripts')

  </body>
</html>