@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/facilities/Playground_Random.jpg')}});">
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
						
					 <div class="text">
						 <p>
							The goal of the TFS Primary School is to provide each pupil with a challenging and broad learning experience. We offer the British National Curriculum (Key Stages 1 and 2), which provides a broad and balanced curriculum, raises achievement and improves outcomes for children. We believe that children learn most effectively through classroom engagement, play, social interactions, and inquiry experiences.
						 </p>
						 <p>
							We focus on building our children's literacy and numeracy skills, as well as specific skills and knowledge base though general and specialist subjects, which include; Mathematics, English Language, Social Studies, Computing, History, Geography, Music, Art, Information Technology, Physical Education, French and Nigerian languages .
						 </p>
						 <p>
							In order to keep up with the global movement in educational practice, we ensure that technology responsibly is woven into all areas of the curriculum, and all classrooms are equipped with up to date interactive boards to enhance this deployment.
						 </p>
					 </div>
       	            
       	           </div>
       	        
       	       </div>
       	   </section>
			  <!--End Welcome Section-->


			  <section class="classes-section" style="margin-bottom: -300px">
				<div class="auto-container">
				
					
					
					<div class="row clearfix">
						
						<!--News Style Two-->
						<div class="news-style-two col-md-4 col-sm-6 col-xs-12">
							<div class="inner-box">
								<!--Image Column-->
								<div class="image-column">
									<div class="image">
										<img src="{{asset('images/facilities/Classroom5.jpeg')}}" alt="" />
									
										<div class="overlay-layer">
											<span class="icon flaticon-unlink"></span>
										</div>
									</div>
								</div>
							
							</div>
						</div>


						<!--News Style Two-->
						<div class="news-style-two col-md-4 col-sm-6 col-xs-12">
							<div class="inner-box">
								<!--Image Column-->
								<div class="image-column">
									<div class="image">
										<img src="{{asset('images/Classroom 3.jpeg')}}" alt="" />
									
										<div class="overlay-layer">
											<span class="icon flaticon-unlink"></span>
										</div>
									</div>
								</div>
							
							</div>
						</div>


							<!--News Style Two-->
							<div class="news-style-two col-md-4 col-sm-6 col-xs-12">
								<div class="inner-box">
									<!--Image Column-->
									<div class="image-column">
										<div class="image">
											<img src="{{asset('images/music1.jpg')}}" alt="" />
										
											<div class="overlay-layer">
												<span class="icon flaticon-unlink"></span>
											</div>
										</div>
									</div>
								
								</div>
							</div>



					




					</div>
				</div>
			  </section>


			  <section class="classes-section" style="margin-bottom: -300px">
				<div class="auto-container">
				
					
					
		
						
						<!--News Style Two-->
						<div class="news-style-two col-md-4 col-sm-6 col-xs-12">
							<div class="inner-box">
								<!--Image Column-->
								<div class="image-column">
									<div class="image">
										<img src="{{asset('images/Classroom6.jpg')}}" alt="" />
									
										<div class="overlay-layer">
											<span class="icon flaticon-unlink"></span>
										</div>
									</div>
								</div>
							
							</div>
						</div>


						<!--News Style Two-->
						<div class="news-style-two col-md-4 col-sm-6 col-xs-12">
							<div class="inner-box">
								<!--Image Column-->
								<div class="image-column">
									<div class="image">
										<img src="{{asset('images/Classroom1 (1).jpeg')}}" alt="" />
									
										<div class="overlay-layer">
											<span class="icon flaticon-unlink"></span>
										</div>
									</div>
								</div>
							
							</div>
						</div>


							<!--News Style Two-->
							<div class="news-style-two col-md-4 col-sm-6 col-xs-12">
								<div class="inner-box">
									<!--Image Column-->
									<div class="image-column">
										<div class="image">
											<img src="{{asset('images/Music3.JPG')}}" alt="" />
										
											<div class="overlay-layer">
												<span class="icon flaticon-unlink"></span>
											</div>
										</div>
									</div>
								
								</div>
							</div>



					




					
				</div>
			  </section>




			  <section class="welcome-section" style="margin-bottom: -200px">
				<div class="auto-container">
					<!--Sec Title-->
					<div class="sec-title centered">
					
													
							<div class="bounce"> 

								<a href="{{url('/contact')}}" style="visibility: hidden"  class="btn btn-primary  btn-lg callaction "> Click here for more information</a>
							
							</div>
					  
				  
					</div>
				 
				</div>
			</section>		  
			

 <section class="welcome-section" style="margin-bottom: -100px;background:transparent">
  	   	<div class="auto-container">
  	       	<!--Sec Title-->
  	          <div class="row">
				<div class="sec-title centered">
  	           	
					@include('layouts._callaction')
					   
					  </div>
				</div>
  	        
  	       </div>
  	   </section>


  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm" style="margin-top:-200px;">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection