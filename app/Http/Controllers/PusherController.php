<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Pusher\Facades\Pusher;

class PusherController extends Controller
{
    public function form()
    {
        return view('send');
    }

    public function send(Request $request)
    {    	
	    Pusher::trigger( 'laravel-channel',
	                      'my-event', 
	                      array('message' => $request->message));    	
    	return back();
    }

    public function receive()
    {
    	return view('receive');
    }    
}
