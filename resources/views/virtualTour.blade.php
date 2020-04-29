@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Virtual Tour</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Virtual Tour</li>
                   </ul>
               </div>
           </div>
       </section>
       <!--End Page Title-->


              <section class="teachers-section no-padding-btm" style="margin-top: -150px">
                      
                      <div class="sec-title centered">
                        <div class="title-icon"><img src="{{asset('images/icons/sec-title-icon-1.png')}}" alt="" /></div>
                        <h2 style="margin-bottom: 50px;">Want a sneak peek of our facility? </h2>
                         <div style="margin-top:-50px " class="title">Why not join us for a quick virtual tour?</div>
                      </div>

                  <div class="container" style="background:transparent;">
                    
                
                          <div class="row">

                            <div class="col-md-2">
                              
                            </div>
                          
                          <div class="teacher-block col-md-8 col-sm-6 col-xs-12" style="background:transparent;box-shadow:-7px -6px 52px -16px rgba(204,204,204,1);border-radius:10px; padding-left: 50px;padding-right: 50px;background-color: transparent;" >
                              <div class="inner-box" style="height: 500px;background-color: transparent;">
                                    
                                  <center>  

                                     <iframe  id="ViostreamIframe" width="100%" height="400" src="https://www.youtube.com/embed/Wpr3PWfyf3s?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" autoplay=1
                                     rel=0 allowfullscreen="" style="position:absolute; top:5; left: 0"></iframe>
                                     </center>
                                             
                               </div>
                            </div>


                          


                            

                      
                          </div>


                   </div>
                      
              
              </section>



                      <!--Teachers Section-->
                      <section class="teachers-section no-padding-btm" style="margin-top: -150px">
                              
                              <div class="sec-title centered">
                                <div class="title-icon"><img src="{{asset('images/icons/sec-title-icon-1.png')}}" alt="" /></div>
                                <h2 style="margin-bottom: 50px;">Social Media</h2>
                                 <div style="margin-top:-50px " class="title">Our Social Media News Feed</div>
                              </div>

                          <div class="container" style="background:transparent;box-shadow:-7px -6px 52px -16px rgba(204,204,204,1);border-radius:10px">
                            
                        
                                  <div class="row">
                                  
                                  <div class="teacher-block col-md-4 col-sm-6 col-xs-12">
                                      <div class="inner-box">
                                            
                                        <center>  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftheforeshoreschoolikoyi%2F&tabs=timeline&width=300&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=457764251631346" width="300" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></center>
                                                   
                                       </div>
                                   </div>


                                   <div class="teacher-block col-md-4 col-sm-6 col-xs-12">
                                       <div class="inner-box">
                                         
                                        <center>  
                                          
                                          <a class="twitter-timeline" data-width="300" data-height="450" href="https://twitter.com/tfsikoyi?ref_src=twsrc%5Etfw">Tweets by tfsikoyi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                                        </center>
                                                    
                                        </div>
                                    </div>



                                    <div class="teacher-block col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                          
                                          <center> 
                                              
                                              <iframe width="100%" height="450" src="https://rss.app/embed/v1/BcrJ06Gmti8KQt43" frameBorder="0"></iframe>

                                          </center>
                                                     
                                         </div>
                                     </div>

                              
                                  </div>


                              </div>


                                
         <section class="welcome-section" style="margin-bottom: -200px;background:transparent">
  	   	<div class="auto-container">
  	       	<!--Sec Title-->
  	           <div class="sec-title centered">
  	           	
               @include('layouts._callaction')
  	            
  	           </div>
  	        
  	       </div>
  	   </section>


                              
                          <div class="background-patten"></div>
                      </section>
                      <!--End Teachers Section-->



@endsection