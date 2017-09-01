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

<div align="center">
<h2>Results</h2>
  <ul class="list-group">
    	<table>
       <tr>
         <th>Team Name</th>
         <th>Physics</th>
         <th>Chemistry</th>
         <th>Maths</th>
         <th>Total</th>
         <th>Last Submitted At</th>
       </tr>
    @foreach($results as $result)
       <tr>
         <td>{{ $result->team }}</td>
         <td>@if($result->physics == NULL)N.A.@else{{ $result->physics }}@endif</td>
         <td>@if($result->chemistry == NULL)N.A.@else{{ $result->chemistry }}@endif</td>
         <td>@if($result->maths == NULL)N.A.@else{{ $result->maths }}@endif</td>
         <td>{{ $result->total }}</td>
         <td>{{ $result->created_at }}</td>
       </tr>
    @endforeach
      </table>
  </ul>
</div>
@stop