<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/Admin" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('storage/admin/images/logo.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('storage/admin/images/logo.png') }}" alt="" >
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('storage/admin/images/logo-sm-light.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('storage/admin/images/logo-light.png') }}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-backburger"></i>
            </button>

            <!-- App Search-->
            <!-- <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="mdi mdi-magnify"></span>
                </div>
            </form> -->
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">
        
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block notification ">
                <!-- <button type="button" class="btn header-item waves-effect" id="page-header-flag-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i><span style="top: 19px;position: absolute;margin-left: 2px;width: 10px;height: 15px;border-radius: 32%;font-size: 13px;color: red;">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                       q
                    </a>
                </div> -->
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('storage/admin/images/users/admin.jpg') }}" alt="Header Avatar">
                    <span class="d-none d-sm-inline-block ml-1">{{ ucfirst(Auth::user()->name) }}</span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="mdi mdi-logout font-size-16 align-middle mr-1">
                                        {{ __('Logout') }}
                     </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>

</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/Admin" class="waves-effect">
                       <!--  <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span> -->
                        <span>Dashboard</span>
                    </a>
                </li>

                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-scenery"></i></div>
                        <span>Setting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('News.index') }}">View News </a></li>
                        <li><a href="{{ route('Event.index') }}">View Events</a></li>
                        <li><a href="{{ route('CourseApplication.index') }}">View Course Application </a></li>
                        <li><a href="{{ route('Client.index') }}">View Clients </a></li>
                        <li><a href="{{ route('Testimonial.index') }}">View Testimonials </a></li>
                        <li><a href="{{ route('Gallery.index') }}">View Gallery</a></li>
                        <li><a href="{{ route('Team.index') }}">View Team </a></li>
                        <li><a href="{{ route('ProductCustomer.index') }}">View Product Customer </a></li>
                        <li><a href="{{ route('SiteContact.index') }}">View Website Contact </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-scenery"></i></div>
                        <span>Slider</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{--<li><a href="{{ route('Slider.create') }}">Add Slider/Ticker</a></li>--}}
                        <li><a href="{{ route('Slider.index') }}">View Slider</a></li>
                        <!-- <li><a href="ViewTicker.html">View Ticker</a></li> -->
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{--<li><a href="{{ route('Product.create') }}">Add Product</a></li>--}}
                        <li><a href="{{ route('Product.index') }}">View Products</a></li>
                       
                    </ul>
                </li>

                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{--<li><a href="{{ route('Service.create') }}">Add Service</a></li>--}}
                        <li><a href="{{ route('Service.index') }}">View Services</a></li>
                       
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Courses</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{--<li><a href="{{ route('Course.create') }}">Add Course</a></li>--}}
                        <li><a href="{{ route('Course.index') }}">View Courses</a></li>
                       
                    </ul>
                </li>

                {{--<li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Course Application</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <!-- <li><a href="">Add Course</a></li> -->
                        <li><a href="{{ route('CourseApplication.index') }}">View Course Application</a></li>
                       
                    </ul>
                </li>--}}

                {{--<li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Course Batches</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Batch.create') }}">Add Batch</a></li>
                        <li><a href="{{ route('Batch.index') }}">View Batchs</a></li>
                       
                    </ul>
                </li>--}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{--<li><a href="{{ route('Category.create') }}">Add Category</a></li>--}}
                        <li><a href="{{ route('Category.index') }}">View Categories</a></li>
                       
                    </ul>
                </li>



                {{--<li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-bookmark"></i></div>
                        <span>News/Events</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('News.create')}}">Add Latest News</a></li>
                        <li><a href="{{ route('News.index') }}">View News</a></li>
                        <li><a href="{{ route('Event.create') }}">Add Events</a></li>
                        <li><a href="{{ route('Event.index') }}">View Events</a></li>
                       
                    </ul>
                </li>--}}



                {{--<li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                        <span>Testimonial</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Testimonial.create') }}">Add Testimonial</a></li>
                        <li><a href="{{ route('Testimonial.index') }}">View Testimonial</a></li>
                       
                    </ul>
                </li>--}}

                {{--<li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                        <span>Team</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Team.create') }}">Add Team Member</a></li>
                        <li><a href="{{ route('Team.index') }}">View Team Members</a></li>
                       
                    </ul>
                </li>--}}

                {{--<li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                        <span>Gallery</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Gallery.create') }}">Add Photo</a></li>
                        <li><a href="{{ route('Gallery.index') }}">View Photos</a></li>
                       
                    </ul>
                </li>}--}

                {{--<li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-apps"></i></div>
                        <span>Optimum Clients</span>
                    </a>{{--
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Client.create') }}">Add Client</a></li>
                        <li><a href="{{ route('Client.index') }}">View Client</a></li>
                       
                    </ul>
                </li>--}}

                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-apps"></i></div>
                        <span>Menus</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('MainMenu.index') }}">View Main Menu</a></li>
                        <li><a href="{{ route('SubMenu.index') }}">View Sub Menu</a></li>
                        {{--<li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-apps"></i></div>
                                <span>Main Menu</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('MainMenu.create') }}">Add Main Menu</a></li>
                                <li><a href="{{ route('MainMenu.index') }}">View Main Menu</a></li>
                               
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-apps"></i></div>
                                <span>Sub Menu</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('SubMenu.create')}}">Add Sub Menu</a></li>
                                <li><a href="{{ route('SubMenu.index') }}">View Sub Menu</a></li>
                               
                            </ul>
                        </li>--}}
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Portfolio</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{--<li><a href="{{ route('Portfolio.create') }}">Add Portfolio</a></li>--}}
                        <li><a href="{{ route('Portfolio.index') }}">View Portfolios</a></li>
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Events</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('events_applications')}}">Events Application</a></li>
                       
                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<style type="text/css">
          .myModel {
              display: none; 
              position: fixed;
              z-index: 9999;
              padding-top: 100px; 
              left: 0;
              top: 0;
              width: 100%; 
              height: 100%; 
              overflow: auto; 
              background-color: rgb(0,0,0); 
              background-color: rgba(0,0,0,0.9); 
            }

            .modal-content {
              display: block;
              width: 80%;
              max-width: 700px;
              margin-left: 24%;
            }
            
            .modal-content{
              animation-name: zoom;
              animation-duration: 0.6s;
            }

            .close {
              position: absolute;
              top: 15px;
              right: 35px;
              color: #f1f1f1;
              font-size: 40px;
              font-weight: bold;
              transition: 0.3s;
            }

            .close:hover,
            .close:focus {
              color: #bbb;
              text-decoration: none;
              cursor: pointer;
            }

            @media only screen and (max-width: 700px){
              .modal-content {
                width: 100%;
              }
            }                      
        </style>
        <div class="myModel" >
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
        </div>