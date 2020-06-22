<!DOCTYPE html>
<html lang="en">
{{--  head  --}}
 @include('layout.partials._head')

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
   

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="{{ url('/') }}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Login</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">

          <div class="row justify-content-center">
              <div class="col-md-5">
                  <div class="row">
                    <form class="form-auth-small" action="/postlogin" method="POST">
                      {{csrf_field()}}
                      <div class="col-md-12 form-group">
                          <label for="username">Username</label>
                          <input name="email" type="email" id="email" placeholder="Email" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-12 form-group">
                          <label for="pword">Password</label>
                          <input name="password" type="password" id="password" placeholder="Password" class="form-control form-control-lg">
                      </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <input type="submit" value="Log In" class="btn btn-primary btn-lg px-5">
                      </div>
                  </div>
                </form>
              </div>
          </div>          

        </div>
    </div>
    <br><br><br>

    @include('layout.partials._footer')    

  </div>


  @include('layout.partials._scripts')

</body>

</html>