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
                            <h4 class="page-title mb-1">Add Clients</h4>
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
                                    <h4 class="header-title">Update Client</h4>
                                  
                                    <!-- Tab panes -->
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="home-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
            
                                                    <form action="{{ route('Client.update',$client->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                                            <div class="col-md-10">
                                                                <input name="name" class="form-control" type="text" maxlength="100" placeholder="Enter Client Name" value="{{ $client->name }}" id="example-text-input">
                                                                @error('name')
                                                                    <p class="text-danger mt-3 ">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label"> Site Url</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" value="{{ $client->url }}" name="url" maxlength="100" placeholder="Enter Site Link" id="example-text-input">
                                                                @error('url')
                                                                    <p class="text-danger mt-3 ">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label"> Logo 200*120</label>
                                                            <div class="col-md-10">
                                                                <input type="hidden" name="oldImg" value="{{ $client->img }}">
                                                                <input name="img" type="file">
                                                                @php $img = 'storage/'.$client->img @endphp
                                                                <img src="{{ asset($img) }}" style="width: 100px; height: 100px;">
                                                                @error('img')
                                                                    <p class="text-danger mt-3 ">{{ $message }}</p>
                                                                @enderror
                                                                @error('sizeWarning')
                                                                    <p class="text-danger mt-3 ">{{ $message }}</p>
                                                                @enderror
                                                                @error('extWarning')
                                                                    <p class="text-danger mt-3 ">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                      
                                                        <div class="mt-4">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
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