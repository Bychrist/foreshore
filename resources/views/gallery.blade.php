@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>Gallery</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Gallery</li>
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
       	           	<h2>Gallery</h2>
                     <div class="title">Foreshore Gallery</div>
       	           </div>
       	       </div>
       	   </section>
       	   <!--End Welcome Section-->

  

 <!--Gallery Section-->
    <section class="gallery-section">
    	<div class="auto-container">
        	<div class="row clearfix">
				<h2 style="padding-top: 100px">Graduation (2019)</h2>
			<hr>
            
            	<!--Gallery Item-->
                <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><img src="{{asset('images/gallery/WhatsApp Image 2019-07-04 at 2.32.04 PM.jpeg')}}" alt="" height="500" width="600">
                            <div class="overlay-box">
                                <div class="content">
                                    <a class="lightbox-image" href="{{asset('images/gallery/WhatsApp Image 2019-07-04 at 2.32.04 PM.jpeg')}}" title="Graduation" data-fancybox-group="example-gallery"><span class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Gallery Item-->
                <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><img src="{{asset('images/gallery/WhatsApp Image 2019-07-04 at 2.32.34 PM.jpeg')}}" alt="" height="500" width="600">
                            <div class="overlay-box">
                                <div class="content">
                                    <a class="lightbox-image" href="{{asset('images/gallery/WhatsApp Image 2019-07-04 at 2.32.34 PM.jpeg')}}" title="Graduation" data-fancybox-group="example-gallery"><span class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Gallery Item-->
                <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><img src="{{asset('images/gallery/WhatsApp Image 2019-07-05 at 2.55.28 PM.jpeg')}}" alt="" height="500" width="600">
                            <div class="overlay-box">
                                <div class="content">
                                    <a class="lightbox-image" href="{{asset('images/gallery/WhatsApp Image 2019-07-05 at 2.55.28 PM.jpeg')}}" title="Graduation" data-fancybox-group="example-gallery"><span class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Gallery Item-->
                <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><img src="{{asset('images/gallery/WhatsApp Image 2019-07-05 at 2.55.31 PM(1).jpeg')}}" alt="" height="500" width="600">
                            <div class="overlay-box">
                                <div class="content">
                                    <a class="lightbox-image" href="{{asset('images/gallery/WhatsApp Image 2019-07-05 at 2.55.31 PM(1).jpeg')}}" title="Graduation" data-fancybox-group="example-gallery"><span class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Gallery Item-->
                <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><img src="{{asset('images/gallery/WhatsApp Image 2019-07-09 at 11.22.17 AM(2).jpeg')}}" alt="" height="500" width="600">
                            <div class="overlay-box">
                                <div class="content">
                                    <a class="lightbox-image" href="{{asset('images/gallery/WhatsApp Image 2019-07-09 at 11.22.17 AM(2).jpeg')}}" title="Graduation" data-fancybox-group="example-gallery"><span class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Gallery Item-->
                <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><img src="{{asset('images/gallery/WhatsApp Image 2019-07-09 at 11.24.38 AM(3).jpeg')}}" alt="" height="500" width="600">
                            <div class="overlay-box">
                                <div class="content">
                                    <a class="lightbox-image" href="{{asset('images/gallery/WhatsApp Image 2019-07-09 at 11.24.38 AM(3).jpeg')}}" title="Graduation" data-fancybox-group="example-gallery"><span class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
           
            
        </div>
    </section>
    <!--End Gallery Section-->
			






  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection