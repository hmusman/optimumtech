<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function index()
    {
        $members = Team::all();
        return view('admin.view_members')->with(compact('members'));
    }

    
    public function create()
    {
        return view('admin.add_member');
    }

    
   
    public function store(Request $request)
    {
       
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:25',
            'detail'=>'bail | required | string | max:95',
            'designation'=>'bail | required | string | max:100',
            'img'=>'required'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
               if(Team::where('name','=',$request->name)->get()->count()>0)
               {
                    return back()->withErrors(['warningMsg'=>"Team Member Already Exist"])->withInput();
               } 
            
               $img = $request->file('img');
               $ext = $img->extension();
               if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
               {
                   $size =getimagesize($img);
                   if ($size[0]==262 && $size[1]==300)
                   {
                        $filename = $request->file('img')->store('admin/images/team','public');
                   }
                   else
                   {
                        return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 262*300'])->withInput();
                   }
               }
               else
               {
                    return back()->withErrors(['extWarning'=>'Please Choose Correct Image'])->withInput();
               }

              
               $team = new Team();
               $team->name= $request->name;
               $team->detail = $request->detail;
               $team->designation = $request->designation;
               $team->img = $filename;
               if($team->save())
               {
                    $request->session()->flash('msg','Team Member Added Successfully');
                    return redirect(route('Team.index'));
               }
          
        }
    }

    
    public function show(NewModel $newModel)
    {
        //
    }

   
    public function edit($id)
    {
        $member= Team::where('id',$id)->first();
        return view('admin.update_member',compact('member'));
    }

    
    public function update(Request $request, $id)
    {
       $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:25',
            'detail'=>'bail | required | string | max:95',
            'designation'=>'bail | required | string | max:100'
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
                       if ($size[0]==262 && $size[1]==300)
                       {
                            $filename = $request->file('img')->store('admin/images/team','public');
                       }
                       else
                       {
                            return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 262*300'])->withInput();
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
          
            $team = Team::find($id);
            $team->name = $request->name;
            $team->detail = $request->detail;
            $team->designation = $request->designation;
            $team->img = $filename;
            if($team->save())
            {
                $request->session()->flash('msg','Team Member Updated Successfully');
                return redirect(route('Team.index'));
            }
          
        }
    }

   
    public function destroy(Request $request, $id)
    {
        if (Team::where('id',$id)->delete()) 
        {
           $request->session()->flash('msg','Team Member Deleted Successfully');
            return redirect(route('Team.index'));
        }
    }
}
