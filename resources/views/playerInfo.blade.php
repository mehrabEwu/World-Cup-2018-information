@extends('master')
@section('title','Player Info')
@section('content')
<div class="container-fluid" style="padding:0px 0px;">
  
  <!--  Main partition -->
  <div class="container-fluid">
                                
             <div class="col-sm-4 ">
             	<div class="well">
             		
             		<h1 style="text-shadow: 3px 2px coral; font-weight: bold; font-size: 4em;color: blue" > {{$PL->pname}}</h1>
             		<h3 style="font-weight: bold; font-family:Comic Sans MS; color: red;font-size: 2.2em">{{$PL->position}}</h3>
             		<h2 style="text-shadow: 3px 2px purple; font-weight: bold; font-size: 15em;color: crimson ; font-family:Copse"; > {{$PL->jersey}}</h2>
             	</div>
  
       
    </div>         

                                                                     
 <!-- Main content 3-12 -->
    <div class="col-sm-8 text-center" style="background-image: url(images/div.jpg)" >


     <div class="jumbotron">
     	<img  width="100%" class="img-responsive"  src="/storage/squad/cover/{{$PL->cimage}}">

    
      </div>
	

       
    </div>
  

  </div>


  <div class="container-fluid">

  	<div class="col-sm-6" >
  		<div class="panel panel-primary">
      <div class="panel-heading" style="font-weight: bold; font-size: 1.5em">Personal Information</div>
      <div class="panel-body">

      	  <ul class="list-group">
      	  	<h4 style="font-weight: bold; color: black">Name</h4>
      <li class="list-group-item">{{$PL->pname}}</li>
      <h4 style="font-weight: bold; color: black">Age</h4>
    <li class="list-group-item">{{$PL->age}} years </li>
        <h4  style="font-weight: bold; color: black">Height</h4>
    <li class="list-group-item">{{$PL->height}} </li>
        <h4  style="font-weight: bold; color: black">Weight</h4>
            <li class="list-group-item">{{$PL->weight}} kg </li>
  </ul>
      	

      </div>
    </div>
</div>
	<div class="col-sm-6">
		
	<div class="panel panel-success">
      <div class="panel-heading" style="font-weight: bold; font-size: 1.5em">Carrier</div>
      <div class="panel-body">

      	  <ul class="list-group">
      	  	<h4 style="font-weight: bold; color: black">National Team</h4>
      <li class="list-group-item">{{$PL->cname}}</li>
      <h4 style="font-weight: bold; color: black">Playing Club</h4>
    <li class="list-group-item">{{$PL->clubname}} </li>
        <h4  style="font-weight: bold; color: black">No of Goal</h4>
    <li class="list-group-item">{{$PL->goal}} </li>
        <h4  style="font-weight: bold; color: black">Position</h4>
            <li class="list-group-item">{{$PL->position}} </li>
  </ul>


      	

      </div>
    </div>

	</div>
  		

  	</div>

  
  	

<div class="container-fluid">


	<div style="text-align: center; font-family: arial" class="col-sm-4">
		<h2 >Rating : {{$PL->rating}}</h2>
		@if($PL->rating==5)
     <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$PL->rating}}" aria-valuemin="0" aria-valuemax="10" style="width:50%"> 50% rating
    	@elseif($PL->rating==6)
    	    <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$PL->rating}}" aria-valuemin="0" aria-valuemax="10" style="width:60%"> 60% rating
    	  	@elseif($PL->rating==7)
    	    <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$PL->rating}}" aria-valuemin="0" aria-valuemax="10" style="width:70%"> 70% rating
    	  	@elseif($PL->rating==8)
    	    <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$PL->rating}}" aria-valuemin="0" aria-valuemax="10" style="width:80%">80% rating
    	  	@elseif($PL->rating==9)
    	    <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$PL->rating}}" aria-valuemin="0" aria-valuemax="10" style="width:90%">  90% rating
    	  	@elseif($PL->rating==10)
    	    <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$PL->rating}}" aria-valuemin="0" aria-valuemax="10" style="width:100%"> 100% rating
    	@endif








      
    </div>
  </div>
</div>
		
	

	<div class="col-sm-3">

	<h2 ><img width="100px" height="80px" src="/storage/tr/tr.png">
	 Honour</h2>
	 <ol>
	 	<li style="list-style-type: square;">  {{$PL->award}}</li>
	 </ol>
		
		
	</div>
	<div class="col-sm-5">
		<h2 style="text-align: center; color: blue" >Biography</h2>
		  <p  style="font-family: arial; font-size: 1.5em" class="bg-warning">{{$PL->description}}</p>

		
	</div>
	</div>

    
    

<!-- footer-->

    </div>

@endsection