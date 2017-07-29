@extends('layout.master-inside-land')
@section('title', 'Matrix')
@section('content')

<nav class="navbar navbar-ct-transparent" role="navigation-demo">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: #66615B;">Matrix-Admin</a>
    </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-example-2">
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="/admin/home" style="color: #66615B;">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i> 
                    Back to Home
                </a>
            </li>
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

<div class="col-sm-6 col-sm-offset-3">
<h2>Results</h2>
  <ul class="list-group">
  	@foreach($results as $result)
    	<li class="list-group-item"">{{ $result->player }} 
      <p style="float: right;">{{ $result->genre }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $result->marks_obt }}/{{ $result->total_mks }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $result->created_at }}</p>
      </li>
    @endforeach
  </ul>
</div>
@stop