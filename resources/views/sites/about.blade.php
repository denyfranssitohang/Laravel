<!doctype html>
<html lang="en">

  @include('layout.partialfrontend.css')

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">
  
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
  
      <div></div>
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
      
      @include('layout/partialfrontend/_news')
  
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
      
      @include('layout/partialfrontend/_footer')

      <!-- .site-wrap -->
    @include('layout.partialfrontend._scripts')

  </body>
</html>