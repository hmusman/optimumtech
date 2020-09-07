<?php

namespace App\Http\Controllers;

use App\SiteContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteContactController extends Controller
{
   
    public function index()
    {

        $contact = SiteContact::first();
        return view('admin.view_site_contact',compact('contact'));
    }

  
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $contact = SiteContact::where('id',$id)->first();
        return view('admin.update_site_contact',compact('contact'));
    }


    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'address'=>'bail | required',
            'phone'=>'bail | required | numeric',
            'email'=>'bail | required | email',
            'skype'=>'bail | required'
        ]);

        if ($validations->fails())
        {
            return back()->withErrors($validations)->withInput(); 
        }
        $contact = SiteContact::find($id);
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->skype = $request->skype;
        if($contact->save())
            $request->session()->flash('msg','Website Contact Updated Successfully');
            return redirect(route('SiteContact.index'));
    }

    
    public function destroy(Request $request, $id)
    {
        //
    }
}
