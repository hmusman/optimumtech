@extends('layouts.basic')

@section('head')
	@include('includes.head')
@endsection<!-- end head -->

@section('header')
	@include('includes.header')
@endsection<!-- end header -->


@section('content')
	
	<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header layer-overlay" data-bg-img="{{ asset('storage/images/bg/bg1.jpg') }}">
      <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-8 xs-text-center">
              <h2 class="text-white mt-10">Product Branding</h2>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb white mt-10 text-right xs-text-center">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: About -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img class="pull-left mr-15 thumbnail" src="{{ asset('storage/images/products/pbrand.png') }}" alt="">
            <h3>Product Branding</h3>
            <p style="text-align: justify;"> 
              Our world is in a state of dynamic innovations which sometimes seems to be pretty exciting and productive but at the same time, really intimidating. 	Many entrepreneurs might find it appalling catching up with evolving trends on their own. 
            </p><p style="text-align: justify;"> In such case, product branding comes handy. Product Branding is the process of developing a unique name and identity for a product ensuring awareness and credibility and creating customer loyalty, among other advantages.  Building a brand takes time and involves a lot of resources.   </p><p style="text-align: justify;"></p>It is however an important marketing tool for stimulating recognition.</p>
              Optimum Tech can help you in leading your product to topnotch position. We won’t be just designing an attractive logo and printing all your collateral in the company’s colors we’ll be establishing a brand message which conveys the key point of the difference between you and your competitor. 
              
            </p>
            <div class="clearfix"></div>
            <h4 class="text-theme-colored line-bottom text-theme-colored">Why to take this service?</h4>
           
            <p>
              What do you offer to clients that no one else does? To find that crux, apart from only deep understanding of your product and company culture, we also explore what your competitors have to deliver as well. We also examine your target market segment and identify it’s both needs and wants. Only then, after knowing the bigger picture, do we develop digital media to represent your brand.
            </p><p style="text-align: justify;"> We extend your brand’s reach with displays, events and promotions to catch reader’s attention and create a memorable impression instantaneously, leaving him/her thinking about the advertisement after they have driven past it.
              
            </p>

            <h4 class="text-theme-colored line-bottom text-theme-colored">Advantages</h4>
            <ul class="list">
              <li>We can get you recognition. Your customers will get to know you well</li>
              <li>We can increase your business value</li>
              <li>We can generate new customers for you</li>

              <li>Our services for product branding can even improve your employee’s satisfaction level.</li>
              <li>We can create a professional appearance and well-strategized branding that will help the company build trust with consumers, potential clients and customers.</li>
              <ul>    








            <div class="separator separator-rouned">
              <i class="fa fa-cog fa-spin"></i>
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