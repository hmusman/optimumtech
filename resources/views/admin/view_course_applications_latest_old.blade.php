@extends('layouts.basic')

@section('head')
	@include('includes.admin_head')
@endsection<!-- end head -->

@section('header')
	@include('includes.admin_header')
@endsection<!-- end header -->


@section('content')
	<style type="text/css">
     
        #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
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

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}


    </style>
	<div class="main-content">

        <div class="page-content">

            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-1">Course Applications View</h4>
                            
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
                                    @if(Session::has('msg'))
                                        <div class="alert alert-success">{{ Session::get('msg') }}</div>
                                    @endif
                                    
                                    <div class="alert alert-success statusMsg" style="display: none;"></div>
                                    <table id="datatable" class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <div class="row" style="margin-bottom: 15px;">
                                          <div class="col-md-1"></div>
                                          <div class="col-md-2">
                                              <button type="button" style="width: 100%; float: right;" class="btn-primary btn all_records">All Records</button>
                                          </div>

                                          <div class="col-md-2">
                                              <button type="button" style="width: 100%; float: right;" class="btn-primary btn specific">Specific</button>
                                          </div>

                                          <div class="col-md-3">
                                              <a href="{{ route('ConfirmedRecord') }}" style="width: 100%; float: right;" class="btn-primary btn confirmRecords">Confirmed Records</a>
                                          </div>
                                          <div class="col-md-2">
                                              <button type="button" style="width: 100%; float: right;" class="btn-primary btn confirm">Confirm</button>
                                          </div>
                                          <div class="col-md-2">
                                              <button type="button" style="width: 100%; float: right;" class="btn-primary btn unconfirm">Un Confirm</button>
                                          </div>
                                        </div>
                                        <thead>
                                            
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                 <th>Status</th>
                                                <th>Number</th>
                                                <th>Profile</th>
                                                <th>Image</th>
                                                <th>Course</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>CNIC</th>
                                                <th>City</th>
                                                <th>Province</th>
                                                <th>Country</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                      
                                        <form class="changeStatus" method="post" action="">
                                            @csrf
                                            <tbody>
                                                @if($applications->count()>0)
                                                    @php $i=1; $counter=0; @endphp
                                                    @foreach($applications as $application)
                                                        @php $img = 'storage/'.$application->img @endphp
                                                        @php $imgp = 'storage/'.$application->user_img @endphp
                                                        <tr>
                                                            <td>
                                                              <div class="custom-control custom-checkbox" data-id="{{ $application->id }}">
                                                                    <input type="checkbox" class="custom-control-input changeStatusBox" id="customCheck{{ $application->id }}" name="checkboxes[]" value="{{ $application->id }}">
                                                                    <label class="custom-control-label" for="customCheck{{ $application->id }}"></label>
                                                                </div>
                                                              {{-- <div class="custom-control custom-checkbox" data-id="{{ $application->id }}">
                                                                    <input type="checkbox" class="custom-control-input appStatus" id="customCheck{{ $application->id }}" name="example1">
                                                                    <label class="custom-control-label" for="customCheck{{ $application->id }}"></label>
                                                                </div> --}}
                                                            </td>
                                                            <td>{{ $i++ }}</td>
                                                            <td><?php echo ($application->status==1) ? 'Confirmed' : ' ' ?></td>
                                                            <td>{{ $application->applicant_number }}</td>
                                                            <td>
                                                               @if($application->course->price > 0)
                                                                  <img src="{{ asset($imgp) }}" class="appImg" style="width: 100px; height: 100px">
                                                               @endif
                                                               
                                                            </td>
                                                            <td>
                                                               @if($application->course->price > 0)
                                                                  <img src="{{ asset($img) }}" class="appImg" style="width: 100px; height: 100px">
                                                               @endif
                                                               
                                                            </td>
                                                            <td>{{ ucwords($application->course->title) }}</td>
                                                            <td>{{ ucwords($application->first." ". $application->last_name)}}</td>
                                                            <td>{{ $application->email }}</td>
                                                            <td>{{ $application->phone }}</td>
                                                            <td>{{ $application->cnic }}</td>
                                                            <td>{{ ucfirst($application->city) }}</td>
                                                            <td>{{ ucfirst($application->province) }}</td>
                                                            <td>{{ ucfirst($application->country) }}</td>
                                                            <td>{{ date('m/d/y',strtotime($application->created_at)) }}</td>
                                    
                                                            <td> 

                                                                <div class="btn-group" role="group" aria-label="Delete Button">
                                                                   
                                                                      <input type="hidden" name="" id="route{{ $application->id }}" value="CourseApplicationDelete/{{ $application->id }}">
                                                                        <button type="button" data-id="{{ $application->id }}" aria-label="Delete Button" class="btn btn-danger mdi mdi-close-box-multiple-outline anchor_delete_btn title_btn"></button>
                                                                    
                                                                </div>
                                                            </td>
                                                           
                                                           
                                                        </tr>
                                                         @php $counter++; @endphp
                                                    @endforeach

                                                @else
                                                    <tr><td colspan="12" class="text-center">No Course Application Available</td></tr>
                                                @endif

                                  
                                            </tbody>

                                        </form>
    
                                      
                                    </table>
                                   
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

        <!-- <style type="text/css">
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
        </style>
        <div class="myModel" >
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
        </div> -->
    </div>
	 
@endsection<!-- end content -->


@section('footer')
	@include('includes.admin_footer')
@endsection<!-- end footer -->


@section('script')
    <script type="text/javascript">
        $(document).ready(function(){

            $('.unconfirm').click(function(){
                if($('.changeStatusBox:checkbox').is(":checked"))
                {
                    $('.changeStatus').attr('action',"{{ route('CourseApplicationUnConfirmStatus') }}");
                    $('.changeStatus').submit();
                }
            });

            $('.confirm').click(function(){
                if($('.changeStatusBox:checkbox').is(":checked"))
                {
                    $('.changeStatus').attr('action',"{{ route('CourseApplicationConfirmStatus') }}");
                    $('.changeStatus').submit();
                }
            });

            $('.all_records').click(function(){ window.location= "AllCourseApplicationRecords";});

            $('.specific').click(function(){
              
                if($('.changeStatusBox:checkbox').is(":checked"))
                {
                    $('.changeStatus').attr('action',"{{ route('SpecificCourseApplicationRecords') }}");
                    $('.changeStatus').submit();
                }
            });

        });
    </script>
@endsection