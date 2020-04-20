@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Academics</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Primary School</li>
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
       	           	<h2>Primary School</h2>
                     <div class="title">Our Primary School</div>
       	             
       	            
       	           </div>
       	        
       	       </div>
       	   </section>
       	   <!--End Welcome Section-->

			<div style="width: 100%; padding-bottom: 100px; padding-left: 50px; padding-right: 50px">
	<center>
		<div style="width: 80%; padding-top: 100px; text-align:left">
			<h4 style="padding-top: 100px">The goal of the TFS Primary School is to provide each pupil with a challenging and broad learning experience. We offer the British National Curriculum (Key Stages 1 and 2), which provides a broad and balanced curriculum, raises achievement and improves outcomes for children. We believe that children learn most effectively through classroom engagement, play, social interactions, and inquiry experiences. </h4>
			<br>
            <h4>We focus on building our children's literacy and numeracy skills, as well as specific skills and knowledge base though general and specialist subjects, which include; Mathematics, English Language, Social Studies, Computing, History, Geography, Music, Art, Information Technology, Physical Education, French and Nigerian languages .</h4>
            <br>
            <h4>In order to keep up with the global movement in educational practice, we ensure that technology responsibly is woven into all areas of the curriculum, and all classrooms are equipped with up to date interactive boards to enhance this deployment.</h4>
            <br>
            <p>
			<center><div style="width: 100%" data-aos="zoom-out">
				<img src="{{asset('images/facilities/ICTRoom2.jpg')}}" width="50%" style="float: left; position: relative; padding: 5px">
				<img src="{{asset('images/facilities/ArtRoom1-min.JPG')}}" width="50%" style="float: left; position: relative; padding: 5px">
			</div></center>
		</div>
	</center>
 </div>






  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection