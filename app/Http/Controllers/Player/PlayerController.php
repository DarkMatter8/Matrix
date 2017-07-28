<?php

namespace App\Http\Controllers\Player;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Question;

class PlayerController extends Controller
{
     public function home(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
        	return view('player.home'); 
        }
    }

    public function show_physics(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
        	$questions = Question::where('genre','physics')->get();
        	$count = Question::count();

        	return view('player.physics')->with('questions', $questions)->with('count',$count); 
        }
    }

    public function show_chemistry(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
        	return view('player.chemistry'); 
        }
    }

    public function show_maths(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
        	return view('player.maths'); 
        }
    }
}
