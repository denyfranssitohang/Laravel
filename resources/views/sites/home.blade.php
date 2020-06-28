@extends('layout/frontend')

@section('content')
<div class="hero-slide owl-carousel site-blocks-cover">
	<div class="intro-section" style="background-image: url('{{ asset('home/assets/images/hero_1.jpg') }}');">
	  <div class="container">
	    <div class="row align-items-center">
	      <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
	        <h1>Otsutsuki University</h1>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="intro-section" style="background-image: url('{{ asset('home/assets/images/hero_1.jpg') }}');">
	  <div class="container">
	    <div class="row align-items-center">
	      <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
	        <h1>You Can Learn Any Jutsu</h1>
	      </div>
	    </div>
	  </div>
	</div>

	</div>
	<div></div>
  
<div class="site-section">
	<div class="container">
	  <div class="row mb-5 justify-content-center text-center">
	    <div class="col-lg-4 mb-5">
	      <h2 class="section-title-underline mb-5">
	        <span>Why Academics Works</span>
	      </h2>
	    </div>
	  </div>
	  <div class="row">
	    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

	      <div class="feature-1 border">
	        <div class="icon-wrapper bg-primary">
	          <span class="flaticon-mortarboard text-white"></span>
	        </div>
	        <div class="feature-1-content">
	          <h2>Personalize Learning</h2>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
	          <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
	        </div>
	      </div>
	    </div>
	    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
	      <div class="feature-1 border">
	        <div class="icon-wrapper bg-primary">
	          <span class="flaticon-school-material text-white"></span>
	        </div>
	        <div class="feature-1-content">
	          <h2>Trusted Courses</h2>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
	          <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
	        </div>
	      </div> 
	    </div>
	    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
	      <div class="feature-1 border">
	        <div class="icon-wrapper bg-primary">
	          <span class="flaticon-library text-white"></span>
	        </div>
	        <div class="feature-1-content">
	          <h2>Tools for Students</h2>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
	          <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
	        </div>
	      </div> 
	    </div>
	  </div>
	</div>
</div>    
  
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

@stop