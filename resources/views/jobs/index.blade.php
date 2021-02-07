

@extends('layouts.master')
@section('content')
   <!-- top header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">

                        <h1>job listing</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="/"> Home </a>&nbsp; / &nbsp; </li>
                                <li>jobs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!-- top header wrapper end -->
    <!--job listing filter  wrapper start-->
    <div class="job_filter_listing_wrapper jb_cover">
        <div class="container">

            <div class="row">
                     

                        

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="job_listing_left_side jb_cover">
                        <div class="filter-area jb_cover">

                       

                            <div class="list-grid">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#grid"> <i class="flaticon-four-grid-layout-design-interface-symbol"></i></a>
                                    </li>
                                    </li>

                                </ul>
                            </div>
                            <div class="showpro">
                                <p>Youre Watching {{ $jobs->count() }} Jobs</p>
                            </div>
                        </div>
                        <div class="tab-content btc_shop_index_content_tabs_main jb_cover">
                            <div id="grid" class="tab-pane active">
                                <div class="row">
                               @foreach ($jobs  as $job )
               <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="/{{ $job->image }}" width="70" height="70" alt="post_img" />
                                                        <br> <span>Glowork</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="{{ route('job.show' , $job->id) }}">{{ $job->title->name }}</a></h4>

                                                        <ul>



                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; {{ $job->city->name }}</li>

                                                            <li><i class="fa fa-clock"></i>&nbsp; {{ $job->created_at->diffForHumans() }}</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                               
                                                 
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
				<div class="col-lg-3 col-md-12 col-sm-12 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <div class="job_filter_category_sidebar jb_cover">
                        

                        <div class="category_jobbox jb_cover">
                          
                      
                         
                          
                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                   

                        <div class="category_jobbox jb_cover">
                         
                  
                
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                     
                        <div class="category_jobbox jb_cover">
                     
                     

                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                      

                     
                    </div>
                     
                </div>
            </div>
        </div>
    </div>

    <!--job listing filter  wrapper end-->
    <!-- news app wrapper start-->
    <div class="news_letter_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">
                     
                     
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection