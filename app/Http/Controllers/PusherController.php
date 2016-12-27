<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Pusher\Facades\Pusher;

class PusherController extends Controller
{
    public function send()
    {    	
	    Pusher::trigger( 'test-channel',
	                      'test-event', 
	                      array('text' => 'Preparing the Pusher Laracon.eu workshop!'));    	
    	return view('send');
    }

    public function receive()
    {
    	return view('receive');
    }    
}
