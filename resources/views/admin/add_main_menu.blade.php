@extends('layouts.basic')

@section('head')
    @include('includes.admin_head')
@endsection<!-- end head -->

@section('header')
    @include('includes.admin_header')
@endsection<!-- end header -->


@section('content')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

        <div class="page-content">

            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-1">Add Main Menu</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                   
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
                            <form action="{{ route('MainMenu.store') }}" method="post">
                                @csrf
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Add Main Menu</h4>
                                        @if(Session::has('msg'))
                                            <div class="alert alert-warning col-md-4">{{ Session::get('msg') }}</div>
                                        @endif
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                            <div class="col-md-10">
                                                <input class="form-control" name="title" type="text" value="{{ old('title') }}" placeholder="Enter Title" id="example-text-input">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            
                                        </div>
                                       
                                        <div class="card">
                                            <div class="card-body row">
        
                                                <div class="text-center mt-4">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
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
    <!-- End Page-content -->
@endsection<!-- end content -->

@section('footer')
    @include('includes.admin_footer')
@endsection<!-- end footer -->