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
          <h2 class="line-bottom font-20 text-theme-colored text-uppercase mb-10 mt-0">Welcome to Our Portfolio</h2>
        </div>
      </div>

      <div class="row">
        @if($portfolios->count()>0)

            @foreach($portfolios as $portfolio)
              @php $img = 'storage/'.$portfolio->img1 @endphp
              <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20 mt-10">
                <div class="image-box-thum">
                  <img class="img-fullwidth" alt="" src="{{ asset($img) }} ">
                </div>
                <div class="image-box-details pt-20 pb-sm-20">
                  <h4 class="title text-uppercase line-bottom mt-0">{{ $portfolio->name }}</h4>
                  <a href="{{ route('Portfolio.Detail',$portfolio->id) }}" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
                </div>
              </div>
            @endforeach

        @endif
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