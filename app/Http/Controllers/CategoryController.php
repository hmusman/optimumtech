<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\MainMenu;
use App\Course;
use App\Product;
use App\SiteContact;
class CategoryController extends Controller
{
   
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories')->with(compact('categories'));
    }

   
    public function create()
    {
        return view('admin.add_category');
    }

   
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'title'=>'bail | required | min:5 | max:50',
            'description'=>'bail | required | min:5 | max:100'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
             if(Category::where('title',$request->title)->count() >0)
            {
                $request->session()->flash('msg','Category is already exist');
                return back()->withInput();
            }
            $category = new  Category();
            $category->title = $request->title;
            $category->description = $request->description;
            if ($category->save())
            {
                $request->session()->flash('msg','Category has been added successfully');
                return redirect()->route('Category.index');
            }
        }
    }

     
    public function showCategoryCourses($id)
    {
        $mains = MainMenu::all();
        $products = Product::all();
        $category = Category::where('id',$id)->first();
        $categories = Category::join('courses','categories.id','=','courses.category_id')->where([['courses.status','1'],['categories.id','!=',$id]])->select('categories.title','categories.id')->get();
        $freeCourses = Course::where([['type','=','free'],['status','=','1']])->get();
        $contact = SiteContact::first();
        $courses = $category->courses;
        return view('category_courses',compact(['mains','contact','courses','categories','freeCourses','products']));
        
    }

   
    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('admin.update_category',compact('category'));
    }

   
    public function update(Request $request, $id)
    {
         $validations = Validator::make($request->all(),[
            'title'=>'bail | required | min:5 | max:50',
            'description'=>'bail | required | min:5 | max:100'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
            $category = Category::find($id);
            $category->title = $request->title;
            $category->description = $request->description;
            if ($category->save())
            {
                $request->session()->flash('msg','Category has been updated successfully');
                return redirect()->route('Category.index');
            }
        }
    }

   
    public function destroy(Request $request ,$id)
    {
       if(Category::where('id',$id)->delete())
       {
            $request->session()->flash('msg','Category has been Deleted successfully');
            return redirect()->route('Category.index');
       }
       
    }

    
}
