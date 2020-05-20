@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/facilities/Library.JPG')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Academics</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Parents Handbook</li>
                   </ul>
               </div>
           </div>
       </section>
       <!--End Page Title-->

      


              <section class="teachers-section no-padding-btm" style="margin-top: -150px">
                      
                      <div class="sec-title centered">
                        <div class="title-icon"><img src="{{asset('images/icons/sec-title-icon-1.png')}}" alt="" /></div>
                        <h2 style="margin-bottom: 50px;">Parents Handbook</h2>
                         <div style="margin-top:-50px " class="title">Foreshore Parent's Handbook</div>
                      </div>

                  <div class="container" style="background:transparent;">
                    
                
                          <div class="row">

                            <div class="col-md-2">
                              
                            </div>
                          
                          <div class="teacher-block col-md-8 col-sm-6 col-xs-12" style="background:transparent;box-shadow:-7px -6px 52px -16px rgba(204,204,204,1);border-radius:10px; padding-left: 50px;padding-right: 50px;background-color: transparent;" >
                              <div class="inner-box" style="height: 500px;background-color: transparent; border: none;">
                                    
                              
                                      
                                      <p>
                                        At The Foreshore School, we believe that pupils commit themselves to learning and accepting responsibility for their work and behaviour. Our goal is to instil qualities such as common courtesy, manners, respect for others, self-discipline, responsibility and accountability.</h4>
                                                    <h4>We expect pupils to behave responsibly, recognising the rights of others, to be physically safe, emotionally secure and to pursue their own learning without interference. We have a tremendous positive influence when setting clearly defined limits and providing appropriate consequences for behaviour.</h4>
                                                    <h4>The school rules and regulations herein apply to pupils’ actions at any time when under the supervision and guidance of school personnel.</h4>
                                                    <h4>Please <a href="assets/TFS_Parents-Handbook_Final.pdf" style="color:#840c00">click here to view the TFS Parents Handbook</a> in full.</h4>
                                      </p>
                                     
                               
                                             
                               </div>
                            </div>


                          


                            

                      
                          </div>


                   </div>
                      
              
              </section>

  <section class="welcome-section" style="margin-bottom: -200px;margin-top:100px;background:transparent">
  	   	<div class="auto-container">
  	       	<!--Sec Title-->
  	           <div class="sec-title centered">
  	           	
               @include('layouts._callaction')
  	            
  	           </div>
  	        
  	       </div>
  	   </section>

                <!--Teachers Section-->
                <section class="teachers-section no-padding-btm" style="margin-top: -200px;">
                
                    <div class="background-patten"></div>
                </section>
                <!--End Teachers Section-->






@endsection