<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Player </title>
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
            <h3 style="color:rgba(255, 196, 0, 0.856)">Update Player</h3>

                   
                <form method="post" enctype="multipart/form-data">

                  @foreach ($errors->all() as $error)
                  <p class="alert alert-danger">{{ $error }}</p>
                 @endforeach
                 @if (session('status'))
                  <div class="alert alert-success">
                  {{ session('status') }}
                  </div>
                    @endif

                  <fieldset>
                <legend >Player of <b style="color: blue">{!! $players->cname !!}</b> team</legend>
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      
                      
                      
                    <div class="form-group">
                     <label for="cname">Select Country:</label>
                      
                   <select name="cname" id="cname" class="form-control" data-style="select-with-transition">
                    @foreach($teams as $team)
                        <option value="{{$team->cname}}"> {{$team->cname}}</option>
                           @endforeach
                         </select>

                    </div>
                      
                    <div class="form-group">
                      <label for="pname">Player Name:</label>
                      <input type="text" class="form-control" id="pname" placeholder="Enter Player Name" name="pname" 
                      value="{!! $players->pname !!}" required>
                    </div>

                

                    <div class="form-group">
                     <label for="cname">Select Position:</label>
                      
                   <select name="position" id="position" class="form-control" data-style="select-with-transition">
                
                          <option value="{!! $players->position !!}">{!! $players->position !!}</option>
                         
                       
                      
                         </select>

                    </div>



                       <div class="form-group">
                      <label for="pimage">Player Profile Photo:</label>
                      <input type="text" class="form-control" id="pimage" name="pimage" value="{!! $players->pimage !!}" required>
                    </div>
                       <div class="form-group">
                      <label for="pcimage">Player Cover Photo:</label>
                      <input type="text" class="form-control" id="cimage" name="cimage" value="{!! $players->cimage !!}"  required>
                    </div>
                    <div class="form-group">
                      <label for="jersey">Jersey No:</label>
                      <input type="number" class="form-control" id="jersey" placeholder="Enter Player jersey no" name="jersey" value="{!! $players->jersey !!}"   >
                    </div>


                    <div class="form-group">
                      <label for="age">Age:</label>
                      <input type="number" class="form-control" id="age" placeholder="Enter Player Age" name="age" value="{!! $players->age !!}"   >
                    </div>

                    <div class="form-group">
                      <label for="height">Height:</label>
                      <input type="text" class="form-control" id="height" placeholder="Enter Player Height" name="height" value="{!! $players->height !!}"  >
                    </div>

                    <div class="form-group">
                      <label for="weight">Weight:</label>
                      <input type="text" class="form-control" id="weight" placeholder="Enter Player Weight" name="weight" value="{!! $players->weight !!}"   >
                    </div>


                 
                       <div class="form-group">
                      <label for="clbname">Club Name:</label>
                      <input type="text" class="form-control" id="clubname" placeholder="Enter club name" name="clubname" value="{!! $players->clubname !!}"  >
                    </div>
                      
                          <div class="form-group">
                      <label for="rating">Rating:</label>
                      <input type="text" class="form-control" id="rating" name="rating" value="{!! $players->rating !!}" >
                    </div>

                    <div class="form-group">
                        <label for="goal">No of Goal:</label>
                        <input type="number" class="form-control" id="goal" name="goal" value="{!! $players->goal !!}"  >
                      </div>
                       <div class="form-group">
                        <label for="award">Award:</label>
                        <input type="text" class="form-control" id="award" name="award" value="{!! $players->award !!}"  >
                      </div>
                       <div class="form-group">
                        <label for="descr">Description</label>
                       <textarea class="form-control" rows="5" name="description" id="descrition">{{$players->description}} </textarea>
                      </div>
                    
                    <button type="submit" class="btn btn-warning">Update</button>
                 
                  </form>



            </fieldset>




          </div>
        </div>
   
      </div>
    </div>
  </div>
</div>

</body>
</html>
