@extends('layouts.dashboard')
@section('content')



    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">

                        <h1>Edit Candidate Profile</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Candidate profile</li>
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
                                    <h6>profile<span>70%</span></h6>
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
                                <li><a href="/dashboard/sessions"><i class="fas fa-heart"></i>Training Sessions</a></li>
                                <li><a href="/dashboard/applied" class="link_active"><i class="fas fa-check-square"></i>applied job</a></li>

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
                                                <br> can't be undone!</p>

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
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="jp_job_post_side_img">
                                            <img src="{{ asset('images/s4.png') }}" alt="post_img">

                                        </div>
                                     
                                    </div>

                                </div>
                            </div>

                            <div class="browse_img_banner jb_cover">
<form action="/dashboard/update" method="post">
@csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>user name</label>
                                            <input type="text" name="name" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Mobile</label>
                                            <input type="number" name="mobile" value="{{ Auth::user()->mobile }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>National ID or Iqama</label>
                                            <input type="text" name="identified" value="{{ Auth::user()->identified }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label>Specialization</label>
                                            <select name="categories_id" >
                                                @foreach (\App\Category::all() as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                               @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Skills</label>
                                            <input type="text" name="skills" value="{{ Auth::user()->skills }}">
                                        </div>
                                    </div>
                                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label>Experience</label>
                           <select name="experience" >
                            <option value="Fresher">Fresher</option>
                            <option value="1-2 Years">1-2 Years</option>
                            <option value="1-2 Years">1-2 Years</option>
                            <option value="2-3 Years">2-3 Years</option>

                            <option value="More than 3 Years">More than 3 Years</option>


                               </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label>Qualification</label>
                           <select name="qualification" style="width: 1000px;">
                            <option value="Master’s degree">Master’s degree</option>
                            <option value="Bachelor’s degree">Bachelor’s degree</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Secondary ">Secondary </option>
                            <option value="Average">Average</option>
                            <option value="Ph.D.">Ph.D.</option>


                               </select>
                                        </div>
                                    </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="header_btn search_btn jb_cover">
<button class="btn btn-danger">Update Account</button>
                                                      
                                                    </div>
                                                </div>
                                </div>

                            </div>
                            </form>
							<div class="browse jb_cover">
                           
                       
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="login_remember_box jb_cover">
                                    
                                        
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection