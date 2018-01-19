
@extends('layouts.master')


@section('content')

<div class="header-spacer header-spacer-small"></div>
<div class="header-spacer header-spacer-small"></div>
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block responsive-flex1200">
				<div class="ui-block-title">
					<div class="w-select">
						<div class="title">تصفية بي:</div>
						<fieldset class="form-group">
							<select class="selectpicker form-control">
								<option value="NU">كل القيم</option>
								<option value="NU">الأمانة</option>
								<option value="NU">الصدق</option>
								<option value="NU">الفضل</option>
								<option value="NU">العدل</option>
								<option value="NU">القناعة</option>
							</select>
						</fieldset>
					</div>
					<div class="w-select">
						<fieldset class="form-group">
							<select class="selectpicker form-control">
								<option value="NU">كل المدن</option>
								<option value="NU">الرياض</option>
								<option value="NU">الدمام</option>
								<option value="NU">مكة</option>
								<option value="NU">جدة</option>
								<option value="NU">المدينة</option>
							</select>
						</fieldset>
					</div>
					<div class="w-select">
						<fieldset class="form-group">
							<select class="selectpicker form-control">
								<option value="NU">جميع المواد</option>
								<option value="NU">مسموع</option>
								<option value="NU">مقروء</option>
								<option value="NU">مرئي</option>
								<option value="NU">تفاعلي</option>
							</select>
						</fieldset>
					</div>
					<form class="w-search">
						<div class="form-group with-button">
							<input class="form-control" type="text" placeholder="البحث باسم المعزّز ...">
							<button>
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="{{asset('public')}}/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
							</button>
						</div>
					</form>
					<a href="#" data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">تصفية</a>

				</div>
			</div>
		</div>
	</div>
</div>
<section class="blog-post-wrap">
	<div class="container">
		<div class="row">

		@foreach($topics as $topic)
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="ui-block">

					
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
							<a href="#" class="post-category bg-blue-light">{{$topic->value}}</a>
							<a href="#" class="h4 post-title"> {{$topic->title}}</a>
							<p>ما فائدته ؟ هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طري.</p>
					
							<div class="author-date">
							بواسطة
								<a class="h6 post__author-name fn" href="#">{{$topic->user->username}}</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
									{{$topic->created_at}}
									</time>
								</div>
							</div>
					
							<!-- <div class="post-additional-info inline-items">
					
								<div class="names-people-likes">
									26
								</div>
					
							</div> -->
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
		@endforeach
		
		<!-- Pagination -->
		
		<nav aria-label="Page navigation">
			{!! $topics->render() !!}
		</nav>
		
		<!-- ... end Pagination -->
	</div>
	</section>


<div class="header-spacer"></div>
    @stop