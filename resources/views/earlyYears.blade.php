@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Academics</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Early Years</li>
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
       	           	<h2>Early Years</h2>
                     <div class="title">Foreshore Early Years</div>
       	             
       	            
       	           </div>
       	        
       	       </div>
       	   </section>
       	   <!--End Welcome Section-->

  	

			<div style="width: 100%; padding-bottom: 100px; padding-left: 50px; padding-right: 50px">
	<center>
		<div style="width: 80%; padding-top: 100px; text-align:left">
			<h2 style="padding-top: 100px">Crèche (3 - 17months)</h2>
			<hr>
			<p style="">Our crèche is managed by a qualified nurse, who is assisted by a nanny and supervised by the Early Years Foundation Stage Coordinator. The environment is hygienic, safe, stimulating, reassuring and secure, with a spacious and well-equipped play area.</p>
			<p>The wash/changing room is adequately equipped with labelled compartments per child.</p>
			<p>We also have Closed-Circuit TV (CCTV) cameras in the main area, sleeping room, changing room.</p>
			<div class="mu-gallery-area" data-aos="slide-right">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/TFS_Creche-copy.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>	
                
						</ul>
              </div>
			  </div>
			  </div>
			  <hr>
			  <h2>Preschool (18 months – 3years) and Nursery (3 – 5years)</h2>
			  <hr>
			  <p>The preschool adopts a blend of the Montessori learning curriculum, the International Preschool Curriculum (IPC) and elements of the Early Years Foundation Stage programme. The Montessori programme entails five key areas of learning, which are practical life, sensorial refinement, mathematics, language, and culture. The key focus of this programme is to teach the children these area  through play and their own innovation.</p>
			  <p>The IPC is the world leader in early childhood education and its curriculum is outcome-based, with learning areas such as numbers, size and measurement, shapes, colours, phonics, reading preparation, motor and social development, listening and speaking. </p>
			  <div class="mu-gallery-area" data-aos="slide-right">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Classroom8.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>	
                
						</ul>
              </div>
			  </div>
			  </div>
			  <br>
			  <p>The Early Years Foundation Stage programme is very structured programme under the British curriculum, which focuses on active learning. The learning areas are divided into two segments:</p>
			  <ol>
				<li>Prime Areas, which include the subjects:
					<ul>
					<li>a. Communication and Language Development</li>
					<li>b. Physical Development</li>
					<li>c. Personal, Social and Emotional Development</li>
					</ul>
				</li>
				<li>Specific Areas, which include the subjects:
					<ul>
					<li>a. Literacy Development</li>
					<li>b. Mathematics</li>
					<li>c. Understanding the World</li>
					<li>d. Expressive Arts and Design</li>
					</ul>
				</li>
			  </ol>
			  <p>The nursery school focuses primarily on the Early Years Foundation Stage programme (EYFS). </p>
			  <hr>
			  
	</center>
 </div>







  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection