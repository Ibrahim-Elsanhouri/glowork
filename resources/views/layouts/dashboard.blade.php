<!DOCTYPE html>
<!-- 
Template Name: JB desks
Version: 1.0.0
Author: 

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="JB desks,job portal,job" />
    <meta name="keywords" content="JB desks,job portal,job" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/dropify.min.css ')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/nice-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/responsive.css') }}" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/glowork-logo.jpg') }}" />
</head>

<body>
    <!-- preloader Start -->
    <!-- preloader Start -->
    <div class="jb_preloader">
        <div class="spinner_wrap">
            <div class="spinner"></div>
        </div>
    </div>
   <!-- <div class="cursor"></div> --> 
    <!-- Top Scroll Start --><a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    <nav class="cd-dropdown  d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <h2><a href="/"> <span><img src="{{ asset('images/glowork-logo.jpg') }}" alt="img"></span></a></h2>
        <a href="#0" class="cd-close">Close</a>
       <ul class="cd-dropdown-content">
            <li>
                <form class="cd-search">
                    <input type="search" placeholder="Search...">
                </form>
            </li>
            <li class="has-children">
                <a href="#">home</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="../main_pages/index.html">home I</a></li>
                    <li><a href="../main_pages/index_II.html">home II</a></li>
                    <li><a href="../main_pages/index_III.html">home III</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a href="#">jobs</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="../main_pages/job_listing_grid_left_filter.html">job listing grid </a></li>
                    <li><a href="../main_pages/job_listing_list_left_filter.html">job listing list</a></li>
                    <li><a href="../main_pages/job_single.html">job single</a></li>
                </ul>
            </li>
            <!-- .has-children -->
            <li class="has-children">
                <a href="#">pages</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="../main_pages/about_us.html">about us</a></li>
                    <li><a href="../main_pages/companies.html">companies</a></li>
                    <li><a href="../main_pages/company_single.html">company single</a></li>
                    <li><a href="../main_pages/error_page.html">error page</a></li>
                    <li><a href="../main_pages/login.html">login</a></li>
                    <li><a href="../main_pages/pricing_table.html">pricing table</a></li>
                    <li><a href="../main_pages/sign_up.html">sign up</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a href="#">dashboard</a>
                <ul class="cd-secondary-dropdown is-hidden">
                    <li class="go-back"><a href="#0">Menu</a>
                    </li>
                    <li class="has-children"> <a href="#">candidate</a>
                        <ul class="cd-secondary-dropdown is-hidden">
                            <li class="go-back"><a href="#0">Menu</a>
                            </li>
                            <li>
                                <a href="candidate_applied_job.html">applied job </a>
                            </li>
                            <li>
                                <a href="candidate_dashboard.html">dashboard</a>
                            </li>
                            <li>
                                <a href="candidate_edit_profile.html"> edit profile</a>
                            </li>
                            <li>
                                <a href="candidate_favourite_job.html">favourite job</a>
                            </li>
                            <li>
                                <a href="candidate_resume.html"> resume</a>
                            </li>
                            <li>
                                <a href="message.html"> message</a>
                            </li>
                            <li>
                                <a href="pricing_plans.html">pricing plans</a>
                            </li>
                        </ul>
                        <!-- .cd-secondary-dropdown -->
                    </li>
                    <!-- .has-children -->
                    <li class="has-children"> <a href="#">company</a>
                        <ul class="cd-secondary-dropdown is-hidden">
                            <li class="go-back"><a href="#0">Menu</a>
                            </li>
                            <li>
                                <a href="comp_applications.html"> applications </a>
                            </li>
                            <li>
                                <a href="comp_company_page.html">company page</a>
                            </li>
                            <li>
                                <a href="comp_employer_dashboard.html"> dashboard</a>
                            </li>
                            <li>
                                <a href="comp_employer_edit_profile.html">edit profile</a>
                            </li>
                            <li>
                                <a href="comp_employer_manage_jobs.html"> manage jobs</a>
                            </li>
                            <li>
                                <a href="comp_post_new_job.html"> post new job</a>
                            </li>
                            <li>
                                <a href="message.html">message</a>
                            </li>
                            <li>
                                <a href="pricing_plans.html">pricing plans</a>
                            </li>
                        </ul>
                        <!-- .cd-secondary-dropdown -->
                    </li>
                </ul>
                <!-- .cd-secondary-dropdown -->
            </li>
            <li class="has-children">
                <a href="#">blog</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="../main_pages/blog_single.html">blog single</a></li>
                    <li><a href="../main_pages/blog_category_right_sidebar.html">blog category</a></li>
                </ul>
            </li>
            <li><a href="../main_pages/contact_us.html">contact us </a></li>
            <li><a href="../main_pages/login.html">login</a></li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
   <div class="cp_navi_main_wrapper jb_cover">
        <div class="container-fluid">
            <div class="cp_logo_wrapper">
                <a href="/">
                    <img src="{{ asset('images/glowork-logo.jpg') }}" width="185" height="45" alt="logo">
                </a>
            </div>
            <!-- mobile menu area start -->
            <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cd-dropdown-wrapper">
                                <a class="house_toggle" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                        <g>
                                            <g>
                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <!-- .cd-dropdown -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- .cd-dropdown-wrapper -->
            </header>
            <div class="menu_btn_box jb_cover">
               <div class="jb_profile_box">
                   <div class="nice-select" tabindex="0"> <span class="current">
				   <img src="{{ asset('images/s4.png') }}" alt="img"> 
				   <div class="luca_profile_wrapper"><h1><a href="#">{{ Auth::user()->name }}</a></h1>
				   <p><a href="#">{{ Auth::user()->email }}</a></p>
				   </div></span>
                      <ul class="list">
							<li><a href="/dashboard/index"><i class="fas fa-user-edit"></i>account</a>
							</li>					
									
							


                                <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> log out  </a></li>
       
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

					</ul>
                   </div>
                </div>
            </div>

            <div class="jb_navigation_wrapper">
                <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <ul class="main_nav_ul">
                        <li class="has-mega gc_main_navigation"><a href="/" class="gc_main_navigation">home</a>
              
                        </li>
                              <li ><a href="/aboutus" class="gc_main_navigation">About Glowork</a>
              
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="/jobs" class="gc_main_navigation">jobs</a>
                
                        </li>
                     <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">Our Services
</a>
                            <ul class="navi_2_dropdown">
                            
                                <li class="parent">
                                    <a href="/staff"><i class="fas fa-square"></i>Recruitment</a>
                                    <a href="/sessions"><i class="fas fa-square"></i>Coaching</a>
                                     <a href="/events"><i class="fas fa-square"></i>Our Events</a>
                                </li>

                            </ul>
                        </li>


                        <li><a href="/contact" class="gc_main_navigation">contact</a></li>

                    </ul>
                </div>
                <!-- mainmenu end -->
                <div class="jb_search_btn_wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button radius-xl"><i class="fas fa-search"></i></button>
                            <button onclick="googleTranslateElementInit()" type="button" class="site-button radius-xl"><i class="fas fa-flag"></i></button>

                        </div>
                    </div>
                    <div id="google_translate_element"></div>  
                    <script type="text/javascript">  
                        function googleTranslateElementInit() {  
                            new google.translate.TranslateElement( 
                                {pageLanguage: 'en'},  
                                'google_translate_element' 
                            );  
                        }  
                    </script>  
                      
                    <script type="text/javascript" src= 
                "https://translate.google.com/translate_a/element.js? 
                        cb=googleTranslateElementInit"> 
                    </script> 



                </div>
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary-dark">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search...">
                            <span id="quik-search-remove"><i class="fas fa-times"></i></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  @yield('content')

  <div class="footer jb_cover">
    <div class="container">
        <br>

        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="footerNav jb_cover">
                 

                    <ul class="icon_list_news jb_cover">
                        <li>
                            <a href="https://twitter.com/Glowork" style="color: white"><i class="fab fa-twitter"></i>
                                </a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/glowork/?originalSubdomain=sa" style="color: white"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/glowork/?originalSubdomain=sa" style="color: white"><i class="fab fa-snapchat"></i></a></li>
                        <li><a href="https://www.instagram.com/glowork/" style="color: white"><i class="fab fa-instagram"></i></a></li>


                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="footerNav jb_cover footer_border_displ">
                    <br><br>
                    <h6 style="color:white; ">All rights reserved by Glowork</h6>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="footerNav jb_cover footer_border_displ">
                    <ul class="icon_list_news jb_cover">
                        <li>
             
                            <a href="https://www.google.com.sa/maps/place/%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6+%D8%AC%D8%A7%D9%84%D9%8A%D8%B1%D9%8A%E2%80%AD/@24.7436131,46.6602408,17z/data=!3m1!4b1!4m5!3m4!1s0x3e2ee2a42a505dc5:0x2f82135cbdf86d1f!8m2!3d24.7436082!4d46.6580521" target="_blank" style="color: white"><i class="flaticon-location-pointer"></i>
                                </a>
                        </li>


                    </ul>                       
                </div>
            </div>
           
       <!--     <div class="copyright_left"><i class="fa fa-copyright"></i> 2021 <a href="#">  Glowork.  </a> All Rights Reserved.
            </div>
        -->
            <div class="clearfix"></div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
    <!-- Waves Java script
    <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop gradient-color">
            <div class="wave waveTop"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle"></div>
        </div>
        <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom"></div>
        </div>
    </div>
-->
</div>
    <!-- footer Wrapper End -->
	 <!-- chat box Wrapper start 
	<div id="chat-circle" class="btn btn-raised"> 
		<i class="fas fa-comment-alt"></i>
	</div>
  <div class="chat-box">
    <div class="chat-box-header">
      ChatBot
      <span class="chat-box-toggle"><i class="fas fa-times"></i></span>
    </div>
    <div class="chat-box-body">
      <div class="chat-box-overlay">   
      </div>
      <div class="chat-logs">
       
      </div>
    </div>
    <div class="chat-input">      
      <form>
        <input type="text" id="chat-input" placeholder="Send a message..."/>
      <button type="submit" class="chat-submit" id="chat-submit"><i class="fas fa-paper-plane"></i></button>
      </form>      
    </div>
  </div>
  chat box Wrapper end -->
  
    <!-- dashboard JS --> 
        <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/modernizr.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugin.js') }}"></script>
    <script src="{{ asset('dashboard/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('dashboard/js/dropify.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('dashboard/js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/custom.js') }}"></script>
    <script>
    </script>
</body>

</html>

