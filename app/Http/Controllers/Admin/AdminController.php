<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;


class AdminController extends Controller
{
    public function home(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
        	return view('admin.home'); 
        }
    }
}
