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
                                    <h4 class="page-title mb-1">AdminPanel</h4>
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
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>Slider</h5>
                                                    <p class="text-muted">Slider</p>
                                                    <div class="mt-4">
                                                        <a href="{{ route('Slider.index') }}" class="btn btn-primary btn-sm">View Slider <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/widget-img.png') }}" alt="" class="img-fluid" style="height:80px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             
                                </div>
        
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>Testimonial</h5>
                                                    <p class="text-muted">Testimonial</p>
                                                    <div class="mt-4">
                                                        <a href="{{ route('Testimonial.index') }}" class="btn btn-primary btn-sm">View Testimonial <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/ykgc6CTcoa.jpg') }}" alt="" class="img-fluid" style="height:80px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                               
                               
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>Courses</h5>
                                                    <p class="text-muted">Courses</p>

                                                    <div class="mt-4">
                                                        <a href="{{ route('Course.index') }}" class="btn btn-primary btn-sm">View Course <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/ctFAfmI7z8.jpg') }}" alt="" class="img-fluid" style="height:80px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>Events</h5>
                                                    <p class="text-muted">Events</p>

                                                    <div class="mt-4">
                                                        <a href="{{ route('Event.index') }}" class="btn btn-primary btn-sm">View Event <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/AnFvXzPXNY.jpg') }}" alt="" class="img-fluid" style="height:80px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             
                                </div>
        
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>Client</h5>
                                                   <p class="text-muted">Client</p>
                                                    <div class="mt-4">
                                                        <a href="{{ route('Client.index') }}" class="btn btn-primary btn-sm">View Client <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/01ce7Ljd9r.jpg') }}" alt="" class="img-fluid" style="height:80px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                               
                               
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>News</h5>
                                                    <p class="text-muted">News</p>
                                                    <div class="mt-4">
                                                        <a href="{{ route('News.index') }}" class="btn btn-primary btn-sm">View course <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/dI3ljp28Hd.jpg') }}" alt="" class="img-fluid" style="height:80px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                            <!-- end row -->

                        </div> <!-- container-fluid -->
                    </div>
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->
            </div>
@endsection<!-- end content -->

@section('footer')
	@include('includes.admin_footer')
@endsection<!-- end footer -->