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
                            <h4 class="page-title mb-1">Update Sub Menu</h4>
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
                            <form action="{{ route('SubMenu.update',$sub->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Update Sub Menu</h4>
                                   
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Main</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="main">
                                                    <option selected="" disabled="">Select Main Menu</option>
                                                    @foreach($mains as $main)
                                                         <option <?php if($sub->main_id==$main->id){ echo "selected=''"; } ?>  value="{{ $main->id }}">{{ ucwords($main->title) }}</option>
                                                    @endforeach
                                                </select>
                                                @error('main')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                            <div class="col-md-10">
                                                <input class="form-control" name="title" type="text" value="{{ $sub->title }}" placeholder="Enter Title" id="example-text-input">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            
                                        </div>

                                       <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Route</label>
                                            <div class="col-md-10">
                                                <input class="form-control" name="route" type="text" value="{{ $sub->route }}" placeholder="Enter Route" id="example-text-input">
                                                @error('route')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div> 
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Item Id</label>
                                            <div class="col-md-10">
                                                <input class="form-control" name="item_id" type="text" value="{{ $sub->item_id }}" placeholder="Enter Item Id" id="example-text-input">
                                                @error('item_id')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="card">
                                            <div class="card-body row">
        
                                                <div class="text-center mt-4">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Select</label>
                                            <div class="col-md-10">
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </div>
                                        </div> -->
                                      
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