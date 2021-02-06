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

                                <input type="text" class="form-control require @error('identified') is-invalid @enderror" name="identified" id="identified" placeholder="National ID or Iqama*" value="{{ old('identified') }}" required autocomplete="identified">

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

                                <input type="text" class="form-control require" name="skills" placeholder="Area of expertise skills">
                               </i><i class="fab fa-angellist"></i>
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
   <select name="qualification" style="width: 1000px;">
                               <option> ---  Qualification --- </option>
                            <option value="Master’s degree">Master’s degree</option>
                            <option value="Bachelor’s degree">Bachelor’s degree</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Secondary ">Secondary </option>
                            <option value="Average">Average</option>
                            <option value="Ph.D.">Ph.D.</option>


                               </select>
</div>
</div>
<br>
<div class="row">
<div class="col-md-6">
   <select name="gyear" style="width: 1000px;">
                               <option> ---  Graduation Yaer --- </option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
 <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
 <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="2010">2010</option>
                               </select>
</div>
<div class="col-md-6">
   <select name="experience" style="width: 1000px;">
                               <option> --- Years of Experience --- </option>
                            <option value="Fresher">Fresher</option>
                            <option value="1-2 Years">1-2 Years</option>
                            <option value="1-2 Years">1-2 Years</option>
                            <option value="2-3 Years">2-3 Years</option>

                            <option value="More than 3 Years">More than 3 Years</option>

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
