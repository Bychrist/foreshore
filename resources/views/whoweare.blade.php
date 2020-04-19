@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>about us</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>About</li>
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
  	           	<div class="title-icon"><img src="images/icons/sec-title-icon-1.png" alt="" /></div>
  	           	<h2>About Foreshore School</h2>
  	               <div class="title">Our Story</div>
  	           
  	               <div class="text">The Foreshore School (TFS) is crèche, preschool, nursery and primary school located in Osborne Foreshore Estate (Phase 2), Ikoyi, Lagos. It is a British curriculum school, which is committed to providing a fun-filled and rewarding programme that balances each child's intellectual, physical, social, creative and emotional needs.

					TFS was established in January 2007 as Tenderloving Childcare (TLC), a crèche, preschool and nursery school. After a few years, the school grew and the demand for a primary school emerged. As a result, the primary school tier was established in 2013 and in line with this development, the name was changed to Tenderloving School (TLS).

					Over the recent years, the school's brand continued to grow and its current name The Foreshore School was birthed (in December 2016).</div>
  	            
  	           </div>
  	        
  	       </div>
  	   </section>
  	   <!--End Welcome Section-->

       <!--Featured Section-->
       <section class="featured-section style-two  marginBottom">
       	<div class="auto-container">
         
   			<div class="row clearfix">
                   <!--Column/ Pull Left-->
                   <div class="column pull-left col-md-4 col-sm-6 col-xs-12">
                       <!--Feature Block-->
                       <div class="feature-block">
                           <div class="inner-box">
                               <div class="icon-box">
                                   <span class="icon flaticon-book"></span>
                               </div>
                               <h3><a href="features.html">Our Vision</a></h3>
                               <div class="text">
							To be recognised as one of the foremost providers of quality British
							education in Nigeria, where children stand out amongst their peers
							globally and surpass expectations.
							<br>
							<br>


						</div>
                           </div>
                       </div>
                       
                       <!--Feature Block-->
                       <div class="feature-block">
                           <div class="inner-box">
                               <div class="icon-box">
                                   <span class="icon flaticon-football"></span>
                               </div>
                               <h3><a href="features.html">Our Core Values</a></h3>
                               <div class="text">
                               	 	<ul style="list-style: none">
                               	 		<li>* Cleanliness</li>
                               	 		<li>* Commitment</li>
                               	 		<li>* Excellence</li>
                               	 		<li>* Safety</li>
                               	 		<li>* Sense of Ownership</li>
                               	 		<li>* Teamwork</li>
                               	 	</ul>
                               </div>
                          
                           </div>
                       </div>
                       
                   </div>
                   <!--Column / Pull Right-->
                   <div class="column pull-right col-md-4 col-sm-6 col-xs-12">
                       <!--Feature Block Two-->
                       <div class="feature-block-two">
                           <div class="inner-box">
                               <div class="icon-box">
                                   <span class="icon flaticon-paint-palette-and-brush"></span>
                               </div>
                               <h3><a href="features.html">Our Mission</a></h3>
	  	                   <div class="text">We provide a clean, safe and TenderlovingTM environment that fosters
							each child’s unique potential, whilst nurturing personal and
							professional growth in our staff team and empowering our community.</div>
                           </div>
                       </div>
                       
                       <!--Feature Block Two-->
                       <div class="feature-block-two">
                           <div class="inner-box">
                               <div class="icon-box">
                                   <span class="icon flaticon-graduation-cap"></span>
                               </div>
                               <h3><a href="features.html">Our Philosophy</a></h3>
                               <div class="text">
                               	We believe that every child…

                               	     * is an active learner
                               	     * has a potential
                               	     * is a sensitive, feeling and thinking individual who thrives in a
                               	stimulating environment
                               	     * deserves the best opportunity to benefit from a comprehensive Early
                               	Childhood Program
                               </div>
                           </div>
                       </div>
                       
                   </div>
               
                   <div class="image-column col-md-4 col-sm-12 col-xs-12">
                       <figure class="image wow fadeInUp">
                           <img src="{{asset('images/resource/welcome-img.png')}}" alt="" />
                       </figure>
                       <figure class="image wow fadeInUp">
                           <img src="{{asset('images/resource/books.png')}}" alt="" />
                       </figure>
                   </div>
                   
               </div>
               
           </div>
       </section>
       <!--End Featured Section-->




	  	   <!-- school structure-->
	  	   <section class="welcome-section" style="margin-bottom: -250px;margin-top:200px ">
	  	   	<div class="auto-container">
	  	       	<!--Sec Title-->
	  	           <div class="sec-title centered">
	  	           	<div class="title-icon"><img src="images/icons/sec-title-icon-1.png" alt="" /></div>
	  	           	<h2>School Structure</h2>
	  	         
	  	           
	  	              
	  	            
	  	           </div>
	  	        
	  	       </div>
	  	   </section>

			
				<section class="classes-section" style="margin-bottom: -300px">
			    	<div class="auto-container">
			        
			        	
			            
			        	<div class="row clearfix">
			            	
			                <!--News Style Two-->
			                <div class="news-style-two col-md-3 col-sm-6 col-xs-12">
			                	<div class="inner-box">
			                    
			                       
			                        <!--Content Column-->
			                        <div class="content-column">
			                            <div class="inner">
			                                <div class="post-date">18 months - 3 years</div>
			                                <h3><a>Creche</a></h3>
			                               <div class="post-date">Classes</div>
			                               <h3><a>N/A</a></h3>
			                              
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                
			                <!--News Style Two-->
			                <div class="news-style-two col-md-3 col-sm-6 col-xs-12">
			                	<div class="inner-box">
			                    	
			                    	<!--Content Column-->
			                    	<div class="content-column">
			                    	    <div class="inner">
			                    	        <div class="post-date">	3 - 18 months</div>
			                    	        <h3><a>Preschool</a></h3>
			                    	       <div class="post-date">Classes</div>
			                    	       <h3><a>	Preschool 1 & 2</a></h3>
			                    	      
			                    	    </div>
			                    	</div>
			                    </div>
			                </div>
			                
			                <!--News Style Two-->
			                <div class="news-style-two col-md-3 col-sm-6 col-xs-12">
			                	<div class="inner-box">
			                    	<!--Content Column-->
			                    	<div class="content-column">
			                    	    <div class="inner">
			                    	        <div class="post-date">	4 - 5 years</div>
			                    	        <h3><a>Nursery</a></h3>
			                    	       <div class="post-date">Classes</div>
			                    	       <h3><a>	Nursery 1 & 2/Reception</a></h3>
			                    	      
			                    	    </div>
			                    	</div>
			                    </div>
			                </div>

			                <div class="news-style-two col-md-3 col-sm-6 col-xs-12">
			                	<div class="inner-box">
			                    	<!--Content Column-->
			                    	<div class="content-column">
			                    	    <div class="inner">
			                    	        <div class="post-date">6 - 11 years</div>
			                    	        <h3><a>Primary</a></h3>
			                    	       <div class="post-date">Classes</div>
			                    	       <h3><a>	Year 1, 2, 3, 4, 5 & 6</a></h3>
			                    	      
			                    	    </div>
			                    	</div>
			                    </div>
			                </div>
			                
			              
			                
			               
			               
			            </div>
			            
			        
			            
			        </div>
			    </section>








	  	   <!--end school structure-->







  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection