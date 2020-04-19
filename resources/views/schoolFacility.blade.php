@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>School Facility</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>School Facility</li>
                   </ul>
               </div>
           </div>
       </section>
       <!--End Page Title-->

  	
<div style="width: 100%; padding-bottom: 100px; padding-left: 50px; padding-right: 50px">
	<center>
		<div style="width: 80%; padding-top: 100px; text-align:left">
						<div style="padding-top: 100px">		
					<div>
					<h2>Our purpose-built facility includes the following features:</h2>
					<hr>
					<h3>Bright, colourful and stimulating classrooms</h3>
					<hr>
					<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
                <!-- start single gallery image -->
                {{-- <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Classroom8.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>	 --}}
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Classroom5.jpeg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Classroom4.jpeg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Classroom2.jpeg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
				<hr>
				<h3>Crèche</h3>
				<hr>
				<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
                	
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
						<h3>Science laboratory</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/ScienceLab1-min.JPG')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/ScienceLab2-min.JPG')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Library</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Library-min.JPG')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Music Room</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Music1-min.JPG')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Music3.JPG')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Sick Bay</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/SickBay.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Art Room</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/ArtRoom1-min.JPG')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Indoor Play Area</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/IndoorPlayArea.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Outdoor Play Area</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Playground_Field2.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Playground1.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Swimming Pool</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/SwimmingPool1-min.JPG')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/SwimmingPool3-min.JPG')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/SwimmingPool2-min.JPG')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Football Field</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Football2.jpeg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Football.jpeg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Football4.jpeg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Basketball Court</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/Playground_BasketballCourt.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Multipurpose Hall</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/MultipurposeHall2.jpeg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/MultipurposeHall3.jpeg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/MultipurposeHall4.jpeg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Closed-Circuit Television (CCTV)</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/CCTVControlRoom-min.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>ICT Room</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/ICTRoom-min.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/ICTRoom2.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
						<hr>
						<h3>Dining Room</h3>
						<hr>
						<div class="mu-gallery-area" data-aos="zoom-out">
						<div class="mu-gallery-content">
						<div class="mu-gallery-body">
						<ul id="mixit-container" class="row">
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/DiningRoom1.jpeg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						<li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img src="{{asset('images/facilities/DinningRoom2.jpg')}}" width="100%" alt="img"></a>
						</div>
						</div>
						</div>
                        </li>
						</ul>
						</div>
						</div>
						</div>
					</div>
					</div>
					</div>
				</center>
			</div>
			






  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection