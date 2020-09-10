<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\MainMenu;
use App\SiteContact;
use App\Product;
class PortfolioController extends Controller
{
   
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.view_portfolios')->with(compact('portfolios'));
    }

    public function showPortfolios()
    {
        $portfolios = Portfolio::all();
        $mains = MainMenu::all();
        $contact = SiteContact::first();
        $products = Product::all();
        return view('portfolios')->with(compact(['portfolios','mains','contact','products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_portfolio');
    }

   
    public function store(Request $request)
    {
        
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required',
            'service'=>'bail | required',
            'url'=>'required | active_url',
            'objective'=>'bail | required',
            'technology'=>'required',
            'img'=>'required'

        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
               if(Portfolio::where('name','=',$request->name)->get()->count()>0)
               {
                    return back()->withErrors(['warningMsg'=>"Product Already Exist"])->withInput();
               } 
            
               $img = $request->file('img');
               $ext = $img->extension();
               if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
               {
                   $size =getimagesize($img);
                   if ($size[0]==750 && $size[1]==500)
                   {
                        $filename = $request->file('img')->store('admin/images/product','public');
                   }
                   else
                   {
                        return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 750*500*'])->withInput();
                   }
               }
               else
               {
                    return back()->withErrors(['extWarning'=>'Please Choose Correct Image'])->withInput();
               }

               if($request->hasFile('img2'))
               {
                   $img2 = $request->file('img2');
                   $ext = $img2->extension();
                   if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
                   {
                       $size =getimagesize($img2);
                       if ($size[0]==750 && $size[1]==500)
                       {
                            $filename2 = $request->file('img2')->store('admin/images/portfolio','public');
                       }
                       else
                       {
                            return back()->withErrors(['sizeWarning2'=>'Image 2 Resolution Should Be 750*500'])->withInput();
                       }
                   }
                   else
                   {
                        return back()->withErrors(['extWarning2'=>'Please Choose Correct Image 2'])->withInput();
                   }
               }
               else
               {
                    $filename2 = '';
               }
              
               if($request->hasFile('img2'))
               {
                   $img3 = $request->file('img3');
                   $ext = $img3->extension();
                   if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
                   {
                       $size =getimagesize($img3);
                       if ($size[0]==750 && $size[1]==500)
                       {
                            $filename3 = $request->file('img3')->store('admin/images/portfolio','public');
                       }
                       else
                       {
                            return back()->withErrors(['sizeWarning3'=>'Image 3 Resolution Should Be 750*500'])->withInput();
                       }
                   }
                   else
                   {
                        return back()->withErrors(['extWarning3'=>'Please Choose Correct Image 3'])->withInput();
                   }
               }
               else
               {
                    $filename3 = '';
               }

               $portfolio = new Portfolio();
               $portfolio->name= $request->name;
               $portfolio->service = $request->service;
               $portfolio->img1 = $filename;
               $portfolio->img2 = $filename2;
               $portfolio->img3 = $filename3;
               $portfolio->objective = $request->objective;
               $portfolio->technology = $request->technology;
               $portfolio->url = $request->url;
               if($portfolio->save())
                {
                    $request->session()->flash('msg','Portfolio Added Successfully');
                    return redirect(route('Portfolio.index'));
                }
           
        }
    }

    
    public function show($id)
    {
        $portfolio = Portfolio::where('id',$id)->first();
        $mains = MainMenu::all();
        $contact = SiteContact::first();
        $products = Product::all();
        return view('portfolio')->with(compact(['portfolio','mains','contact','products']));
    }

    public function edit($id)
    {
        $portfolio= Portfolio::where('id',$id)->first();
        return view('admin.update_portfolio',compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required',
            'service'=>'bail | required',
            'url'=>'required | active_url',
            'objective'=>'bail | required',
            'technology'=>'required',

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
                   if ($size[0]==750 && $size[1]==500)
                   {
                        $filename = $request->file('img')->store('admin/images/product','public');
                   }
                   else
                   {
                        return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 750*500*'])->withInput();
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

            if($request->hasFile('img2'))
            {
               $img2 = $request->file('img2');
               $ext = $img2->extension();
               if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
               {
                   $size =getimagesize($img2);
                   if ($size[0]==750 && $size[1]==500)
                   {
                        $filename2 = $request->file('img2')->store('admin/images/portfolio','public');
                   }
                   else
                   {
                        return back()->withErrors(['sizeWarning2'=>'Image 2 Resolution Should Be 750*500'])->withInput();
                   }
               }
               else
               {
                    return back()->withErrors(['extWarning2'=>'Please Choose Correct Image 2'])->withInput();
               }
            }
            else
            {
                $filename2 = $request->oldImg2;
            }
              
            if($request->hasFile('img3'))
            {
               $img3 = $request->file('img3');
               $ext = $img3->extension();
               if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
               {
                   $size =getimagesize($img3);
                   if ($size[0]==750 && $size[1]==500)
                   {
                        $filename3 = $request->file('img3')->store('admin/images/portfolio','public');
                   }
                   else
                   {
                        return back()->withErrors(['sizeWarning3'=>'Image 3 Resolution Should Be 750*500'])->withInput();
                   }
               }
               else
               {
                    return back()->withErrors(['extWarning3'=>'Please Choose Correct Image 3'])->withInput();
               }
            }
            else
            {
                $filename3 = $request->oldImg3;
            }

           $portfolio = Portfolio::find($id);
           $portfolio->name= $request->name;
           $portfolio->service = $request->service;
           $portfolio->img1 = $filename;
           $portfolio->img2 = $filename2;
           $portfolio->img3 = $filename3;
           $portfolio->objective = $request->objective;
           $portfolio->technology = $request->technology;
           $portfolio->url = $request->url;
           if($portfolio->save())
            {
                $request->session()->flash('msg','Portfolio Updated Successfully');
                return redirect(route('Portfolio.index'));
            }
           
        }
    }

    
    public function destroy(Request $request,$id)
    {
        if (Portfolio::where('id',$id)->delete()) 
        {
           $request->session()->flash('msg','Portfolio Deleted Successfully');
            return redirect(route('Portfolio.index'));
        }
    }
}
