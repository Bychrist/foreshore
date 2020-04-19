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

  	

				<div id="Container" style="padding-bottom:56.25%; position:relative; display:block; width: 100%">
                <h4 style="text-align: center">Want a sneak peek of our facility? Why not join us for a quick virtual tour?</h4>
 
				
             <iframe id="ViostreamIframe" width="100%" height="100%" src="https://www.youtube.com/embed/Wpr3PWfyf3s?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" autoplay=1
							rel=0 allowfullscreen="" style="position:absolute; top:5; left: 0"></iframe>
  
				
</div>







  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection