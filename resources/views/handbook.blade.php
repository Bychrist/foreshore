@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Academics</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Parent's Handbook</li>
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
       	           	<h2>Parent's Handbook</h2>
                     <div class="title">Foreshore Parent's Handbook</div>
       	           </div>
       	       </div>
       	   </section>
       	   <!--End Welcome Section-->

  	

	
<div class="container" style="margin-top: 100px;">
<div style="width: 100%; padding-bottom: 100px; padding-left: 50px; padding-right: 50px">
	<center>
		<div style="width: 80%; padding-top: 100px; text-align:left">
			<h4 style="padding-top: 100px">At The Foreshore School, we believe that pupils commit themselves to learning and accepting responsibility for their work and behaviour. Our goal is to instil qualities such as common courtesy, manners, respect for others, self-discipline, responsibility and accountability.</h4>
						<h4>We expect pupils to behave responsibly, recognising the rights of others, to be physically safe, emotionally secure and to pursue their own learning without interference. We have a tremendous positive influence when setting clearly defined limits and providing appropriate consequences for behaviour.</h4>
						<h4>The school rules and regulations herein apply to pupils’ actions at any time when under the supervision and guidance of school personnel.</h4>
						<h4>Please <a href="assets/TFS_Parents-Handbook_Final.pdf" style="color:#840c00">click here to view the TFS Parents Handbook</a> in full.</h4>
		</div>
	</center>
</div>

</div>




  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection