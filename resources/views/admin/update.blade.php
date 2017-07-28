@extends('layout.master-inside-land')
@section('title', 'Matrix')
@section('content')

<div style="padding-top: 40px;" class="col-sm-6 col-sm-offset-3">
    <h3>Add a Question</h3>
    <form action="/admin/questions/{{ $id }}" method="POST">
        <div class="form-group">
            <input type="text" name="question" value="{{ $question->question }}" placeholder="Question" class="form-control" id="question" required="true">
        </div>
        <div class="form-group">
            <input type="text" name="option1" id="option1" value="{{ $question->option1 }}" placeholder="OptionA" class="form-control" required="true">
        </div>
        <div class="form-group">
            <input type="text" name="option2" id="option2" value="{{ $question->option2 }}" placeholder="OptionB" class="form-control" required="true">
        </div>
        <div class="form-group">
            <input type="text" name="option3" id="option3" value="{{ $question->option3 }}" placeholder="OptionC" class="form-control" required="true">
        </div>
        <div class="form-group">
            <input type="text" name="option4" id="option4" value="{{ $question->option4 }}" placeholder="OptionD" class="form-control" required="true">
        </div>

        <div class="form-group">
          <label for="answer">Answer:</label>
          <select class="form-control" name="answer" id="answer">
            <option @if($question->answer == 'A') selected @endif>A</option>
            <option @if($question->answer == 'B') selected @endif>B</option>
            <option @if($question->answer == 'C') selected @endif>C</option>
            <option @if($question->answer == 'D') selected @endif>D</option>
          </select>
        </div>

        <div class="form-group">
          <label for="genre">Answer:</label>
          <select class="form-control" name="genre" id="genre">
            <option @if($question->genre == 'Physics') selected @endif>Physics</option>
            <option @if($question->genre == 'Chemistry') selected @endif>Chemistry</option>
            <option @if($question->genre == 'Maths') selected @endif>Maths</option>
          </select>
        </div>

        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" id="add-button" class="btn btn-fill" style="padding-top:10px">Add</button>
    </form>
</div>

@stop