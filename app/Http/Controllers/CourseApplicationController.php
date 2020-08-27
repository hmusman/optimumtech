<?php

namespace App\Http\Controllers;

use App\CourseApplication;
use Illuminate\Http\Request;
use App\Product;
use App\Service;
use App\MainMenu;
use Illuminate\Support\Facades\Validator;
class CourseApplicationController extends Controller
{
    
    public function index()
    {
        $applications = CourseApplication::all();
        return view('admin.view_course_applications',compact('applications'));
    }

    public function create($id)
    {
        $mains = MainMenu::all();
        $products  = Product::all();
        $services = Service::all();
       return view('course_application',compact(['mains','products','services','id']));
    }

    
    public function store(Request $request)
    {
        $arr = array();
        $numbers = CourseApplication::select('applicant_number')->get();
        foreach($numbers as $number)
        {
            $arr[] = $number['applicant_number'];
        }

        do {
            $applicant_number = rand(10000, 99999);
        } while (in_array($applicant_number, $arr));

       $validations = Validator::make($request->all(),[
            'first_name'=>'bail | required',
            'last_name'=>'bail | required',
            'email'=>'bail | required',
            'cnic'=>'bail | required | numeric',
            'phone'=>'bail | required | numeric',
            'address'=>'bail | required | string | max:100',
            'zip'=>'bail | required',
            'city'=>'bail | required',
            'province'=>'required',
            'country'=>'required',
            'img'=>'required'
       ]);

       if($validations->fails())
       {
            return back()->withErrors($validations)->withInput();
       }
       else
       {
            $ext = $request->file('img')->extension();
            if($ext =='png' || $ext=='jpg' || $ext=='jpeg') {$filename = $request->file('img')->store('admin/images/courseApplication','public');}
            else
            {
                return back()->withErrors(['warningMsg'=>"Please Select Correct Image"])->withInput();
            }

            if(CourseApplication::where([['email','=',$request->email],['course_id','=',$request->course]])->get()->count()>0)
            {
                $request->session()->flash('warningMsg',"You Are Already Applied");
                return back()->withInput();
            }
            $application = new CourseApplication();
            $application->applicant_number ='AppNo -'.$applicant_number;
            $application->course_id = $request->course;
            $application->first_name = $request->first_name;
            $application->last_name= $request->last_name;
            $application->email = $request->email;
            $application->cnic = $request->cnic;
            $application->phone = $request->phone;
            $application->address = $request->address;
            $application->city = $request->city;
            $application->province = $request->province;
            $application->country = $request->country;
            $application->zip = $request->zip;
            $application->img = $filename;
            if($application->save())
            {

                $request->session()->flash('msg','Your Application Has Been Submitted Successfully');
                return back();
            }
       }
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy(Request $request, $id)
    {
        if(CourseApplication::where('id',$id)->delete())
        {
            $request->session()->flash('msg','Application Has Been Deleted Successfully');
            return redirect(route('CourseApplication.index'));
        }
    }

    public function courseApplicationStatus(Request $request)
    {
        $courseApplication = CourseApplication::find($request->id);
        $courseApplication->status=$request->status;
        $courseApplication->save();
    }

    public function courseApplicationConfirmStatus(Request $request)
    {
       for($i=0;$i<count($request->checkboxes);$i++)
       {
            $id = $request->checkboxes[$i];
            $application = CourseApplication::find($id);
            $application->status =1;
            $application->save();
       }
       $request->session()->flash('msg','Payment is confirmed');
       return redirect(route('CourseApplication.index'));
    }

    public function courseApplicationUnConfirmStatus(Request $request)
    {
        for($i=0;$i<count($request->checkboxes);$i++)
        {
            $id = $request->checkboxes[$i];
            $application = CourseApplication::find($id);
            $application->status =0;
            $application->save();
        }
       $request->session()->flash('msg','Payment is not confirmed');
        return redirect(route('CourseApplication.index'));
    }
}
