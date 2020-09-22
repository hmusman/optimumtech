@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->
@section('style')
<link rel="stylesheet" href="{{asset('assets/gallery/style.css')}}">
<style>
	.service-block .content {
          border: none; 
    }
    .events{
    	background: none;
    	float: right;
    	color: #2e6da4;
    }

    @media (max-width: 550px){

    	.Grid-row {
    		display: block !important;
    	}
    	.Card {
    		background-color: transparent !important;
    	}
    	.Card-thumb {
    		margin-left: 13px !important;
    		margin-bottom: 7px !important;
    		width: 44rem !important;
    		height: 23rem !important;
    	}
    	.Card-title, .Card-explore {
    		height: 2rem !important;
    	}
		.Card-button {
			left: 23rem !important;
    		top: 15rem !important;
    		padding: 1.5rem 11rem !important;
    		font-size: 1.75rem !important;
		}
		.Card-explore span {
			font-size: 15px !important;
		}
		.Card-title, .Card-explore {
			position: unset !important;
			display: flex !important;
		}
		.Gallery-image {
			width: 15rem !important;
    		height: 14rem !important;
		}
		.Gallery-image--primary {
		    width: 31rem !important;
		    height: 30rem !important;
		}


	}
</style>
@endsection

@section('content')
	
	<div class="main-content">
		
		<!-- Section: home -->
	    <section id="home" class="divider"  style="background-color: #f7f7f7;">
	    	@if($sliders->count()>0)
		    	<div id="sync1" class="owl-carousel owl-theme">
		    		@foreach($sliders as $slider)
		    			@php $sliderImg = 'storage/'.$slider->img @endphp
		    			<div class="item">					       
		    				<img src="{{  asset($sliderImg) }}" alt="">
					    </div>

		    		@endforeach
			    </div>
	    	@endif
		    
	    </section>
	     
	    <!-- Section News Ticker -->
	    @if($latestNews->count() >0)
		    <section style="background-color: #f7f7f7;">
		        <div class="container ml-5 mr-5"> 
			        <div class="section-content">
			          <div class="row">
			            <div class="col-md-12">
			              <h6 class="letter-space-4 text-gray-darkgray text-uppercase  mb-0" id="Newsone" >Optimum Tech</h6>
			              <h2 class="text-uppercase font-weight-600 mt-0my font-28 line-bottom" id="NewsLineBtm" >News</h2>
			              <div id="redNews" class="news red" style="display: inline-flex;   overflow: hidden;     width: 100%;height: 50px !important;">
			                <span style="padding-bottom: 25px; z-index: 11; margin-top: -1px;padding-top: 13px;">LatestNews</span>
			                <ul style="display: inline;padding-top: 3px;     z-index: 10; margin-top: 6px;" >
			                  <li style="float: left; overflow: hidden; display: inline;  width: 300% !important; ">
			                 	
			                 	@foreach($latestNews as $singleRow)
			                 		 <a  style="display: inline; margin-right: 100px;" href="{{ route('NewsDetail',$singleRow->id) }}" target="_blank" >{{ ucfirst($singleRow->title) }}</a>
			                 	@endforeach
			                  
			                	</li>


	                 
	               			 </ul>
			              </div>
			            </div>
			          </div>

			        </div>
		        </div>
		    </section><!-- end section -->
	    @endif

	      <!-- Section: COURSES -->
	      <section id="prodSec" class="bg-lighter" style="   
	      padding-top: 55px;">
		        <div class="container pb-60 ml-5 mr-5">
		          <div class="section-title mb-10">
		            <div class="row">
		              <div class="col-md-3">
		              	@if($freeCourses->count()>0)
		              		 <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Free <span
		                    class="text-theme-color-2 font-weight-400">COURSES</span></h2>
		              	@endif
		               
		              </div>
		              <div class="col-md-9">
		                <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Premium <span
		                    class="text-theme-color-2 font-weight-400">Services</span></h2>
		              </div>
		            </div>
		          </div>
		          <div class="section-content">
		            <div class="row">

		              <div class="col-md-3">
		              	@if($freeCourses->count()>0)
		              		<div class="autoplay" data-dots="true">
		              			@foreach($freeCourses as $course)
		              				@php $img = 'storage/'.$course->img  @endphp
		              				<div class="item ">
					                    <div class="service-block bg-white" style="height: 495px !important">
					                      <div class="thumb"> <img alt="featured project" src="{{  asset($img) }}" class="img-fullwidth">
					                        <h4 class="text-white mt-0 mb-0"><span class="price">Free</span></h4>
					                      </div>
					                      <div class="content text-left flip p-25 pt-0">
					                        <h4 class="line-bottom mb-10">{{ ucfirst($course->title) }}</h4>
					                        <p  style="text-align: justify;">{!! ucfirst(substr($course->detail,0,250)) !!}...</p>
					                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
					                          href="{{ route('CourseDetail',$course->id)}}" target="_blank">view details</a>
					                      </div>
					                    </div>
					                </div>	
		              			@endforeach
				                
				                  
				            </div>

		              	@endif
		                
		              </div>
		              <div class="col-md-9" >
		                <div class="row ">
		                  	
		                  	@if($courses->count()>0)
		                  	
		                  		<div  class="col-lg-4 col-md-4 col-sm-4"   >
				                    <div class="card effect__hover" style="min-height: 243px !important;">
				                      <div class="card__front border-3px bg-lighter">
				                          <div class="card__text">
				                            <div class="display-table-parent">
				                              <div class="display-table">
				                                <div class="display-table-cell">
				                                  <div class="icon-box mb-0">
				                                    <a href="#" class="icon mb-0">
				                                      <i class="text-theme-colored pe-7s-note2 font-72" style="color: #087b92 !important;"></i>
				                                    </a>
				                                    <h3  class="icon-box-title text-theme-colored">Certification Courses</h3>
				                                  </div>
				                                </div>
				                              </div>
				                            </div>
				                          </div>
				                       </div>
				                      <div class="card__back" data-bg-color="#202c45">
				                        <div class="card__text">
				                          <div class="display-table-parent p-30">
				                              <div class="display-table">
				                                <div class="display-table-cell">
				                                  <h3 id="specialhed" class="text-theme-color-2">Certification Courses</h3>
				                                  <p id="specialp" class="text-gray-lightgray">Web Designing, Web Development , React , PHP , NodeJs , Cloud , Docker , Flutter , MongoDB , .NET</p>
				                                  <a href="/Courses" class="btn btn-default mt-10"> Read More </a>
				                                </div>
				                              </div>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
			                  	</div>
			                @else
			                <div  class="col-lg-4 col-md-4 col-sm-4"   >
			                    <div class="card effect__hover" style="min-height: 243px !important;">
			                      <div class="card__front border-3px bg-lighter">
			                          <div class="card__text">
			                            <div class="display-table-parent">
			                              <div class="display-table">
			                                <div class="display-table-cell">
			                                  <div class="icon-box mb-0">
			                                    <a href="#" class="icon mb-0">
			                                      <i class="text-theme-colored pe-7s-note2 font-72" style="color: #087b92 !important;"></i>
			                                    </a>
			                                    <h3  class="icon-box-title text-theme-colored">Certification Courses</h3>
			                                  </div>
			                                </div>
			                              </div>
			                            </div>
			                          </div>
			                       </div>
			                      <div class="card__back" data-bg-color="#202c45">
			                        <div class="card__text">
			                          <div class="display-table-parent p-30">
			                              <div class="display-table">
			                                <div class="display-table-cell">
			                                  <h3 id="specialhed" class="text-theme-color-2">Certification Courses</h3>
			                                  <p id="specialp" class="text-gray-lightgray">Web Designing, Web Development , React , PHP , NodeJs , Cloud , Docker , Flutter , MongoDB , .NET</p>
			                                  <a href="/Courses" class="btn btn-default mt-10"> Read More </a>
			                                </div>
			                              </div>
			                          </div>
			                        </div>
			                      </div>
			                    </div>
		                  	</div>
		                  	@endif

		                  	@if($products->count()>0)
		                  		
		                  		<div  class="col-lg-4 col-md-4 col-sm-4"  >
								  <div class="card effect__hover" style="min-height: 243px !important;">
								    <div class="card__front border-3px bg-lighter">
								        <div class="card__text">
								          <div class="display-table-parent">
								            <div class="display-table">
								              <div class="display-table-cell">
								                <div class="icon-box mb-0">
								                  <a href="#" class="icon mb-0">
								                    <i class="text-theme-colored pe-7s-gift font-72" style="color: #087b92 !important;"></i>
								                  </a>
								                  <h3  class="icon-box-title text-theme-colored">Our Products</h3>
								                </div>
								              </div>
								            </div>
								          </div>
								        </div>
								     </div>
								    <div class="card__back" data-bg-color="#202c45">
								      <div class="card__text">
								        <div class="display-table-parent p-30">
								            <div class="display-table">
								              <div class="display-table-cell">
								                <h3 id="specialhed" class="text-theme-color-2">Our Products</h3>
								                <p id="specialp" class="text-gray-lightgray">Our Products  are positively associated with student achievement gains throughout a teacher's career</p>
								                <a href="/Products" class="btn btn-default mt-10"> Read More </a>
								              </div>
								            </div>
								        </div>
								      </div>
								    </div>
								  </div>  
								</div>
							@else
							<div  class="col-lg-4 col-md-4 col-sm-4"  >
							  <div class="card effect__hover" style="min-height: 243px !important;">
							    <div class="card__front border-3px bg-lighter">
							        <div class="card__text">
							          <div class="display-table-parent">
							            <div class="display-table">
							              <div class="display-table-cell">
							                <div class="icon-box mb-0">
							                  <a href="#" class="icon mb-0">
							                    <i class="text-theme-colored pe-7s-gift font-72" style="color: #087b92 !important;"></i>
							                  </a>
							                  <h3  class="icon-box-title text-theme-colored">Our Products</h3>
							                </div>
							              </div>
							            </div>
							          </div>
							        </div>
							     </div>
							    <div class="card__back" data-bg-color="#202c45">
							      <div class="card__text">
							        <div class="display-table-parent p-30">
							            <div class="display-table">
							              <div class="display-table-cell">
							                <h3 id="specialhed" class="text-theme-color-2">Our Products</h3>
							                <p id="specialp" class="text-gray-lightgray">Our Products  are positively associated with student achievement gains throughout a teacher's career</p>
							                <a href="/Products" class="btn btn-default mt-10"> Read More </a>
							              </div>
							            </div>
							        </div>
							      </div>
							    </div>
							  </div>  
							</div>
		                  	@endif

		                  	@if($services->count()>0)
		                  		
		                  		<div  class="col-lg-4 col-md-4 col-sm-4"  >
				                    <div class="card effect__hover" style="min-height: 243px !important; ">
				                      <div class="card__front border-3px bg-lighter">
				                          <div class="card__text">
				                            <div class="display-table-parent">
				                              <div class="display-table">
				                                <div class="display-table-cell">z
				                                  <div class="icon-box mb-0">
				                                    <a href="#" class="icon mb-0" style="
				                                    margin-top: -20px;">
				                                      <i class="text-theme-colored pe-7s-world font-72" style="color: #087b92 !important;"></i>
				                                    </a>
				                                    <h3  class="icon-box-title text-theme-colored" style="color: #626363 !important">Services</h3>
				                                  </div>
				                                </div>
				                              </div>
				                            </div>
				                          </div>
				                       </div>
				                      <div class="card__back" data-bg-color="#202c45">
				                        <div class="card__text">
				                          <div class="display-table-parent p-30">
				                              <div class="display-table">
				                                <div class="display-table-cell">
				                                  <h3 id="specialhed" class="text-theme-color-2">Services</h3>
				                                  <p id="specialp" class="text-gray-lightgray">our Services is a way of analyzing and building websites so that they can be found a lot easier 
				                                    when they are indexed by the Search Engines. </p>
				                                  <a href="/Services" class="btn btn-default mt-10"> Read More </a>
				                                </div>
				                              </div>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
			                    </div>
			                 @else
			                 <div  class="col-lg-4 col-md-4 col-sm-4"  >
				                    <div class="card effect__hover" style="min-height: 243px !important; ">
				                      <div class="card__front border-3px bg-lighter">
				                          <div class="card__text">
				                            <div class="display-table-parent">
				                              <div class="display-table">
				                                <div class="display-table-cell">z
				                                  <div class="icon-box mb-0">
				                                    <a href="#" class="icon mb-0" style="
				                                    margin-top: -20px;">
				                                      <i class="text-theme-colored pe-7s-world font-72" style="color: #087b92 !important;"></i>
				                                    </a>
				                                    <h3  class="icon-box-title text-theme-colored" style="color: #626363 !important">Services</h3>
				                                  </div>
				                                </div>
				                              </div>
				                            </div>
				                          </div>
				                       </div>
				                      <div class="card__back" data-bg-color="#202c45">
				                        <div class="card__text">
				                          <div class="display-table-parent p-30">
				                              <div class="display-table">
				                                <div class="display-table-cell">
				                                  <h3 id="specialhed" class="text-theme-color-2">Services</h3>
				                                  <p id="specialp" class="text-gray-lightgray">our Services is a way of analyzing and building websites so that they can be found a lot easier 
				                                    when they are indexed by the Search Engines. </p>
				                                  <a href="/Services" class="btn btn-default mt-10"> Read More </a>
				                                </div>
				                              </div>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
			                    </div>
		                  	@endif
		                  	<div  class="col-lg-4 col-md-4 col-sm-4"  style="margin-top: 10px !important">
		                    	<div class="card effect__hover" style="min-height: 243px !important; ">
		                      <div class="card__front border-3px bg-lighter">
		                          <div class="card__text">
		                            <div class="display-table-parent">
		                              <div class="display-table">
		                                <div class="display-table-cell">z
		                                  <div class="icon-box mb-0">
		                                    <a href="#" class="icon mb-0" style="
		                                    margin-top: -20px;">
		                                      <i class="text-theme-colored pe-7s-world font-72" style="color: #087b92 !important;"></i>
		                                    </a>
		                                    <h3  class="icon-box-title text-theme-colored" style="color: #626363 !important">Services</h3>
		                                  </div>
		                                </div>
		                              </div>
		                            </div>
		                          </div>
		                       </div>
		                      <div class="card__back" data-bg-color="#202c45">
		                        <div class="card__text">
		                          <div class="display-table-parent p-30">
		                              <div class="display-table">
		                                <div class="display-table-cell">
		                                  <h3 id="specialhed" class="text-theme-color-2">Services</h3>
		                                  <p id="specialp" class="text-gray-lightgray">our Services is a way of analyzing and building websites so that they can be found a lot easier 
		                                    when they are indexed by the Search Engines. </p>
		                                  <a href="#" class="btn btn-default mt-10"> Read More </a>
		                                </div>
		                              </div>
		                          </div>
		                        </div>
		                      </div>
		                    	</div>
		                    </div>
		                  	<div  class="col-lg-4 col-md-4 col-sm-4" style="margin-top: 10px !important">
		                    	<div class="card effect__hover" style="min-height: 243px !important;">
		                      <div class="card__front border-3px bg-lighter">
		                          <div class="card__text">
		                            <div class="display-table-parent">
		                              <div class="display-table">
		                                <div class="display-table-cell">
		                                  <div class="icon-box mb-0">
		                                    <a href="#" class="icon mb-0">
		                                      <i class="text-theme-colored pe-7s-display1 font-72" style="color: #087b92 !important;"></i>
		                                    </a>
		                                    <h3  class="icon-box-title text-theme-colored">Designing and Printing</h3>
		                                  </div>
		                                </div>
		                              </div>
		                            </div>
		                          </div>
		                       </div>
		                      <div class="card__back" data-bg-color="#202c45">
		                        <div class="card__text">
		                          <div class="display-table-parent p-30">
		                              <div class="display-table">
		                                <div class="display-table-cell">
		                                  <h3 id="specialhed" class="text-theme-color-2">Designing and Printing</h3>
		                                  <p id="specialp" class="text-gray-lightgray">As an IT Service Provider, OPTIMUM TECH strives to provide our customers quality
		                                     application development services.</p>
		                                  <a href="#" class="btn btn-default mt-10"> Read More </a>
		                                </div>
		                              </div>
		                          </div>
		                        </div>
		                      </div>
		                    	</div>
		                  	</div>
		                  	<div  class="col-lg-4 col-md-4 col-sm-4" style="margin-top: 10px !important">
		                    	<div class="card effect__hover" style="min-height: 243px !important;">
		                      <div class="card__front border-3px bg-lighter">
		                          <div class="card__text">
		                            <div class="display-table-parent">
		                              <div class="display-table">
		                                <div class="display-table-cell">
		                                  <div class="icon-box mb-0">
		                                    <a href="#" class="icon mb-0" style="
		                                    margin-top: -10px;">
		                                      <i class="text-theme-colored pe-7s-plane font-72" style="color: #087b92 !important;"></i>
		                                    </a>
		                                    <h3  class="icon-box-title text-theme-colored">Tourism</h3>
		                                  </div>
		                                </div>
		                              </div>
		                            </div>
		                          </div>
		                       </div>
		                      <div class="card__back" data-bg-color="#202c45">
		                        <div class="card__text">
		                          <div class="display-table-parent p-30">
		                              <div class="display-table">
		                                <div class="display-table-cell">
		                                  <h3 id="specialhed" class="text-theme-color-2">Tourism</h3>
		                                  <p id="specialp" class="text-gray-lightgray"> Tourism is travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours.
		                                   </p>
		                                  <a href="#" class="btn btn-default mt-10"> Read More </a>
		                                </div>
		                              </div>
		                          </div>
		                        </div>
		                      </div>
		                    	</div>
		                  	</div>
		                </div>


		            </div>
		            </div>
		          </div>
		        </div>
	      	</section>
			
		   
	     
	      	
	      	<!-- Section: Why Choose Us -->
		    <section id="event" class="">
		        <div class="container pb-50 ml-5 mr-5">
		          <div class="section-content">
		            <div class="row">
			              <div class="col-md-6" style="overflow-y: auto;">
			              	@if($events->count()>0)
			              		<h3 class="text-uppercase line-bottom mt-5 line-height-1"><i class="fa fa-calendar mr-10"></i>Upcoming
			                  		<span class="text-theme-color-2">Events</span></h3>	
			                  	@foreach($events as $event)
			                  		@php $img = 'storage/'.$event->img; @endphp
			                  		<article class="post media-post clearfix pb-0 mb-10">
					                  <a href="{{ route('EventDetail',$event->id) }}" target="_blank" class="post-thumb mr-20"><img alt="" src="{{ asset($img) }}"></a>
					                  <div class="post-right">
					                    <h4 class="mt-0 mb-5"><a href="{{ route('EventDetail',$event->id) }}" target="_blank">{{ ucwords($event->title) }}</a></h4>
					                    <ul class="list-inline font-12 mb-5">
					                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> <!--June 26, 2016 --> {{ date('F',strtotime($event->event_date)) }} {{ date('d',strtotime($event->event_date)) }}, {{ date('Y',strtotime($event->event_date)) }},{{ date('h:i a',strtotime($event->event_time)) }} |</li>
					                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>{{ $event->address }}</li>
					                    </ul>
					                    <p class="mb-0 font-13">{{ $event->detail }}</p>
					                    <a class="text-theme-colored font-13" href="{{ route('EventDetail',$event->id) }}" target="_blank">Read More →</a>
					                  </div>
					                </article>

			                  	@endforeach
			              	@endif
			              	<a href="{{ route('Events') }}" class="btn btn-primary events">View All Events</a>
			              </div>
			              <div class="col-md-6">
			              	   <h2 class="mt-5 text-uppercase font-28 line-bottom line-height-1">Latest <span
				                    class="text-theme-color-2 font-weight-400">News</span></h2>
				                @if($news->count()>0)
				                <div class="autoplay3" >
				                	@foreach($news as $row)
				                		@php $img = 'storage/'.$row->img @endphp
				                		<div class="item" data-wow-duration="1s" data-wow-delay="0.3s">
						                    <article class="post clearfix mb-sm-30">
						                      <div class="entry-header">
						                        <div class="post-thumb thumb">
						                          <a href="{{ route('NewsDetail',$row->id) }}" target="_blank"> <img src="{{  asset($img) }}" alt="" class="img-responsive img-fullwidth"></a>
						                        </div>
						                      </div>
						                      <div class="entry-content p-20 pr-10 bg-white">
						                        <div class="entry-meta media mt-0 no-bg no-border">
						                          {{--<div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
						                            <ul>
						                              <li class="font-16 text-white font-weight-600 border-bottom">{{ date('d',strtotime($row->news_date)) }}</li>
						                              <li class="font-12 text-white text-uppercase">{{ date('M',strtotime($row->news_date)) }}</li>
						                            </ul>
						                          </div>--}}
						                          <div class="media-body pl-15">
						                            <div class="event-content pull-left flip">
						                              <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('NewsDetail',$row->id) }}">{{ ucfirst($row->title) }}</a>
						                              </h4>
						                              <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
						                                  class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
						                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
						                                  class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> -->
						                            </div>
						                          </div>
						                        </div>
						                        <p class="mt-10">{{ \Illuminate\Support\Str::limit(ucfirst($row->detail), 90, $end='...') }}</p>
						                        <a href="{{ route('NewsDetail',$row->id) }}" target="_blank" class="btn-read-more">Read more</a>
						                        <div class="clearfix"></div>
						                      </div>
						                    </article>
						                  </div>
				                	@endforeach
				                  
				                </div>
			                @endif
			              </div>
		              
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		     </section>	


	       <!-- Section: blog -->
	      
       		<section id="blog" class="bg-lighter">
		        <div class="container ml-5 mr-5" style="padding-top: 0px !important ;">
			          <div class="section-title mb-10">
			            <div class="row mt-5">
			                <div class="col-md-6">
				              	<h3 class="line-bottom mt-0 line-height-1">Why <span class="text-theme-color-2">Choose Us?</span></h3>
			                </div>

			                <div class="col-md-6">
				              	@if($news->count()>0)
				                	<h2 class="mt-5 text-uppercase font-28 line-bottom line-height-1">Few <span
				                    class="text-theme-color-2 font-weight-400">Testimonials</span></h2>
				                @endif
			               </div>
			            </div>
			          </div>

			          <div class="section-content" style="height: 360px !important;">
			            <div class="row">
			              <!-- <div class="col-md-4"></div> -->
			              <div class="col-md-6">
			              	<p class="mb-10">Optimum-Tech  has played a significant role in the development of web based projects. They have been able to become a central part of the team punctually and develop amazing features that perform under the highest performance and demanded requirements possible</p>
							<div id="accordion1" class="panel-group accordion">
							<div class="panel">
								<div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse"
									href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> Customer Focus</a> 
								</div>
								<div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
									<div class="panel-content">
										<p>We make it our business to comprehend our customers’ business, targets and needs, and we work together with them to discover best results that reaches them or surpass them.</p>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12"
									class="" aria-expanded="true"> <span class="open-sub"></span> On-time Delivery</a>
								</div>
								<div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
									<div class="panel-content">
										<p>Our outsourcing and offshore background, our skilled developers, advanced advertisers, prevalent collective devices, and successful project administration, empower coordinated effort and effectively convey projects on time.</p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13"
									class="" aria-expanded="true"> <span class="open-sub"></span>Customer Privacy</a>
								</div>
								<div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
									<div class="panel-content">
										<p>We promise a high level of Privacy and security in every undertaking. All customer data remains strictly secret.</p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14"
									class="" aria-expanded="true"> <span class="open-sub"></span> Quality</a>
								</div>
								<div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
									<div class="panel-content">
										<p>We have created a repeatable, powerful software development methodology surveyed at SEI CMM level 3 that guarantees the high caliber of administration and effective conveyance to our worldwide customer base.</p>
									</div>
								</div>
							</div>
			              </div>
			          </div>
			              <div class="col-md-6">
			                <div class="container">
			                  <div class="row">
			                    <div class="col-sm-12">
			                        @if($testimonials->count()>0)

			                      		<!-- <h3><strong>Testimonial</strong></h3> -->
					                     <!-- <div class="seprator"></div> -->
					                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
					                        <!-- Wrapper for slides -->
					                    	<div class="carousel-inner">
					                    		@php $i=1; @endphp
					                    		@foreach($testimonials as $testimonial)
					                    			@php $img = 'storage/'.$testimonial->img @endphp
					                    			<div class="item <?php if($i==1){ echo "active"; } ?>">
							                            <div class="row" style="padding: 20px">
							                              <button style="border: none;"><i class="fa fa-quote-left testimonial_fa"
							                                  aria-hidden="true"></i></button>
							                              <p class="testimonial_para">{{ ucfirst($testimonial->detail) }}</p><br>
							                              <div class="row">
							                                <div class="col-sm-2">
							                                  <img src="{{ asset($img) }}"
							                                    class="img-responsive" style="width: 80px">
							                                </div>
							                                <div class="col-sm-10">
							                                  <h4><strong>{{ $testimonial->name }}</strong></h4>
							                                  <p class="testimonial_subtitle"><span>{{ $testimonial->designation }}</span><br>
							                                   <!--  <span>Officeal All Star Cafe</span> -->
							                                  </p>
							                                </div>
							                              </div>
							                            </div>
							                        </div>
							                        @php $i+=1; @endphp
					                    		@endforeach
					                          
					                        </div>
					                    </div>
				                        <div class="controls testimonial_control pull-right">
					                        <a class="left fa fa-chevron-left btn btn-default testimonial_btn"
					                          href="#myCarousel" data-slide="prev"></a>

					                        <a class="right fa fa-chevron-right btn btn-default testimonial_btn"
				                          href="#myCarousel" data-slide="next"></a>
				                        </div>

			                        @endif
			                    </div>
			                  </div>
			                </div>
			              </div>


			            </div>
			          </div>
		     
		        </div>
	       </section>
	       <!-- Section: team -->
		    @if($members->count()>0)

			    <section>
			        <div class="container ml-5 mr-5">
			          <div class="section-title mb-10">
			            <div class="row">
			              <div class="col-md-12">
			                <h2 class="mt-5 text-uppercase font-28 line-bottom line-height-1">Our <span
			                    class="text-theme-color-2 font-weight-400">Team</span></h2>
			              </div>
			            </div>
			          </div>
			          <div class="section-content">
			            <div class="row multi-row-clearfix">
			            	@foreach($members as $member)
			            		@php $img = 'storage/'.$member->img @endphp
			            		<div class="col-sm-3 col-md-3 sm-text-center ">
					                <div class="team maxwidth400" style="margin-right: -7px !important">
					                  	<div class="thumb"><img  class="img-fullwidthnew" src="{{  asset($img) }}" alt="" style="width: 50% !important; "></div>
						                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
						                    <h4 class="name text-theme-color-2 mt-0">{{ $member->name }} <br> <small>{{ $member->designation }}</small></h4>
						                    <p class="mb-20">{!! \Illuminate\Support\Str::limit($member->detail,100,$end="...") !!}</p>
						                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
						                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						                    </ul>
						                    <a class="btn btn-theme-colored btn-sm pull-right flip" href="{{ route('TeamDetail',$member->id) }}" target="_blank">
						                      Detail</a>
						                 </div>
					                </div>
					             </div>

			            	@endforeach

			            </div>
			          </div>
			        </div>
			    </section>

		    @endif
		    <!-- Section: Gallery -->
		     <section id="gallery" class="bg-lighter mt-60 mb-60 pb-250">
		        <div class="container">
		          <div class="section-title mb-10">
		            <div class="row">
		              <div class="col-md-12 mt-5">
		                <h2 class="mt-5 text-uppercase text-theme-colored title line-bottom line-height-1">Our<span
		                    class="text-theme-color-2 font-weight-400"> Gallery</span></h2>
		              </div>
		            </div>
		          </div>
		          
		          <div class="section-content" id="DynamicwidthOfGallary">
		            <div class="row">
		              <div class="col-md-12">
		                <!-- Works Filter -->
		                <div class="portfolio-filter font-alt align-center">
		                  <!-- <a href="#select4"  class="active" data-filter=".select4">Album</a>
		                  <span  > -->
		              		@if($photoFilter->count()>0)
		              			@php $i = 1; @endphp
		              			 <a href="" class="active myFilter all_filter" type="button"> All</a>
		              			@foreach($photoFilter as $filter)
		              				
		              				<a href="" type="button" class="myFilter" data-id="{{ $filter->category }}"  >{{ ucfirst($filter->category) }}</a>
		              				@php $i++; @endphp
		              			@endforeach
		              			
				               
		              		@endif
		                 
		                  </span>
		                </div>
		                <!-- End Works Filter -->

		                <!-- partial:index.partial.html -->
							<section class="Grid ">
							  <div class="Grid-row my_grid_row"> 
 								</div>
							</section> 
							<section class="Gallery" id="gallery-1">
							  <div class="Gallery-header"><a class="Gallery-close" onclick="closeAll()">×</a></div>

							  <div class="container row " id="sub_folder_images">
							   
							  </div>
							  
							</section>
					
		                <!-- End Portfolio Gallery Grid -->
		              </div>
		            </div>
		          </div>
		        </div>
		    </section>

	    @if($clients->count()>0)

	    	<section class="" style="z-index: 12;">
		        <div class="container pt-10 mt-10 ml-5 mr-5">
		          <div class="row">
		            <div class="col-md-12">
		              <h3 class="line-bottom mt-0 line-height-1">Our<span class="text-theme-color-2">Clients</span></h3>
		              </div>
		            </div>
		          </div>
		        </div>
		    </section>

		    <section class="clients bg-theme-color-2" style="height: 170px !important;">
		      <div class="container pt-10 pb-0 ml-5 mr-5">
		        <div class="row">
		          <div class="col-md-12">
		            <!-- Section: Clients -->
		            <div class="autoplay2 clients-logo transparent text-center mr-10">
		            	@foreach($clients as $client)
		            		@php $img = 'storage/'.$client->img;  @endphp
		            		<div class="item"  ><figure > 
				                <img src="{{ asset($img) }}" alt="Trulli" data-toggle="tooltip" data-placement="right" title="{{ ucwords($client->name) }}"  >
				                <!-- <figcaption style="color: aliceblue;margin-left: -80px;" data-toggle="tooltip" data-placement="top" title="Tooltip on top" >{{ ucwords($client->name) }}</figcaption> -->
				              </figure>
				              </div>
		            	@endforeach
		             
		            </div>
		          </div>
		        </div>
		      </div>
		    </section>

	    @endif
	    
	</div>


@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->
@section('script')
<!-- partial -->
<script  src="{{asset('assets/gallery/script.js')}}"></script>
<script type="text/javascript">
	
	function view_all_images(sub)
	{
		$.ajax({
			url:"{{ route('LoadSubFolderImages') }}",
			type:'get',
			data:{sub:sub},
			success:function(data)
			{
				$('.sub_folder_images').html(data);
			}
		});
	}

	function openMyGallery(id,sub) {

	  $.ajax({
	      url:"{{ route('LoadSubFolderImages') }}",
	      type:'get',
	      data:{sub:sub},
	      success:function(data)
	      {
	        $('#sub_folder_images').html(data);
	      }
	    });
	  closeMyAll();
	  const gallery = document.getElementById('gallery-' + id);
	  const card = document.getElementById('card-' + id);
	  gallery.classList.add('Gallery--active');
	  // card.classList.add('Card--active');

	  
	}

	function closeMyAll() {
	  const galleryActv = document.querySelector('.Gallery--active');
	  const cardActv = document.querySelector('.Card--active');
	  if (galleryActv) {
	    galleryActv.classList.remove('Gallery--active');
	  }
	  if (cardActv) {
	    cardActv.classList.remove('Card--active');
	  }
	}

	function all_load()
	{
		var main = "*";
		$.ajax({
			url:"{{ route('LoadAllSubFolder') }}",
			type:'get',
			data:{main:main},
			success:function(data)
			{
				$('.my_grid_row').html(data);
			}
		});
	}

	$(document).ready(function(){
		var main = "*";
		$.ajax({
			url:"{{ route('LoadAllSubFolder') }}",
			type:'get',
			data:{main:main},
			success:function(data)
			{
				$('.my_grid_row').html(data);
			}
		});
	});

	$('.all_filter').click(function(){
		var main = "*";
		$.ajax({
			url:"{{ route('LoadAllSubFolder') }}",
			type:'get',
			data:{main:main},
			success:function(data)
			{
				$('.my_grid_row').html(data);
			}
		});
	});

	$('.myFilter').click(function(){
		var main = $(this).data('id');
		$.ajax({
			url:"{{ route('LoadSubFolder') }}",
			type:'get',
			data:{main:main},
			success:function(data)
			{
				$('.my_grid_row').html(data);
			}
		});
	});

	// $('.view_all_images').click(function(){
	// 	var sub = $(this).data('id');
	// 	alert(sub);
	// 	$.ajax({
	// 		url:"{{ route('LoadSubFolderImages') }}",
	// 		type:'get',
	// 		data:{sub:sub},
	// 		success:function(data)
	// 		{
	// 			// $('.sub_folder_images').html(data);
	// 			console.log(data);
	// 		}
	// 	});
	// });

</script>

@endsection