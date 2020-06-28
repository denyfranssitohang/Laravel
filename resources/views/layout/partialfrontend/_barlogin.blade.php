<div class="py-2 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-9 d-none d-lg-block">
        <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
        <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
        <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
      </div>
      <div class="col-lg-3 text-right">
        @if(auth()->user() == false)
          <a href="/login" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
          <a href="/register" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
        @else
      {{--   <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('assets/img/user.png') }}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
            <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
            <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
            <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
          </ul>
        </li> --}}

        <!-- Example single danger button -->
        <div class="btn-group"> 
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome,
            <span>{{auth()->user()->name}}</span>
          </button>
          <div class="dropdown-menu">
            @if(auth()->user()->role == 'admin')
              <a class="dropdown-item" href="/dashboard">Dashboard</a>
            @else
              <a class="dropdown-item" href="/dashboard">My Dashboard</a>
            @endif
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>