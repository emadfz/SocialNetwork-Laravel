@section('footer')
 
<!-- Footer Full Width -->

<div class="footer footer-full-width" id="footer">
<div class="container">
<div class="row">
  <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">

    
    <!-- Widget About -->
    
    <div class="widget w-about">
    
      <a href="{{route('frontend.home.get')}}" class="logo">
        <div class="img-wrap">
          <img src="{{asset('public')}}/img/logo-colored.png" alt="Alghad Center">
        </div>
      </a>
      
    </div>
    
    <!-- ... end Widget About -->

  </div>

  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

    
    <!-- Widget List -->
    
    <div class="widget w-list">
      <h6 class="title">الصفحات الرئيسية</h6>
      <ul>
        <li>
          <a href="{{route('frontend.home2.get')}}">الرئيسية</a>
        </li>
        <li>
          <a href="{{route('frontend.map.get')}}">خريطة القيم</a>
        </li>
      </ul>
    </div>
    
    <!-- ... end Widget List -->

  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

    
    <div class="widget w-list">
      <h6 class="title">مركز الغد للقيم</h6>
      <ul>
        <li>
          <a href="{{route('frontend.about.get')}}">عن المركز</a>
        </li>
        <li>
          <a href="#">المدونة</a>
        </li>
        <li>
          <a href="{{route('frontend.contact.get')}}">إتصل بنا</a>
        </li>
      </ul>
    </div>

  </div>

  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

				
				<!-- SUB Footer -->
				
				<div class="sub-footer-copyright">
					<span>جميع الحقوق محفوظة لـمركز الغد للأخلاق © 2018
					</span>
				</div>
				
				<!-- ... end SUB Footer -->

			</div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

				
				<!-- SUB Footer -->
				
				<div class="sub-footer-copyright">
					<a class="socialFooter" href="#"><span>Facebook</span></a>
					<a class="socialFooter" href="#"><span>Twitter</span></a>
					<a class="socialFooter" href="#"><span>Google+</span></a>
				</div>
				
				<!-- ... end SUB Footer -->

			</div>
</div>
</div>
</div>

<!-- ... end Footer Full Width -->


<a class="back-to-top" href="#">
<img src="{{asset('public')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>



<!-- JS Scripts -->
<script src="{{asset('public')}}/js/jquery-3.2.1.js"></script>
<script src="{{asset('public')}}/js/jquery.appear.js"></script>
<script src="{{asset('public')}}/js/jquery.mousewheel.js"></script>
<script src="{{asset('public')}}/js/perfect-scrollbar.js"></script>
<script src="{{asset('public')}}/js/jquery.matchHeight.js"></script>
<script src="{{asset('public')}}/js/svgxuse.js"></script>
<script src="{{asset('public')}}/js/imagesloaded.pkgd.js"></script>
<script src="{{asset('public')}}/js/Headroom.js"></script>
<script src="{{asset('public')}}/js/velocity.js"></script>
<script src="{{asset('public')}}/js/ScrollMagic.js"></script>
<script src="{{asset('public')}}/js/jquery.waypoints.js"></script>
<script src="{{asset('public')}}/js/jquery.countTo.js"></script>
<script src="{{asset('public')}}/js/popper.min.js"></script>
<script src="{{asset('public')}}/js/material.min.js"></script>
<script src="{{asset('public')}}/js/bootstrap-select.js"></script>
<script src="{{asset('public')}}/js/smooth-scroll.js"></script>
<!-- <script src="{{asset('public')}}/js/selectize.js"></script> -->
<script src="{{asset('public')}}/js/swiper.jquery.js"></script>
<script src="{{asset('public')}}/js/moment.js"></script>
<script src="{{asset('public')}}/js/daterangepicker.js"></script>
<script src="{{asset('public')}}/js/simplecalendar.js"></script>
<script src="{{asset('public')}}/js/fullcalendar.js"></script>
<script src="{{asset('public')}}/js/isotope.pkgd.js"></script>
<script src="{{asset('public')}}/js/ajax-pagination.js"></script>
<script src="{{asset('public')}}/js/Chart.js"></script>
<script src="{{asset('public')}}/js/chartjs-plugin-deferred.js"></script>
<script src="{{asset('public')}}/js/circle-progress.js"></script>
<script src="{{asset('public')}}/js/loader.js"></script>
<script src="{{asset('public')}}/js/run-chart.js"></script>
<script src="{{asset('public')}}/js/jquery.magnific-popup.js"></script>
<script src="{{asset('public')}}/js/jquery.gifplayer.js"></script>
<script src="{{asset('public')}}/js/mediaelement-and-player.js"></script>
<script src="{{asset('public')}}/js/mediaelement-playlist-plugin.min.js"></script>
<script src="{{asset('public')}}/js/counter.js"></script>
<script src="{{asset('public')}}/js/base-init.js"></script>

<script src="{{asset('public')}}/Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>

@stop