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
					                  <p>{!! $course->detail !!}</p>
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
				                    		<li><a href="">{{ ucwords($category->title) }}<span></span></a></li>
		                				@endforeach
				                    </ul>
				                </div>
			                </div>

		                @endif
		                @if($freeCourses->count()>0)
		                	<div class="widget">
				                <h5 class="widget-title line-bottom">Free <span class="text-theme-color-2">Course</span></h5>
				                <div class="latest-posts">
				                  	@foreach($freeCourses as $freeCourse)
				                  		@php $img = 'storage/'.$freeCourse->img @endphp
				                  		<article class="post media-post clearfix pb-0 mb-10"> 
					                      <a class="post-thumb" href="{{ route('CourseDetail',$freeCourse->id) }}" style="width: 100%;">
					                      	<img src="{{ asset($img) }}" alt="course image" style="width: 100%;"></a>
					                      <div class="post-right">
					                        <a href="#"><h4 class="post-title mt-0">{{ ucwords($freeCourse->title) }}</h4></a>
					                        <p>{!! ucfirst(substr($freeCourse->detail,0,200)) !!}...</p>
					                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
					                          href="{{ route('CourseDetail',$freeCourse->id)}}" target="_blank">view details</a>
					                      </div>
					                    </article>
				                  	@endforeach
				 
				                </div>
				            </div>

		                @endif
		               
		              
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