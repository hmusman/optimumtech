@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	 @if($services->count()>0)
	    <section id="home" class="divider">
	      <div class="container-fluid p-0">
	        <div class="row">
	          <div class="col-md-12">
	            <div class="owl-carousel-3col">
	              @foreach($services as $sliderservice)
	                @php $img = 'storage/'.$sliderservice->img  @endphp
	                <div class="item">
	                  <div class="featured-blog">
	                    <img src="{{ asset($img) }} " alt="" class="img-responsive">
	                    <div class="featured-blog-details">
	                      <h2 class="text-white mb-5 " style="color: #626363; font-size: 22px; font-weight: bold;" >{{ $sliderservice->name }}</h2>
	                      <p class="text-white" style="color: #626363;" >{{ substr($sliderservice->detail ,0,100) }}</p>
	                      <a href="{{ route('Service.Detail',$sliderservice->id) }}" class="btn btn-theme-colored btn-sm mt-5">Read More</a>
	                    </div>
	                  </div>
	                </div>
	              @endforeach
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>
	  @endif

    <!-- Section: Blog -->
    @if($services->count()>0)

    	<section>
		    <div class="container mt-60">
		      <div class="row">
		        <div class="col-md-8 blog-pull-right">
		          <div class="single-service">
		            <img src="{{ asset('storage/images/services/maxresdefault.png') }}" alt="">
		           
		          </div>
		        </div>
		        <div class="col-sm-12 col-md-4" id="FeaturesLinting">
		          <div class="sidebar sidebar-left mt-sm-30 ml-40">
		            <div class="widget">
		              <h4 class="widget-title line-bottom">Services <span class="text-theme-color-2">List</span></h4>
		              <div class="services-list">
		                <ul class="list list-border angle-double-right">
		                	@foreach($services as $service)
		                		<li class="active"><a href="{{ route('Service.Detail',$service->id) }}">{{ ucwords($service->name) }}</a></li>
		                	@endforeach
		                	<!-- <li class="active"><a href="SearchEngineMarketing">Search Engine Marketing</a></li> -->
		                   <!--  <li class="active"><a href="ProductBranding">Product Branding</a></li>
		                    <li class="active"><a href="WebsiteDesigningDevelopment">Website Designing Website Development</a></li>
		                    <li class="active"><a href="MobileApplicationDevelopment">Mobile Application Development</a></li>
		                    <li class="active"><a href="OffshoreITStaffing">Offshore IT Staffing</a></li>
		                    <li class="active"><a href="Domain&Hosting">Domain & Hosting</a></li>
		                    <li class="active"><a href="Outsourcing">Outsourcing</a></li>
		                    <li class="active"><a href="TaxationAudit">Taxation Audit and Professional Consultancy</a></li> -->
		                </ul>
		               </div>
		            </div>
		            
		          </div>
		        </div>
		      </div>
		    </div>
	    </section>


    @endif
  





  
    <!-- Divider: testimonials -->
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


 





    <!-- Divider: Funfact -->
    <section style="height: 50% !important;"  class="divider parallax  "  data-parallax-ratio="0.7">
    
	    <div class="container">
	      <div class="row">
	        <h3 class="line-bottom mt-0 mb-50 ml-15">Book Services</h3>
	        <div class="col-xs-3 col-sm-6 col-md-3">
	          <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
	            <div class="media-body">
	              <h5 class="mt-0">Our Office Location</h5>
	              <p>25-a, batala colony Fsd</p>
	            </div>
	          </div>
	        </div>
	        <div class="col-xs-3 col-sm-6 col-md-3">
	         
	          <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
	              <div class="media-body">
	              <h5 class="mt-0"> <a href="tel:+6494461709">Contact Number</a></h5>
	              <p> <a href="tel:+92 313 6650965">+92 313 6650965</a></p>
	            </div>
	          </div></a>
	        </div>
	        <div class="col-xs-3 col-sm-6 col-md-3">
	          <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
	            <div class="media-body">
	              <h5 class="mt-0"><a href="mailto:info@optimumtech.com">Email Address</a></h5>
	              <p><a href="mailto:info@optimumtech.com">info@optimumtech.com</a></p>
	            </div>
	          </div>
	        </div>
	        <div class="col-xs-3 col-sm-6 col-md-3">
	          <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
	            <div class="media-body">
	              <a href="skype:usman_gcuf?call" >   <h5 class="mt-0">Make a Video Call</h5></a>
	              <a href="skype:usman_gcuf?call" >  <p>OptimumSkype</p></a>
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