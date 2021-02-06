@extends('layouts.master')

@section('content')

    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                        <h1>login</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!-- login wrapper start -->
    <div class="login_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box jb_cover">
                        <div class="login_banner_wrapper">
                          
                          
                            
                        </div>
                        <div class="login_form_wrapper">
                            <h2>login</h2>
                            <div class="form-group icon_form comments_form">
       <form method="POST" action="{{ route('login') }}">
                        @csrf
                                <input type="email" class="form-control require @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address*">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group icon_form comments_form">

                                <input id="password" name="password" type="password" class="form-control require @error('password') is-invalid @enderror" autocomplete="current-password" placeholder="Password *">


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="login_remember_box">
                                <label class="control control--checkbox">Remember me
                                    <input type="checkbox">
                                    <span class="control__indicator"></span>
                                </label>
                                <a href="#" class="forget_password">
									Forgot Password
								</a>
                            </div>
                            <div class="header_btn search_btn login_btn jb_cover">

                                <button type"submit" class="btn btn-danger">login</button>
                            </div>
                            </form>
                            <div class="dont_have_account jb_cover">
                                <p>Don’t have an acount ? <a href="/register">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login wrapper end -->

    <!-- news app wrapper start-->
    <div class="news_letter_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">
                        <div class="jb_newslwtteter_left">
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
