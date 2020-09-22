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
      width: 70% !important;
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
  width: 70%;
  height: auto;
  min-height: 125px;
  border-radius: 40px;
  box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
  padding-bottom: 0% !important;
  background-color: #202c45;
  border-left: 5px solid #f2184f;
  color: white;
}
.card p{
  margin-top: 0px;
  font-size: 17px;
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
    max-width: 62%;
    /*border-radius: 40px;*/
    object-fit: cover;
    /* opacity: 0.3; */
    margin-top: 6px;
    margin-left: 35px;
    margin-top: 20px;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  /*font-weight: bold;*/
  /*font-size: 30px;*/
  /*margin-top: -146px;*/
  /*height: 0px;*/
  color: #626363;
  margin-top: 12px;
}

/* .card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
} */
.card h3{ color: white;  }
.card:hover  h3{
  color: white !important;
}
.card  p{
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
      <div class="container pt-70 pb-20 ml-10 mr-10">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Teachers Details</h2>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Experts Details -->
    <section>
      <div class="container pb-20 ml-10 mr-10">
        <div class="section-content">
          <div class="row">
            <div class="col-md-3 mt-60">
              <div class="thumb">
                @php $img='storage/'.$team->img @endphp
                <img src="{{ asset($img) }}" alt="" style="height: 100%;width: 100%;">
              </div>
            </div>
            <div class="col-md-9 mt-60">
              <h4 class="name font-24 mt-0 mb-0">{{ $team->name }}</h4>
              <h5 class="mt-5 text-theme-color-2">{{ $team->designation }}</h5>
                <p style="text-align: justify;">{!!$team->detail !!}</p>
                
            </div>
          </div>
          <div class="row mt-30">
            <div class="col-md-6">
              <h4 class="line-bottom">About Me:</h4>
              <div class="volunteer-address">
                <div class="cards-list">
                  @if($team->education!="")
                  <div class="card 1">
                    <div class="row">
                      <div class="col-md-3">
                          <div class="card_image">
                            <i class="fa fa-graduation-cap" style="font-size: 50px;margin-top: 30px;"></i>
                            <!-- <img src="{{asset('assets/images/education.png')}}" alt="">  -->
                          </div>
                      </div>
                      <div class="col-md-9">
                          <div class="card_title">
                            <h3 class="mt-0">Qualification</h3>
                            <p>{{ $team->education }}</p>
                          </div>
                      </div>
                    </div>
                  </div>
                  @endif

                  @if($team->experience!="")
                   <div class="card 2">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card_image">
                         <i class="fa fa-black-tie" style="font-size: 50px;margin-top: 30px;"></i>
                         <!--  <img src="{{asset('assets/images/experience.webp')}}" alt="">  -->
                         </div>
                      </div>
                      <div class="col-md-9">
                        <div class="card_title title-white">
                          <h3 class="mt-0">Experience:</h3>
                          <p>{{ $team->experience}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endif
                  @if($team->address!="")
                  <div class="card 3">
                    <div class="row">
                        <div class="col-md-3">
                          <div class="card_image">
                            <i class="fa fa-map-marker" style="font-size: 50px;margin-top: 30px;"></i>
                            <!-- <img src="{{asset('assets/images/location.png')}}" alt="">  -->
                          </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card_title">
                              <h3 class="mt-0">Address:</h3>
                              <p>{{ $team->address }}</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  @endif
                  @if($team->phone!="" || $team->email !="")
                    <div class="card 4">
                      <div class="row">
                          <div class="col-md-3">
                          <div class="card_image">
                            <i class="fa fa-phone" style="font-size: 50px;margin-top: 30px;"></i>
                            <!-- <img src="{{asset('assets/images/phone.png')}}" alt=""> --> 
                          </div>
                          </div>
                          <div class="col-md-9">
                              <div class="card_title title-black">
                                <h3 class="mt-0">Contact:</h3>
                                 <p>
                                    @if($team->phone !='')
                                      <span>Phone:</span><a href="tel:{{ str_replace(' ','',$team->phone) }}">{{ $team->phone }}</a><br><span>  </span>
                                    @endif

                                     @if($team->email !='')
                                       <span>Email:</span> <a href="mailto:{{ $team->email }}">{{ $team->email }}</a>
                                    @endif
                                  </p>
                              </div>
                          </div>
                      </div>
                    </div>
                    @endif
                </div> 
              </div>
            </div>
            <div class="col-md-6">
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
                  <textarea rows="11" placeholder="Enter Message" id="contact_message" name="contact_message" required class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <button data-loading-text="Please wait..." class="btn btn-flat btn-dark btn-theme-colored mt-12" type="submit">Send your message</button>
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