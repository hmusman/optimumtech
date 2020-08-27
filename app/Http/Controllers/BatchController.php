<?php

namespace App\Http\Controllers;

use App\Batch;
use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Validator;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.add_batch',compact('courses'));
    }

    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'course'=>'required',
            'name'=>'bail | required | string | max:50',
            'class_duration'=>'bail | required | string',
            'class_start'=>'bail | required | string',
            'class_end'=>'bail | required',
            'duration'=>'required',
            'price'=>'bail | required | numeric'

        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            
            if(Batch::where('name','=',$request->name)->get()->count()>0)
            {
                return back()->withErrors(['existMsg'=>"Batch Already Exist"])->withInput();
            }
            $batch = new Batch();
            $batch->name = $request->name;
            $batch->class_duration = $request->class_duration;
            $batch->class_start = $request->class_start;
            $batch->class_end = $request->class_end;
            $batch->batch_duration =$request->batch_duration;
            $batch->price = $request->price;
            if($batch->save())
            {
                $request->session()->flash('msg','Batch Added Successfully');
                return redirect(route('Batch.index'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::all();
        $batch = Batch::where('id',$id)->first();
        return view('admin.update_batch',compact(['courses','batch']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
