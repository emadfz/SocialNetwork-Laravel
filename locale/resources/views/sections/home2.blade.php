
@extends('layouts.master')


@section('content')

<div class="header-spacer header-spacer-small"></div>
<div class="header-spacer header-spacer-small"></div>
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block responsive-flex1200">
				<form action="{{route('frontend.search.get')}}" method="get">

				<div class="ui-block-title">


					<div class="w-select">
						<div class="title">تصفية بي:</div>
						<fieldset class="form-group">
							<select class="selectpicker form-control" name="value">
								<option value="all">كل القيم</option>
								<option value="الأمانة">الأمانة</option>
								<option value="الصدق">الصدق</option>
								<option value="الفضل">الفضل</option>
								<option value="العدل">العدل</option>
								<option value="القناعة">القناعة</option>
							</select>
						</fieldset>
					</div>
					<div class="w-select">
						<fieldset class="form-group">
							<select class="selectpicker form-control" name="location">
								<option value="all">جميع المدن</option>
								<option value="الرياض">الرياض</option>
								<option value="جدة">جدة</option>
								<option value="الدمام">الدمام</option>
								<option value="مكة">مكة</option>
								<option value="الطائف">الطائف</option>
								<option value="ينبع">ينبع</option>
								<option value="عنيزة">عنيزة</option>
								<option value="عرعر">عرعر</option>
								<option value="حفر الباطن">حفر الباطن</option>
								<option value="الدوادمى">الدوادمى</option>
							</select>
						</fieldset>
					</div>
					<div class="w-select">
						<fieldset class="form-group">
							<select class="selectpicker form-control" name="type">
								<option value="all">جميع المواد</option>
								<option value="مسموع">مسموع</option>
								<option value="مقروء">مقروء</option>
								<option value="مرئي">مرئي</option>
 							</select>
						</fieldset>
					</div>
 						<div class="form-group with-button">
							<input class="form-control" type="text" name="user" placeholder="البحث باسم المعزّز ...">
							<button>
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="{{asset('public')}}/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
							</button>
						</div>
 					<input   value ="تصفية" type="submit" data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">
 				</div>
				</form>
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
							<img src=" {{asset('public').'/images/'.$topic->media_url}}" alt="photo">
						</div>
						@elseif($topic->thumbnail != Null)
							<div class="post-thumb">
								<img src=" {{asset('public').'/images/'.$topic->thumbnail}}" alt="photo">
							</div>

						@elseif($topic->post_type == "مقروء")
						
						<div class="post-thumb">
						<img src="{{asset('public')}}/img/Content.png" alt="photo">
						</div>
						@elseif($topic->post_type == "مسموع")

							<div class="post-thumb">
								<img src="{{asset('public')}}/img/Volume.png" alt="photo">
							</div>
						@else

							<div class="post-thumb">
								<img src="{{asset('public')}}/img/Media.png" alt="photo">
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