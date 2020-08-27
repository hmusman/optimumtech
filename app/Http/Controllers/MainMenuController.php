<?php

namespace App\Http\Controllers;

use App\MainMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainMenuController extends Controller
{
    
    public function index()
    {
        $mains = MainMenu::all();
        return view('admin.main_menus',compact('mains'));
    }

   
    public function create()
    {
        return view('admin.add_main_menu');
    }

    
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'title'=>'bail | required | max:50',
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
             if(MainMenu::where('title',$request->title)->count() >0)
            {
                $request->session()->flash('msg','Main Menu is already exist');
                return back()->withInput();
            }
            $main= new  MainMenu();
            $main->title = $request->title;
            if ($main->save())
            {
                $request->session()->flash('msg','Main Menu has been added successfully');
                return redirect()->route('MainMenu.index');
            }
        }
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $main = mainmenu::where('id',$id)->first();
        return view('admin.update_main_menu',compact('main'));
    }

    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'title'=>'bail | required | min:5 | max:50'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
            $mainmenu = mainmenu::find($id);
            $mainmenu->title = $request->title;
            if ($mainmenu->save())
            {
                $request->session()->flash('msg','Main Menu has been updated successfully');
                return redirect()->route('MainMenu.index');
            }
        }
    }

    
    public function destroy(Request $request, $id)
    {
         if(MainMenu::where('id',$id)->delete())
       {
            $request->session()->flash('msg','Main Menu has been Deleted successfully');
            return redirect()->route('MainMenu.index');
       }
    }
}
