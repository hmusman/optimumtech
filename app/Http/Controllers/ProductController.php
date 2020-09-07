<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.view_products')->with(compact('products'));
    }

    
    public function create()
    {
        return view('admin.add_product');
    }

    
   
    public function store(Request $request)
    {
       
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:100',
            'detail'=>'bail | required | string',
            'img'=>'required',
            'meta_name'=>'bail | required | string',
            'meta_detail'=>'required',
            'video'=>'mimes:mp4|max:25600'

        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }
        else
        {
               if(Product::where('name','=',$request->name)->get()->count()>0)
               {
                    return back()->withErrors(['warningMsg'=>"Product Already Exist"])->withInput();
               } 
            
               $img = $request->file('img');
               $ext = $img->extension();
               if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
               {
                   $size =getimagesize($img);
                   if ($size[0]==262 && $size[1]==175)
                   {
                        $filename = $request->file('img')->store('admin/images/product','public');
                   }
                   else
                   {
                        return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 262*175'])->withInput();
                   }
               }
               else
               {
                    return back()->withErrors(['extWarning'=>'Please Choose Correct Image'])->withInput();
               }

              if($request->hasFile('video'))
              {
                $video = $request->file('video')->store('admin/images/product/videos','public');
              }
              else
              {
                $video = "";
              }
              $product = new Product();
              $product->name= $request->name;
              $product->detail = $request->detail;
              $product->img = $filename;
              $product->meta_name = $request->meta_name;
              $product->meta_detail = $request->meta_detail;
              $product->video = $video;
              if($product->save())
              {
                $request->session()->flash('msg','Product Added Successfully');
                return redirect(route('Product.index'));
              }
          
        }
    }

    
    public function show(NewModel $newModel)
    {
        //
    }

   
    public function edit($id)
    {
        $product= Product::where('id',$id)->first();
        return view('admin.update_product',compact('product'));
    }

    
    public function update(Request $request, $id)
    {
       $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string | max:100',
            'detail'=>'bail | required | string',
            'meta_name'=>'bail | required | string',
            'meta_detail'=>'required',
            'video'=>'mimes:mp4|max:25600'
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
                       if ($size[0]==262 && $size[1]==175)
                       {
                            $filename = $request->file('img')->store('admin/images/product','public');
                       }
                       else
                       {
                            return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 262*175'])->withInput();
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


            if($request->hasFile('video'))
            {
              $video = $request->file('video')->store('admin/images/product/videos','public');
            }
            else
            {
              $video = $request->oldVideo;
            }
          
            $product = Product::find($id);
            $product->name = $request->name;
            $product->detail = $request->detail;
            $product->img = $filename;
            $product->meta_name = $request->meta_name;
            $product->meta_detail = $request->meta_detail;
            $product->video = $video;
            if($product->save())
            {
                $request->session()->flash('msg','Product Updated Successfully');
                return redirect(route('Product.index'));
            }
          
        }
    }

   
    public function destroy(Request $request, $id)
    {
        if (Product::where('id',$id)->delete()) 
        {
           $request->session()->flash('msg','Product Deleted Successfully');
            return redirect(route('Product.index'));
        }
    }
}
