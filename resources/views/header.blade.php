<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Fitness landing page</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" />
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="{{ asset('fitness-free-html5-bootstrap-page-template') }}/css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- Preloader -->
       <!-- <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>-->
        <!--End Preloader -->


        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container" style="background-color:hotpink;">

                <div class="navbar-header">
                    <a href="#"><img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/fitness.png" alt="Fitness" /></a>


                    <ul class="list-inline contact_info" style="background-color:hotpink;">
                            <li role="presentation"><a href="{{ url('/home') }}">Home</a></li>
                            <li role="presentation"><a href="{{ url('/showcategory') }}">Products</a></li>

                            <li role="presentation"><a href="#contact">Contact us</a></li>
                        </ul>

                </div>


            </div>
        </nav><!-- Navbar end -->


        <!-- Header -->
@yield('content')
<br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- Footer -->
        <footer id="contact">
            <div class="white_shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_us">
                            <div class="about_us_content">
                                <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/footer_logo.png" alt="Fitness" />
                                <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quasoa molestias excepturi sintal occaecati cupiditate non provident similique sunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer_right quick_link">
                            <h3>Quick Links</h3>
                            <ul class="list-unstyled footer_menu">
                                <li role="presentation"><a href="#">Home</a></li>
                                <li role="presentation"><a href="#about">About</a></li>
                                <li role="presentation"><a href="#company">Company</a></li>
                                <li role="presentation"><a href="#services">Our Services</a></li>
                                <li role="presentation"><a href="#service">Service</a></li>
                                <li role="presentation"><a href="#location">Location</a></li>
                                <li role="presentation"><a href="#news">Recent News</a></li>
                                <li role="presentation"><a href="#contact">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer_right">
                            <h3>Contact Us</h3>
                            <ul class="list-unstyled footer_contact_info">
                                <li><a href=""><span class="fa fa-map-marker"></span><p>hello@PSDFreebies.com</p></a></li>
                                <li><a href=""><span class="fa fa-phone"></span><p>85 26 37 48 59</p></a></li>
                                <li><a href=""><span class="fa fa-envelope"></span><p>sun - thu : 9AM - 6PM</p></a></li>
                            </ul>

                            <ul class="list-inline social">
                                <li><a href="" class="fa fa-facebook"></a></li>
                                <li><a href="" class="fa fa-twitter"></a></li>
                                <li><a href="" class="fa fa-linkedin"></a></li>
                                <li><a href="" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-copyright text-center">
                    <p class="wow fadeInRight" data-wow-duration="1s">
                        Made with
                        <i class="fa fa-heart"></i>
                        by
                        <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a>
                        2019. All Rights Reserved
                    </p>
                </div>
            </div>
        </footer><!-- Footer end -->



        <!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div><!-- End off scroll up->

        <!-- JavaScript -->
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



        <!--main js-->
        <script type="text/javascript" src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/js/main.js"></script>
        <script type="text/javascript" src="{{ asset('ajax') }}/ajax.js"></script>

    </body>
</html>
