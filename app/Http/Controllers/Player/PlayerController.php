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
        	$count = Question::where('genre','physics')->count();

        	return view('player.physics')->with('questions', $questions)->with('count',$count); 
        }
    }

    public function show_chemistry(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
            $questions = Question::where('genre','chemistry')->get();
            $count = Question::where('genre','chemistry')->count();
        	return view('player.chemistry')->with('questions', $questions)->with('count',$count); 
        }
    }

    public function show_maths(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
        	$questions = Question::where('genre','maths')->get();
            $count = Question::where('genre','maths')->count();
            return view('player.maths')->with('questions', $questions)->with('count',$count); 
        }
    }

    public function check_score(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
            $score = 0;
            $count = $request->input('count');
            for($i=1;$i<=($request->input('count'));$i++){

                $question = Question::where('id',$request->input('question-'.$i))->first();
                if(($question->answer) == ($request->input('answer-'.$i))){
                    $score++;    
                }
            }
            return view('player.score')->with('score',$score)->with('count',$count);

        }
    }
}
