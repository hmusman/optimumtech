<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
   public function index()
    {
        $services = Service::all();
        return view('admin.view_services')->with(compact('services'));
    }

    
    public function create()
    {
        return view('admin.add_service');
    }

    
   
    public function store(Request $request)
    {
       
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:50',
            'detail'=>'bail | required | string | max:1500',
            'why'=>'bail | required | string | max:500',
            'img'=>'required'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
               if(Service::where('name','=',$request->name)->get()->count()>0)
               {
                    return back()->withErrors(['warningMsg'=>"service Already Exist"])->withInput();
               } 
            
               $img = $request->file('img');
               $ext = $img->extension();
               if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
               {
                   $size =getimagesize($img);
                   if ($size[0]==750 && $size[1]==500)
                   {
                        $filename = $request->file('img')->store('admin/images/service','public');
                   }
                   else
                   {
                        return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 750*500'])->withInput();
                   }
               }
               else
               {
                    return back()->withErrors(['extWarning'=>'Please Choose Correct Image'])->withInput();
               }

              
               $service = new service();
               $service->name= $request->name;
               $service->detail = $request->detail;
                $service->why = $request->why;
               $service->img = $filename;
               if($service->save())
               {
                    $request->session()->flash('msg','service Added Successfully');
                    return redirect(route('Service.index'));
               }
          
        }
    }

    
    public function show(NewModel $newModel)
    {
        //
    }

   
    public function edit($id)
    {
        $service= Service::where('id',$id)->first();
        return view('admin.update_service',compact('service'));
    }

    
    public function update(Request $request, $id)
    {
       $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:50',
            'detail'=>'bail | required | string | max:1500',
            'why'=>'bail | required | string | max:500',
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
                       if ($size[0]==750 && $size[1]==500)
                       {
                            $filename = $request->file('img')->store('admin/images/services','public');
                       }
                       else
                       {
                            return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 750*500'])->withInput();
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
          
            $service = Service::find($id);
            $service->name = $request->name;
            $service->detail = $request->detail;
            $service->why = $request->why;
            $service->img = $filename;
            if($service->save())
            {
                $request->session()->flash('msg','Service Updated Successfully');
                return redirect(route('Service.index'));
            }
          
        }
    }

   
    public function destroy(Request $request, $id)
    {
        if (service::where('id',$id)->delete()) 
        {
           $request->session()->flash('msg','Service Deleted Successfully');
            return redirect(route('Service.index'));
        }
    }
}
