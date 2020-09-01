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
    	$freeCourses = Course::where([['type','=','free'],['status','=','1']])->get();
    	$members = Team::all();
    	$photoFilter = Gallery::select('category')->get();
    	$photos = Gallery::all();
    	$events = Event::all();
    	$news = NewModel::all();
    	$testimonials = Testimonial::all();
    	$products = Product::all();
    	$services = Service::all();
    	$courses = Course::where('status','1')->get();;
    	$clients = Client::all();
        $latestNews = NewModel::orderBy('id','desc')->take(5)->get();
    	return view('index',compact(['sliders','clients','mains','products','services','courses','freeCourses','members','photoFilter','photos','events','news','testimonials','latestNews']));
    }

    public function productShow($id)
    {
    	$product = Product::where('id',$id)->first();
        $mains = MainMenu::all();
    	return view('product',compact(['mains','product']));
    }

    public function serviceShow($id)
    {
        $mains = MainMenu::all();
        $services = Service::all();
    	$service = Service::where('id',$id)->first();
    	return view('service',compact(['mains','service','services']));
    }

    public function products()
    {
    	$products  = Product::all();
        $mains = MainMenu::all();
    	return view('products',compact(['mains','products']));
    }

    public function services()
    {
    	$services = Service::all();
        $mains = MainMenu::all();
    	return view('services',compact(['mains','services']));
    }

    public function courses()
    {
        $mains = MainMenu::all();
        $courses = Course::where([['type','=','paid'],['status','=','1']])->get();
        $categories = Category::join('courses','categories.id','=','courses.category_id')->where('courses.status','1')->select('categories.title')->get();
        $freeCourses = Course::where([['type','=','free'],['status','=','1']])->get();
        return view('courses',compact(['mains','courses','freeCourses','categories']));
    }

    public function showCourse($id)
    {
        $course = Course::where('id',$id)->first();
        $mains = MainMenu::all();
        return view('course_detail',compact(['mains','course']));
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

    public function subMenuAutoTitle(Request $request)
    {
        $tbl = $request->tbl;
        $filter = '';
        if($tbl=="courses" || $tbl=="course" ){ $filter ="courses"; $data = Course::all();}
        else if($tbl=="products" || $tbl=="product"){ $filter="products"; $data = Product::all();}
        else if($tbl=="services" || $tbl=="service"){ $filter="services"; $data = Service::all();}
        if($data->count()>0)
        {
            $output = '';
            $output = '<select name="title" class="form-control">';
            $output.='<option selected="" disabled="">Select Title</option>';
            foreach($data as $row)
            {
                if($filter=='courses'){
                    if($request->has('title'))
                    {
                        $output.='<option value="'.$row->title.'"';
                        if($row->title==$request->title){ $output.='selected=""'; }
                        $output.='>'.ucwords($row->title).'</option>';

                    }
                    else
                    {
                        $output.='<option value="'.$row->title.'">'.ucwords($row->title).'</option>';
                    }
                    
                }
                else if($filter!="courses")
                {
                    if($request->has('title'))
                    {
                        $output.='<option value="'.$row->name.'"';
                        if($row->name==$request->title){ $output.='selected=""'; }
                        $output.='>'.ucwords($row->name).'</option>';

                    }
                    else
                    {
                        $output.='<option value="'.$row->name.'">'.ucwords($row->name).'</option>';
                    }
                    
                }
            }
            $output.='</select> <input type="hidden" name="tbl" value="'.$filter.'" >';
            return $output;
        }

    }

    public function subMenuAutoRoute(Request $request)
    {
        $tbl = $request->tbl;
        $filter = '';
        $route = "";
        if($tbl=="courses" || $tbl=="course" ){ $route="/CourseDetail/"; $filter ="course"; $data = Course::all();}
        else if($tbl=="products" || $tbl=="product"){ $route="/ProductDetail/";  $data = Product::all();}
        else if($tbl=="services" || $tbl=="service"){ $route="/ServiceDetail/"; $data = Service::all();}
        if($data->count()>0)
        {
            $output = '';
            $output = '<select name="route" class="form-control">';
            $output.='<option selected="" disabled="">Select Route</option>';
            foreach($data as $row)
            {
               if($filter=='course')
               {
                    if($request->has('title'))
                    {
                        $output.='<option value="'.$route.$row->id.'"';
                        if($row->title==$request->title){ $output.='selected=""'; }
                        $output.='>'.ucwords($row->title).'</option>';

                    }
                    else
                    {
                       $output.='<option value="'.$route.$row->id.'">'.ucwords($row->title).'</option>';
                    }

                }
                else if($filter=="")
                {
                    if($request->has('title'))
                    {
                        $output.='<option value="'.$route.$row->id.'"';
                        if($row->name==$request->title){ $output.='selected=""'; }
                        $output.='>'.ucwords($row->name).'</option>';

                    }
                    else
                    {
                        $output.='<option value="'.$route.$row->id.'">'.ucwords($row->name).'</option>';
                    }
                    
                }
            }
            $output.='</select>';
            return $output;
        }

    }
}
