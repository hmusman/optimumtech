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
                            <h4 class="page-title mb-1">Product Customer View</h4>
                            
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
                                    <a style="float: right;margin-bottom: 15px; " href="{{ route('ProductCustomer.create') }}" class="pull-right btn btn-primary">Add New</a>
                                    <table id="datatable" class="table table-bordered table-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            
                                            <tr>
                                                <th>#</th>
                                                <th>Product</th>
                                                <th>Name</th>
                                                <th>Url</th>
                                                <th>Logo</th>
                                                <th>Detail</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
    
                                           
                                            <tbody>
                                                @if($customers->count()>0)
                                                    @php $i=1; @endphp
                                                    @foreach($customers as $customer)
                                                        @php $img = 'storage/'.$customer->img  @endphp
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ ucfirst($customer->product->name) }}</td>
                                                            <td>{{ ucfirst($customer->name) }}</td>
                                                            <td>{{ $customer->url }}</td>
                                                            <td><img src="{{ asset($img) }}" class="appImg" style="height: 50px; width: 100px; "/></td>
                                                            <td><p>
                                                                {{ ucfirst($customer->detail) }}
                                                            </p></td>
                                                            <td> 

                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                    <a href="{{ route('ProductCustomer.edit',$customer->id) }}" aria-label="Edit Button" class="btn btn-primary mdi mdi-delete-alert title_btn"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                                        <form style="margin-left: 10px;" id="{{ $customer->id }}" method="post" action="{{ route('ProductCustomer.destroy',$customer->id) }}">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="button" data-id="{{ $customer->id }}" aria-label="Delete Button" class="btn btn-danger mdi mdi-close-box-multiple-outline title_btn item_delete_btn"></button>
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
