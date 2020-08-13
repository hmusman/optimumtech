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
                                    
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                      
                                        <thead>
                                            
                                            <tr>
                                                <th>#</th>
                                                <th>Number</th>
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
    
    
                                        <tbody>
                                            @if($applications->count()>0)
                                                @php $i=1; @endphp
                                                @foreach($applications as $application)
                                                    
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $application->applicant_number }}</td>
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

                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                               <!--  <a href="{{ route('CourseApplication.edit',$application->id) }}" class="btn btn-primary mdi mdi-delete-alert"></a> -->&nbsp;
                                                                <form style="margin-left: 10px;" method="post" action="{{ route('CourseApplication.destroy',$application->id) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="btn btn-primary mdi mdi-close-box-multiple-outline"></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                       
                                                       
                                                    </tr>
                                                @endforeach

                                            @else
                                                <tr><td colspan="12" class="text-center">No Course Application Available</td></tr>
                                            @endif

                              
                                        </tbody>
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
    </div>
	

@endsection<!-- end content -->

@section('footer')
	@include('includes.admin_footer')
@endsection<!-- end footer -->