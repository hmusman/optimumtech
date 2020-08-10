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

class FrontEndController extends Controller
{
    public function index()
    {
    	$sliders = Slider::all();
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

    	return view('index',compact(['sliders','clients','products','services','courses','freeCourses','members','photoFilter','photos','events','news','testimonials']));
    }

    public function productShow($id)
    {
    	$product = Product::where('id',$id)->first();
    	$products  = Product::all();
    	$services = Service::all();
    	return view('product',compact(['product','services','products']));
    }

    public function serviceShow($id)
    {
    	$products  = Product::all();
    	$services = Service::all();
    	$service = Service::where('id',$id)->first();
    	return view('service',compact(['service','services','products']));
    }

    public function products()
    {
    	$products  = Product::all();
    	$services = Service::all();
    	return view('products',compact(['products','services']));
    }

    public function services()
    {
    	$products  = Product::all();
    	$services = Service::all();
    	return view('services',compact(['products','services']));
    }
}
