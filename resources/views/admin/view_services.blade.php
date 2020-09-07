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
                            <h4 class="page-title mb-1">Service View</h4>
                           
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                               
                            </div>
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
                                    <a style="float: right;margin-bottom: 15px; " href="{{ route('Service.create') }}" class="pull-right btn btn-primary">Add New</a>
                                    <table id="datatable" class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                      
                                        <thead>
                                          
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <!-- <th>Detail</th> -->
                                                <th>Meta Name</th>
                                                <th>Meta Detail</th>
                                                 <!-- <th>Why</th> -->
                                                <th>Picture</th>
                                                <th>Action</th>
                                            </tr>

                                        </thead>
    
    
                                        <tbody>

                                            @if($services->count()>0)
                                                @php $i=1 @endphp
                                                @foreach($services as $service)
                                                    @php $img = 'storage/'.$service->img @endphp
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td> {{ ucfirst($service->name)}}</td>
                                                        {{--<td>
                                                            {!! $service->detail !!}
                                                        </td>--}}
                                                        <td> {{ ucfirst($service->meta_name)}}</td>
                                                        <td>
                                                            {{ ucfirst(substr($service->meta_detail,0,100)) }}
                                                        </td>
                                                       {{-- <td>
                                                           {{ ucfirst(substr($service->why,0,50)) }}
                                                        </td>--}}

                                                        <td><img src="{{ asset($img) }} " class="appImg" style="width: 100px; height: 100px;" /></td>
                                                       <td>
                                                         
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                           <a href="{{ route('Service.edit',$service->id) }}" aria-label="Edit Button" class="btn btn-primary mdi mdi-delete-alert title_btn"></a>&nbsp;
                                                            <form style="margin-left: 10px;" id="{{ $service->id }}" method="post" action="{{ route('Service.destroy',$service->id) }}">
                                                                @csrf
                                                                @method('delete')
                                                                 <button type="button" data-id="{{ $service->id }}" aria-label="Delete Button" class="btn btn-danger mdi mdi-close-box-multiple-outline item_delete_btn title_btn"></button>
                                                            </form>
                                                        </div>
                                                       </td>
                                                    </tr>
                                                @endforeach

                                            @else
                                                <tr><td colspan="5" class="text-center">No Service Available</td></tr>

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