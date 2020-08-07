<?php

namespace App\Http\Controllers;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.view_testimonials')->with(compact('testimonials'));
    }

    
    public function create()
    {
        return view('admin.add_testimonial');
    }

    
   
    public function store(Request $request)
    {
       
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:25',
            'detail'=>'bail | required | string | max:95',
            'designation'=>'bail | required | string | max:100',
            'img'=>'required'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
               if(Testimonial::where('name','=',$request->name)->get()->count()>0)
               {
                    return back()->withErrors(['warningMsg'=>"Testimonial Already Exist"])->withInput();
               } 
            
               $img = $request->file('img');
               $ext = $img->extension();
               if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
               {
                   $size =getimagesize($img);
                   if ($size[0]==66 && $size[1]==66)
                   {
                        $filename = $request->file('img')->store('admin/images/testimonials','public');
                   }
                   else
                   {
                        return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 66*66'])->withInput();
                   }
               }
               else
               {
                    return back()->withErrors(['extWarning'=>'Please Choose Correct Image'])->withInput();
               }

              
               $testimonial = new testimonial();
               $testimonial->name= $request->name;
               $testimonial->detail = $request->detail;
               $testimonial->designation = $request->designation;
               $testimonial->img = $filename;
               if($testimonial->save())
               {
                    $request->session()->flash('msg','Testimonial Added Successfully');
                    return redirect(route('Testimonial.index'));
               }
          
        }
    }

    
    public function show(NewModel $newModel)
    {
        //
    }

   
    public function edit($id)
    {
        $testimonial= Testimonial::where('id',$id)->first();
        return view('admin.update_testimonial',compact('testimonial'));
    }

    
    public function update(Request $request, $id)
    {
       $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:25',
            'detail'=>'bail | required | string | max:95',
            'designation'=>'bail | required | string | max:100'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            if($request->hasFile('img'))
            {
                    $img = $request->file('img');
                   $ext = $img->extension();
                   if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
                   {
                       $size =getimagesize($img);
                       if ($size[0]==66 && $size[1]==66)
                       {
                            $filename = $request->file('img')->store('admin/images/testimonials','public');
                       }
                       else
                       {
                            return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 66*66'])->withInput();
                       }
                   }
                   else
                   {
                        return back()->withErrors(['extWarning'=>'Please Choose Correct Image'])->withInput();
                   }
            }
            else
            {
                $filename = $request->oldImg;
            }
          
            $testimonial = Testimonial::find($id);
            $testimonial->name = $request->name;
            $testimonial->detail = $request->detail;
            $testimonial->designation = $request->designation;
            $testimonial->img = $filename;
            if($testimonial->save())
            {
                $request->session()->flash('msg','Testimonial Updated Successfully');
                return redirect(route('Testimonial.index'));
            }
          
        }
    }

   
    public function destroy(Request $request, $id)
    {
        if (Testimonial::where('id',$id)->delete()) 
        {
           $request->session()->flash('msg','Testimonial Deleted Successfully');
            return redirect(route('Testimonial.index'));
        }
    }
}
