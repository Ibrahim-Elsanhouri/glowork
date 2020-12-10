@extends('layouts.master')

@section ('content')
    
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">

                        <h1>{{ $session->name }}</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Session Details</li>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>Session Details</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jb_job_overview_img">
                                <h4><b>Session Title : {{ $session->name }}</b></h4>
                         
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Session Date & Time:</li>
                                        <li>{{ $session->start_time }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-money-bill-alt"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Price:</li>
                                        <li>{{ $session->price }} SAR</li>
                                    </ul>
                                </div>
                            </div>
                       
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Time in Minutes:</li>
                                        <li>&nbsp; {{ $session->period }}</li>
                                    </ul>
                                </div>
                            </div>
                           
                        
                        <div class="jb_job_overview_img">
                                <h4><b>Bank Transfer Details</b></h4>
                         
                            </div>


                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>&nbsp; <b>Bank Account</b></li>
                                        <li>&nbsp; riyad bank - 2977000669940</li>
                                        <li>&nbsp; <b>Whats up Number</b></li>
                                        <li>&nbsp; 05655555555</li>
                                    <li>&nbsp; <b>The reservation will be confirmed from the management after you send the receipt to the whatsup number above</b></li>

                                    </ul>
                                </div>
                            </div>
                           


                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">

                           


@if($session->users->contains(Auth::user()->id))
   <a href="#" >Session Taken</a>

@else 
   <a href="#" data-toggle="modal" data-target="#myModal41">Reserve Now</a>


@endif
                            </div>

                            <div class="modal fade apply_job_popup" id="myModal41" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="apply_job jb_cover">
                                                    <h1>Session Reservation :</h1>
                                                    <div class="search_alert_box jb_cover">
<form method="post" action="{{ route('session.reserve') }}">
@csrf
<input type="hidden" name="sessions_id" value="{{ $session->id }}">
                                                     
            
                                                        <div class="apply_job_form">
                                                        </div>

                                                  

                                                    </div>
                                                    <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                        <button class="btn btn-danger" type="submit">Confirm Order</a>

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
             
            </div>

        </div>
    </div>
    <!--job single wrapper end-->
    <!-- news app wrapper start-->
    <div class="news_letter_wrapper jb_cover">
       
    </div>

@endsection
    
