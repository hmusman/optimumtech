@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
<section >
  <div class="container" >
    <div class="section-content">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 pb-sm-20 mt-10 ">
          <h2 class="line-bottom font-20 text-theme-colored text-uppercase mb-10 mt-0">{{ $portfolio->name }}</h2>
        </div>
      </div>

      

      <div class="row">
        <div class="col-sm-8">
          <section id="home" class="divider">
              <div id="portfolio" class="owl-carousel owl-theme" style="height: 300px; width: 750px;">
                  @php $img1 = 'storage/'.$portfolio->img1 @endphp
                  @php $img2 = 'storage/'.$portfolio->img2 @endphp
                  @php $img3 = 'storage/'.$portfolio->img3 @endphp
                  <div class="item">                 
                    <img src="{{  asset($img1) }}" alt="">
                  </div>

                  @if($portfolio->img2 !='')
                    <div class="item">                 
                      <img src="{{  asset($img2) }}" alt="">
                    </div>
                  @endif

                  @if($portfolio->img3 !='')
                    <div class="item">                 
                      <img src="{{  asset($img3) }}" alt="">
                    </div>
                  @endif
              </div>
            
          </section>
        </div>

        <div class="col-md-4">
          <h2 class="line-bottom font-20 text-theme-colored text-uppercase mb-10 mt-0" style="font-size: .875rem !important;font-weight: bold;">Client</h2>
          <ul class="list-unstyled mb-0">
               <li><span class="text-muted">Name:</span><span class="font-weight-medium">&nbsp;{{ $portfolio->name }}</span></li>
               <li><span class="text-muted">Services:</span><span class="font-weight-medium">&nbsp; {{ $portfolio->service }}</span></li>
               <li><span class="text-muted">Website:</span><a class="navi-link font-weight-medium" target="_blank" href="{{ $portfolio->url }}">&nbsp; {{ $portfolio->url}}</a></li>
            </ul>
          <h2 class="line-bottom font-20 text-theme-colored text-uppercase mb-10 mt-0" style="font-size: .875rem !important;font-weight: bold;">Objective</h2>
          <p class="text-muted">{{ ucfirst($portfolio->objective) }}</p>
          <h2 class="line-bottom font-20 text-theme-colored text-uppercase mb-10 mt-0" style="font-size: .875rem !important;font-weight: bold;">Tool and Technology</h2>
            <p class="text-muted">{{ ucfirst($portfolio->technology) }}</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <p>{!! $portfolio->detail !!}</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section style="    height: 251px;margin-top: 20px;
  padding-top: 33px;" class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg2.jpg" data-parallax-ratio="0.7">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact text-center">
            <i class="pe-7s-smile mt-5 text-theme-color-2"></i>
            <h2 data-animation-duration="2000" data-value="5248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
            <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact text-center">
            <i class="pe-7s-note2 mt-5 text-theme-color-2"></i>
            <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
            <h5 class="text-white text-uppercase mb-0">Our Courses</h5>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact text-center">
            <i class="pe-7s-users mt-5 text-theme-color-2"></i>
            <h2 data-animation-duration="2000" data-value="248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
            <h5 class="text-white text-uppercase mb-0">Our Teachers</h5>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
          <div class="funfact text-center">
            <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
            <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
            <h5 class="text-white text-uppercase mb-0">Awards Won</h5>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->