@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/facilities/Library.JPG')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Academics</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Calendar</li>
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
       	           	<h2>Calendar</h2>
                     <div class="title">2019/2020 School Calendar</div>
       	             
       	            
       	           </div>
       	        
       	       </div>
       	   </section>
       	   <!--End Welcome Section-->

  	

		<center>
            <div class="entry-content" style="margin-top: 100px;">
		<h3>School calendar for spring term 2019/2020</h3>
<p><a href="http://tfsikoyi.com/wp-content/uploads/2019/07/TFS_School-Calendar_2019_2020_parents.pdf"><strong><img data-attachment-id="2799" data-permalink="http://tfsikoyi.com/education-at-tlc/calendar/attachment/spring_term_calendar/" data-orig-file="http://tfsikoyi.com/wp-content/uploads/2020/01/Spring_term_calendar-1.png" data-orig-size="813,933" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Spring_term_calendar" data-image-description="" data-medium-file="http://tfsikoyi.com/wp-content/uploads/2020/01/Spring_term_calendar-1-261x300.png" data-large-file="http://tfsikoyi.com/wp-content/uploads/2020/01/Spring_term_calendar-1.png" class="alignleft size-full wp-image-2799" src="http://tfsikoyi.com/wp-content/uploads/2020/01/Spring_term_calendar-1.png" alt="" width="813" height="933" srcset="http://tfsikoyi.com/wp-content/uploads/2020/01/Spring_term_calendar-1.png 813w, http://tfsikoyi.com/wp-content/uploads/2020/01/Spring_term_calendar-1-261x300.png 261w, http://tfsikoyi.com/wp-content/uploads/2020/01/Spring_term_calendar-1-768x881.png 768w" sizes="(max-width: 813px) 100vw, 813px" /></strong></a></p>
			</div>
</article>
															</main>
			</div>
					</div>
	</div>
            

		</center>


		<section class="welcome-section" style="margin-bottom: -200px;margin-top:100px;background:transparent">
  	   	<div class="auto-container">
  	       	<!--Sec Title-->
  	           <div class="sec-title centered">
  	           	
               @include('layouts._callaction')
  	            
  	           </div>
  	        
  	       </div>
  	   </section>



  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm" style="margin-top:-200px">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection