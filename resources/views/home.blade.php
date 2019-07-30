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
<style>
  #bottom{

    position:fixed;
   bottom:0;

}
    </style>
        <!-- Preloader -->
       <div id="loading">
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
        </div>
        <!--End Preloader -->


        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container">

                <div class="navbar-header">
                    <a href="#"><img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/fitness.png" alt="Fitness" /></a>

                    <ul class="list-inline contact_info">
                        <li><a href=""><span class="fa fa-envelope"></span><p>medoaboserii@gmail.com</p></a></li>
                        <li><a href=""><span class="fa fa-phone"></span><p>To Reservate:0111 1499 193</p></a></li>
                        <li><a href=""><span class="fa fa-clock-o"></span><p>sun - thu : 9AM - 6PM</p></a></li>
                    </ul>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse navbar-right" id="nav" >
                    <ul class="nav">
                        <li role="presentation"><a href="#home">Home</a></li>
                        <li role="presentation"><a href="{{ url('/showcategory') }}">Products</a></li>
                        <li role="presentation"><a href="#about">About</a></li>
                        <li role="presentation"><a href="#features">Company</a></li>
                        <li role="presentation"><a href="#service">Our Services</a></li>
                        <li role="presentation"><a href="#coaches">Recent News</a></li>
                        <li role="presentation"><a href="#contact">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- Navbar end -->


        <!-- Header -->
        <header id="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/slider_img.jpg" alt="Strong Body">
                        <div class="carousel-caption photo_overlay">
                            <div class="container">
                                <div class="carousel_caption_inner">
                                    <h3>Build Your </h3>
                                    <h1>Body Strong</h1>

                                    <p>Even if gas passes just won clinical salad tomorrow makeup or pull partners. A mass of partners sapien. Textile football integer Laoreet seen from the fear of mass. Jasmine deductible. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/slider_img.jpg" alt="Strong Body">
                        <div class="carousel-caption photo_overlay">
                            <div class="container">
                                <div class="carousel_caption_inner">
                                    <h3>Build Your </h3>
                                    <h1>Body Strong</h1>

                                    <p>Even if gas passes just won clinical salad tomorrow makeup or pull partners. A mass of partners sapien. Textile football integer Laoreet seen from the fear of mass. Jasmine deductible.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/slider_img.jpg" alt="Strong Body">
                        <div class="carousel-caption photo_overlay">
                            <div class="container">
                                <div class="carousel_caption_inner">
                                    <h3>Build Your </h3>
                                    <h1>Body Strong</h1>

                                    <p>Because no matter what you say in life, the truth will always be the truth. You know when someone is telling the truth, you look in the eyes. I have a tendency to believe people.
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- Carousel end-->
        </header><!-- Header end -->

        <!-- About -->
        <section id="about">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <div class="about_content">
                            <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/about_img.jpg" alt="" class="about_img" />
                            <h2>Quotes</h2>

                            <p>God gave me a great body and it's my duty to take care of my physical temple.
                                </p>

                            <a href="#about" class="btn know_btn">Know More</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="yoga_content">
                            <div class="yoga">
                                <h3>Yoga <span>&xlarr;</span></h3>
                                <p>Believe me - I've done very good stuff and very crazy stuff, and I don't regret the crazy stuff.
                                    </p>

                                <a href="" class="btn link_btn">Know More</a>
                            </div>
                            <div class="yoga_banner">
                                <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/yoga_img.jpg" alt="Yoga" class="yoga_img" />
                                <div class="photo_overlay"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- About end-->

        <!-- Features -->
        <section id="features">
            <div class="container">
                <h2>Our features classes</h2>
                <p class="lead">checkout our fitness classes</p>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="feature_item">
                            <span class="flaticon flaticon-running"></span>
                            <h3>Weight Programs</h3>
                            <p>I don't have a bad relationship. I'm 48 years old. I think life is too short for that. To me, life is... you open the shutters, you see the dogs outside, you look left, you look right, in, what, a second and a half? And that's a life.</p>

                            <a href="#about" class="btn know_btn">Know More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature_item">
                            <span class="flaticon flaticon-yoga-mat"></span>
                            <h3>Weight Programs</h3>
                            <p>I don't have a bad relationship. I'm 48 years old. I think life is too short for that. To me, life is... you open the shutters, you see the dogs outside, you look left, you look right, in, what, a second and a half? And that's a life.</p>

                            <a href="#about" class="btn know_btn">Know More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature_item">
                            <span class="flaticon flaticon-weightlifting"></span>
                            <h3>Weight Programs</h3>
                            <p>I don't have a bad relationship. I'm 48 years old. I think life is too short for that. To me, life is... you open the shutters, you see the dogs outside, you look left, you look right, in, what, a second and a half? And that's a life.</p>

                            <a href="#about" class="btn know_btn">Know More</a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Features end -->

        <!-- Service -->
        <section id="service">
            <div class="container">
                <h2>Body Sculpturing Program</h2>
                <div class="row">
                    @foreach($program as $obj)
                    <div class="col-md-4 col-sm-6">
                        <div class="service_item">
                            <div class="service_photo">
                                <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/program_img{{$loop->index+1}}.jpg" alt="Program" />
                                <div class="photo_overlay"></div>
                            </div>
                            <div class="service_caption">
                                <h4>{{$obj->name}}</h4>
                                <p>Date: {{$obj->startdate}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach





                </div>
            </div>
        </section><!-- Service end -->

        <!-- Coaches -->
        <div id="coaches" class="coaches">
            <div class="container">
                <div class="coaches_content">
                    <div class="size_120 no_photo coach_item">
                        <h3>Yoga</h3>
                    </div>
                    <div class="size_180 coach_item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/coach_img1.png" alt="Coach" />
                    </div>
                    <div class="size_270 coach_item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/coach_img2.png" alt="Coach" />
                    </div>
                    <div class="size_110 coach_item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/coach_img3.png" alt="Coach" />
                    </div>
                    <div class="size_195 coach_item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/coach_img4.png" alt="Coach" />
                    </div>
                    <div class="size_110 no_photo coach_item">
                        <h3>Yoga</h3>
                    </div>
                    <div class="size_135 coach_item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/coach_img5.png" alt="Coach" />
                    </div>
                    <div class="size_195 coach_item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/coach_img6.png" alt="Coach" />
                    </div>
                    <div class="size_180 coach_item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/coach_img7.png" alt="Coach" />
                    </div>
                    <div class="size_180 no_photo coach_item">
                        <h3>Gym</h3>
                    </div>
                    <div class="size_135 coach_item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/coach_img8.png" alt="Coach" />
                    </div>
                    <div class="size_195 coach_item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/coach_img9.png" alt="Coach" />
                    </div>
                    <div class="size_195 coach_item">
                        <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/coach_img10.png" alt="Coach" />
                    </div>
                </div>
            </div>
        </div><!-- Coaches end -->

        <!-- Footer -->
        <footer id="contact">
            <div class="white_shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_us">
                            <div class="about_us_content">
                                <img src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/images/footer_logo.png" alt="Fitness" />
                                <p>
                                    However, we deem worthy of them, and they are accusing those who hate the righteous, and, corrupted by the flattery of the present, and of these pains, pleasures, and quasoa deleniti do not desire to provide in the troubles of omnis sintal and expound the actual blinded.</p>
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
                                    @foreach($aboutus as $obj)
                                <li><a href=""><span class="fa fa-map-marker"></span><p>{{$obj->emails}}</p></a></li>
                                <li><a href=""><span class="fa fa-phone"></span><p>{{$obj->phonenumbers}}</p></a></li>
                                <li><a href=""><span class="fa fa-envelope"></span><p>{{$obj->adresses}}</p></a></li>
                                @endforeach
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
                        <a target="_blank" href="">FCIH Team</a>
                        2019. All Rights Reserved
                    </p>
                </div>
            </div>
        </footer><!-- Footer end -->


        <marquee behavior="scroll" id="bottom" style="background-color:hotpink;">

                @foreach($news as $one)
                 <font color="white"> {{$one->updated_at}}:
               {{$one->news}}
               &nbsp
             </font>
             @endforeach
              </marquee>
        <!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div><!-- End off scroll up->

        <!-- JavaScript -->
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



        <!--main js-->
        <script type="text/javascript" src="{{ asset('fitness-free-html5-bootstrap-page-template') }}/js/main.js"></script>

    </body>
</html>
