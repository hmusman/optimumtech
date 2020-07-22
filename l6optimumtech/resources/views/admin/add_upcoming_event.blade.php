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
                            <h4 class="page-title mb-1">Add Optimum Upcommimg Events</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Optimum</a></li>
                            <li class="breadcrumb-item active">Seminar's</li>
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
                        <div class="col-xl-12">
                   
                      
                      
                      
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Optimum</h4>
                                  
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">
                                                <i class="fas fa-bullhorn"></i> <span class="d-none d-md-inline-block">Optimum Events</span> 
                                            </a>
                                       
                                    </ul>
    
                                    <!-- Tab panes -->
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="home-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
            
                                                    <h4 class="header-title">Optimum Event</h4>
                                                  
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Event Title</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" maxlength="100" placeholder="Enter  title" id="example-text-input">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Event Detail</label>
                                                        <div class="col-md-10">
                                                            <textarea id="textarea" class="form-control" maxlength="95" rows="3" placeholder="This textarea has a limit of 95 chars."></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Event Date</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Event Address</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" maxlength="20" placeholder="Enter Event Loation" id="example-text-input">
                                                        </div>
                                                    </div>



                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label"> Picture 120*120</label>
                                                        <div class="col-md-10">
                                                            <form action="#" class="dropzone">
                                                                <div class="fallback">
                                                                    <input name="file" type="file" multiple="multiple">
                                                                </div>
                                                                <div class="dz-message needsclick">
                                                                    <div class="mb-3">
                                                                        <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                                                                    </div>
                                                                    
                                                                    <h4>Drop files here to upload</h4>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>


                                                  
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Save Event</button>
                                                    </div>
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