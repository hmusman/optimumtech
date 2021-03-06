@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->

@section('style')
<style>
.testimonial-quote {
    font-size: 16px;
}

.testimonial-quote blockquote {
    /* Negate theme styles */
    border: 0;
    margin: 0;
    padding: 0;

    background: none;
    color: gray;
    font-family: Georgia, serif;
    font-size: 1.5em;
    font-style: italic;
    line-height: 1.4 !important;
    margin: 0;
    position: relative;
    text-shadow: 0 1px white;
    /*z-index: 600;*/
}

.testimonial-quote blockquote * {
    box-sizing: border-box; 
}

.testimonial-quote blockquote p {
    color: #75808a; 
    line-height: 1.4 !important;
}

.testimonial-quote blockquote p:first-child:before {
    content: '\201C';
    color: #81bedb;
    font-size: 7.5em;
    font-weight: 700;
    opacity: .3;
    position: absolute;
    top: -.4em;
    left: -.2em;    
    text-shadow: none;
    z-index: -300;
}


.testimonial-quote cite {
    color: gray;
    display: block;
    font-size: 12px;
}
  
.testimonial-quote cite span {
    color: #5e5e5e;
    font-size: 13px;
    font-style: normal;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-shadow: 0 1px white; 
}

.testimonial-quote {
    position: relative; 
}

  
</style>
@endsection

@section('content')
	<section>
  <div class="container">
        <div class="row">
        </div>
        <div class="row mt-60 mb-30">
          <div class="col-md-8" style="padding-left: 20px;">
            <h2 class="mt-0">{{ ucwords($product->name) }}</h2>
            <p style="text-align: justify;">{!! ucfirst($product->detail) !!}</p>
          </div>
          <div class="col-md-4 testimonial-quote group">
            <div class="quote-container">
                <blockquote>
                  <p>For over 10 years we are providing premium services as established IT Company of Optimum Tech.</p>
                  <cite title="Source Title"><span>Ahsan Raza</span> <br>Co Founder<br>
                OPTIMUM-TECH</cite>
                </blockquote>
            </div>
          </div>
        </div>
  </div>
</section>
	
	@if($product->customers->count()>0)
		
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
		          	@foreach($product->customers as $customer)
		          		@php $img = 'storage/'.$customer->img @endphp
		          		<div class="item">
			              <div class="testimonial pt-10">
			                <div class="thumb pull-left mb-0 mr-0 pr-20">
			                  <img class="img-rounded" alt="" src="{{ asset($img) }}">
			                </div>
			                <div class="ml-100 ">
			                  <h4 class="text-white mt-0">{{ $customer->detail }}</h4>
			                  <a href="{{ $customer->url }}"><p class="author mt-20">- <span class="text-theme-color-2">{{ $customer->name }},</span> </p></a>
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

  


@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->