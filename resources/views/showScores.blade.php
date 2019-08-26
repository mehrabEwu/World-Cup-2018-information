@extends('master')
@section('title','Scores')
@section('content')
<div class="container-fluid" style="padding:0px 0px;">
  
  <!--  Main partition -->
  <div class="container-fluid">
                                
 <!-- Left side 0-3 -->                     
                        
    <div style="border: solid 2px rgba(65, 83, 55, 1)" class="col-sm-3">
        <h3 style="color:red" class="sub-name text-center"> Stadium</h3>
       <div class="well-lg" id="dv">
        <a href="{{action('stadiumController@index')}}"> <img src="images/stadium.jpg" class="img-rounded" id="stadium" width="230x"></a>
 
       </div>
    </div>
                                                                     
 <!-- Main content 3-12 -->
    <div class="col-sm-9 text-center">
      <div class="well">
      <h2 class="text-center">Scores</h2>
        </div>
        <h5 class="text-left">All Matches</h5>
        
        <table style="color: rgb(239, 26, 26)" class="table table-hover">
        
        <thead>
            <tr>
                <th>Sl.</th>
                <th>Team</th>
                <th>Played</th>
                <th>Wins</th>
                <th>Draws</th>
                <th>Loses</th>
                <th>Points</th>
            </tr>
        
        </thead>
        
        <tbody>
            @foreach($scores as $score)
            <tr>
                <td> {{$score->id}}</td>
                <td> {{$score->cname}}</td>
                <td> {{$score->played}}</td>
                <td> {{$score->wins}}</td>
                <td> {{$score->draws}}</td>
                <td> {{$score->loses}}</td>
                <td> {{$score->points}}</td>
            
            </tr>
            @endforeach
        
        
        </tbody>


</table>



       
    </div>
  

  </div>

    
    

<!-- footer-->

    </div>

@endsection