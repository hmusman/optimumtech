<?php

namespace App\Http\Controllers;

use App\NewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewModelController extends Controller
{
    
    public function index()
    {
        $news = NewModel::all();
        return view('admin.view_news')->with(compact('news'));
    }

    
    public function create()
    {
        return view('admin.add_latest_news');
    }

    
   
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'title'=>'bail | required | string | max:25',
            'detail'=>'bail | required | string | max:95',
            'news_date'=>'required',
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
               if ($size[0]==270 && $size[1]==184)
               {
                    $filename = $request->file('img')->store('admin/images/news','public');
               }
               else
               {
                    return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 270*184'])->withInput();
               }
           }
           else
           {
                return back()->withErrors(['extWarning'=>'Please Choose Correct Image'])->withInput();
           }

           if(NewModel::where([['title','=',$request->title],['news_date','=',$request->news_date]])->get()->count()>0)
           {
                return back()->withErrors(['warningMsg'=>"News Already Exist"])->withInput();
            }
           $news = new NewModel();
           $news->title = $request->title;
           $news->detail = $request->detail;
           $news->news_date = $request->news_date;
           $news->img = $filename;
           if($news->save())
           {
                $request->session()->flash('msg','Latest News Added Successfully');
                return redirect(route('News.index'));
           }
          
        }
    }

    
    public function show(NewModel $newModel)
    {
        //
    }

   
    public function edit($id)
    {
        $news= NewModel::where('id',$id)->first();
        return view('admin.update_latest_news',compact('news'));
    }

    
    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'title'=>'bail | required | string | max:25',
            'detail'=>'bail | required | string | max:95',
            'news_date'=>'required',
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
                       if ($size[0]==270 && $size[1]==184)
                       {
                            $filename = $request->file('img')->store('admin/images/news','public');
                       }
                       else
                       {
                            return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 270*184'])->withInput();
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
          
            $news = NewModel::find($id);
            $news->title = $request->title;
            $news->detail = $request->detail;
            $news->news_date = $request->news_date;
            $news->img = $filename;
            if($news->save())
            {
                $request->session()->flash('msg','Latest News Updated Successfully');
                return redirect(route('News.index'));
            }
          
        }
    }

   
    public function destroy(Request $request, $id)
    {
        if (NewModel::where('id',$id)->delete()) 
        {
           $request->session()->flash('msg','Latest News Deleted Successfully');
            return redirect(route('News.index'));
        }
    }
}
