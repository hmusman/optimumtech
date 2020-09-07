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
                            <h4 class="page-title mb-1">Update Team
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
            
                                                    <h4 class="header-title"> Update Team Member </h4>
                                                    <form action="{{ route('Team.update',$member->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                       
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="name" value="{{ $member->name }}" maxlength="100" placeholder="Enter  title" id="example-text-input">
                                                                @error('name')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="email" name="email" value="{{ $member->email }}" placeholder="Enter  Email" id="example-text-input">
                                                                @error('email')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Phone</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="phone" value="{{ $member->phone }}" placeholder="Enter  Phone" id="example-text-input">
                                                                @error('phone')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Education</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="education" value="{{ $member->education }}" placeholder="Enter  Education" id="example-text-input">
                                                                @error('education')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Experience</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="experience" value="{{ $member->experience }}" placeholder="Enter  Experience" id="example-text-input">
                                                                @error('experience')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                         <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Address</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" class="form-control" name="address" rows="3" placeholder="Enter Address">{{ $member->address }}</textarea>
                                                                @error('address')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                         <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Detail</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" class="form-control tinymce-classic" name="detail" rows="3" placeholder="Enter Detail">{{ $member->detail }}</textarea>
                                                                @error('detail')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Meta Name</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="text" name="meta_name" value="{{ $member->meta_name }}" placeholder="Enter Meta Name" id="example-text-input">
                                                                @error('meta_name')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Meta Detail</label>
                                                            <div class="col-md-10">
                                                                <textarea id="textarea" class="form-control" name="meta_detail" rows="3" placeholder="Enter Meta Detail">{{ $member->meta_detail }}</textarea>
                                                                @error('meta_detail')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div> 

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Designation</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" name="designation" value="{{ $member->designation }}"  type="text" maxlength="100" placeholder="Enter  Designation" id="example-text-input">
                                                                @error('designation')
                                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-md-2 col-form-label">Picture 262*300</label>
                                                            <div class="col-md-10">
                                                                @php $img = 'storage/'.$member->img  @endphp
                                                                <input type="hidden" name="oldImg" value="{{ $member->img }}">
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