@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	<section id="event">
        <div class="container">
          	<div class="section-content">
            	<div class="row">
	               	<div class="col-md-5"> 
	               		@php $img = 'storage/'.$course->img @endphp
	                	<img src="{{ asset($img) }}" class="img-fullwidth" alt="">
	                </div>
	               	<div class="col-md-7 pb-sm-20">
		                <h3 class="title line-bottom mb-20 font-28 mt-0 line-height-1">Welcome <span class="text-theme-color-2 font-weight-400"> TO {{ ucwords($course->title) }}</span> !</h3>
		                <p class="mb-20">{{ ucfirst($course->detail) }}</p>
		                <h4 class="mt-0"><span class="text-theme-color-2">Price :</span> {{ $course->price }}</h4>
		                <ul class="review_text list-inline">
		                  <li>
		                    <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
		                  </li>
		                </ul>
	              
	               </div>
             </div>
            </div>
        </div>
    </section>

  <!--   <section class="mt-30 mb-20">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-theme-colored line-bottom text-theme-colored">All Batches Class Timing And Projects</h3>
            <br/>
            
            <ul id="myTab" class="nav nav-tabs boot-tabs">
              <li class="active"><a href="#small" data-toggle="tab">New Batch 21</a></li>
              <li><a href="#medium" data-toggle="tab">Adobe-Projects</a></li>
            
            </ul>
            <div id="myTabContent" class="tab-content">
	            <div class="tab-pane fade in active" id="small">
	                <table class="table table-bordered"> 
		                <tr>
		                   <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="5">Timing For All Batches</td>
		                </tr>
	                    <tr> <th>Batch Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th><th>Duration</th> </tr>
	                  	<tbody> 
		                    <tr> <th scope="row">Adobe illustrator New Upcoming Batch 3</th> <td>45 minutes</td> <td>6 months</td> <td>Free</td> <td><div id="basic-coupon-clock" class="font-20 "></div></td> </tr>
		                    <tr> <th scope="row">Adobe Morning</th> <td>45 minutes</td> <td>1 year</td> <td>$940</td> <td>Paid</td></tr>
		                    <tr> <th scope="row">Adobe batch 2 Evening</th> <td>1 Hours</td> <td>1 years</td> <td>$1180</td> <td>Paid</td> </tr>
		                    <tr> <th scope="row">Photoshop cc batch 1 Morning</th> <td>1 Hours</td> <td>6 months</td> <td>Free</td><td><div id="basic-coupon-clock2" class="font-20 "></div></td> </tr> 
		                    <tr> <th scope="row">Photoshop cc batch 1 Evening</th> <td>30 minutes</td> <td>8 months</td> <td>$600</td><td>Paid</td> </tr> 
	                    </tbody> 
	                </table>
	            </div>
              	<div class="tab-pane fade" id="medium">
	                <table class="table table-bordered"> 
		                <tr>
		                    <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">All Projects</td>
		                </tr>
	                    <tr> <th>Project Type</th>  <th>Studente Completed</th> <th>Detail</th> </tr>
	                    <tbody> 
		                    <tr> <th scope="row">Ecommerce Project</th>  <td>30 students</td>                     <td><a target="_blank" href="page-teachers-details.html">Click Here</a></td> </tr>
		                    <tr> <th scope="row">Covid19 Tracking System</th> <td>27 students</td>     <td><a target="_blank" href="page-teachers-details.html">Click Here</a></td> </tr>
		                    <tr> <th scope="row">Shopify Business Sites</th>  <td>49 students</td>     <td><a target="_blank" href="page-teachers-details.html">Click Here</a></td> </tr>
		                    <tr> <th scope="row">ELearning App</th> <td>5 students</td>     <td><a target="_blank" href="page-teachers-details.html">Click Here</a></td> </tr> 
		                    <tr> <th scope="row">Car parking System</th> <td>36 students</td>     <td><a target="_blank" href="page-teachers-details.html">Click Here</a></td> </tr> 
	                   </tbody> 
	                </table>
                </div>
              
            </div>
          </div>
        
        </div>
      </div>
    </section>
	 -->

    <section style="height: 40% !important;"  class="divider parallax  "  data-parallax-ratio="0.7">
    
      	<div class="container" >
	        <div class="row">
	        
	          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
	          
	            <a href="{{ route('ApplyForCourse',$course->id) }}" target="_blank"  class=""> <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Apply</button></a>
	          </div>
	        
	        </div>
           <br/>
  
        
        <div class="row">
         
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
	            </div>

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