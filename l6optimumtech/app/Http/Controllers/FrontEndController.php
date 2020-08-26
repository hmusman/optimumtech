<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Client;
use App\Gallery;
use App\Testimonial;
use App\Course;
use App\NewModel;
use App\Team;
use App\Event;
use App\Product;
use App\Service;
use App\Category;
use App\MainMenu;
use DB;

class FrontEndController extends Controller
{
    public function index()
    {
        // $exactProducts = DB::table('main_menus')->join('sub_menus','main_menus.id','=','sub_menus.main_id')->where('main_menus.title','products')->orWhere('main_menus.title','product')->select('sub_menus.item_id')->get()->toArray();
    	$sliders = Slider::all();
        $mains = MainMenu::all();
    	$freeCourses = Course::where('type','free')->get();
    	$members = Team::all();
    	$photoFilter = Gallery::select('category')->get();
    	$photos = Gallery::all();
    	$events = Event::all();
    	$news = NewModel::all();
    	$testimonials = Testimonial::all();
    	$products = Product::all();
    	$services = Service::all();
    	$courses = Course::all();
    	$clients = Client::all();
    	return view('index',compact(['sliders','clients','mains','products','services','courses','freeCourses','members','photoFilter','photos','events','news','testimonials']));
    }

    public function productShow($id)
    {
    	$product = Product::where('id',$id)->first();
        $mains = MainMenu::all();
    	$products  = Product::all();
    	$services = Service::all();
    	return view('product',compact(['mains','product','services','products']));
    }

    public function serviceShow($id)
    {
    	$products  = Product::all();
        $mains = MainMenu::all();
    	$services = Service::all();
    	$service = Service::where('id',$id)->first();
    	return view('service',compact(['mains','service','services','products']));
    }

    public function products()
    {
    	$products  = Product::all();
    	$services = Service::all();
        $mains = MainMenu::all();
    	return view('products',compact(['mains','products','services']));
    }

    public function services()
    {
    	$products  = Product::all();
    	$services = Service::all();
        $mains = MainMenu::all();
    	return view('services',compact(['mains','products','services']));
    }

    public function courses()
    {
        $products  = Product::all();
        $services = Service::all();
        $mains = MainMenu::all();
        $courses = Course::where('type','paid')->get();
        $categories = Category::join('courses','categories.id','=','courses.category_id')->get();
        $freeCourses = Course::where('type','free')->get();
        return view('courses',compact(['mains','products','services','courses','freeCourses','categories']));
    }

    public function showCourse($id)
    {
        $products = Product::all();
        $services = Service::all();
        $course = Course::where('id',$id)->first();
        $mains = MainMenu::all();
        return view('course_detail',compact(['mains','course','products','services']));
    }

    public function contactUs()
    {
        $mains = MainMenu::all();
        return view('contactus',compact(['mains']));
    }

    public function newsDetail($id)
    {
        $news = NewModel::where('id',$id)->first();
        $mains = MainMenu::all();
        return view('news_detail',compact(['mains','news']));
    }

    public function eventDetail($id)
    {
        $event = Event::where('id',$id)->first();
        $mains = MainMenu::all();
        return view('book_event',compact(['mains','event']));
    }

    public function teamDetail($id)
    {
        $team = Team::where('id',$id)->first();
        $mains = MainMenu::all();
        return view('team_detail',compact(['mains','team']));
    }
}
