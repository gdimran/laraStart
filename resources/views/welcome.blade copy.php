<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TaxhubBD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="home">
           <Slider></Slider>
        <header id="header">
            <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://taxhubbd.com"><img src="http://taxhubbd.com/images/taxhubbd_logo.png" alt="logo"></a>
                    </div>
                    
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="scroll active"><a href="#home">Home</a></li>
                            <li class="scroll"><a href="#services">Services</a></li>
                            
                            <li class="scroll"><a href="#about">About</a></li>
                             
                            <li class="scroll"><a href="#get-in-touch">Contact</a></li>
                            @if (Route::has('login'))
                                @auth
                                   <li class="scroll"> <a href="{{ url('/home') }}">Home</a></li>
                                @else
                                <li class="scroll"> <a href="{{ route('login') }}">Login</a></li>
            
                                    @if (Route::has('register'))
                                    <li class="scroll"><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                        
                            @endif
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
        </header><!--/header--> 
       
      <section id="main-slider">
         
            <div class="owl-carousel">
                <div class="item" style="background-image: url(http://taxhubbd.com/images/slider/bg1.jpg);">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h2><span>Taxhub BD</span> is an Online Bangladeshi Tax Calculator</h2>
                                        <p>One can easily calculate his own tax from this site. It will give him a better estimaion.</p>
                                        <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                 <div class="item" style="background-image: url(http://taxhubbd.com/images/slider/bg2.jpg);">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h2>Online portal for knowing about <span>Bangladeshi Tax</span></h2>
                                        <p>Paying tax is our duty. So we should know about Bangladeshi tax sytem properly to pay our accurate taxs.</p>
                                        <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.owl-carousel-->
        </section><!--/#main-slider-->    
        <section id="services" >
            <div class="container">
    
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown" style="padding-bottom: 35px">Our Services</h2>
                    <p class="text-center wow fadeInDown" hidden>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
    
                <div class="row">
                    <div class="features">
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Tax Services</h4>
                                    <p>We go beyond tax compliance and proactively recommend tax saving strategies to minimize tax and maximize your tax-free wealth.</p>
                                    <a class="btn btn-primary" href="http://taxhubbd.com/tax-services">Learn More</a>
                                </div>
                            </div>
                        </div><!--/.col-md-6-->
    
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-cubes"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Buisness Services</h4>
                                    <p>Want to run a new business? Want cash flow management, bank financing, assessing internal controls for your buisness? </p>
                                    <a class="btn btn-primary" href="http://taxhubbd.com/buisness-services">Learn More</a>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->
                        
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-pie-chart"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Small Buisness Accounting</h4>
                                    <p>We do take care of your books for you, so you have enough time to get back to the job of running your business and generating profits!</p>
                                    <a class="btn btn-primary" href="http://taxhubbd.com/small-buisness-accounting">Learn More</a>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->
                    </div>    
                </div>
                <div class="row">
                    <div class="features">
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Strategic Business Planning</h4>
                                    <p>Preparing a strategic plan helps you clarify your company's direction and keeps both management and staff focused on the tasks at hand.</p>
                                    <a class="btn btn-primary" href="http://taxhubbd.com/strategic-planning">Learn More</a>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->
    
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-language"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Payroll</h4>
                                    <p>We offer payroll solutions that meet your business's needs and enable you to spend time doing what you do best running your company.</p>
                                    <a class="btn btn-primary" href="http://taxhubbd.com/payroll">Learn More</a>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->
    
                        
                    </div>
                </div><!--/.row-->    
            </div><!--/.container-->
        </section><!--/#services-->    <section id="about">
            <div class="container">
    
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown" style="padding-bottom: 35px">About Us</h2>
                    <p class="text-center wow fadeInDown" hidden>Our firm provides outstanding service to our clients because of our dedication to <br>the three underlying principles of professionalism, responsiveness and quality.</p>
                </div>
    
                <div class="row">
                    <div class="col-sm-6 wow fadeInLeft">
                        <h3 class="column-title">Video Intro</h3>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe title="vimeo-player" src="https://player.vimeo.com/video/58093852" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
    
                    <div class="col-sm-6 wow fadeInRight">
                        <h3 class="column-title">Multi Capability</h3>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
    
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="nostyle">
                                    <li><i class="fa fa-check-square"></i> Professionalism</li>
                                    <li><i class="fa fa-check-square"></i> Responsiveness</li>
                                    <li><i class="fa fa-check-square"></i> Quality</li>
                                </ul>
                            </div>
    
                            
                        </div>
    
                        <a class="btn btn-primary" href="http://taxhubbd.com/about-us">Learn More</a>
    
                    </div>
                </div>
            </div>
        </section><!--/#about-->    
        <section id="get-in-touch">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown" style="padding-bottom: 35px">Get in Touch</h2>
                    <p class="text-center wow fadeInDown" hidden>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
        </section><!--/#get-in-touch-->
    
    
        <section id="contact">
            <div id="google-map" style="height:650px; background-color: #4d839c;"></div>
            <div class="container-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="contact-form col-sm-12">
                            <div class="col-sm-6">
                                <h3>Contact Info</h3>
                                <address>
                                  <strong>Email:</strong> taxhubbd2016@gmail.com<br>
                                </address>
                            </div>
                            <div class="col-sm-6">
                                <h3>Put Your Message In Here</h3>
                                <form id="main-contact-form" method="POST" action="http://taxhubbd.com/contact">
                                <input type="hidden" name="_token" value="3UMOkXQ0A9ZJjm4Usq4LgjPbZF5bfRphAivEHRUS">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-share"></i> Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#bottom-->    
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; <a href="http://www.taxhubbd.com">TaxhubBD</a>
                    </div>
                    <div class="col-sm-6">
                        <ul class="social-icons">
                            Stay Connected With 
                            <li><a href="https://www.facebook.com/Taxhubbd-342276302800457/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://plus.google.com/105088297140247921156"><i class="fa fa-google-plus"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer--> 
    </div>
        <script src="/js/publicHome.js"></script>
    </body>
</html>
