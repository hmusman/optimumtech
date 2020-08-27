<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.view_sliders',compact('sliders'));
    }

    
    public function create()
    {
        return view('admin.add_slider_ticker');
    }

    
    public function store(Request $request)
    {
        if ($request->hasFile('img'))
        {
            $ext = $request->file('img')->extension();
            if ($ext =='jpg' || $ext=='png' || $ext =='jpeg') 
            {
                $filename = $request->file('img')->store('admin/images/slider','public');
                $slider = new Slider();
                $slider->img = $filename;
                if ($slider->save())
                {
                    $request->session()->flash('msg','Slider Added Successfully');
                    return redirect()->route('Slider.index');
                }
            }
            else
            {
                return back()->withErrors(['warningMsg'=>'Please Choose Correct Image']);
            }
        }
        else
        {
            return "not";
        }
    }

  
    public function show(Slider $slider)
    {
        //
    }

    public function edit($id)
    {
        $slider = Slider::where('id',$id)->first();
        return view('admin.update_slider_ticker',compact('slider'));
    }

   
    public function update(Request $request, $id)
    {
        if ($request->hasFile('img'))
        {
            $ext = $request->file('img')->extension();
            if ($ext =='jpg' || $ext=='png' || $ext =='jpeg') 
            {
                $filename = $request->file('img')->store('admin/images/slider','public');
            }
            else
            {
                return back()->withErrors(['warningMsg'=>'Please Choose Correct Image']);
            }
        }
        else
        {
            $filename = $request->oldImg;
        }

        $slider = Slider::find($id);
        $slider->img = $filename;
        if ($slider->save())
        {
            $request->session()->flash('msg','Slider Updated Successfully');
            return redirect()->route('Slider.index');
        }
    }

    
    public function destroy(Request $request ,$id)
    {
        if(Slider::where('id',$id)->delete())
        {
            $request->session()->flash('msg','Slider Deleted Successfully');
            return redirect()->route('Slider.index');   
        }
    }
}
