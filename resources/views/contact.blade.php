@extends('layouts.content')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Multi Profile, Contact Page</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Multi Profile
        http://www.templatemo.com/preview/templatemo_457_multi_profile
        -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="templatemo-container">
        <!-- header image -->
        <div class="header-img-2">
        </div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase">Contact</h2>
                            <img src="Asset/img/elektronik.jpg" alt="Welcome divider" class="welcome-divider-lines-img">
                            <p class="welcome-description">Pada halaman website ini digunakan untuk mengetahui kontak kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome message -->
        <!-- main content -->
        <section class="templatemo-container">
            <div class="container">
                <div class="row margin-bottom-30">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Contact</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">ALPHA - GILANG </p>
                    </div> <!-- col-lg-12 -->
                </div> <!-- row -->
                <div class="row margin-bottom-30">
                    <div class="col-lg-6 col-md-6 contact-left">
                        <h3 class="section-title-2 text-uppercase font-weight-300"><b>Our</b> <span class="blue-text">Information</span></h3>
                        <p class="margin-bottom-30">Untuk informasi lebih lanjut mengenai produk yang telah kami hadirkan bisa menghubungi pada tulisan yang tertera dibawah ini.</p>
                        <div class="contact-point">
                            <i class="fa fa-map-marker fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700">Address</b>
                                <p class="contact-point-detail">Cyber Mall Lantai Dasar GF - 39 ( sebelahnya eskalator naik, Jl. Raya Langsep No.2, Pisang Candi, Kec. Sukun, Kota Malang, Jawa Timur 65146.</p>
                            </div>
                        </div>
                        <div class="contact-point">
                            <i class="fa fa-envelope-o fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700">Email</b>
                                <p class="contact-point-detail">asusrog@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-point">
                            <i class="fa fa-phone fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700">Phone</b>
                                <p class="contact-point-detail">+(62)813-3190-4809</p>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6 contact-right">
                        <h3 class="section-title-2 text-uppercase font-weight-300"><b>Leave</b> <span class="blue-text">a message</span></h3>
                        <form action="#" method="post" class="tm-contact-form">
                            <div class="tm-contact-form">
                                <div class="form-group">
                                    <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" class="form-control" rows="8" placeholder="MESSAGE"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="text-uppercase btn-blue-gradient btn-submit">send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="google-map-container">
                            <div id="google-map" class="google-map"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </section>
        <div class="blue-divider effect1">
            <div class="dark-blue-bg"></div>
            <div class="blue-divider-bg-graphic"></div>
            <div class="blue-bg"></div>
        </div>
        <section class="templatemo-container blue-bg footer-nav effect1">
            <div class="container">
                <div class="col-lg-2 col-md-2 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Main menu</h3>
                    <nav class="text-uppercase templatemo-nav-2">
                        <ul>
                            <li><a href="home">home</a></li>
                            <li><a href="about">About</a></li>
                            <li><a href="profile">Profile</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 footer-block">
                    <h3 class="text-uppercase">About us</h3>
                    <p>ALGI Computer adalah website yang memperkenalkan suatu product laptop dari brand ternama untuk mempermudah pencarian user .</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Resources</h3>
                    <ul>
                        <li><a href="#">Asus.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Features</h3>
                    <ul>
                        <li><a href="#"></a>Macam Laptop</li>
                        <li><a href="#"></a>macam Accesories</li>
                    </ul>
                </div>
        </section>

        <!-- JS -->
        <script type="text/javascript" src="Asset/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
        <script type="text/javascript" src="Asset/js/templatemo-script.js"></script>      <!-- Templatemo Script -->
        <script>
            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                  zoom: 16,
                  center: new google.maps.LatLng(-7.9735771,112.6103337,17),
                  scrollwheel: false
                };

                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                    calculateCenter();
                });

                google.maps.event.addDomListener(window, 'resize', function() {
                    map.setCenter(center);
                });
            }

            function calculateCenter() {
              center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }
            $(document).ready(function(){
                loadGoogleMap();
            });
        </script>
    </body>
</html>
@endsection