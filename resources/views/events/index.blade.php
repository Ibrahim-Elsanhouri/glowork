@extends('layouts.master')
@section('content')
<!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                        <h1>Our Events</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="/"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Our Events</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--job listing filter  wrapper start-->
    <div class="blog_ct_right_wrapper jb_cover">
        <div class="container">

            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">


@foreach ($events  as  $event)
    
                    <div class="jp_first_blog_post_main_wrapper jb_cover">
                        <div class="jp_first_blog_post_img">
                            <img src="/{{ $event->image }}" width="795" height="410" class="img-responsive" alt="blog_img" />
                        </div>
                        <div class="jp_first_blog_post_cont_wrapper">
                            <p><span>{{ $event->date }}</span></p>
                            <h3><a href="#">{{ $event->name }} 

</a></h3>
                            <p>
                            {{ $event->description }}
                            
                            
                            </p>
                                                    <p><a href="#">Place : {{ $event->place }} 

</a></p>
                        </div>
                        <div class="jp_first_blog_bottom_cont_wrapper jb_cover">
                            <div class="jp_blog_bottom_left_cont">
                                <ul>
                                </ul>
                            </div>
                            <div class="jp_blog_bottom_right_cont">
                                <p><a href="#"><i class="far fa-comment-dots"></i><span>40</span></a></p>
                                <ul>
                                    <li></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

@endforeach


              

                
                 
                    <div class="blog_pagination_section pd22 jb_cover">
              
                    </div>

                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                   
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>Job Categories</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <ul class="blog_category_link jb_cover">
                        @foreach ($categories  as $category )
                                                            <li><i class="fa fa-caret-right"></i> <a href="#">{{ $category->name }} <span>({{ $category->jobs->count() }})</span></a></li>

                        @endforeach
                            
                            </ul>
                        </div>
                    </div>
             
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>job spotlight</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <div class="jp_spotlight_slider_wrapper">
                                <div class="owl-carousel owl-theme">

                                @foreach ($jobs  as $job )
                                                              <div class="item">
                                        <div class="jp_spotlight_slider_img_Wrapper">
                                            <img src="/{{ $job->image }}" width="221" height="130" alt="spotlight_img" />
                                        </div>
                                        <div class="jp_spotlight_slider_cont_Wrapper">
                                            <h4>{{ $job->title->name }}</h4>

                                            <p><a href="#">{{ $job->nature->name }}</a></p>
                                            <ul>
                                                <li><i class="far fa-flag"></i>&nbsp; {{ $job->nationality }}</li>
                                            </ul>
                                        </div>
                                        <div class="header_btn search_btn news_btn overview_btn  jb_cover">

                                            <a href="/jobs">apply now !</a>

                                        </div>

                                    </div>
                                @endforeach
          


                                  
                                
                                </div>
                            </div>
                        </div>
                    </div>
              
                 
                </div>
            </div>
        </div>
    </div>





@endsection