@extends('index')
@section('title_and_meta')

@endsection
@section('content')

<section class="intro-section" id="home">
	<div class="background-img full-width-image" style="background-image: linear-gradient(0deg, rgba(33,34,31,1) 0%, rgba(33,34,31,0) 80%, rgba(33,34,31,0) 100%), url(/img/Group 151.jpg);">
		<div class="container">
			<div class="intro-section__content grid-2">
				<div class="intro-section__welcome">
					<h2 class="intro-heading title rellax">Welcome to <br>SwissPour</h2>
					<p class="paragraph-primary intro-section__welcome--msg">
						{!!$one['cover']['collections']['description']['en']!!}
					</p>
				</div>
				<div class="intro-section__buttons">
					<div class="intro-button"><a href="img/HPOvw_EN.pdf" target="_blank" class="btn btn-transp">Product brochure</a></div>
					<div class="intro-button"><a href="mailto:info@swisspour.com" class="btn btn-transp">Countact us</a></div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="about" class="about-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3 class="title" data-aos="fade-up">About<br>swissPour</h3>
				<div class="text-center-tab-port" data-aos="fade-up"><a href="#"><img class="logo" src="/img/logo.svg" alt="logo"></a></div>
			</div>
			<div class="col-md-4">
				<p class="about-paragraph paragraph-primary" data-aos="fade-up" data-aos-delay="300">
					SwissPour SA is a Swiss company based in Moutier that aims to take over and continue the production of the automatic pouring machines created in Switzerland more than 30 years ago.
				</p>
			</div>
			<div class="col-md-4">
				<p class="about-paragraph paragraph-primary" data-aos="fade-up" data-aos-delay="400">
					SwissPour SA is still fortunate to benefit from the experience and expertise of the latest players in this adventure to offer solutions that combine the basic needs of foundries with the requirements of today's modern world.
				</p>
			</div>
		</div>
	</div>
</section>


<section id="products" class="activitites_editable">
	<div class="container">
		<div class="row">
			<div ng-if="includes.global" class="owl-carousel owl-theme testimonial-carousel">
				<div class="activities_card_slide" ng-repeat="testimonials in includes.global.many[0]['activities']">
					<img ng-src="/img/manjakos/<%testimonials['collections']['image']%>">
					<h6 class="title"><%testimonials['collections']['title']['en']%></h6>
					<p ng-bind-html="testimonials['collections']['description']['en']"></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="products" class="products_section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3 class="title" data-aos="fade-up" data-aos-delay="300">Products</h3>
				<p class="paragraph-primary below-title" data-aos="fade-up" data-aos-delay="400">New Machines</p>

				<p class="heading-paragraph paragraph-primary"  data-aos="fade-up" data-aos-delay="450">
					SwissPour SA is a Swiss company based in Moutier that aims to take over and continue the production of the automatic pouring machines created in Switzerland more than 30 years ago.
				</p>

				<a class="btn btn-black" href="mailto:info@swisspour.com">Contact</a> 
			</div>
			<div class="col-md-9">
				<div class="pdf_list">
					<div class="download_box" data-aos="fade-left" data-aos-delay="200">
						<img class="img-fluid download-box-img" src="img/HPOvw_EN_Page_1.jpg">
						<div class="dw">
							<a class="dw-link" href="img/HPOvw_EN.pdf" target="_blank">Download PDF</a>
							<a href="img/HPOvw_EN.pdf" target="_blank">
								<div class="dw-icon"></div>
							</a>
						</div>
					</div>
					<div class="download_box" data-aos="fade-left" data-aos-delay="300">
						<img class="img-fluid download-box-img" src="img/HPOvw_EN_Page_2.jpg">
						<div class="dw">
							<a class="dw-link" href="img/HPOvw_EN.pdf" target="_blank">Download PDF</a>
							<a href="img/HPOvw_EN.pdf" target="_blank">
								<div class="dw-icon"></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="partners" class="partners_section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3 class="title" data-aos="fade-up" data-aos-delay="300">Our partners</h3>
			</div>
			<div class="col-md-9">
				<div class="partner_holder" data-aos="fade-up" data-aos-delay="400">
					<img class="partner-img" src="img/homelogo.svg">
					<p class="partner-desc paragraph-primary">Electronics and software</p>
				</div>
				<div class="partner_holder" data-aos="fade-up" data-aos-delay="400">
					<img class="partner-img" src="img/Hubo Engineering Gmbh.svg">
					<p class="partner-desc paragraph-primary">Mechanics and foundry technology </p>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="map" style="height: 500px;"></div>
<section id="contact" class="contacts-section">
	<div class="container">
		<h2>Contact us</h2>
		<div class="row">
			<div class="col-md-6">
				<div class="management_sales" data-aos="fade-up" data-aos-delay="300">
					<h3>Management</h3>
					<div class="info_holder" ng-repeat="contact1 in includes.global.many[1]['contacts']">
						<h4 class="title"><%contact1['collections']['title']['en']%></h4>
						<p ng-bind-html="contact1['collections']['info']['en']"></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="management_sales" data-aos="fade-up" data-aos-delay="400">
					<h3>Sales</h3>
					<div class="info_holder" ng-repeat="contact1 in includes.global.many[2]['s_contacts']">
						<h4 class="title"><%contact1['collections']['title']['en']%></h4>
						<p ng-bind-html="contact1['collections']['contact_s']['en']"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
        function initMap() {
            var e = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                scrollwheel: !1,
                center: {
                    lat: 25.0771753,
                    lng: 55.1496346
                },
                styles: [{
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{
                        color: "#e9e9e9"
                    }, {
                        lightness: 17
                    }]
                }, {
                    featureType: "landscape",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f5f5f5"
                    }, {
                        lightness: 20
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 17
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.stroke",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 29
                    }, {
                        weight: .2
                    }]
                }, {
                    featureType: "road.arterial",
                    elementType: "geometry",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 18
                    }]
                }, {
                    featureType: "road.local",
                    elementType: "geometry",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 16
                    }]
                }, {
                    featureType: "poi",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f5f5f5"
                    }, {
                        lightness: 21
                    }]
                }, {
                    featureType: "poi.park",
                    elementType: "geometry",
                    stylers: [{
                        color: "#dedede"
                    }, {
                        lightness: 21
                    }]
                }, {
                    elementType: "labels.text.stroke",
                    stylers: [{
                        visibility: "on"
                    }, {
                        color: "#ffffff"
                    }, {
                        lightness: 16
                    }]
                }, {
                    elementType: "labels.text.fill",
                    stylers: [{
                        saturation: 36
                    }, {
                        color: "#333333"
                    }, {
                        lightness: 40
                    }]
                }, {
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "transit",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f2f2f2"
                    }, {
                        lightness: 19
                    }]
                }, {
                    featureType: "administrative",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#fefefe"
                    }, {
                        lightness: 20
                    }]
                }, {
                    featureType: "administrative",
                    elementType: "geometry.stroke",
                    stylers: [{
                        color: "#fefefe"
                    }, {
                        lightness: 17
                    }, {
                        weight: 1.2
                    }]
                }]
            });
            new google.maps.Marker({
                position: {
                    lat: 25.0771753,
                    lng: 55.1496346
                },
                map: e,
                icon: "img/Group 703.png"
            })
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6V1PFtdP3xYfm9KQuKR618IS28g50FNY&callback=initMap">
	</script>
	
@endsection