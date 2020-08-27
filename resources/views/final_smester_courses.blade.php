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
              <h2 class="title text-white">Final Smester Courses</h3>
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

    <!-- Section: Upcoming Events -->
    <section id="upcoming-events" class="divider parallax layer-overlay overlay-white-8" data-bg-img="{{ asset('storage/images/bg/bg1.jpg') }}">
      <div class="container pb-50 pt-80">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="schedule-box maxwidth500 bg-light mt-60 mb-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ asset('storage/images/Courses/oUod9Tl0MJ.png') }}">
                  <div class="overlay">
                    <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                  </div>
                </div>
                <div class="schedule-details clearfix p-15 pt-10">
                  <h5 class="font-16 title">ReactJs</h5>
                  <ul class="list-inline font-11 mb-20">
                    <li><i class="fa fa-calendar mr-5"></i> JUN 30/2020</li>
                    <li><i class="fa fa-map-marker mr-5"></i> 25-a Batala Colony.</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.</p>
                  <!-- <div class="mt-10">
                   <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="#">Register</a>
                   <a href="#" class="btn btn-dark btn-sm mt-10">Details</a>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="schedule-box maxwidth500 bg-light mt-60 mb-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ asset('storage/images/Courses/node-js-736399_640 (1) (1).png') }}">
                  <div class="overlay">
                    <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                  </div>
                </div>
                <div class="schedule-details clearfix p-15 pt-10">
                  <h5 class="font-16 title"><a href="#">NodeJs</a></h5>
                  <ul class="list-inline font-11 mb-20">
                    <li><i class="fa fa-calendar mr-5"></i> DEC 31/2016</li>
                    <li><i class="fa fa-map-marker mr-5"></i> 89 Newyork City.</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.</p>
                  <!-- <div class="mt-10">
                   <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="#">Register</a>
                   <a href="#" class="btn btn-dark btn-sm mt-10">Details</a>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="schedule-box maxwidth500 bg-light mt-60 mb-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ asset('storage/images/Courses/flutter-logo-sharing.png') }}">
                  <div class="overlay">
                    <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                  </div>
                </div>
                <div class="schedule-details clearfix p-15 pt-10">
                  <h5 class="font-16 title"><a href="#">Flutter</a></h5>
                  <ul class="list-inline font-11 mb-20">
                    <li><i class="fa fa-calendar mr-5"></i> DEC 31/2016</li>
                    <li><i class="fa fa-map-marker mr-5"></i> 89 Newyork City.</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.</p>
                  <!-- <div class="mt-10">
                   <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="#">Register</a>
                   <a href="#" class="btn btn-dark btn-sm mt-10">Details</a>
                  </div> -->
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
    
  <!-- Divider: Funfact -->
  <section style="height: 40% !important;"  class="divider parallax  "  data-parallax-ratio="0.7">
    
    <div class="container" >
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-12">
        
          <a href="" target="_blank" > <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Book Final Smester Course</button></a>
        </div>
      
      </div>
<br/>

      
      <div class="row">
        <!-- <h3 class="line-bottom mt-0 mb-50 ml-15">Book PHP Course</h3>
        <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button> -->
        <div class="col-xs-3 col-sm-6 col-md-3">
          <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
            <div class="media-body">
              <h5 class="mt-0">Our Office Location</h5>
              <p>25-a, batala colony Fsd</p>
            </div>
          </div>
        </div>
        <div class="col-xs-3 col-sm-6 col-md-3">
         
          <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
              <h5 class="mt-0"> <a href="tel:+6494461709">Contact Number</a></h5>
              <p> <a href="tel:+92 313 6650965">+92 313 6650965</a></p>
            </div>
          </div></a>
        </div>
        <div class="col-xs-3 col-sm-6 col-md-3">
          <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i style="font-size: 34px;" class="pe-7s-mail text-theme-colored"></i></a>
            <div class="media-body">
              <h5 class="mt-0"><a href="mailto:info@optimumtech.com">Email Address</a></h5>
              <p><a href="mailto:info@optimumtech.com">info@optimumtech.com</a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-3 col-sm-6 col-md-3">
          <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
            <div class="media-body">
              <a href="skype:usman_gcuf?call" >   <h5 class="mt-0">Make a Video Call</h5></a>
              <a href="skype:usman_gcuf?call" >  <p>OptimumSkype</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->