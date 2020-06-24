<!doctype html>
<html lang="en">

  @include('partials._head')

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    {{--  navbar  --}}
    {{--  <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark ">
      <div class="container-fluid">
         <a class="navbar-brand" href="#">Universitas Otsutsuki</a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{ url('/') }}">Home</a>
            <a class="nav-item nav-link" href="{{ url('/about') }}">About</a>  --}}
            {{--  <a class="nav-item nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a>  --}}
            {{--  <a class="nav-item nav-link" href="{{ url('/students') }}">Mahasiswa</a>
          </div>
        </div>
      </div>
    </nav>  --}}
    {{-- end navbar --}}

  
    <!-- <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300"> -->

      <div class="site-wrap">
    
        <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>
    
    
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
                  {{-- <a href="#" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a> --}}
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
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
    
          <div class="container">
            <div class="d-flex align-items-center">
              <div class="site-logo">
                <a href="index.html" class="d-block">
                  <img src="{{ asset('home/assets/images/images.jpg') }}" alt="Image" class="img-fluid">Otsutsuki University
                </a>
              </div>
              <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                  <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li class="active">
                      <a href="{{ url('/') }}" class="nav-link text-left">Home</a>
                    </li>
                    <li>
                      <a href="{{ url('/about') }}" class="nav-link text-left">About</a>                      
                    </li>
                    <li>                      
                      @if(auth()->user() == true)
                        <a href="{{ url('/dashboard') }}" class="nav-link text-left">Dashboard</a>
                      @endif
                    </li>
                      
                    <li>
                        <a href="#" class="nav-link text-left">Contact</a>
                      </li>
                  </ul>
                </nav>
    
              </div>
              <div class="ml-auto">
                <div class="social-wrap">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
    
                  <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                    class="icon-menu h3"></span></a>
                </div>
              </div>
             
            </div>
          </div>

        </header>
    
        </div>
        <br><br><br>

        <div class="section-bg style-1" style="background-image: url('{{ asset('home/assets/images/about.jpg') }}');">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="section-title-underline style-2">
                  <span>About Our University</span>
                </h2>
              </div>
              <div class="col-lg-8">
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem nesciunt quaerat ad reiciendis perferendis voluptate fugiat sunt fuga error totam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus assumenda omnis tempora ullam alias amet eveniet voluptas, incidunt quasi aut officiis porro ad, expedita saepe necessitatibus rem debitis architecto dolore? Nam omnis sapiente placeat blanditiis voluptas dignissimos, itaque fugit a laudantium adipisci dolorem enim ipsum cum molestias? Quod quae molestias modi fugiat quisquam. Eligendi recusandae officiis debitis quas beatae aliquam?</p>
                <p><a href="#">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="news-updates">
          <div class="container">
             
            <div class="row">
              <div class="col-lg-9">
                 <div class="section-heading">
                  <h2 class="text-black">News &amp; Updates</h2>
                  <a href="#">Read All News</a>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="post-entry-big">
                      <a href="news-single.html" class="img-link"><img src="{{ asset('home/assets/images/blog_large_1.jpg') }}" alt="Image" class="img-fluid"></a>
                      <div class="post-content">
                        <div class="post-meta"> 
                          <a href="#">June 6, 2019</a>
                          <span class="mx-1">/</span>
                          <a href="#">Admission</a>, <a href="#">Updates</a>
                        </div>
                        <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="post-entry-big horizontal d-flex mb-4">
                      <a href="news-single.html" class="img-link mr-4"><img src="{{ asset('home/assets/images/blog_1.jpg') }}" alt="Image" class="img-fluid"></a>
                      <div class="post-content">
                        <div class="post-meta">
                          <a href="#">June 6, 2019</a>
                          <span class="mx-1">/</span>
                          <a href="#">Admission</a>, <a href="#">Updates</a>
                        </div>
                        <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                      </div>
                    </div>
    
                    <div class="post-entry-big horizontal d-flex mb-4">
                      <a href="news-single.html" class="img-link mr-4"><img src="{{ asset('home/assets/images/blog_2.jpg') }}" alt="Image" class="img-fluid"></a>
                      <div class="post-content">
                        <div class="post-meta">
                          <a href="#">June 6, 2019</a>
                          <span class="mx-1">/</span>
                          <a href="#">Admission</a>, <a href="#">Updates</a>
                        </div>
                        <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                      </div>
                    </div>
    
                    <div class="post-entry-big horizontal d-flex mb-4">
                      <a href="news-single.html" class="img-link mr-4"><img src="{{ asset('home/assets/images/blog_1.jpg') }}" alt="Image" class="img-fluid"></a>
                      <div class="post-content">
                        <div class="post-meta">
                          <a href="#">June 6, 2019</a>
                          <span class="mx-1">/</span>
                          <a href="#">Admission</a>, <a href="#">Updates</a>
                        </div>
                        <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="section-heading">
                  <h2 class="text-black">Campus Videos</h2>
                  <a href="#">View All Videos</a>
                </div>
                <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                  <span class="play">
                    <span class="icon-play"></span>
                  </span>
                  <img src="{{ asset('home/assets/images/course_5.jpg') }}" alt="Image" class="img-fluid">
                </a>
                <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                    <span class="play">
                      <span class="icon-play"></span>
                    </span>
                    <img src="{{ asset('home/assets/images/course_5.jpg') }}" alt="Image" class="img-fluid">
                  </a>
              </div>
            </div>
          </div>
        </div>
    
        <div class="site-section ftco-subscribe-1" style="background-image: url('{{ asset('home/assets/images/bg_1.jpg') }}')">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <h2>Subscribe to us!</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>
              </div>
              <div class="col-lg-5">
                <form action="" class="d-flex">
                  <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
                  <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div> 
    
    
        <div class="footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <p class="mb-4"><h5>Otsutsuki University</h5></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
                <p><a href="#">Learn More</a></p>
              </div>
              <div class="col-lg-3">
                <h3 class="footer-heading"><span>Our Campus</span></h3>
                <ul class="list-unstyled">
                    <li><a href="#">Acedemic</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Our Interns</a></li>
                    <li><a href="#">Our Leadership</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Human Resources</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                  <h3 class="footer-heading"><span>Our Courses</span></h3>
                  <ul class="list-unstyled">
                      <li><a href="#">Math</a></li>
                      <li><a href="#">Science &amp; Engineering</a></li>
                      <li><a href="#">Arts &amp; Humanities</a></li>
                      <li><a href="#">Economics &amp; Finance</a></li>
                      <li><a href="#">Business Administration</a></li>
                      <li><a href="#">Computer Science</a></li>
                  </ul>
              </div>
              <div class="col-lg-3">
                  <h3 class="footer-heading"><span>Contact</span></h3>
                  <ul class="list-unstyled">
                      <li><a href="#">Help Center</a></li>
                      <li><a href="#">Support Community</a></li>
                      <li><a href="#">Press</a></li>
                      <li><a href="#">Share Your Story</a></li>
                      <li><a href="#">Our Supporters</a></li>
                  </ul>
              </div>
            </div>
    
            <div class="row">
              <div class="col-12">
                <div class="copyright">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
    
      </div>
      <!-- .site-wrap -->
    @include('partials._scripts')

  </body>
</html>