<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\SubscribingMail;

class SubscriptionController extends Controller
{
    public function Subscribe(Request $request){
    	// dd($request->all());
    	$validations = Validator::make($request->all(),[
            'email'=>'required|unique:subscribers,email'
        ]);

        if ($validations->fails()){
        	return response()->json([
			    'error' => 'Email already exist in subscribing list.',
			]);
        }else{
	    	$email = $request->email;
	    	try{
	    		Subscribe::create(['email'=>$email]);

	    		$detail = [
                    'emailFrom' => env('MAIL_FROM_ADDRESS'),
                    'subject' => 'Thanks For Subscribeing Newsletter.',
                    'massage' => 'You are now in subscribing list of optimum tech, you will receive updates of events,sessions,classes and other news. Stay tunned and conected with us.'

                ];

	    		Mail::to($email)->send(new SubscribingMail($detail));
	    		return response()->json([
				    'success' => 'Thanks for subscribing.',
				]);
	    	}
	    	catch(Exception $e){
	    		return $e->getMessage();
	    	}
        }
    }
}
