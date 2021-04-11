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

                        <h1>contact us</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="/"> Home </a>&nbsp; / &nbsp; </li>
                                <li>contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
	  <!-- contact_icon_section start-->
    <div class="contact_icon_section jb_cover">
        <div class="container">
            <div class="row">
			   <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>contact with us</h3>

                    </div>
                </div>
                <div class="container">

                    @include('layouts.alerts')


                </div>



                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					 <h4>contact us</h4>
                        <div class="contact_rotate">
                          <i class="fas fa-phone"></i>
                        </div>
                       
                        <p>
                            
                            +966 11 2015533


                            </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					 <h4>Email</h4>
                        <div class="contact_rotate">
                           <i class="fas fa-envelope"></i>
                        </div>
                       
                        <p>
                                        <a href = "mailto: info@glowork.net">info@glowork.net</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					   <h4>location</h4>
                        <div class="contact_rotate">
                         
						     <i class="fas fa-map-marker-alt"></i>
                        </div>
                     
                        <p>Riyadh Gallery Mall, GNo.A1-4thFloor-Office 410



                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info section end -->
	  <!-- map wrapper  start-->
    <div class="map_wrapper_top jb_cover">
		  <div class="map_wrapper map2_wrapper">
			
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.5124521021667!2d46.66024078459895!3d24.743613056023637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee2a42a505dc5%3A0x2f82135cbdf86d1f!2z2KfZhNix2YrYp9i2INis2KfZhNmK2LHZig!5e0!3m2!1sar!2ssa!4v1617869180838!5m2!1sar!2ssa" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>



                
		</div>
	 <div class="contact_field_wrapper comments_form">
			<div class="jb_heading_wraper left_rivew_heading">
                <h3>get in touch</h3>
         
            </div>
				<form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-pos">
                                    <div class="form-group i-name">

                                        <input type="text" class="form-control require"  name="name"  id="namTen-first" placeholder=" Name*">
                                        <i class="fas fa-user-alt"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- /.col-md-12 -->
                            <div class="col-lg-6 col-md-6">
                                <div class="form-e">
                                    <div class="form-group i-email">
                                        <label class="sr-only">Email </label>
                                        <input type="email" class="form-control require" name="email"  id="emailTen" placeholder=" Email *" data-valid="email" data-error="Email should be valid.">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-md-12">
                                <div class="form-m">
                                    <div class="form-group i-message">

                                        <textarea class="form-control require" name="message" rows="5" id="messageTen" placeholder=" Message"></textarea>
                                        <i class="fas fa-comment"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="tb_es_btn_div">
                                    <div class="response"></div>
                                    <div class="tb_es_btn_wrapper">
                                        <button type="submit" class="submitForm">submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
			</div>
	</div>
	  <!-- map wrapper  end-->
	  <!-- news app wrapper start-->
    <div class="news_letter_wrapper jb_cover">
   
    </div>

    @endsection