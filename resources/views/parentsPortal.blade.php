@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Parents Portal</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Parents Portal</li>
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

		
			






  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection