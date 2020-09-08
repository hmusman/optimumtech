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
        <h3 class="line-bottom mt-0 mb-50 ml-15">Book Events</h3>
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