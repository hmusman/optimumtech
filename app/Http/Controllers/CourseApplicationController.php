<?php

namespace App\Http\Controllers;

use App\CourseApplication;
use Illuminate\Http\Request;
use App\Product;
use App\Service;
use App\MainMenu;
use App\Course;
use Illuminate\Support\Facades\Validator;

// PDF is a alias  define in app.php which in config folder
use PDF;

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
        $course = Course::where('id',$id)->first(); 
       return view('course_application',compact(['mains','course']));
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

        $priceCheckData = Course::where('id',$request->course)->first();
        if($priceCheckData->pricie > 0)
        {
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
                'country'=>'required'
           ]);
        }
        else
        {
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
        }
        

       if($validations->fails())
       {
            return back()->withErrors($validations)->withInput();
       }
       else
       {    
            if($priceCheckData->price>0)
            {
                $ext = $request->file('img')->extension();
                if($ext =='png' || $ext=='jpg' || $ext=='jpeg') {$filename = $request->file('img')->store('admin/images/courseApplication','public');}
                else
                {
                    return back()->withErrors(['warningMsg'=>"Please Select Correct Image"])->withInput();
                } 
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
            if($priceCheckData->price > 0) {$application->img = $filename;}
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

    public function confirmedRecord()
    {
        $pdf = \App::make('dompdf.wrapper');
        $data = CourseApplication::where('status','=','1')->get();
        $output = "";
        if($data->count()>0)
        {
            $output.=' <table width="100%" style="border-collapse: collapse; border: 0px;" >
                        <tr> <td colspan="5" style="text-align:center;"><h2> Confirmed Payment </h2></td> </tr>
                    <thead>
                        <tr>
                            <th style="border: 1px solid; padding:12px;text-align:center;" width="10%">#</th>
                            <th style="border: 1px solid; padding:12px;text-align:center;" width="20%">Course</th>
                            <th style="border: 1px solid; padding:12px;text-align:center;" width="30%">Name</th>
                            <th style="border: 1px solid; padding:12px;text-align:center;" width="20%">Email</th>
                            <th style="border: 1px solid; padding:12px;text-align:center;" width="20%">Phone</th>
                        </tr>
                    </thead>
                    <tbody>';
            $i = 1;
            foreach($data as $row)
            {
                $output.='<tr>
                            <td style="border: 1px solid; padding:12px;text-align:center;">'. $i.'</td>
                            <td style="border: 1px solid; padding:12px;text-align:center;">'. $row->course->title .'</td>
                            <td style="border: 1px solid; padding:12px;text-align:center;">'. $row->first_name.' '.$row->last_name .'</td>
                            <td style="border: 1px solid; padding:12px;text-align:center;">'. $row->email .'</td>
                            <td style="border: 1px solid; padding:12px;text-align:center;">'. $row->phone .'</td>
                        </tr>';
                $i++;
            }
            $output.=' </tbody>
                </table>';
             
        }
        else
        {
            $output = '<div style="width:100%; text-align:center;">No Record Confirmed</div>';
        }

        $pdf->loadHTML($output);   
        return $pdf->stream();
    }

    public function notification()
    {
        $output ='';
        $data = CourseApplication::where('status',0)->get();
        $output.=' <button type="button" class="btn header-item waves-effect" id="page-header-flag-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i><span style="top: 19px;position: absolute;margin-left: 2px;width: 10px;height: 15px;border-radius: 32%;font-size: 13px;color: red;">'.$data->count().'</span>
                </button>';

        $output.='<div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                       q
                    </a>
                </div>';
        echo $output;
    }
}