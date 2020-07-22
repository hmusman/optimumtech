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
                                    <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Welcome to Optimum Admin Panel</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
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
                                                    <h5>Add Slider</h5>
                                                    <p class="text-muted">Home Page Slider</p>

                                                    <div class="mt-4">
                                                        <a href="/Admin/AddSliderTicker" class="btn btn-primary btn-sm">Add Slider <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/widget-img.png') }}" alt="" class="img-fluid">
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
                                                    <h5>Add Ticker</h5>
                                                    <p class="text-muted">Optimum News</p>

                                                    <div class="mt-4">
                                                        <a href="#" class="btn btn-primary btn-sm">Add news <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/QlH7x10jYC.jpg') }}" alt="" class="img-fluid">
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
                                                    <h5>Add Courses</h5>
                                                    <p class="text-muted">Optimum Courses</p>

                                                    <div class="mt-4">
                                                        <a href="/Admin/AddCourse" class="btn btn-primary btn-sm">Add course <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/ctFAfmI7z8.jpg') }}" alt="" class="img-fluid">
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
                                                    <h5>Add Events</h5>
                                                    <p class="text-muted">Upcomming Events</p>

                                                    <div class="mt-4">
                                                        <a href="/Admin/AddUpcomingEvent" class="btn btn-primary btn-sm">Add Event <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/AnFvXzPXNY.jpg') }}" alt="" class="img-fluid">
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
                                                    <h5>Add Faq's </h5>
                                                    <p class="text-muted">Optimum Home</p>

                                                    <div class="mt-4">
                                                        <a href="HomeFAQs.html" class="btn btn-primary btn-sm">Add FAQ <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/YCa4b5hUhJ.jpg') }}" alt="" class="img-fluid">
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
                                                    <h5>Add News</h5>
                                                    <p class="text-muted">Optimum Courses</p>

                                                    <div class="mt-4">
                                                        <a href="/Admin/AddLatestNews" class="btn btn-primary btn-sm">Add course <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/dI3ljp28Hd.jpg') }}" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                            <!-- end row -->

                            
                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>Add Testimonial</h5>
                                                    <p class="text-muted">Optimum Reviews</p>

                                                    <div class="mt-4">
                                                        <a href="/Admin/AddTestimonial" class="btn btn-primary btn-sm">Add Testimonial <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/ykgc6CTcoa.jpg') }}" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>










                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>Add Client</h5>
                                                    <p class="text-muted">Upcomming Events</p>

                                                    <div class="mt-4">
                                                        <a href="/Admin/AddOptimumClient" class="btn btn-primary btn-sm">Add Client <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="{{ asset('storage/admin/images/01ce7Ljd9r.jpg') }}" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


















                                </div>


                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-transparent p-3">
                                            <h5 class="header-title mb-0">Sales Status</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="media my-2">
                                                    
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Number of Student Enrolled</p>
                                                        <h5 class="mb-0">1,625</h5>
                                                    </div>
                                                    <div class="icons-lg ml-2 align-self-center">
                                                        <i class="uim uim-layer-group"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media my-2">
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Sales Revenue </p>
                                                        <h5 class="mb-0">$ 42,235</h5>
                                                    </div>
                                                    <div class="icons-lg ml-2 align-self-center">
                                                        <i class="uim uim-analytics"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media my-2">
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Courses Average Price</p>
                                                        <h5 class="mb-0">$ 14.56</h5>
                                                    </div>
                                                    <div class="icons-lg ml-2 align-self-center">
                                                        <i class="uim uim-ruler"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media my-2">
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Services Sold</p>
                                                        <h5 class="mb-0">8,235</h5>
                                                    </div>
                                                    <div class="icons-lg ml-2 align-self-center">
                                                        <i class="uim uim-box"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mb-4">Social Source</h5>
                                            <div id="radial-chart" class="apex-charts"></div>

                                            <div class="text-center mt-3">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted"><i class="mdi mdi-circle text-primary mr-1"></i> Facebook</p>
                                                            <h5>$ 1,625</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted"><i class="mdi mdi-circle text-warning mr-1"></i> Twitter</p>
                                                            <h5>$ 1,504</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                            <!-- end row -->

                     
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