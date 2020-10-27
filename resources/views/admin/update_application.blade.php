@extends('layouts.basic')

@section('head')
	@include('includes.admin_head')
@endsection<!-- end head -->

@section('header')
	@include('includes.admin_header')
@endsection<!-- end header -->


@section('content')
	
	 <div class="main-content">

        <div class="page-content">

            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-1">Update Application
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>

                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                   
                      
                      
                      
                            <div class="card">
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="home-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
            
                                                    <h4 class="header-title"> Update Application </h4>
                                                    <form action="{{ route('application.update',$application->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="row">
                                                        @if(Session::has('msg'))
                                                            <div class="alert alert-success">{{ Session::get('msg') }}</div>
                                                        @endif

                                                        @if(Session::has('warningMsg'))
                                                            <div class="alert alert-warning">{{ Session::get('warningMsg') }}</div>
                                                        @endif

                                                            <div class="form-group col-md-6">
                                                              <label>Applying For</label>
                                                              <select class="form-control" name="course" id="course">
                                                                <option disabled="" selected="">Select Course</option>
                                                                @foreach($courses as $row)
                                                                    <option @if($application->course_id==$row->id) selected @endif value="{{ $row->id }}">{{ ucwords($row->title) }}</option>
                                                                @endforeach
                                                              </select>
                                                              @error('course')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                              <label>Available Timing</label>
                                                              <select class="form-control" name="shift" id="shift">
                                                                <option disabled="" selected="">Select Your Shift</option>
                                                                <option @if($application->shift=='morning') selected @endif value="morning">Morning</option>
                                                                <option @if($application->shift=='evening') selected @endif value="evening">Evening</option>
                                                              </select>
                                                               @error('shift')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                             
                                                            </div>
                                                        
                                                            <div class="form-group col-md-6">
                                                              <label for="name">Name</label>
                                                           
                                                              <input id="name" type="text" name="name" value="{{ $application->first_name }}" class="form-control" placeholder="Enter Name">
                                                              @error('name')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                              @enderror
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                              <label for="father_name">Father Name</label>
                                                              <input id="father_name" type="text" name="father_name" value="{{ $application->last_name }}" class="form-control" placeholder="Enter Father Name">
                                                              @error('father_name')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                              @enderror
                                                            </div>
                                                       

                                                             <div class="form-group col-md-6">
                                                                <label for="email">Email Address</label>
                                                                <input id="email" type="email" name="email" value="{{ $application->email }}" class="form-control" placeholder="Enter Email Adress Ex.test@gmail.com">
                                                                @error('email')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label for="cnic">Identity Card Number</label>
                                                                <input id="cnic" type="text" name="cnic" maxlength="15" value="{{ $application->cnic }}" class="form-control" placeholder="Enter CNIC Number Ex. 32325-45678903-2">
                                                                @error('cnic')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                              <label for="date">Date Of Birth</label>
                                                              <input id="date" type="date" name="date_of_birth" value="{{ $application->date_of_birth }}" class="form-control">
                                                               <p id="date_error" class="text-danger" style="color: #ff7f7f;"></p>
                                                              @error('date_of_birth')
                                                                  <p class="text-danger">{{ $message }}</p>
                                                               @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                              <label>Gender</label>
                                                              <select class="form-control" name="gender" id="gender">
                                                                <option disabled="" selected="">Select</option>
                                                                <option @if($application->gender=='male') selected @endif value="male">Male</option>
                                                                <option @if($application->gender=='female') selected @endif value="female">Female</option>
                                                                <option @if($application->gender=='other') selected @endif value="other">Other</option>
                                                              </select>
                                                               @error('gender')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label for="phone">Phone Number</label>
                                                                <input id="phone" type="text" name="phone" maxlength="11" value="{{ $application->phone }}" class="form-control" placeholder="Enter Phone Number Ex. 03014576890">
                                                                @error('phone')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label for="address">Address</label>
                                                                <textarea id="address" name="address" class="form-control" value="{{ $application->address }}" placeholder="Enter Street Address">{{ $application->address }}</textarea>
                                                                @error('address')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label for="institute">Institute Name</label>
                                                                <textarea id="institute" name="institute_name" class="form-control" placeholder="Enter Institute Name">{{ $application->institute_name}}</textarea>
                                                                @error('institute_name')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        
                                                            <div class="form-group col-md-12">
                                                                <label for="current_degree">Current Degree</label>
                                                                <textarea id="current_degree" name="current_degree" class="form-control" placeholder="Enter Current Degree">{{ $application->current_degree }}</textarea>
                                                                @error('current_degree')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label for="degree_title">Degree Title</label>
                                                                <textarea id="degree_title" name="degree_title" class="form-control" placeholder="Enter Institute Name">{{ $application->degree_title }}</textarea>
                                                                @error('degree_title')
                                                                  <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                   
                                                            <div class="form-group col-md-12">
                                                                <label>Your Latest Image</label>
                                                                <input type="file" name="user_img" id="user_img">
                                                                <input type="hidden" name="old_user_img" value="{{$application->user_img}}">
                                                                 @php $imgp = 'storage/'.$application->user_img @endphp
                                                                 <img src="{{ asset($imgp) }}" class="appImg" style="width: 100px; height: 100px">
                                                                @error('userWarningMsg')
                                                                      <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                 
                                                        <div class="mt-4">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                                                        </div>
                                                        
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- end container-fluid -->
            </div> 
            <!-- end page-content-wrapper -->
        </div>
        <!-- End Page-content -->
    </div>

@endsection<!-- end content -->

@section('footer')
	@include('includes.admin_footer')
@endsection<!-- end footer -->