<?php
Route::view('/', 'index');
Route::view('Products', 'products');
Route::view('Services','services');
Route::view('Courses','courses');
Route::view('ContactUs','contactus');
Route::view('Courses/PHP','single_course');
Route::view('Courses/NodeJs','single_course');
Route::view('Courses/Javascript','single_course');
Route::view('Courses/ComputerTechnologies','single_course');
Route::view('Courses/FinalSmesterCourses','final_smester_courses');
Route::view('Courses/TechnicalCourses','technical_courses');
Route::view('Courses/DesigningCourses','designing_courses');
Route::view('Courses/ShortCourses','short_courses');
Route::view('ServicesDetail','service_detail');
Route::view('OnlineLearning','online_learning');
Route::view('Tourism','tourism');
Route::view('DesigningAndPrint','designing_print');
Route::view('FreeCourses','free_courses');
Route::view('CampusManager','campus_manager');
Route::view('HeadTourism','head_tourism');
Route::view('CoFounder','co_founder');
Route::view('BookEvents','book_event');
Route::view('LatestNewsDetail','news_detail');
Route::view('SearchEngineMarketing','search_engine');
Route::view('ProductBranding','product_branding');
Route::view('WebsiteDesigningDevelopment','website_designing_development');
Route::view('MobileApplicationDevelopment','mobile_application_development');
Route::view('OffshoreITStaffing','offshore_it');
Route::view('Domain&Hosting','domain_hosting');
Route::view('Outsourcing','outsourcing');
Route::view('TaxationAudit','taxation_audit');
Route::view('Admin','admin.index');
Route::prefix('Admin')->group(function(){


	Route::resource('/Course','CourseController');
	Route::view('/AddLatestNews','admin.add_latest_news');
	Route::view('/AddOptimumClient','admin.add_optimum_client');
	Route::resource('/Slider','SliderController');
	Route::view('/AddTestimonial','admin.add_testimonial');
	Route::view('/AddUpcomingEvent','admin.add_upcoming_event');
	Route::view('/ViewCourses','admin.view_courses');
	Route::resource('/News','NewModelController');
	Route::view('/ViewClients','admin.view_clients');
	Route::view('/ViewSliders','admin.view_sliders');
	Route::view('/ViewTestimonials','admin.view_testimonials');
	Route::view('/ViewUpcomingEvents','admin.view_events');

});

