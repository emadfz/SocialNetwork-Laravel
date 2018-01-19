@extends('layouts.master')
@section('content')

<!-- ... end Header-BP -->
<div class="stunning-header bg-primary-opacity">
	<div class="header-spacer--standard"></div>

	<div class="stunning-header-content">
		<h1 class="stunning-header-title">خريطة القيم</h1>
	</div>

	<div class="content-bg-wrap">
		<div class="content-bg stunning-header-bg1"></div>
	</div>
</div>

<!-- End Stunning header -->



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



<section class="mt-0">
	<div class="section">
		<div id="map" style="height: 820px"></div>
		<script>
			var map;

			function initMap() {

				var myLatLng = {lat: 24.72, lng: 46.54};
				var myLatLng2 = {lat: 24, lng: 46.20};
				map = new google.maps.Map(document.getElementById('map'), {
					center: myLatLng,
					zoom: 10,

					styles: [
						{ "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" } ] },
						{ "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] },
						{ "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] },
						{ "elementType": "labels.text.stroke", "stylers": [ { "color": "#f5f5f5" } ] },
						{ "featureType": "administrative.land_parcel", "elementType": "labels.text.fill", "stylers": [ { "color": "#bdbdbd" } ] },
						{ "featureType": "poi", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] },
						{ "featureType": "poi", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] },
						{ "featureType": "poi.park", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] },
						{ "featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] },
						{ "featureType": "road", "elementType": "geometry", "stylers": [ { "color": "#ffffff" } ] },
						{ "featureType": "road.arterial", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] },
						{ "featureType": "road.highway", "elementType": "geometry", "stylers": [ { "color": "#dadada" } ] },
						{ "featureType": "road.highway", "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] },
						{ "featureType": "road.local", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] },
						{ "featureType": "transit.line", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] },
						{ "featureType": "transit.station", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] },
						{ "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#c9c9c9" } ] },
						{ "featureType": "water", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }
					],

					scrollwheel: false//set to true to enable mouse scrolling while inside the map area
				});
                @foreach($topics as $key=>$topic) 
				var contentString{{$key}} = document.getElementById('article{{$key}}');
				//Set window width + content
				var infowindow{{$key}} = new google.maps.InfoWindow({
					content: contentString{{$key}}
				});
				var marker{{$key}} = new google.maps.Marker({
					position: {lat: {{$topic->lat}}+Math.random()*0.1, lng: {{$topic->long}}+Math.random()*0.1 },
					map: map,
					icon: {
						url: "{{asset('public')}}/img/map-marker.png",
						scaledSize: new google.maps.Size(36, 54)
					}

				});
                @endforeach
	
                @foreach($topics as $key=>$topic) 
		google.maps.event.addListener(marker{{$key}}, 'click', function() {
			infowindow{{$key}}.open(map,marker{{$key}});
		});
        @endforeach
			}


		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBESxStZOWN9aMvTdR3Nov66v6TXxpRZMM&callback=initMap"
				async defer>
		</script>
	</div>
</section>

<!-- Article pop-up -->
@foreach($topics as $key=>$topic) 
	<div class="photo-album-item-wrap col-4-width" id="article{{$key}}">
				<div class="photo-album-item" data-mh="album-item">
					<div class="photo-item">
						@if($topic->media_type == "jpg")
 								<img src=" {{asset('public').'/images/'.$topic->media_url}}" alt="photo">
 						@elseif($topic->thumbnail != Null)
 								<img src=" {{asset('public').'/images/'.$topic->thumbnail}}" alt="photo">

						@elseif($topic->post_type == "مقروء")

 								<img src="{{asset('public')}}/img/Content.png" alt="photo">
 						@elseif($topic->post_type == "مسموع")

 								<img src="{{asset('public')}}/img/Volume.png" alt="photo">

						@else

 								<img src="{{asset('public')}}/img/Media.png" alt="photo">
 						@endif
 						<div class="overlay overlay-dark"></div>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('public')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
						<a href="#" class="post-add-icon">
							<svg class="olymp-heart-icon"><use xlink:href="{{asset('public')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>324</span>
						</a>
						<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
					</div>
				
					<div class="content">
						<a href="#" class="title h5">{{$topic->title}}</a>
						<span class="sub-title">{{$topic->created_at}}</span>
					</div>
				
				</div>

            </div>
            @endforeach

@stop