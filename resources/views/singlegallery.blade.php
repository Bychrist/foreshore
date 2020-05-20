@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/facilities/Library.JPG')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Gallery</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Gallery</li>
                   </ul>
               </div>
           </div>
       </section>
	   <!--End Page Title-->

  

   





        

        <section class="teachers-section no-padding-btm" style="margin-top: -150px">
                                      
                                      <div class="sec-title centered">
                                        <div class="title-icon"><img src="{{asset('images/icons/sec-title-icon-1.png')}}" alt="" /></div>
                                        <h2 style="margin-bottom: 50px;">{{$category->category_name}}</h2>
                                         <div style="margin-top:-50px " class="title">
                                         An event to remember 
                                         </div>
                                      </div>
                            
                
       
                                  <div class="container" style="background:transparent;box-shadow:-7px -6px 52px -16px rgba(204,204,204,1);box-radius:10px">
                                  
                                  
                              
                                                                 
       
                                              

                                  @foreach($pixes as $mainPix)
                                         
                                               
                                              <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                                                  <div class="inner-box">
                                                      <div class="image-box"><img src="{{$mainPix->title}}" alt="">
                                                          <div class="overlay-box">
                                                              <div class="content">
                                                                  <a class="lightbox-image" href="{{$mainPix->title}}" title="{{$category->category_name}}" data-fancybox-group="example-gallery"><span class="icon flaticon-plus"></span></a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              

                                            
                                  @endforeach      

                                  <center> {!! $pixes->render("pagination::bootstrap-4") !!}</center>
               
                                       
                                            
                                            

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
 <section class="teachers-section no-padding-btm" style="margin-top: -100px">
 
     <div class="background-patten"></div>
 </section>
 <!--End Teachers Section-->


@endsection