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

  	 <!--Gallery Section-->
   <div class="container">
<div class="page-list-ext-item"><div class="page-list-ext-image"><a href="http://tfsikoyi.com/about-us/gallery/photos/graduation-concert-july-2015/" title="Graduation Concert - July 2015"><img src="http://tfsikoyi.com/wp-content/uploads/2015/07/DSC_4047.jpg" width="300" alt="Graduation Concert - July 2015" /></a></div> <h3 class="page-list-ext-title"><a href="http://tfsikoyi.com/about-us/gallery/photos/graduation-concert-july-2015/" title="Graduation Concert - July 2015">Graduation Concert - July 2015</a></h3><div class="page-list-ext-item-content">
                                                              
</div></div>
<div class="page-list-ext-item"><div class="page-list-ext-image"><a href="http://tfsikoyi.com/about-us/gallery/photos/independence-day-concert/" title="Independence Day Concert - October 2019"><img src="http://tfsikoyi.com/wp-content/uploads/2019/12/DSC_8644-1024x683.jpg" width="300" alt="Independence Day Concert - October 2019" /></a></div> <h3 class="page-list-ext-title"><a href="http://tfsikoyi.com/about-us/gallery/photos/independence-day-concert/" title="Independence Day Concert - October 2019">Independence Day Concert - October 2019</a></h3><div class="page-list-ext-item-content">
                                                                                                                                      
</div></div>

</div>
			</div>
</article>
															</main>
			</div>
			<div class="col-sm-4 col-md-3 col-xs-12">
	<aside class="sidebar-widget-area">
		<aside id="text-3" class="widget widget_text"><h3 class="widget-title">Photo Albums</h3>			<div class="textwidget">
<!-- Page-list plugin v.5.2 wordpress.org/plugins/page-list/ -->
<ul class="page-list subpages-page-list ">
<li class="page_item page-item-2834"><a href="http://tfsikoyi.com/about-us/gallery/photos/graduation-concert-july-2015/">Graduation Concert &#8211; July 2015</a></li>
<li class="page_item page-item-2812"><a href="http://tfsikoyi.com/about-us/gallery/photos/independence-day-concert/">Independence Day Concert &#8211; October 2019</a></li>

</ul>
</div>
		</aside>	</aside>
</div>		</div>
	</div>
</div>
</div><!-- #content -->
    <!--End Gallery Section-->

			






  	    <!--Teachers Section-->
  	    <section class="teachers-section no-padding-btm">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection