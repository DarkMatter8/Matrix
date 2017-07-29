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
                <a href="/admin/questions/create" style="color: #66615B;">
                    <i class="fa fa-plus" aria-hidden="true"></i> 
                    Add a Question
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
<h2 style="font-family: 'Roboto', sans-serif; font-weight:100;">Questions</h2>

  <div class="nav-tabs-navigation">
      <div class="nav-tabs-wrapper">
      <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
          <li class="active"><a href="#physics" data-toggle="tab">Physics</a></li>
          <li><a href="#chemistry" data-toggle="tab">Chemistry</a></li>
          <li><a href="#maths" data-toggle="tab">Maths</a></li>
      </ul>
      </div>
  </div>

<div id="my-tab-content" class="tab-content text-center">
  <div class="tab-pane active" id="physics">
@if(count($physics)>=1)
  <ul class="list-group">
  	@foreach($physics as $phy)
    	<li class="list-group-item" style="padding-bottom:20px;">{{ $phy->question }} 
    		<div style="float:right;">
        <!-- Button trigger modal -->
        <button class="btn btn-fill btn-sm" data-toggle="modal" data-target="#myModal-{{ $loop->iteration }}">
          View
        </button>

        <!-- Modal Core -->
        <div class="modal fade" id="myModal-{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">{{ $phy->question }}</h4>
              </div>
              <div class="modal-body">
                A.{{ $phy->option1 }}<br>
                B.{{ $phy->option2 }}<br>
                C.{{ $phy->option3 }}<br>
                D.{{ $phy->option4 }}<br>
                <hr>
                Answer : {{ $phy->answer }}
              </div>
            </div>
          </div>
        </div>
    		<a href="/admin/questions/{{ $phy->id }}/edit"><button class="btn btn-fill btn-sm">Update</button></a>
    		<form style="display:inline;" action="/admin/questions/{{ $phy->id }}" method="POST">
    			<input type="hidden" name="_method" value="DELETE">
    			<input type="hidden" name="_token" value="{{ csrf_token() }}">
    			<button type="submit" class="btn btn-fill btn-sm">Delete</button>
    		</form>
    		</div>
    	</li>
    @endforeach
  </ul>
@else
  <h2 align="center">There are no Questions !<h2>
@endif
  </div>

  <div class="tab-pane" id="chemistry">
  @if(count($chemistry)>=1)
    <ul class="list-group">
      @foreach($chemistry as $chem)
        <li class="list-group-item" style="padding-bottom:20px;">{{ $chem->question }} 
          <div style="float:right;">
          <!-- Button trigger modal -->
          <button class="btn btn-fill btn-sm" data-toggle="modal" data-target="#myModal-{{ $loop->iteration }}">
            View
          </button>

          <!-- Modal Core -->
          <div class="modal fade" id="myModal-{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">{{ $chem->question }}</h4>
                </div>
                <div class="modal-body">
                  A.{{ $chem->option1 }}<br>
                  B.{{ $chem->option2 }}<br>
                  C.{{ $chem->option3 }}<br>
                  D.{{ $chem->option4 }}<br>
                  <hr>
                  Answer : {{ $phy->answer }}
                </div>
              </div>
            </div>
          </div>
          <a href="/admin/questions/{{ $chem->id }}/edit"><button class="btn btn-fill btn-sm">Update</button></a>
          <form style="display:inline;" action="/admin/questions/{{ $chem->id }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-fill btn-sm">Delete</button>
          </form>
          </div>
        </li>
      @endforeach
    </ul>
  @else
    <h2 align="center">There are no Questions !</h2>
  @endif
    </div>

  <div class="tab-pane" id="maths">
  @if(count($maths)>=1)
    <ul class="list-group">
      @foreach($maths as $math)
        <li class="list-group-item" style="padding-bottom:20px;">{{ $math->question }} 
          <div style="float:right;">
          <!-- Button trigger modal -->
          <button class="btn btn-fill btn-sm" data-toggle="modal" data-target="#myModal-{{ $loop->iteration }}">
            View
          </button>

          <!-- Modal Core -->
          <div class="modal fade" id="myModal-{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">{{ $math->question }}</h4>
                </div>
                <div class="modal-body">
                  A.{{ $math->option1 }}<br>
                  B.{{ $math->option2 }}<br>
                  C.{{ $math->option3 }}<br>
                  D.{{ $math->option4 }}<br>
                  <hr>
                  Answer : {{ $math->answer }}
                </div>
              </div>
            </div>
          </div>
          <a href="/admin/questions/{{ $math->id }}/edit"><button class="btn btn-fill btn-sm">Update</button></a>
          <form style="display:inline;" action="/admin/questions/{{ $math->id }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-fill btn-sm">Delete</button>
          </form>
          </div>
        </li>
      @endforeach
    </ul>
  @else
    <h2 align="center">There are no Questions !</h2>
  @endif
    </div>

  </div>
</div>
@stop