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
                            <h4 class="page-title mb-1">Slider View</h4>
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
                                    @if(Session::has('msg'))
                                        <div class="alert alert-success">{{ Session::get('msg') }}</div>
                                    @endif
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                      
                                        <thead>
                                            <!-- <tr style="background-color: #626363;">
                                                <td class="text-center  " colspan="3" style="color:white; font-weight: 600; font-size: larger; " >Slider View</td>
                                              </tr> -->
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                            @if($photos->count()>0)
                                                @php $i = 1 @endphp
                                                @foreach($photos as $photo)
                                                    @php $img = 'storage/'.$photo->img  @endphp
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ ucfirst($photo->category) }}</td>
                                                        <td><img src="{{ asset($img) }}"  style="height: 100px; width: 100px; "/></td>
                                                        <td> 

                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a href="{{ route('Gallery.edit',$photo->id) }}" class="btn btn-primary mdi mdi-delete-alert"></a>&nbsp;
                                                                <form style="margin-left: 10px;" method="post" action="{{ route('Gallery.destroy',$photo->id) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="btn btn-danger mdi mdi-close-box-multiple-outline"></button>
                                                                </form>
                                                                
                                                            </div>
                                                        </td>
                                                       
                                                       
                                                    </tr>
                                        
                                                @endforeach
                                            @else

                                                <tr>
                                                    <td colspan="4" class="text-center">No Slider Available</td>
                                                </tr>
                                            @endif
                              
                                        </tbody>
                                    </table>
    
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