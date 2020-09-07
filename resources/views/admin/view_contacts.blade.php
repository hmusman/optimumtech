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
                            <h4 class="page-title mb-1">Contacts View</h4>
                           
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
                                   
                                    <table id="datatable" class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <div class="row">
                                          <div class="col-md-10"></div>
                                          <div class="col-md-2">
                                              <button type="button" style="width: 100%; float: right;" class="btn-primary btn contactView">View</button>
                                          </div>
                                        </div>
                                      
                                        <thead>
                                          
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th>Status</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>

                                        </thead>
    
    
                                        <tbody>

                                            <form class="changeContactStatus" method="post" action="">
                                                @csrf
                                                @if($contacts->count()>0)
                                                    @php $i=1 @endphp
                                                    @foreach($contacts as $contact)
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox" data-id="{{ $contact->id }}">
                                                                    <input type="checkbox" class="custom-control-input changeContactStatus" id="customCheck{{ $contact->id }}" name="checkboxes[]" value="{{ $contact->id }}">
                                                                    <label class="custom-control-label" for="customCheck{{ $contact->id }}"></label>
                                                                </div>
                                                                 
                                                                </td>
                                                            <td>{{ $i++ }}</td>
                                                            <td>
                                                                {{ $contact->status==1 ? 'Viewed':'' }}
                                                            </td>
                                                            <td> {{ ucfirst($contact->name)}}</td>
                                                            <td>{{ $contact->email }}</td>
                                                            <td>{{ $contact->phone }}</td>
                                                            <td>{{ $contact->subject }}</td>
                                                            <td><p>
                                                                {{ ucfirst($contact->message) }}
                                                            </p></td>
                                                           <td>
                                                             
                                                                <div class="btn-group" role="group" aria-label="Delete Button">
                                                                  <input type="hidden" name="" id="route{{ $contact->id }}" value="ContactDelete/{{ $contact->id }}">
                                                                        <button type="button" data-id="{{ $contact->id }}" aria-label="Delete Button" class="btn btn-danger mdi mdi-close-box-multiple-outline anchor_delete_btn title_btn"></button>
                                                                </div>
                                                           </td>
                                                        </tr>
                                                    @endforeach

                                                @else
                                                    <tr><td colspan="8" class="text-center">No Contact Available</td></tr>

                                                @endif
                                            </form>

                                           

                                            
                                                    
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