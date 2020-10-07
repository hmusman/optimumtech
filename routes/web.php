<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'FrontEndController@index')->name('home');


Route::post('/subscribe_me', 'SubscriptionController@Subscribe')->name('subscribe_me');
Route::post('/register_event', 'EventController@RegisterEvent')->name('register_event');


// Route::get('/subscribingemail', function(){
// 	return view('emails.subscribingemail');
// });

Route::get('ProductDetail/{id}','FrontEndController@productShow')->name('Product.Detail');
Route::get('ServiceDetail/{id}','FrontEndController@serviceShow')->name('Service.Detail');
Route::get('Products','FrontEndController@products');
Route::get('Services','FrontEndController@services');
Route::get('Courses','FrontEndController@courses')->name('Courses');
Route::get('NewsDetail/{id}','FrontEndController@newsDetail')->name('NewsDetail');
Route::get('EventDetail/{id}','FrontEndController@eventDetail')->name('EventDetail');
Route::get('TeamDetail/{id}','FrontEndController@teamDetail')->name('TeamDetail');
Route::get('CourseDetail/{id}','FrontEndController@showCourse')->name('CourseDetail');
Route::get('ApplyForCourse/{id}','CourseApplicationController@create')->name('ApplyForCourse');
Route::post('Apply','CourseApplicationController@store')->name('Apply');
Route::get('ContactUs','FrontEndController@contactUs')->name('ContactUs');
Route::get('gallery','FrontEndController@Gallery')->name('gallery');
Route::post('SendMail','FrontEndController@sendEmail')->name('SendMail');
Route::get('Portfolios','PortfolioController@showPortfolios')->name('Portfolios');
Route::get('PortfolioDetail/{id}','PortfolioController@show')->name('Portfolio.Detail');
Route::get('CourseCategory/{id}','CategoryController@showCategoryCourses')->name('Course.Category');
Route::get('Events','FrontEndController@allEvents')->name('Events');

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
Route::get('LoadSubFolder','GalleryController@loadSubFolder')->name('LoadSubFolder');
Route::get('LoadAllSubFolder','GalleryController@loadAllSubFolder')->name('LoadAllSubFolder');
Route::get('LoadSubFolderImages','GalleryController@loadSubFolderImages')->name('LoadSubFolderImages');

Route::prefix('Admin')->middleware(['auth:web','can:isAdmin'])->group(function(){

	Route::view('/','admin.index');
	Route::resource('Course','CourseController');
	Route::get('CourseStatus','CourseController@courseStatus')->name('CourseStatus');
	Route::post('CourseActive','CourseController@courseActive')->name('CourseActive');
	Route::post('CourseBlocked','CourseController@courseBlocked')->name('CourseBlocked');
	Route::get('CourseApplicationStatus','CourseApplicationController@courseApplicationStatus')->name('CourseApplicationStatus');
	Route::post('CourseApplicationConfirmStatus','CourseApplicationController@courseApplicationConfirmStatus')->name('CourseApplicationConfirmStatus');
	Route::post('CourseApplicationUnConfirmStatus','CourseApplicationController@courseApplicationUnConfirmStatus')->name('CourseApplicationUnConfirmStatus');

	Route::post('SingleCourseApplicationConfirmStatus','CourseApplicationController@singleCourseApplicationConfirmStatus')->name('SingleCourseApplicationConfirmStatus');
	Route::post('SingleCourseApplicationUnConfirmStatus','CourseApplicationController@singleCourseApplicationUnConfirmStatus')->name('SingleCourseApplicationUnConfirmStatus');

	Route::resource('Batch','BatchController');
	Route::resource('CourseApplication','CourseApplicationController');
	Route::get('Events/applications','EventController@EventsApplications')->name('events_applications');
	Route::get('ConfirmedRecord','CourseApplicationController@confirmedRecord')->name('ConfirmedRecord');
	Route::get('SingleConfirmedRecord/{id}','CourseApplicationController@singleConfirmedRecord')->name('SingleConfirmedRecord');
	Route::get('AllCourseApplicationRecords','CourseApplicationController@allCourseApplicationRecords')->name('AllCourseApplicationRecords');
	Route::get('AllSingleCourseApplicationRecords/{id}','CourseApplicationController@allSingleCourseApplicationRecords')->name('AllSingleCourseApplicationRecords');
	Route::post('SpecificCourseApplicationRecords','CourseApplicationController@specificCourseApplicationRecords')->name('SpecificCourseApplicationRecords');
	Route::get('CourseApplicationDelete/{id}','CourseApplicationController@destroy')->name('CourseApplication.delete');
	Route::get('CourseDelete/{id}','CourseController@destroy')->name('Course.delete');
	Route::resource('Category','CategoryController');
	Route::resource('MainMenu','MainMenuController');
	Route::resource('SubMenu','SubMenuController');
	Route::resource('Product','ProductController');
	Route::resource('Service','ServiceController');
	Route::resource('Slider','SliderController');
	Route::view('AddTestimonial','admin.add_testimonial');
	Route::resource('/Event','EventController');
	Route::resource('News','NewModelController');
	Route::resource('Client','ClientController');
	Route::resource('Testimonial','TestimonialController');
	Route::resource('Team','TeamController');
	Route::resource('Gallery','GalleryController');
	Route::resource('Portfolio','PortfolioController');
	Route::resource('Contact','ContactController');
	Route::resource('ProductCustomer','ProductCustomerController');
	Route::resource('SiteContact','SiteContactController');
	Route::get('SubMenuAuto','FrontEndController@subMenuAutoTitle')->name('SubMenuAuto');
	Route::get('SubMenuAutoRoute','FrontEndController@subMenuAutoRoute')->name('SubMenuAutoRoute');
	Route::get('Notification','CourseApplicationController@notification')->name('Notification');
	Route::post('ChangeContactStatus','ContactController@changeContactStatus')->name('ChangeContactStatus');
	Route::get('ContactDelete/{id}','ContactController@destroy')->name('ContactDelete');
	Route::get('SingleCourseApplications/{id}','CourseController@courseApplications')->name('SingleCourseApplication');
	Route::get('GetMainFolder','GalleryController@getMainFolder')->name('GetMainFolder');
});


