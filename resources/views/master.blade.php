
<!DOCTYPE html>
<html>
<head>
  <title> @yield('title') </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css"> <!--user CSS -->
  <link rel="icon" type="image/png" href="images/fevi.png">
  <link rel="stylesheet" href="bootstrap.min.css">
    
    <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap.min.js"></script>
<script src="jquery-1.11.1.min.js"></script>
    
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  <style>
#Contact {background-color: rgba(0, 107, 214, 0.96);}

  


    </style>
</head>




<body  style="font-family:Trebuchet MS;   background-image: url(images/field.jpg)" data-spy="scroll" data-target=".navbar">
@include('shared.header')
@include('shared.navbar')
@yield('content')
@include('shared.footer')
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>
<script>
$(document).ready(function() {
	// This command is used to initialize some elements and make them work properly
	$.material.init();
});
</script>
       <script src="/js/app.js"></script>
</body>
</html>