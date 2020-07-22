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
              <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20 ">
                <h2 class="line-bottom font-20 text-theme-colored text-uppercase mb-10 mt-0">Welcome to Our<span class="text-theme-color-2"> Products</span></h2>
                <!-- <p class="lead font-18"></p> -->
                <p style="text-align: justify;">Optimum Tech is regarded as a development House located at Faisalabad.
                   We are registered and are providing facilities to our valuable customers/students since 2005 and working on our products because we believe in quality. Optimum tech offer's multiple products like  Ecommerce website, Development of Taxi App, Hospital Management system, Hotels Rooms Reservation System, Finance Management System, job portal, Hajj Umrah vouchers Management system, Student information System etc.</p>
                <a class="btn btn-colored btn-theme-colored btn-sm" href="#">View Details</a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                <div class="image-box-thum">
                  <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/download (3).png') }} ">
                </div>
                <div class="image-box-details pt-20 pb-sm-20">
                  <h4 class="title text-uppercase line-bottom mt-0">Ecommerce website development  </h4>
                  <p class="desc mb-10">We build according to the demand of clients’ with an efficient way using customer features.And Deleiver our Best Solutions to Clients According to their Demands.</p>
                  <a href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="ecommerseWebDetail.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                <div class="image-box-thum">
                  <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/download (1).png') }} ">
                </div>
                <div class="image-box-details pt-20 pb-sm-20">
                  <h4 class="title text-uppercase line-bottom mt-0">Development of Taxi App in Pakistan</h4>
                  <p class="desc mb-10">Taxi app development is one such area of specialization that involves drivers and passengers, engaging on the interactive platform of taxi app in Pakistan.</p>
                  <a href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="TaxiApp.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="image-box-thum">
                  <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/download (2).png') }} ">
                </div>
                <div class="image-box-details pt-20 pb-sm-20" >
                  <h4 class="title text-uppercase line-bottom mt-0">Web Based Hospital Management System</h4>
                  <p class="desc mb-10">A (HMS) is a computer or web based system that facilitates managing the functioning of the hospital or any medical set up.Our HMS meets the latest technology.</p>
                  <a id="OptimumProducts" href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="ecommerseWebDetail.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

	<section >
	    <div class="container">
	      <div class="section-content">
	        <div class="row">
	            <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
	                <div class="image-box-thum">
	                  <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/mis.png') }} ">
	                </div>
	                <div class="image-box-details pt-20 pb-sm-20">
	                  <h4 class="title text-uppercase line-bottom mt-0">Management Information System Development  </h4>
	                  <p class="desc mb-10">We believe that our highly customized Management Information System Development in Islamabad work wonder for our clients.</p>
	                  <a href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="MIS.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
	                </div>
	              </div>
	          <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
	            <div class="image-box-thum">
	              <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/hotel.png') }} ">
	            </div>
	            <div class="image-box-details pt-20 pb-sm-20">
	              <h4 class="title text-uppercase line-bottom mt-0">Hotel Rooms Reservation System </h4>
	              <p class="desc mb-10">Determining all the necessities, Optimum Tech Pvt. Ltd gives you Hotel and Restaurant Management Software solution.</p>
	              <a href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="ecommerseWebDetail.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
	            </div>
	          </div>
	          <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
	            <div class="image-box-thum">
	              <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/images (1).png') }} ">
	            </div>
	            <div class="image-box-details pt-20 pb-sm-20">
	              <h4 class="title text-uppercase line-bottom mt-0">Finance Management System </h4>
	              <p class="desc mb-10">Today No business can imagine achieving aspiring growth targets and beating the competition without consistent, high‑functioning business.</p>
	              <a href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="ecommerseWebDetail.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
	            </div>
	          </div>
	          <div class="col-xs-12 col-sm-6 col-md-3">
	            <div class="image-box-thum">
	              <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/download (4).png') }} ">
	            </div>
	            <div class="image-box-details pt-20 pb-sm-20">
	              <h4 class="title text-uppercase line-bottom mt-0">Development of Job Portal in Pakistan </h4>
	              <p class="desc mb-10">We also develop Job portal in Pakistan with innovative and advance features like National Testing Services (NTS).Includes all the features </p>
	              <a id="OptimumProdcts" href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="ecommerseWebDetail.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	</section>

	<section >
        <div class="container">
          <div class="section-content">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                    <div class="image-box-thum">
                      <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/download (5).png') }} ">
                    </div>
                    <div class="image-box-details pt-20 pb-sm-20">
                      <h4 class="title text-uppercase line-bottom mt-0">Property Management System  </h4>
                      <p class="desc mb-10">Management as the core module designed to facilitate comprehensive property management system open source for rentals, 
                          sales, purchase.</p>
                          <a href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="ecommerseWebDetail.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
                    </div>
                  </div>
              <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                <div class="image-box-thum">
                  <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/download (6).png') }} ">
                </div>
                <div class="image-box-details pt-20 pb-sm-20">
                  <h4 class="title text-uppercase line-bottom mt-0">Content Management System </h4>
                  <p class="desc mb-10">helping you control and monitor the content within your CMS product without any advanced technical training or expertise.</p>
                  <a href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="ecommerseWebDetail.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                <div class="image-box-thum">
                  <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/images (2).png') }} ">
                </div>
                <div class="image-box-details pt-20 pb-sm-20">
                  <h4 class="title text-uppercase line-bottom mt-0">Hajj Umrah Vouchers Management System</h4>
                  <p class="desc mb-10">The Vouchers Management System for Hajj and Umrah is a complete web based Umrah Management Software System suitable for the companies</p>
                  <a href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="ecommerseWebDetail.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="image-box-thum">
                  <img class="img-fullwidth" alt="" src="{{ asset('storage/images/products/images.png') }} ">
                </div>
                <div class="image-box-details pt-20 pb-sm-20">
                  <h4 class="title text-uppercase line-bottom mt-0">Student Information System</h4>
                  <p class="desc mb-10">Student Information System  developed by Optimum tech is the leading web-based solution provider for all type of schools and educational institutions.</p>
                  <a id="OptimumProdcts" href="form-quick-contact-style2.html" class="btn btn-xs btn-theme-colored">Ask for demo</a> <a href="ecommerseWebDetail.html" target="_blank" class="btn btn-xs btn-theme-colored">Explore</a>
                </div>
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