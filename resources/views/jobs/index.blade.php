
@extends('layouts.master')

@section('content')
    
    <!-- navi wrapper End -->
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
    <!--job listing filter  wrapper start-->
    <div class="job_filter_listing_wrapper jb_cover">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  category</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                        @foreach ($categories as $category )
                                    <p class="job_field">
                                <a href="{{ route('category.index', $category->id ) }}" style="color:red"><label for="c1">{{ $category->name }}<span> ({{ $category->jobs->count() }})</span></label></a>
                            </p>
                        @endforeach
                
                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  location</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                        @foreach ($cities as $city)
                                <p class="job_field">
                             <a href="{{ route('city.index', $city->id ) }}" style="color:red">   <label for="c01">Jobs in {{ $city->name }}
                                    <span> ({{ $city->jobs->count() }})</span></label> </a>
                            </p>
                        @endforeach
                        
                    
                        </div>
                    </div>
                  
            
                    <div class="jp_add_resume_wrapper jb_cover">
                        <div class="jp_add_resume_img_overlay"></div>
                      <!-- Dont touch it -->
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="job_listing_left_side jb_cover">
                        <div class="filter-area jb_cover">

                            <select>
                                <option>short by</option>
                                <option>most recent </option>
                                <option>most popular</option>
                                <option>top rated</option>
                            </select>

                            <div class="list-grid">
                                <ul class="nav nav-tabs">
       
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#list"><i class="flaticon-list"></i></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="showpro">
                                <p>You are Watching {{ $jobs->count() }} Jobs</p>
                            </div>
                        </div>
                        <div class="tab-content btc_shop_index_content_tabs_main jb_cover">
                            <div id="grid" class="tab-pane fade">
                                <div class="row">
                                                                    
                                    </div>

                                </div>
                            </div>

                            <div id="list" class="tab-pane active">
                                <div class="row">
                                @foreach ($jobs as $job )
                                    

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="/{{ $job->image }}" width="70" height="70" alt="post_img" />
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="{{ route('job.show' , $job->id) }}">{{ $job->title->name }}</a></h4>

                                                        <ul>                                                           
                                                            <li><i class="fa fa-flag"></i>&nbsp; {{ $job->nationality }}</li>

                                                            @if ($job->gender == 'Female')
                                                            <li><i class="fa fa-female"></i></li>
@elseif($job->gender == 'Male')

                                                            <li><i class="fa fa-male"></i></li>

@else 
                                                            <li><i class="fa fa-male"></i><i class="fa fa-female"></i></li>

@endif


                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; {{ $job->city->name }}</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a>{{ $job->nature->name }}</a></li>
                                                            <li> <a href="{{ route('job.show' , $job->id) }}">apply</a></li>
                                                        </ul>
                                                    </div>
                                                
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                                                    @endforeach

                                </div>
                            </div>
                            <div class="blog_pagination_section jb_cover">
                                <ul>
                                    <li>
                                        <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                                    </li>
                                    <li><a href="#">1</a>
                                    </li>
                                    <li class="third_pagger"><a href="#">2</a>
                                    </li>
                                    <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>
                                    </li>

                                    <li>
                                        <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  category</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c1111" name="cb">
                                <label for="c1111">graphic designer<span> (155)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c22" name="cb">
                                <label for="c22">
                                    Engineering Jobs <span> (514)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c33" name="cb">
                                <label for="c33">Mainframe Jobs <span> (554)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c44" name="cb">
                                <label for="c44">Legal Jobs <span> (457)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c55" name="cb">
                                <label for="c55">IT Jobs <span> (254)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c66" name="cb">
                                <label for="c66">PSU Jobs <span> (1054)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c77" name="cb">
                                <label for="c77">government Jobs <span> (1284)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  location</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c011" name="cb">
                                <label for="c011">Jobs in delhi
                                    <span> (24)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c021" name="cb">
                                <label for="c021">
                                    Jobs in mumbai
                                    <span> (1242)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c031" name="cb">
                                <label for="c031">Jobs in chennai
                                    <span>(458)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c041" name="cb">
                                <label for="c041">Jobs in indore
                                    <span> (1047)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c051" name="cb">
                                <label for="c051">Job in bhopal <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c061" name="cb">
                                <label for="c061">Job in pune <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c071" name="cb">
                                <label for="c071">Job in banglore <span> (124)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>your skill</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c111" name="cb">
                                <label for="c111">javascript
                                    <span> (124)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c121" name="cb">
                                <label for="c121">
                                    HTML5
                                    <span> (42)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c131" name="cb">
                                <label for="c131">CSS
                                    <span>(158)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c141" name="cb">
                                <label for="c141">marketing
                                    <span> (47)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c151" name="cb">
                                <label for="c151">web design <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c161" name="cb">
                                <label for="c161">PHP<span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c171" name="cb">
                                <label for="c171">social media<span> (124)</span> </label>
                            </p>

                        </div>
                    </div>
       
                    <div class="jp_add_resume_wrapper jb_cover">
                        <div class="jp_add_resume_img_overlay"></div>
                        <div class="jp_add_resume_cont">
                            <img src="images/logo2.png" alt="logo" />
                            <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                            <div class="width_50">
                                <input type="file" id="input-file-now-custom-203" class="dropify" data-height="90" /><span class="post_photo">add resume</span>
                            </div>
                        </div>
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
                  
                        <div class="jb_newslwtteter_button">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news app wrapper end-->
@endsection