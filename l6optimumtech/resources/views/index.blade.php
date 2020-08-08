@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


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
	    <section style="background-color: #f7f7f7;">
	        <div class="container" > 
		        <div class="section-content">
		          <div class="row">
		            <div class="col-md-12">
		              <h6 class="letter-space-4 text-gray-darkgray text-uppercase  mb-0" id="Newsone" >Optimum Tech</h6>
		              <h2 class="text-uppercase font-weight-600 mt-0my font-28 line-bottom" id="NewsLineBtm" >News</h2>
		              <div id="redNews" class="news red" style="display: inline-flex;   overflow: hidden;     width: 100%;height: 50px !important;">
		                <span style="padding-bottom: 25px; z-index: 11; margin-top: -1px;padding-top: 13px;">LatestNews</span>
		                <ul style="display: inline;padding-top: 3px;     z-index: 10; margin-top: 6px;" >
		                  <li style="float: left; overflow: hidden; display: inline;  ">
		                   <pre style="display: inline; background-color: #03394400;   border-left-color: #033a45; font-weight: bolder !important;  " > <a  href="#">1- Hurrah2 Free React Bootcamp Comimg on this Weekend Beready , Held at Iqbal Auditorium</a>                                                                               <a style="" href="#">2- BeReady! React NodeJs with MongoDB database New batch is starting Soon  </a>                                                                               <a style="" href="#">3- State Of the Art Technology Cloud Computing using Kubernaties Starting  </a>                                                                               <a style="" href="#">4- Optimum Tech Offer Free Online Tutorial Classes of Digital Marketing Due to LockDown(Covid-19) </a></pre>

		                  
		                  </li>
		                  <!-- <li style="float: left; margin-left: 200px; background-color: black;"><a href="#">Seminaar on SEO at RoyltonSeminaar on SEO at Roylton</a></li>
		                  <li style="float: left; margin-left: 200px; background-color: chartreuse; "><a href="#">Seminaar on SEO at RoyltonSeminaar on SEO at Roylton</a></li> -->
		                  <!-- <li style="float: left;"><a href="#">Free and Paid Intenships Available</a></li>
		                  <li style="float: left;"><a href="#">New Batch3 (PHP) start from 1-05-2020</a></li> -->
		                </ul>
		              </div>
		            </div>
		          </div>

		        </div>
	        </div>
	    </section><!-- end section -->

	      <!-- Section: COURSES -->
	      <section id="prodSec" class="bg-lighter" style="   
	      padding-top: 55px;">
		        <div class="container pb-60">
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
					                    <div class="service-block bg-white">
					                      <div class="thumb"> <img alt="featured project" src="{{  asset($img) }}" class="img-fullwidth">
					                        <h4 class="text-white mt-0 mb-0"><span class="price">Free</span></h4>
					                      </div>
					                      <div class="content text-left flip p-25 pt-0">
					                        <h4 class="line-bottom mb-10">{{ ucfirst($course->title) }}</h4>
					                        <p  style="text-align: justify;">{{ ucfirst($course->detail) }}</p>
					                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
					                          href="" target="_blank">view details</a>
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

		                  	@endif

		                </div>


		            </div>
		            </div>
		          </div>
		        </div>
	      	</section>
			 <!-- Section: team -->
		    @if($members->count()>0)

			    <section>
			        <div class="container">
			          <div class="section-title mb-10">
			            <div class="row">
			              <div class="col-md-12">
			                <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Our <span
			                    class="text-theme-color-2 font-weight-400">Team</span></h2>
			              </div>
			            </div>
			          </div>
			          <div class="section-content">
			            <div class="row multi-row-clearfix">
			            	@foreach($members as $member)
			            		@php $img = 'storage/'.$member->img @endphp
			            		<div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
					                <div class="team maxwidth400" style="margin-right: -7px !important">
					                  	<div class="thumb"><img  class="img-fullwidthnew" src="{{  asset($img) }}" alt=""></div>
						                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
						                    <h4 class="name text-theme-color-2 mt-0">{{ $member->name }} - <small>{{ $member->designation }}</small></h4>
						                    <p class="mb-20">{{ $member->detail }}</p>
						                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
						                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						                    </ul>
						                    <a class="btn btn-theme-colored btn-sm pull-right flip" href="/{{ str_replace(' ','',$member->designation) }}" target="_blank">
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
		     <section id="gallery" class="bg-lighter mt-60 mb-60">
		        <div class="container">
		          <div class="section-title mb-10">
		            <div class="row">
		              <div class="col-md-12">
		                <h2 class="mt-0 text-uppercase text-theme-colored title line-bottom line-height-1">Our<span
		                    class="text-theme-color-2 font-weight-400"> Gllery</span></h2>
		              </div>
		            </div>
		          </div>
		          
		          <div class="section-content">
		            <div class="row">
		              <div class="col-md-12">
		                <!-- Works Filter -->
		                <div class="portfolio-filter font-alt align-center">
		                  <!-- <a href="#select4"  class="active" data-filter=".select4">Album</a>
		                  <span  > -->
		              		@if($photoFilter->count()>0)
		              			@php $i = 1; @endphp
		              			 <a href="#" class="active" data-filter="*"  > All</a>
		              			@foreach($photoFilter as $filter)
		              				@php 
		              					if($filter->category=='photo')
		              					{
		              						$href = '#select1';
		              						$dataFilter = '.select1';
		              					}

		              					else if($filter->category=='campus')
		              					{
		              						$href = '#select2';
		              						$dataFilter = '.select2';
		              					}

		              					else if($filter->category=='student')
		              					{
		              						$href = '#select3';
		              						$dataFilter = '.select3';
		              					}
		              				@endphp
		              				<a href="{{ $href }}" class="" data-filter="{{ $dataFilter }}"  >{{ ucfirst($filter->category) }}</a>
		              				@php $i++; @endphp
		              			@endforeach
		              			
				               
		              		@endif
		                 
		                  </span>
		                </div>
		                <!-- End Works Filter -->

		                <!-- Portfolio Gallery Grid -->
		                <div id="grid" class="gallery-isotope grid-4 gutter clearfix" >
		                	@if($photos->count()>0)
		                		@php $displayClass = ''; $i=1; @endphp
		                		@foreach($photos as $photo)
		                			@php 
		              					if($photo->category=='photo')
		              					{
		              						$filterClass = 'select1';
		              					}

		              					else if($photo->category=='campus')
		              					{
		              						$filterClass = 'select2';
		              					}

		              					else if($photo->category=='student')
		              					{
		              						$filterClass = 'select3';
		              					}
		              					$img = 'storage/'.$photo->img;
		              					if($i==1){ $displayClass = $filterClass; }
		              				@endphp

		              				<div class="gallery-item {{ $filterClass }}" style="display:<?php if($filterClass==$displayClass){ echo "block"; }else{ echo "none"; } ?>;">
					                    <div class="thumb">
					                      <img class="img-fullwidth" src="{{  asset($img) }}" alt="project">
					                      <div class="overlay-shade"></div>
					                      <div class="icons-holder">
					                        <div class="icons-holder-inner">
					                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
					                            <a data-lightbox="image" href="{{  asset($img) }}"><i class="fa fa-plus"></i></a>
					                            <a href="#"><i class="fa fa-link"></i></a>
					                          </div>
					                        </div>
					                      </div>
					                      <a class="hover-link" data-lightbox="image" href="{{  asset($img) }}">View more</a>
					                    </div>
					                </div>
		                		@endforeach
		                	@endif
		                  

		                </div>

		                <!-- End Portfolio Gallery Grid -->
		              </div>
		            </div>
		          </div>
		        </div>
		    </section>

	      	<!-- Section: Why Choose Us -->
		    <section id="event" class="">
		        <div class="container pb-50">
		          <div class="section-content">
		            <div class="row">
		              <div class="col-md-6">
		              	@if($events->count()>0)
		              		<h3 class="text-uppercase line-bottom mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>Upcoming
		                  		<span class="text-theme-color-2">Events</span></h3>	
		                  	@foreach($events as $event)
		                  		@php $img = 'storage/'.$event->img; @endphp
		                  		<article class="post media-post clearfix pb-0 mb-10">
				                  <a href="/BookEvents" target="_blank" class="post-thumb mr-20"><img alt="" src="{{ asset($img) }}"></a>
				                  <div class="post-right">
				                    <h4 class="mt-0 mb-5"><a href="/BookEvents" target="_blank">{{ $event->title }}</a></h4>
				                    <ul class="list-inline font-12 mb-5">
				                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> <!--June 26, 2016 --> {{ date('F',strtotime($event->event_date)) }} {{ date('d',strtotime($event->event_date)) }}, {{ date('Y',strtotime($event->event_date)) }} |</li>
				                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>{{ $event->address }}</li>
				                    </ul>
				                    <p class="mb-0 font-13">{{ $event->detail }}</p>
				                    <a class="text-theme-colored font-13" href="/BookEvents" target="_blank">Read More →</a>
				                  </div>
				                </article>

		                  	@endforeach

		              	@endif
		                
		              </div>
		              <div class="col-md-6">
		                <h3 class="line-bottom mt-0 line-height-1">Why <span class="text-theme-color-2">Choose Us?</span></h3>
		                <p class="mb-10">Optimum-Tech  has played a significant role in the development of web based projects. They have been able to become a central part of the team punctually and develop amazing features that perform under the highest performance and demanded requirements possible</p>
		                <div id="accordion1" class="panel-group accordion">
		                  <div class="panel">
		                    <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse"
		                        href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> Customer Focus</a> </div>
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
		                  <!-- <div class="panel">
		                    <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15"
		                        class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a>
		                    </div>
		                    <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
		                      <div class="panel-content">
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus
		                          provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.
		                          iure poss imusven am aliquam</p>
		                      </div>
		                    </div>
		                  </div> -->
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		     </section>	


	       <!-- Section: blog -->
	      
       		<section id="blog" class="bg-lighter">
		        <div class="container" style="padding-top: 0px !important ;">
			          <div class="section-title mb-10">
			            <div class="row">
			                <div class="col-md-6">
				              	@if($news->count()>0)
				                	<h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Latest <span
				                    class="text-theme-color-2 font-weight-400">News</span></h2>
				                @endif
			                </div>

			                <div class="col-md-6">
				              	@if($news->count()>0)
				                	<h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Few <span
				                    class="text-theme-color-2 font-weight-400">Testimonials</span></h2>
				                @endif
			               </div>
			            </div>
			          </div>

			          <div class="section-content" style="height: 442px !important;">
			            <div class="row">
			              <!-- <div class="col-md-4"></div> -->
			              <div class="col-md-6">
			              	@if($news->count()>0)
				                <div class="autoplay3" >
				                	@foreach($news as $row)
				                		@php $img = 'storage/'.$row->img @endphp
				                		<div class="item" data-wow-duration="1s" data-wow-delay="0.3s">
						                    <article class="post clearfix mb-sm-30">
						                      <div class="entry-header">
						                        <div class="post-thumb thumb">
						                          <a href="/LatestNewsDetail" target="_blank"> <img src="{{  asset($img) }}" alt="" class="img-responsive img-fullwidth"></a>
						                        </div>
						                      </div>
						                      <div class="entry-content p-20 pr-10 bg-white">
						                        <div class="entry-meta media mt-0 no-bg no-border">
						                          <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
						                            <ul>
						                              <li class="font-16 text-white font-weight-600 border-bottom">{{ date('d',strtotime($row->news_date)) }}</li>
						                              <li class="font-12 text-white text-uppercase">{{ date('M',strtotime($row->news_date)) }}</li>
						                            </ul>
						                          </div>
						                          <div class="media-body pl-15">
						                            <div class="event-content pull-left flip">
						                              <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">{{ ucfirst($row->testimonial_subtitle) }}</a>
						                              </h4>
						                              <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
						                                  class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
						                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
						                                  class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> -->
						                            </div>
						                          </div>
						                        </div>
						                        <p class="mt-10">{{ ucfirst($row->detail) }}</p>
						                        <a href="/LatestNewsDetail" target="_blank" class="btn-read-more">Read more</a>
						                        <div class="clearfix"></div>
						                      </div>
						                    </article>
						                  </div>
				                	@endforeach
				                  
				                </div>
			                @endif
			              </div>
			              <div class="col-md-6">
			                <div class="container">
			                  <div class="row">
			                    <div class="col-sm-6">
			                        @if($testimonials->count()>0)

			                      		<h3><strong>Testimonial</strong></h3>
					                     <div class="seprator"></div>
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
	       
	    @if($clients->count()>0)

	    	<section class="" style="z-index: 12;">
		        <div class="container pt-10 pb-0">
		          <div class="row">
		            <div class="col-md-12">
		              <h3 class="line-bottom mt-0 line-height-1">Our<span class="text-theme-color-2">Clients</span></h3>
		              </div>
		            </div>
		          </div>
		        </div>
		    </section>

		    <section class="clients bg-theme-color-2" style="height: 170px !important;">
		      <div class="container pt-10 pb-0">
		        <div class="row">
		          <div class="col-md-12">
		            <!-- Section: Clients -->
		            <div class="autoplay2 clients-logo transparent text-center ">
		            	@foreach($clients as $client)
		            		@php $img = 'storage/'.$client->img;  @endphp
		            		<div class="item"  ><figure > 
				                <img src="{{ asset($img) }}" alt="Trulli" data-toggle="tooltip" data-placement="right" title="KK Security"  >
				                <figcaption style="color: aliceblue;margin-left: -80px;" data-toggle="tooltip" data-placement="top" title="Tooltip on top" >{{ ucwords($client->name) }}</figcaption>
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