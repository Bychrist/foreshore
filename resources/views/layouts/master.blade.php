<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'THE FORESHORE SCHOOL') }}</title>

    <meta charset="utf-8">
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/revolution-slider.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">

    

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>

<body>
	
	<div class="page-wrapper">
	 	
	    <!-- Preloader -->
	    <div class="preloader"></div>
	 	
	    <!-- Main Header-->
	    <header class="main-header">
	        
	        <!-- Header Top -->
	    	<div class="header-top">
	        	<div class="auto-container clearfix">
	            	<!--Top Left-->
	            	<div class="top-left pull-left">
	                	<ul class="links-nav clearfix">

	                    	<li><span class="icon fa fa-envelope-o"></span><a >
info@tfsikoyi.com
</a></li>
                	<li><span class="icon fa fa-envelope-o"></span><a >info@theforeshoreschool
	                        <li><span class="icon fa fa-phone"></span><a>Call Us Now : 08023121865 or 08176139340</a></li>
	                    </ul>
	                </div>
	                
	             
	            </div>
	        </div>
	        <!-- Header Top End -->
	        
	        <!--Header-Upper-->
	        <div class="header-upper">
	        	<div class="auto-container">
	                	
	                <div class="logo-outer" >
	                    <div class="logo" ><a href=""><img src="{{asset('images/logo.png')}}" alt="" title=""></a></div>
	                </div>
	                    
	                <div class="nav-outer clearfix">
	                
	                    <!-- Main Menu -->
	                    <nav class="main-menu">
	                        <div class="navbar-header">
	                            <!-- Toggle Button -->    	
	                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                            </button>
	                        </div>
	                        
	                        <div class="navbar-collapse collapse clearfix">
	                            <!--Left Nav-->
	                            <ul class="navigation left-nav clearfix">

	                                <li><a href="{{url('/')}}">Home</a></li>

	                                <li class="current dropdown"><a href="#">About Us</a>
	                                    <ul>
	                                        <li><a href="{{action('HomeController@whoweare')}}">Who We Are</a></li>
	                                        <li><a href="{{action('HomeController@boardofdirectors')}}">Board of Directors</a></li>
	                                        <li><a href="">Leadership Team</a></li>
	                                        <li><a href="{{url('/facility/school-facility')}}">Facilities</a></li>
	                                        <li><a href="">Gallery</a></li>
	                                        
	                                    </ul>
	                                </li>
	                                <li class="dropdown"><a href="#">Academics</a>
	                                    <ul>
	                                        <li><a href="">Early Years</a></li>
	                                        <li><a href="">Primary School</a></li>
	                                        <li><a href="">Extracurricular Activities</a></li>
	                                        <li><a href="">Calender</a></li>
	                                        <li><a href="">Parents HandBook</a></li>
	                                    </ul>
	                                </li>
	                                <li><a href="{{url('/virtual')}}">Virtual Tour</a></li>
	                            </ul>
	                            <!--Right Nav-->

	                            <ul class="navigation right-nav clearfix">
	                                  <li class="dropdown"><a href="#">Facility</a>
	                                      <ul>
										  <li><a href="{{url('/facility/school-facility')}}">School Facilities</a></li>
	                                          <li><a href="{{url('/facility/development')}}">Facility Development</a></li>
	                                       
	                                      </ul>
	                                  </li>
									<li ><a href="{{url('/parents-portal')}}">Parents' Portal</a></li>
	                                  <li><a href="">Contact Us</a></li>
                                </ul>
	                        </div>
	                    </nav>
	                    
	                   
	                </div>
	        	</div>
	        </div>
	        <!--End Header Upper-->
	        
	        <!--Sticky Header-->
	        <div class="sticky-header">
	        	<div class="auto-container clearfix">
	            	<!--Logo-->
	            	<div class="logo pull-left">
	                	<a href="" class="img-responsive"><img src="{{asset('images/logo-small.png')}}" alt="" title=""></a>
	                </div>
	                
	                <!--Right Col-->
	                <div class="right-col pull-right">
	                	<!-- Main Menu -->
	                    <nav class="main-menu">
	                        <div class="navbar-header">
	                            <!-- Toggle Button -->    	
	                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                            </button>
	                        </div>
	                        
	                        <div class="navbar-collapse collapse clearfix">
	                            <ul class="navigation clearfix">

	                                <li class="{{Request::is('/') ? 'current' : ''}}"><a href="{{action('HomeController@index')}}">Home</a> </li>


	                                <li class="{{Request::is('about/*') ? 'current' : ''}} dropdown"><a href="#">About Us</a>
	                                    <ul>
	                                        <li><a href="{{action('HomeController@whoweare')}}">Who We Are</a></li>
	                                        <li><a href="{{action('HomeController@boardofdirectors')}}">Board of Directors</a></li>
	                                        <li><a href="">Leadership Team</a></li>
	                                        <li><a href="{{url('/facility/school-facility')}}">Facilities</a></li>
	                                        <li><a href="">Gallery</a></li>
	                                    </ul>
	                                </li>
	                                <li class="dropdown"><a href="#">Academics</a>
	                                    <ul>
	                                    	<li><a href="">Early Years</a></li>
	                                        <li><a href="">Primary School</a></li>
	                                        <li><a href="">Extracurriculum Activities</a></li>
	                                        <li><a href="">Calender</a></li>
	                                        <li><a href="">Parent Handbook</a></li>
	                                    </ul>
	                                </li>
	                                <li class="{{Request::is('/virtual') ? 'current' : ''}}"><a href="{{url('/virtual')}}">Virtual Tour</a></li>
	                                <li class="dropdown"><a href="">Facility</a>
	                                    <ul>
										<li><a href="{{url('/facility/school-facility')}}">School Facilities</a></li>
	                                        <li><a href="{{url('/facility/development')}}">Facility Development</a></li>
	                                    </ul>
	                                </li>
	                                <li><a href="{{url('/parents-portal')}}">Parent's Portal</a></li>
	                                <li><a href="">Contact Us</a></li>
	                            </ul>
	                        </div>
	                    </nav><!-- Main Menu End-->
	                </div>
	                
	            </div>
	        </div>
	        <!--End Sticky Header-->
	    
	    </header>
	    <!--End Main Header -->
	  
	    
	    @yield('content')
	  
	    
	 
	    
	    <!--Main Footer-->
	    <footer class="main-footer" style="background-image:url({{asset('images/background/pattern-2.png')}});">
	    	<div class="auto-container">
	        	<!--widgets section-->
	            <div class="widgets-section">
	                <div class="row clearfix">
	                
	                	<!--Big Column-->
	                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
	                    	<div class="row clearfix">
	                        	<!--Footer Column-->
	                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
	                            	<div class="footer-widget logo-widget">
	                                	<div class="footer-logo">
	                                    	<a href="index.html"><img src="{{asset('images/logo-2.png')}}" alt="" /></a>
	                                    </div>
										<div class="widget-content">
	                                    	<div class="text">We are a British Curriculum crèche, preschool, nursery and primary school located in Ikoyi, Lagos...</div>
	                                        <ul class="social-links-two">
	                                        	<li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
	                                            <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
	                                            <li class="google-plus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
	                                            <li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
	                                        </ul>
										</div>
									</div>
	                            </div>
	                            
	                            <!--Footer Column-->
	                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
	                            	<!--Links Widget-->
	                                <div class="footer-widget links-widget">
	                                	<div class="footer-title">
	                                    	<h2>Quick Links</h2>
	                                    </div>
	                                	<div class="widget-content">
	                                    	<ul class="list">
	                                            <li><a href="{{url('/')}}">Home</a></li>
	                                            <li><a href="{{action('HomeController@whoweare')}}">About</a></li>
	                                            <li><a href="#">Academics</a></li>
	                                            <li><a href="{{url('/virtual')}}">Virtual Tour</a></li>
	                                            <li><a href="#">Contact Us</a></li>
	                                        </ul>
										</div>
	                                </div>
	                            </div>
	                            
	                        </div>
	                    </div>
	                    
	                    <!--Big Column-->
	                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
	                    	<div class="row clearfix">
	                        
	                        	<!--Footer Column-->
	                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
	                            	<!--Links Widget-->
	                                <div class="footer-widget links-widget">
	                                	<div class="footer-title">
	                                    	<h2>Categories</h2>
	                                    </div>
	                                	<div class="widget-content">
	                                    	<ul class="list">
	                                            <li><a href="#">Early Years</a></li>
	                                            <li><a href="#">Primary School</a></li>
	                                            <li><a href="#">Calender</a></li>
	                                            <li><a href="#">Parent Handbook</a></li>
	                                        </ul>
										</div>
	                                </div>
	                            </div>
	                            
	                            <!--Footer Column-->
	                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
	                            	
	                                <div class="footer-widget subscribe-widget">
	                                    <div class="footer-title">
	                                    	<h2>News letter</h2>
	                                    </div>
	                                    <div class="widget-content">
	                                        <div class="newsletter-form">
	                                            <form method="post" action="http://t.commonsupport.xyz/saratov/contact.html">
	                                                <div class="form-group">
	                                                    <input type="text" name="name" value="" placeholder="Name *" required="">
	                                                </div>
	                                                <div class="form-group">
	                                                    <input type="email" name="email" value="" placeholder="Email Id" required="">
	                                                </div>
	                                                <div class="form-group">
	                                                    <button type="submit" class="theme-btn btn-style-one">SUBSCRIBE</button>
	                                                </div>
	                                            </form>
	                                        </div>
	                                    </div>
	                                </div>
	                                
	                            </div>
	                            
	                        </div>
	                    </div>
	                    
	                </div>
	            </div>
	            
	            <!--Footer Bottom-->
	            <div class="footer-bottom">
	            	<div class="row clearfix">
	                	<div class="column col-md-6 col-sm-6 col-xs-12">
	                    	<div class="copyright">&copy; Copyrights 2020 Foreshore School. All Rights Reserved</div>
	                    </div>
	                    <div class="column col-md-6 col-sm-6 col-xs-12">
	                    
	                    </div>
	                </div>
	            </div>
	            
	        </div>
	    </footer>
	    
	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->





	<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/revolution.min.js')}}"></script>
	<script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
	<script src="{{asset('js/jquery.fancybox-media.js')}}"></script>
	<script src="{{asset('js/owl.js')}}"></script>
	<script src="{{asset('js/appear.js')}}"></script>
	<script src="{{asset('js/jquery-ui.js')}}"></script>
	<script src="{{asset('js/wow.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>

</body>