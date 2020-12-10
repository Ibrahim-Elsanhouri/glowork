@extends('layouts.master')

@section ('content')
    
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">

                        <h1>{{ $job->title->name }}</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>job Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--job single wrapper start-->
    <div class="job_single_wrapper jb_cover">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs overview</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jb_job_overview_img">
                                <img src="/{{ $job->image }}" width="100" height="100" alt="post_img" />
                                <h4>{{ $job->title->name }}</h4>
                                <p>Glowork</p>
                                <ul class="job_single_lists">
                                    <li>
                                        <div class="job_adds_right">
                                            <a href="#!"><i class="far fa-heart"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header_btn search_btn part_time_btn jb_cover">

                                            <a href="#">{{ $job->nature->name }}</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Date Posted:</li>
                                        <li>{{ $job->created_at }}</li>
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
                                        <li>{{ $job->city->name }}</li>
                                    </ul>
                                </div>
                            </div>
                       
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-flag"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Nationality:</li>
                                        <li>&nbsp; {{ $job->nationality }}</li>
                                    </ul>
                                </div>
                            </div>
                                  <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-male"></i>
                                    <i class="fa fa-female"></i>

                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Gender:</li>
                                        <li>&nbsp; {{ $job->gender }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-th-large"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Category:</li>
                                        <li>{{ $job->category->name }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Experience:</li>
                                        <li>{{ $job->experience }}+ Years Experience</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">
@if($job->users->contains(Auth::user()->id))

                                <a href="#" >You Already Applied</a>

                            </div>
@else

   <a href="#" data-toggle="modal" data-target="#myModal41">apply now </a>

                            </div>
@endif

                            <div class="modal fade apply_job_popup" id="myModal41" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="apply_job jb_cover">
                                                    <h1>apply for this job :</h1>
                                                    <div class="search_alert_box jb_cover">
<form method="post" action="{{ route('job.apply' , $job->id) }}">
@csrf
                                                     
            
                                                        <div class="apply_job_form">
                                                            <textarea class="form-control" name="message" placeholder="Message to HR (Optional)"></textarea>
                                                        </div>

                                                  

                                                    </div>
                                                    <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                        <button class="btn btn-danger" type="submit">Apply now</a>

                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
             
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="jb_listing_single_overview jb_cover">
                   
                      
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading">Job Requirements</h2>
                            <p>                             <?php echo  htmlspecialchars_decode($job->requirements) ?>
</p>

                        </div>
                    
                        <div class="jp_job_res jp_listing_left_wrapper jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li>share :</li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                         <br><br>

        </div>
    </div>
    <!--job single wrapper end-->
    <!-- news app wrapper start-->
    <div class="news_letter_wrapper jb_cover">
       
    </div>

@endsection
    
