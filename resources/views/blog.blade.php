@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>The Foreshore School Blog</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>The Foreshore School Blog</li>
                   </ul>
               </div>
           </div>
       </section>
       <!--End Page Title-->

  <div class="container" style="margin-top: 100px">	
<div id="Container" style="padding-bottom:20.25%; position:relative; display:block; width: 100%">
				<img src="{{asset('images/under-construction.png')}}" width="100%" height="100%" style="float: left; position: relative; padding: 5px">
				
			</div>
		
		</div>

		
			
        <section class="welcome-section" style="margin-top:100px;background:transparent">
  	   	<div class="auto-container">
  	       	<!--Sec Title-->
  	           <div class="sec-title centered">
  	           	
               @include('layouts._callaction')
  	            
  	           </div>
  	        
  	       </div>
  	   </section>




  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm" style="margin-top:-100px">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection