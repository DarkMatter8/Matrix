<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Result;

class AdminController extends Controller
{
    public function home(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
        	return view('admin.home'); 
        }
    }

    public function show_results(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
        	$results = Result::orderBy('total', 'DESC')->get();
        	return view('admin.results')->with('results',$results); 
        }
    }
}