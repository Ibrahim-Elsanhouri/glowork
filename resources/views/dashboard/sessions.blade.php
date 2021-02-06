@extends('layouts.dashboard')
@section('content')

    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">

                        <h1>Candidate Applied Jobs</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="/"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Applied Jobs</li>
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
                                <li><a href="/dashboard/index" ><i class="fas fa-tachometer-alt"></i> dashboard </a></li>
                                <li>
                                    <a href="/dashboard/edit"> <i class="fas fa-edit"></i>edit profile
                                    </a>
                                </li>
                                <li><a href="/dashboard/sessions" class="link_active"><i class="fas fa-heart"></i>Training Sessions</a></li>
                                <li><a href="/dashboard/applied" ><i class="fas fa-check-square"></i>applied job</a></li>

                            </ul>
                  
                        </div>
                    </div>
                    <div class="modal fade delete_popup" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-trash-alt"></i> delete account</h1>
                                            <p>Are you sure! You want to delete your profile. This
                                                <br> cant be undone!</p>

                                            <div class="delete_jb_form">

                                                <input type="password" name="password" placeholder="Enter Password">
                                            </div>
                                            <div class="header_btn search_btn applt_pop_btn">

                                                <a href="#">save updates</a>

                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" class="" data-dismiss="modal">cancel</a>
                                            </div>
                                            <div class="login_remember_box jb_cover">
                                                <label class="control control--checkbox">You accepts our <a href="#">Terms and Conditions </a> and <a href="#">Privacy Policy</a>
                                                    <input type="checkbox">
                                                    <span class="control__indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">      
                                    <div class="manage_jobs_wrapper jb_cover">
                                        <div class="job_list mange_list applications_recent">

                                            <h6>{{ Auth::user()->sessions()->count() }} Training Sessions</h6>

                                        </div>
                                    </div>
                        </div>

                        @foreach (Auth::user()->sessions  as $session )
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="jb_listing_left_fullwidth mt-0 jb_cover">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                        <div class="jb_job_post_side_img">
                                            <br> <span>Glowork</span>
                                        </div>
                                        <div class="jb_job_post_right_cont">
                                            <h4><a href="#">{{ $session->name }}</a></h4>

                    
                                                        <ul>                                                           
                                                            <li><i class="far fa-money-bill-alt"></i>&nbsp; {{ $session->price }} SR</li>

         


                                                            <li><i class="far fa-clock"></i>&nbsp; {{ $session->period }} Minutes</li>
                                                            <li><i class="far fa-clock"></i>&nbsp; {{ $session->start_time }}</li>

                                                        </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                        <div class="jb_job_post_right_btn_wrapper">
                                            <ul>
                                                <li>
                                                    <div class="job_adds_right">
                                                        <a href="#"><i class="far fa-heart"></i></a>
                                                    </div>
                                                </li>


                                                <li><a href="invoice/{{ $session->id }}/sessions">Get Invoice</a></li>


                                                @if ( $session->pivot->confirmed == 1)
                                    <li> <a href="#" class="applied_btn">Confirmed</a></li>

                                                @else 
                             <li><a href="#">Waiting</a></li>


                                                @endif
                                            </ul>
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                   
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

  


@endsection