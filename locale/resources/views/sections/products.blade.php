@extends('layouts.master')

@section('content')

<!-- CSS Menu Start-->
<div class="clear"></div>
<!-- Reference: https://github.com/ashleydw/lightbox/ -->
<div class="inner-banner"> <img src="{{asset('public')}}/images/nellon.jpg" alt="about us" />
 <h2>Our Products</h2>
</div>
<div class="clear"></div>
<about_two>
<div class="container">
 <div class="col-md-12">
  <div class="heading_2">
   <h2>{{@ $title}}</h2>
   <p><img src="{{asset('public')}}/images/border.png"></p>
  </div>
  <div class="par col-md-10 col-md-offset-1">
   <div class="medical_details">
    <table>
     <thead>
      <tr>
       <th colspan="2" style="text-align:center; border-right:none; width:100%; background:#00adef ; color:#fff; padding:10px 0;">Category</th>
       <th colspan="5" style="text-align:center; background:#286090 ; padding:0; color:#fff;">Color Theme </th>
      </tr>
     </thead>
     <tbody>
  
        @foreach($products as $product)
      <tr>
       <td data-label="details " colspan="2">
        <div class="yello">
         <div class="catagiri_1">
          <h3>{{$product->post_title}} </h3>
         </div>
         <br>
         <div class="catagiri" style="margin-top:13px;">Category: <span> Acid Dyes </span> </div>
         <div class="catagiri">Industry:<span> {{$product->type}} </span> </div>
        </div>
        <div class="expand_container">
         <div class="expand_header">Read More</div>
         <div class="expand_content" style="display: none;">
          <p> Solubility - GMS/LTs at 60 C Temp: 30 Penitration - 2 Day Light - 3-4 Perspiration - CH: 3 CO: 4-5 WO: 1 Washing (Natural) - CH: 2 CO: 3 WO: 4 Deying Temperature: 80°C </p>
         </div>
        </div>
       </td>
       <!--<td data-label="details " colspan="4"> <div class="yello_2"></div> </td>-->
       <td colspan="5" style="text-align:center; border-right:none;">
        <table cellpadding="0" style="width:87px; border-collapse: collapse; height: 20px; margin-bottom:4px;  margin-top:0px; margin-left:22px; text-align:center; float:left; margin-right:7px;">
         <tbody>
          <tr>
           <td style="border: 1px solid #fff; padding:8px 69px; background:{{@ $product->color}}">&nbsp;</td>
          </tr>
         </tbody>
        </table>
        
       </td>
      </tr>
@endforeach
     </tbody>
    </table>
    </td>
    
    <!--<td data-label="details " colspan="4"> <div class="yello_2"></div> </td>-->
    </tr>
    </tbody>
    </table>
    <ul class="pagination">
     {{$products->render()}}
    </ul>
   </div>
  </div>
 </div>
</div>
</about>
<div class="clear"></div>
<!-- Footer Start -->

@stop