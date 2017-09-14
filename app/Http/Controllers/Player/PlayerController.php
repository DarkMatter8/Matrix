<?php

namespace App\Http\Controllers\Player;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Question;
use App\Result;

class PlayerController extends Controller
{
     public function home(Request $request){

        if(!Session::has('session')) {
            return redirect('/');
        }else{
            
            $result = Result::where('team',Session('session')->name)->first();             

            if($result){
                $flag = 1;    
            }else{
                $flag = 0;
            }

        	return view('player.home')->with('result',$result)->with('flag',$flag); 
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

            $team_name = Session('session')->name;
            $player_email = Session('session')->email;
            $genre = $request->input('genre');

            $exists = Result::where('team',$team_name)->first();

            if(!$exists){

                $result = new Result;
                $result->team = $team_name;
                $result->player_email = $player_email;
                if($genre == "physics"){
                    $result->physics = $score;
                }else if($genre == "chemistry"){
                    $result ->chemistry = $score;
                }else{
                    $result->maths = $score;
                }
                $result->total = $score;
                $result->save();
            }else{
                if($genre == "physics"){
                    $exists->physics = $score;
                    $exists->total = $score + ($exists->chemistry)+($exists->maths);            
                }else if($genre == "chemistry"){
                    $exists ->chemistry = $score;
                    $exists->total = $score + ($exists->physics)+($exists->maths);
                }else{
                    $exists->maths = $score;
                    $exists->total = $score + ($exists->chemistry)+($exists->physics);
                }
                $exists->save();
            }

            return view('player.score')->with('score',$score)->with('count',$count);

        }
    }

}
