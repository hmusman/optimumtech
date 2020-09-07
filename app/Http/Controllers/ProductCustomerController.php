<?php

namespace App\Http\Controllers;

use App\ProductCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Product;
class ProductCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = ProductCustomer::all();
        return view('admin.view_product_customers',compact('customers'));
    }


    public function create()
    {
        $products = Product::all(); 
        return view('admin.add_product_customer',compact('products'));
    }

    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string |max:100',
            'url'=>'bail | required | active_url',
            'detail'=>'bail | required | max:250',
            'img'=>'bail | required | mimes:jpeg,jpg,png',
            'product'=>'required'
        ]);
        if($validations->fails())
            return back()->withErrors($validations)->withInput();
        $img = $request->file('img');
        $size =getimagesize($img);
        if ($size[0]==200 && $size[1]==120)
        {
            $filename =  $request->file('img')->store('admin/images/productCustomer','public');
        }
        else
        {
            return back()->withErrors(['sizeWarning'=>'Image Resolution Should Be 200*120'])->withInput();
        }
        $productCustomer = new ProductCustomer();
        $productCustomer->name = $request->name;
        $productCustomer->url = $request->url;
        $productCustomer->detail = $request->detail;
        $productCustomer->product_id = $request->product;
        $productCustomer->img =$filename;
        if($productCustomer->save())
            $request->session()->flash('msg','FeedBack Added Successfully');
            return redirect(route('ProductCustomer.index'));
    }

   
    public function show($id)
    {
    }

    public function edit($id)
    {
        $products = Product::all();
        $product = ProductCustomer::where('id',$id)->first();
        return view('admin.update_product_customer')->with(['products'=>$products,'product'=>$product]); 
    }


    public function update(Request $request, $id)
    {
         $validations = Validator::make($request->all(),[
            'name'=>'bail | required | string |max:100',
            'url'=>'bail | required | active_url',
            'detail'=>'bail | required | max:250',
            'product'=>'required'
        ]);
        if($validations->fails())
            return back()->withErrors($validations)->withInput();
        if($request->hasFile('img'))
        {
            $img = $request->file('img');
            $ext = $img->extension();
            if($ext=='png' || $ext=='jpg' || $ext=='jpeg')
            {
               $size =getimagesize($img);
               if ($size[0]==200 && $size[1]==120)
               {
                    $filename = $request->file('img')->store('admin/images/productCustomer','public');
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


        $productCustomer = ProductCustomer::find($id);
        $productCustomer->name = $request->name;
        $productCustomer->url = $request->url;
        $productCustomer->detail = $request->detail;
        $productCustomer->product_id = $request->product;
        $productCustomer->img =$filename;
        if($productCustomer->save())
            $request->session()->flash('msg','FeedBack Updated Successfully');
            return redirect(route('ProductCustomer.index'));
    }

   
    public function destroy(Request $request,$id)
    {
        if (ProductCustomer::where('id',$id)->delete()) 
        {
           $request->session()->flash('msg','FeedBack Deleted Successfully');
            return redirect(route('ProductCustomer.index'));
        }
    }

}
