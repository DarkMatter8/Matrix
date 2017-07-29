@extends('layout.master-inside-land')
@section('title', 'Matrix')
@section('content')

<div style="padding-top: 40px;" class="col-sm-6 col-sm-offset-3">
<h2>Questions</h2>
  <ul class="list-group">
  	@foreach($questions as $question)
    	<li class="list-group-item" style="padding-bottom:20px;">{{ $question->question }} 
    		<div style="float:right;">
        <!-- Button trigger modal -->
<button class="btn btn-fill btn-sm" data-toggle="modal" data-target="#myModal-{{ $loop->iteration }}">
  View
</button>

<!-- Modal Core -->
<div class="modal fade" id="myModal-{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">{{ $question->question }}</h4>
      </div>
      <div class="modal-body">
        A.{{ $question->option1 }}<br>
        B.{{ $question->option2 }}<br>
        C.{{ $question->option3 }}<br>
        D.{{ $question->option4 }}<br>
        <hr>
        Answer : {{ $question->answer }}
      </div>
    </div>
  </div>
</div>
    		<a href="/admin/questions/{{ $question->id }}/edit"><button class="btn btn-fill btn-sm">Update</button></a>
    		<form style="display:inline;" action="/admin/questions/{{ $question->id }}" method="POST">
    			<input type="hidden" name="_method" value="DELETE">
    			<input type="hidden" name="_token" value="{{ csrf_token() }}">
    			<button type="submit" class="btn btn-fill btn-sm">Delete</button>
    		</form>
    		</div>
    	</li>
    @endforeach
  </ul>
</div>
@stop