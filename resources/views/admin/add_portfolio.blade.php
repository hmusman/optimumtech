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
                            <h4 class="page-title mb-1">Add Porfolio
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
            
                                                    <h4 class="header-title">Porfolio</h4>
                                                    @error('warningMsg')
                                                        <div class="alert alert-warning">{{ $message }}</div>
                                                    @enderror

                                                    <form action="{{ route('Portfolio.store') }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Enter title" id="example-text-input">
                                                                @error('name')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                         <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Service</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="service" value="{{ old('service') }}" placeholder="Enter Service" id="example-text-input">
                                                                @error('service')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                         <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Website Url</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="url" value="{{ old('url') }}" placeholder="Enter Website Url" id="example-text-input">
                                                                @error('url')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Objective</label>
                                                            <div class="col-md-10">
                                                                <textarea id="product_detail" class="form-control" name="objective"  rows="3" placeholder="Enter Objective">{{ old('objective') }}</textarea>
                                                                @error('objective')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div> 

                                                         <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Tool & Technology</label>
                                                            <div class="col-md-10">
                                                                <textarea  class="form-control" name="technology"  rows="3" placeholder="Enter Technology">{{ old('technology') }}</textarea>
                                                                @error('technology')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div> 

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Detail</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" class="form-control tinymce-classic" name="detail" rows="3" placeholder="">{{ old('detail') }}</textarea>
                                                                @error('detail')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Picture1 750*500</label>
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

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Picture2 750*500</label>
                                                            <div class="col-md-10">
                                                                <input name="img2" type="file">
                                                                @error('img2')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror  

                                                                @error('sizeWarning2')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror  

                                                                @error('extWarning2')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror    
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Picture3 750*500</label>
                                                            <div class="col-md-10">
                                                                <input name="img3" type="file">
                                                                @error('img3')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror  

                                                                @error('sizeWarning3')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror  

                                                                @error('extWarning3')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror    
                                                            </div>
                                                        </div>

                                                      
                                                        <div class="mt-4">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light" type="submit">Save</button>
                                                        </div>

                                                    </form>
                                                    @include('mceImageUpload::upload_form')
                                                    
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