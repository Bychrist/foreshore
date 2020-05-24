@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/facilities/Playground_Random.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>about us</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>leadership team</li>
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
  	           	<h2>Leadership Team</h2>
                <div class="title">Great Leadership Team</div>
  	             
  	            
  	           </div>
  	        
  	       </div>
  	   </section>
  	   <!--End Welcome Section-->

       

       <!-- Board of directors -->
       <section class="teachers-section teacher-page" style="margin-bottom: -300px">
        <div class="auto-container">
            <div class="row clasic-block">
                
                   <!--Teacher Block-->
                <div class="teacher-block col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box" style="padding:0px">
                        <div class="image-boxone" >
                            <img src="{{asset('images/resource/Helen.png')}}" style="height: 366px;" alt="" />
                          </div>
                           
                               
                       </div>
                   </div>


                   <div class="teacher-block col-md-9 col-sm-6 col-xs-12">
                       <div class="inner-box" style="text-align: justify;padding-top: 10px">
                                 <div class="sec-title centered" style="margin-bottom: -20px">
                            
                                  <h2><span style="font-size: 30px;letter-spacing: 3px;">Helen Oyewole</span> </h2>
                                  <div class="title">Head of School</div>
                                   
                                  
                                 </div>
                          <div class="scroll-bar-wrap">
                            <div class="scroll-box"> 
                              <p>
                                Helen Oyewole has over 20 years of experience in education. She is a graduate of the University of Ado-Ekiti (BSc. Zoology), and has a Post Graduate Diploma in Education from the University of Lagos. She also holds a Post Graduate Certificate in Education from the University of Sunderland and is undergoing a Masters of Administration in Education from the University of Nottingham.
                              </p>
                              <p>
                                  Prior to her employment as the Head of School at The Foreshore School, she was the Transition Coordinator and Head of the Mathematics Department at Grange School, and led Mathematics as a subject at Lagos Preparatory School. At both schools, she was directly involved in successful Office for Standards in Education (UK Government) inspections for Council of British International Schools inspections.
                              </p>
                              <p>
                                She is adept in pupil management, curriculum development, policy review and implementation and has a passion for innovative and creative learning. She has also taken initiative to build her skills in additional areas including the development of social, emotional, physical and moral wellbeing of children and teaching outstanding lessons.
                              </p>

                            </div>
                          </div>

                                  
                          </div>
                   </div>



               
                      <!--Teacher Block-->
                   
                   
                   
                   <!--Teacher Block-->
               
                 
                  
                
                  
                  
                 
               </div>

                
                <div class="row">
                   <div class="teacher-block col-md-4 col-sm-6 col-xs-12">
                       <div class="inner-box">
                           <div class="image-box" >
                               <img src="{{asset('images/resource/Oluremi.jpg')}}" alt="" />
                              </div>
                              <h3>Oluremi Adesokan</h3>
                              <div class="designation">Primary School Coordinator</div>
                              <div class="text">
                                 

                                 <div class="scroll-bar-wrap">
                                   <div class="scroll-box">
                                     <p>
                                       Oluremi Adesokan has over 11 years of experience in education. She is a graduate of the University of Lagos (B.Sc), holds a Professional Graduate Certificate in Education (PGDE) and a Post Graduate Certificate (MA, Education, Level 1), both from the University of Sunderland in the United Kingdom.
                                     </p>
                                     <p>
                                       Adesokan is an intelligent educationist with an adaptive, creative and innovative personality who is very passionate about child protection and community engagement. She is a member of the Taiwo Akinlami child protection academy.
                                     </p>
                                    
                                  
                                   </div>
                                   <div class="cover-bar"></div>
                                 </div>
                              

                             </div>

                                  
                          </div>
                      </div>
                      
                      <!--Teacher Block-->
                   
                   <div class="teacher-block col-md-4 col-sm-6 col-xs-12">
                       <div class="inner-box">
                           <div class="image-box" >
                               <img src="{{asset('images/resource/Toyin.jpg')}}" alt="" />
                              </div>
                              <h3>Toyin Adebesin </h3>
                              <div class="designation">Early Years Foundation Stage Coordinator</div>
                              <div class="text">
                                 

                                 <div class="scroll-bar-wrap">
                                   <div class="scroll-box">
                                     <p>
                                       Oluwatoyin Nkem Adebesin has over 15 years experience as an Early Years Foundation Stage educator. She holds a B.SC in Management from the University of Education, Winneba, a National Diploma be in Mass Communication from Moshood Abiola Polytechnic (Ogunpoly), Abeokuta and a certificate in Teachers' Effectiveness and Performance Appraisal from the University of Nottingham, UK.
                                     </p>
                                     <p>
                                    She enjoys working with children in their formative years as she believes the early years form the bedrock for further learning as they grow. She is helping to mould super heroes that can save the world.
                                     </p>
                                    
                                  
                                   </div>
                                   <div class="cover-bar"></div>
                                 </div>
                              

                             </div>

                                  
                          </div>
                      </div>
                      
                      <!--Teacher Block-->
                   
                   
                   <div class="teacher-block col-md-4 col-sm-6 col-xs-12">
                       <div class="inner-box">
                           <div class="image-box" >
                               <img src="{{asset('images/resource/TOLUTOPE.jpg')}}" alt="" />
                              </div>
                              <h3>Tolutope Okieimen</h3>
                              <div class="designation"> Key Stage 1 and Special Education Coordinator</div>
                              <div class="text">
                                 

                                 <div class="scroll-bar-wrap">
                                   <div class="scroll-box">
                                     <p>
                                      Tolutope Okieimen is a dynamic and innovative teacher foremost with over two decades of expertise in Administration, Curriculum Development, Training, and Special Education Needs.
                                     </p>
                                     <p>
                                       She is a graduate of Computer Science at the Yaba College of Technology and holds a PGD in Education from Lagos State University.
                                     </p>
                                     <p>
                                      A Vice Chairperson of IBWU an International Organisation tasked with implementing social change and children's welfare.Tolutope is deeply passionate about helping children with special needs.
                                     </p>
                                   
                                  
                                   </div>
                                   <div class="cover-bar"></div>
                                 </div>
                              

                             </div>

                                  
                          </div>
                      </div>
                      
                </div>


           </div>
       </section>
       <!-- Board of directors -->

			

  <section class="welcome-section" style="margin-bottom: -200px;margin-top:100px;background:transparent">
  	   	<div class="auto-container">
  	       	<!--Sec Title-->
  	           <div class="sec-title centered">
  	           	
               @include('layouts._callaction')
  	            
  	           </div>
  	        
  	       </div>
  	   </section>






  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm" atyle="margin-top:-200px">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection