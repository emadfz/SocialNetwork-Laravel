
@extends('layouts.master')


@section('content')
<div class="header-spacer"></div>
<div class="content-bg-wrap">
<div class="content-bg bg-landing"></div>
</div>
<div class="header-spacer hsdn"></div>
<div class="container">
<div class="row display-flex">
  <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
    <div class="landing-content">
		<h1>منصة الغد للقيم</h1>
    	<p>هى أول منصة إلكترونية لبناء وتفعيل القيم, تستهدف هذه المنصة إلى استقطاب المعلمين والتربويين وذوي الأختصاص فى مجال القيم
    	</p>
    </div>
  </div>

  <div class="col-xl-5 ml-auto col-lg-6 col-md-12 col-sm-12 col-xs-12">

    
    <!-- Login-Registration Form  -->
    
    <div class="registration-login-form">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
            <svg class="olymp-login-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>سجل على المنصة
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
            <svg class="olymp-register-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>الدخول إلى الحساب
          </a>
        </li>
      </ul>
    
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane
        @if(session()->has('message'))
        @else
        active
        @endif
        " id="home" role="tabpanel" data-mh="log-tab">
          <div class="title h6">سجل على المنصة</div>
          <form class="content" action="{{ url('/register') }}" method="post">
          {!! csrf_field() !!}
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-group label-floating is-empty">
                  <label class="control-label">الأسم الأول</label>
                  <input class="form-control" placeholder="" name="f_name" type="text">
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-group label-floating is-empty">
                  <label class="control-label">الأسم الأخير</label>
                  <input class="form-control" placeholder="" name="l_name" type="text">
                </div>
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label">المؤهل العلمى</label>
                  <input class="form-control" placeholder="" name="edu" type="text">
                </div>
                <div class="form-group label-floating is-empty">
                  <label class="control-label">البريد الألكترونى</label>
                  <input class="form-control" placeholder="" name="email" type="email">
                </div>
                <div class="form-group label-floating is-empty">
                  <label class="control-label">كلمة المرور</label>
                  <input class="form-control" placeholder="" name="password" type="password">
                </div>
    
                <div class="form-group date-time-picker label-floating">
                  <label class="control-label">تاريخ الميلاد</label>
                  <input name="datetimepicker" name="dob" value="10/24/1984" />
                  <span class="input-group-addon">
                          <svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
                        </span>
                </div>
    
                <div class="form-group label-floating is-select">
                  <label class="control-label">الجنس</label>
                  <select class="selectpicker form-control" name="sex">
                    <option value="MA">ذكر</option>
                    <option value="FE">انثي</option>
                  </select>
                </div>
    
                <div class="remember">
                  <div class="checkbox">
                    <label>
                      <input name="optionsCheckboxes" type="checkbox">أوافق على الشروط والأحكام</label>
                  </div>
                </div>
    
                <input type="submit" value="سجل الان" class="btn btn-purple btn-lg full-width">
              </div>
            </div>
          </form>
        </div>
    
        <div class="tab-pane
        @if(session()->has('message'))
        active
        @else
        @endif
        " id="profile" role="tabpanel" data-mh="log-tab">
          <div class="title h6">الدخول إلى الحساب</div>
          <form class="content"  action="{{ route('frontend.login.post') }}" method="post">
          {!! csrf_field() !!}
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label">البريد الألكتروني</label>
                  <input class="form-control" placeholder="" type="email" name="email">
                </div>
                <div class="form-group label-floating is-empty">
                  <label class="control-label" >كلمة المرور</label>
                  <input class="form-control" name="password" placeholder="" type="password">
                </div>
    
                <div class="remember">
    
                  <div class="checkbox">
                    <label>
                      <input name="optionsCheckboxes" type="checkbox">
                      تذكرنى
                    </label>
                  </div>
                  <a href="#" class="forgot">نسيت كلمة السر</a>
                </div>
    
                <input class="btn btn-lg btn-primary full-width" value="دخول" type="submit">
    
                <div class="or"></div>
    
                <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>الدخول بالفيس بوك</a>
    
                <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fa fa-twitter" aria-hidden="true"></i>الدخول بتويتر</a>
    
    
                <p>ليس لديك حساب؟ <a href="#">سجل الآن</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!-- ... end Login-Registration Form  -->
  </div>
</div>
</div>
</div>


<!-- Section Img Scale Animation -->

<section id="facts" class="align-center pt80 pb80 section-move-bg-top img-scale-animation scrollme">
	<div class="container">
		<div class="row">
		<h2 class="heading-title mb60">حقائق عن<span class="c-primary"> مركز الغد للقيم</span></h2>
			<div class="col-xl-12 m-auto col-lg-12 col-md-12 col-sm-12 col-xs-12">
				    <div class="counter">
					  <h3 class="timer count-title count-number" data-to="45" data-speed="3000"></h3>
					   <p class="count-text ">ورشة عمل</p>
					</div>
					<div class="counter">
					  <h3 class="timer count-title count-number" data-to="103" data-speed="3000"></h3>
					   <p class="count-text ">متحدث ملهم</p>
					</div>
					<div class="counter">
					  <h3 class="timer count-title count-number" data-to="12" data-speed="3000"></h3>
					   <p class="count-text ">جهة حكومية</p>
					</div>
					<div class="counter">
					  <p class="count-text ">تعاون مع<br/> أغلب الجامعات</p>
					</div>
					<div class="counter">
					  <h3 class="timer count-title count-number" data-to="9000" data-speed="3000"></h3>
					   <p class="count-text ">شاب مشارك</p>
					</div>
					<div class="counter">
					  <h3 class="timer count-title count-number" data-to="59" data-speed="3000"></h3>
					   <p class="count-text ">تجربة شبابية</p>
					</div>
					<div class="counter">
					  <h3 class="timer count-title count-number" data-to="12000" data-speed="3000"></h3>
					   <p class="count-text ">تفاعالت مواقع<br/> التواصل الاجتماعي</p>
					</div>
					<div class="counter end">
					  <h3 class="timer count-title count-number" data-to="30" data-speed="3000"></h3>
					  <p class="count-text ">مجموعة تطوعية</p>
					</div>

			</div>
		</div>
	</div>
	<div class="content-bg-wrap">
		<div class="content-bg bg-section2"></div>
	</div>
</section>

<!-- ... end Section Img Scale Animation -->


<section id="about" class="medium-padding120">
<div class="container">
<div class="row">
<div class="col-xl-1 col-lg-1 m-auto col-md-12 col-sm-12 col-xs-12"></div>
			<div class="col-xl-5 col-lg-5 m-auto col-md-12 col-sm-12 col-xs-12">
				<div class="crumina-module crumina-heading">
					<h2 class="heading-title">مركز<span class="c-primary"> الغد للقيم</span></h2>
					<p class="heading-text">تعد القيم المحرك األساسي للسلوك ,لذا فإن التأثير فيها على مستوى األفراد و الجماعات
يتطلب أدوات ووسائل مبتكرة و يتطلب تحديد و قياس ما هو مناسب منها لكل فرد أو
منظمة تبعا لتوجهاتها و أهدافها. و من هذا المنطلق جاء تأسيس مركز الغد للقيم نهاية
عام 2015 ,و هو أحد مبادرات جمعية الغد للشباب والذي يهدف إلى تطوير المجتمع عن طريق
القيم من خالل مجموعة من البرامج و االنشطة و الخدمات التي تستهدف األفراد ضمن
مؤسسات المجتمع المختلفة.
					</p>
					<a href="{{route('frontend.about.get')}}" class="nav-link btn btn-primary btn-md-2">إقرأ المزيد</a>
				</div>
			</div>

			<div class="col-xl-5 m-auto col-lg-5 col-md-12 col-sm-12 col-xs-12"><div class="valuediv">
				<input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
	  
	  <label class="menu-open-button" for="menu-open">
	   <img src="{{asset('public')}}/svg-icons/values/value.svg" alt=""> 
	  </label>
	  <span href="#" class="menu-item"> <img src="{{asset('public')}}/svg-icons/values/v1.svg" alt=""> </span>
	  <span href="#" class="menu-item"> <img src="{{asset('public')}}/svg-icons/values/v2.svg" alt=""> </span>
	  <span href="#" class="menu-item"> <img src="{{asset('public')}}/svg-icons/values/v3.svg" alt=""> </span>
	  <span href="#" class="menu-item"> <img src="{{asset('public')}}/svg-icons/values/v4.svg" alt=""> </span>
	  <span href="#" class="menu-item"> <img src="{{asset('public')}}/svg-icons/values/v5.svg" alt=""> </span>
			</div></div>
			<div class="col-xl-1 col-lg-1 m-auto col-md-12 col-sm-12 col-xs-12"></div>
</div>
</div>
</section>


<!-- Planer Animation -->

<section id="latest" class="medium-padding120 bg-section3 background-cover planer-animation">
<div class="container">
<div class="row mb60">
  <div class="col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-xs-12">
    <div class="crumina-module crumina-heading align-center">
      <h2 class="h1 heading-title">أحدث <span class="c-primary">
          ما نشر
          </span></h2>
    </div>
  </div>
</div>

<div class="row">
  <div class="swiper-container pagination-bottom" data-show-items="3">
  
  <div class="swiper-wrapper">
  <div class="ui-block swiper-slide">

    @foreach($topics as $topic)
    <!-- Post -->
    
    <article class="hentry blog-post">
    @if($topic->media_type == "jpg")
      <div class="post-thumb">
      <img src="{{asset('public')}}/images/{{$topic->media_url}}" alt="photo">
      </div>
    @else
    <div class="post-thumb">
        <img src="{{asset('public')}}/img/post1.jpg" alt="photo">
      </div>
    @endif
      <div class="post-content">
        <a href="#" class="post-category bg-blue-light">{{$topic->title}}</a>
        <a href="#" class="h4 post-title">{{ $topic->content }}
        <div class="author-date">
        بواسطة
          <a class="h6 post__author-name fn" href="#">{{$topic->user->username}}</a>
          <div class="post__date">
            <time class="published" datetime="2017-03-24T18:18">
             {{$topic->created_at }}
            </time>
          </div>
        </div>
      </div>
    
    </article>
    
    <!-- ... end Post -->
  </div>
  <div class="ui-block swiper-slide">
@endforeach

  </div>

  </div>
    <div class="swiper-pagination"></div>
  </div>
  </div>
</div>
</div>
</section>

<!-- ... end Section Planer Animation -->

<!-- Section Call To Action Animation -->

<section class="medium-padding100 subscribe-animation scrollme bg-users">
<div class="container">
<div class="row">
  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <div class="crumina-module crumina-heading c-white custom-color">
      <h2 class="h1 heading-title">إشترك فى النشرة البريدية</h2>
    </div>

    
    <!-- Subscribe Form  -->
    
    <form class="form-inline subscribe-form" method="post">
      <div class="form-group label-floating is-empty">
        <label class="control-label">إدخل بريدك الأليكترونى</label>
        <input class="form-control bg-white" placeholder="" type="email">
      </div>
    
      <button class="btn btn-blue btn-lg">إرسل</button>
    </form>
    
    <!-- ... end Subscribe Form  -->

  </div>
</div>

<img src="{{asset('public')}}/img/paper-plane.png" alt="plane" class="plane">
</div>
</section>

<!-- ... end Section Call To Action Animation -->
<!-- Clients Block -->


<section id="partners" class="crumina-module crumina-clients">
	<div class="container">
		<div class="row">
		<div class="swiper-container pagination-bottom" data-show-items="6">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<a class="clients-item" href="#">
					<img src="{{asset('public')}}/img/partners/1.png" class="" alt="logo">
				</a>
			</div>
			<div class="swiper-slide">
				<a class="clients-item" href="#">
					<img src="{{asset('public')}}/img/partners/2.png" class="" alt="logo">
				</a>
			</div>
			<div class="swiper-slide">
				<a class="clients-item" href="#">
					<img src="{{asset('public')}}/img/partners/3.png" class="" alt="logo">
				</a>
			</div>
			<div class="swiper-slide">
				<a class="clients-item" href="#">
					<img src="{{asset('public')}}/img/partners/4.png" class="" alt="logo">
				</a>
			</div>
			<div class="swiper-slide">
				<a class="clients-item" href="#">
					<img src="{{asset('public')}}/img/partners/5.png" class="" alt="logo">
				</a>
			</div>
			<div class="swiper-slide">
				<a class="clients-item" href="#">
					<img src="{{asset('public')}}/img/partners/6.png" class="" alt="logo">
				</a>
			</div>
			<div class="swiper-slide">
				<a class="clients-item" href="#">
					<img src="{{asset('public')}}/img/partners/7.png" class="" alt="logo">
				</a>
			</div>
			<div class="swiper-slide">
				<a class="clients-item" href="#">
					<img src="{{asset('public')}}/img/partners/8.png" class="" alt="logo">
				</a>
			</div>
			<div class="swiper-slide">
				<a class="clients-item" href="#">
					<img src="{{asset('public')}}/img/partners/9.png" class="" alt="logo">
				</a>
			</div>
		</div>
		</div>
		</div>
	</div>
</section>


<!-- ... end Clients Block -->


    @stop