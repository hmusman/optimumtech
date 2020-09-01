<?php

namespace App\Http\Controllers;

use App\SubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\MainMenu;
use App\Product;
use App\Course;
use App\Service;
class SubMenuController extends Controller
{
   public function index()
    {
        $subs = SubMenu::all();
        return view('admin.sub_menus',compact('subs'));
    }

   
    public function create()
    {
        $mains = MainMenu::all();
        return view('admin.add_sub_menu',compact('mains'));
    }

    
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'main'=>'required',
            'title'=>'bail | required | min:5 | max:50',
            'route'=>'bail | required | string'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
            if(SubMenu::where('title',$request->title)->count() >0)
            {
                $request->session()->flash('msg','Sub Menu is already exist');
                return back()->withInput();
            }
            $sub= new  SubMenu();
            $sub->title = $request->title;
            $sub->main_id = $request->main;
            $sub->route = $request->route;
            // $sub->item_id = $request->item_id;
            // $request->tbl!="" ? $sub->tbl = $request->tbl :"";
            if ($sub->save())
            {
                $request->session()->flash('msg','Sub Menu has been added successfully');
                return redirect()->route('SubMenu.index');
            }
        }
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $mains = MainMenu::all();
        $sub = SubMenu::where('id',$id)->first();
        // $tbl = $sub->tbl;
        // if($tbl !='')
        // {
        //     if($tbl=="products"){ $data = Product::all(); }
        //     else if($tbl=="courses"){ $data = Course::all(); }
        //     else if($tbl=="services"){ $data = Service::all(); }

        // }
        return view('admin.update_sub_menu',compact(['sub','mains']));
    }

    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'main'=>'required',
            'title'=>'bail | required | min:5 | max:50',
            'route'=>'bail | required | string'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        
        else
        {
            $submenu = SubMenu::find($id);
            $submenu->title = $request->title;
            $submenu->main_id = $request->main;
            $submenu->route = $request->route;
            // $request->tbl!="" ? $submenu->tbl = $request->tbl :"";
            // $submenu->item_id = $request->item_id;
            if ($submenu->save())
            {
                $request->session()->flash('msg','Sub Menu has been updated successfully');
                return redirect()->route('SubMenu.index');
            }
        }
    }

    
    public function destroy(Request $request, $id)
    {
         if(SubMenu::where('id',$id)->delete())
       {
            $request->session()->flash('msg','Sub Menu has been Deleted successfully');
            return redirect()->route('SubMenu.index');
       }
    }
}
