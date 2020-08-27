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
                            <h4 class="page-title mb-1">Add Slider</h4>
                            
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
                                    <h4 class="header-title">Add Slider</h4>
                                  
                                    <!-- Tab panes -->
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="home-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div>
                                                        <form action="{{ route('Gallery.update',$photo->id) }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('put')

                                                            <div class="form-group row">
                                                                <label>Select Category :</label>
                                                                <div class="col-md-10">
                                                                    <select name="category" class="form-control">
                                                                        <option selected="" disabled="">Select Photo Category</option>
                                                                        <option <?php if($photo->category==
                                                                            "student"){ echo "selected=''"; } ?> value="student">Student</option>
                                                                        <option <?php if($photo->category==
                                                                            "photo"){ echo "selected=''"; } ?> value="photo">Photo</option>
                                                                        <option <?php if($photo->category==
                                                                            "campus"){ echo "selected=''"; } ?> value="campus">Campus</option>
                                                                    </select>
                                                                     @error('category')
                                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="form-group row">
                                                                <label>Image 280*186:</label>
                                                                <div class="col-md-10">
                                                                    @php $img = 'storage/'.$photo->img @endphp
                                                                    <input type="hidden" name="oldImg" value="{{ $photo->img }}">
                                                                    <input name="img" type="file">
                                                                    <img src="{{ asset($img) }}" style="widows: 100px; height: 100px;">
                                                                    @error('img')
                                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                                    @enderror
                                                                    @error('warningMsg')
                                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="form-group mt-4">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update Slider</button>
                                                            </div>
                                                        </form>
                                                    </div>
                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile-1" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
            
                                                    <h4 class="header-title">Horizantol News Ticker</h4>
                                                  
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Add News 1</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" maxlength="100" placeholder="News Ticker 1" id="example-text-input">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Add News 2</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" maxlength="100" placeholder="News Ticker 2" id="example-text-input">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Add News 3</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" maxlength="100" placeholder="News Ticker 3" id="example-text-input">
                                                        </div>
                                                    </div>



                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Add News 4</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" maxlength="100" placeholder="News Ticker 4" id="example-text-input">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Select Speed</label>
                                                        <div class="col-md-10">
                                                            <select class="form-control">
                                                                <option>Select</option>
                                                                <option>Fast</option>
                                                                <option>Slow</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
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