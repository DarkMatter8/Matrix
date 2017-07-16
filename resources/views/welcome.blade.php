@extends('layout.master-inside-land')
@section('title', 'Matrix')
@section('content')

<div class="row">
    <div class="col-sm-6">
        <h1 align="center" style="font-family: 'Montserrat', sans-serif; font-size: 8em; padding-top: 110px">Matrix</h1>
    </div>
    <div class="col-sm-6" style="padding: 80px">
        <p style="font-size: 1.8em; font-weight:200; font-family: 'Montserrat', sans-serif; padding-bottom: 8px">Sign In</p>
        <form action="">
            <div class="form-group">
                <input type="text" value="" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" value="" placeholder="Password" class="form-control">
            </div>
            <button href="#fakelink" class="btn btn-simple btn-sm" style="padding:10px">Forgot your Password?</button><br>
            <button type="submit" class="btn btn-fill" style="padding-top:10px">Sign In</button>
        </form>
    </div>
</div>
@stop