<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        return view('admin.list')->with('questions',$questions);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $newQuestion = new Question;
            $newQuestion->question = $request->input('question');
            $newQuestion->option1 = $request->input('option1');
            $newQuestion->option2 = $request->input('option2');
            $newQuestion->option3 = $request->input('option3');
            $newQuestion->option4 = $request->input('option4');
            $newQuestion->answer = $request->input('answer');
            $newQuestion->genre = 'physics';
            $newQuestion->save();

            return redirect("/admin/home");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::where('id', $id)->first();
        return view('admin.update')->with('question', $question)->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oldUpdate = Question::where('id', '=', $id)->first();

        $oldUpdate->question = $request->input('question');
        $oldUpdate->option1 = $request->input('option1');
        $oldUpdate->option2 = $request->input('option2');
        $oldUpdate->option3 = $request->input('option3');
        $oldUpdate->option4 = $request->input('option4');
        $oldUpdate->answer = $request->input('answer');
        $oldUpdate->save();

        return redirect('admin/questions/');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
            $question->delete();
            return redirect('/admin/questions/');
    }
}
