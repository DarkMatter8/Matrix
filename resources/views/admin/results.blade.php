@extends('layout.master-inside-land')
@section('title', 'Matrix')
@section('content')

<div style="padding-top: 40px;" class="col-sm-6 col-sm-offset-3">
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