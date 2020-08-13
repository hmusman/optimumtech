@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	<section>
  <div class="container">
        <div class="row">
          <!-- <div class="col-md-4">
            <ul>
              <li>
                <h5>Client:</h5>
                <p>Kodesolution Lmd.</p>
              </li>
              <li>
                <h5>Location:</h5>
                <p>#405, Lan Streen, Los Vegas, USA</p>
              </li>
              <li>
                <h5>Category:</h5>
                <p>Web design & development, Graphics design</p>
              </li>
              <li>
                <h5>Start Date:</h5>
                <p>January 26, 2016</p>
              </li>
              <li>
                <h5>End Date:</h5>
                <p>February 10, 2016</p>
              </li>
              <li>
                <h5>Website:</h5>
                <p>kodesolution.com</p>
              </li>
              <li>
                <h5>Share:</h5>
                <div class="styled-icons icon-sm icon-gray icon-circled">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </li>
            </ul>
          </div> -->
          <!-- <div class="col-md-8">
            <div class="featured-project-carousel"> -->
             <!--  <div class="item">
                <iframe src="http://player.vimeo.com/video/24302498?title=0&amp;byline=0&amp;portrait=0" width="360" height="205" allowfullscreen>
                </iframe>
              </div> -->
              <!-- <div class="item">
                <iframe width="600" height="360"
                src="http://www.youtube.com/embed/oIDqz2BrVec?autoplay=0" allowfullscreen>
                </iframe>
              </div> -->
            <!-- </div>
          </div> -->
        </div>
        <div class="row mt-60">
          <div class="col-md-6">
            <h4 class="mt-0">{{ ucwords($product->name) }}</h4>
            <p style="text-align: justify" >{{ ucfirst($product->detail) }}</p>
          </div>
          <div class="col-md-6">
            <blockquote>
              <p>For over 10 years we are providing premium services as established IT Company of Optimum Tech.</p>
              <footer><cite title="Source Title">Ahsan Raza</cite></footer>
            </blockquote>
          </div>
        </div>
        
  </div>
</section>

  <section style="padding-top: 53px !important;    height: 54% !important;" class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="{{ asset('storage/images/bg/bg2.jpg') }}">
	    <div class="container pb-50">
	      <div class="section-title">
	        <div class="row">
	          <div class="col-md-6">
	            <h5 class="font-weight-300 m-0 text-gray-lightgray">PREVIOUS</h5>
	            <h2 class="mt-0 mb-0 text-uppercase line-bottom text-white font-28">Happy Customers<span class="font-30 text-theme-color-2">.</span></h2>
	          </div>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-12 mb-10">
	          <div class="owl-carousel-2col boxed" data-dots="true">
	            <div class="item">
	              <div class="testimonial pt-10">
	                <div class="thumb pull-left mb-0 mr-0 pr-20">
	                  <img width="75" class="img-circle" alt="" src="{{ asset('storage/images/testimonials/1.jpg') }}">
	                </div>
	                <div class="ml-100 ">
	                  <h4 class="text-white mt-0">Offshore IT Staffing is a great Service provided by the Optimum Tech Company.</h4>
	                  <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
	                </div>
	              </div>
	            </div>
	            <div class="item">
	              <div class="testimonial pt-10">
	                <div class="thumb pull-left mb-0 mr-0 pr-20">
	                  <img width="75" class="img-circle" alt="" src="{{ asset('storage/images/testimonials/2.jpg') }}">
	                </div>
	                <div class="ml-100 ">
	                  <h4 class="text-white mt-0">A very fundamental reason for offshore outsourcing is cost benefits. Expensive resources are easy to find but difficult to endure with.</h4>
	                  <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
	                </div>
	              </div>
	            </div>
	            <div class="item">
	              <div class="testimonial pt-10">
	                <div class="thumb pull-left mb-0 mr-0 pr-20">
	                  <img width="75" class="img-circle" alt="" src="{{ asset('storage/images/testimonials/3.jpg') }}">
	                </div>
	                <div class="ml-100 ">
	                  <h4 class="text-white mt-0">To fulfill these unique strategic and administrative talent needs, offshore staffing services prove to be a great alternative.</h4>
	                  <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
	                </div>
	              </div>
	            </div>
	            <div class="item">
	              <div class="testimonial pt-10">
	                <div class="thumb pull-left mb-0 mr-0 pr-20">
	                  <img width="75" class="img-circle" alt="" src="{{ asset('storage/images/testimonials/2.jpg') }}">
	                </div>
	                <div class="ml-100 ">
	                  <h4 class="text-white mt-0">This have a wide range of software programs, consent us to adapt variety of industries, while left over an affordable and cost-effective option</h4>
	                  <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
	                </div>
	              </div>
	            </div>
	          </div> 
	        </div>
	      </div>
	    </div>
  	</section>


@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->