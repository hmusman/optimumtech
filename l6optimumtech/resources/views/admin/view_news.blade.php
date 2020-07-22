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
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">File Upload</li>
                            </ol>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
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
    
                                    
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                      
                                        <thead>
                                            <!-- <tr style="background-color: #626363;">
                                                <td class="text-center  " colspan="5" style="color:white; font-weight: 600; font-size: larger; " >Lattest News View</td>
                                              </tr> -->
                                        <tr>
                                            <th>News Title</th>
                                            <th>News Description</th>
                                            <th>News Date</th>
                                             <th>News Picture</th>
                                         <th>Action</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        <tr>
                                            <td>NewsTitleHere</td>
                                            <td><p>
                                                This develop amazing features that perform under the highest performance and demanded requirements possible part of
                  the team punctually.
                                            </p></td>
                                            <td>05/08/2020</td>

                                            <td><img src="{{ asset('storage/admin/images/79294404_748482028971702_2754632774856998912_n.png') }}" style="width: 180px; height: 110px; " /></td>
                                           <td>
                                             
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button    type="button" class="btn btn-primary mdi mdi-delete-alert"></button>&nbsp;
                                                <button type="button" class="btn btn-primary mdi mdi-shield-edit"></button>&nbsp;
                                                <button type="button" class="btn btn-primary mdi mdi-close-box-multiple-outline"></button>
                                            </div>
                                           </td>
                                        </tr>






                                        <tr>
                                            <td>News Title Here</td>
                                            <td><p>
                                                This develop amazing features that perform under the highest performance and demanded requirements possible part of
                  the team punctually.
                                            </p></td>
                                            <td>05/08/2020</td>

                                            <td><img src="{{ asset('storage/admin/images/79294404_748482028971702_2754632774856998912_n.png') }}" style="width: 180px; height: 110px; " /></td>
                                           <td>
                                             
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button    type="button" class="btn btn-primary mdi mdi-delete-alert"></button>&nbsp;
                                                <button type="button" class="btn btn-primary mdi mdi-shield-edit"></button>&nbsp;
                                                <button type="button" class="btn btn-primary mdi mdi-close-box-multiple-outline"></button>
                                            </div>
                                           </td>
                                        </tr>



                                        <tr>
                                            <td>News Title Here</td>
                                            <td><p>
                                                This develop amazing features that perform under the highest performance and demanded requirements possible part of
                  the team punctually.
                                            </p></td>
                                            <td>05/08/2020</td>

                                            <td><img src="{{ asset('storage/admin/images/79294404_748482028971702_2754632774856998912_n.png') }}" style="width: 180px; height: 110px; " /></td>
                                           <td>
                                             
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button    type="button" class="btn btn-primary mdi mdi-delete-alert"></button>&nbsp;
                                                <button type="button" class="btn btn-primary mdi mdi-shield-edit"></button>&nbsp;
                                                <button type="button" class="btn btn-primary mdi mdi-close-box-multiple-outline"></button>
                                            </div>
                                           </td>
                                        </tr>



                                        <tr>
                                            <td>News Title Here</td>
                                            <td><p>
                                                This develop amazing features that perform under the highest performance and demanded requirements possible part of
                  the team punctually.
                                            </p></td>
                                            <td>05/08/2020</td>

                                            <td><img src="{{ asset('storage/admin/images/79294404_748482028971702_2754632774856998912_n.png') }}" style="width: 180px; height: 110px; " /></td>
                                           <td>
                                             
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button    type="button" class="btn btn-primary mdi mdi-delete-alert"></button>&nbsp;
                                                <button type="button" class="btn btn-primary mdi mdi-shield-edit"></button>&nbsp;
                                                <button type="button" class="btn btn-primary mdi mdi-close-box-multiple-outline"></button>
                                            </div>
                                           </td>
                                        </tr>




                                      

                                                    
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