@extends('layout.master-inside-land')
@section('title', 'Home')
@section('content')
<h1 align="center" style="padding-top: 200px">You have scored {{ $score }} out of {{ $count }}</h1>

<div style="padding-top: 10px;" align="center">
  <a href="/player/home/"><button class="btn btn-fill btn-lg">Back To Home !</button></a><br>
</div>

<script>
history.pushState(null, null, location.href);
window.onpopstate = function(event) {
    history.go(1);
};
</script>

@stop