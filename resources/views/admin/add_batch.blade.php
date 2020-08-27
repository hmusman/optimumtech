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
                            <h4 class="page-title mb-1">Add Course Batch</h4>
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

                                    <h4 class="header-title">Add New Course Batch</h4>
                                    @error('existMsg')
                                        <div class="alert alert-warning">{{ $message }}</div>
                                    @enderror
                                    <form method="post" action="{{ route('Batch.store') }}" enctype="multipart/form-data">

                                        @csrf

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Course</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="course">
                                                    <option selected="" disabled="">Select Course</option>
                                                    @foreach($courses as $course)
                                                         <option <?php if(old('course')==$course->id){ echo "selected=''"; } ?>  value="{{ $course->id }}">{{ ucwords($course->title) }}</option>
                                                    @endforeach
                                                </select>
                                                @error('course')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" value="{{ old('name') }}" name="name" type="text" placeholder="Enter Name" id="example-text-input">
                                                @error('name')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Class Duration</label>
                                            <div class="col-md-10">
                                                <input class="form-control" value="{{ old('class_duration') }}" name="name" type="text" placeholder="Enter Class Duration" id="example-text-input">
                                                @error('class_duration')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Class Start</label>
                                            <div class="col-md-10">
                                                <input class="form-control" value="{{ old('class_start') }}" name="class_start" type="time"  id="example-text-input">
                                                @error('class_start')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Class End</label>
                                            <div class="col-md-10">
                                                <input class="form-control" value="{{ old('class_end') }}" name="class_end" type="time"  id="example-text-input">
                                                @error('class_end')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Duration</label>
                                            <div class="col-md-10">
                                                <input class="form-control" value="{{ old('batch_duration') }}" name="batch_duration" type="text" placeholder="Enter Batch Duration" id="example-text-input">
                                                @error('batch_duration')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Price</label>
                                            <div class="col-md-10">
                                                <input class="form-control" value="{{ old('price') }}" name="price" type="number" placeholder="Enter Price" id="example-text-input">
                                                @error('price')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                             <div class="mt-4">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                            </div>
                                        </div>

                                    </form>



                                    
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

     
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

@endsection<!-- end content -->

@section('footer')
	@include('includes.admin_footer')
@endsection<!-- end footer -->