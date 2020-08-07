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
                            <h4 class="page-title mb-1">Add Photo</h4>
                            
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
                                    <h4 class="header-title">Add Photo</h4>
                                  
                                    <!-- Tab panes -->
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="home-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div>
                                                        <form action="{{ route('Gallery.store') }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group row">
                                                                <label>Select Category :</label>
                                                                <div class="col-md-10">
                                                                    <select name="category" class="form-control">
                                                                        <option selected="" disabled="">Select Photo Category</option>
                                                                        <option value="student">Student</option>
                                                                        <option value="photo">Photo</option>
                                                                        <option value="campus">Campus</option>
                                                                    </select>
                                                                     @error('category')
                                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="form-group row">
                                                                <label>Image 280*186:</label>
                                                                <div class="col-md-10">
                                                                    <input name="img" type="file" style="margin-left: 3px;">
                                                                    @error('img')
                                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                                    @enderror
                                                                    @error('warningMsg')
                                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="form-group mt-4">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
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

<script type="text/javascript">
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone(".dropzone",{ 
        maxFilesize: 3,  // 3 mb
        acceptedFiles: ".jpeg,.jpg,.png,.pdf",
    });

</script>