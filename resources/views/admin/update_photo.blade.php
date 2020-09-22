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
                            <h4 class="page-title mb-1">Update Photo</h4>
                            
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
                   
                      
                      
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sub Folder</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" name="sub_folder" id="sub_folder" placeholder="Enter Sub Folder Name" class="form-control">
                                            </div>
                                        </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary save_sub">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
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
                                                                <label class="col-md-2 col-form-label">Select Category :</label>
                                                                <div class="col-md-10">
                                                                    <select name="category" class="form-control" id="category">
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
                                                                <input type="hidden" name="" id="hidden_sub" value="{{ $photo->sub_folder }}">
                                                                <label class="col-md-2 col-form-label">Sub Folder Name:</label>
                                                                <div class="col-md-9 mine_select sub_folder_select">
                                                                     <select name="sub_folder" class="form-control" id="sub_folder_select">
                                                                        <option selected="" disabled="">Select Photo Category</option>
                                                                        <option value="student">Student</option>
                                                                        <option value="photo">Photo</option>
                                                                        <option value="campus">Campus</option>
                                                                    </select>
                                                                     @error('sub_folder')
                                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                                    @enderror
                                                                </div>  

                                                                 <div class="col-md-1 mine_select">
                                                                    <button style="float: right;" type="button" class="btn btn-primary add_more" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i></button>
                                                                </div>   
                                                            </div>


                                                           {{-- <div class="form-group row">
                                                                <label class="col-md-2 col-form-label">Title:</label>
                                                                <div class="col-md-10">
                                                                    <input name="title" type="text" class="form-control" value="{{ $photo->title }}">
                                                                    @error('title')
                                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                                    @enderror
                                                                </div>   
                                                            </div>--}}

                                                            <div class="form-group row">
                                                                <label class="col-md-2 col-form-label">Caption:</label>
                                                                <div class="col-md-10">
                                                                    <textarea class="form-control" placeholder="Enter Detail" name="caption" >{{ $photo->caption }}</textarea> 
                                                                    @error('caption')
                                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                                    @enderror
                                                                </div>   
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-md-2 col-form-label">Image:</label>
                                                                <div class="col-md-10">
                                                                    @php $img = 'storage/'.$photo->img @endphp
                                                                    <input type="hidden" name="oldImg" value="{{ $photo->img }}">
                                                                    <input name="img" type="file">
                                                                    <img src="{{ asset($img) }}" style="widows: 100px; height: 100px;">
                                                                    @error('img')
                                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                                    @enderror

                                                                    @error('sizeWarning')
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
        $(document).ready(function(){
            $('.mine_select').hide();
            var val = $('#category').val();
            var s_val = $('#hidden_sub').val();
            $.ajax({
                url:'{{ route("GetMainFolder")}}',
                type:"get",
                data:{val:val,sub_folder:s_val},
                success:function(data)
                {
                    $('.mine_select').show();
                    $('#sub_folder_select').html(data);
                }

            });

        });
        // $('.add_more').click(function(){
        //     $('#sub_folder').val($('#category').val());
        // });

        $('.save_sub').on('click',function(){
            var sub_folder = $('#sub_folder').val();
            $('#sub_folder_select').append('<option value="'+sub_folder+'">'+sub_folder+'</option>');
            $('#exampleModal').modal('hide');
        });

        $('#category').change(function(){
            var val = $(this).val();
            $.ajax({
                url:'{{ route("GetMainFolder")}}',
                type:"get",
                data:{val:val},
                success:function(data)
                {
                    $('.mine_select').show();
                    $('#sub_folder_select').html(data);
                }

            });
        });
    </script>
    
@endsection