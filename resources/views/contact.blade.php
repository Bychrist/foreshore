@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Contact</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Contact</li>
                   </ul>
               </div>
           </div>
       </section>
       <!--End Page Title-->

  	
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<!--Info Section-->
        	<div class="info-section">
            	<div class="row clearfix">
                	<!--Contact Info Block-->
                	<div class="contact-info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box wow fadeIn" data-wow-delay="0ms">
                            	<span class="icon flaticon-location-pin"></span>
                            </div>
                            <div class="text">OSBORNE FORESHORE ESTATE (PHASE 2). <br>  IKOYI, LAGOS</div>
                        </div>
                    </div>
                    
                    <!--Contact Info Block-->
                	<div class="contact-info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box wow fadeIn" data-wow-delay="300ms">
                            	<span class="icon flaticon-web"></span>
                            </div>
                            <div class="text">info@tfsikoyi.com <br> support@tfsikoyi.com <br><br>
                        
                         </div>
                        </div>
                    </div>
                    
                    <!--Contact Info Block-->
                	<div class="contact-info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box wow fadeIn" data-wow-delay="600ms">
                            	<span class="icon flaticon-smartphone"></span>
                            </div>
                            <div class="text">08023121865  <br> 08176139340 <br><br>
</div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!--Form Section-->
            <div class="form-section">
            	<div class="row clearfix">
                	<!--Form Column-->
                	<div class="form-column col-md-8 col-sm-12 col-xs-12">
                    	<div class="container">
  <form action="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" style="background:#ffca00;border-close:#ffca00;" class="btn btn-primary">
  </form>
</div>
                       
                      
                    </div>
                   
                </div>
            </div>
            
        </div>
    </section>
    <!--End Contact Section-->





  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm" style="margin-top:-300px">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection