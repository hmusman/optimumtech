<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
   
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.view_contacts')->with('contacts',$contacts);
    }

    public function destroy(Request $request ,$id)
    {
        if(Contact::where('id',$id)->delete())
        {
            $request->session()->flash('msg','Contact Deleted Successfully');
            return redirect(route('Contact.index'));
        }
    }

    public function changeContactStatus(Request $request)
    {
        for($i=0;$i<count($request->checkboxes);$i++)
        {
            $id = $request->checkboxes[$i];
            $application = Contact::find($id);
            $application->status =1;
            $application->save();
        }
       $request->session()->flash('msg','All Messages Are Viewed'); 
        return redirect(route('Contact.index'));
    }
}
