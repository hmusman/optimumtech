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
                            <h4 class="page-title mb-1">Update Service
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
            
                                                    <h4 class="header-title"> Update Service </h4>
                                                    <form action="{{ route('Service.update',$service->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="name" value="{{ $service->name }}" maxlength="100" placeholder="Enter  title" id="example-text-input">
                                                                @error('name')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                       {{-- <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Why take this Services </label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" class="form-control" name="why" rows="3" placeholder="This textarea has a limit of 1000 chars.">{{ $service->why }}</textarea>
                                                                @error('why')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>--}}

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Detail</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" class="form-control tinymce-classic" name="detail" rows="3" placeholder="This textarea has a limit of 1500 chars.">{{ $service->detail }}</textarea>
                                                                @error('detail')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Meta Name</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="meta_name" value="{{ $service->meta_name }}" placeholder="Enter Meta Name" id="example-text-input">
                                                                @error('meta_name')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Meta Detail</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" class="form-control" name="meta_detail" rows="3" placeholder="Enter Meta Detail">{{ $service->meta_detail }}</textarea>
                                                                @error('meta_detail')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div> 

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Picture 750*500</label>
                                                            <div class="col-md-10">
                                                                @php $img = 'storage/'.$service->img  @endphp
                                                                <input type="hidden" name="oldImg" value="{{ $service->img }}">
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

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Video Link</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" class="form-control " name="video_link" rows="3" placeholder="Enter Video Link">{{ $service->video_link }}</textarea>
                                                                @error('video_link')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Video</label>
                                                            <div class="col-md-5">
                                                                <div class="input-group">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                                  </div>
                                                                  <div class="custom-file">
                                                                    <input type="file" name="video" class="custom-file-input" id="inputGroupFile01"
                                                                      aria-describedby="inputGroupFileAddon01">
                                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                                  </div>
                                                                </div>
                                                                <input type="hidden" name="oldVideo" value="{{ $service->video }}">
                                                                <p class="text-muted" style="margin-top: 3px;">Ext(mp4), Size(25Mb)</p>
                                                                @error('video')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror   
                                                            </div>
                                                            @if($service->video !='')

                                                                @php $video = '/storage/'.$service->video;  @endphp
                                                                <div class="col-md-5">
                                                                   <video width="100%" controls>
                                                                      <source src="{{ $video }}" type="video/mp4">
                                                                    </video>
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <div class="mt-4">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
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