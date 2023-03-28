@extends('frontend.layouts.app')

@section('content')
    <!--==================================================-->
    <!-----Start Header Slider Section ----->
    <!--===================================================-->
    <div class="breadcumb-area d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1> Contact Us </h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li> Contact Us </li>
                        </ul>
                    </div>
                </div>
                <div class="britcam-shape">
                    <div class="breadcumb-content upp">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li> Contact Us </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==================================================-->
    <!-----Start Appoinment Section ----->
    <!--===================================================-->
    <div class="contact-us pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">
                    <div class="contact_from_box">
                        <div class="contact_title pb-4">
                            <h3>Get In Touch</h3>
                        </div>
                        @if(Session::has('message'))
                             <p class="alert alert-success">{{ Session::get('message') }}</p>
                        @endif
                        <form id="contact_form" action="{{route('contact.mail')}}" method="POST" id="dreamit-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                        @if($errors->has('name'))
                                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="email" name="email" placeholder="Email Address">
                                        @if($errors->has('email'))
                                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                        @if($errors->has('phone'))
                                            <div class="error text-danger">{{ $errors->first('phone') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="web" placeholder="Website">
                                        @if($errors->has('web'))
                                            <div class="error text-danger">{{ $errors->first('web') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <input type="text" name="subject" placeholder="Subject">
                                        @if($errors->has('subject'))
                                            <div class="error text-danger">{{ $errors->first('subject') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                        @if($errors->has('message'))
                                            <div class="error text-danger">{{ $errors->first('message') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="quote_button">
                                        <button class="btn" type="submit"> <i class="bi bi-gear"></i> Free Consultant
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">
                    <div class="cda-content-area">
                        <div class="cda-single-content d-flex">
                            <div class="cda-icon">
                                <i class="flaticon-time"></i>
                            </div>
                            <div class="cda-content-inner">
                                <h4>Company Location</h4>
                                <p>House:24, Road:14, Niketon Gulshan-1, <br>Dhaka Bangladesh 1219.</p>
                            </div>
                        </div>
                        <div class="cda-single-content hr d-flex">
                            <div class="cda-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="cda-content-inner">
                                <h4>Telephone Number</h4>
                                <a href="tel:+880 197 319 8574">
                                    <p>+880 197 319 8574,</p>
                                </a>

                                <a href="tel:+880 963 855 3344">
                                    <p>+880 963 855 3344</p>
                                </a>
                            </div>
                        </div>
                        <div class="cda-single-content hr d-flex">
                            <div class="cda-icon">
                                <i class="flaticon-next-1"></i>
                            </div>
                            <div class="cda-content-inner">
                                <h4>Our Email Address</h4>
                                <a href="mailto:connect@ayaantec.com" >
                                    <p>connect@ayaantec.com</P>
                                </a>
                            </div>
                        </div>
                        <div class="cda-single-content hr d-flex">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-----Start Contact Location Section ----->
    <!--===================================================-->
    <div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7302.610000933508!2d90.406833!3d23.772151!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45203ae6068e299b!2sAyaan%20Tech%20Limited!5e0!3m2!1sen!2sbd!4v1675858742607!5m2!1sen!2sbd"
                        width="100%" height="350" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>


                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- Start atl Footer Middle Area -->
    <!--==================================================-->
    <div class="footer-middle style-two upper">
        <div class="container">
            <div class="row footer-bg">
                <div class="col-lg-4 col-md-6 pl-0">
                    <div class="widget widgets-company-info">
                        <div class="company-info-desc pr-2">
                            <h4 class="widget-title pb-4"> About Us </h4>
                            <p>Busines Consulting is optimize standing manufactured products and installation synergy.
                                Professionally predominat why professional business</p>
                        </div>
                        <div class="follow-company-icon">
                            <a class="social-icon-color" href="#"> <i class="bi bi-facebook"></i> </a>
                            <a class="social-icon-color2" href="#"> <i class="bi bi-instagram"> </i> </a>
                            <a class="social-icon-color1" href="#"> <i class="bi bi-twitter"></i> </a>
                            <a class="social-icon-color3" href="#"> <i class="bi bi-youtube"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget widget-nav-menu">
                        <h4 class="widget-title pb-4">Company</h4>
                        <div class="menu-quick-link-content">
                            <ul class="footer-menu">
                                <li><a href="{{ route('home') }}"> Home </a></li>
                                <li><a href="#about_us"> About Us</a></li>
                                <li><a href="{{ route('contact') }}"> Contact Us </a></li>
                                <li><a href="#services"> Service </a></li>
                                <li><a href="#"> Our Team </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pl-20">
                    <div class="widget widget-nav-menu">
                        <h4 class="widget-title pb-4"> Services </h4>
                        <div class="menu-quick-link-content">
                            <ul class="footer-menu">
                                <li><a href="#"> Strategy & Planing </a></li>
                                <li><a href="#"> Consumer Market </a></li>
                                <li><a href="#"> Data Analysis </a></li>
                                <li><a href="#"> Corporate Finance </a></li>
                                <li><a href="#"> Market Research </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 pl-0 pr-0">
                    <div id="em-recent-post-widget">
                        <div class="single-widget-item">
                            <h4 class="widget-title pb-2">Popular Posts</h4>
                            <div class="contact-form-footer pt-40">
                                <form>
                                    <div class="subscribe_form">
                                        <input type="email" name="email" id="email" class="form-control"
                                            required data-error="Please enter your email" placeholder="Enter E-Mail">
                                        <button type="submit" class="btn"> <i class="bi bi-send-check"></i> </button>
                                    </div>
                                    <div class="subscribe_form_send">

                                    </div>
                                </form>
                            </div>
                            <div class="recent-post-item">
                                <div class="recent-post-thumb1">
                                    <a href="#">
                                        <img src="assets/images/resource/google-play.png" alt="">
                                    </a>
                                </div>
                                <div class="recent-post-thumb">
                                    <a href="#">
                                        <img src="assets/images/resource/app-store.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
