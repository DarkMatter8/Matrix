@extends('layout.master-inside-land')
@section('title', 'Matrix')
@section('content')

<div style="padding-top: 40px;" class="col-sm-6 col-sm-offset-3">
<h2>Questions</h2>
  <ul class="list-group">
  	@foreach($questions as $question)
    	<li class="list-group-item" style="padding-bottom:20px;">{{ $question->question }} 
    		<div style="float:right;">
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