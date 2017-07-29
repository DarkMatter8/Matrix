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

<div style="padding-top: 100px;" align="center">
  <a href="/player/physics/"><button class="btn btn-fill btn-lg">Physics !</button></a><br>
</div>
<div style="padding-top: 10px;" align="center">
  <a href="/player/chemistry/"><button class="btn btn-fill btn-lg">Chemistry !</button></a><br>
</div>
<div style="padding-top: 10px;" align="center">
  <a href="/player/maths/"><button class="btn btn-fill btn-lg">Maths !</button></a><br>
</div>

@stop