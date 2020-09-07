<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    
    public function index()
    {
        $photos = Gallery::all();
        return view('admin.view_photos',compact('photos'));
    }

    
    public function create()
    {
        return view('admin.add_photo');
    }

    
    public function store(Request $request)
    {
        
        $validations = Validator::make($request->all(),[
            'category'=>'required',
            'sub_folder'=>'required',
            'img'=>'required'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
            $img = $request->file('img');
            $ext = $img->extension();
            if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
            {
                $size =getimagesize($img);
                if ($size[0]==280 && $size[1]==186)
                {
                    $path = "admin/images/gallery/".$request->category."/".$request->sub_folder;
                    $filename = $request->file('img')->store($path,'public');
                }
                else
                {
                    return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 280*186'])->withInput();
                }
            }
            else
            {
                return back()->withErrors(['extWarning'=>'Please Choose Correct Image'])->withInput();
            }
            $photo = new Gallery();
            $photo->category = $request->category;
            $photo->title = $request->title;
            $photo->caption = $request->caption;
            $photo->sub_folder = $request->sub_folder;
            $photo->img = $filename;
            if ($photo->save())
            {
                $request->session()->flash('msg','Photo Added Successfully');
                return redirect()->route('Gallery.index');
            }
        }
    }

  
    public function show(Slider $slider)
    {
        //
    }

    public function edit($id)
    {
        $photo = Gallery::where('id',$id)->first();
        return view('admin.update_photo',compact('photo'));
    }

   
    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'category'=>'required',
            'sub_folder'=>'required',
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }

        else
        {
            if ($request->hasFile('img'))
            {
                $img = $request->file('img');
                $ext = $img->extension();
                if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
                {
                    $size =getimagesize($img);
                    if ($size[0]==280 && $size[1]==186)
                    {
                        $path = "admin/images/gallery/".$request->category."/".$request->sub_folder;
                        $filename = $request->file('img')->store($path,'public');
                    }
                    else
                    {
                        return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 280*186'])->withInput();
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

            $photo = Gallery::find($id);
            $photo->category = $request->category;
            $photo->title = $request->title;
            $photo->caption = $request->caption;
            $photo->sub_folder = $request->sub_folder;
            $photo->img = $filename;
            if ($photo->save())
            {
                $request->session()->flash('msg','Photo Updated Successfully');
                return redirect()->route('Gallery.index');
            } 
        }
        
    }

    
    public function destroy(Request $request ,$id)
    {
        if(Gallery::where('id',$id)->delete())
        {
            $request->session()->flash('msg','Photo Deleted Successfully');
            return redirect()->route('Gallery.index');   
        }
    }

    public function getMainFolder(Request $request)
    {

        $data= Gallery::where('category',$request->val)->get();
        $output = '';
        

        $output.='<option selected="" disabled="">Select Sub Folder</option>';
        foreach($data as $row)
        {
            if($request->has('sub_folder'))
            {
                $output.='<option value="'.$row->sub_folder.'"';
                if($row->sub_folder==$request->sub_folder){ $output.='selected=""'; }
                        $output.='>'.$row->sub_folder.'</option>';
            }
            else
            {
                $output.='<option value="'.$row->sub_folder.'">'.$row->sub_folder.'</option>';
            }
        }
        return $output;

    }
}
