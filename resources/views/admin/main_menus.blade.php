@extends('layouts.basic')

@section('head')
  @include('includes.admin_head')
@endsection<!-- end head -->

@section('header')
  @include('includes.admin_header')
@endsection<!-- end header -->


@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

        <div class="page-content">

            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-1">Main Menu</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                   
                                </div>
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

                                    <h4 class="header-title">Main Menus</h4>
                                    @if(Session::has('msg'))
                                        <div class="alert alert-success col-md-4">{{ Session::get('msg') }}</div>
                                    @endif

                                    <table class="table table-striped">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>No.Sub</th>
                                               <th>Title</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                            @php $i=1 @endphp
                                            @if($mains->count() > 0)
                                                 @foreach($mains as $main)
                                                    <tr>
                                                       <td>{{ $i }}</td>
                                                       <td>{{ $main->submenus->count() }}</td>
                                                       <td>{{ ucwords($main->title) }}</td>
                                                       <td>
                                                           <table>
                                                               <tr>
                                                                   <td><a href="{{ route('MainMenu.edit',$main->id) }}" class="btn btn-primary mdi mdi-delete-alert"></a></td>
                                                                   <td>
                                                                       <form method="post" action="{{ route('MainMenu.destroy',$main->id) }}">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="submit" class="btn btn-danger mdi mdi-close-box-multiple-outline"></button>
                                                                       </form>
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                       </td>
                                                    </tr>
                                                     @php $i++ @endphp
                                                @endforeach
                                            @else
                                                <tr>
                                                   <td colspan="3" class="text-center">No Main Menu Is Available</td>
                                                   
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
    <!-- End Page-content -->
@endsection<!-- end content -->

@section('footer')
  @include('includes.admin_footer')
@endsection<!-- end footer -->