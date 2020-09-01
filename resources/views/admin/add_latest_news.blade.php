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
                            <h4 class="page-title mb-1">Add Latest News
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
                                    <h4 class="header-title">Add Latest News</h4>
                                    @error('warningMsg')
                                        <div class="alert alert-warning">{{ $message }}</div>
                                    @enderror
                                    <!-- Tab panes -->
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="home-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
            
                                                    <form method="post" action="{{ route('News.store') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">News Title</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" name="title" value="{{ old('title') }}" type="text" maxlength="100" placeholder="Enter  title" id="example-text-imgt">
                                                                @error('title')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">News Detail</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" name="detail" class="form-control" maxlength="95" rows="3" placeholder="This textarea has a limit of 95 chars.">{{ old('detail') }}</textarea>
                                                                @error('detial')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Meta Name</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="meta_name" value="{{ old('meta_name') }}" placeholder="Enter Meta Name" id="example-text-input">
                                                                @error('meta_name')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Meta Detail</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" class="form-control" name="meta_detail" rows="3" placeholder="Enter Meta Detail">{{ old('meta_detail') }}</textarea>
                                                                @error('meta_detail')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">News Date</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" name="news_date" type="date" value="{{ old('news_date') }}" id="example-date-input">
                                                                @error('news_date')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>




                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label"> Picture 270*184</label>
                                                            <div class="col-md-10">
                                                                <input name="img" type="file">
                                                                @error('img')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror

                                                                 @error('sizeWarning')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror

                                                                 @error('extWarning')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                      
                                                        <div class="mt-4">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light" type="submit">Save News</button>
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