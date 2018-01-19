@extends('layouts.master')
@section('content')

<!-- Slider -->

<section class="container" style="background-color: #0b8081; max-width:100%;">
     <div class="header-spacer"></div>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-10 col-sm-12 col-xs-12 pt120 pb120 m-auto">
            <div class="landing-content">
                <h1>عن المركز</h1>
                <p>هى أول منصة إلكترونية لبناء وتفعيل القيم, تستهدف هذه المنصة إلى استقطاب المعلمين والتربويين وذوي الأختصاص فى مجال القيم هى أول منصة إلكترونية لبناء وتفعيل القيم, تستهدف هذه المنصة إلى استقطاب المعلمين والتربويين وذوي الأختصاص فى مجال القيم</p>
            </div>
        </div>
    </div>
</section>
<!-- End Slider -->

<!-- About -->
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
					</div>
			</div>

			<div class="col-xl-5 m-auto col-lg-5 col-md-12 col-sm-12 col-xs-12">
				<input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
	  
	  <label class="menu-open-button" for="menu-open">
	   <img src="{{asset('public')}}/svg-icons/values/value.svg" alt=""> 
	  </label>
	  <span href="#" class="menu-item"> <img src="{{asset('public')}}/svg-icons/values/v1.svg" alt=""> </span>
	  <span href="#" class="menu-item"> <img src="{{asset('public')}}/svg-icons/values/v2.svg" alt=""> </span>
	  <span href="#" class="menu-item"> <img src="{{asset('public')}}/svg-icons/values/v3.svg" alt=""> </span>
	  <span href="#" class="menu-item"> <img src="{{asset('public')}}/svg-icons/values/v4.svg" alt=""> </span>
	  <span href="#" class="menu-item"> <img src="{{asset('public')}}/svg-icons/values/v5.svg" alt=""> </span>
			</div>
			<div class="col-xl-1 col-lg-1 m-auto col-md-12 col-sm-12 col-xs-12"></div>
</div>
</div>
</section>
<!-- End About -->


<!-- Facts -->

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

<!-- ... End Facts -->


    <!-- Cards Section -->

    <section class="container pb80">
        <div class="row">
            <div class="col-xl-4 ml-auto col-lg-6 col-md-12 col-sm-12 col-xs-12 card1">
                <span class="col-md-12 o-img"><img src="{{asset('public')}}/img/about/vision.png" alt="vision"></span>
                <div class="card-text">
                    <h3>رؤية المنتدى</h3>
                    <p>ان يكون المنتدى محركاً رئيسياً في تهيئة بيئة مناسبة ومحفزة للشباب السعودي , ترعى قضاياهم , و تساهم التنمية المستدامة بالمملكة</p>
                </div>
            </div>
            <div class="col-xl-4 ml-auto col-lg-6 col-md-12 col-sm-12 col-xs-12 card2">
                <span class="o-img"><img src="{{asset('public')}}/img/about/why.png" alt="why"></span>
                <div class="card-text">
                    <h3>لماذا نهتم بالقيم؟</h3>
                    <p>رفاهية أفراد المجتمع تتأثر باالحتياجات . وفهمها يلعب دورا هاما في بناء مجتمع مسالمومنسجم وناجح. قيمهم المختارة هي انعكاس الحتياجهم و هي الدافع التخاذ قراراتهم</p>
                </div>
            </div>
            <div class="col-xl-4 ml-auto col-lg-6 col-md-12 col-sm-12 col-xs-12 card3">
                <span class="o-img"><img src="{{asset('public')}}/img/about/goal.png" alt="goal"></span>
                <div class="card-text">
                    <h3>مهام واختصاصات المنتدى</h3>
                    <p>تسليط الضوء على اهم القضايا والتحديات التي تواجه الشباب السعودي وتشجيع الشباب عبر ابراز المبدعين من الشباب ليكونوا قدوة صالحة لغيرهم</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Cards Section -->


    <!-- Green Section -->

    <section class="green-bg">
        <div>
            <h4>ان يكون المنتدى محركاً رئيسياً في تهيئة بيئة مناسبة ومحفزة للشباب السعودي , ترعى قضاياهم , و تساهم التنمية المستدامة بالمملكة</h4>
        </div>
    </section>

    <!-- End of Green Section -->

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