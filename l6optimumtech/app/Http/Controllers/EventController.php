<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EventController extends Controller
{
     public function index()
    {
        $events = Event::all();
        return view('admin.view_events')->with(compact('events'));
    }

    
    public function create()
    {
        return view('admin.add_upcoming_event');
    }

    
   
    public function store(Request $request)
    {
       
        $validations = Validator::make($request->all(),[
            'title'=>'bail | required | string | max:25',
            'detail'=>'bail | required | string | max:95',
            'event_date'=>'required',
            'address'=>'bail | required | string | max:100',
            'img'=>'required'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            if(Event::where([['title','=',$request->title],['event_date','=',$request->event_date]])->get()->count()>0)
            {
                return back()->withErrors(['warningMsg'=>"Event Already Exist"])->withInput();
            }
            
           $img = $request->file('img');
           $ext = $img->extension();
           if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
           {
               $size =getimagesize($img);
               if ($size[0]==120 && $size[1]==120)
               {
                    $filename = $request->file('img')->store('admin/images/events','public');
               }
               else
               {
                    return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 120*120'])->withInput();
               }
           }
           else
           {
                return back()->withErrors(['extWarning'=>'Please Choose Correct Image'])->withInput();
           }

          
           $event = new Event();
           $event->title = $request->title;
           $event->detail = $request->detail;
           $event->event_date = $request->event_date;
           $event->address = $request->address;
           $event->img = $filename;
           if($event->save())
           {
                $request->session()->flash('msg','Event Added Successfully');
                return redirect(route('Event.index'));
           }
          
        }
    }

    
    public function show(NewModel $newModel)
    {
        //
    }

   
    public function edit($id)
    {
        $event= Event::where('id',$id)->first();
        return view('admin.update_event',compact('event'));
    }

    
    public function update(Request $request, $id)
    {
       $validations = Validator::make($request->all(),[
            'title'=>'bail | required | string | max:25',
            'detail'=>'bail | required | string | max:95',
            'event_date'=>'required',
            'address'=>'bail | required | string | max:100'
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
                       if ($size[0]==120 && $size[1]==120)
                       {
                            $filename = $request->file('img')->store('admin/images/events','public');
                       }
                       else
                       {
                            return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 120*120'])->withInput();
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
          
            $event = Event::find($id);
            $event->title = $request->title;
            $event->detail = $request->detail;
            $event->event_date = $request->event_date;
            $event->address = $request->address;
            $event->img = $filename;
            if($event->save())
            {
                $request->session()->flash('msg','Event Updated Successfully');
                return redirect(route('Event.index'));
            }
          
        }
    }

   
    public function destroy(Request $request, $id)
    {
        if (Event::where('id',$id)->delete()) 
        {
           $request->session()->flash('msg','Event Deleted Successfully');
            return redirect(route('Event.index'));
        }
    }
}
