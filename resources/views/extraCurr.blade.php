@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Academics</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Extracurricular Activities</li>
                   </ul>
               </div>
           </div>
       </section>
       <!--End Page Title-->

        <!--Welcome Section-->
       	   <section class="welcome-section" style="margin-bottom: -200px">
       	   	<div class="auto-container">
       	       	<!--Sec Title-->
       	           <div class="sec-title centered">
       	           	<div class="title-icon"><img src="{{asset('images/icons/sec-title-icon-1.png')}}" alt="" /></div>
       	           	<h2>Extracurricular Activities</h2>
                     <div class="title">Extracurricular Activities in Foreshore</div>
       	             
       	            
       	           </div>
       	        
       	       </div>
       	   </section>
       	   <!--End Welcome Section-->

  	

       <div style="width: 100%; padding-bottom: 100px; padding-left: 50px; padding-right: 50px">
	<center>
		<div style="width: 80%; padding-top: 100px; text-align:left">	
			  <p style="padding-top: 100px">In addition to the core curriculum subject areas, children at The Foreshore School also have the opportunity to build physical, cognitive, social and many other skills by participating in a wide range of extracurricular activities including ballet, chess, cub scouts and brownies, swimming, taekwondo, robotics, football, etc.</p>
              <hr>
               <div id="Container" style="padding-bottom:56.25%; position:relative; display:block; width: 100%">
              <iframe width="100%" height="100%" data-aos="zoom-out" src="https://www.youtube.com/embed/7k9rhtgR0eM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="position:absolute; left: 0"></iframe>
              </div>
               <hr>
			<div class="mu-gallery-area" data-aos="zoom-out" >
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/extra/Gymnasium.JPG')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>	
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/extra/DSC_7266-300x200.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
							<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/extra/cHESS-ROOM-1-300x200.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
              </div>
			  </div>
			  </div>
			 
			 
			  
              <hr>
			  <hr>
		</div>
	</center>
 </div>
			

 <section class="welcome-section" style="margin-bottom: -200px;margin-top:100px;background:transparent">
  	   	<div class="auto-container">
  	       	<!--Sec Title-->
  	           <div class="sec-title centered">
  	           	
               @include('layouts._callaction')
  	            
  	           </div>
  	        
  	       </div>
  	   </section>





  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm" style="margin-top: -200px">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection