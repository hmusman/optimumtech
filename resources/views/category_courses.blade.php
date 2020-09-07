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
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('storage/images/bg/bg3.jpg') }}">
	        <div class="container pt-70 pb-20">
	          <!-- Section Content -->
	          <div class="section-content">
	            <div class="row">
	              <div class="col-md-12">
	                <h2 class="title text-white">Course List</h2>
	                <ol class="breadcrumb text-left text-black mt-10">
	                 <!--  <li><a href="#">Home</a></li>
	                  <li><a href="#">Pages</a></li>
	                  <li class="active text-gray-silver">Page Title</li> -->
	                </ol>
	              </div>
	            </div>
	          </div>
	        </div>
        </section>
	      <br/>
	      <br/>
      	<!-- Section: Course list -->
      	<section>
	        <div class="container">
	            <div class="row">
		            <div class="col-md-9 blog-pull-right">
		            	@if($courses->count()>0)
		              		@foreach($courses as $course)
		              			@php $img = 'storage/'.$course->img @endphp
		              			<div class="row mb-15">
					                <div class="col-sm-6 col-md-4">
					                  <div class="thumb"> <img alt="featured project" src="{{ asset($img) }}" class="img-fullwidth"></div>
					                </div>
					                <div class="col-sm-6 col-md-8">
					                  <h4 class="line-bottom mt-0 mt-sm-20">{{ ucwords($course->title) }}</h4>
					                  <ul class="review_text list-inline">
					                    <li><h4 class="mt-0"><span class="text-theme-color-2">Price :</span> {{ $course->price }}</h4></li>
					                    <li>
					                      <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
					                    </li>
					                  </ul>
					                  <p>{!! ucfirst($course->detail) !!}</p>
					                  <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="{{ route('CourseDetail',$course->id) }}">read more</a> &nbsp; <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="{{ route('ApplyForCourse',$course->id) }}">Book Course</a>
					                </div>
					            </div>

		              		@endforeach
		              	@endif
		            </div>
		            <div class="col-md-3">
		              <div class="sidebar sidebar-left mt-sm-30">
		                <div class="widget">
		                  <h5 class="widget-title line-bottom">Search <span class="text-theme-color-2">Courses</span></h5>
		                  <div class="search-form">
		                    <form>
		                      <div class="input-group">
		                        <input type="text" placeholder="Click to Search" class="form-control search-input">
		                        <span class="input-group-btn">
		                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
		                        </span>
		                      </div>
		                    </form>
		                  </div>
		                </div>
		                @if($categories->count()>0)
		                	<div class="widget">
				                <h5 class="widget-title line-bottom">Course <span class="text-theme-color-2">Categories</span></h5>
				                <div class="categories">
				                    <ul class="list list-border angle-double-right">
				                    	@foreach($categories as $category)
				                    		<li><a href="{{ route('Course.Category',$category->id) }}">{{ ucwords($category->title) }}<span></span></a></li>
		                				@endforeach
				                      <!-- <li><a href="/Courses/FinalSmesterCourses">Final Smester Courses<span></span></a></li>
				                      <li><a href="/Courses/TechnicalCourses">Technical Courses<span></span></a></li>
				                      <li><a href="/Courses/DesigningCourses">Designing Courses<span></span></a></li>
				                      <li><a href="/Courses/ShortCourses">Short Courses<span></span></a></li> -->
				                      <!-- <li><a href="#">Flutter<span></span></a></li> -->
				                    </ul>
				                </div>
			                </div>

		                @endif
		               
		                <!-- <div class="widget">
		                  <h5 class="widget-title line-bottom">Latest <span class="text-theme-color-2">Course</span></h5>
		                  <div class="latest-posts">
		                    <article class="post media-post clearfix pb-0 mb-10">
		                      <a class="post-thumb" href="#"><img src="{{ asset('storage/images/services/react.df70b005.png') }}" alt=""></a>
		                      <div class="post-right">
		                        <h5 class="post-title mt-0"><a href="#">React NodeJs</a></h5>
		                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
		                      </div>
		                    </article>
		                    <article class="post media-post clearfix pb-0 mb-10">
		                      <a class="post-thumb" href="#"><img src="{{ asset('storage/images/services/download.png') }}" alt=""></a>
		                      <div class="post-right">
		                        <h5 class="post-title mt-0"><a href="#">Flutter</a></h5>
		                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
		                      </div>
		                    </article>
		                    <article class="post media-post clearfix pb-0 mb-10">
		                      <a class="post-thumb" href="#"><img src="{{ asset('storage/images/services/fluter.png') }}" alt=""></a>
		                      <div class="post-right">
		                        <h5 class="post-title mt-0"><a href="#">Python/Flask</a></h5>
		                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
		                      </div>
		                    </article>
		                  </div>
		                </div> -->
		                @if($freeCourses->count()>0)
		                	<div class="widget">
				                <h5 class="widget-title line-bottom">Free <span class="text-theme-color-2">Course</span></h5>
				                <div class="latest-posts">
				                  	@foreach($freeCourses as $freeCourse)
				                  		@php $img = 'storage/'.$freeCourse->img @endphp
				                  		<article class="post media-post clearfix pb-0 mb-10">
					                      <a class="post-thumb" href="{{ route('CourseDetail',$freeCourse->id) }}"><img src="{{ asset($img) }}" alt=""></a>
					                      <div class="post-right">
					                        <h5 class="post-title mt-0"><a href="#">{{ ucwords($freeCourse->title) }}</a></h5>
					                      </div>
					                    </article>
				                  	@endforeach
				 
				                </div>
				            </div>

		                @endif
		               
		              
		              </div>
		            </div>
	            </div>
	            <!-- <div class="row">
		            <div class="col-sm-12">
		              <nav>
		                <ul class="pagination theme-colored xs-pull-center m-0">
		                  <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
		                  <li class="active"><a href="#">1</a></li>
		                  <li><a href="#">2</a></li>
		                  <li><a href="#">3</a></li>
		                  <li><a href="#">4</a></li>
		                  <li><a href="#">5</a></li>
		                  <li><a href="#">...</a></li>
		                  <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
		                </ul>
		              </nav>
		            </div>
	            </div> -->
	        </div>
      	</section>
    </div>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->