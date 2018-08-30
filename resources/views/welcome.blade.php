@extends('layout.master-inside-land')
@section('title', 'Matrix')
@section('content')

<div class="row">
    <div class="col-sm-6" style="padding-top: 40px; padding-left: 140px">
        <h1 style="font-family: 'Roboto', sans-serif; font-weight:100;">Matrix</h1>
        <p>Matrix is an inter-collegiate PCM based quiz competition
exclusively for first year engineering students organised by SIES GST, Nerul. It
will be held on 7 th September, 2018 and is a full day event. Students in groups
of 3 participate as a team in online, paper-pen, auditorium rounds and many
more. Participants in a team should belong to the same college. Entries will be
entertained only through publicity teams sent to the respective colleges and
through www.cognition.siesgst.ac.in
Prizes worth Rs. 25,000 are to be won. Certificates will be awarded to the top
twenty teams and the college having most number of teams in the top 20 will be
awarded the ‘Best College Trophy’.</p>
    </div>
    <div class="col-sm-6" style="padding: 80px">
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
                <li><a href="#register" data-toggle="tab">Register</a></li>
            </ul>
            </div>
        </div>
        <div id="my-tab-content" class="tab-content text-center">
            <div class="tab-pane active" id="signin">
                <div class="alert alert-danger" id="error" style="display: none;">
                    
                </div>
            <form action="/ServiceLogin" method="POST" id="LoginForm">
                <div class="form-group">
                    <input type="text" name="name" value="" placeholder="Team Name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" value="" placeholder="Password" class="form-control">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <button type="submit" id="login-button" class="btn btn-fill" style="padding-top:10px" disabled>Sign In</button>
            </form>
            </div>
            <div class="tab-pane" id="register">
                <div class="alert alert-success" id="success" style="display: none;">
                
                </div>
                <div class="alert alert-danger" id="error1" style="display: none;">
                    
                </div>
                <form action="/ServiceRegister" method="POST" id="RegisterForm">
                    <div class="form-group">
                        <input type="text" name="name-register"  placeholder="Team Name" class="form-control" id="name-register">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email-register" placeholder="Email" class="form-control" id="email-register">
                    </div>
                    <div class="form-group">
                        <input type="text" name="password-register" id="password-register" placeholder="Password" class="form-control">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" id="register-button" class="btn btn-fill" style="padding-top:10px" disabled>Register</button>
                </form>
            </div>
        </div>

        
    </div>
</div>
@stop
