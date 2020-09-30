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
}
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin-bottom: 30px;
  margin-top: 30px;
  /* width: 300px;
  height: 300px; */
  width: 150px !important;
  height: 150px !important;
  min-height: 150px !important;
  border-radius: 40px;
  box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
  padding-bottom: 0% !important;
  padding: 0px 5px 0px 5px !important;
  background: #202c45 !important;
  color: white !important;
  border-left: 5px solid #f2184f;
}
/* .card:hover{
  background-color: #202c45;
  border-left: 5px solid #f2184f;
  font-size: 1vw !important;

} */

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
    /* width: 120px;
    height: 120px;
     */
    width: 70px;
    height: 69px;
    /* border-radius: 40px; */
    object-fit: cover;
    /*opacity: 0.3;*/
    margin-top: 20px;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  /*font-weight: bold;*/
  /*font-size: 30px;*/
  /* margin-top: -153px; */
  margin-top: -67px;
  height: 40px;
  /* color: #626363; */
  color: white
}



/* .card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
} */
.card h3{ color: white;  }
.card h4{ color: white; font-size: 14px; }
.card:hover  h3{
  color: white !important;
}
.card:hover  p{
  color: white !important;
}
.card:hover  a{
  color: white !important;
}
.card:hover img{
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

.card_image_internal{
  /* width: 30%;
    margin: 0px auto;
    border: 1px solid white;
    border-radius: 50%;
    margin-top: 20px; */
    width: 54%;
    margin-left: 18%;
/*     border: 1px solid white;
 */    border-radius: 50%;
    margin-top: 20px;
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
	
	<section>
      <div class="container">
        <div class="row">
          
        </div>
        

  <section class="bg-theme-colored">
      <div >
        <div class="row text-center">
          <div class="col-md-12">
            <h2 id="basic-coupon-clock" class="text-white"></h2>
            <!-- Final Countdown Timer Script -->
            <script type="text/javascript">
              $(document).ready(function() {
                $('#basic-coupon-clock').countdown('2020/10/10', function(event) {
                  $(this).html(event.strftime('%D days %H:%M:%S'));
                });
              });
            </script>
          </div>
        </div>
      </div>
    </section>


  <section >
      <div class="container pt-40 pb-40">
        <div class="row mt-60">
              <div class="col-xs-12 col-sm-12 col-md-12 pb-sm-20 mt-10 ">
                <h2 class="line-bottom font-20 text-theme-colored text-uppercase mb-10 mt-0">Our Events</h2>
              </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">

            <div class="row">

             
                @if($events->count()>0)
                      
                      @foreach($events as $event)
                        @php $img = 'storage/'.$event->img; @endphp
                         <div class="col-md-4 mt-60" style="height: 174px;">
                            <article class="post media-post clearfix pb-0 mb-10">
                              <div class="col-md-3" >
                                  <a href="{{ route('EventDetail',$event->id) }}" target="_blank" class="post-thumb mr-20"><img alt="" src="{{ asset($img) }}" ></a>
                              </div>

                              <div class="col-md-9">
                                   <div class="post-right">
                                    <h4 class="mt-0 mb-5 text-uppercase"><a href="{{ route('EventDetail',$event->id) }}" target="_blank">{{ $event->title }}</a></h4>
                                    <ul class="list-inline font-12 mb-5">
                                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> <!--June 26, 2016 --> {{ date('F',strtotime($event->event_date)) }} {{ date('d',strtotime($event->event_date)) }}, {{ date('Y',strtotime($event->event_date)) }} ,{{ date('h:i a',strtotime($event->event_time)) }}</li>
                                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>{{ $event->address }}</li>
                                    </ul>
                                    <p class="mb-0 font-13" style="text-align: justify">{{ substr($event->detail,0,100) }}...</p>
                                    <a class="text-theme-colored font-13" href="{{ route('EventDetail',$event->id) }}" target="_blank">Read More →</a>
                                  </div>
                              </div>
                            
                           
                          </article>
                        </div>

                      @endforeach
                @endif
              

             

              {{--<div class="col-md-6">

                @php $img = 'storage/'.$event->img; @endphp
                <article class="post media-post clearfix pb-0 mb-10">
                  <div class="col-md-3" style="float: left;"> <img alt="" src="{{ asset($img) }}"></div>
                 
                  <div class="col-md-9 post-right" style="float: left;">
                    <h4 class="mt-0 mb-5 text-uppercase">{{ $event->title }}</h4>
                    <ul class="list-inline font-12 mb-5">
                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> <!--June 26, 2016 --> {{ date('F',strtotime($event->event_date)) }} {{ date('d',strtotime($event->event_date)) }}, {{ date('Y',strtotime($event->event_date)) }} ,{{ date('h:i a',strtotime($event->event_time)) }} | </li>
                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>{{ $event->address }}</li>
                    </ul>
                    <p class="mb-0 font-13" style="text-align: justify">{{ $event->detail }}</p>
                   
                  </div>
                </article>


              </div>--}}
            </div>
          </div>
        </div>
      </div>
  </section>





        
      </div>
    </section>




    <section class="divider parallax layer-overlay overlay-white-8" data-bg-img="{{ asset('storage/images/bg/bg1.jpg') }}">
      <div class="container-fluid">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h3 class="title text-theme-colored">Registration Form</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form id="booking-form" name="booking-form" action="http://html.kodesolution.live/s/studypress/v6.0/demo/includes/event-register.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Name" name="register_name" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Email" name="register_email" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Phone" name="register_phone" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Ticket types</label>
                    <select name="ticket_type" class="form-control">
                      <option>One Person</option>
                      <option>Two Person</option>
                      <option>Family Pack</option>
                      <option>Premium</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Event types</label>
                    <select name="event_type" class="form-control">
                      <option>Event 1</option>
                      <option>Event 2</option>
                      <option>Event 3</option>
                      <option>All package</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group text-center">
                  	<input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button data-loading-text="Please wait..." class="btn btn-dark btn-theme-colored btn-sm btn-block mt-20 pt-10 pb-10" type="submit">Register now</button>
                  </div>
                </div>
              </div>
            </form>
            <!-- Job Form Validation-->
            <script type="text/javascript">
              $("#booking-form").validate({
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

      
  <!-- Divider: testimonials -->
<!--   <section style="padding-top: 53px !important;    height: 54% !important;" class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="{{ asset('storage/images/bg/bg2.jpg') }}">
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
  </section> -->


 





   <!-- Divider: Funfact -->
   <section style="height: 50% !important;"  class="divider parallax  "  data-parallax-ratio="0.7">
    
    <div class="container">
      <div class="row">
        <!-- <h3 class="line-bottom mt-0 mb-50 ml-15">Book Events</h3> -->
        <div class="cards-list">
        <div class="card 1">
          <div class="card_image">
              <div class="card_image_internal">
                <a href="#s"><i class="fa fa-map-marker" style="font-size: 50px;color: white;"></i></a>
              </div>
              
          </div>
          <div class="card_title">
            <h4 class="mt-0">Our Office Location</h4>
                  <!-- <p>{{ $contact->address }}</p>
            <a href="#">View on Map <i class="fa fa-long-arrow-right"></i></a> -->
          </div>
        </div>

         <div class="card 2">
          <div class="card_image">

              <div class="card_image_internal">
                <a href="tel:{{ $contact->phone }}"><i class="fa fa-phone" style="font-size: 50px;color: white;"></i></a>
              </div>
            <!-- <img src="{{asset('assets/images/phone.png')}}" alt="">  -->
           </div>
          <div class="card_title title-white">
            <h4 class="mt-0">Contact Number</h4>
                 <!--  <p>{{ $contact->phone }}</p>
            <a href="tel:{{ $contact->phone }}">Make Call <i class="fa fa-long-arrow-right"></i></a> -->
          </div>
        </div>

        <div class="card 3">
          <div class="card_image">
              <div class="card_image_internal">
                <a href="mailto:{{ $contact->email }}"><i class="fa fa-envelope" style="font-size: 50px;color: white;"></i></a>
              </div>
            
            <!-- <img src="{{asset('assets/images/mail.png')}}" alt="">  -->
          </div>
          <div class="card_title">
            <h4 class="mt-0">Email Address</h4>
                 <!--  <p>{{ $contact->email }}</p>
            <a href="mailto:{{ $contact->email }}">Send Mail <i class="fa fa-long-arrow-right"></i></a> -->
          </div>
        </div>
          
          <div class="card 4">
          <div class="card_image">
            <div class="card_image_internal">
                <a href="skype:{{ $contact->skype }}"><i class="fa fa-skype" style="font-size: 50px;color: white;"></i></a>
              </div>
            <!-- <img src="{{asset('assets/images/skype.png')}}" alt="">  -->
          </div>
          <div class="card_title title-black">
            <h4 class="mt-0">Optimum Skype</h4>
                  <!-- <p>Skype Address</p>
            <a href="skype:{{ $contact->skype }}">Make Skype Call <i class="fa fa-long-arrow-right"></i></a> -->
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