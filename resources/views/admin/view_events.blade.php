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
                            <h4 class="page-title mb-1">Events View</h4>
                           
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
                                    <a style="float: right;margin-bottom: 15px; " href="{{ route('Event.create') }}" class="pull-right btn btn-primary">Add New</a>
                                    <table id="datatable" class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                      
                                        <thead>
                                           
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Detail</th>
                                                <th>Meta Name</th>
                                                <th>Meta Detail</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Address</th>
                                                <th>Banner</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
    
    
                                        <tbody>
                                            @if($events->count()>0)
                                                @php $i=1; @endphp
                                                @foreach($events as $event)
                                                    @php $img = 'storage/'.$event->img @endphp 
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ ucfirst($event->title) }}</td>
                                                        <td><p>
                                                           {{ ucfirst($event->detail) }}
                                                        </p></td>
                                                        <td> {{ ucfirst($event->meta_name)}}</td>
                                                        <td><p>
                                                            {{ ucfirst($event->meta_detail) }}
                                                        </p></td>
                                                        <td>{{ date('d/m/yy',strtotime($event->event_date)) }}</td>
                                                        <td>{{ date('h:i a',strtotime($event->event_time) )}}</td>
                                                        <td>{{ ucfirst($event->address) }}</td>
                                                        
                                                        <td> 
                                                            <img src="{{ asset($img) }}" class="appImg" style="height: 50px; width: 100px; "/>
                                                        </td>
                                                       
                                                       <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="{{ route('Event.edit',$event->id) }}" aria-label="Edit Button" class="btn btn-primary mdi mdi-delete-alert title_btn"></a>&nbsp;
                                                            <form style="margin-left: 10px;" id="{{ $event->id }}" method="post" action="{{ route('Event.destroy',$event->id) }}">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="button" data-id="{{ $event->id }}" aria-label="Delete Button" class="btn btn-danger mdi mdi-close-box-multiple-outline title_btn item_delete_btn"></button>
                                                            </form>
                                                        </div>
                                                       </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr><td colspan="7" class="text-center">No Event Available</td></tr>
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