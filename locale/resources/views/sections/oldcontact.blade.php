@extends('layouts.master')

@section('content')
<div class="clear"></div>

<!-- ============== Banner section ============== -->

<contact>
 <div class="container">
  <div class="row">
   <div class="col-md-6">
    <div class="well well-sm">
     <form class="form-horizontal" method="post">
      <fieldset>
       <legend class="text-center header">CONTACT US</legend>
       <div class="form-group">
        <div class="col-md-10 col-md-offset-1">
         <input id="fname" name="name" type="text" placeholder="Name*" class="form-control">
        </div>
       </div>
       <div class="form-group">
        <div class="col-md-10 col-md-offset-1">
         <input id="cmpname" name="ampname" type="text" placeholder="Company" class="form-control">
        </div>
       </div>
       <div class="form-group">
        <div class="col-md-10 col-md-offset-1">
         <input id="mobile" name="mobile" type="text" placeholder="Mobile No*" class="form-control">
        </div>
       </div>
       <div class="form-group">
        <div class="col-md-10 col-md-offset-1">
         <input id="email" name="email" type="text" placeholder="Email*" class="form-control">
        </div>
       </div>
       <div class="form-group">
        <div class="col-md-10 col-md-offset-1">
         <input id="city" name="city" type="text" placeholder="City" class="form-control">
        </div>
       </div>
       <div class="form-group">
        <div class="col-md-10 col-md-offset-1">
         <input id="state" name="state" type="text" placeholder="State" class="form-control">
        </div>
       </div>
       <div class="form-group">
        <div class="col-md-10 col-md-offset-1">
         <textarea class="form-control" id="message" name="message" placeholder="Enter your Message*" rows="7"></textarea>
        </div>
       </div>
       <div class="form-group">
        <div class="col-md-12 text-center">
         <button type="submit" class="btn btn-primary btn-lg">SUBMIT</button>
        </div>
       </div>
      </fieldset>
     </form>
    </div>
   </div>
   <div class="col-md-6">
    <div>
     <div class="panel panel-default">
      <div class="text-center header our-off" style="height: 79px;border-bottom: 1px solid rgba(213, 213, 213, 0.39);">GET IN TOUCH</div>
      <div class="panel-body">
       <div class="git">
        <div class="contact_section">
      
       <div class="contact_address"> <h5>ADDRESS</h5>
        <p><strong>Asiatic Industries</strong><br>
Plot No. 1505, Phase I, GIDC, Naroda, Ahmedabad 
382330 , Gujarat, India
 </p>
 </div>
 <div class="contact_email"> <h5>EMAIL</h5>
  <p>
<a href="mailto: ragrawal@asiaticind.com ">ragrawal@asiaticind.com</a><br>

 </p>
        </div>
        
        <div class="contact_call">
        <h5>CALL US</h5>
        <p>
 ( 079 ) 40054178   
 </p>
        
        
        </div>
        
        
        </div>
       </div>
     
       <hr />
       <div  class="map">
        
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</contact>
<div class="clear"></div>
<!-- Footer Start -->
    @stop