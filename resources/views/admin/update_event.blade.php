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
            
                                                    <h4 class="header-title">Upcommimg Event</h4>
                                                    
                                                    <form action="{{ route('Event.update',$event->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Event Title</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="title" value="{{ $event->title }}" placeholder="Enter  title" id="example-text-input">
                                                                @error('title')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror  
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Event Detail</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" name="detail" class="form-control" rows="3" placeholder="This textarea has a limit of 95 chars.">{{ $event->detail }}</textarea>
                                                                 @error('detail')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror  
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Meta Name</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="meta_name" value="{{ $event->meta_name }}" placeholder="Enter Meta Name" id="example-text-input">
                                                                @error('meta_name')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Meta Detail</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" class="form-control" name="meta_detail" rows="3" placeholder="Enter Meta Detail">{{ $event->meta_detail }}</textarea>
                                                                @error('meta_detail')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div> 

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Event Date</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="date" value="{{ $event->event_date }}" name="event_date" id="example-date-input">
                                                                @error('event_date')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror  
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Event Address</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" value="{{ $event->address }}" name="address" placeholder="Enter Event Loation" id="example-text-input">
                                                                @error('address')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror  
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label"> Picture 120*120</label>
                                                            <div class="col-md-10">
                                                                <input type="hidden" name="oldImg" value="{{ $event->img }}">
                                                                @php $img = 'storage/'.$event->img @endphp
                                                                <input name="img" type="file">
                                                                <img src="{{ asset($img) }}" style="width: 100px; height: 100px;">
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
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light" type="submit">Save Event</button>
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