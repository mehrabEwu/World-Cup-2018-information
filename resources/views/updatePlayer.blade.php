<!DOCTYPE html>
<html lang="en">
<head>
  <title>update Player </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
#well{
background-color:rgba(250, 0, 0, 0.7);
    color: aliceblue;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">World Cup 2018</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="{{url('/admin/adminDashboard')}}"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#">lorem ipsum</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
 @if(isset(Auth::User()->email))
       <li> <a href="{{url('/admin/logout')}}">
          <span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
           @else
      <script>window.loaction="/admin";</script>
          @endif
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>World CUp 2018</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="{{url('/admin/adminDashboard')}}">Dashboard</a></li>
        <li><a href="#section2">lorem ipsum</a></li>
        <li><a href="#section3">lorem ipsum</a></li>
        <li><a href="#section3"> <span class="glyphicon glyphicon-cog"></span>Setting</a></li>
            @if(isset(Auth::User()->email))
             <li><a href="{{url('/admin/logout')}}" class="btn btn-danger btn-lg">
          

          <span class="glyphicon glyphicon-log-out"></span> Log out </a></li>

      </ul><br>
        @else
      <script>window.loaction="/admin";</script>
          @endif
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well" id="well">
        <h2>ADMIN PANEL</h2>
        @if(isset(Auth::User()->email))
       <P style="color: blue" ><strong> Welcome <span class="glyphicon glyphicon-user"></span>{{Auth::User()->name}}
        </strong></P>
      </div>
      @else
      <script>window.loaction="/admin";</script>  
      @endif
      <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <h3 style="color:black">All Team</h3>
     
              
  <ul class="list-group">
      
             @foreach($teams as $team)  
      	  
    <a href="{!! action('plUpdateController@show', $team->cname) !!}">  <li style="font-weight: bold; font-size: 1em; color: green" class="list-group-item">{{$team->cname}}</li></a>
      @endforeach
  </ul>
   

           
                



          </div>
        </div>
   
      </div>
    </div>
  </div>
</div>

</body>
</html>
