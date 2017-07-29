@extends('layout.master-inside-land')
@section('title', 'Home')
@section('content')

<h1 align="center">Chemistry</h1>
@if(count($questions)>=1)
<div align="center" style="position: fixed; top:0; right:0; padding-right:100px; padding-top:50px;">
	<p style="font-size: 30px;">Time Left</p><time id ="countdown" style="font-size: 30px;"></time>
</div>
@endif
<div style="padding: 100px; padding-top: 50px;">
@if(count($questions)>=1)
	<form method="POST" id="chemistryform" name="chemistryform" action="/player/checkscore">
	@foreach($questions as $question)
		<div>
			<h3>{{ $loop->iteration }}.{{ $question->question }}</h3>
			<ol type="A">
				<li>{{ $question->option1 }}</li>
				<li>{{ $question->option2 }}</li>
				<li>{{ $question->option3 }}</li>
				<li>{{ $question->option4 }}</li>	
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
	<input type="hidden" value="chemistry" name="genre">
	<input type="hidden" value="{{ $count }}" name="count">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div align="center"><button type="submit" class="btn btn-fill" style="padding-top:10px">Submit !</button></div>
	</form>
@else
	<h2 align="center">There are No Questions !</h2>
	<div style="padding-top: 10px;" align="center">
  <a href="/player/home/"><button class="btn btn-fill btn-lg">Back To Home !</button></a><br>
</div>
@endif
</div>


<script>
      
var seconds = 5400;

function secondPassed() {

	var minutes = Math.round((seconds - 30)/60);
        var ask;

	var remainingSeconds = seconds % 60;

	if (remainingSeconds < 10) {

		remainingSeconds = "0" + remainingSeconds;


	}

	document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;

	if (seconds == 0) {

		clearInterval(countdownTimer);

		document.getElementById("chemistryform").submit();

	} else {

		seconds--;

	}

}



var countdownTimer = setInterval('secondPassed()', 1000);

history.pushState(null, null, location.href);
window.onpopstate = function(event) {
    history.go(1);
};

</script>
@stop