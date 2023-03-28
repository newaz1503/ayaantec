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
                        <h1> Service </h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li> Service </li>
                        </ul>
                    </div>
                </div>
                <div class="britcam-shape">
                    <div class="breadcumb-content upp">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li> Service </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section id="single_product">
        <div class="container">
            <div class="row" style="margin:70px auto;">
                {{-- <div class="col-md-6">
                    <img style="height: 450px; width: 100%;"
                        src="{{ asset('storage/images/admin/product/' . $data['image']) }}" alt="About Us" srcset="">
                </div> --}}
                <div class="col-sm-12 col-md-6 col-lg-12 pl-0 pr-0">
                    <div class="cda-content-area p-5">
                        <div class="cda-content-area-product text-center">
                            <h1>{{ $data['name'] }}</h1>

                            <div class="mt-5 mb-5" ><img class="text-center" style="height: 450px; width: 450px;"
                                src="{{ asset('storage/images/admin/services/' . $data['image']) }}" alt="About Us" srcset=""></div>

                            <p class="text-justify">{{ $data['details'] }}</p>
                            <a href="{{ route('contact') }}" class="px-btn-arrow">
                                <span>Enquiry Now</span>
                                <i class="arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!--==================================================-->
    <!-----Start Appoinment Section ----->
    <!--===================================================-->
    <section id="contact">
        <div class="contact-us pt-90 pb-90">
            <div class="container">

                <div class="row">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-0 pr-0">
                        <div class="contact_from_box">
                            <div class="contact_title pb-4">
                                <h3>Get In Touch</h3>
                            </div>
                            {{-- <form class="my-form pt-5 pb-5" action="{{ url('/subscribe') }}" method="Post">@csrf --}}
                            <form class="my-form pt-5 pb-5" action="mailto:connect@ayaantec.com" method="Post">@csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_box mb-30">
                                            <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_box mb-30">
                                            <input type="text" name="organization" placeholder="Organization Name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_box mb-30">
                                            <input type="email" name="email" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_box mb-30">
                                            <input type="tel" name="phone" placeholder="Phone Number" required>
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="form_box mb-30">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="quote_button">
                                                    <button class="btn" type="submit">Submit
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="quote_button">
                                                    <button class="btn" type="reset">Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="status"></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-----Start Contact Location Section ----->
    <!--===================================================-->


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
                        {{-- <h4 class="widget-title pb-4"> Services </h4>
                        <div class="menu-quick-link-content">
                            <ul class="footer-menu">
                                <li><a href="#"> Strategy & Planing </a></li>
                                <li><a href="#"> Consumer Market </a></li>
                                <li><a href="#"> Data Analysis </a></li>
                                <li><a href="#"> Corporate Finance </a></li>
                                <li><a href="#"> Market Research </a></li>
                            </ul>
                        </div> --}}
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
    </div>
@endsection
