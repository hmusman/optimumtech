<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Category;
class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('admin.view_courses',compact('courses'));
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('admin.add_course',compact('categories'));
    }

   
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'title'=>'bail | required | string | max:25',
            'detail'=>'bail | required',
            'img'=>'required',
            'type'=>'required',
            'price'=>'bail | required | numeric',
            'meta_name'=>'bail | required | string',
            'meta_detail'=>'required',

        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            $img = $request->file('img');
            $ext = $img->extension();
            if($ext =='png' || $ext=='jpg' || $ext=='jpeg') 
            {
                $size =getimagesize($img);
                if ($size[0]==1280 && $size[1]==720)
                {
                   $filename = $request->file('img')->store('admin/images/courses','public');
                }
                else
                {
                    return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 1280*720'])->withInput();
                }
                
            }
            else
            {
                return back()->withErrors(['warningMsg'=>"Please Select Correct Image"])->withInput();
            }
            if(Course::where('title','=',$request->title)->get()->count()>0)
           {
                return back()->withErrors(['existMsg'=>"Course Already Exist"])->withInput();
            }
            $course = new Course();
            $course->category_id = $request->category;
            $course->title = $request->title;
            $course->detail = $request->detail;
            $course->img= $filename;
            $course->type = $request->type;
            $course->price = $request->price;
            $course->meta_name = $request->meta_name;
            $course->meta_detail = $request->meta_detail;
            if($course->save())
            {
                $url = url('/');
                $furl = $url.'/CourseDetail/'.$course->id;
                $course->url = $furl;
                $course->save();
                $request->session()->flash('msg','Course Added Successfully');
                return redirect(route('Course.index'));
            }
        }
    }

   
    public function show($id)
    {

    }

   
    public function edit($id)
    {
        $categories = Category::all();
        $course = Course::where('id',$id)->first();
        return view('admin.update_course',compact(['course','categories']));
    }

    
    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'title'=>'bail | required | string | max:25',
            'detail'=>'bail | required',
            'type'=>'required',
            'price'=>'bail | required | numeric',
            'meta_name'=>'bail | required | string',
            'meta_detail'=>'required',

        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            if($request->hasFile('img'))
            {
                $ext = $request->file('img')->extension();
                if($ext =='png' || $ext=='jpg' || $ext=='jpeg') 
                {
                   $size =getimagesize($request->file('img'));
                    if ($size[0]==1280 && $size[1]==720)
                    {
                       $filename = $request->file('img')->store('admin/images/courses','public');
                    }
                    else
                    {
                        return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 1280*720'])->withInput();
                    }
                }
                else
                {
                    return back()->withErrors(['warningMsg'=>"Please Select Correct Image"])->withInput();
                }
            }
            else{ $filename = $request->oldImg; }

            
            $course = Course::find($id);
            $course->category_id = $request->category;
            $course->title = $request->title;
            $course->detail = $request->detail;
            $course->img= $filename;
            $course->type = $request->type;
            $course->price = $request->price;
            $url = url('/');
            $furl = $url.'/CourseDetail/'.$course->id;
            $course->url = $furl;
            $course->meta_name = $request->meta_name;
            $course->meta_detail = $request->meta_detail;
            if($course->save())
            {
                $request->session()->flash('msg','Course Updated Successfully');
                return redirect(route('Course.index'));
            }
        }
    }

   
    public function destroy(Request $request, $id)
    {
        if(Course::where('id',$id)->delete())
        {
            $request->session()->flash('msg','Course Deleted Successfully');
            return redirect(route('Course.index'));
        }
    }

    public function courseStatus(Request $request)
    {
        $course = Course::find($request->id);
        $course->status=$request->status;
        $course->save();
    }

    public function courseActive(Request $request)
    {
       for($i=0;$i<count($request->checkboxes);$i++)
       {
            $id = $request->checkboxes[$i];
            $course = Course::find($id);
            $course->status =1;
            $course->save();
       }
       $request->session()->flash('msg','Course is Active');
       return redirect(route('Course.index'));
    }

    public function courseBlocked(Request $request)
    {
        for($i=0;$i<count($request->checkboxes);$i++)
        {
            $id = $request->checkboxes[$i];
            $course = Course::find($id);
            $course->status =0;
            $course->save();
        }
       $request->session()->flash('msg','Course is not Active');
        return redirect(route('Course.index'));
    }

    public function courseApplications($id)
    {
        $course = Course::where('id',$id)->first();
        $applications = $course->applications;
        return view('admin.view_single_course_applications',compact(['applications','id']));

    }
}
