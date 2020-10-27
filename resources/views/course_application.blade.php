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
	    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('storage/images/bg/bg3.jpg')}}">
	      <div class="container pt-70 pb-20">
	        <!-- Section Content -->
	        <div class="section-content">
	          <div class="row">
	            <div class="col-md-12">
	              <h2 class="title text-white">Course Registration</h3>
	              <ul class="list-inline text-white">
	                <li><a href="/" class="text-gray"> Home</a>  &nbsp;&nbsp;/ </li>
	                <li><span class="text-gray">Registration</span></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>

	    <section>
	      <div class="container">
	        <div class="section-content">
	          <div class="row mt-30">
	            <form id="checkout-form" action="{{ route('Apply') }}" method="post" enctype="multipart/form-data">
	            	@csrf
	              <div class="col-md-2"></div>	
	              <div class="col-md-8">
	                <div class="billing-details">
	                  <h3 class="mb-30" style="margin-left: -17px !important;">Registration</h3>
	                  <div class="row">
	                  	@if(Session::has('msg'))
	                  		<div class="alert alert-success">{{ Session::get('msg') }}</div>
	                  	@endif

	                  	@if(Session::has('warningMsg'))
	                  		<div class="alert alert-warning">{{ Session::get('warningMsg') }}</div>
	                  	@endif
	                    
	                  	<div class="row">
	                  		
	                  		<div class="form-group col-md-6">
		                      <label>Applying For</label>
		                      <select class="form-control" name="course" id="course">
		                        <option disabled="" selected="">Select Course</option>
		                        @foreach($courses as $row)
		                        	<option @if($course->id==$row->id) selected @endif value="{{ $row->id }}">{{ ucwords($row->title) }}</option>
		                        @endforeach
		                      </select>
		                      <p id="course_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
		                      {{--@error('province')
		                      	  <p class="text-danger">{{ $message }}</p>
		                       @enderror--}}
		                    </div>

		                    <div class="form-group col-md-6">
		                      <label>Available Timing</label>
		                      <select class="form-control" name="shift" id="shift">
		                        <option disabled="" selected="">Select Your Shift</option>
		                        <option value="morning">Morning</option>
		                       	<option value="evening">Evening</option>
		                      </select>
		                      <p id="shift_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
		                     
		                    </div>

	                  	</div>

	                    <div class="row">
	                    	
	                    	<div class="form-group col-md-6">
		                      <label for="name">Name</label>
		                   
		                      <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Name">
		                      <p id="name_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
		                      {{--@error('name')
		                      	  <p class="text-danger mt-3">{{ $message }}</p>
		                      @enderror--}}
		                    </div>
		                    
		                    <div class="form-group col-md-6">
		                      <label for="father_name">Father Name</label>
		                      <input id="father_name" type="text" name="father_name" value="{{ old('father_name') }}" class="form-control" placeholder="Enter Father Name">
		                       <p id="father_name_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
		                      {{--@error('father_name')
		                      	  <p class="text-danger mt-3">{{ $message }}</p>
		                      @enderror--}}
		                    </div>

	                    </div>

                        <div class="row">
                        	
                        	<div class="form-group col-md-6">
		                        <label for="email">Email Address</label>
		                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email Adress Ex.test@gmail.com">
		                         <p id="email_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
		                        {{--@error('email')
		                      	  <p class="text-danger mt-3">{{ $message }}</p>
		                        @enderror--}}
	                        </div>

	                        <div class="form-group col-md-6">
		                        <label for="cnic">Identity Card Number</label>
		                        <input id="cnic" type="text" name="cnic" maxlength="15" value="{{ old('cnic') }}" class="form-control" placeholder="Enter CNIC Number Ex. 32325-45678903-2">
		                         <p id="cnic_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
		                        {{--@error('cnic')
		                      	  <p class="text-danger mt-3">{{ $message }}</p>
		                        @enderror--}}
	                        </div>

                        </div>

	                    <div class="row">
	                    	
	                    	<div class="form-group col-md-6">
		                      <label for="date">Date Of Birth</label>
		                      <input id="date" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control">
		                       <p id="date_error" class="text-danger" style="color: #ff7f7f;"></p>
		                      {{--@error('city')
		                      	  <p class="text-danger">{{ $message }}</p>
		                       @enderror--}}
		                    </div>

		                    <div class="form-group col-md-6">
		                      <label>Gender</label>
		                      <select class="form-control" name="gender" id="gender">
		                        <option disabled="" selected="">Select</option>
		                       	<option value="male">Male</option>
		                       	<option value="female">Female</option>
		                       	<option value="other">Other</option>
		                      </select>
		                      <p id="gender_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
		                      
		                    </div>

	                    </div>

	                    <div class="form-group">
	                        <label for="phone">Phone Number</label>
	                        <input id="phone" type="text" name="phone" maxlength="11" value="{{ old('phone') }}" class="form-control" placeholder="Enter Phone Number Ex. 03014576890">
	                         <p id="phone_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
	                        {{--@error('phone')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                        @enderror--}}
	                    </div>

	                    <div class="form-group">
	                        <label for="address">Address</label>
	                        <textarea id="address" name="address" class="form-control" value="{{ old('address') }}" placeholder="Enter Street Address">{{ old('address') }}</textarea>
	                        <p id="address_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
	                        {{--@error('address')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                        @enderror--}}
	                    </div>

	                    <div class="form-group">
	                        <label for="institute">Institute Name</label>
	                        <textarea id="institute" name="institute_name" class="form-control" value="{{ old('institute_name') }}" placeholder="Enter Institute Name">{{ old('address') }}</textarea>
	                        <p id="institute_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
	                        {{--@error('institute_name')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                        @enderror--}}
	                    </div>
	                    
	                    <div class="form-group">
	                        <label for="current_degree">Current Degree</label>
	                        <textarea id="current_degree" name="current_degree" class="form-control" value="{{ old('current_degree') }}" placeholder="Enter Current Degree">{{ old('current_degree') }}</textarea>
	                        <p id="current_degree_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
	                        {{--@error('current_degree')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                        @enderror--}}
	                    </div>

	                    <div class="form-group">
	                        <label for="degree_title">Degree Title</label>
	                        <textarea id="degree_title" name="degree_title" class="form-control" placeholder="Enter Institute Name">{{ old('degree_title') }}</textarea>
	                        <p id="degree_title_error" class="text-danger mt-1" style="color: #ff7f7f;"></p>
	                        {{--@error('degree_title')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                        @enderror--}}
	                    </div>
   		
	                    <div class="form-group">
	                    	<label>Your Latest Image</label>
	                    	<input type="file" name="user_img" id="user_img">
	                    	<p class="text-danger" id="user_img_error" style="color: #ff7f7f;"></p>
	                    	@error('userWarningMsg')
		                       	  <p class="text-danger mt-3">{{ $message }}</p>
		                    @enderror
	                    </div>

	                    <div class="col-md-12" style="margin-top: 10px;">
	                    	<label>Additional Information</label>
	                    	<div style="border: 1px solid #ccc;padding: 10px 10px;color: #000; margin-bottom: 30px;">
		                    	<h3>Registration Fee   : 1500 PKR</h3>
	                    	</div>
		                </div>

	                  </div>
	                </div>
	              </div>
	              <div class="col-md-2"></div>
	             
	              <div class="col-md-12">
	                <div class="text-center"> <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px mb-30 mySubmit" disabled="" data-loading-text="Please wait...">Submit</button> </div>
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
	    </section>
  <!-- end main-content -->
  		<div class="myModel" >
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
        </div>
  </div>

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
              margin-left: 20%;
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
              color: #fff;
              text-decoration: none;
              cursor: pointer;
            }

            @media only screen and (max-width: 700px){
              .modal-content {
                width: 100%;
              }
            }                      
        </style>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->


@section('script')
	
	<script type="text/javascript">
		

		function validation_field_check(id,check,error,pattern,minlength,maxlength)
		{
			id.keyup(function(e)
			{
				// var keyCode = e.keyCode || e.which;
				// if(!pattern.test(String.fromCharCode(keyCode)))
				// {
				// 	$('#'+error+'_error').show();
				// 	id.css('border','1px solid #ff7f7f');
				// 	$('#'+error+'_error').text('Only '+check+' Are Allowed');
				if(id.val() =='')
				{
					$('#'+error+'_error').show();
					id.css('border','1px solid #ff7f7f');
					$('#'+error+'_error').text('Minimum '+minlength +' Length Is Allowed');
				}
				else if(!pattern.test(id.val()))
				{
					$('#'+error+'_error').show();
					id.css('border','1px solid #ff7f7f');
					$('#'+error+'_error').text('Only '+check+' Are Allowed');
				}
				else if(id.val().length > maxlength)
				{
					$('#'+error+'_error').show();
					id.css('border','1px solid #ff7f7f');
					$('#'+error+'_error').text('Maximum '+maxlength +' Length Is Allowed');
				}

				else if(id.val().length < minlength)
				{
					$('#'+error+'_error').show();
					id.css('border','1px solid #ff7f7f');
					$('#'+error+'_error').text('Minimum '+minlength +' Length Is Allowed');
				}
				else
				{
					$('#'+error+'_error').hide();
					id.css('border','1px solid green');
				}
			});
		}

		function cnic_fun(id,check,error,pattern,minlength,maxlength)
		{
			id.keyup(function(e){
				if(!pattern.test(id.val()))
				{
					$('#'+error+'_error').show();
					id.css('border','1px solid #ff7f7f');
					$('#'+error+'_error').text('Invalid Identity Card Number');
				}
				else
				{
					$('#'+error+'_error').hide();
					id.css('border','1px solid green');
				}

				// else if(pattern.test(id.val()) && id.val().length >5 && id.val().length ==6 )
				// {
				// 	var foo =id.val().split("-").join(""); // remove hyphens
				// 	if (foo.length > 0) {
				// 	    foo = foo.match(new RegExp('.{1,5}', 'g')).join("-");
				// 	}
				// 	id.val(foo);
					
				// }

				// else if(pattern.test(id.val()) && id.val().length >6 && id.val().length ==13 )
				// {
				// 	let foo =id.val().split("-").join(""); // remove hyphens
				// 	if (foo.length > 0) {
				// 	     foo = foo.match(new RegExp('.{6,13}', 'g')).join("-");
				// 	}
				// 	id.val(foo);
					
				// }
			});
		}


		function email_fun(id,check,error,pattern,minlength,maxlength)
		{
			id.keyup(function(e){
				if(!pattern.test(id.val()))
				{
					$('#'+error+'_error').show();
					id.css('border','1px solid #ff7f7f');
					$('#'+error+'_error').text(check);
				}
				else
				{
					$('#'+error+'_error').hide();
					id.css('border','1px solid green');
				}
			});
		}

		function file_blank_check(id,check,error)
		{
			var value = id[0].files.length;
			if(value === 0)
			{
				$('#'+error+'_error').show();
				$('#'+error+'_error').text('The '+ check +' image is required');
			}
			else
			{ $('#'+error+'_error').hide(); }
			id.change(function(){
				var value = id[0].files.length;
				if(value === 0)
				{
					$('#'+error+'_error').show();
					$('#'+error+'_error').text('The '+ check +' image is required');
				}
				else
				{ $('#'+error+'_error').hide(); }
			});

		}

		function date_field_check(id,error,check)
		{
			var value = id.val();
			var c_error = error.replace('_',' ');
			if(id.val() =='')
			{
				$('#'+error+'_error').show();
				id.css('border','1px solid #ff7f7f');
				$('#'+error+'_error').text('The '+check +' field is required');
			}

			else
			{
				$('#'+error+'_error').hide();
				id.css('border','1px solid green');
			}
		}

		function blank_field_check(id,check,error,pattern,minlength,maxlength)
		{
			var value = id.val();
			var c_error = error.replace('_',' ');
			if(value=='')
			{
				$('#'+error+'_error').show();
				id.css('border','1px solid #ff7f7f');
				$('#'+error+'_error').text('The '+c_error+" field is required");
				validation_field_check(id,check,error,pattern,minlength,maxlength);
			}
			else
			{ validation_field_check(id,check,error,pattern,minlength,maxlength); }

		}

		function email_blank_field_check(id,check,error,pattern,minlength,maxlength)
		{
			var value = id.val();
			var c_error = error.replace('_',' ');
			if(value=='')
			{
				$('#'+error+'_error').show();
				id.css('border','1px solid #ff7f7f');
				$('#'+error+'_error').text('The '+c_error+" field is required");
				email_fun(id,check,error,pattern,minlength,maxlength);
			}
			else
			{ email_fun(id,check,error,pattern,minlength,maxlength); }

		}

		function cnic_blank_field_check(id,check,error,pattern,minlength,maxlength)
		{
			var value = id.val();
			var c_error = error.replace('_',' ');
			if(value=='')
			{
				$('#'+error+'_error').show();
				id.css('border','1px solid #ff7f7f');
				$('#'+error+'_error').text('The '+c_error+" field is required");
				cnic_fun(id,check,error,pattern,minlength,maxlength);
			}
			else
			{ cnic_fun(id,check,error,pattern,minlength,maxlength); }

		}

		function select_check(id,error,)
		{
			if (id.val()==null)
			{ 
				id.change(function(){
					if (id.val()!=null)
					{
						$("#"+error+"_error").hide();
						id.css('border','1px solid green');
						$('#'+error+'_error').text('The '+error+" field is required");
					}
				});
				$("#"+error+"_error").show();
				id.css('border','1px solid #ff7f7f');
				$('#'+error+'_error').text('The '+error+" field is required");
			}
			else
			{
				$("#"+error+"_error").hide();
				id.css('border','1px solid green');

			}
		}

		$(document).ready(function(){


			blank_field_check($('#name'),'character','name',/^[a-zA-Z ]+$/,5,30);
			blank_field_check($('#father_name'),'character','father_name',/^[a-zA-Z ]+$/,5,30);
			blank_field_check($('#address'),'character and number','address',/^[a-zA-Z0-9 ]*$/,5,100);
			blank_field_check($('#institute'),'character and number','institute',/^[a-zA-Z0-9 ]*$/,5,100);
			blank_field_check($('#current_degree'),'character and number','current_degree',/^[a-zA-Z0-9 ]*$/,5,100);
			blank_field_check($('#degree_title'),'character and number','degree_title',/^[a-zA-Z0-9 ]*$/,5,100);
			blank_field_check($('#last_name'),'charactoer','last_name',/^[a-zA-Z]+$/,5,30);
			blank_field_check($('#phone'),'numbers','phone',/^[0-9]+$/,11,11);
			blank_field_check($('#zip'),'numbers','zip',/^[0-9]+$/,3,5);
			cnic_blank_field_check($('#cnic'),'numbers','cnic',new RegExp('^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$'),15,15);
			email_blank_field_check($('#email'),'Enter Valid Email Address','email',/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i,25,50);
			select_check($('#province'),'province');
			date_field_check($('#date'),'date','date of birth');
			select_check($('#country'),'country');
			select_check($('#course'),'course');
			select_check($('#shift'),'shift');
			select_check($('#gender'),'gender');
			if($('#payment').val()>0){file_blank_check($('#img'),'payment','payment_img')};
			file_blank_check($('#user_img'),'user','user_img');

			$('#date').change(function(){date_field_check($('#date'),'date','date of birth');});

			setInterval(function(){
				if($('#name_error').is(':hidden') && $('#father_name_error').is(':hidden') && $('#email_error').is(':hidden') && $('#cnic_error').is(':hidden') && $('#phone_error').is(':hidden') && $('#address_error').is(':hidden') && $('#current_degree_error').is(':hidden') && $('#degree_title_error').is(':hidden') && $('#user_img_error').is(':hidden') && $('#course_error').is(':hidden') && $('#shift_error').is(':hidden') && $('#institute_error').is(':hidden') && $('#date_error').is(':hidden') && $('#gender_error').is(':hidden'))
					{
						$('.mySubmit').removeAttr('disabled','disabled');
					}

			}, 1000);
		});

	</script>

@endsection 