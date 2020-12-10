<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Glowork Invoice</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
	  <!-- CUSTOM STYLE  -->
    <link href="{{ asset('assets/css/custom-style.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

</head>
<body>
 <div class="container">
     
      <div class="row pad-top-botm ">
         <div class="col-lg-6 col-md-6 col-sm-6 ">
            <img src="http://glowork.net/wp-content/uploads/2020/03/glowork-logo.jpg" style="padding-bottom:20px;" /> 
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <strong>  Glowork </strong>
              <br />
                  <i>Address :</i> Prince Muhammad Ibn Abdulaziz Rd
              <br />
Riyadh
              <br />
                  Saudi Arabia
              
         </div>
     </div>
     <div  class="row text-center contact-info">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr />
             <span>
                 <strong>Email : </strong>  info@glowork.net 
             </span>
             <span>
                 <strong>Call : </strong>  +966 11 2015533
             </span>
              <span>
                 <strong>Fax : </strong>  +966 11 2015533
             </span>
             <hr />
         </div>
     </div>
     <div  class="row pad-top-botm client-info">
         <div class="col-lg-6 col-md-6 col-sm-6">
         <h4>  <strong>Client Information</strong></h4>
           <strong>{{ Auth::user()->name }}</strong>
             <br />
                  <b>Address :</b> Riyadh ,
              <br />
                 Saudi Arabia.
             <br />
             <b>Call :</b> {{ Auth::user()->mobile }}
              <br />
             <b>E-mail :</b> {{ Auth::user()->email }}
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <h4>  <strong>Payment Details </strong></h4>
            <b>Bill Amount :  {{ $session->total_price() }} SAR </b>
              <br />
               Bill Date :  {{ $session->created_at }}
              <br />
               <b>Payment Status :  Paid </b>
               <br />
               Session Date & Time :  {{ $session->start_time }}
              <br />
         </div>
     </div>
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Session</th>
                                    <th>Duration in Minutes</th>
                                    <th>Price</th>
                                     <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $session->name }}</td>
                                    <td>{{ $session->period }}</td>
                                    <td>{{ $session->price }} SAR</td>
                                    <td>{{ $session->total_price() }} SAR</td>
                                </tr>
                        
                      
                                
                            </tbody>
                        </table>
               </div>
             <hr />
             <div class="ttl-amts">
               <h5>  Total Amount :  {{ $session->total_price() }} SAR </h5>
             </div>
             <hr />
              <div class="ttl-amts">
                  <h5>  Tax : {{ $session->vat() }} SAR ( by 15 % on bill ) </h5>
             </div>
             <hr />
              <div class="ttl-amts">
                  <h4> <strong>Bill Amount : {{ $session->total_price() }} SAR</strong> </h4>
             </div>
         </div>
     </div>
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <strong> Important: </strong>
             <ol>
                  <li>
                    This is an electronic generated invoice so doesnot require any signature.

                 </li>
            
             </ol>
             </div>
         </div>
      <div class="row pad-top-botm">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr />
             <a href="#" class="btn btn-primary btn-lg" >Print Invoice</a>
             &nbsp;&nbsp;&nbsp;
              <a href="#" class="btn btn-success btn-lg" >Download In Pdf</a>

             </div>
         </div>
 </div>

</body>
</html>
