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

                        <h1>sign up</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>sign up</li>
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box jb_cover">
                        <div class="login_banner_wrapper">
                            <div class="header_btn search_btn facebook_wrap jb_cover">


                            </div>
                            <div class="header_btn search_btn google_wrap jb_cover">


                            </div>
                        
                        </div>
                        <div class="login_form_wrapper signup_wrapper">
                            <h2>sign up</h2>
							   <div class="form-group icon_form comments_form">
    <form method="POST" action="{{ route('register') }}">
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

                                <input type="email" class="form-control require @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address*" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class="fas fa-envelope"></i>
                            </div>
                                       <div class="form-group icon_form comments_form">

                                <input type="password" class="form-control require @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" value="{{ old('password') }}" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="form-group icon_form comments_form">

                                <input type="password"  id="password-confirm" class="form-control require"  name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
                                <i class="fas fa-lock"></i>
                            </div>
               
                             <div class="form-group icon_form comments_form">

                                <input type="text" class="form-control require" name="mobile" placeholder="Mobile">
                                <i class="fas fa-phone"></i>
                            </div>

                              <div class="form-group icon_form comments_form">

                                <input type="file" class="form-control require" name="resume" placeholder="Mobile">
                                <i class="fas fa-file"></i>
                            </div>

                            <div class="form-group icon_form comments_form">
<div class="row">
<div class="col-md-6">
   <select name="categories_id" style="width: 1000px;">
                               <option> ---  Specialization --- </option>
                               @foreach (\App\Category::all() as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                               @endforeach

                               </select>
</div>
<div class="col-md-6">
   <select name="nationality" style="width: 1000px;">
                               <option> ---  Nationality --- </option>
                            <option value="Saudi">Saudi</option>
                            <option value="Non-Saudi">Non-Saudi</option>


                               </select>
</div>
</div>
   
</div>

   
    

                            <div class="login_remember_box">
                         
                         
                            </div>
                            <div class="header_btn search_btn login_btn jb_cover">

                                <button type="submit" class="btn btn-danger btn-lg">sign up</button>
                            </div>
                            <div class="dont_have_account jb_cover">
                                <p> have an acount ? <a href="/login">login</a></p>
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
