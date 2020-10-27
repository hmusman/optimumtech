@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->
@section('style')

   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
div[class="wrapper"]{
	z-index: 100;
}


	@import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);
.team1 {
  font-family: "Montserrat", sans-serif;
	color: #8d97ad;
  font-weight: 300;
}

.team1 h1, .team1 h2, .team1 h3, .team1 h4, .team1 h5, .team1 h6 {
  color: #3e4555;
}

.team1 .font-weight-medium {
	font-weight: 500;
}

.team1 .bg-light {
    background-color: #f4f8fa !important;
}

.team1 .subtitle {
    color: #8d97ad;
    line-height: 24px;
}

.team1 .pro-pic {
  min-height: 200px;
}

.team1 .pro-pic .card-img-overlay {
  background: rgba(26, 139, 243, 0.87);
  display: none;
}

.team1 .pro-pic .card-img-overlay ul {
  top: 50%;
}

.team1 .pro-pic .card-img-overlay ul li a {
  -webkit-transition: 0.1s ease-in;
  -o-transition: 0.1s ease-in;
  transition: 0.1s ease-in;
}

.team1 .pro-pic .card-img-overlay ul li a:hover {
  -webkit-transform: translate3d(0px, -5px, 0px);
  transform: translate3d(0px, -5px, 0px);
}

/*.team1 .pro-pic:hover .card-img-overlay {
  display: block;
}*/

.team-section .card{
	width: 100%;
    height: auto;
    justify-content: flex-start;
    padding-bottom: 0%;
    min-height: auto;
    box-shadow: 1px 2px 19px 0px rgba(168,158,168,1) !important;
}
.card:hover .make_black > p{
	color: black !important;
}
.card .make_black > p {
    font-size: 17px;
    color: #4C5656;
    margin-top: 0px;
    z-index: 1000;
    transition: color 0.3s ease-out;
}
.short-detail{
	margin-left: inherit;
    text-align: initial;
    padding-top: 6px;
}

@media screen and (min-width: 1400px) {
  .pro-pic{
  	    margin-left: -23px;
  }
}

	.service-block .content {
          border: none; 
    }
    .events{
    	background: none;
    	float: right;
    	color: #2e6da4;
    }

    /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
	.team_card{
		margin-left: 15% !important;
	}
	.team-section .card {
	    width: 70%;
	}
	.short-detail{
		padding-left: 14%;
    	padding-right: 10%;
	}
}

</style>
@endsection

@section('content')
	<style type="text/css">
      .myModel {
          display: none; 
          position: fixed;
          z-index: 9999;
          padding-top: 100px; 
          left: 0;
          top: 0;
          width: 100%; 
          height: 100%; 
          overflow: auto; 
          background-color: rgb(0,0,0); 
          background-color: rgba(0,0,0,0.9); 
        }

        .modal-content {
          display: block;
          width: 80%;
          max-width: 700px;
          margin-left: 24%;
        }
        
        .modal-content{
          animation-name: zoom;
          animation-duration: 0.6s;
        }

        .close {
          position: absolute;
          top: 15px;
          right: 35px;
          color: #f1f1f1;
          font-size: 40px;
          font-weight: bold;
          transition: 0.3s;
        }

        .close:hover,
        .close:focus {
          color: #bbb;
          text-decoration: none;
          cursor: pointer;
        }

        @media only screen and (max-width: 700px){
          .modal-content {
            width: 100%;
          }
		} 
		
		
		.btn-primary {
   
    border-color: #087b92 !important;
}

 .btn-primary:active:hover{
	     background-color: #087b92
 }

 .btn-primary.focus, .btn-primary:focus {
   
    background-color: #087b92 !important;
   
}
.btn-primary:hover {
  
	background-color: #087b92 !important;
}
		</style>
		






<style>
#bgimgwhtasaap{

}



	.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}

i[class="fa fa-whatsapp my-float"]{
	margin-top: 15px !important;
}


.float{
	right: 1285px !important;
}
</style>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

#click{
  display: none;
}
label{
  position: fixed;
  right: 30px;
  bottom: 20px;
  height: 55px;
  width: 55px;
background: -webkit-linear-gradient(left, #626363, #087b92);
  text-align: center;
  line-height: 55px;
  border-radius: 50px;
  font-size: 30px;
  color: #fff;
  cursor: pointer;
  z-index: 100
}
label i{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transition: all 0.4s ease;
}
label i.fas{
  opacity: 0;
  pointer-events: none;
}
#click:checked ~ label i.fas{
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) rotate(180deg);
}
#click:checked ~ label i.fab{
  opacity: 0;
  pointer-events: none;
  transform: translate(-50%, -50%) rotate(180deg);
}
.wrapper{
  position: fixed;
  right: 30px;
  bottom: 0px;
  max-width: 400px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
#click:checked ~ .wrapper{
  opacity: 1;
  bottom: 24px;
  pointer-events: auto;
}
.wrapper .head-text{
  line-height: 60px;
  color: #fff;
  border-radius: 15px 15px 0 0;
  padding: 0 20px;
  font-weight: 500;
  font-size: 20px;
    background: -webkit-linear-gradient(left, #626363, #087b92);
}
.wrapper .chat-box{
  padding: 20px;
  width: 100%;
}
.chat-box .desc-text{
  color: #515365;
  text-align: center;
  line-height: 25px;
  font-size: 17px;
  font-weight: 500;
}
.chat-box form{
  padding: 10px 15px;
  margin: 20px 0;
  border-radius: 25px;
  border: 1px solid lightgrey;
}
.chat-box form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.chat-box form .field:last-child{
  margin-bottom: 15px;
}
form .field input,
form .field button,
form .textarea textarea{
  width: 100%;
  height: 100%;
  padding-left: 20px;
  border: 1px solid lightgrey;
  outline: none;
  border-radius: 25px;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .field input:focus,
form .textarea textarea:focus{
  border-color: #fc83bb;
}
form .field input::placeholder,
form .textarea textarea::placeholder{
  color: silver;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder,
form .textarea textarea:focus::placeholder{
  color: lightgrey;
}
.chat-box form .textarea{
  height: 70px;
  width: 100%;
}
.chat-box form .textarea textarea{
  height: 100%;
  border-radius: 50px;
  resize: none;
  padding: 15px 20px;
  font-size: 16px;
}
.chat-box form .field button{
  border: none;
  outline: none;
  cursor: pointer;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  background: -webkit-linear-gradient(left, #626363, #087b92);
  transition: all 0.3s ease;
}
.chat-box form .field button:active{
  transform: scale(0.97);
}


#whtsappImg{
	    margin-top: -106px !important;
    border-radius: 50% !important;
}
</style>

        <div class="myModel" >
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
		</div>
		
		
		<a href="https://api.whatsapp.com/send?phone=+9203026650909&text=Hola%21%20Optimum-Tech%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
<img id="whtsappImg" alt="featured project" src="{{  asset('images/download (1).png') }}" class="img-fullwidth"> 
</a>


 

<div>
	  <input type="checkbox" id="click">
    <label for="click">
        <i class="fab fa-facebook-messenger"></i>
        <i class="fas fa-times"></i>
    </label>
    <div class="wrapper">
        <div class="head-text">
            Let's chat? - Online</div>
        <div class="chat-box">
            <div class="desc-text">
                Please fill out the form below to start chatting with the next available agent.</div>
            <form action="#">
                <div class="field">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="field">
                    <input type="email" placeholder="Email Address" required>
                </div>
                <div class="field textarea">
                    <!-- Due to more textarea fields I got an error so I've changed the textarea name into changeit..Change the tag name to use it -->
                    <changeit cols="30" rows="10" placeholder="Explain your queries.." required></changeit>
                </div>
                <div class="field">
                    <button type="submit">Start Chat</button>
                </div>
            </form>
        </div>
    </div>
</div>


	<div class="main-content">
		
		<!-- Section: home -->
	    <section id="home" class="divider"  style="background-color: #f7f7f7;">
	    	@if($sliders->count()>0)
		    	<div id="sync1" class="owl-carousel owl-theme">
		    		@foreach($sliders as $slider)
		    			@php $sliderImg = 'storage/'.$slider->img @endphp
		    			<div class="item">					       
		    				<img src="{{  asset($sliderImg) }}" alt="">
					    </div>

		    		@endforeach
			    </div>
	    	@endif
		    
	    </section>
	     
	    <!-- Section News Ticker -->
	    @if($latestNews->count() >0)
		    <section style="background-color: #f7f7f7;">
		        <div class="container"> 
			        <div class="section-content">
			          <div class="row">
			            <div class="col-md-12">
			              <h6 class="letter-space-4 text-gray-darkgray text-uppercase  mb-0" id="Newsone" >Optimum Tech</h6>
			              <h2 class="text-uppercase font-weight-600 mt-0my font-28 line-bottom" id="NewsLineBtm" >News</h2>
			              <div id="redNews" class="news red" style="display: inline-flex;   overflow: hidden;     width: 100%;height: 50px !important;">
			                <span style="padding-bottom: 25px; z-index: 11; margin-top: -1px;padding-top: 13px;">LatestNews</span>
			                <ul style="display: inline;padding-top: 3px;     z-index: 10; margin-top: 6px;" >
			                  <li style="float: left; overflow: hidden; display: inline;  width: 300% !important; ">
			                 	
			                 	@foreach($latestNews as $singleRow)
			                 		 <a  style="display: inline; margin-right: 100px;" href="{{ route('NewsDetail',$singleRow->id) }}" target="_blank" >{{ ucfirst($singleRow->title) }}</a>
			                 	@endforeach
			                  
			                	</li>
	               			 </ul>
			              </div>
			            </div>
			          </div>

			        </div>
		        </div>
		    </section><!-- end section -->
	    @endif

	      <!-- Section: COURSES -->
	      <section id="prodSec" class="bg-lighter" style="   
	      padding-top: 55px;">
		        <div class="container pb-60">
		          <div class="section-title mb-10">
		            <div class="row">
		              <div class="col-md-3">
		              	@if($freeCourses->count()>0)
		              		 <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Free <span
		                    class="text-theme-color-2 font-weight-400">COURSES</span></h2>
		              	@endif
		               
		              </div>
		              <div class="col-md-9">
		                <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Premium <span
		                    class="text-theme-color-2 font-weight-400">Services</span></h2>
		              </div>
		            </div>
		          </div>
		          <div class="section-content">
		            <div class="row">

		              <div class="col-md-3">
		              	@if($freeCourses->count()>0)
		              		<div class="autoplay" data-dots="true">
		              			@foreach($freeCourses as $course)
		              				@php $img = 'storage/'.$course->img  @endphp
		              				<div class="item ">
					                    <div class="service-block bg-white" style="height: 495px !important">
					                      <div class="thumb"> <img alt="featured project" src="{{  asset($img) }}" class="img-fullwidth">
					                        <h4 class="text-white mt-0 mb-0"><span class="price">Free</span></h4>
					                      </div>
					                      <div class="content text-left flip p-25 pt-0">
					                        <h4 class="line-bottom mb-10">{{ ucfirst($course->title) }}</h4>
					                        <p  style="text-align: justify;">{!! ucfirst(substr($course->detail,0,250)) !!}...</p>
					                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
					                          href="{{ route('CourseDetail',$course->id)}}" target="_blank">view details</a>
					                      </div>
					                    </div>
					                </div>	
		              			@endforeach
				                
				                  
				            </div>

		              	@endif
		                
		              </div>
		              <div class="col-md-9" >
		                <div class="row ">
		                  	
		                  	@if($courses->count()>0)
		                  	
		                  		<div  class="col-lg-4 col-md-4 col-sm-4"   >
				                    <div class="card effect__hover" style="min-height: 243px !important;">
				                      <div class="card__front border-3px bg-lighter">
				                          <div class="card__text">
				                            <div class="display-table-parent">
				                              <div class="display-table">
				                                <div class="display-table-cell">
				                                  <div class="icon-box mb-0">
				                                    <a href="#" class="icon mb-0">
				                                      <i class="text-theme-colored pe-7s-note2 font-72" style="color: #087b92 !important;"></i>
				                                    </a>
				                                    <h3  class="icon-box-title text-theme-colored">Certification Courses</h3>
				                                  </div>
				                                </div>
				                              </div>
				                            </div>
				                          </div>
				                       </div>
				                      <div class="card__back" data-bg-color="#202c45">
				                        <div class="card__text">
				                          <div class="display-table-parent p-30">
				                              <div class="display-table">
				                                <div class="display-table-cell">
				                                  <h3 id="specialhed" class="text-theme-color-2">Certification Courses</h3>
				                                  <p id="specialp" class="text-gray-lightgray">Web Designing, Web Development , React , PHP , NodeJs , Cloud , Docker , Flutter , MongoDB , .NET</p>
				                                  <a href="/Courses" class="btn btn-default mt-10"> Read More </a>
				                                </div>
				                              </div>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
			                  	</div>
			                @else
			                <div  class="col-lg-4 col-md-4 col-sm-4"   >
			                    <div class="card effect__hover" style="min-height: 243px !important;">
			                      <div class="card__front border-3px bg-lighter">
			                          <div class="card__text">
			                            <div class="display-table-parent">
			                              <div class="display-table">
			                                <div class="display-table-cell">
			                                  <div class="icon-box mb-0">
			                                    <a href="#" class="icon mb-0">
			                                      <i class="text-theme-colored pe-7s-note2 font-72" style="color: #087b92 !important;"></i>
			                                    </a>
			                                    <h3  class="icon-box-title text-theme-colored">Certification Courses</h3>
			                                  </div>
			                                </div>
			                              </div>
			                            </div>
			                          </div>
			                       </div>
			                      <div class="card__back" data-bg-color="#202c45">
			                        <div class="card__text">
			                          <div class="display-table-parent p-30">
			                              <div class="display-table">
			                                <div class="display-table-cell">
			                                  <h3 id="specialhed" class="text-theme-color-2">Certification Courses</h3>
			                                  <p id="specialp" class="text-gray-lightgray">Web Designing, Web Development , React , PHP , NodeJs , Cloud , Docker , Flutter , MongoDB , .NET</p>
			                                  <a href="/Courses" class="btn btn-default mt-10"> Read More </a>
			                                </div>
			                              </div>
			                          </div>
			                        </div>
			                      </div>
			                    </div>
		                  	</div>
		                  	@endif

		                  	@if($products->count()>0)
		                  		
		                  		<div  class="col-lg-4 col-md-4 col-sm-4"  >
								  <div class="card effect__hover" style="min-height: 243px !important;">
								    <div class="card__front border-3px bg-lighter">
								        <div class="card__text">
								          <div class="display-table-parent">
								            <div class="display-table">
								              <div class="display-table-cell">
								                <div class="icon-box mb-0">
								                  <a href="#" class="icon mb-0">
								                    <i class="text-theme-colored pe-7s-gift font-72" style="color: #087b92 !important;"></i>
								                  </a>
								                  <h3  class="icon-box-title text-theme-colored">Our Products</h3>
								                </div>
								              </div>
								            </div>
								          </div>
								        </div>
								     </div>
								    <div class="card__back" data-bg-color="#202c45">
								      <div class="card__text">
								        <div class="display-table-parent p-30">
								            <div class="display-table">
								              <div class="display-table-cell">
								                <h3 id="specialhed" class="text-theme-color-2">Our Products</h3>
								                <p id="specialp" class="text-gray-lightgray">Our Products  are positively associated with student achievement gains throughout a teacher's career</p>
								                <a href="/Products" class="btn btn-default mt-10"> Read More </a>
								              </div>
								            </div>
								        </div>
								      </div>
								    </div>
								  </div>  
								</div>
							@else
							<div  class="col-lg-4 col-md-4 col-sm-4"  >
							  <div class="card effect__hover" style="min-height: 243px !important;">
							    <div class="card__front border-3px bg-lighter">
							        <div class="card__text">
							          <div class="display-table-parent">
							            <div class="display-table">
							              <div class="display-table-cell">
							                <div class="icon-box mb-0">
							                  <a href="#" class="icon mb-0">
							                    <i class="text-theme-colored pe-7s-gift font-72" style="color: #087b92 !important;"></i>
							                  </a>
							                  <h3  class="icon-box-title text-theme-colored">Our Products</h3>
							                </div>
							              </div>
							            </div>
							          </div>
							        </div>
							     </div>
							    <div class="card__back" data-bg-color="#202c45">
							      <div class="card__text">
							        <div class="display-table-parent p-30">
							            <div class="display-table">
							              <div class="display-table-cell">
							                <h3 id="specialhed" class="text-theme-color-2">Our Products</h3>
							                <p id="specialp" class="text-gray-lightgray">Our Products  are positively associated with student achievement gains throughout a teacher's career</p>
							                <a href="/Products" class="btn btn-default mt-10"> Read More </a>
							              </div>
							            </div>
							        </div>
							      </div>
							    </div>
							  </div>  
							</div>
		                  	@endif

		                  	@if($services->count()>0)
		                  		
		                  		<div  class="col-lg-4 col-md-4 col-sm-4"  >
				                    <div class="card effect__hover" style="min-height: 243px !important; ">
				                      <div class="card__front border-3px bg-lighter">
				                          <div class="card__text">
				                            <div class="display-table-parent">
				                              <div class="display-table">
				                                <div class="display-table-cell">z
				                                  <div class="icon-box mb-0">
				                                    <a href="#" class="icon mb-0" style="
				                                    margin-top: -20px;">
				                                      <i class="text-theme-colored pe-7s-world font-72" style="color: #087b92 !important;"></i>
				                                    </a>
				                                    <h3  class="icon-box-title text-theme-colored" style="color: #626363 !important">Services</h3>
				                                  </div>
				                                </div>
				                              </div>
				                            </div>
				                          </div>
				                       </div>
				                      <div class="card__back" data-bg-color="#202c45">
				                        <div class="card__text">
				                          <div class="display-table-parent p-30">
				                              <div class="display-table">
				                                <div class="display-table-cell">
				                                  <h3 id="specialhed" class="text-theme-color-2">Services</h3>
				                                  <p id="specialp" class="text-gray-lightgray">our Services is a way of analyzing and building websites so that they can be found a lot easier 
				                                    when they are indexed by the Search Engines. </p>
				                                  <a href="/Services" class="btn btn-default mt-10"> Read More </a>
				                                </div>
				                              </div>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
			                    </div>
			                 @else
			                 <div  class="col-lg-4 col-md-4 col-sm-4"  >
				                    <div class="card effect__hover" style="min-height: 243px !important; ">
				                      <div class="card__front border-3px bg-lighter">
				                          <div class="card__text">
				                            <div class="display-table-parent">
				                              <div class="display-table">
				                                <div class="display-table-cell">z
				                                  <div class="icon-box mb-0">
				                                    <a href="#" class="icon mb-0" style="
				                                    margin-top: -20px;">
				                                      <i class="text-theme-colored pe-7s-target font-72" style="color: #087b92 !important;"></i>
				                                    </a>
				                                    <h3  class="icon-box-title text-theme-colored" style="color: #626363 !important">BootCamp</h3>
				                                  </div>
				                                </div>
				                              </div>
				                            </div>
				                          </div>
				                       </div>
				                      <div class="card__back" data-bg-color="#202c45">
				                        <div class="card__text">
				                          <div class="display-table-parent p-30">
				                              <div class="display-table">
				                                <div class="display-table-cell">
				                                  <h3 id="specialhed" class="text-theme-color-2">BootCamp</h3>
				                                  <p id="specialp" class="text-gray-lightgray">our Services is a way of analyzing and building websites so that they can be found a lot easier 
				                                    when they are indexed by the Search Engines. </p>
				                                  <a href="/Services" class="btn btn-default mt-10"> Read More </a>
				                                </div>
				                              </div>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
			                    </div>
		                  	@endif
		                  	<div  class="col-lg-4 col-md-4 col-sm-4"  style="margin-top: 10px !important">
		                    	<div class="card effect__hover" style="min-height: 243px !important; ">
		                      <div class="card__front border-3px bg-lighter">
		                          <div class="card__text">
		                            <div class="display-table-parent">
		                              <div class="display-table">
		                                <div class="display-table-cell">z
		                                  <div class="icon-box mb-0">
		                                    <a href="#" class="icon mb-0" style="
		                                    margin-top: -20px;">
		                                      <i class="text-theme-colored pe-7s-target font-72" style="color: #087b92 !important;"></i>
		                                    </a>
		                                    <h3  class="icon-box-title text-theme-colored" style="color: #626363 !important">BootCamp</h3>
		                                  </div>
		                                </div>
		                              </div>
		                            </div>
		                          </div>
		                       </div>
		                      <div class="card__back" data-bg-color="#202c45">
		                        <div class="card__text">
		                          <div class="display-table-parent p-30">
		                              <div class="display-table">
		                                <div class="display-table-test">
		                                  <h3 id="specialhed" class="text-theme-color-2">BootCamp</h3>
		                                  <p id="specialp" class="text-gray-lightgray">our Services is a way of analyzing and building websites so that they can be found a lot easier 
		                                    when they are indexed by the Search Engines. </p>
		                                  <a href="#" class="btn btn-default mt-10"> Read More </a>
		                                </div>
		                              </div>
		                          </div>
		                        </div>
		                      </div>
		                    	</div>
		                    </div>
		                  	<div  class="col-lg-4 col-md-4 col-sm-4" style="margin-top: 10px !important">
		                    	<div class="card effect__hover" style="min-height: 243px !important;">
		                      <div class="card__front border-3px bg-lighter">
		                          <div class="card__text">
		                            <div class="display-table-parent">
		                              <div class="display-table">
		                                <div class="display-table-cell">
		                                  <div class="icon-box mb-0">
		                                    <a href="#" class="icon mb-0">
		                                      <i class="text-theme-colored pe-7s-display1 font-72" style="color: #087b92 !important;"></i>
		                                    </a>
		                                    <h3  class="icon-box-title text-theme-colored">Designing and Printing</h3>
		                                  </div>
		                                </div>
		                              </div>
		                            </div>
		                          </div>
		                       </div>
		                      <div class="card__back" data-bg-color="#202c45">
		                        <div class="card__text">
		                          <div class="display-table-parent p-30">
		                              <div class="display-table">
		                                <div class="display-table-cell">
		                                  <h3 id="specialhed" class="text-theme-color-2">Designing and Printing</h3>
		                                  <p id="specialp" class="text-gray-lightgray">As an IT Service Provider, OPTIMUM TECH strives to provide our customers quality
		                                     application development services.</p>
		                                  <a href="#" class="btn btn-default mt-10"> Read More </a>
		                                </div>
		                              </div>
		                          </div>
		                        </div>
		                      </div>
		                    	</div>
		                  	</div>
		                  	<div  class="col-lg-4 col-md-4 col-sm-4" style="margin-top: 10px !important">
		                    	<div class="card effect__hover" style="min-height: 243px !important;">
		                      <div class="card__front border-3px bg-lighter">
		                          <div class="card__text">
		                            <div class="display-table-parent">
		                              <div class="display-table">
		                                <div class="display-table-cell">
		                                  <div class="icon-box mb-0">
		                                    <a href="#" class="icon mb-0" style="
		                                    margin-top: -10px;">
		                                      <i class="text-theme-colored pe-7s-plane font-72" style="color: #087b92 !important;"></i>
		                                    </a>
		                                    <h3  class="icon-box-title text-theme-colored">Tourism</h3>
		                                  </div>
		                                </div>
		                              </div>
		                            </div>
		                          </div>
		                       </div>
		                      <div class="card__back" data-bg-color="#202c45">
		                        <div class="card__text">
		                          <div class="display-table-parent p-30">
		                              <div class="display-table">
		                                <div class="display-table-cell">
		                                  <h3 id="specialhed" class="text-theme-color-2">Tourism</h3>
		                                  <p id="specialp" class="text-gray-lightgray"> Tourism is travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours.
		                                   </p>
		                                  <a href="#" class="btn btn-default mt-10"> Read More </a>
		                                </div>
		                              </div>
		                          </div>
		                        </div>
		                      </div>
		                    	</div>
		                  	</div>
		                </div>


		            </div>
		            </div>
		          </div>
		        </div>
	      	</section>
			
		   
	     
	      	
	      	<!-- Section: Why Choose Us -->
		    <section id="event" class="">
		        <div class="container pb-50">
		          <div class="section-content">
		            <div class="row">
			              <div class="col-md-6" style="overflow-y: auto;">
			              	@if($events->count()>0)
			              		<h3 class="text-uppercase line-bottom mt-5 line-height-1"><i class="fa fa-calendar mr-10"></i>Upcoming
			                  		<span class="text-theme-color-2">Events</span></h3>	
			                  	@foreach($events as $event)
			                  		@php $img = 'storage/'.$event->img; @endphp
			                  		<article class="post media-post clearfix pb-0 mb-10">
					                  <a href="{{ route('EventDetail',$event->id) }}" target="_blank" class="post-thumb mr-20"><img alt="" src="{{ asset($img) }}"></a>
					                  <div class="post-right">
					                    <h4 class="mt-0 mb-5"><a href="{{ route('EventDetail',$event->id) }}" target="_blank">{{ ucwords($event->title) }}</a></h4>
					                    <ul class="list-inline font-12 mb-5">
					                      <li class="pr-0"><i class="fa fa-calendar mr-5"></i> <!--June 26, 2016 --> {{ date('F',strtotime($event->event_date)) }} {{ date('d',strtotime($event->event_date)) }}, {{ date('Y',strtotime($event->event_date)) }},{{ date('h:i a',strtotime($event->event_time)) }} |</li>
					                      <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>{{ $event->address }}</li>
					                    </ul>
					                    <p class="mb-0 font-13">{{ \Illuminate\Support\Str::limit($event->detail, 100, $end='...') }}</p>
					                    <a class="text-theme-colored font-13" href="{{ route('EventDetail',$event->id) }}" target="_blank">Read More →</a>
					                  </div>
					                </article>

			                  	@endforeach
			              	@endif
			              	<a href="{{ route('Events') }}" class="btn btn-primary events">View All Events</a>
			              </div>
			              <div class="col-md-6">
			              	   <h2 class="mt-5 text-uppercase font-28 line-bottom line-height-1">Latest <span
				                    class="text-theme-color-2 font-weight-400">News</span></h2>
				                @if($news->count()>0)
				                <div class="autoplay3" >
				                	@foreach($news as $row)
				                		@php $img = 'storage/'.$row->img @endphp
				                		<div class="item" data-wow-duration="1s" data-wow-delay="0.3s">
						                    <article class="post clearfix mb-sm-30">
						                      <div class="entry-header">
						                        <div class="post-thumb thumb">
						                          <a href="{{ route('NewsDetail',$row->id) }}" target="_blank"> <img src="{{  asset($img) }}" alt="" class="img-responsive img-fullwidth"></a>
						                        </div>
						                      </div>
						                      <div class="entry-content p-20 pr-10 bg-white">
						                        <div class="entry-meta media mt-0 no-bg no-border">
						                          {{--<div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
						                            <ul>
						                              <li class="font-16 text-white font-weight-600 border-bottom">{{ date('d',strtotime($row->news_date)) }}</li>
						                              <li class="font-12 text-white text-uppercase">{{ date('M',strtotime($row->news_date)) }}</li>
						                            </ul>
						                          </div>--}}
						                          <div class="media-body pl-15">
						                            <div class="event-content pull-left flip">
						                              <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('NewsDetail',$row->id) }}">{{ ucfirst($row->title) }}</a>
						                              </h4>
						                              <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
						                                  class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
						                              <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
						                                  class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> -->
						                            </div>
						                          </div>
						                        </div>
						                        <p class="mt-10">{{ \Illuminate\Support\Str::limit(ucfirst($row->detail), 90, $end='...') }}</p>
						                        <a href="{{ route('NewsDetail',$row->id) }}" target="_blank" class="btn-read-more">Read more</a>
						                        <div class="clearfix"></div>
						                      </div>
						                    </article>
						                  </div>
				                	@endforeach
				                  
				                </div>
			                @endif
			              </div>
		              
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		     </section>	


	       <!-- Section: blog -->
	      
       		<section id="blog" class="bg-lighter">
		        <div class="container" style="padding-top: 0px !important ;">
			          <div class="section-title mb-10">
			            <div class="row mt-5">
			                <div class="col-md-6">
				              	<h3 class="line-bottom mt-0 line-height-1">Why <span class="text-theme-color-2">Choose Us?</span></h3>
			                </div>

			                <div class="col-md-6">
				              	@if($news->count()>0)
				                	<h2 class="mt-5 text-uppercase font-28 line-bottom line-height-1">Clients <span
				                    class="text-theme-color-2 font-weight-400">Reviews</span></h2>
				                @endif
			               </div>
			            </div>
			          </div>

			          <div class="section-content" style="height: 360px !important;">
			            <div class="row">
			              <!-- <div class="col-md-4"></div> -->
			              <div class="col-md-6">
			              	<p class="mb-10">Optimum-Tech  has played a significant role in the development of web based projects. They have been able to become a central part of the team punctually and develop amazing features that perform under the highest performance and demanded requirements possible</p>
							<div id="accordion1" class="panel-group accordion">
							<div class="panel">
								<div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse"
									href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> Customer Focus</a> 
								</div>
								<div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
									<div class="panel-content">
										<p>We make it our business to comprehend our customers’ business, targets and needs, and we work together with them to discover best results that reaches them or surpass them.</p>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12"
									class="" aria-expanded="true"> <span class="open-sub"></span> On-time Delivery</a>
								</div>
								<div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
									<div class="panel-content">
										<p>Our outsourcing and offshore background, our skilled developers, advanced advertisers, prevalent collective devices, and successful project administration, empower coordinated effort and effectively convey projects on time.</p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13"
									class="" aria-expanded="true"> <span class="open-sub"></span>Customer Privacy</a>
								</div>
								<div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
									<div class="panel-content">
										<p>We promise a high level of Privacy and security in every undertaking. All customer data remains strictly secret.</p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14"
									class="" aria-expanded="true"> <span class="open-sub"></span> Quality</a>
								</div>
								<div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
									<div class="panel-content">
										<p>We have created a repeatable, powerful software development methodology surveyed at SEI CMM level 3 that guarantees the high caliber of administration and effective conveyance to our worldwide customer base.</p>
									</div>
								</div>
							</div>
			              </div>
			          </div>
			              <div class="col-md-6">
			                <div class="container">
			                  <div class="row">
			                    <div class="col-sm-12">
			                        @if($testimonials->count()>0)

			                      		<!-- <h3><strong>Testimonial</strong></h3> -->
					                     <!-- <div class="seprator"></div> -->
					                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
					                        <!-- Wrapper for slides -->
					                    	<div class="carousel-inner">
					                    		@php $i=1; @endphp
					                    		@foreach($testimonials as $testimonial)
					                    			@php $img = 'storage/'.$testimonial->img @endphp
					                    			<div class="item <?php if($i==1){ echo "active"; } ?>">
							                            <div class="row" style="padding: 20px">
							                              <button style="border: none;"><i class="fa fa-quote-left testimonial_fa"
							                                  aria-hidden="true"></i></button>
							                              <p class="testimonial_para">{{ ucfirst($testimonial->detail) }}</p><br>
							                              <div class="row">
							                                <div class="col-sm-2">
							                                  <img src="{{ asset($img) }}"
							                                    class="img-responsive" style="width: 80px">
							                                </div>
							                                <div class="col-sm-10">
							                                  <h4><strong>{{ $testimonial->name }}</strong></h4>
							                                  <p class="testimonial_subtitle"><span>{{ $testimonial->designation }}</span><br>
							                                   <!--  <span>Officeal All Star Cafe</span> -->
							                                  </p>
							                                </div>
							                              </div>
							                            </div>
							                        </div>
							                        @php $i+=1; @endphp
					                    		@endforeach
					                          
					                        </div>
					                    </div>
				                        <div class="controls testimonial_control pull-right">
					                        <a class="left fa fa-chevron-left btn btn-default testimonial_btn"
					                          href="#myCarousel" data-slide="prev"></a>

					                        <a class="right fa fa-chevron-right btn btn-default testimonial_btn"
				                          href="#myCarousel" data-slide="next"></a>
				                        </div>

			                        @endif
			                    </div>
			                  </div>
			                </div>
			              </div>


			            </div>
			          </div>
		     
		        </div>
	       </section>
	       <!-- Section: team -->
		    @if($members->count()>0)
		    	<!-- Section: Team v.1 -->
				<section class="team-section text-center my-5 mt-5">
			  	<div class="py-5 bg-white team1">
				  <div class="container">
				    <div class="row mb-3">
				      <div class="col-md-7 text-center">
				         <h2 class="mt-5 text-uppercase font-28 line-bottom line-height-1 text-left">Our <span class="text-theme-color-2 font-weight-400"> Team Members</span></h2>
				      </div>
				    </div>
				    <div class="row">
				      <!-- column  -->
			      	@foreach($members as $member)
		            @php $img = 'storage/'.$member->img @endphp
				      <div class="col-lg-6">
				        <div class=" card card-shadow border-0 mb-10 team_card">
				          <!-- Row -->
				          <div class="row no-gutters">
				            <div class="col-md-5 pro-pic" style="background:url() center center no-repeat / cover">
				            	<img src="{{  asset($img) }}" alt="">
				              <!-- <div class="card-img-overlay">
				                <ul class="list-inline position-relative text-center">
				                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-facebook"></i></a></li>
				                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-twitter"></i></a></li>
				                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-instagram"></i></a></li>
				                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block text-white px-1"><i class="icon-social-behance"></i></a></li>
				                </ul>
				              </div> -->
				            </div>
				            <div class="col-md-7 bg-white short-detail">
				              <div class="p-4 make_black">
				                <h3 class="mb-3 font-weight-medium">{{ $member->name }}</h3>
				                <p class="detail" style="margin-top: -15px;"><small>___{{ $member->designation }}___</small></p>
				                <p class="detail" style="margin-top: 0px;">
				                	{!! \Illuminate\Support\Str::limit(trim($member->detail),150,$end="...") !!}
				                </p>
				                <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
			                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			                    </ul>
			                     <a class="btn btn-theme-colored btn-sm pull-right flip" href="{{ route('TeamDetail',$member->id) }}" target="_blank">Detail</a>
				              </div>
				            </div>
				          </div>
				          <!-- Row -->
				        </div> 
				      </div>
				     @endforeach
				    </div>
				  </div>
				</div>
				</section>

		    @endif

	    @if($clients->count()>0)

	    	<section class="mt-5" style="z-index: 12;">
		        <div class="container pt-10 mt-10">
		          <div class="row">
		            <div class="col-md-12">
		              <h3 class="line-bottom mt-0 line-height-1">Our<span class="text-theme-color-2"> Clients</span></h3>
		              </div>
		            </div>
		          </div>
		        </div>
		    </section>

		    <section class="clients bg-theme-color-2" style="height: 170px !important;">
		      <div class="container pt-10 pb-0">
		        <div class="row">
		          <div class="col-md-12">
		            <!-- Section: Clients -->
		            <div class="autoplay2 clients-logo transparent text-center mr-10">
		            	@foreach($clients as $client)
		            		@php $img = 'storage/'.$client->img;  @endphp
		            		<div class="item"><figure> 
				                <img src="{{ asset($img) }}" alt="Trulli" data-toggle="tooltip" data-placement="right" title="{{ ucwords($client->name) }}"  >
				              </figure>
				              </div>
		            	@endforeach
		             
		            </div>
		          </div>
		        </div>
		      </div>
		    </section>

	    @endif
	    
	</div>


@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection