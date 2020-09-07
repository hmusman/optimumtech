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
            'detail'=>'bail | required | string',
            'img'=>'required',
            'meta_name'=>'bail | required | string',
            'meta_detail'=>'required',
            'video'=>'mimes:mp4|max:25600'
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

              if($request->hasFile('video'))
              {
                $video = $request->file('video')->store('admin/images/service/videos','public');
              }
              else
              {
                $video = "";
              }
               $service = new service();
               $service->name= $request->name;
               $service->detail = $request->detail;
               // $service->why = $request->why;
               $service->img = $filename;
               $service->meta_name = $request->meta_name;
               $service->meta_detail = $request->meta_detail;
               $service->video_link = $request->video_link;
               $service->video = $video;
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
            'detail'=>'bail | required | string',
            'meta_name'=>'bail | required | string',
            'meta_detail'=>'required',
            'video'=>'mimes:mp4|max:25600'
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
          
            if($request->hasFile('video'))
            {
              $video = $request->file('video')->store('admin/images/service/videos','public');
            }
            else
            {
              $video = $request->oldVideo;
            }

            $service = Service::find($id);
            $service->name = $request->name;
            $service->detail = $request->detail;
            // $service->why = $request->why;
            $service->img = $filename;
            $service->meta_name = $request->meta_name;
            $service->meta_detail = $request->meta_detail;
            $service->video_link = $request->video_link;
            $service->video = $video;
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
