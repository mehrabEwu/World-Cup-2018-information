<!--navbar-->
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="105">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
    </div>
    <div>
      <div class="collapse navbar-collapse" style="text-align:right;" id="myNavbar">
        <ul class="nav navbar-nav" >
          <li class="active"><a href="{{ action('HomeController@home') }}"> <span class="glyphicon glyphicon-home"></span>Home </a></li>
          
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Team<span class="glyphicon glyphicon-chevron-down"></span> </a>
            <ul class="dropdown-menu">
              <li><a href="{{action('countryListController@index')}}"> Country </a></li>
              <li><a href="{{action('squadController@index')}}">  Squad </a></li>
            </ul>
          </li>
            
          <li><a href="{{ action('showScoresController@show') }}"> Score </a></li>
          <li><a href="{{ action('fixtureController@index') }}">  Fixture </a></li>
          <li><a href="#"> News </a></li>
        </ul>
          <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ action('adminLoginController@index') }}"><span class="glyphicon glyphicon-log-in"></span>Admin</a></li>
    </ul>
      </div>
    </div>
  </div>
</nav> 
    