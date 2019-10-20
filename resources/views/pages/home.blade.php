@extends('index')
@section('title_and_meta')

@endsection
@section('content')

<section class="intro-section" id="home">
    <div class="background-img full-width-image" style="background-image: linear-gradient(0deg, rgba(33,34,31,1) 0%, rgba(33,34,31,0) 80%, rgba(33,34,31,0) 100%), url(/img/Group 151.jpg);">
        <div class="container">
            <div class="intro-section__content grid-2">
                <div class="intro-section__welcome">
                    <h2 class="intro-heading title rellax">Welcome</h2>
                    <p class="paragraph-primary intro-section__welcome--msg">
                    Welcome to SwissP<span>o</span>ur, manufacturer of automatic machines for the foundries.
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
                <!-- <h3 class="title" data-aos="fade-up">About<br>swissPour</h3> -->
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

<section id="activities" class="activitites_editable">
    <div class="container">
        <h2>Activities</h2>
        <p>SwissPour SA develops, manufactures and commissions automatic pouring machines for its customers all over the world. In cooperation with its partners and suppliers, SwissPour SA offers high quality customized solutions including new pouring machines, peripheral equipment, upgrades / upgrades of existing lines and spare parts service.</p>
        <div class="row">
            <div ng-if="includes.global" class="owl-carousel owl-theme testimonial-carousel">
                <div class="activities_card_slide" ng-repeat="testimonials in includes.global.many[0]['activities']">
                    <img ng-src="/img/manjakos/<%testimonials['collections']['image']%>">
                    <a href="#<%testimonials['collections']['id_section']['en']%>"><h6 class="title"><%testimonials['collections']['title']['en']%></h6></a>
                    <!-- <p ng-bind-html="testimonials['collections']['description']['en']"></p> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section id="products" class="products_section">
    <div class="container">
        <h4>Products</h4>
        <div class="row">
            <div class="col-md-12" id="machines">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title" data-aos="fade-up" data-aos-delay="300" style="margin-bottom: 15px;">Machines</h3>
                        <p>SwissPour SA studies your request and offers you the<br> solution adapted to your needs in terms of design, <br>capacity and produc-tivity.</p>
                        <a href="img/HPOvw_EN.pdf" target="_blank">
                            <div class="dw">
                                <a class="dw-link" href="img/HPOvw_EN.pdf" target="_blank">Download PDF
                                </a>
                                <a href="img/HPOvw_EN.pdf">
                                    <div class="dw-icon"></div>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <img data-aos="fade-up" data-aos-delay="300" src="img/imag (6).jpg" alt="" style="width: 100%;" srcset="">
                    </div>
                </div>
                <!-- <p class="heading-paragraph paragraph-primary"  data-aos="fade-up" data-aos-delay="450">
					SwissPour SA is a Swiss company based in Moutier that aims to take over and continue the production of the automatic pouring machines created in Switzerland more than 30 years ago.
				</p>
				<a class="btn btn-black" href="mailto:info@swisspour.com">Contact</a>  -->
            </div>
            <div class="col-md-12">
                <div class="pdf_list">
                    <div class="download_box" data-aos="fade-up" data-aos-delay="200">
                        <img class="img-fluid download-box-img" src="img/imag (4).jpg">
                    </div>
                    <div class="download_box" data-aos="fade-up" data-aos-delay="300">
                        <img class="img-fluid download-box-img" src="img/imag (5).jpg">
                        <div class="dw">
                            <!-- <a class="dw-link" href="img/HPOvw_EN.pdf" target="_blank">Download PDF</a>
							<a href="img/HPOvw_EN.pdf" target="_blank">
								<div class="dw-icon"></div>
							</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="peripheral_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="peripheral">
                <img data-aos="fade-up" data-aos-delay="300" src="img/imag (1).jpg" alt="" srcset="">
            </div>
            <div class="col-md-6 text_add">
                <h3 data-aos="fade-up" data-aos-delay="400">Peripheral<br>Equipments</h3>
                <ul data-aos="fade-up" data-aos-delay="500">
                    <li>With integrated weighing system</li>
                    <li>With special injection nozzle for inoculant accleration</li>
                    <li>With monitoring of level, pressure and flow</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 desktop-d-n">
                <img data-aos="fade-up" data-aos-delay="300" src="img/imag (3).jpg" alt="" srcset="">
            </div>
            <div class="col-md-6 text_add" id="upgrade">
                <h3 data-aos="fade-up" data-aos-delay="400">Upgrade/Update <br>
                    Of Existing Lines</h3>
                <ul data-aos="fade-up" data-aos-delay="500">
                    <li>Our modular solutions can also meet the evo-lution needs<br> with a partial or complete upgrade of your casting<br> equipment</li>
                </ul>
            </div>
            <div class="col-md-6 mobile-d-n">
                <img data-aos="fade-up" data-aos-delay="300" src="img/imag (3).jpg" alt="" srcset="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" id="spare">
                <img data-aos="fade-up" data-aos-delay="300" src="img/imag (2).jpg" alt="" srcset="">
            </div>
            <div class="col-md-6 text_add">
                <h3 data-aos="fade-up" data-aos-delay="400">Spare Parts <br>Service</h3>
                <ul data-aos="fade-up" data-aos-delay="500">
                    <li>We provide a long spare parts service on all our achievements. </li>
                </ul>
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
                <a href="https://www.easysa.com/en/" target="_blank">
                    <div class="partner_holder" data-aos="fade-up" data-aos-delay="400">
                        <img class="partner-img" src="img/homelogo.svg">
                        <p class="partner-desc paragraph-primary">Electronics and software</p>
                </a>
            </div>
            <div class="partner_holder" data-aos="fade-up" data-aos-delay="400">
                <img class="partner-img" src="img/Hubo Engineering Gmbh.svg">
                <p class="partner-desc paragraph-primary">Mechanics and foundry technology </p>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="contacts-section" id="contact">
    <div class="container">
        <h2>Contact us</h2>
        <div class="row">
            <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="management_sales" data-aos="fade-up" data-aos-delay="300">
                        <h3>Management</h3>
                        <div class="info_holder" ng-repeat="contact1 in includes.global.many[1]['contacts']">
                            <h4 class="title"><%contact1['collections']['title']['en']%></h4>
                            <p ng-bind-html="contact1['collections']['info']['en']"></p>
                            <a href="">test</a>
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
            </div></div>
            <div class="col-md-6" id="map" style="height: 700px;"></div>
        </div>
    </div>
</section>
<script>
    function initMap() {
        var e = new google.maps.Map(document.getElementById("map"), { 
            zoom: 16,
            scrollwheel: !1,
            center: {
                lat: 47.275942,
                lng: 7.366999
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
                lat: 47.275942,
                lng: 7.366999
            },
            map: e,
            icon: "img/Group 152.png"
        })
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6V1PFtdP3xYfm9KQuKR618IS28g50FNY&callback=initMap">
</script>

@endsection