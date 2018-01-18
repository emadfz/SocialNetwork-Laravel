@extends('layouts.master')


@section('content')

<!-- CSS Menu Start-->
<div class="clear"></div>

<!-- ============== Banner section ============== -->
<div class="about_us">

<!--<h1>ABOUT US</h1>-->


</div>
   <div class="about_us_section"><div class="padd50">
<div class="container">
<!--<div class="main_heading"> <h1>ABOUT US</h1> </div>-->


<div class="col-md-12">      
<div class="main_content_part"><div class="col-md-8"><h4 class="widget-title">WELCOME TO ASIATIC</h4>

 

 {!!$about->post_content!!}
</div>
<div class="col-md-4">
 
 <img class="img-responsive" src="{{ asset('public/uploads/full/' . $featured_image)  }}" >


  <br>
 <br>    
        @foreach($images as $key => $item)
 <img class="img-responsive" src="{{ asset('public/uploads/full/' . $item->guid)  }}" >
    @endforeach
 
  
  </div>

</div>
<div class="certificat_main_to">
@foreach($certificates as $certificate)
<div class="certificat_main_images"><img src="{{ asset('public/uploads/full/' . $certificate->media->guid)  }}" width="2536" height="3496">
</div>
@endforeach



</div>










 </div>
           
           <div class="spacer"></div>
           








</div>
</div>
   </div><div class="featurss">
 <div class="container">
  
  <div class="padd20">
   <div class="col-md-4 td-center fea-part">
   <div class="fea-partt"> <p><i class="fa fa-paper-plane-o" aria-hidden="true"></i></p>
    <h4>Mission</h4>
    <p>"To delight the customer & save the environment"<br>
    
    </p></div>
  </div>
   <div class="col-md-4 td-center fea-part">
  <div class="fea-partt">  <p><i class="fa fa-desktop" aria-hidden="true"></i></p>
    <h4>Vision</h4>
    <p>Our vision is to offer innovative and competitive chemical solutions for our customers &amp; supply

desired quality at competitive cost.<br>
      
    </p></div>
   </div>
   <div class="col-md-4 td-center fea-part">
   <div class="fea-partt"> <p><!--<img src="images/value.png">--><i class="fa fa-pencil-square-o" aria-hidden="true"></i></p>
    <h4>Values</h4>
    <p> Transparency
<br>    Integrity
<br>Teamwork
<br>    Discipline & Respect

    
    </p>
 </div></div>
   
  </div>
 </div>
</div>
<div class="clear"></div>
<!-- Footer Start -->

@endsection
@section('scripts')
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2196019-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
<!-- use jssor.slider.debug.js instead for debug --> 
<script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script> 
</script>
<style>
    .map {
        min-width: 300px;
        min-height: 277px;
        width: 100%;
        height: 100%;
    }
                contact .header {
        background-color: #F5F5F5;
        color: #00b9ff;
        height: 70px;
        font-size: 27px;
        padding: 10px;
                                font-weight: bold;
    }
                    contact .panel-body {
    padding: 15px 15px 10px; 
}
</style>

@endsection