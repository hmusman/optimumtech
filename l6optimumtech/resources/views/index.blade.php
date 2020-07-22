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
		    <div id="sync1" class="owl-carousel owl-theme">
		      <div class="item">
		        <!-- <h1>1</h1> -->
		        <img src="{{  asset('storage/images/bg/bgnew1.png') }}" alt="">
		      </div>
		      <div class="item">
		        <img src="{{  asset('storage/images/bg/bgnew2.png') }}" alt="">
		      </div>
		      <div class="item">
		        <img src="{{  asset('storage/images/bg/bgnew3.png') }}" alt="">
		      </div>
		    </div>
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
		              <div class="col-md-4">
		                <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Free <span
		                    class="text-theme-color-2 font-weight-400">COURSES</span></h2>
		              </div>
		              <div class="col-md-8">
		                <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Premium <span
		                    class="text-theme-color-2 font-weight-400">Services</span></h2>
		              </div>
		            </div>
		          </div>
		          <div class="section-content">
		            <div class="row">

		              <div class="col-md-3">
		                <div class="autoplay" data-dots="true">
		                  <div class="item ">
		                    <div class="service-block bg-white">
		                      <div class="thumb"> <img alt="featured project" src="{{  asset('storage/images/project/4.jpg') }}" class="img-fullwidth">
		                        <h4 class="text-white mt-0 mb-0"><span class="price">Free</span></h4>
		                      </div>
		                      <div class="content text-left flip p-25 pt-0">
		                        <h4 class="line-bottom mb-10">Php Developer</h4>
		                        <p  style="text-align: justify;">A PHP developer is a professional who develops applications, programs, and websites, using the dynamic scripting language called PHP.Sometimes, PHP developers are referred to “software developer”.</p>
		                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
		                          href="/FreeCourses" target="_blank">view details</a>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="item">
		                    <div class="service-block mb-md-30 bg-white">
		                      <div class="thumb"> <img alt="featured project" src="{{  asset('storage/images/project/5.jpg') }}"
		                          class="img-responsive img-fullwidth">
		                        <h4 class="text-white mt-0 mb-0"><span class="price">Free</span></h4>
		                      </div>
		                      <div class="content text-left flip p-25 pt-0">
		                        <h4 class="line-bottom mb-10">Java Script Developer</h4>
		                        <p style="text-align: justify;"> The importance of JavaScript as a web technology can be determined from the fact that it is currently used by 94.5% of all websites.As a client-side Programming language, JavaScript helps custom client-side scripts.</p>
		                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
		                        href="/FreeCourses" target="_blank">view details</a>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="item">
		                    <div class="service-block mb-md-30 bg-white">
		                      <div class="thumb"> <img alt="featured project" src="{{  asset('storage/images/project/6.jpg') }}"
		                          class="img-responsive img-fullwidth">
		                        <h4 class="text-white mt-0 mb-0"><span class="price">Free</span></h4>
		                      </div>
		                      <div class="content text-left flip p-25 pt-0">
		                        <h4 class="line-bottom mb-10">Node.Js Developer</h4>
		                        <p style="text-align: justify;">Node. js has been regarded as a full-stack JavaScript for serving both the client and the server-side applications. Therefore, the advantage is that you don't have to hire separate developers for backend as well as the front-end development.</p>
		                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
		                        href="/FreeCourses" target="_blank">view details</a>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="item">
		                    <div class="service-block mb-md-30 bg-white">
		                      <div class="thumb"> <img alt="featured project" src="{{  asset('storage/images/project/7.jpg') }}"
		                          class="img-responsive img-fullwidth">
		                        <h4 class="text-white mt-0 mb-0"><span class="price">Free</span></h4>
		                      </div>
		                      <div class="content text-left flip p-25 pt-0">
		                        <h4 class="line-bottom mb-10">Html Css Training</h4>
		                        <p style="text-align: justify;">HTML,CSS plays a key role in web pages: It tells browsers how to display and Design the contents of a page, using special instructions called tags that tell a browser when to start a paragraph, italicize a word, or display a picture.</p>
		                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
		                        href="/FreeCourses" target="_blank">view details</a>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="item">
		                    <div class="service-block mb-md-30 bg-white">
		                      <div class="thumb"> <img alt="featured project" src="{{  asset('storage/images/project/8.jpg') }}"
		                          class="img-responsive img-fullwidth">
		                        <h4 class="text-white mt-0 mb-0"><span class="price">Free</span></h4>
		                      </div>
		                      <div class="content text-left flip p-25 pt-0">
		                        <h4 class="line-bottom mb-10">Photoshop</h4>
		                        <p style="text-align: justify;">Adobe Photoshop is a critical tool for designers, web developers, graphic artists, photographers, and creative professionals. It is widely used for image editing, retouching, creating image compositions, website mockups,and affects.</p>
		                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
		                        href="/FreeCourses" target="_blank">view details</a>
		                      </div>
		                    </div>
		                  </div>
		                </div>
		              </div>
		              <div class="col-md-9" >
		                <div class="row ">
		                  	<div  class="col-lg-4 col-md-4 col-sm-4" >
			                    <div class="card effect__hover" style="min-height: 243px !important;">
			                      <div class="card__front border-3px bg-lighter">
			                          <div class="card__text">
			                            <div class="display-table-parent">
			                              <div class="display-table">
			                                <div class="display-table-cell">
			                                  <div class="icon-box mb-0">
			                                    <a href="#" class="icon mb-0">
			                                      <i class="text-theme-colored pe-7s-phone font-72" style="color: #087b92 !important;"></i>
			                                    </a>
			                                    <h3  class="icon-box-title text-theme-colored">Online Learning</h3>
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
			                                  <h3 id="specialhed" class="text-theme-color-2">Online Learning</h3>
			                                  <p id="specialp" class="text-gray-lightgray">
			                                    It gives you more flexibility. ...
			                                 
			                    
			                                    Self-discipline and responsibility. ...
			                                    More choice of course topics.</p>
			                                  <a href="/OnlineLearning" class="btn btn-default mt-10"> Read More </a>
			                                </div>
			                              </div>
			                          </div>
			                        </div>
			                      </div>
			                    </div>
		                  	</div>

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

		                </div>


		                <br/>

		                <div class="row" style="height: 50%;">
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

		                  	<div  class="col-lg-4 col-md-4 col-sm-4"  >
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
			                                  <a href="/DesigningAndPrint" class="btn btn-default mt-10"> Read More </a>
			                                </div>
			                              </div>
			                          </div>
			                        </div>
			                      </div>
			                    </div>
		                  	</div>

		                  	<div  class="col-lg-4 col-md-4 col-sm-4"  >
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
			                                  <a href="/Tourism" class="btn btn-default mt-10"> Read More </a>
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
			 <!-- Section: team -->
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
		              <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
		                <div class="team maxwidth400" style="margin-right: -7px !important">
		                  <div class="thumb"><img  class="img-fullwidthnew" src="{{  asset('storage/images/ahsan.jpg') }}" alt=""></div>
		                  <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
		                    <h4 class="name text-theme-color-2 mt-0">Ahsan Raza - <small>Co Founder</small></h4>
		                    <p class="mb-20">OPTIMUM-TECH enjoying a very positive reputation across the town by the grace of Allah Almighty.
		                     </p>
		                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
		                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		                    </ul>
		                    <a class="btn btn-theme-colored btn-sm pull-right flip" href="/CoFounder" target="_blank">
		                      Detail</a>
		                  </div>
		                </div>
		              </div>
		              <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
		                <div class="team maxwidth400" style="margin-right: -7px !important">
		                  <div class="thumb"><img class="img-fullwidthnew" src="{{  asset('storage/images/campus.jpg') }}" alt=""></div>
		                  <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
		                    <h4 class="name mt-0 text-theme-color-2">Ali - <small>Campus Manager</small></h4>
		                    <p class="mb-20"> Our main focus is to make our Students enough capable to support their family financially.</p>
		                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
		                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		                    </ul>
		                    <a class="btn btn-theme-colored btn-sm pull-right flip" href="/CampusManager" target="_blank" >
		                      Detail</a>
		                  </div>
		                </div>
		              </div>
		              <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
		                <div class="team maxwidth400" style="margin-right: -7px !important">
		                  <div class="thumb"><img  class="img-fullwidthnew" src="{{  asset('storage/images/tour.jpg') }}" alt=""></div>
		                  <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
		                    <h4 class="name mt-0 text-theme-color-2">Ali - <small>Head Tourism</small></h4>
		                    <p class="mb-20">Tourism is travel for pleasure to boost energy of our staff and students to become mentally Strong. </p>
		                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
		                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		                    </ul>
		                    <a class="btn btn-theme-colored btn-sm pull-right flip" href="/HeadTourism" target="_blank" >
		                      Detail</a>
		                  </div>
		                </div>
		              </div>

		            </div>
		          </div>
		        </div>
		    </section>
	     
	      	<!-- Section: Gallery -->
		     <section id="gallery" class="bg-lighter">
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
		                  <a href="#select4"  class="active" data-filter=".select4">Album</a>
		                  <span  >
		              

		                    
		                  <a href="#select1" class="" data-filter=".select1"  >Photos</a>
		                  <a href="#select2" class="" data-filter=".select2"   >Campus</a>
		                  <a href="#select3" class="" data-filter=".select3"  > Students</a>
		                   <a href="#" class="" data-filter="*"  > All</a>
		                  </span>
		                </div>
		                <!-- End Works Filter -->

		                <!-- Portfolio Gallery Grid -->
		                <div id="grid" class="gallery-isotope grid-4 gutter clearfix" >

		                  <!-- Portfolio Item Start -->
		                  <div class="gallery-item select1 select4">
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{  asset('storage/images/gallery/1.png') }}" alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/1.png') }}"><i class="fa fa-plus"></i></a>
		                            <a  href="#select2" class="" data-filter=".select2"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		                  <!-- Portfolio Item Start -->
		                  <div class="gallery-item select1 " style="display: none;">
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{  asset('storage/images/gallery/3.png') }}" alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/2.png') }}"><i class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{  asset('storage/images/gallery/2.png') }}">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		                  <!-- Portfolio Item Start -->
		                  <div class="gallery-item select2 select4" >
		                    <div class="thumb">
		                      <img class="img-fullwidth"
		                        src="{{  asset('storage/images/gallery/18121754_221522995000944_5339271467144642711_o_001.png') }}" alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/3.png') }}"><i class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{  asset('storage/images/gallery/3.png') }}">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		                  <!-- Portfolio Item Start -->
		                  <div class="gallery-item select3 select4" >
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{ asset('storage/images/gallery/74569040_730588634094375_7909991017925836800_n.png') }}"
		                        alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/4.png') }}"><i class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{ asset('storage/images/gallery/4.png') }}">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		                  <!-- Portfolio Item Start -->
		                  <div class="gallery-item select1" style="display: none;">
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{  asset('storage/images/gallery/4.png') }}" alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/2.png') }}"><i class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{  asset('storage/images/gallery/2.png') }}">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		                 <!-- Portfolio Item Start -->
		                  <div class="gallery-item select3" style="display: none;">
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{  asset('storage/images/gallery/89781155_824834268003144_8111982161625612288_n.png') }} "
		                        alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/4.png') }} "><i class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{  asset('storage/images/gallery/4.png') }} ">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		                  <!-- Portfolio Item Start -->
		                  <div class="gallery-item select2" style="display: none;">
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{  asset('storage/images/gallery/74718064_728296787656893_8236631041792540672_n.png') }} "
		                        alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image"
		                              href="{{  asset('storage/images/gallery/3.png') }} "><i
		                                class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{  asset('storage/images/gallery/3.jpng') }}">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		           
		                  <div class="gallery-item select3" style="display: none;">
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{  asset('storage/images/gallery/75464337_730588604094378_2234728066007957504_n.png') }} "
		                        alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/2.png') }}"><i class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{  asset('storage/images/gallery/2.png') }}">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		                  <!-- Portfolio Item Start -->
		                  <div class="gallery-item select1" style="display: none;">
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{  asset('storage/images/gallery/18077402_221522838334293_3325708510959900204_o.png') }}  "
		                        alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/4.png') }}"><i class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{  asset('storage/images/gallery/4.png') }}">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		                  <!-- Portfolio Item Start -->
		                  <div class="gallery-item select2" style="display: none;">
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{  asset('storage/images/gallery/75576422_728296730990232_5716211028384022528_n.png') }} "
		                        alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/1.png') }}"><i class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{  asset('storage/images/gallery/1.png') }}">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		                  <!-- Portfolio Item Start -->
		                  <div class="gallery-item select1" style="display: none;">
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{  asset('storage/images/gallery/91282881_839250586561512_6176455218402689024_n.png') }} "
		                        alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/1.png') }}"><i class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{  asset('storage/images/gallery/1.png') }}">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

		                  <!-- Portfolio Item Start -->
		                  <div class="gallery-item select3" style="display: none;">
		                    <div class="thumb">
		                      <img class="img-fullwidth" src="{{  asset('storage/images/gallery/89346801_824834311336473_7340721312186236928_n.png') }}"
		                        alt="project">
		                      <div class="overlay-shade"></div>
		                      <div class="icons-holder">
		                        <div class="icons-holder-inner">
		                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
		                            <a data-lightbox="image" href="{{  asset('storage/images/gallery/1.png') }}"><i class="fa fa-plus"></i></a>
		                            <a href="#"><i class="fa fa-link"></i></a>
		                          </div>
		                        </div>
		                      </div>
		                      <a class="hover-link" data-lightbox="image" href="{{  asset('storage/images/gallery/1.png') }}">View more</a>
		                    </div>
		                  </div>
		                  <!-- Portfolio Item End -->

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
		                <h3 class="text-uppercase line-bottom mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>Upcoming
		                  <span class="text-theme-color-2">Events</span></h3>
		                <article class="post media-post clearfix pb-0 mb-10">
		                  <a href="/BookEvents" target="_blank" class="post-thumb mr-20"><img alt="" src="{{ asset('storage/images/gallery/blodd (1).png') }}"></a>
		                  <div class="post-right">
		                    <h4 class="mt-0 mb-5"><a href="/BookEvents" target="_blank">Blood Donation</a></h4>
		                    <ul class="list-inline font-12 mb-5">
		                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
		                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
		                    </ul>
		                    <p class="mb-0 font-13">"Saving One Life Is As If Saving Whole Of Humanity…"</p>
		                    <a class="text-theme-colored font-13" href="/BookEvents" target="_blank">Read More →</a>
		                  </div>
		                </article>
		                <article class="post media-post clearfix pb-0 mb-10">
		                  <a  href="/BookEvents" target="_blank" class="post-thumb mr-20"><img alt="" src="{{ asset('storage/images/gallery/wordpress-bg-medblue-square.png') }} "></a>
		                  <div class="post-right">
		                    <h4 class="mt-0 mb-5"><a  href="BookEvents" target="_blank">3 Day's Training Session on Wordpress</a></h4>
		                    <ul class="list-inline font-12 mb-5">
		                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
		                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
		                    </ul>
		                    <p class="mb-0 font-13">Optimum Provide For all of its Current or Past Students A Workshop About Wordpress at Nusrat Auditorium.</p>
		                    <a class="text-theme-colored font-13"  href="/BookEvents" target="_blank">Read More →</a>
		                  </div>
		                </article>
		                <article class="post media-post clearfix pb-0 mb-10">
		                  <a  href="/BookEvents" target="_blank" class="post-thumb mr-20"><img alt="" src="{{ asset('storage/images/gallery/page_1.png') }}"></a>
		                  <div class="post-right">
		                    <h4 class="mt-0 mb-5"><a href="" target="_blank">Digital Marketing Master Class</a></h4>
		                    <ul class="list-inline font-12 mb-5">
		                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
		                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
		                    </ul>
		                    <p class="mb-0 font-13">Digital Marketing Master Class Session is going to start this month, Be ready and Cennected.</p>
		                    <a class="text-theme-colored font-13" href="/BookEvents" target="_blank">Read More →</a>
		                  </div>
		                </article>
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
		                <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Latest <span
		                    class="text-theme-color-2 font-weight-400">News</span></h2>
		              </div>
		              <div class="col-md-6">
		                <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Few <span
		                    class="text-theme-color-2 font-weight-400">Testimonials</span></h2>
		              </div>
		            </div>
		          </div>

		          <div class="section-content" style="height: 442px !important;">
		            <div class="row">
		              <!-- <div class="col-md-4"></div> -->
		              <div class="col-md-6">
		                <div class="autoplay3" >
		                  <div class="item" data-wow-duration="1s" data-wow-delay="0.3s">
		                    <article class="post clearfix mb-sm-30">
		                      <div class="entry-header">
		                        <div class="post-thumb thumb">
		                          <a href="/LatestNewsDetail" target="_blank"> <img src="{{  asset('storage/images/news/79294404_748482028971702_2754632774856998912_n.png') }}" alt="" class="img-responsive img-fullwidth"></a>
		                        </div>
		                      </div>
		                      <div class="entry-content p-20 pr-10 bg-white">
		                        <div class="entry-meta media mt-0 no-bg no-border">
		                          <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
		                            <ul>
		                              <li class="font-16 text-white font-weight-600 border-bottom">28</li>
		                              <li class="font-12 text-white text-uppercase">Feb</li>
		                            </ul>
		                          </div>
		                          <div class="media-body pl-15">
		                            <div class="event-content pull-left flip">
		                              <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a>
		                              </h4>
		                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
		                                  class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
		                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
		                                  class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
		                            </div>
		                          </div>
		                        </div>
		                        <p class="mt-10">Optimum-Tech  Service. Himanshu and the team have always provided us with a prompt, reliable, and top rated service. Not only do they resolve any of our hardware.
		                        </p>
		                        <a href="/LatestNewsDetail" target="_blank" class="btn-read-more">Read more</a>
		                        <div class="clearfix"></div>
		                      </div>
		                    </article>
		                  </div>
		                  <div class="item" data-wow-duration="1s" data-wow-delay="0.4s">
		                    <article class="post clearfix mb-sm-30">
		                      <div class="entry-header">
		                        <div class="post-thumb thumb">
		                          <a href="/LatestNewsDetail" target="_blank"><img src="{{  asset('storage/images/news/20664580_268775906942319_3544987007584739268_n.png') }} " alt="" class="img-responsive img-fullwidth"></a> 
		                        </div>
		                      </div>
		                      <div class="entry-content p-20 pr-10 bg-white">
		                        <div class="entry-meta media mt-0 no-bg no-border">
		                          <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
		                            <ul>
		                              <li class="font-16 text-white font-weight-600 border-bottom">28</li>
		                              <li class="font-12 text-white text-uppercase">Feb</li>
		                            </ul>
		                          </div>
		                          <div class="media-body pl-15">
		                            <div class="event-content pull-left flip">
		                              <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a>
		                              </h4>
		                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
		                                  class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
		                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
		                                  class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
		                            </div>
		                          </div>
		                        </div>
		                        <p class="mt-10">Optimum tech has played a significant role in the development of web based projects. They have been able to become a central part of
		                           the team punctually.
		                        </p>
		                        <a href="/LatestNewsDetail" target="_blank" class="btn-read-more">Read more</a>
		                        <div class="clearfix"></div>
		                      </div>
		                    </article>
		                  </div>
		                  <div class="item" data-wow-duration="1s" data-wow-delay="0.4s">
		                    <article class="post clearfix">
		                      <div class="entry-header">
		                        <div class="post-thumb thumb">
		                          <a href="/LatestNewsDetail" target="_blank"> <img src="{{  asset('storage/images/news/36521293_410924319394143_6739456831690637312_n.png') }}" alt="" class="img-responsive img-fullwidth"></a>
		                        </div>
		                      </div>
		                      <div class="entry-content p-20 pr-10 bg-white">
		                        <div class="entry-meta media mt-0 no-bg no-border">
		                          <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
		                            <ul>
		                              <li class="font-16 text-white font-weight-600 border-bottom">28</li>
		                              <li class="font-12 text-white text-uppercase">Feb</li>
		                            </ul>
		                          </div>
		                          <div class="media-body pl-15">
		                            <div class="event-content pull-left flip">
		                              <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a>
		                              </h4>
		                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
		                                  class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
		                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
		                                  class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
		                            </div>
		                          </div>
		                        </div>
		                        <p class="mt-10"> This develop amazing features that perform under the highest performance and demanded requirements possible part of
		                          the team punctually.</p>
		                        <a href="/LatestNewsDetail" target="_blank" class="btn-read-more">Read more</a>
		                        <div class="clearfix"></div>
		                      </div>
		                    </article>
		                  </div>
		                  <div class="item" data-wow-duration="1s" data-wow-delay="0.3s">
		                    <article class="post clearfix mb-sm-30">
		                      <div class="entry-header">
		                        <div class="post-thumb thumb">
		                          <a href="/LatestNewsDetail" target="_blank"><img src="{{  asset('storage/images/news/72692185_709402352879670_7138306182199902208_n.png') }} " alt="" class="img-responsive img-fullwidth"></a>
		                        </div>
		                      </div>
		                      <div class="entry-content p-20 pr-10 bg-white">
		                        <div class="entry-meta media mt-0 no-bg no-border">
		                          <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
		                            <ul>
		                              <li class="font-16 text-white font-weight-600 border-bottom">28</li>
		                              <li class="font-12 text-white text-uppercase">Feb</li>
		                            </ul>
		                          </div>
		                          <div class="media-body pl-15">
		                            <div class="event-content pull-left flip">
		                              <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a>
		                              </h4>
		                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
		                                  class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
		                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
		                                  class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
		                            </div>
		                          </div>
		                        </div>
		                        <p class="mt-10">Optimum-Tech  has played a significant role in the development of web projects. They have been able to become a central part of the team punctually.</p>
		                        <a href="/LatestNewsDetail" target="_blank" class="btn-read-more">Read more</a>
		                        <div class="clearfix"></div>
		                      </div>
		                    </article>
		                  </div>
		                </div>
		              </div>
		              <div class="col-md-6">
		                <div class="container">
		                  <div class="row">
		                    <div class="col-sm-6">
		                      <h3><strong>Testimonial</strong></h3>
		                      <div class="seprator"></div>
		                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                        <!-- Wrapper for slides -->
		                        <div class="carousel-inner">
		                          <div class="item active">
		                            <div class="row" style="padding: 20px">
		                              <button style="border: none;"><i class="fa fa-quote-left testimonial_fa"
		                                  aria-hidden="true"></i></button>
		                              <p class="testimonial_para">Optimum-Tech  Service. Himanshu and the team have always provided us with a prompt, reliable, and top rated service. Not only do they resolve any of our hardware or software
		                                 technical issues quickly and efficiently but do so with a very personable nature</p><br>
		                              <div class="row">
		                                <div class="col-sm-2">
		                                  <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg"
		                                    class="img-responsive" style="width: 80px">
		                                </div>
		                                <div class="col-sm-10">
		                                  <h4><strong>Michael A. Monroeville Dodge</strong></h4>
		                                  <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
		                                    <span>Officeal All Star Cafe</span>
		                                  </p>
		                                </div>
		                              </div>
		                            </div>
		                          </div>
		                          <div class="item">
		                            <div class="row" style="padding: 20px">
		                              <button style="border: none;"><i class="fa fa-quote-left testimonial_fa"
		                                  aria-hidden="true"></i></button>
		                              <p class="testimonial_para">Trustworthy with their advice.  Its been 3 years since we started getting our SEO and marketing done with ItsGuru and I must say that they give you honest advice on where to and where not to spend your marketing budget on which is very helpful and cost efficient</p><br>
		                              <div class="row">
		                                <div class="col-sm-2">
		                                  <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/kiara.jpg"
		                                    class="img-responsive" style="width: 80px">
		                                </div>
		                                <div class="col-sm-10">
		                                  <h4><strong>Jim Momin, Jasmine Trading</strong></h4>
		                                  <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
		                                    <span>Officeal All Star Cafe</span>
		                                  </p>
		                                </div>
		                              </div>
		                            </div>
		                          </div>

		                          <div class="item">
		                            <div class="row" style="padding: 20px">
		                              <button style="border: none;"><i class="fa fa-quote-left testimonial_fa"
		                                  aria-hidden="true"></i></button>
		                              <p class="testimonial_para">Optimum-Tech  has played a significant role in the development of web based projects. They have been able to become a central part of the team punctually and develop amazing features that perform under the highest performance and demanded requirements possible.</p><br>
		                              <div class="row">
		                                <div class="col-sm-2">
		                                  <img src="{{ asset('storage/images/newgh.jpg') }}"
		                                    class="img-responsive" style="width: 80px">
		                                </div>
		                                <div class="col-sm-10">
		                                  <h4><strong>Muhammad Usman Aftab CEO DevBeta</strong></h4>
		                                  <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
		                                    <span>Officeal All Star Cafe</span>
		                                  </p>
		                                </div>
		                              </div>
		                            </div>
		                          </div>
		                        </div>
		                      </div>
		                      <div class="controls testimonial_control pull-right">
		                        <a class="left fa fa-chevron-left btn btn-default testimonial_btn"
		                          href="#carousel-example-generic" data-slide="prev"></a>

		                        <a class="right fa fa-chevron-right btn btn-default testimonial_btn"
		                          href="#carousel-example-generic" data-slide="next"></a>
		                      </div>
		                    </div>
		                  </div>
		                </div>
		              </div>


		            </div>
		          </div>
		        </div>
	       </section>

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
	              <div class="item"  ><figure > 
	                <img src="{{ asset('storage/images/clients/w1.jpg') }}" alt="Trulli" data-toggle="tooltip" data-placement="right" title="KK Security"  >
	                <figcaption style="color: aliceblue;margin-left: -80px;" data-toggle="tooltip" data-placement="top" title="Tooltip on top" >KK Security Managment</figcaption>
	              </figure>
	              </div>
	              <div class="item"><figure>
	                <img src="{{ asset('storage/images/clients/w2.jpg') }}" alt="Trulli" data-toggle="tooltip" data-placement="right" title="ACC Care"  >
	                <figcaption style="color: aliceblue;margin-left: -80px;">ACC Care</figcaption>
	              </figure>
	              </div>
	              <div class="item"><figure>
	                <img src="{{ asset('storage/images/clients/w3.jpg') }}" alt="Trulli"  data-toggle="tooltip" data-placement="right" title="Ambulatory Center" >
	                <figcaption style="color: aliceblue;margin-left: -80px;">Ambulatory Center</figcaption>
	              </figure>
	              </div>

	              <div class="item" ><a href="http://invincibleenergy.com.au" target="_blank" > <figure> 
	                <img src="{{ asset('storage/images/clients/w4.jpg') }}" alt="Trulli" data-toggle="tooltip" data-placement="right" title="Invincible"  >
	                <figcaption style="color: aliceblue;margin-left: -80px;">Invincible Solar Energy</figcaption>
	              </figure></a>
	              </div>
	              <div class="item"><figure>
	                <img src="{{ asset('storage/images/clients/w5.png') }}" alt="Trulli" data-toggle="tooltip" data-placement="right" title="Themeforest"  >
	                <figcaption style="color: aliceblue;margin-left: -80px;">Themeforest</figcaption>
	              </figure>
	              </div>
	              <!-- <div class="item"><figure>
	                <img src="images/clients/w6.jpg" alt="Trulli" >
	                <figcaption style="color: aliceblue;">ACC Care</figcaption>
	              </figure>
	              </div> -->
	              <!-- <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div> -->
	              <!-- <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div> -->
	              <!-- <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
	              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div> -->
	              
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