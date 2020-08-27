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
	              <!-- <li>
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
	              </li> -->
	              <li>
	                <img src="{{ asset('storage/images/8q1zAKTLv1.jpg') }}" alt="not found" />
	              </li>
	              <li>
	                <h5>Share:</h5>
	                <div class="styled-icons icon-sm icon-gray icon-circled">
	                  <a href="#"><i class="fa fa-facebook"></i></a>
	                  <a href="#"><i class="fa fa-twitter"></i></a>
	                  <a href="#"><i class="fa fa-instagram"></i></a>
	                  <a href="#"><i class="fa fa-google-plus"></i></a>
	                  <a href="#"><i class="fa fa-youtube"></i></a>
	                  <a href="#"><i class="fa fa-skype"></i></a>
	                  <a href="#"><i class="fa fa-pinterest"></i></a>
	                </div>
	                <blockquote style="border-left: 1px solid #eeeeee !important;">
	                  <p>Optimum Gives Much Focus on E-Learning Classes Material and Structure to Enhance Students Skills Under the High Qualified Professional Teaching Staff</p>
	                  <!-- <footer><cite title="Source Title">Ahsan Raza</cite></footer> -->
	                </blockquote>
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
	        <div class="row">
	          <div class="col-md-6">
	            <h4 class="mt-0">Online Learning</h4>
	            <p style="text-align: justify" >Online learning has been on the rise in recent years, and it’s really not hard to see why. On the one hand, eLearning courses have become hugely popular by the simple virtue of being so much more convenient than traditional face to face courses.
	              Students can fit them around their existing responsibilities and commitments, and can engage with multimedia content and learning materials at whatever time is most convenient to them. Even better: they don’t have to travel anywhere to study, they can simply log in to the virtual campus from the comfort of their own home or office.</p>
	          </div>
	          <div class="col-md-6">
	            <blockquote>
	              <p>Since 2015 we are providing premium services as established IT Company of Optimum Tech.</p>
	              <footer><cite title="Source Title">Ahsan Raza</cite></footer>
	            </blockquote>
	          </div>
	        </div>
			<div class="row">
			 
				<div class="col-md-12">

				  IBM have found that participants learn five times more material in online learning courses using multimedia content than in traditional face to face courses.

				  Because online courses give students full control over their own learning, students are able to work at their own speed. Generally students work faster than they would do otherwise and take in more information. They are able to move faster through areas of the course they feel comfortable with, but slower through those that they need a little more time on.
				</div>

			</div>
        
      	</div>
    </section>




    <section>
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="heading-line-botVertical Timeline Threetom text-center">
              <h3>Online Learning Steps</h2>
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
          <img src="{{ asset('storage/images/onlineLearning/8q1zAKTLv1.png') }}" alt="">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content text-right flip pr-0">
          <h2 class="mt-0">Recorder Lectures</h2>
         <a href="" target="_blank" > <img src="{{ asset('storage/images/onlineLearning/PZDz5NSZPe.png') }}" alt=""></a>
         
          <p>We are providing both paid and unpaid lecture videos for the establishment of daily work ethics and to fulfill the self-study purposes. </p>
          
          <span class="cd-date">Jan 14</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie">
           <img src="{{ asset('js/vertical-timeline/img/cd-icon-movie.svg') }}" alt="Movie">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content pl-0">
          <h2 class="mt-0">Live Session</h2>
        
          <a href="" target="_blank" > <img src="{{ asset('storage/images/onlineLearning/usHFgQ0usk.png') }}" alt=""> </a>
          <p>Optimum Tech also providing live sessions and lectures to engage the students and audiences. </p>
          <span class="cd-date">Jan 14</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          <img src="{{ asset('storage/images/onlineLearning/orPI9Y5A4P.png') }}" alt="">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content text-right flip pr-0">
          <h2 class="mt-0">Premium Facility</h2>
          <a href="" target="_blank" > <img src="{{ asset('storage/images/onlineLearning/DdPZXXBIjG.png') }}" alt=""> </a>
          <p>Optimum Tech also provides the premium facility of efficient one to one sessions with teachers for the national and international students such that they gain better individual understanding.</p>
          <span class="cd-date">Jan 14</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie">
          <img src="{{ asset('js/vertical-timeline/img/cd-icon-movie.svg') }}" alt="Movie">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content pl-0">
          <h2 class="mt-0">E-Books/Notes</h2>
          <a target="_blank" href="" > <img src="{{ asset('storage/images/onlineLearning/v19MSNQl5z.png') }}" alt=""> </a>
          <p>Optimum Tech is providing e-books and notes for various courses in pdf for  your constructive understanding. </p>
          <span class="cd-date">Jan 14</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->

   
      <div class="row mt-30" style="height: 202px !important;">
        <div class="col-md-12">
          <h4 class="mb-20">Courses We Also Offer</h4>
          <div class="learningautoplay">
            <div class="item"><a href="#" ><img src="{{ asset('storage/images/photos/5.png') }}" alt=""></a></div>
            <div class="item"><a href="#" ><img src="{{ asset('storage/images/photos/4.png') }}" alt=""></a></div>
            <div class="item"><a href="#" ><img src="{{ asset('storage/images/photos/6.png') }}" alt=""><a href="#" ></a></div>
            <div class="item"><a href="#" ><img src="{{ asset('storage/images/photos/7.png') }}" alt=""></a></div>
            <div class="item"><a href="#" ><img src="{{ asset('storage/images/photos/8.png') }}" alt=""></a></div>
            <div class="item"><a href="#" ><img src="{{ asset('storage/images/photos/4.png') }}" alt=""></a></div>
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
	                  <h4 class="text-white mt-0">Thank you for this course. I get know experience and knowledge in using different kinds of online tools which are useful and effective. I'll use some of them during my lessons. And lots of thanks.</h4>
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
	                  <h4 class="text-white mt-0">The educational activities are designed to ensure that there must be a successful take away for participants.</h4>
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
	                  <h4 class="text-white mt-0">The course has introduced me to various tools that are very useful to my training. I could explore using them to make my lesson more interactive.</h4>
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
	                  <h4 class="text-white mt-0">Really loved the fact that this course offered me an opportunity to realise, explore and apply a range of technology based software, platforms and tools</h4>
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
	        <h3 class="mt-0 mb-50 ml-15"></h3>
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

