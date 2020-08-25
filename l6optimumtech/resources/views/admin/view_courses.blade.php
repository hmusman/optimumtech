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
                            <h4 class="page-title mb-1">Courses View</h4>
                            
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
                                    <div class="alert alert-success statusMsg" style="display: none;"></div>
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                      
                                        <thead>
                                            
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Detail</th>
                                                <th>Type</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Applications</th>
                                                <th>URL</th>                                                t
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
    
    
                                        <tbody>
                                            @if($courses->count()>0)
                                                @php $i=1; @endphp
                                                @foreach($courses as $course)
                                                    @php $img = 'storage/'.$course->img  @endphp
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ ucwords($course->title)}}</td>
                                                        <td><p>
                                                          {{ \Illuminate\Support\Str::limit($course->detail, 100, $end='...') }}
                                                        </p></td>
                                                        <td>{{ ucfirst($course->type) }}</td>
                                                        <td>{{ $course->price }}</td>
                                                        <td><img src="{{ asset($img) }}" style="height: 50px; width: 100px; "/></td>
                                                        <td>{{ count($course->applications) }}</td>
                                                        <td>{{ $course->url }}</td>
                                                        <td data-id="{{ $course->id }}">
                                                            <select class="status">
                                                                <option <?php echo ($course->status==1) ?  "selected=''" :''?> value="1">Active</option>
                                                                <option <?php echo ($course->status==0) ? "selected=''" : ''?> value="0">Blocked</option>
                                                            </select>
                                                            
                                                        </td>
                                                        <td> 

                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a href="{{ route('Course.edit',$course->id) }}" class="btn btn-primary mdi mdi-delete-alert"></a>&nbsp;
                                                                <form style="margin-left: 10px;" method="post" action="{{ route('Course.destroy',$course->id) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="btn btn-primary mdi mdi-close-box-multiple-outline"></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                       
                                                       
                                                    </tr>
                                                @endforeach

                                            @else
                                                <tr><td colspan="7" class="text-center">No Course Available</td></tr>
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
