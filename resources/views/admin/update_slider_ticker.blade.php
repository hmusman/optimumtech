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
                                                        <form action="{{ route('Slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('put')
                                                            <div class="form-group">
                                                                <label>Select Image 1820*500 :</label>
                                                                @php $img = 'storage/'.$slider->img @endphp
                                                                <input type="hidden" name="oldImg" value="{{ $slider->img }}">
                                                                <input name="img" type="file" id="img">
                                                                <img src="{{ asset($img) }}" style="widows: 100px; height: 100px;">
                                                            </div>
                                                           
                                                            @error('warningMsg')
                                                            <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                             <p class="text-danger img_error"></p>
                                                            <div class="row">
                                                                <div id="uploadForm"></div>
                                                            </div>
                                                            <div class="form-group mt-4">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update Slider</button>
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

@section('script')
    <script type="text/javascript">

        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#uploadForm + img').remove();
                    $('#uploadForm').after('<img onclick="selectImg(this)" src="'+e.target.result+'" style="margin-top:10px;" width="100%" height="300"/>');
                };
                reader.readAsDataURL(input.files[0]);
           }
        }

        $(document).ready(function(){
            $('.img_error').hide();
            var _URL = window.URL || window.webkitURL;
            $('#img').change(function(){  
                filePreview(this);  
                var file, img;
                var width=0;var height=0;
                if (file = this.files[0]) {
                    img = new Image();
                    img.onload = function () {
                       width = this.width; height = this.height;
                       if(width==1820 && height==500)
                       {
                            $('.img_error').hide();
                            $('.add_file').removeAttr('disabled');
                       }
                       else
                       {
                            $('.img_error').show();
                            $('.img_error').text("Slider Resolution Should Be 1820*500");
                            $('.add_file').attr('disabled','disabled');
                       }
                    };
                   

                    img.src = _URL.createObjectURL(file);
                }
            });
        });


    </script>
@endsection