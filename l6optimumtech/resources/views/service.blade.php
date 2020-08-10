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
                      <a href="{{ route('Service.Detail',$service->id) }}" class="btn btn-theme-colored btn-sm mt-5">Read More</a>
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
	



  	<br/>
<br/>


<div id="FeaturesLinting">&nbsp;&nbsp;&nbsp;&nbsp;</div>

  <!-- Section: Blog -->
  <section>
    <div class="container mt-60">
      <div class="row">
        <div class="col-md-8 blog-pull-right">
          <div class="single-service">
            @php  $img = 'storage/'.$service->img  @endphp
            <img src="{{ asset($img) }} " alt="">
          
          </div>
        </div>
        
        <div class="col-sm-12 col-md-4" >
          <div class="sidebar sidebar-left mt-sm-30 ml-40">
            <div class="widget">
              <h4 class="widget-title line-bottom">Services <span class="text-theme-color-2">List</span></h4>
              <div class="services-list">
                <ul class="list list-border angle-double-right">
                  	@foreach($services as $servicelist)
                      <li class="active"><a href="{{ route('Service.Detail',$service->id) }}">{{ $servicelist->name }}</a></li>
                    @endforeach
 
                 </ul>
              </div>
            </div>
          
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">

        
          <h3 class="text-theme-colored mb-20">{{ $service->name }}</h3>
         

          <p style="text-align: justify;"> {{ $service->detail }} </p>
          <div class="clearfix"></div>
          <h4 class="text-theme-colored line-bottom text-theme-colored mb-20">Why to take this service?</h4>
         
          <p>
           {{ $service->why }}
          </p>
        </div>
      </div>
    </div>
  </section>


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

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->