@extends('layouts.master')

@section('content')

       <!--Page Title-->
       <section class="page-title" style="background-image:url({{asset('images/facilities/Playground_Random.jpg')}});">
       	<div class="auto-container">
           	<div class="inner-box">
                   <h1>about us</h1>
                   <ul class="bread-crumb">
                   	<li><a href="{{action('HomeController@index')}}">Home</a></li>
                       <li>Board of Directors</li>
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
  	           	<h2>Board Of Directors</h2>
                <div class="title">Our Amiable Directors</div>
  	             
  	            
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
                    <div class="inner-box">
                        <div class="image-box" >
                              <img src="{{asset('images/resource/Adesola.jpg')}}" alt="" />
                             </div>
                             <h3>Mr.<br>Adesola  Adepetun  </h3>
                             <div class="designation">Chairman</div>
                             <div class="text">
                                

                                <div class="scroll-bar-wrap">
                                  <div class="scroll-box">
                                    <p>
                                       Mr. Adesola Olajide Adepetun is a graduate of the University of Lagos and has an LLM from the University of London: London School of Economics and Political Science (LSE). He is an Associate Director of the African Institute of Petroleum and a member of both the Nigerian Bar Association and the International Bar Association Section on Energy & Natural Resources Law.
                                    </p>
                                    <p>
                                       Mr. Adesola Adepetun, a legal practitioner by profession, is a named partner in the prestigious law firm, Adepetun, Caxton Martins, Agbor & Segun. He has 30 years’ experience in provision of advisory services to many international companies on foreign investment laws, corporate establishment and accreditation issues, the Nigerian licensing regime and general strategic alliances in the Nigerian oil & gas industry.
                                    </p>
                                    <p>
                                      Mr. Adesola Adepetun was appointed to the Board of Directors of Standard Chartered Bank Nigeria Limited in April, 2014 as an Independent Non-Executive Director. He has also been awarded a number of accolades in various international directories including Chambers Global (2002-2005, 2007-2008, 2010-2012) and Euromoney (2007).
                                    </p>
                                
                                  </div>
                                  <div class="cover-bar"></div>
                                </div>
                             

                            </div>

                                 
                         </div>
                   </div>

                   
                   
                   <!--Teacher Block-->
               
                  <div class="teacher-block col-md-3 col-sm-6 col-xs-12">
                   <div class="inner-box">
                       <div class="image-box" >
                           <img src="{{asset('images/resource/Olubunmi.jpg')}}" alt="" />
                          </div>
                          <h3>Mrs. <br> Olubunmi Egbeyemi </h3>
                          <div class="designation" style="font-size:14px;">Executive Director/ CEO</div>
                          <div class="text">
                             

                             <div class="scroll-bar-wrap">
                               <div class="scroll-box">
                                 <p>
                                  Mrs. Olubunmi Egbeyemi holds a Bachelor’s degree in Chemistry from the University of Lagos. As a product of a family of educationists and due to her passion for children, she went on to pursue a postgraduate diploma in Education from the University of Lagos in 1993. She started her career in the education sector as the
                                 </p>
                                 <p>
                                   Administrator of May Day School, where she spent 10 years before establishing Tenderloving Childcare (now The Foreshore School) in 2007.
                                 </p>
                                 <p>
                                Mrs. Egbeyemi is an alumnus of the prestigious Lagos Business School (Owner-Manager Programme “OMP 4”). She has also attended various local and international courses and workshops to further widen her horizons in the field of early childhood development and management. These include sessions held by the Association of International School Educators of Nigeria (AISEN) and Association of Private Educators in Nigeria (APEN).
                                 </p>
                                 <p>
                                   Mrs. Egbeyemi is the Managing Director at The Foreshore School
                                 </p>
                              
                               </div>
                               <div class="cover-bar"></div>
                             </div>
                          

                         </div>

                              
                      </div>
                  </div>

                  <div class="teacher-block col-md-3 col-sm-6 col-xs-12">
                      <div class="inner-box">
                          <div class="image-box" >
                              <img src="{{asset('images/resource/Oyindamola.jpg')}}" alt="" />
                             </div>
                             <h3>Ms. <br> Oyindamola Egbeyemi </h3>
                             <div class="designation" style="font-size:14px;">Executive Director/ Admin.</div>
                             <div class="text">
                                

                                <div class="scroll-bar-wrap">
                                  <div class="scroll-box">
                                    <p>
                                  Miss Oyindamola Egbeyemi graduated with a Masters degree in Chemical Engineering from Imperial College, London after having completed her A-levels at Benenden School in the United Kingdom. She started her career at UBS Investment Bank, London before returning to Nigeria for her National Youth Service Corps Programme at Chevron Nigeria Limited. Following this, she moved on to a consulting career at Accenture and Pricewaterhouse Coopers Limited, where she left as a Senior Associate in Strategy and Operations.
                                    </p>
                                    <p>
                                     Miss Egbeyemi contributes to several humanitarian efforts focused primarily on education, leadership, unemployment and poverty. She co-founded the “All for God; all for good” charity in 2012 and the Stories Worth Telling Foundation (SWORTE Talks) in 2015, and is also a founding member and consultant of Colligold Resources Nigeria. She has been a member of Toastmasters International for nearly five years and has earned Advanced Communication and Leadership awards. She has also served in various positions on the Executive Committee of the Eagle Toastmasters Club for over four years, and is now a Past President.
                                    </p>
                                    <p>
                                      Miss Egbeyemi is an alumnus of several local and international training programmes on business management, linguistics and public relations from institutions including the Lagos Business School, Alpha B Institute Linguistique (Nice, France) and Institute Villa Pierrefeu Finishing School (Glion, Switzerland).
                                    </p>
                                    <p>
                                      Miss Egbeyemi is currently the Executive Administrator at The Foreshore School.
                                    </p>
                                 
                                  </div>
                                  <div class="cover-bar"></div>
                                </div>
                             

                            </div>

                                 
                         </div>
                     </div>

                      <div class="teacher-block col-md-3 col-sm-6 col-xs-12">
                      <div class="inner-box">
                          <div class="image-box" >
                            <img src="{{asset('images/resource/Oladapo.jpg')}}" alt="" />
                           </div>
                           <h3>Mr. <br> Oladapo Egbeyemi</h3>
                           <div class="designation" style="font-size:14px;">Director</div>
                           <div class="text">
                              

                              <div class="scroll-bar-wrap">
                                <div class="scroll-box">
                                  <p>
                                    Mr. Oladapo Egbeyemi holds a Bachelor’s degree in accounting (1985) from the University of Lagos. He has vast experience in the finance industry, having worked at institutions such as the Nigeria International Bank – NIB (now Citi bank), Chartered Bank Nigeria Plc. and Commercial Trust Bank Limited.
                                  </p>
                                  <p>
                                    After working in the finance industry for about 10 years, he founded Worthwhile Ventures Limited (Locks & Switches) in 1994 and Bathrooms & Beyond in 2008.
                                  </p>
                                  <p>
                                    Mr. Egbeyemi served on the Board of Cornerstone Insurance Plc as a non-Executive Director 2004 to 2016 and was the Chairman of Cap Phoenix Cornerstone Limited from 2015 to 2016. He is currently the Chairman of the Ogun State Mineral Resources and Environmental Management Committee (MIREMCO) and a non-Executive Director on the Board of Troloppe Property Services Limited.
                                  </p>
                                  <p>
                                    Mr. Egbeyemi is an alumnus of the prestigious Lagos Business School (Owner-Manager Programme “OMP 1”). He is also an Executive Committee and Governing Council member of the Lagos state Business School Alumni Association.
                                  </p>
                               
                                </div>
                                <div class="cover-bar"></div>
                              </div>
                           

                          </div>
      
                       </div>
                     </div>



                  <div class="teacher-block col-md-3 col-sm-6 col-xs-12">
                      <div class="inner-box">
                          <div class="image-box" >
                              <img src="{{asset('images/resource/Folasade.jpg')}}" alt="" />
                             </div>
                             <h3>Mrs. <br> Folasade Adefisayo </h3>
                             <div class="designation" style="font-size:14px;">Director</div>
                             <div class="text">
                                

                                <div class="scroll-bar-wrap">
                                  <div class="scroll-box">
                                    <p>
                                        Mrs. Folasade Adefisayo BSc. Hons., MBA, IPGCE (Nottingham) MA (Educ) holds an International Post-Graduate Certificate in Education from the University of Nottingham, and a Masters degree  in Education. She is the Chief Operating Officer of Supreme Education Foundation School and has over 35 years experience spanning banking operations, organizational restructuring, human resource management, international trade and education. She was the Executive Director and Chief Executive of the Corona Schools’ Trust Council, a not-for-profit organization involved in the management of schools and founded Leading Learning Limited in 2014, a Consulting, researching, training and capacity development firm
                                    </p>
                                    <p>
                                        Mrs. Folasade Adefisayo is an educational consultant, passionate about education, youth and development. She is dedicated to improving other people’s lives and has served as a volunteer to many Non-Governmental Organisations including – Nigerian Society for the Blind, Volunteer Corps, Junior Achievement Nigeria, Fate Foundation, Youth Empowerment Development Initiative, Teach for Nigeria among others. She was a Merit Award winner of the Federal Republic of Nigeria and a University Scholar of the University of Ibadan, Nigeria. Both awards were for academic excellence.
                                    </p>
                                  
                                 
                                  </div>
                                  <div class="cover-bar"></div>
                                </div>
                             

                            </div>

                                 
                         </div>
                     </div>
                  
                  
                  
                  <!--second Teacher Block-->
                  
                  <div class="teacher-block col-md-3 col-sm-6 col-xs-12">
                      <div class="inner-box">
                          <div class="image-box" >
                              <img src="{{asset('images/resource/Oyewole.jpg')}}" alt="" />
                             </div>
                             <h3>Mr.<br>Oyewole Okunfulure  </h3>
                             <div class="designation" style="font-size:14px;">Director</div>
                             <div class="text">
                                

                                <div class="scroll-bar-wrap">
                                  <div class="scroll-box">
                                    <p>
                                       Mr. Joseph Oyewole Okunfulure (born 9th Sept. 1946) attended the Christ School, Ado Ekiti from 1959-64 and thereafter went to Comprehensive High School Aiyetoro for the Higher School Certificate. He proceeded to the University of Ibadan in 1967 where he obtained the Bachelor’s degree in Geography in 1970 and thereafter went to the University of Nottingham in England where he was awarded the Master’s degree in Urban and Regional Planning in 1972. He acquired a Professional Certificate in Housing at the Katholieke University,Leuven, Belgium in 1981.
                                    </p>
                                    <p>
                                       Mr. Okunfulure started his professional carrier in Urban and Regional Planning and Development in 1974 in the then Federal Ministry of Economic Planning, Lagos from there he moved to the Federal Capital Development Authority, Abuja as a pioneer planner in 1976. In 1979, he joined the Federal Ministry of Housing and Environment as Assistant Chief Town Planning Officer. He was in the Federal Civil Service for more than three decades before he voluntarily retired in 2004 after rising to the level of Director and Head of the Lagos Liaison office of the Head of Service of the Federation. During his professional career in the Federal Civil Service, Mr. Okunfulure coordinated and developed the Lands and Urban and Regional Development Department to an enviable position of being the Director. He was responsible for the coordination of policies, programmes and projects in the human settlements development sector at the national level, including bilateral and multilateral programmes of the World Bank and United Nations Human Settlements Programme in Nigeria.
                                    </p>
                                    <p>
                                      Mr. Okunfulure is a consummate Urban and Regional Planner, a Fellow of the Nigerian Institute of Town Planners and an expert in Housing. He attended several local and international conferences and seminars and led the Nigerian delegation to international meetings on housing and urban development. He is widely travelled and held very important international positions while he was in the Federal Civil Service including the Chairman of the Board of Shelter Afrique in Nairobi, Kenya from 2001-2003. Since retirement, Mr. Okunfulure has remained an active player in the housing development sector as a private estate developer. He is currently into estate development in Lagos and Abuja where he has made very significant contribution to the supply of decent housing.
                                    </p>
                                    <p>
                                      A family man, Mr. Joseph Oyewole Okunfulure is happily married and blessed with lovely children.
                                    </p>
                                  
                                  </div>
                                  <div class="cover-bar"></div>
                                </div>
                             

                            </div>

                                 
                         </div>
                     </div>
                  
                  
                  
                 
                  
                  
                  <div class="teacher-block col-md-3 col-sm-6 col-xs-12">
                      <div class="inner-box">
                          <div class="image-box" >
                              <img src="{{asset('images/resource/Oluwademilade.jpg')}}" alt="" />
                             </div>
                             <h3>Mr.<br> Oluwademilade Egbeyemi  </h3>
                             <div class="designation" style="margin-top: -10px;font-size:14px">Director</div>
                             <div class="text">
                                

                                <div class="scroll-bar-wrap" style="margin-top: -12px">
                                  <div class="scroll-box">
                                    <p>
                                       Mr. Oluwademilade Egbeyemi graduated from the University of Manchester England with a B.A (Econ) in Business Studies, after having completed his A Levels in Concord College Shrewsbury England. He started his career at Access Bank after his National Youth Service at Corona School Trust Council and now works at Flutterwave, a fintech company. He is an alumnus of the prestigious Corona Schools, Nigeria.
                                    </p>
                                    <p>
                                       Mr. Oluwademilade Egbeyemi has experience in the finance industry, having worked at institutions such as Access Bank, Standard Chartered and Chapel Hill Advisory Partners. He has interest in film making this made him enroll in the MET Film School, London, England for an Editing Course (2014); in 2010 he enhanced his Film Making skill by enrolling for a Directing course in the MET Film School. He has passion for writing; this inspired him to start a Film and television blog (demiyemi.tumblr.com) and featured as a Guardian life magazine contributor.
                                    </p>
                                    <p>
                                      Mr. Oluwademilade Egbeyemi enjoys sports and fitness. He does some personal training in his free time and played rugby for the University of Manchester, Whitworth Park Rugby Union Football Club. He is a Co-founder of All for God, All for Good Charity annual Yard sale for the less privileged where all proceeds go to a selected charity.
                                    </p>
                                <br>
                                  </div>
                                  <div class="cover-bar"></div>
                                </div>
                             

                            </div>
                               
                                 
                         </div>
                     </div>
                  
                  
                  <div class="teacher-block col-md-3 col-sm-6 col-xs-12">
                      <div class="inner-box">
                          <div class="image-box" >
                              <img src="{{asset('images/resource/Oluwadarafunmi.jpg')}}" alt="" />
                             </div>
                             <h3>Mr.<br> Oluwadarafunmi Egbeyemi  </h3>
                             <div class="designation" style="margin-top: -10px;font-size:14px">Director</div>
                             <div class="text">
                                

                                <div class="scroll-bar-wrap" style="margin-top: -12px">
                                  <div class="scroll-box">
                                    <p>
                                       Mr. Oluwadarafunmi Egbeyemi is a graduate of the University of Nottingham, and has a MSc. from University of Kent School of Mathematics, Statistics and Actuarial Sciences. He is an alumnus of Corona Secondary School. He is an Investment Manager at Asset and Resource Management Limited.
                                    </p>
                                    <p>
                                      Mr. Oluwadarafunmi Egbeyemi worked with Cash craft Asset Management Limited, Nigeria for his National Youth Service as a Research Analyst. He was awarded with The University of Nottingham Advantage Award (2014) for completing additional modules: Part-time jobs, Vacations Jobs & Volunteering, Career Planning Skills and Skills for Employability. He is a member of Capoeira Society (2013-2014) at the University of Nottingham, mostly participating in coordinated Street Brazilian dance classes.
                                    </p>
                                    <p>
                                      Mr Oluwadarafumi is a long distance runner. He is a Co-founder of All for God, All for Good Charity annual Yard sale for the less privileged where all proceeds go to a selected charity.
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
  	    <section class="teachers-section no-padding-btm" style="margin-top:-200px">
  	    
  	        <div class="background-patten"></div>
  	    </section>
  	    <!--End Teachers Section-->



@endsection