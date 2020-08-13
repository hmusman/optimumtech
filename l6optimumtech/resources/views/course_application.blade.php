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
	    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('storage/images/bg/bg3.jpg')}}">
	      <div class="container pt-70 pb-20">
	        <!-- Section Content -->
	        <div class="section-content">
	          <div class="row">
	            <div class="col-md-12">
	              <h2 class="title text-white">Course Registration</h3>
	              <ul class="list-inline text-white">
	                <li><a href="/" class="text-gray"> Home</a>  &nbsp;&nbsp;/ </li>
	                <li><span class="text-gray">Registration</span></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>

	    <section>
	      <div class="container">
	        <div class="section-content">
	          <div class="row mt-30">
	            <form id="checkout-form" action="{{ route('Apply') }}" method="post">
	            	@csrf
	              <div class="col-md-2"></div>	
	              <div class="col-md-8">
	                <div class="billing-details">
	                  <h3 class="mb-30">Registration</h3>
	                  <div class="row">
	                  	@if(Session::has('msg'))
	                  		<div class="alert alert-success">{{ Session::get('msg') }}</div>
	                  	@endif

	                  	@if(Session::has('warningMsg'))
	                  		<div class="alert alert-warning">{{ Session::get('warningMsg') }}</div>
	                  	@endif
	                    <div class="form-group col-md-6">
	                      <label for="checkuot-form-fname">First Name</label>
	                      <input type="hidden" name="course" value="{{ $id }}">
	                      <input id="checkuot-form-fname" type="test" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="First Name">
	                      @error('first_name')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                      @enderror
	                    </div>
	                    <div class="form-group col-md-6">
	                      <label for="checkuot-form-lname">Last Name</label>
	                      <input id="checkuot-form-lname" type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Last Name">
	                      @error('last_name')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                      @enderror
	                    </div>
	                    <div class="col-md-12">

	                       <div class="form-group">
	                        <label for="checkuot-form-email">Email Address</label>
	                        <input id="checkuot-form-email" type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter CNIC Number">
	                        @error('email')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="checkuot-form-email">Identity Card Number</label>
	                        <input id="checkuot-form-email" type="text" name="cnic" maxlength="13" value="{{ old('cnic') }}" class="form-control" placeholder="Enter CNIC Number">
	                        @error('cnic')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                        @enderror
	                      </div>

	                      <div class="form-group">
	                        <label for="checkuot-form-email">Phone</label>
	                        <input id="checkuot-form-email" type="text" name="phone" maxlength="11" value="{{ old('phone') }}" class="form-control" placeholder="Enter Phone Number">
	                        @error('phone')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                        @enderror
	                      </div>


	                      <div class="form-group">
	                        <label for="checkuot-form-address">Address</label>
	                        <textarea id="checkuot-form-address" name="address" class="form-control" value="{{ old('address') }}" placeholder="Street address">{{ old('address') }}</textarea>
	                        @error('address')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                        @enderror
	                      </div>
	                  
	                    </div>
	                    <div class="form-group col-md-6">
	                      <label for="checkuot-form-city">City</label>
	                      <input id="checkuot-form-city" type="text" name="city" value="{{ old('city') }}" class="form-control" placeholder="City">
	                      @error('city')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                       @enderror
	                    </div>
	                    <div class="form-group col-md-6">
	                      <label>State/Province</label>
	                      <select class="form-control" name="province">
	                        <option disabled="" selected="">Select</option>
	                        <option <?php if(old('province')=='punjab'){ echo "selected=''"; } ?> value="punjab">Punjab</option>
	                        <option <?php if(old('province')=='sindh'){ echo "selected=''"; } ?> value="sindh">Sindh</option>
	                        <option <?php if(old('province')=='balochistan'){ echo "selected=''"; } ?> value="balochistan">Balochistan</option>
	                        <option <?php if(old('province')=='khyber pakhtunkhan'){ echo "selected=''"; } ?> value="khyber pakhtunkhan">Khyber Pakhtunkhan</option>
	                        <option <?php if(old('province')=='gilgit balitistan'){ echo "selected=''"; } ?> value="gilgit balitistan">Gilgit Balitistan</option>
	                      </select>
	                      @error('province')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                       @enderror
	                    </div>
	                    <div class="form-group col-md-6">
	                      <label for="checkuot-form-zip">Zip/Postal Code</label>
	                      <input id="checkuot-form-zip" type="text" name="zip" value="{{ old('zip') }}" class="form-control" placeholder="Zip/Postal Code">
	                      @error('zip')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                       @enderror
	                    </div>
	                    <div class="form-group col-md-6">
	                      <label>Country</label>
	                      <select class="form-control" name="country">
	                        <option disabled="" selected="">Select Country</option>
	                        <option <?php if(old('country')=='pakistan'){ echo "selected=''"; } ?> value="pakistan">Pakistan</option>
	                        
	                      </select>
	                       @error('country')
	                      	  <p class="text-danger mt-3">{{ $message }}</p>
	                       @enderror
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-2"></div>
	             <!--  <div class="col-md-12">
	                <h3>Your order</h3>
	                <table class="table table-striped table-bordered tbl-shopping-cart">
	                  <thead>
	                    <tr>
	                      <th>Photo</th>
	                      <th>Product Name</th>
	                      <th>Total</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                    <tr>
	                      <td class="product-thumbnail"><a href="#"><img alt="member" src="images/products/4.jpg"></a></td>
	                      <td><a href="#">Helmets</a> x 2</td>
	                      <td><span class="amount">$36.00</span></td>
	                    </tr>
	                    <tr>
	                      <td class="product-thumbnail"><a href="#"><img alt="member" src="images/products/3.jpg"></a></td>
	                      <td><a href="#">Saddles</a> x 3</td>
	                      <td><span class="amount">$115.00</span></td>
	                    </tr>
	                    <tr>
	                      <td class="product-thumbnail"><a href="#"><img alt="member" src="images/products/7.jpg"></a></td>
	                      <td><a href="#">Vests</a> x 1</td>
	                      <td><span class="amount">$68.00</span></td>
	                    </tr>
	                    <tr>
	                      <td>Cart Subtotal</td>
	                      <td>&nbsp;</td>
	                      <td>$180.00</td>
	                    </tr>
	                    <tr>
	                      <td>Shipping and Handling</td>
	                      <td>&nbsp;</td>
	                      <td>Free Shipping</td>
	                    </tr>
	                    <tr>
	                      <td>Order Total</td>
	                      <td>&nbsp;</td>
	                      <td>$250.00</td>
	                    </tr>
	                  </tbody>
	                </table>
	              </div> -->
	            <!--   <div class="col-md-12">
	                <h3>Payment Information</h3>
	                <div class="payment-method">
	                  <div class="radio">
	                    <label>
	                      <input type="radio" name="optionsRadios" value="option1" checked>
	                      Direct Bank Transfer </label>
	                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
	                  </div>
	                  <div class="radio">
	                    <label>
	                      <input type="radio" name="optionsRadios" value="option2" checked>
	                      Cheque Payment </label>
	                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
	                  </div>
	                  <div class="radio">
	                    <label>
	                      <input type="radio" name="optionsRadios" value="option3" checked>
	                      PayPal Payment </label>
	                    <p>Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
	                  </div>
	                </div>
	              </div> -->
	              <div class="col-md-12">
	                <div class="text-center"> <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px mb-30" data-loading-text="Please wait...">Submit</button> </div>
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
	    </section>
  <!-- end main-content -->

  </div>

@endsection<!-- end content -->

@section('footer')
	@include('includes.footer')
@endsection<!-- end footer -->