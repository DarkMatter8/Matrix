@extends('layout.master-inside-land')
@section('title', 'Matrix')
@section('content')

<nav class="navbar navbar-ct-transparent" role="navigation-demo">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: #66615B; font-family: 'Montserrat', sans-serif;">Matrix-Admin</a>
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
                <a href="/admin/questions/" style="color: #66615B;">
                    <i class="fa fa-list" aria-hidden="true"></i>&nbsp; 
                    View All Questions
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
    <h3>Add a Question</h3>
    <form action="/admin/questions/" method="POST" id="CreateForm" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="question" value="" placeholder="Question" class="form-control" id="question" required="true">
        </div>
        <div class="form-group">
            <input type="text" name="option1" id="option1" value="" placeholder="OptionA" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="option2" id="option2" value="" placeholder="OptionB" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="option3" id="option3" value="" placeholder="OptionC" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="option4" id="option4" value="" placeholder="OptionD" class="form-control">
        </div>

        <div class="form-group">
          <label for="answer">Answer:</label>
          <select class="form-control" name="answer" id="answer">
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
          </select>
        </div>        

        <div class="form-group">
          <label for="genre">Category:</label>
          <select class="form-control" name="genre" id="genre">
            <option>Physics</option>
            <option>Chemistry</option>
            <option>Maths</option>
          </select>
        </div>

        <div class="form-group">
          <input type="file" name="file" id="file" >
        </div>                

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" id="add-button" class="btn btn-fill" style="padding-top:10px">Add</button>
    </form>
    <br>
    <br>
</div>

@stop