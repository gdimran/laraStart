@extends('layouts.app')

@section('content')
      <Slider></Slider>
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
                                <a class="btn btn-primary" href="{{route('tax-services') }}">Learn More</a>
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
                                <a class="btn btn-primary" href="{{route('buisness-services') }}">Learn More</a>
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
                                <a class="btn btn-primary" href="{{route('small-buisness-accounting') }}">Learn More</a>
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
                                <a class="btn btn-primary" href="{{route('strategic-planning') }}">Learn More</a>
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
                                <a class="btn btn-primary" href="{{route('payroll') }}">Learn More</a>
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
<!--                        <iframe src="https://vimeo.com/58093852?title=0&amp;byline=0&amp;portrait=0&amp;color=e79b39" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
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

                    <a class="btn btn-primary" href="{{route('about-us') }}">Learn More</a>

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
  
@endsection