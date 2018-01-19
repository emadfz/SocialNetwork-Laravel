@section('header')
<!DOCTYPE html>
<html lang="ar">
<head>

	<title>مركز الغد للقيم</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public')}}/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public')}}/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public')}}/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/fonts.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/style.css">
	<!-- Main Font -->
	<script src="{{asset('public')}}/js/webfontloader.min.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>
	
	<style>
		#map .col-4-width {
    width: 100%;
}
#map .photo-album-item{
height: auto !important; }
.photo-album-item-wrap.col-4-width{
display:none;
}
#map .photo-album-item-wrap.col-4-width{
display:block;
}
	</style>

</head>
<body class="body-bg-white">
<div class="beta-version"><img src="{{asset('public')}}/img/beta-version.png" alt="Al Ghad Center Beta Version"></div>
@if(!\Auth::user())
<div class="main-header main-header-fullwidth main-header-has-header-standard">

	
	<!-- Header Standard Landing  -->
	
	<div class="header--standard header--standard-landing" id="header--standard">
		<div class="container">
			<div class="header--standard-wrap">
	
				<div class="logo-icon"><a href="href="{{route('frontend.home.get')}}""><img class="logoColored" src="{{asset('public')}}/img/logo-landing-w.png" alt="Alghad Values Center"/></a><a href="/"><img class="logoWhite" src="{{asset('public')}}/img/logo-landing.png" alt="Alghad Values Center"/></a></div>
	
				<a href="#" class="open-responsive-menu js-open-responsive-menu">
					<svg class="olymp-menu-icon"><use xlink:href="{{asset('public')}}/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
				</a>
	
				<div class="nav nav-pills nav1 header-menu">
					<div class="mCustomScrollbar">
						<ul>
							<li class="nav-item">
								<a href="{{route('frontend.home.get')}}" class="nav-link">الرئيسية</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#facts">حقائق</a>
							</li>
							<li class="nav-item">
								<a href="#about" class="nav-link">عن المركز</a>
							</li>
							<li class="nav-item">
								<a href="#latest" class="nav-link">أحدث مانشر</a>
							</li>
							<li class="nav-item">
								<a href="#partners" class="nav-link">شركاؤنا</a>
							</li>
							<li class="nav-item">
								<a href="{{route('frontend.map.get')}}" class="nav-link">خريطة القيم</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">المدونة</a>
							</li>
							<li class="nav-item">
								<a href="{{route('frontend.contact.get')}}" class="nav-link">إتصل بنا</a>
							</li>
							<li class="nav-item reg">
								<a href="#home" class="nav-link btn btn-primary btn-md-2">سجل معنـا</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ... end Header Standard Landing  -->

@else

<header class="header" id="site-header">
	<div class="logo-icon"><a  href="{{route('frontend.home2.get')}}"><img src="{{asset('public')}}/svg-icons/Logo Icon@2x.svg" alt="Alghad Youth Association"/></a></div>
	<div class="page-title">
		<h6><a href="{{route('frontend.home2.get')}}">
		    الصفحة الرئيسية
		   </a></h6>
	</div>

	<div class="header-content-wrapper">
		<form class="search-bar w-search notification-list friend-requests">
			<div class="form-group with-button">
				<input class="form-control js-user-search" placeholder="ماذا يجول فى خاطرك؟" type="text">
				<button>
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="{{asset('public')}}/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
				</button>
			</div>
		</form>

		<div class="control-block">
		<div class="network">
				<a href="{{route('frontend.map.get')}}">خريطة القيم</a>
			</div>
			<div class="submitTopic">
				<a href="{{route('frontend.addpost.get')}}" class="btn btn-primary btn-md-2">أضف موضوع<div class="ripple-container"></div></a>
			</div>
			<div class="author-page author vcard inline-items more">
				<div class="author-thumb">
					<img alt="author" src="{{asset('public')}}/img/author-page.jpg" class="avatar">
					<div class="more-dropdown more-with-triangle">
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">حسابك</h6>
							</div>

							<ul class="account-settings">
								<li>
									<a href="05-Account-Password.html">
<svg class="olymp-menu-icon"><use xlink:href="{{asset('public')}}/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
										<span>ضبط الحساب</span>
									</a>
								</li>
								<li>
									<a href="{{route('frontend.logout.get')}}">
										<svg class="olymp-logout-icon"><use xlink:href="{{asset('public')}}/svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

										<span>خروج</span>
									</a>
								</li>
							</ul>

							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">عن مركز الغد للقيم</h6>
							</div>

							<ul>
								<li>
									<a href="{{route('frontend.about.get')}}">
										<span>عن المركز</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>المدونة</span>
									</a>
								</li>
								<li>
									<a href="{{route('frontend.contact.get')}}">
										<span>إتصل بنا</span>
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<a href="03-ProfilePage.html" class="author-name fn">
					<div class="author-title">
						{{Auth::user()->name}} <svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{asset('public')}}/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
					</div>
				</a>
			</div>

		</div>
	</div>

</header>
@endif
@stop