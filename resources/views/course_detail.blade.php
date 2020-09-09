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
  width: 300px;
  height: 300px;
  border-radius: 40px;
  box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
  padding-bottom: 0% !important;
  	padding: 0px 5px 0px 5px !important;
}
.card:hover{
	background-color: #202c45;
	border-left: 5px solid #f2184f;
	font-size: 1vw !important;

}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
    width: 120px;
    height: 120px;
    border-radius: 40px;
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
  margin-top: -153px;
  height: 40px;
  color: #626363;
}



.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

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


@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}

</style>
@endsection

@section('content')
	
	<section id="event">
        <div class="container ml-5 mr-5">
          	<div class="section-content">
            	<div class="row">
	               	<div class="col-md-5"> 
	               		@php $img = 'storage/'.$course->img @endphp
	                	<img src="{{ asset($img) }}" class="img-fullwidth" alt="">
	                </div>
	               	<div class="col-md-7 pb-sm-20">
		                <h3 class="title line-bottom mb-20 font-28 mt-0 line-height-1">Welcome <span class="text-theme-color-2 font-weight-400"> TO {{ ucwords($course->title) }}</span> !</h3>
		                <p class="mb-20">{!! $course->detail !!}</p>
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

    <section style="height: 40% !important;"  class="divider parallax  "  data-parallax-ratio="0.7">
    
      	<div class="container" >
	        <div class="row">
	        
	          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
	          
	            <a href="{{ route('ApplyForCourse',$course->id) }}" target="_blank"  class=""> <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px mr-20" data-loading-text="Please wait...">Apply</button></a>
	          </div>
	        
	        </div>
	        <div class="cards-list">
				<div class="card 1">
				  <div class="card_image">
				  	<img src="{{asset('assets/images/location.png')}}" alt=""> 
				  </div>
				  <div class="card_title">
				  	<h3 class="mt-0">Our Office Location</h3>
	                <p>{{ $contact->address }}</p>
				    <a href="#">View on Map <i class="fa fa-long-arrow-right"></i></a>
				  </div>
				</div>

				 <div class="card 2">
				  <div class="card_image">
				  	<img src="{{asset('assets/images/phone.png')}}" alt=""> 
				   </div>
				  <div class="card_title title-white">
				    <h3 class="mt-0">Contact Number</h3>
	                <p>{{ $contact->phone }}</p>
				    <a href="tel:{{ $contact->phone }}">Make Call <i class="fa fa-long-arrow-right"></i></a>
				  </div>
				</div>

				<div class="card 3">
				  <div class="card_image">
				  	<img src="{{asset('assets/images/mail.png')}}" alt=""> 
				  </div>
				  <div class="card_title">
				    <h3 class="mt-0">Email Address</h3>
	                <p>{{ $contact->email }}</p>
				    <a href="mailto:{{ $contact->email }}">Send Mail <i class="fa fa-long-arrow-right"></i></a>
				  </div>
				</div>
				  
				  <div class="card 4">
				  <div class="card_image">
				  	<img src="{{asset('assets/images/skype.png')}}" alt=""> 
				  </div>
				  <div class="card_title title-black">
				    <h3 class="mt-0">Optimum Skype</h3>
	                <p>Skype Address</p>
				    <a href="skype:{{ $contact->skype }}">Make Skype Call <i class="fa fa-long-arrow-right"></i></a>
				  </div>
				  </div>
			</div>		

        
        <!-- <div class="row">
         
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
	                <a href="skype:usman_gcuf?call" ><h5 class="mt-0">Make a Video Call</h5></a>
	                <a href="skype:usman_gcuf?call" ><p>OptimumSkype</p></a>
	              </div>
	            </div>
          	</div>
        </div> -->
      </div>
    </section>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->