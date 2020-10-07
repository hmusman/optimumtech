@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->
@section('style')
<link rel="stylesheet" href="{{asset('assets/gallery/style.css')}}">
<style>
    @media (max-width: 550px){

    	.Grid-row {
    		display: block !important;
    	}
    	.Card {
    		background-color: transparent !important;
    	}
    	.Card-thumb {
    		margin-left: 13px !important;
    		margin-bottom: 7px !important;
    		width: 44rem !important;
    		height: 23rem !important;
    	}
    	.Card-title, .Card-explore {
    		height: 2rem !important;
    	}
		.Card-button {
			left: 23rem !important;
    		top: 15rem !important;
    		padding: 1.5rem 11rem !important;
    		font-size: 1.75rem !important;
		}
		.Card-explore span {
			font-size: 15px !important;
		}
		.Card-title, .Card-explore {
			position: unset !important;
			display: flex !important;
		}
		.Gallery-image {
			width: 15rem !important;
    		height: 14rem !important;
		}
		.Gallery-image--primary {
		    width: 31rem !important;
		    height: 30rem !important;
		}


	}
</style>
@endsection

@section('content')
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
	<div class="main-content">
		    <!-- Section: Gallery -->
		    <section id="gallery" class="bg-lighter mt-60 mb-60 pb-250">
		        <div class="container">
		          <div class="section-title mb-10">
		            <div class="row">
		              <div class="col-md-12 mt-5">
		                <h2 class="mt-5 text-uppercase text-theme-colored title line-bottom line-height-1">Our<span
		                    class="text-theme-color-2 font-weight-400"> Gallery</span></h2>
		              </div>
		            </div>
		          </div>
		          
		          <div class="section-content" id="DynamicwidthOfGallary">
		            <div class="row">
		              <div class="col-md-12">
		                <!-- Works Filter -->
		                <div class="portfolio-filter font-alt align-center">
		                  <!-- <a href="#select4"  class="active" data-filter=".select4">Album</a>
		                  <span  > -->
		              		@if($photoFilter->count()>0)
		              			@php $i = 1; @endphp
		              			 <a href="" class="active all_filter" type="button"> All</a>
		              			@foreach($photoFilter as $filter)
		              				
		              				<a href="" type="button" class="myFilter" data-id="{{ $filter->category }}"  >{{ ucfirst($filter->category) }}</a>
		              				@php $i++; @endphp
		              			@endforeach
		              			
				               
		              		@endif
		                 
		                  </span>
		                </div>
		                <!-- End Works Filter -->

		                <!-- partial:index.partial.html -->
							<section class="Grid ">
							  <div class="row my_grid_row"> 
 							  </div>
							</section> 
							<section class="Gallery" id="gallery-1">
							  
							  <div class="Gallery-header"><h3 id="open-folder" style="text-align: center;"></h3><a class="Gallery-close" onclick="closeAll()">×</a></div>

							  <div class="container" >
							   <div class="row" id="sub_folder_images">
							   	
							   </div>
							  </div>
							  
							</section>
					
		                <!-- End Portfolio Gallery Grid -->
		              </div>
		            </div>
		          </div>
		        </div>
		    </section>
	    
	</div>


@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->
@section('script')
<!-- partial -->
<script  src="{{asset('assets/gallery/script.js')}}"></script>
<script type="text/javascript">
	
	function view_all_images(sub)
	{
		$.ajax({
			url:"{{ route('LoadSubFolderImages') }}",
			type:'get',
			data:{sub:sub},
			success:function(data)
			{
				$('.sub_folder_images').html(data);
			}
		});
	}

	function openMyGallery(id,sub) {

	  $.ajax({
	      url:"{{ route('LoadSubFolderImages') }}",
	      type:'get',
	      data:{sub:sub},
	      success:function(data)
	      {
	        $('#sub_folder_images').html(data.output);
	        $('#open-folder').html(data.folder);
	      }
	    });
	  closeMyAll();
	  const gallery = document.getElementById('gallery-' + id);
	  const card = document.getElementById('card-' + id);
	  gallery.classList.add('Gallery--active');
	  // card.classList.add('Card--active');

	  
	}

	function closeMyAll() {
	  const galleryActv = document.querySelector('.Gallery--active');
	  const cardActv = document.querySelector('.Card--active');
	  if (galleryActv) {
	    galleryActv.classList.remove('Gallery--active');
	  }
	  if (cardActv) {
	    cardActv.classList.remove('Card--active');
	  }
	}

	function all_load()
	{
		var main = "*";
		$.ajax({
			url:"{{ route('LoadAllSubFolder') }}",
			type:'get',
			data:{main:main},
			success:function(data)
			{
				$('.my_grid_row').html(data);
			}
		});
	}

	$(document).ready(function(){
		var main = "*";
		$.ajax({
			url:"{{ route('LoadAllSubFolder') }}",
			type:'get',
			data:{main:main},
			success:function(data)
			{
				$('.my_grid_row').html(data);
			}
		});
	});

	$('.all_filter').click(function(event){
		event.preventDefault();
		var main = "*";
		$.ajax({
			url:"{{ route('LoadAllSubFolder') }}",
			type:'get',
			data:{main:main},
			success:function(data)
			{
				$('.my_grid_row').html(data);
			}
		});
	});

	$('.myFilter').click(function(){
		var main = $(this).data('id');
		$.ajax({
			url:"{{ route('LoadSubFolder') }}",
			type:'get',
			data:{main:main},
			success:function(data)
			{
				$('.my_grid_row').html(data);
			}
		});
	});

	// $('.view_all_images').click(function(){
	// 	var sub = $(this).data('id');
	// 	alert(sub);
	// 	$.ajax({
	// 		url:"{{ route('LoadSubFolderImages') }}",
	// 		type:'get',
	// 		data:{sub:sub},
	// 		success:function(data)
	// 		{
	// 			// $('.sub_folder_images').html(data);
	// 			console.log(data);
	// 		}
	// 	});
	// });

</script>

@endsection