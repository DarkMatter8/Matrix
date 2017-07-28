@extends('layout.master-inside-land')
@section('title', 'Home')
@section('content')

<div class="container">
	<form method="POST" action="/player/checkscore">
	@foreach($questions as $question)
		<div>
			<h3>{{ $loop->iteration }}.hewfhwpofbpfwpebfwpbwebfp</h3>
			<ol type="A">
				<li>A</li>
				<li>A</li>
				<li>A</li>
				<li>A</li>	
			</ol>
			<div class="form-group">
		      <label for="answer">Answer:</label>
		      <input type="hidden" value="{{ $question->id }}" name="question-{{ $loop->iteration }}">
		      <select class="form-control" name="answer-{{ $loop->iteration }}" id="answer-{{ $loop->iteration }}">
		        <option>A</option>
		        <option>B</option>
		        <option>C</option>
		        <option>D</option>
		      </select>
		    </div>
		</div>
	@endforeach

	<input type="hidden" value="{{ $count }}" name="count">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit">
	</form>
</div>

@stop