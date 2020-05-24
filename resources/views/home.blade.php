@extends('layouts.master')

@section('content')

	  <!--Main Slider-->
	    <section class="main-slider" data-start-height="800" data-slide-overlay="yes">
	    	
	        <div class="tp-banner-container">
	            <div class="tp-banner">
	                <ul>
	                	
	                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('images/main-slider/image-1.jpg')}}"  data-saveperformance="off"  data-title="Awesome Title Here">
	                    <img src="{{asset('images/main-slider/image-1.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
	                    
	                    <div class="overlay-slide"></div>
	                    
	                    <div class="tp-caption sft sfb tp-resizeme"
	                    data-x="center" data-hoffset="0"
	                    data-y="center" data-voffset="-180"
	                    data-speed="1500"
	                    data-start="0"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
						data-endeasing="Power4.easeIn"><figure class="content-image"><img src="{{asset('images/main-slider/content-image-1.png')}}" alt=""></figure> </div>
	                    
	                    <div class="tp-caption sft sfb tp-resizeme"
	                    data-x="center" data-hoffset="0"
	                    data-y="center" data-voffset="-70"
	                    data-speed="1500"
	                    data-start="500"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"><div class="styled-text">Welcome To The Foreshore School</div></div>
	                    
	                    <div class="tp-caption sfb sfb tp-resizeme"
	                    data-x="center" data-hoffset="0"
	                    data-y="center" data-voffset="25"
	                    data-speed="1500"
	                    data-start="1000"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"><div class="border-heading">Give Your Child A Great Beginning</div></div>

	                    <div class="tp-caption sfb sfb tp-resizeme"
	                    data-x="center" data-hoffset="0"
	                    data-y="center" data-voffset="115"
	                    data-speed="1500"
	                    data-start="1500"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"><div class="text">Your children are safe with us</div></div>
	                    
	                    <div class="tp-caption sfb sfb tp-resizeme"
	                    data-x="center" data-hoffset="0"
	                    data-y="center" data-voffset="175"
	                    data-speed="1500"
	                    data-start="2000"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"><a href="{{url('/contact')}}" title="Go to about" class="theme-btn btn-style-one">Let’s Go</a></div>
	                    
						</li>
						

						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('images/main-slider/image-2.jpg')}}"  data-saveperformance="off"  data-title="Awesome Title Here">
	                    <img src="{{asset('images/facilities/SchoolBuilding1.jpeg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="-140"
	                    data-speed="1500"
	                    data-start="500"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="-40"
	                    data-speed="1500"
	                    data-start="1000"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="70"
	                    data-speed="1500"
	                    data-start="1500"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="150"
	                    data-speed="1500"
	                    data-start="2000"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>                    
						</li>
	                    
	                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('images/main-slider/image-2.jpg')}}"  data-saveperformance="off"  data-title="Awesome Title Here">
	                    <img src="{{asset('images/facilities/ASignificantBeginning.JPG')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="-140"
	                    data-speed="1500"
	                    data-start="500"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"><h4>Welcome To The Foreshore School</h4></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="-40"
	                    data-speed="1500"
	                    data-start="1000"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"><h2 style="color: aliceblue">Learn How to <br> Explore  New things</h2></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="70"
	                    data-speed="1500"
	                    data-start="1500"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"><div style="color: aliceblue">We provide a clean, safe and Tenderloving<sup>TM</sup> environment that fosters
						each child’s unique potential, <br>whilst nurturing personal and
						professional growth in our staff team and empowering our community.</div></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="150"
	                    data-speed="1500"
	                    data-start="2000"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"><a href="{{url('/contact')}}" class="theme-btn btn-style-one">Let’s Go</a>&ensp; &ensp;<a href="{{url('/contact')}}" class="theme-btn btn-style-two">Read more </a></div>                    
						</li>
						

						 <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('images/main-slider/image-2.jpg')}}"  data-saveperformance="off"  data-title="Awesome Title Here">
	                    <img src="{{asset('images/facilities/Library2.JPG')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="-140"
	                    data-speed="1500"
	                    data-start="500"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="-40"
	                    data-speed="1500"
	                    data-start="1000"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="70"
	                    data-speed="1500"
	                    data-start="1500"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="150"
	                    data-speed="1500"
	                    data-start="2000"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>                    
						</li>


						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('images/main-slider/image-2.jpg')}}"  data-saveperformance="off"  data-title="Awesome Title Here">
	                    <img src="{{asset('images/facilities/ICTRoom-min.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="-140"
	                    data-speed="1500"
	                    data-start="500"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="-40"
	                    data-speed="1500"
	                    data-start="1000"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="70"
	                    data-speed="1500"
	                    data-start="1500"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>
	                    
	                    <div class="tp-caption sfl sfb tp-resizeme"
	                    data-x="left" data-hoffset="450"
	                    data-y="center" data-voffset="150"
	                    data-speed="1500"
	                    data-start="2000"
	                    data-easing="easeOutExpo"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-elementdelay="0.01"
	                    data-endelementdelay="0.3"
	                    data-endspeed="1200"
	                    data-endeasing="Power4.easeIn"></div>                    
						</li>
						
	                    
	                </ul>
	                
	            </div>
	        </div>
	        
	    </section>
	  	<!--End Main Slider-->


  	    <!--Featured Section-->
  	    <section class="featured-section style-two  marginBottom">
  	    	<div class="auto-container">
  	        	<!--Sec Title-->
  	            <div class="sec-title centered">
  	            	<div class="title-icon"><img src="{{asset('images/icons/sec-title-icon-1.png')}}" alt="" /></div>
  	            	<h2>Welcome To The Foreshore School.</h2>
  	                <div class="title">About Our  School</div>
  	                <div class="text">We provide a clean, safe and Tenderloving<sup>TM</sup> environment that fosters each child’s unique potential.</div>
  	            </div>
  	            <!--End Sec Title-->
  				<div class="row clearfix">
  	                <!--Column/ Pull Left-->
  	                <div class="column pull-left col-md-4 col-sm-6 col-xs-12">
  	                    <!--Feature Block-->
  	                    <div class="feature-block">
  	                        <div class="inner-box">
  	                            <div class="icon-box" style="background:#840c00">
  	                                <span  class="icon flaticon-book"></span>
  	                            </div>
  	                            <h3><a>Funny and Happy</a></h3>
  	                            <div class="text">We have a group of teachers who really love children and enjoy every moment spent with them.</div>
  	                        </div>
  	                    </div>
  	                    
  	                    <!--Feature Block-->
  	                    <div class="feature-block">
  	                        <div class="inner-box">
  	                            <div class="icon-box" style="background:#ffa800">
  	                                <span class="icon flaticon-football"></span>
  	                            </div>
  	                            <h3><a href="features.html">Fulfill With Love</a></h3>
  	                            <div class="text"> We are committed to providing a fun-filled, rewarding programme that balances each child’s intellectual and emotional needs.</div>
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
  	                            <h3><a >Professional Teaching</a></h3>
  	                            <div class="text">We maintain  great teaching ethics within and beyond the forewalls of the school.</div>
  	                        </div>
  	                    </div>
  	                    
  	                    <!--Feature Block Two-->
  	                    <div class="feature-block-two">
  	                        <div class="inner-box">
  	                            <div class="icon-box" style="background:#840c00">
  	                                <span class="icon flaticon-graduation-cap"></span>
  	                            </div>
  	                            <h3><a>Fully Equiped</a></h3>
  	                            <div class="text">We have Bright, colourful and stimulating environment that promotes learning interest for children.</div>
  	                        </div>
  	                    </div>
  	                    
  	                </div>
  	            
  	                <div class="image-column col-md-4 col-sm-12 col-xs-12">
  	                    <figure class="image wow fadeInUp">
						   <br>
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/Evbk1I40wvM?autoplay=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  	                    </figure>
  	                </div>
  	                
  	            </div>
  	            
  	        </div>
  	    </section>
  	    <!--End Featured Section-->


  	      <!--Client Section-->
  	    <section class="featured-section style-two  marginBottom " style="margin-top: 100px">
  	    	<div class="auto-container">
  	        	<!--Sec Title-->
  	            <div class="sec-title centered">
  	            	<div class="title-icon"><img src="{{asset('images/icons/sec-title-icon-1.png')}}" alt="" /></div>
  	            	<h2 style="margin-bottom: 50px;">Our Affiliates</h2>
  	                
  	                <div>
  	                	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<figure class="image wow fadeInUp">
						  	    <img style="width: 90%;height: 90%" src="{{asset('images/resource/XVw0o6SM.jpeg')}}" alt="" />
						  	</figure>
						  </li>
						  <li class="list-inline-item">
						  	<figure class="image wow fadeInUp">
						  	    <img style="width: 90%;height: 90%" src="{{asset('images/resource/gledu.jpg')}}" alt="" />
						  	</figure>
						  </li>
						  <li class="list-inline-item">
						  	<figure class="image wow fadeInUp">
						  	    <img style="width: 90%;height: 90%" src="{{asset('images/resource/britishcouncil.png')}}" alt="" />
						  	</figure>
						  </li>
						  <li class="list-inline-item">
						  	<figure class="image wow fadeInUp">
						  	    <img style="width: 90%;height: 90%" src="{{asset('images/resource/start-rite.jpg')}}" alt="" />
						  	</figure>
						  </li>
						  <li class="list-inline-item">
						  	<figure class="image wow fadeInUp">
						  	    <img style="width: 90%;height: 90%" src="{{asset('images/resource/IPC_Seals.png')}}" alt="" />
						  	</figure>
						  </li>
						  <li class="list-inline-item">
						  	<figure class="image wow fadeInUp">
						  	    <img style="width: 90%;height: 90%" src="{{asset('images/resource/cambridge.jpg')}}" alt="" />
						  	</figure>
						  </li>

					
						</ul>
  	                </div>
  	            </div>
  	            <!--End Sec Title-->
  				
  	            
  	        </div>
  	    </section>
  	    <!--Client Section-->


  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    				
  	    				<div class="sec-title centered">
  	    					<div class="title-icon"><img src="{{asset('images/icons/sec-title-icon-1.png')}}" alt="" /></div>
  	    					<h2 style="margin-bottom: 50px;">Social Media</h2>
  	    					 <div style="margin-top:-50px " class="title">Our Social Media News Feed</div>
  	    				</div>

						<div class="container" style="background:transparent;box-shadow:-7px -6px 52px -16px rgba(204,204,204,1);box-radius:10px">
							
					
		  	    				<div class="row">
										
										<div class="teacher-block col-md-4 col-sm-6 col-xs-12">
										    <div class="inner-box">
										      		
													<center>	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftheforeshoreschoolikoyi%2F&tabs=timeline&width=300&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=457764251631346" width="300" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></center>
										                 
										     </div>
										 </div>


										 <div class="teacher-block col-md-4 col-sm-6 col-xs-12">
										     <div class="inner-box" >
										       
										 			<center>	
														
														<a class="twitter-timeline" data-width="300" data-height="450" href="https://twitter.com/tfsikoyi?ref_src=twsrc%5Etfw">Tweets by tfsikoyi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

										 			</center>
										                  
										      </div>
										  </div>



										  <div class="teacher-block col-md-4 col-sm-6 col-xs-12">
										      <div class="inner-box">
										        
										  			<center>	

												
													  <div style="max-height:460px; overflow-y:scroll" id="pixlee_container">
													    <h3 style="font-size:14px;color:#666666;text-align:left">Instagram</h3>
													  </div><script type="text/javascript">window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'st0yQRqhU5QVvsXsyb3L'});Pixlee.addSimpleWidget({widgetId:'27010'});};</script><script src="//instafeed.assets.pxlecdn.com/assets/pixlee_widget_1_0_0.js"></script>
												
										  			</center>
										                   
										       </div>
										   </div>

								
		  	    				</div>


						  </div>
		<section class="welcome-section" style="margin-bottom: -200px;margin-top:100px;background:transparent">
  	   	<div class="auto-container">
  	       	<!--Sec Title-->
  	           <div class="sec-title centered">
  	           	
               @include('layouts._callaction')
  	            
  	           </div>
  	        
  	       </div>
  	   </section>

  	    				
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection