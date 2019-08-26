@extends('master')
@section('title','Squad')
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
      <h2 class="text-center">Squad</h1>
        </div>

        
<table class="table">


       <thead>
         <tr>
           <th></th>
           <th></th>
         </tr>
       </thead>
<tbody>
            @foreach($players as $player)
          
              <tr>
                <td>
    
         <div class="card">
        <div style="" class="card-header"><h2 style="font-weight: bold">{!! $player->pname !!}  &nbsp{!! $player->jersey !!}</h2></div>
        <div class="card-body"><a href="{!! action('playerInfoController@show', $player->slug) !!}"><img class="img-thumbnail" style="width:30%" src="/storage/squad/{{$player->pimage}}"></a></div> 
       <div class="card-footer"><h4 style="color: navy" >{!! $player->position !!}</h4></div>
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