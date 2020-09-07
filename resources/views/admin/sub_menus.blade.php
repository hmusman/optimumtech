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
                            <h4 class="page-title mb-1">Sub Menu</h4>
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

                                    <h4 class="header-title">Sub Menus</h4>
                                    @if(Session::has('msg'))
                                        <div class="alert alert-success col-md-4">{{ Session::get('msg') }}</div>
                                    @endif

                                    <div class="row">
                                      <div class="col-md-12">
                                        <a style="float: right;margin-bottom: 15px; " href="{{ route('SubMenu.create') }}" class="pull-right btn btn-primary">Add New</a>
                                      <table id="subMenuTable" class="table table-striped">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Main</th>
                                               <th>Title</th>
                                               <th>Route</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                            @php $i=1 @endphp
                                            @if($subs->count() > 0)
                                                 @foreach($subs as $sub)
                                                    <tr>
                                                       <td>{{ $i }}</td>
                                                       <td>{{ ucwords($sub->mainmenu->title) }}</td>
                                                       <td>{{ ucwords($sub->title) }}</td>
                                                       <td>{{ $sub->route }}</td>
                                                       <td>
                                                           <table>
                                                               <tr>
                                                                   <td><a href="{{ route('SubMenu.edit',$sub->id) }}" aria-label="Edit Button" class="btn btn-primary mdi mdi-delete-alert title_btn"></a></td>
                                                                   <td>
                                                                       <form method="post" id="{{ $sub->id }}" action="{{ route('SubMenu.destroy',$sub->id) }}">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="button" data-id="{{ $sub->id }}" aria-label="Delete Button" class="btn btn-danger mdi mdi-close-box-multiple-outline title_btn item_delete_btn"></button>
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
                                                   <td colspan="5" class="text-center">No Sub Menu Is Available</td>
                                                   
                                                </tr>
                                            @endif
                                           
                                           
                                        </tbody>
                                    </table>
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
    <!-- End Page-content -->
@endsection<!-- end content -->

@section('footer')
  @include('includes.admin_footer')
@endsection<!-- end footer -->