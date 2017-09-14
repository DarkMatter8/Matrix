@extends('layout.master-inside-land')
@section('title', 'Home')
@section('content')
<nav class="navbar navbar-ct-transparent" role="navigation-demo">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: #66615B;">Matrix-Player</a>
    </div>

	<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-example-2">
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="/logout" style="color: #66615B;">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> 
                    Logout
                </a>
            </li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>
<div class="container">
<div class="col-sm-6">
<h2>Rules</h2>
  <ul>
    <li>Round 1 is “PCM” which will be the online round.</li>
    <li>Each team must nominate one member each for Physics, Chemistry and Maths who will
attempt their respective subject’s questions individually on the computer.</li>
    <li>Teams will be assigned with unique team number. Class number will remain constant for 2
rounds</li>
    <li>Each subject has 10 questions each and 10 mins for each subject.</li>
    <li>Quiz will be automatically submitted after 10 mins.</li>
    <li>Each right answer will be awarded 1 mark. There will be no negative marking for the
answers.</li>
    <li>Top 40 teams scoring the highest marks will proceed in the next round.</li>
    <li><strong>Write down your team name,team no, email id &amp;password on a piece of paper and pass it to
your team mate for the next subject quiz.</strong></li>
  </ul>
</div>

<div class="col-sm-6">
@if($flag == 1)
  <div style="padding-top: 100px;" align="center">
    @if($result->physics == 'NA')
      <a href="/player/physics/"><button class="btn btn-fill btn-lg">Physics</button></a><br>
    @else
      <a href="/player/physics/"><button class="btn btn-fill btn-lg" disabled>Physics</button></a><br>
    @endif
  </div>
  <div style="padding-top: 10px;" align="center">
    @if($result->chemistry == 'NA')
    <a href="/player/chemistry/"><button class="btn btn-fill btn-lg">Chemistry</button></a><br>
    @else
    <a href="/player/chemistry/"><button class="btn btn-fill btn-lg" disabled>Chemistry</button></a><br>
    @endif
  </div>
  <div style="padding-top: 10px;" align="center">
    @if($result->maths == 'NA')
    <a href="/player/maths/"><button class="btn btn-fill btn-lg">Maths</button></a><br>
    @else
    <a href="/player/maths/"><button class="btn btn-fill btn-lg" disabled>Maths</button></a><br>
    @endif
  </div>
@else
  <div style="padding-top: 100px;" align="center">
      <a href="/player/physics/"><button class="btn btn-fill btn-lg">Physics</button></a><br>
  </div>
  <div style="padding-top: 10px;" align="center">
    <a href="/player/chemistry/"><button class="btn btn-fill btn-lg">Chemistry</button></a><br>
  </div>
  <div style="padding-top: 10px;" align="center">
    <a href="/player/maths/"><button class="btn btn-fill btn-lg">Maths</button></a><br>
  </div>
@endif
</div>
</div>
@stop