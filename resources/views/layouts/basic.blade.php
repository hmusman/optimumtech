
<!DOCTYPE html>
<html>
<head>
	@yield('head')
	@yield('style')
</head>
<body>
	 <div id="wrapper" class="clearfix">
	 	
	 	@yield('header')

	 	@yield('content')
	 
	 	@yield('footer')


	 </div><!-- end wrapper -->
@yield('script')
</body>
</html>
