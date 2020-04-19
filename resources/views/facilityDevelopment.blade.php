@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Facility Development</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Facility Development</li>
                   </ul>
               </div>
           </div>
       </section>
       <!--End Page Title-->

  	
<div style="width: 100%; padding-bottom: 500px; margin-top: -100px; padding-left: 50px; padding-right: 50px">
	<center>
		<div style="width: 80%; padding-top: 100px; text-align:left">
		<p style="padding-top: 100px"><h3>Wellness has become a critical aspect of universal culture.</h3></p>
		<p><h4>Physical activity helps improve health and reduce the risk of many diseases such as cancer, heart disease and type-2 diabetes, which are becoming increasingly common these days. The state of the mind is very important towards the thought mechanism that drives our physical body experiences. The mind works with the brain and the soul, and as such determines how the body responds. This feeds directly into wellness, being in a good state of health, which drives us to become happier and more effective people individually and as a community.</h4></p>
		<center>
		<div style="width: 80%" data-aos="zoom-out">
		</div>
		</center>
		<p><h4>The Foreshore School recognises this as critical, and in line with our vision to help children stand out amongst their peers globally and surpass expectations, it has become imperative to provide a physical facility that would help enhance all that the school does to develop the total child. Looking beyond this, we seek to reach out to the community and encourage a lifestyle that holds wellness as paramount.</h4></p>
		<p><h4>As part of our continued growth strategy and to meet local market demands and international standards, TFS desires to expand its facility to accommodate more up to date infrastructure including a modern sports facility.</h4></p>
		<br>
		<p><h3>The proposed sports facility includes the following key features:</h3></p>
		<center>
		<div style="width: 100%" data-aos="zoom-out">
			<table style="border: 1px solid black; width: 100%">
				<tr>
					<th style="border: 1px solid black; text-align: center;">Feature</th>
					<th style="border: 1px solid black; text-align: center;">Dimensions</th>
				</tr>
				<tr>
					<td style="border: 1px solid black; text-align: center;">4 – Lane Standard Junior Olympics Swimming Pool </td>
					<td style="border: 1px solid black; text-align: center;">Length – 25m Breadth – 8.5m</td>
				</tr>
				<tr>
					<td style="border: 1px solid black; text-align: center;">Multigame Court (basketball, netball, lawn tennis, badminton, etc.)</td>
					<td style="border: 1px solid black; text-align: center;">Length – 22.5m Breadth – 13m</td>
				</tr>
				<tr>
					<td style="border: 1px solid black; text-align: center;">Standard Junior Football and Athletics Field</td>
					<td style="border: 1px solid black; text-align: center;">Length – 36m Breadth – 18m</td>
				</tr>
				<tr>
					<td style="border: 1px solid black; text-align: center;">Modern Children's Play Area</td>
					<td style="border: 1px solid black; text-align: center;">Length – 10m Breadth – 9m</td>
				</tr>
			</table>
		</div>
		<div style="width: 100%" data-aos="zoom-out">
				<img src="{{asset('images/TFS Facility1.png')}}" width="50%" style="float: left; position: relative; padding: 5px">
				<img src="{{asset('images/TFS Facility2.png')}}" width="50%" style="float: left; position: relative; padding: 5px">
				<img src="{{asset('images/TFS Facility3.png')}}" width="50%" style="float: left; position: relative; padding: 5px">
				<img src="{{asset('images/TFS Facility5.png')}}" width="50%" style="float: left; position: relative; padding: 5px">
			</div>
			</center>
		</div>
	</center>
</div>
			






  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection