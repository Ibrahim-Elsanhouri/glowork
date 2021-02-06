@extends('layouts.dashboard')
@section ('content')
    
    
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">

                        <h1>Hiring Staff</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="/"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Hiring Staff</li>
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


                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                    <br><br>
                                                    @include('layouts.alerts')

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                       
                                        <div class="jp_job_post_right_cont edit_profile_wrapper">
                                            <h3><b>Hiring Staff</b></h3>

                                         
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="browse_img_banner jb_cover">
<form method="post" action="{{ route('staff.store') }}">
@csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Name</label>
                                            <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Email</label>
                                            <input type="email" name="email" placeholder="example@example.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Mobile</label>
                                            <input type="number" name="mobile" placeholder="+966 5xxxxxxxx" required>
                                        </div>
                                    </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Company Name</label>
                                            <input type="text" name="company" placeholder="Name">
                                        </div>
                                    </div>
                 

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label>Job Speacialization</label>

                                            <select name="categories_id">

                                            @foreach (App\Category::all()  as $category )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
          
                                            </select>
                                        </div>
                                    </div>
                                 
                               
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label>City</label>
                                            <select name="cities_id">
                                            @foreach (App\City::all() as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>

                                            @endforeach
                                              

                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label>Number of Branches</label>
                                            <select name="branch">
                                                <option>1 - 5</option>
                                                <option>6 - 20</option>
                                                <option>21 - 50</option>
                                                <option>More than 50</option>

                                            </select>
                                        </div>
                                    </div>
                                         <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                          
                                        </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                                      <button type="submit" class="btn btn-danger">Send Hiring Request</button>

                                        </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
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
    <!--employee dashboard wrapper end-->
    <!-- newsletter wrapper start -->

    <!-- newsletter wrapper end -->

    @endsection
