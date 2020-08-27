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
                            <h4 class="page-title mb-1">Testimonial View</h4>
                           
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
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                      
                                        <thead>
                                          
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Detail</th>
                                                <th>Designation</th>
                                                <th>Picture</th>
                                                <th>Action</th>
                                            </tr>

                                        </thead>
    
    
                                        <tbody>

                                            @if($members->count()>0)
                                                @php $i=1 @endphp
                                                @foreach($members as $member)
                                                    @php $img = 'storage/'.$member->img @endphp
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td> {{ ucfirst($member->name)}}</td>
                                                        <td><p>
                                                            {{ ucfirst($member->detail) }}
                                                        </p></td>
                                                        <td> {{ ucfirst($member->designation) }}</td>
                                                        <td><img src="{{ asset($img) }} " style="width: 100px; height: 100px;" /></td>
                                                       <td>
                                                         
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                           <a href="{{ route('Team.edit',$member->id) }}" class="btn btn-primary mdi mdi-delete-alert"></a>&nbsp;
                                                            <form style="margin-left: 10px;" method="post" action="{{ route('Team.destroy',$member->id) }}">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-primary mdi mdi-close-box-multiple-outline"></button>
                                                            </form>
                                                        </div>
                                                       </td>
                                                    </tr>
                                                @endforeach

                                            @else
                                                <tr><td colspan="6" class="text-center">No Testimonial Available</td></tr>

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