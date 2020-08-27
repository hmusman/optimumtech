@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	<section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>
                <h5>Client:</h5>
                <p>Kodesolution Lmd.</p>
              </li>
              <li>
                <h5>Location:</h5>
                <p>#405, Lan Streen, Los Vegas, USA</p>
              </li>
              <li>
                <h5>Category:</h5>
                <p>Web design & development, Graphics design</p>
              </li>
              <li>
                <h5>Start Date:</h5>
                <p>January 26, 2016</p>
              </li>
              <li>
                <h5>End Date:</h5>
                <p>February 10, 2016</p>
              </li>
              <li>
                <h5>Website:</h5>
                <p>kodesolution.com</p>
              </li>
              <li>
                <h5>Share:</h5>
                <div class="styled-icons icon-sm icon-gray icon-circled">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-8">
            <div class="featured-project-carousel">
              <div class="item">
                <iframe src="http://player.vimeo.com/video/24302498?title=0&amp;byline=0&amp;portrait=0" width="360" height="205" allowfullscreen>
                </iframe>
              </div>
              <!-- <div class="item">
                <iframe width="600" height="360"
                src="http://www.youtube.com/embed/oIDqz2BrVec?autoplay=0" allowfullscreen>
                </iframe>
              </div> -->
            </div>
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-md-6">
            <h4 class="mt-0">Designing And Printing</h4>
            <p style="text-align: justify" >Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; interface design; authoring, including standardised code and proprietary software; user experience design; and search engine optimization. Often many individuals will work in teams covering different aspects of the design process, although some designers will cover them all.</p>
          </div>
          <div class="col-md-6">
            <blockquote>
              <p>For over 10 years we are providing premium services as established IT Company of Optimum Tech.</p>
              <footer><cite title="Source Title">Ahsan Raza</cite></footer>
            </blockquote>
          </div>
        </div>
		<div class="row">
		 
			<div class="col-md-12">

			  The field of web design will continue to grow at an alarming rate as the demand for mobile-responsive websites increases, thus the field as a whole provides you with great opportunities for career advancement and job security. ... As you can see, the opportunities and advantages of working as a web designer are great.
			</div>

		</div>
        
      </div>
    </section>




  <section>
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="heading-line-botVertical Timeline Threetom text-center">
              <h3>Designing And Printing</h2>
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

    <section id="cd-timeline3" class="cd-timeline-simple time-line-media cd-container">
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          <img src="{{ asset('storage/images/O6AscYlaCN.png') }}" alt="">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content text-right flip pr-0">
          <h2 class="mt-0">Title of section 1</h2>
          <img src="{{ asset('storage/images/onlineLearning/D9tiJZVQh3.png') }}" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
          <span class="cd-date">Jan 14</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie">
          <img src="{{ asset('js/vertical-timeline/img/cd-icon-movie.svg') }}" alt="Movie">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content pl-0">
          <h2 class="mt-0">Title of section 2</h2>
        
          <img src="{{ asset('storage/images/onlineLearning/ATI3FiCTbG.png') }}" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
          <span class="cd-date">Jan 14</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          <img src="{{ asset('js/vertical-timeline/img/cd-icon-picture.svg') }}" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content text-right flip pr-0">
          <h2 class="mt-0">Title of section 3</h2>
          <img src="{{ asset('storage/images/onlineLearning/Avx8XL7Y1J.png') }}" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error.</p>
          <span class="cd-date">Jan 14</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie">
          <img src="{{ asset('js/vertical-timeline/img/cd-icon-movie.svg') }}" alt="Movie">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content pl-0">
          <h2 class="mt-0">Title of section 5</h2>
          <img src="{{ asset('storage/images/onlineLearning/q2c3mYDFtT.png') }}" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
          <span class="cd-date">Jan 14</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          <img src="{{ asset('js/vertical-timeline/img/cd-icon-picture.svg') }}" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content text-right flip pr-0">
          <h2 class="mt-0">Title of section 3</h2>
          <img src="{{ asset('storage/images/onlineLearning/Cv521vetgW.png') }}" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error.</p>
          <span class="cd-date">Jan 14</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->
      <div class="row mt-30">
        <div class="col-md-12">
          <h4 class="mb-20">Implemented In Projects</h4>
          <div class="owl-carousel-6col">
            <div class="item"><img src="{{ asset('storage/images/products/images (2).png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('storage/images/products/download (3).png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('storage/images/products/download (4).png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('storage/images/products/hotel.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('storage/images/products/images (1).png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('storage/images/products/download (1).png') }}" alt=""></div>
          </div>
        </div>
      </div>
      <br/>
    </section>

      
  <!-- Divider: testimonials -->
  <section style="padding-top: 53px !important;    height: 54% !important;" class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="{{ asset('storage/images/bg/bg2.jpg') }}">
    <div class="container pb-50">
      <div class="section-title">
        <div class="row">
          <div class="col-md-6">
            <h5 class="font-weight-300 m-0 text-gray-lightgray">PREVIOUS</h5>
            <h2 class="mt-0 mb-0 text-uppercase line-bottom text-white font-28">Client Reviews<span class="font-30 text-theme-color-2">.</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-10">
          <div class="owl-carousel-2col boxed" data-dots="true">
            <div class="item">
              <div class="testimonial pt-10">
                <div class="thumb pull-left mb-0 mr-0 pr-20">
                  <img width="75" class="img-circle" alt="" src="{{ asset('storage/images/testimonials/1.jpg') }}">
                </div>
                <div class="ml-100 ">
                  <h4 class="text-white mt-0">Offshore IT Staffing is a great Service provided by the Optimum Tech Company.</h4>
                  <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial pt-10">
                <div class="thumb pull-left mb-0 mr-0 pr-20">
                  <img width="75" class="img-circle" alt="" src="{{ asset('storage/images/testimonials/2.jpg') }}">
                </div>
                <div class="ml-100 ">
                  <h4 class="text-white mt-0">A very fundamental reason for offshore outsourcing is cost benefits. Expensive resources are easy to find but difficult to endure with.</h4>
                  <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial pt-10">
                <div class="thumb pull-left mb-0 mr-0 pr-20">
                  <img width="75" class="img-circle" alt="" src="{{ asset('storage/images/testimonials/3.jpg') }}">
                </div>
                <div class="ml-100 ">
                  <h4 class="text-white mt-0">To fulfill these unique strategic and administrative talent needs, offshore staffing services prove to be a great alternative.</h4>
                  <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial pt-10">
                <div class="thumb pull-left mb-0 mr-0 pr-20">
                  <img width="75" class="img-circle" alt="" src="{{ asset('storage/images/testimonials/2.jpg') }}">
                </div>
                <div class="ml-100 ">
                  <h4 class="text-white mt-0">This have a wide range of software programs, consent us to adapt variety of industries, while left over an affordable and cost-effective option</h4>
                  <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>


 





   <!-- Divider: Funfact -->
   <section style="height: 50% !important;"  class="divider parallax  "  data-parallax-ratio="0.7">
    
    <div class="container">
      <div class="row">
        <h3 class="line-bottom mt-0 mb-50 ml-15">Book Services</h3>
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
          <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
            <div class="media-body">
              <h5 class="mt-0"><a href="mailto:info@optimumtech.com">Email Address</a></h5>
              <p><a href="mailto:info@optimumtech.com">info@optimumtech.com</a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-3 col-sm-6 col-md-3">
          <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
           <a href="skype:usman_gcuf?call" ><div  class="media-body">
              <h5 class="mt-0">Make a Video Call</h5>
              <p>OptimumSkype</p></a>
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