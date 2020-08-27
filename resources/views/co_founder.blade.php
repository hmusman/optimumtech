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
              <h2 class="title text-white">Teachers Details</h2>
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

    <!-- Section: Experts Details -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4 mt-60">
              <div class="thumb">
                <img src="{{ asset('storage/images/ahsan.jpg') }}" alt="">
              </div>
            </div>
            <div class="col-md-8 mt-60">
              <h4 class="name font-24 mt-0 mb-0">Muhammad Ahsan Raza </h4>
              <h5 class="mt-5 text-theme-color-2">CEO Optimum Tech</h5>
                <p style="text-align: justify;">OPTIMUM-TECH was established in 2015. And enjoying a very positive reputation across the town by the grace of Allah Almighty. 
                <p style="text-align: justify;">
                Our main purpose of education is the advancement and dissemination of knowledge, enabling future generations to have aspirations and empower them to compete globally. We aim to prepare our students for a lifetime of challenges and opportunities and develop a personal index-home-variation-bg-staticon of preferred future. Our main focus is to make our customers/Students enough capable to support their family financially. </p>
                <p style="text-align: justify;">
                With the regard of all these objectives we have created some crucial paid and non-paid services and technical courses, providing internships, part-time/full-time jobs, a helping guide to monetize their achieving goals. </p>
                <p style="text-align: justify;">
                I'm also playing my part to bring a positive change in the technical society, providing cultured security systems and solution applications and assisting my customer to work smarter, helping my students to improve their communication deliverance and presentation. We let our students to reflect over their ideas and encourage them to build their ideas into the reality because this is what our outmost responsibility is. </p>

                <p style="text-align: justify;">
                We are also committed to provide free education, free medical facilities, free technical skills, free of cost courses, food supply to needy and blood donations for the striving patients.  </p>

                <p style="text-align: justify;">
                Please join us in this pious gesture for our generation's upbringing and make their position strong and worthy in our society. As we all know that our generation is facing difficulties finding the right job for them according to their degree but a degree doesn't only matters, skills do too. Let's empower our children, the future of our country through training that would make their mark in society, our country, or maybe the world. The youth always is the surprising part of any community, nobody knows what youth can do if they have a strong back and grip in their hands. We have taken our initiative by establishing this institute, now is your turn to show them "That you care".  Thank you
                </p>
            
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
               <li><a href="https://www.facebook.com/optimumtechofficial/"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             </ul>
            </div>
          </div>
          <div class="row mt-30">
            <div class="col-md-4">
              <h4 class="line-bottom">About Me:</h4>
              <div class="volunteer-address">
                <ul>
                  <li>
                    <div class="bg-light media border-bottom p-15 mb-20">
                      <div class="media-left">
                        <i class="pe-7s-pen text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Experiences:</h5>
                        <p>BS-IT, MS-CS</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom p-15 mb-20">
                      <div class="media-left">
                        <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Address:</h5>
                        <p>25-a, batala colony Faisalabad</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom p-15">
                      <div class="media-left">
                        <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Contact:</h5>
                        <p><span  >Phone:</span><a href="tel:+923136650965"> +92 313 6650965</a><br><span> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  </span><a href="tel:+923216650964"> +92 321 6650964</a><br><span>Email:</span> <a href="mailto:ahsanraza363@gmail.com">ahsanraza363@gmail.com</a></p>
                      </div>

                      <!-- +923136650965, +923216650964 -->
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 mb-20">
              <h4 class="line-bottom">Find Location:</h4>

              <!-- Google Map HTML Codes<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5456.163483134849!2d144.95177475051227!3d-37.81589041361766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sbd!4v1556130803137!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.4736418214347!2d73.10211151462781!3d31.40107401016607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392267e208b01dab%3A0xd9f579bb62c0e16c!2sOptimum-Tech!5e0!3m2!1sen!2s!4v1593598945145!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
              <div class="clearfix">
                <h4 class="line-bottom">Quick Contact:</h4>
              </div>
              <form id="contact-form" class="contact-form-transparent">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Name" id="contact_name" name="contact_name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Email" id="contact_email" name="contact_email" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Subject" id="contact_subject" name="contact_subject" class="form-control" required="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea rows="5" placeholder="Enter Message" id="contact_message" name="contact_message" required class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <button data-loading-text="Please wait..." class="btn btn-flat btn-dark btn-theme-colored mt-5" type="submit">Send your message</button>
                </div>
              </form>
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