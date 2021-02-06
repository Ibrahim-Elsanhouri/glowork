@extends('layouts.dashboard')
@section('content')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">

                        <h1>Candidate Dashboard</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="/"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Candidate Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--employee dashboard wrapper start-->
    <div class="candidate_dashboard_wrapper jb_cover">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="emp_dashboard_sidebar jb_cover">
                        <div class="emp_web_profile candidate_web_profile jb_cover">

                            <h4>{{ Auth::user()->name }}</h4>
                            <div class="skills jb_cover">
                                <div class="skill-item jb_cover">
                                    <h6>profile<span></span></h6>
                                    <div class="skills-progress"><span data-value="70%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="emp_follow_link jb_cover">
                           <ul class="feedlist">
                                <li><a href="/dashboard/index" class="link_active"><i class="fas fa-tachometer-alt"></i> dashboard </a></li>
                                <li>
                                    <a href="/dashboard/edit"> <i class="fas fa-edit"></i>edit profile
                                    </a>
                                </li>
                                <li><a href="/dashboard/sessions"><i class="fas fa-heart"></i>Training Sessions</a></li>
                                <li><a href="/dashboard/applied"><i class="fas fa-check-square"></i>applied job</a></li>

                            </ul>
        
                        </div>
                    </div>
                 
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                  
                                        <div class="jp_job_post_right_cont">
                                            <h4>{{ Auth::user()->name     }}</h4>

                                            <ul>
                                                <li><i class="fas fa-suitcase"></i>&nbsp; {{ Auth::user()->category->name }}</li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                                        <div class="jp_job_post_right_btn_wrapper jb_cover">
                                            <div class="header_btn search_btn jb_cover">

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> basic information</h1>
                                </div>
                                <div class="job_overview_header jb_cover">

                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="far fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Speacialization :</li>
                                                <li>{{ Auth::user()->category->name }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Location:</li>
                                                <li>Riyadh</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Mobile:</li>
                                                <li>{{ Auth::user()->mobile }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>email:</li>
                                                <li><a href="#">{{ Auth::user()->email }}</a></li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>                        
                           
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="row">
                              
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="emp_job_post jb_cover">
                                        <div class="emp_job_side_img">
                                            <i class="fas fa-book"></i>

                                        </div>
                                        <div class="emp_job_side_text">
                                            <h1>{{ Auth::user()->sessions()->count() }}</h1>
                                            <p>Training Sessions</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="emp_job_post jb_cover">
                                        <div class="emp_job_side_img greens">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                        <div class="emp_job_side_text">
                                            <h1>{{ Auth::user()->jobs()->count() }}</h1> 
                                            <p>Jobs Applied</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="emp_job_post jb_cover">
                                        <div class="emp_job_side_img parts">
                                            <i class="fas fa-envelope-open-text"></i>

                                        </div>
                                        <div class="emp_job_side_text">
                                            <h1>0</h1>
                                            <p>Interviews</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                               
                       
              

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection