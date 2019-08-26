@extends('master')
@section('title','Home')
@section('content')
<div class="container-fluid" style="padding:0px 0px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
       <img src="images/img1.jpg">   
      </div>
    
      <div class="item">
        <img src="images/img2.jpg">
      </div>

      <div class="item">
        <img src="images/img3.jpg">
      </div>

      <div class="item">
        <img src="images/img4.jpg">
      </div>
        <div class="item">
        <img src="images/img5.jpg">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--  Main partition -->
  <div class="container-fluid">
                                
 <!-- Left side 0-3 -->                     
                        
    <div class="col-sm-3">
        <h3 style="color:red" class="sub-name text-center"> Stadium</h3>
       <div class="well-lg">
        <a href="{{action('stadiumController@index')}}"><img src="images/stadium.jpg" class="img-rounded" width="230x"></a> 
       </div>
    </div>
                                                                     
 <!-- Main home page 3-9 -->
    <div class="col-sm-6 text-center">
        <h3 class="sub-name"> History of World Cup</h3>
        <ul class="list-group">
          <li class="list-group-item" style="text-align:justify;"> 
              <h3 style="text-align:center;">International Federation of Association Football</h3>
              <hr>
              The FIFA World Cup was first held in 1930, when FIFA, the world's football governing body, decided to stage an international men’s football tournament under the era of FIFA president Jules Rimet who put this idea into place. The inaugural edition, held in 1930, was contested as a final tournament of only thirteen teams invited by the organization. Since then, the World Cup has experienced successive expansions and format remodeling, with its current 32-team final tournament preceded by a two-year qualifying process, involving over 200 teams from around the world.
          <hr>
            <h3 style="text-align:center;"> Top Football Club </h3>
            <hr>
         <div class="row">      
              <div class="col-sm-4">
                <a href="https://www.arsenal.com">  <img id="cl" src="images/club/arsenal.png"></a>
              </div>
              <div class="col-sm-4">
               <a  href="https://en.psg.fr/"><img id="cl" src="images/club/psg.png"></a>
              </div>
              <div class="col-sm-4">
               <a href="https://www.realmadrid.com/en"> <img id="cl" src="images/club/real.png"></a>
              </div>
          </div>
          <div class="row" style="margin-top:15px;">      
              <div class="col-sm-4">
                <a href="https://www.fcbarcelona.com/">  <img id="cl" src="images/club/barca.png"></a>
              </div>
              <div class="col-sm-4">
              <a href="https://www.manutd.com/">  <img id="cl" src="images/club/manu.png"></a>
              </div>
              <div class="col-sm-4">
                  <a href="http://www.juventus.com/en/"> <img id="cl" src="images/club/juven.png"> </a>
              </div>
            </div>
          
          </li>
        </ul>
    </div>
    <!-- Right side box 9-12 -->
<div class="col-sm-3 text-center">
<button hidden class="tablink" onclick="openPage('News', this, '')" ></button>
<button class="btn btn-info btn-lg" id="tablink" Name="defaultOpen" onclick="openPage('Contact', this, '#8fdae8')"><span class="glyphicon glyphicon-user"></span> User </button>
<div id="News" class="tabcontent">
</div>

<div id="Contact" class="tabcontent">
  <h3 style="color: white">Log in As User</h3>
        
        <!-- Form-->
        <ul class="list-group">
          <li class="list-group-item"> Already Member ! Please Log In
          <br>
          <br>
            <div class="span3">
              <h2>Log In</h2>
              <form>
              
              <label>Username / E-mail</label>
              <br>
              <input type="taxt" name="lastname" class="span3" placeholder="">
              <br>
              <br>
              <label>Password</label>
              <br>
              <input type="password" name="password" class="span3">
              <br>
              <br>
              <label><input type="checkbox" name="terms"> Save your Password. </label>
              <br>
              <input type="submit" value="Sign In" class="btn btn-primary pull-center">
              <div class="clearfix"></div>
              </form>
          </div>
          </li> <li class="list-group-item">
          <br>
            <a href="#">Regester now / sign up </a></li>
        </ul>
</div>



<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementById("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementsByName("defaultOpen").click();
</script>
    </div>
  </div>

    
    

<!-- footer-->

    </div>

@endsection