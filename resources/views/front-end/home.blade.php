@extends('front-end.layouts.app')
@section('content')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Agency Status:</h6>
                      <h4>Ready Work</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Price:</h6>
                      <h4>$2/Tester</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>App Publishing</h6>
                      <h4>$100/1 App</h4>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <h2>Get  20 Expert app Testers for 14-days</h2>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-green-button scroll-to-section">
                      <a href="#contact">Get Your Quote</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script><dotlottie-player src="https://lottie.host/28cc045e-379e-441c-97c9-6360e12c98bf/t23X2HOkMR.json" background="transparent" speed="1" style="width: 490px; height: 546px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="pricing6 py-5 bg-light" id="services">
    <div class="container" > 
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h3 class="mb-3">OUR PLANS </h3>
          <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
          @if (Session('success'))
          <div class="alert alert-primary" role="alert">
            {{Session('success')}}
          </div>
          @endif
        </div>
      </div>
      <!-- row  -->
      <div class="row mt-4">
        <!-- column  -->
        <div class="col-md-6">
          <div class="card card-shadow border-0 mb-4">
            <div class="card-body p-4">
              <div class="d-flex align-items-center">
                <h5 class="font-weight-medium mb-0">Basic Jumpstart Testing </h5>
              
              </div>
              <div class="row">
                <div class="col-lg-5 text-center">
                  <div class="price-box my-3">
                    <sup>$</sup><span class="text-dark display-5">20</span>
                    <h6 class="font-weight-light">14 Days</h6>
                   @guest

                   <a  class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('registration',['price'=>20,'product' => 'Basic Jumpstart Testing'])}}">CHOOSE PLAN </a>
                   @endguest
                   @auth
                   <a  class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('client.checkoutView',['price'=>20,'product' => 'Basic Jumpstart Testing'])}}">CHOOSE PLAN </a>
                   @endauth
                  </div>
                </div>
                <div class="col-lg-7 align-self-center">
                  <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>10 Testers</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Test mobile </span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>5 pages tested</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Every day Screenshot Proof</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>2 minutes </span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
            <div class="card card-shadow border-0 mb-4">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">
                  <h5 class="font-weight-medium mb-0">Standard Jumpstart Testing </h5>
                
                </div>
                <div class="row">
                  <div class="col-lg-5 text-center">
                    <div class="price-box my-3">
                      <sup>$</sup><span class="text-dark display-5">35</span>
                      <h6 class="font-weight-light">14 Days</h6>
                    @guest
                    <a class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('registration',['price'=>50,'product' => 'Deep Dive Testing'])}}">CHOOSE PLAN </a>
                    @endguest
                    @auth
                    <a class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('client.checkoutView',['price'=>50,'product' => 'Deep Dive Testing'])}}">CHOOSE PLAN </a>
                    @endauth
                    </div>
                  </div>
                  <div class="col-lg-7 align-self-center">
                    <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>15 Testers</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>8 pages tested</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Every day Screenshot Proof</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>3 minutes </span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Test mobile </span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- column  -->
        <div class="col-md-6">
            <div class="card card-shadow border-0 mb-4">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">
                  <h5 class="font-weight-medium mb-0">Deep Dive Testing </h5>
                  <div class="ml-auto"><span class="badge badge-danger font-weight-normal p-2">Popular</span></div>
                </div>
                <div class="row">
                  <div class="col-lg-5 text-center">
                    <div class="price-box my-3">
                      <sup>$</sup><span class="text-dark display-5">50</span>
                      <h6 class="font-weight-light">14 Days</h6>
                     @guest()
                     <a class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('registration',['price'=>50,'product' => 'Deep Dive Testing'])}}">CHOOSE PLAN </a>
                     @endguest
                     @auth
                     <a class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('client.checkoutView',['price'=>50,'product' => 'Deep Dive Testing'])}}">CHOOSE PLAN </a>
                     @endauth
                    </div>
                  </div>
                  <div class="col-lg-7 align-self-center">
                    <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>20 Testers</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Test mobile </span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>12 pages tested</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Every day Screenshot Proof</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>5 minutes </span></li>
                        
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- column  -->
        <div class="col-md-6">
          <div class="card card-shadow border-0 mb-4">
            <div class="card-body p-4">
              <div class="d-flex align-items-center">
                <h5 class="font-medium m-b-0">Full-Service Launch</h5>
              </div>
              <div class="row">
                <div class="col-lg-5 text-center">
                  <div class="price-box my-3">
                    <sup>$</sup><span class="text-dark display-5">150</span>
                    <h6 class="font-weight-light">YEARLY</h6>
                    @guest
                    <a class="btn btn-info-gradiant border-0 font-14 text-white p-3 btn-block mt-3" href="{{route('registration',['price'=>150,'product' => 'Full-Service Launch'])}}">CHOOSE PLAN </a>
                    @endguest
                    @auth
                    <a class="btn btn-info-gradiant border-0 font-14 text-white p-3 btn-block mt-3" href="{{route('client.checkoutView',['price'=>150,'product' => 'Full-Service Launch'])}}">CHOOSE PLAN </a>
                    @endauth
                  </div>
                </div>
                <div class="col-lg-7 align-self-center">
                  <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>20+ Testers</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Test mobile </span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>12 pages tested</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Every day Screenshot Proof</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>5 minutes </span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span> Publishing guaranteed</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- column  -->
      </div>
    </div>
  </div>


  <div id="features" class="features section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="features-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                  <div class="first-number number">
                    <h6>01</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Add Your App</h4>
                  <div class="line-dec"></div>
                  <p>Sign up, add your app, and choose a payment plan. Our service is designed to be user-friendly and secure, ensuring that your information is protected.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="second-number number">
                    <h6>02</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Add Testers</h4>
                  <div class="line-dec"></div>
                  <p>You will receive a curated list of tester accounts. Add them to your app's closed testing group in the Google Play Console. We provide clear instructions to make this step as simple as possible.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="third-number number">
                    <h6>03</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Testing</h4>
                  <div class="line-dec"></div>
                  <p>Our team conducts rigorous testing of your app, identifying and resolving any issues that may affect performance or compliance with Google Play's guidelines. We provide detailed feedback and collaborate with you to ensure all issues are addressed.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item fourth-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="fourth-number number">
                    <h6>04</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Publish Your App</h4>
                  <div class="line-dec"></div>
                  <p>Once testing is complete, we will notify you. You can then submit your app for review and successfully publish it on the Google Play Store.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
    
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="/frontend/assets/images/about-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>Top <em>Testing</em> agency &amp; Test your App <span>from our us</span></h2>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>750+</h4>
                <h6>projects finished</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>340+</h4>
                <h6>happy clients</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
            
            </div>
          </div>
          <p><a rel="nofollow" href="" target="_parent">Tester Bee</a> specializes in Android app testing services, ensuring your apps meet all Google Play Console requirements for close testing, open testing, internal testing. Our expert team provides thorough testing to help you seamlessly pass Google Play's stringent standards.</p>
          <div class="main-green-button"><a href="#">Discover company</a></div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div  class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Our Services</h6>
            <h2>Discover What We Do &amp; <span>Offer</span> To Our <em>Clients</em></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="/frontend/assets/images/service-icon-01.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Similar Websites</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="/frontend/assets/images/service-icon-02.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Website Trends</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="/frontend/assets/images/service-icon-03.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Traffic Analysis</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="/frontend/assets/images/service-icon-03.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Optimizing Keywords</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="/frontend/assets/images/service-icon-01.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Page Optimizations</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="/frontend/assets/images/service-icon-02.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Deep URL Analysis</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Our Portofolio</h6>
            <h2>Discover Our Recent <em>Projects</em> And <span>Showcases</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/frontend/assets/images/portfolio-01.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 101</h4></a>
                      <span>Marketing</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/frontend/assets/images/portfolio-04.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 102</h4></a>
                      <span>Branding</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/frontend/assets/images/portfolio-02.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 103</h4></a>
                      <span>Consulting</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/frontend/assets/images/portfolio-05.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 104</h4></a>
                      <span>Artwork</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/frontend/assets/images/portfolio-03.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 105</h4></a>
                      <span>Branding</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/frontend/assets/images/portfolio-06.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 106</h4></a>
                      <span>Artwork</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/frontend/assets/images/portfolio-04.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 107</h4></a>
                      <span>Creative</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/frontend/assets/images/portfolio-01.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 108</h4></a>
                      <span>Consulting</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6>Contact Us</h6>
                  <h2>Fill Out The Form Below To <span>Get</span> In <em>Touch</em> With Us</h2>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="contact-info">
                  <ul>
                    <li>
                      <div class="icon">
                        <img src="/frontend/assets/images/contact-icon-01.png" alt="email icon">
                      </div>
                      <a href="#">info@company.com</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="/frontend/assets/images/contact-icon-02.png" alt="phone">
                      </div>
                      <a href="#">+001-002-0034</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="/frontend/assets/images/contact-icon-03.png" alt="location">
                      </div>
                      <a href="#">26th Street, Digital Villa</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection