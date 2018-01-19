@extends('layouts.master')

@section('content')

<div class="header-spacer header-spacer-small"></div>



<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
			<div class="control-block-button" style="z-index:1;">
							<div class="btn btn-control bg-primary more">
								<svg class="olymp-settings-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-settings-icon"></use></svg>
								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#" data-toggle="modal" data-target="#update-header-photo">تغيير صورة الحساب</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#update-header-photo">تغيير صورة الغلاف</a>
									</li>
									<li>
										<a href="05-Account-Password.html">ضبط الحساب</a>
									</li>
								</ul>
							</div>
						</div>
				
				<div class="top-header top-header-favorit">
					<div class="top-header-thumb">
						<img src="{{asset('public')}}/img/top-header2.jpg" alt="nature">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src="{{asset('public')}}/img/author-main2.jpg" alt="author">
							</div>
							<div class="author-content">
								<a href="03-ProfilePage.html" class="h3 author-name">{{Auth::user()->name}}</a>
								<div class="country">Dammam, KSA</div>
							</div>
						</div>
					</div>
					</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Main Header Groups -->

<div class="header-spacer"></div>
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">المعلومات الشخصية</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Personal-Info -->
					
					<ul class="widget w-personal-info item-block">
						<li>
							<span class="title">نبذة عن</span>
							<span class="text">ما فائدته ؟ هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طري</span>
						</li>
						<li>
							<span class="title">الكتب المفضلة:</span>
							<span class="text">الأخلاق والحداثة , قواعد نبوية ..خمسون قاعدة نبوية في العلم و الأخلاق و السلوك  و 	الأخلاق الإسلامية للناشئة </span>
						</li>
					</ul>
					
					<!-- .. end W-Personal-Info -->
					<!-- W-Socials -->
					
					<div class="widget w-socials">
						<h6 class="title">شبكات التواصل الأخرى</h6>
						<a href="#" class="social-item bg-facebook">
							<i class="fa fa-facebook" aria-hidden="true"></i>
							Facebook
						</a>
						<a href="#" class="social-item bg-twitter">
							<i class="fa fa-twitter" aria-hidden="true"></i>
							Twitter
						</a>
						<a href="#" class="social-item bg-dribbble">
							<i class="fa fa-dribbble" aria-hidden="true"></i>
							Dribbble
						</a>
					</div>
					
					
					<!-- ... end W-Socials -->
				</div>
			</div>
</div>

		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">إضافة موضوع جديد</h6>
				</div>
				<div class="ui-block-content">
					
					<form action="{{route('frontend.addpost.post')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}	
					<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">عنوان القيمة</label>
									<input class="form-control" type="text" placeholder="" name="title" required>
								</div>
							</div>
					
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">اختر القيمة</label>
									<select class="selectpicker form-control" name="value" required>
										<option disabled selected value> -- اختر القيمة -- </option>

										<option value="الأمانة">الأمانة</option>
										<option value="الصدق">الصدق</option>
										<option value="الفضل">الفضل</option>
										<option value="العدل">العدل</option>
										<option value="القناعة">القناعة</option>
									</select>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">نوع المادة</label>
									<select class="selectpicker form-control" name="post_type" required>
										<option disabled selected value> -- اختر نوع المادة -- </option>
										<option value="مسموع">مسموع</option>
										<option value="مقروء">مقروء</option>
										<option value="مرئي">مرئي</option>
 									</select>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">المدينة</label>
									<select class="selectpicker form-control" name="location" required>
										<option disabled selected value> -- اختر مدينة -- </option>
										<option value="24.774265,46.738586,الرياض">الرياض</option>
										<option value="21.2854,39.2376,جدة">جدة</option>
										<option value="26.399250,49.984360,الدمام">الدمام</option>
										<option value="21.422510,39.826168,مكة">مكة</option>
										<option value="21.437273,40.512714,الطائف">الطائف</option>
										<option value="24.186848,38.026428,ينبع">ينبع</option>
										<option value="26.094088,43.973454,عنيزة">عنيزة</option>
										<option value="30.983334,41.016666,عرعر">عرعر</option>
										<option value="28.446959,45.948944,حفر الباطن">حفر الباطن</option>
										<option value="24.507143,44.408798,الدوادمى">الدوادمى</option>
						 
 									</select>
								</div>
							</div>
					
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">الموضوع</label>
									<textarea class="form-control" name="content" style="height: 240px"></textarea>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">الملف</label>
									<input type="file" name="file" class="form-control" style="padding-top: 50px;">
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">الصورة الرمزية</label>
									<input type="file" name="thumbnail" class="form-control" style="padding-top: 50px;">
								</div>
							</div>
					
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<a href="#" class="btn btn-secondary btn-lg full-width">الغاء الموضوع</a>
							</div>
					
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<input  class="btn btn-blue btn-lg full-width"  value="اضف موضوع"  type="submit" >
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>


<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo">
	<div class="modal-dialog ui-block window-popup update-header-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">جدد صورة الغلاف</h6>
		</div>

		<a href="#" class="upload-photo-item">
			<svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

			<h6>قم برفع الصورة</h6>
			<span>إختر من الجهاز</span>
		</a>

		<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

			<h6>إختر من صورى</h6>
			<span>إختر من صورك المرفوعة سابفاً</span>
		</a>
	</div>
</div>


<!-- ... end Window-popup Update Header Photo -->



<div class="header-spacer"></div>
    @stop