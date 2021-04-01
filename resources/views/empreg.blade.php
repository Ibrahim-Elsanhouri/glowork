@extends('layouts.master')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 


@section('content')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 


    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                        <h1>Employer Registeration</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Employer Registeration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- top header wrapper end -->
    <!-- sign up wrapper start -->
    <div class="login_wrapper jb_cover">
        <div class="container">
            <div class="row">

                @include('layouts.alerts')
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box jb_cover">


                   <div class="login_banner_wrappers">
                         
                        
                        </div> 



                        <div class="login_form_wrapper signup_wrapper">
                            <h2>Employer Registeration</h2>
							   <div class="form-group icon_form comments_form">
    <form method="POST" action="{{ route('event.empregStore') }}">
                        @csrf
                                <input type="text" class="form-control  @error('name') is-invalid @enderror require" name="name" id="name" placeholder=" Name*" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class="fas fa-user"></i>
                            </div>

                            <div class="form-group icon_form comments_form">
                               
                                                            <input type="text" class="form-control  @error('cname') is-invalid @enderror require" name="cname" id="cname" placeholder="Name of Your Company" value="{{ old('cname') }}" required autocomplete="cname" autofocus>
                                                            
                                                            
                                                            @error('cname')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <i class="fas fa-user"></i>
                                                        </div>
                             <div class="form-group icon_form comments_form">

                                <input type="text" class="form-control require @error('job') is-invalid @enderror" name="job" id="job" placeholder="Job Position*" value="{{ old('job') }}" required autocomplete="job">

                                @error('identified')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
<i class="far fa-id-card"></i>

                            </div>
                            <div class="form-group icon_form comments_form">

                                <input type="email" class="form-control require @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address*" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class="fas fa-envelope"></i>
                            </div>
                           
                         
               
                             <div class="form-group icon_form comments_form">

                                <input type="text" class="form-control require" name="mobile" placeholder="Mobile">
                                <i class="fas fa-phone"></i>
                            </div>


                             <div class="form-group icon_form comments_form">

                                <input type="text" class="form-control require" name="subject" placeholder="Subject">
                               </i><i class="fab fa-angellist"></i>
                            </div>

                            <div class="form-group icon_form comments_form">

                                <input type="text" class="form-control require" name="message" placeholder="Message">
                               </i><i class="fab fa-angellist"></i>
                            </div>
   
    

                            <div class="login_remember_box">
                         
                                <button type="submit" class="btn btn-danger btn-lg">Registeration</button>

                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up wrapper end -->

    <!-- news app wrapper start-->
    <div class="news_letter_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">
                        <div class="jb_newslwtteter_left">
                        </div>
                        <div class="jb_newslwtteter_button">
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection
