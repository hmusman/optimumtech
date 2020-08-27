<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('admin.view_clients')->with(compact('clients'));
    }

    
    public function create()
    {
        return view('admin.add_client');
    }

    
   
    public function store(Request $request)
    {
       
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:25',
            'url'=>'required | url',
            'img'=>'required'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
               if(Client::where('name','=',$request->name)->get()->count()>0)
               {
                    return back()->withErrors(['warningMsg'=>"Client Already Exist"])->withInput();
               } 
            
               $img = $request->file('img');
               $ext = $img->extension();
               if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
               {
                   $size =getimagesize($img);
                   if ($size[0]==200 && $size[1]==120)
                   {
                        $filename = $request->file('img')->store('admin/images/client','public');
                   }
                   else
                   {
                        return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 200*120'])->withInput();
                   }
               }
               else
               {
                    return back()->withErrors(['extWarning'=>'Please Choose Correct Image'])->withInput();
               }

              
               $client = new Client();
               $client->name= $request->name;
               $client->url = $request->url;
               $client->img = $filename;
               if($client->save())
               {
                    $request->session()->flash('msg','Client Added Successfully');
                    return redirect(route('Client.index'));
               }
          
        }
    }

    
    public function show(NewModel $newModel)
    {
        //
    }

   
    public function edit($id)
    {
        $client= Client::where('id',$id)->first();
        return view('admin.update_client',compact('client'));
    }

    
    public function update(Request $request, $id)
    {
       $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:25',
            'url'=>'required | url',
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
                    if ($size[0]==200 && $size[1]==120)
                    {
                        $filename = $request->file('img')->store('admin/images/client','public');
                    }
                    else
                    {
                        return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 200*120'])->withInput();
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
          
            $client = client::find($id);
            $client->name = $request->name;
            $client->url = $request->url;
            $client->img = $filename;
            if($client->save())
            {
                $request->session()->flash('msg','Client Updated Successfully');
                return redirect(route('Client.index'));
            }
          
        }
    }

   
    public function destroy(Request $request, $id)
    {
        if (Client::where('id',$id)->delete()) 
        {
           $request->session()->flash('msg','Client Deleted Successfully');
            return redirect(route('Client.index'));
        }
    }
}
