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

      @yield('content')
        
      @include('layout/partialfrontend/_footer')

      <!-- .site-wrap -->
    @include('layout.partialfrontend._scripts')

  </body>
</html>