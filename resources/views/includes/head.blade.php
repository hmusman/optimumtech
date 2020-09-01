
  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="{{ @$product->meta_name }}" content="{{ @$product->meta_detail }}" />
  <meta name="{{ @$service->meta_name }}" content="{{ @$service->meta_detail }}" />
  <meta name="{{ @$team->meta_name }}" content="{{ @$team->meta_detail }}" />
  <meta name="{{ @$course->meta_name }}" content="{{ @$course->meta_detail }}" />
  <meta name="{{ @$event->meta_name }}" content="{{ @$event->meta_detail }}" />
  {{--<meta name="{{ @$news->meta_name }}" content="{{ @$news->meta_detail }}" />--}}

  <!-- Page Title -->
  <title>Optimum Tech</title>

   <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('storage/admin/images/logo.png') }}">

  <!-- Stylesheet -->
  <link href="{{ asset('css/bootstrap.min.css') }} " rel="stylesheet" type="text/css">
  <!-- <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"> -->
  <!-- <link href="css/animate.css" rel="stylesheet" type="text/css"> -->
  <link href="{{ asset('css/css-plugin-collections.css') }} " rel="stylesheet" />
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="{{ asset('css/menuzord-skins/menuzord-rounded-boxed.css') }} " rel="stylesheet" />
  <!-- CSS | Main style file -->
  <link href="{{ asset('css/style-main.css') }} " rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <!-- <link href="css/preloader.css" rel="stylesheet" type="text/css"> -->
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="{{ asset('css/custom-bootstrap-margin-padding.css') }} " rel="stylesheet" type="text/css">
  <!-- CSS | Responsive media queries -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
 

  <!-- CSS | Theme Color -->
  <link href="{{ asset('css/colors/theme-skin-color-set-1.css') }}" rel="stylesheet" type="text/css">
  <!-- Custom CSS -->
  <link href="css/custom.css " rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

  <style>
    a > i{
      margin-top: 10px !important;
    }
  .card {
      
      box-shadow: 0 14px 26px #626363 !important;
  }


  .effect__hover:hover{
    border: 0px #087b92 solid !important;
  }
  section > .container{
    padding-top: 0px  !important;
  }


    div[class="card effect__hover"]{
      height: 15% !important;
    }
    .icon-box {
      padding: 57px 17px !important;
  }
    .display-table-cell {
      
      vertical-align: sub !important ;
    }

    #specialp{
      font-size: 13px !important;
   
      margin-top: 5px !important;
    }

    #specialhed{
      margin-top: 1px !important;
    }

   
    /* .slick-next, .slick-prev:before{
      background-color: #d0d1d1 !important;
    } */


    

  div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-prev slick-arrow"]::before {
  color: #6263637a !important;
  }
  div[class="autoplay slick-initialized slick-slider slick-dotted"] > button[class="slick-next slick-arrow"]::before {
  color: #6263637a !important;
  }

  ul[class="slick-dots"]{
    display: none !important;
  }



  @media (min-width:500px){
    
    div[class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix"]{
      width: 74% !important;
    }
    img[src="images/ahsan.jpg"],
    img[src="images/campus.jpg"],
    img[src="images/tour.jpg"]{
      height: 30% !important;
    }
    .btn-sm {
     
      padding: 5px 5px !important;
  }
  div[class="card effect__hover"]{
      width: 100% !important;
    }
  #prodSec{
    height: 706px !important;
  }
  .slick-dotted.slick-slider{
    margin-bottom: -10px !important;
  }



  .red span {
    
      margin-left: -3px !important;
      height: 115% !important;

  }
  #redNews{
    margin-top: -27px !important;
  }
  #Newsone{
    margin-top: -20px !important;
  }

  #NewsLineBtm{
    padding-bottom: -20px !important; 
  }

  .mt-0my{
    margin-top: -7px !important;
  }
  #prodSec{
    padding-bottom: 68px !important;
  }
    }


  </style>