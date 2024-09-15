<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Elminda Construction</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include 'header_link.php'; ?>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <?php include 'header_style.php'; ?>
        <!-- End Header Style -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(images/bg/5.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">CONTACT</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">-</span>
                                  <span class="breadcrumb-item active">Contact</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Address -->
        <section class="htc__contact__area bg__white ptb--150">
            <div class="container">
                <div class="row pb--100">
                    <div class="col-md-12">
                        <div class="htc__contact__inner">
                            <h2 class="title__line--5">CONTACT INFORMATION</h2>
                            <p>For any questions, feedback, or inquiries, please reach out to us through the contact information provided above. 
							Our team at Elminda Construction is dedicated to assisting you with your
							construction needs, whether it's a new project, renovation, or maintenance services.<br>
							We look forward to hearing from you and working together on your next construction project.</p>
                        </div>
                        <div class="htc__address__container">
                            <!-- Start Single Address -->
                            <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="zmdi zmdi-pin"></i>
                                </div>
                                <div class="ct__details">
                                    <p>Metebaber Building, Togo Street <br> Megenagna, Addis Ababa, Ethiopia</p>
                                </div>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="ct__details">
                                    <p><a href="tel:+251991215486">+251991215486</a></p>
                                    <p><a href="tel:+251912358639">+251912358639</a></p>
                                </div>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="ct__details">
                                    <p><a href="#">info@elminda-construction.com</a></p>
                                    <p><a href="#">www.elminda-construction.com</a></p>
                                </div>
                            </div>
                            <!-- End Single Address -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="htc__google__map">
                            <h2 class="title__line--5">WHERE WE LOCATED</h2>
                            <div class="map__contacts">
                                <div id="googleMap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="htc__contact__form__wrap">
                            <h2 class="title__line--5">SEND US A MESSAGE</h2>
                            <div class="contact-form-wrap">
                                <form id="contact-form" action="#" method="post">
                                    <div class="single-contact-inner">
                                        <div class="single-contact-form">
                                            <div class="contact-box name">
                                                <span>Your Name*</span>
                                                <input type="text" name="name">
                                            </div>
                                            <div class="contact-box email">
                                                <span>Your Email*</span>
                                                <input type="email" name="email">
                                            </div>
                                            <div class="contact-box subject">
                                                <span>Subject*</span>
                                                <input type="text" name="subject">
                                            </div>
                                        </div>
                                        <div class="single-contact-form">
                                            <div class="contact-box message">
                                                <span>Message*</span>
                                                <textarea name="message"></textarea>
                                            </div>
                                            <div class="contact-btn">
                                                <button type="submit" class="htc__btn btn--theme">SEND NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Address -->
          <!-- Start Newsletter Area -->
        <?php include 'newsletter_area.php';?>
        <!-- Start Contact Address -->
         <?php include 'contact_area.php'; ?>
        <!-- End Contact Address -->
        <!-- Start Footer Area -->
        <?php include 'footer_area.php'; ?>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(9.02021, 38.801103), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                 styles: 
[
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    }
]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(9.02021, 38.801103),
                map: map,
                title: 'Construction!',
                icon: 'images/icons/map.png',
                animation:google.maps.Animation.BOUNCE

            });
        }
    </script>

    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>



</html>