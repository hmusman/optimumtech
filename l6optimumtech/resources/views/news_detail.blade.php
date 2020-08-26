@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	 <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('storage/images/bg/bg3.jpg') }} ">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Latest News Detail</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 mt-30">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  @php $img = 'storage/'.$news->img @endphp
                  <div class="post-thumb thumb"> <img src="{{ asset($img) }} " alt="" class="img-responsive img-fullwidth"> </div>
                </div>  
                <div class="entry-title pt-10 pl-15">
                  <h4><a class="text-uppercase" href=""> {{ $news->title }}</a></h4>
                </div>
                <div class="entry-meta pl-15">
                  <ul class="list-inline">
                    <li>Posted: <span class="text-theme-color-2">{{ date('d/m/Y',strtotime($news->news_date)) }}</span></li>
                    <li>By: <span class="text-theme-color-2">Admin</span></li>
                    <!-- <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li> -->
                  </ul>
                </div>
                <div class="entry-content mt-10">
                  <p class="mb-15">{{ $news->detail }}</p>
                  <!-- <div class="mt-30 mb-0">
                    <h5 class="pull-left mt-10 mr-20 text-theme-color-2">Share:</h5>
                    <ul class="styled-icons icon-circled m-0">
                      <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                    </ul>
                  </div> -->
                </div>
              </article>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->