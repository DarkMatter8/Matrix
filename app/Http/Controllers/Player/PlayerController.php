<?php

namespace App\Http\Controllers\Player;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PlayerController extends Controller
{
     public function home(Request $request){

        if(!Session::has('session')) {
            return Redirect::to('/');
        }else{
        	return view('player.home'); 
        }
    }
}
