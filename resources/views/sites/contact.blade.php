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
        <div class="row align-items-end">
          <div class="col-lg-7">
            <h2 class="mb-0">Contact</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          </div>
        </div>
      </div>
    </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="/">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Contact</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email Address</label>
                    <input type="text" id="eaddress" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Tel. Number</label>
                    <input type="text" id="tel" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Send Message" class="btn btn-primary btn-lg px-5">
                </div>
            </div>
        </div>
    </div>
        
     @include('layout/partialfrontend/_footer')

      <!-- .site-wrap -->
    @include('layout.partialfrontend._scripts')

  </body>
</html>