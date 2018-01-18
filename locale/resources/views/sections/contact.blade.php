@extends('layouts.master')
@section('content')
<div class="stunning-header bg-primary-opacity">
	<div class="header-spacer--standard"></div>

	<div class="stunning-header-content">
		<h1 class="stunning-header-title">
            إتصل بنا
		    </h1>
	</div>

	<div class="content-bg-wrap">
		<div class="content-bg stunning-header-bg1"></div>
	</div>
</div>

<section class="mt-0">
	<div class="section">
		<div id="map" style="height: 480px"></div>
		<script>
			var map;

			function initMap() {

				var myLatLng = {lat: 24.72, lng: 46.54};

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

				var marker = new google.maps.Marker({
					position: myLatLng,
					map: map,
					icon: {
						url: "{{asset('public')}}/img/map-marker.png",
						scaledSize: new google.maps.Size(36, 54)
					}

				});

			}


		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBESxStZOWN9aMvTdR3Nov66v6TXxpRZMM&callback=initMap"
				async defer>
		</script>
	</div>
</section>


<section class="medium-padding120">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">

				
				<!-- Contact Item -->
				
				<div class="contact-item-wrap">
					<h3 class="contact-title">مركز الغد للقيم</h3>
					<div class="contact-item">
						<a href="#">254 W58th St, New York NY 10001, USA</a>
					</div>
					<div class="contact-item">
						<h6 class="sub-title">تساؤلات عامة:</h6>
						<a href="mailto:">hqinquiries@sas-itc.net</a>
					</div>
				</div>
				
				<!-- ... end Contact Item -->
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<form class="contact-form">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">الأسم الأول</label>
									<input class="form-control" placeholder="" type="text" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">الأسم الأخير</label>
									<input class="form-control" placeholder="" type="text" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">البريد الإلكتروني</label>
									<input class="form-control" placeholder="" type="email" value="">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">رقم الجوال</label>
									<input class="form-control" placeholder="" type="email" value="">
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="form-group label-floating">
									<label class="control-label">الدرجة العلمية</label>
									<input class="form-control" placeholder="" type="email" value="">
								</div>
								<div class="form-group label-floating">
									<label class="control-label">نوع الإستفسار</label>
									<input class="form-control" placeholder="" type="email" value="">
								</div>
								<div class="form-group label-floating is-empty">
									<label class="control-label">رسائلك</label>
									<textarea class="form-control" placeholder=""></textarea>
								</div>
				
								<button class="btn btn-purple btn-lg full-width">أرسل</button>
							</div>
						</div>
				</form>
			</div>
</div>
	</div>
</section>
<!-- Footer Full Width -->


<!-- Footer Start -->
    @stop