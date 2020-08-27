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
	                  <li><a href="#">Home</a></li>
	                  <li><a href="#">Pages</a></li>
	                  <li class="active text-gray-silver">Page Title</li>
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
	              <div class="row mb-15">
	                <div class="col-sm-6 col-md-4">
	                  <div class="thumb"> <img alt="featured project" src="{{ asset('storage/images/project/lg1.jpg') }}" class="img-fullwidth"></div>
	                </div>
	                <div class="col-sm-6 col-md-8">
	                  <h4 class="line-bottom mt-0 mt-sm-20">PHP/Ajax Course</h4>
	                  <ul class="review_text list-inline">
	                    <li><h4 class="mt-0"><span class="text-theme-color-2">Price :</span> $125</h4></li>
	                    <li>
	                      <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
	                    </li>
	                  </ul>
	                  <p>PHP is a popular general-purpose scripting language that is especially suited to web development.</p>
	                  <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="Courses/PHP">read more</a> &nbsp; <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="Courses/PHP">Book Course</a>
	                </div>
	              </div>
	              <hr>
	              <div class="row mb-15">
	                <div class="col-sm-6 col-md-4">
	                  <div class="thumb"> <img alt="featured project" src="{{ asset('storage/images/project/lg2.jpg') }}" class="img-fullwidth"></div>
	                </div>
	                <div class="col-sm-6 col-md-8">
	                  <h4 class="line-bottom mt-0 mt-sm-20">Javascript/React</h4>
	                  <ul class="review_text list-inline">
	                    <li><h4 class="mt-0"><span class="text-theme-color-2">Price :</span> $125</h4></li>
	                    <li>
	                      <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
	                    </li>
	                  </ul>
	                  <p>JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. </p>
	                  <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="Courses/Javascript">read more</a> &nbsp; <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="Courses/Javascript">Book Course</a>
	                </div>
	              </div>
	              <hr>
	              <div class="row mb-15">
	                <div class="col-sm-6 col-md-4">
	                  <div class="thumb"> <img alt="featured project" src="{{ asset('storage/images/project/lg3.jpg') }}" class="img-fullwidth"></div>
	                </div>
	                <div class="col-sm-6 col-md-8">
	                  <h4 class="line-bottom mt-0 mt-sm-20">Modern Technologies NodeJs</h4>
	                  <ul class="review_text list-inline">
	                    <li><h4 class="mt-0"><span class="text-theme-color-2">Price :</span> $125</h4></li>
	                    <li>
	                      <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
	                    </li>
	                  </ul>
	                  <p>Node.js is an open-source, cross-platform, JavaScript runtime environment that executes JavaScript code outside of a web browser.</p>
	                  <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="Courses/NodeJs">read more</a> &nbsp; <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="Courses/NodeJs">Book Course</a>
	                </div>
	              </div>
	              <hr>
	              <div class="row mb-15">
	                <div class="col-sm-6 col-md-4">
	                  <div class="thumb"> <img alt="featured project" src="{{ asset('storage/images/project/lg4.jpg') }}" class="img-fullwidth"></div>
	                </div>
	                <div class="col-sm-6 col-md-8">
	                  <h4 class="line-bottom mt-0 mt-sm-20">Computer Technologies</h4>
	                  <ul class="review_text list-inline">
	                    <li><h4 class="mt-0"><span class="text-theme-color-2">Price :</span> $125</h4></li>
	                    <li>
	                      <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
	                    </li>
	                  </ul>
	                  <p>Adobe Photoshop is a raster graphics editor developed and published by Adobe Inc. for Windows and macOS.</p>
	                  <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="Courses/ComputerTechnologies">read more</a> &nbsp; <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="/Courses/ComputerTechnologies">Book Course</a>
	                </div>
	              </div>
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
	                <div class="widget">
	                  <h5 class="widget-title line-bottom">Course <span class="text-theme-color-2">Categories</span></h5>
	                  <div class="categories">
	                    <ul class="list list-border angle-double-right">
	                      <li><a href="/Courses/FinalSmesterCourses">Final Smester Courses<span></span></a></li>
	                      <li><a href="/Courses/TechnicalCourses">Technical Courses<span></span></a></li>
	                      <li><a href="/Courses/DesigningCourses">Designing Courses<span></span></a></li>
	                      <li><a href="/Courses/ShortCourses">Short Courses<span></span></a></li>
	                      <!-- <li><a href="#">Flutter<span></span></a></li> -->
	                    </ul>
	                  </div>
	                </div>
	                <div class="widget">
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
	                </div>
	                <div class="widget">
	                  <h5 class="widget-title line-bottom">Free <span class="text-theme-color-2">Course</span></h5>
	                  <div class="latest-posts">
	                    <article class="post media-post clearfix pb-0 mb-10">
	                      <a class="post-thumb" href="#"><img src="{{ asset('storage/images/services/wordpress.png') }}" alt=""></a>
	                      <div class="post-right">
	                        <h5 class="post-title mt-0"><a href="#">WordPress</a></h5>
	                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
	                      </div>
	                    </article>
	                    <article class="post media-post clearfix pb-0 mb-10">
	                      <a class="post-thumb" href="#"><img src="{{ asset('storage/images/services/microsoft_office_logo_press_image_1200x800-100751542-large.png') }}" alt=""></a>
	                      <div class="post-right">
	                        <h5 class="post-title mt-0"><a href="#">Microsoft Office</a></h5>
	                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
	                      </div>
	                    </article>
	                    <article class="post media-post clearfix pb-0 mb-10">
	                      <a class="post-thumb" href="#"><img src="{{ asset('storage/images/services/1200px-Adobe_Photoshop_CC_icon.svg.png') }}" alt=""></a>
	                      <div class="post-right">
	                        <h5 class="post-title mt-0"><a href="#">Adobe Training</a></h5>
	                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
	                      </div>
	                    </article>
	                  </div>
	                </div>
	              
	              </div>
	            </div>
	          </div>
	          <div class="row">
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
	          </div>
	        </div>
      	</section>
    </div>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->