@extends('master')
@section('title','Team list')
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
      <h2 class="text-center">List of Football  Team</h2>
        </div>
        <h5 style="color:red" class="text-left">Countrys</h5>
        
<table class="table">
<tbody>

       

            @foreach($teams as $team)
          
              <tr>
                <td>
    
         <div class="card">
        <div class="card-header"><h2 style="font-weight: bold; color: white">{!! $team->cname !!} &nbsp &nbsp           {{$team->wcwin}}</h2>
         
 

         </div>
        <div class="card-body"><a href="#"><img class="img-thumbnail" style="width:40%" src="/storage/team/{{$team->image}}"></a></div> 
       <div class="card-footer"><h3 style="color: red" >{!! $team->tname !!}</h3></div>
        </div>
      </td>
        </tr>


      @endforeach

</tbody>
      </table>

     

          



 





       
    </div>
  

  </div>

    
    

<!-- footer-->

    </div>

@endsection