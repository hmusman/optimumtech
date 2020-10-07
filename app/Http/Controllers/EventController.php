<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventRegister;
use Illuminate\Http\Request;
use Mail;
use App\Mail\EventBookingMail;
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
            'detail'=>'bail | required | string',
            'event_date'=>'required',
            'event_time'=>'required',
            'address'=>'bail | required | string | max:100',
            'img'=>'required',
            'meta_name'=>'bail | required | string',
            'meta_detail'=>'required',
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
           $event->event_time = $request->event_time;
           $event->address = $request->address;
           $event->img = $filename;
           $event->meta_name = $request->meta_name;
           $event->meta_detail = $request->meta_detail;
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
            'detail'=>'bail | required | string',
            'event_date'=>'required',
            'event_time'=>'required',
            'address'=>'bail | required | string | max:100',
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
            $event->event_time = $request->event_time;
            $event->address = $request->address;
            $event->img = $filename;
            $event->meta_name = $request->meta_name;
            $event->meta_detail = $request->meta_detail;
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


    public function RegisterEvent(Request $request){
      // dd($request->all());
      $validations = Validator::make($request->all(),[
            'student_name'=>'required | string ',
            'student_email'=>'required | string',
            'student_phone'=>'required',
        ]);
      if ($validations->fails()){
        return redirect()->back()->with('error','Somethig went wrong');
      }else{
        try{
          $student_name = $request->student_name;
          $student_email = $request->student_email;
          $student_phone = $request->student_phone;
          $event_id = $request->event_id;

          $event = Event::where('id',$event_id)->first();

          EventRegister::create(['event_id'=>$event_id, 'event_name'=>$event->title, 'student_name'=>$student_name, 'student_email'=>$student_email,'student_phone'=>$student_phone]);

          $detail = [

            'student_name' => $student_name,
            'subject' => 'Your registration application received for '.$event->title,
            'heading' => 'Your registration application received for '.$event->title,
            'emailfrom' => env('MAIL_FROM_ADDRESS'),
            'massage' => 'Your registration application to '.$event->title.' event is successfull, within a short time you will receive a call or email from us for the confirmation so that your application will be processed further. stay tunned and connected with us for more detail of this event.',


          ];

          Mail::to($student_email)->send(new EventBookingMail($detail));
            return response()->json([
              'success' => 'Your registration application submitted successfully. we will contact back to you soon for confirmation.',
          ]);

        }catch(Exception $e){
          return $e->getMessage();
        }
        
      }
    }

    public function EventsApplications(Request $request){
        $applications = EventRegister::all();

        return view('admin.eventsapplications',compact('applications'));
    }

    public function DeleteEvents($id){
      $delete = EventRegister::where('id',$id)->delete();

      return redirect()->back()->with('msg','Event deleted successfully.');
    }

    
}
