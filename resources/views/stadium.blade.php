@extends('master')
@section('title','Stadium')
@section('content')
<div class="container-fluid" style="padding:0px 0px;">
  
  <!--  Main partition -->
  <div class="container-fluid">
                                                                     
 <!-- Main content 3-12 -->
    <div class="col-sm-12 text-center">
      <div class="well">
      <h2 style="font-weight: bold;  font-family: Arial, Helvetica, sans-serif;color: rgb(201, 30, 132)" class="text-center">Stadium</h2>
        </div>
        <h4  style="color: white" class="text-left">Russia Stadium</h4>
        
        <div class="row">

                  <div class="col-md-4">
                  <div class="thumbnail">
                   <img id="shk" src="images/stadium/luzhniki.jpg" data-toggle="modal" data-target="#bycle">
                      <div class="caption">
            <h4>Lunzniki</h4>
                       
          </div>
                      
                      </div>
                        </div>
                      
                        
                         <div class="col-md-4">
                  <div class="thumbnail">
                   <img id="shk" src="images/stadium/saintp.jpg" data-toggle="modal" data-target="#nomd">
                      <div class="caption">
                <h4>Saint Petersburg</h4>
                         
          </div>
                      
                      </div>
                        </div>
                     <div class="col-md-4">
                  <div class="thumbnail">
                   <img id="shk" src="images/stadium/Rostov-Arena.jpg" data-toggle="modal" data-target="#tycn">
                      <div class="caption">
            <h4>Rostov Arena</h4>
                     
          </div>
                      
                      </div>
                        </div>
             </div>
            
              
                     
        
                      <div class="row">
                          
                    <div class="col-md-4">
                   <div class="thumbnail">
                   <img id="shk" src="images/stadium/spartak.jpg" data-toggle="modal" data-target="#spartak">
                    <div class="caption">
                     <h4>Spartak</h4>
                      
                     </div>
                      
                      </div>
                        </div>
                          
                          
                          <div class="col-md-4">
                           <div class="thumbnail">
                   <img id="shk" src="images/stadium/fish.jpg" data-toggle="modal" data-target="#unn">
                      <div class="caption">
                   <h4>Fish</h4>
                        
                          
                    </div>
                      
                      </div>
                          
                      </div>


                          <div class="col-md-4">
                           <div class="thumbnail">
                   <img id="shk" src="images/stadium/cosmos.jpg" data-toggle="modal" data-target="#cosmos">
                      <div class="caption">
                   <h4>Cosmos Arena</h4>
                        
                          
                    </div>
                      
                      </div>
                          
                      </div>
    
                  </div>
              
                  
             <div class="modal fade" id="bycle" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Luzhniki</h3>
                     
                    </div>
                    
                    <div class="modal-body">
                        <img width="100%" src="images/stadium/luzhniki.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                     <p>City: Moscow </p>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>

              <div class="modal fade" id="nomd" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Saint Petersburg</h3>
                       
                      </div>
                      <div class="modal-body">
                          <img width="100%" src="images/stadium/saintp.jpg" alt="">
                      </div>
                      <div class="modal-footer">
                       <p>City: Peterburg </p>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>

              <div class="modal fade" id="tycn" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Rostov-Arena</h3>
                       
                      </div>
                      <div class="modal-body">
                          <img width="100%" src="images/stadium/Rostov-Arena.jpg" alt="">
                      </div>
                      <div class="modal-footer">
                          <p>City: Rostov-On-Don </p>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>

           <div class="modal fade" id="spartak" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Spartak</h3>
                       
                      </div>
                      <div class="modal-body">
                          <img width="100%" src="images/stadium/spartak.jpg" alt="">
                      </div>
                      <div class="modal-footer">
                          <p>City: Moscow </p>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>

                  <div class="modal fade" id="unn" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Fish</h3>
                           
                          </div>
                          <div class="modal-body">
                              <img width="100%" src="images/stadium/fish.jpg" alt="">
                          </div>
                          <div class="modal-footer">
                            <p>City: Sochi </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                        
                      </div>
                    </div>

                         <div class="modal fade" id="cosmos" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Cosmos Arena</h3>
                     
                    </div>
                    
                    <div class="modal-body">
                        <img width="100%" src="images/stadium/cosmos.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                     <p>City: Samara </p>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>



       
              
        



       
    </div>
  

  </div>

    
    

<!-- footer-->

    </div>

@endsection