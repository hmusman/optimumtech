@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->
@section('style')
<style>
  @media (max-width: 500px){
    .card {
         margin-left: 0% !important; 
    }
    .card {
      margin-bottom: 25px !important;
      margin-top: 11px !important;
      width: 100% !important;
      height: 116px !important;
      min-height: 256px !important;
      border-radius: 40px !important;
      box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
      cursor: pointer !important;
      transition: 0.4s !important;
      padding-bottom: 0% !important;
      margin-left: 14px !important;
    }

    .card_title p{
      margin-bottom: -9px !important;
    }

    .card .card_image {
      margin-top: -22px !important;
    }

    .card .card_image img{
      height: inherit !important;
      margin-left: 0px !important;
    }


  }
  .cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin-bottom: 10px;
  margin-top: 11px;
  width: 430px;
  height: 90px;
  min-height: 125px;
  border-radius: 40px;
  box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
  padding-bottom: 0% !important;
  background-color: #202c45;
  border-left: 5px solid #f2184f;
}
.card p{
  margin-top: -15px;
      font-size: 14px !important;
}
/* .card:hover{
  background-color: #202c45;
    border-left: 5px solid #f2184f;
} */
.card .card_image {
  /*width: inherit;*/
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
    width: 192px;
    height: 85px;
    /*border-radius: 40px;*/
    object-fit: cover;
    /*opacity: 0.3;*/
    margin-top: 6px;
    margin-left: 35px;
    margin-top: 14px;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  /*font-weight: bold;*/
  /*font-size: 30px;*/
  /*margin-top: -146px;*/
  /*height: 0px;*/
  /* color: #626363; */
  color: white;
}

/* .card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
} */

.card  h3{
  color: white !important;
      font-size: 14px !important;
}
.card p{
  color: white !important;
}
.card  a{
  color: white !important;
}
.card img{
  filter: invert(1.0);
}
.title-white {
  color: white;
}

.title-black {
  color: black;
}
.button{
  background-color: transparent;
    color: #626363;
    width: 80%;
}
.card_title a:hover{
  color: #087b92;
}
p{
  margin-bottom: 3px !important;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}

</style>
@endsection

@section('content')
	
	<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('storage/images/bg/bg3.jpg') }}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Contact Us</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="{{url('/')}}">Home</a></li>
                <!-- <li><a href="#">Pages</a></li> -->
                <li class="active text-gray-silver">Contact Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider" style="padding-bottom: 50px;">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-4">
            <div class="row">
               <div class="cards-list">
                  <div class="card 1">
                    <div class="row">
                      <div class="col-md-3">
                          <div class="card_image">
                            <i class="fa fa-map-marker" style="font-size: 50px;color:white;"></i>
                            <!-- <img src="{{asset('assets/images/location.png')}}" alt="">  -->
                          </div>
                      </div>
                      <div class="col-md-9">
                          <div class="card_title">
                            <h3 class="mt-0" style="padding-top: 10px !important;">Our Office Location</h3>
                                  <p>{{ $contact->address }}</p>
                            <a href="#map">View on Map <i class="fa fa-long-arrow-right"></i></a>
                          </div>
                      </div>
                    </div>
                  </div>

                   <div class="card 2">
                    <div class="row" style="width: 100%;">
                      <div class="col-md-3">
                        <div class="card_image">
                          <i class="fa fa-phone" style="font-size: 50px;color:white;"></i>
                          <!-- <img src="{{asset('assets/images/phone.png')}}" alt="">  -->
                         </div>
                      </div>
                      <div class="col-md-9">
                        <div class="card_title title-white">
                          <h3 class="mt-0">Contact Number</h3>
                          <p>{{ $contact->phone }}</p>
                          <a href="tel:{{ $contact->phone }}">Make Call <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card 3">
                    <div class="row"style="width: 100%;">
                        <div class="col-md-3">
                          <div class="card_image">
                            <i class="fa fa-envelope" style="font-size: 50px;color:white;"></i>
                            <!-- <img src="{{asset('assets/images/mail.png')}}" alt="">  -->
                          </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card_title">
                              <h3 class="mt-0">Email Address</h3>
                                    <p>{{ $contact->email }}</p>
                              <a href="mailto:{{ $contact->email }}">Send Mail <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                  </div>
                    
                    <div class="card 4">
                      <div class="row" style="width: 100%;">
                          <div class="col-md-3">
                          <div class="card_image">
                           <i class="fa fa-skype" style="font-size: 50px;color:white;"></i>
                           <!--  <img src="{{asset('assets/images/skype.png')}}" alt="">  -->
                          </div>
                          </div>
                          <div class="col-md-9">
                              <div class="card_title title-black">
                                <h3 class="mt-0">Optimum Skype</h3>
                                      <p>Skype Address</p>
                                <a href="skype:{{ $contact->skype }}">Make Skype Call <i class="fa fa-long-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>    
              <!-- <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                    <p>25-a, batala colony Faisalabad.</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="tel:+923136650965"> <i class="pe-7s-call text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                    <a  href="tel:+923136650965"> <p>+92 313 6650965</p></a>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="mailto:info@optimumtech.com"> <i class="pe-7s-mail text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                    <a  href="mailto:info@optimumtech.com"> <p> info@optimumtech.com</p></a>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="skype:usman_gcuf?call"> <i class="pe-7s-film text-theme-colored"></i></a>
                  <div class="media-body"> <strong>Make a Video Call</strong>
                    <a href="skype:usman_gcuf?call" >   <p>Optimum Skype</p></a>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>
            <p class="mb-20">We are available at 10:00 am to 7:00 pm. Contact us with your questions you want to ask. </p>
            
                  @if(Session::has('success'))
                      <div class="alert alert-success">
                          <button class="close" data-dismiss="alert">x</button>
                            {{ Session::get('success') }}
                      </div>
                  @endif
              
            <!-- Contact Form -->
            <form id="contactform" name="contactform" class="" action="{{ route('SendMail') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input name="name" class="form-control" type="text" value="{{ old('name') }}" placeholder="Enter Name">
                    @error('name')
                      <p class="text-danger" style="margin-top: 3px;">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input name="email" class="form-control" type="email" value="{{ old('email') }}" placeholder="Enter Email">
                    @error('email')
                      <p class="text-danger" style="margin-top: 3px;">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input name="subject" class="form-control"  type="text" value="{{ old('subject') }}" placeholder="Enter Subject">
                    @error('subject')
                      <p class="text-danger" style="margin-top: 3px;">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input name="phone" class="form-control" maxlength="13" type="text" value="{{ old('phone') }}" placeholder="Enter Phone">
                    @error('phone')
                      <p class="text-danger" style="margin-top: 3px;">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="form-group">
                <textarea name="message" class="form-control" rows="12" placeholder="Enter Message">{{ old('message') }}</textarea>
                @error('message')
                      <p class="text-danger" style="margin-top: 3px;">{{ $message }}</p>
                    @enderror
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
               <!--  <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button> -->
              </div>
            </form>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
        </div>
      </div>
    </section>



    
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid p-0">
        <div class="row" id="map" >
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.451827165005!2d73.10261061462782!3d31.401675260136532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392267e208b01dab%3A0xd9f579bb62c0e16c!2sOptimum-Tech!5e0!3m2!1sen!2s!4v1592390273461!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </section>
  </div>
	

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->