<header id="header" class="header">
      <div class="header-top bg-theme-color-2 sm-text-center p-0">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="widget no-border m-0">
                <ul class="list-inline font-13 sm-text-center mt-5">
                  <li>
                    <a class="text-white" href="tel:{{ $contact->phone }}"><i class="fa fa-phone"></i>
                      <span style="font-size: 12px;">{{ $contact->phone }}</span></a>
                  </li>
                  <li class="text-white">|</li>
                  <li>

                    <a class="text-white" href="mailto:{{ $contact->email }}"><i class="fa fa-envelope-o"></i>
                      <span style="font-size: 12px;">{{ $contact->email }}</span></a>
                  </li>

                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                <ul class="list-inline pull-right">

                  <li class="mb-0 pb-0">
                    <div class="top-dropdown-outer pt-5 pb-10">
                      <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i
                          class="fa fa-search font-13"></i> &nbsp;</a>
                      <ul class="dropdown">
                        <li>
                          <div class="search-form-wrapper">
                            <form method="get" class="mt-10">
                              <input type="text" onfocus="if(this.value =='Enter your search') { this.value = ''; }"
                                onblur="if(this.value == '') { this.value ='Enter your search'; }"
                                value="Enter your search" id="searchinput" name="s" class="">
                              <label><input type="submit" name="submit" value=""></label>
                            </form>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
                <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                  <li><a href="https://www.facebook.com/optimumtechofficial/"><i class="fa fa-facebook text-white"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
          <div class="container pr-100 pl-100 mobile_header_nav">
            <nav id="menuzord-right" class="menuzord orange">
              <a href="/" > <img class="mt-5 mb-20" alt="" src="{{ asset('storage/images/logo.png') }}"></a>
              <ul class="menuzord-menu dark">
                {{--<li class="active"><a href="/">Home</a>
                </li>--}}
                
              @if($mains->count()>0)
                  @foreach($mains as $main)
                      @if($main->title=='home' || $main->title=='Home')
                          <li class="active"><a href="/">Home</a>
                      @else
                        @if(($main->title=='contact us' || $main->title=='Contact Us') && $main->submenus->count()==0)
                             <li><a href="/ContactUs" >{{ ucwords($main->title) }}</a></li>
                        @else
                          @if(($main->title=='portfolios' || $main->title=='portfolio' || $main->title=='Portfolio' || $main->title=='Portfolios') && $main->submenus->count()==0)
                             <li><a href="/Portfolios" >{{ ucwords($main->title) }}</a></li>
                          @else
                              @if($main->submenus->count()>0)
                                <li><a>{{ ucwords($main->title) }}<span class="label label-info">New</span></a>
                                  <ul class="dropdown">
                                    @foreach($main->submenus as $sub)
                                       <li><a href="{{ $sub->route }}">{{ ucwords($sub->title) }}</a></li>
                                    @endforeach
                                  </ul>
                                </li>
                              @endif
                          @endif
                         
                        @endif
                      @endif
                  @endforeach
                @endif 

               {{-- @if($products->count()>0)
                  <li><a href="Products">Products <span class="label label-info">New</span></a>
                    <ul class="dropdown">
                      @foreach($products as $product)
                         <li><a href="{{ route('Product.Detail',$product->id) }}">{{ ucwords($product->name) }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                @endif --}}
               

               {{-- @if($services->count()>0)
                  <li><a href="/Services">Services <span class="label label-info">New</span></a>
                      <ul class="dropdown">
                        @foreach($services as $service)
                           <li><a href="{{ route('Service.Detail',$service->id) }}">{{ ucwords($service->name) }}</a></li>
                        @endforeach
                      </ul>
                  </li>
                @endif
              --}}
                {{-- <li><a href="{{ route('Courses') }}">Courses</a>
                  
                </li>
              
                <li><a href="{{ route('ContactUs')}}">Contact Us</a> 
               
                </li>--}}

              </ul>
              </li>

              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>