@section('footer')
 
<!-- Footer Full Width -->

<div class="footer footer-full-width" id="footer">
<div class="container">
<div class="row">
  <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">

    
    <!-- Widget About -->
    
    <div class="widget w-about">
    
      <a href="03-ProfilePage.html" class="logo">
        <div class="img-wrap">
          <img src="{{asset('public')}}/img/logo-colored.png" alt="Olympus">
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
          <a href="index.html">الرئيسية</a>
        </li>
        <li>
          <a href="07-Network.html">خريطة القيم</a>
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
          <a href="#">عن المركز</a>
        </li>
        <li>
          <a href="#">المدونة</a>
        </li>
        <li>
          <a href="12-ContactsUs.html">إتصل بنا</a>
        </li>
      </ul>
    </div>

  </div>

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    
    <!-- SUB Footer -->
    
    <div class="sub-footer-copyright">
      <span>جميع الحقوق محفوظة لـمركز الغد للأخلاق © 2018
      </span>
    </div>
    
    <!-- ... end SUB Footer -->

  </div>
</div>
</div>
</div>

<!-- ... end Footer Full Width -->




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive">
<div class="ui-block-title">
<span class="icon-status online"></span>
<h6 class="title" >Chat</h6>
<div class="more">
  <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
  <svg class="olymp-little-delete js-chat-open"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
</div>
</div>
<div class="mCustomScrollbar">
<ul class="notification-list chat-message chat-message-field">
  <li>
    <div class="author-thumb">
      <img src="{{asset('public')}}/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
    </div>
    <div class="notification-event">
      <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
      <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
    </div>
  </li>

  <li>
    <div class="author-thumb">
      <img src="{{asset('public')}}/img/author-page.jpg" alt="author" class="mCS_img_loaded">
    </div>
    <div class="notification-event">
      <span class="chat-message-item">Don’t worry Mathilda!</span>
      <span class="chat-message-item">I already bought everything</span>
      <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
    </div>
  </li>

  <li>
    <div class="author-thumb">
      <img src="{{asset('public')}}/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
    </div>
    <div class="notification-event">
      <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
      <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
    </div>
  </li>
</ul>
</div>

<form class="need-validation">

<div class="form-group label-floating is-empty">
  <label class="control-label">Press enter to post...</label>
  <textarea class="form-control" placeholder=""></textarea>
  <div class="add-options-message">
    <a href="#" class="options-message">
      <svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
    </a>
    <div class="options-message smile-block">

      <svg class="olymp-happy-sticker-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-sticker-icon"></use></svg>

      <ul class="more-dropdown more-with-triangle triangle-bottom-right">
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat1.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat2.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat3.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat4.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat5.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat6.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat7.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat8.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat9.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat10.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat11.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat12.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat13.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat14.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat15.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat16.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat17.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat18.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat19.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat20.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat21.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat22.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat23.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat24.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat25.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat26.png" alt="icon">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('public')}}/img/icon-chat27.png" alt="icon">
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

</form>


</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



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
<!-- <!-- <script src="{{asset('public')}}/js/selectize.js"></script> --> -->
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

<script src="{{asset('public')}}/js/base-init.js"></script>

<script src="{{asset('public')}}/Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>

@stop