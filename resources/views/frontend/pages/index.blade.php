@extends('frontend.layouts.app')



@section('content')
    <!--==================================================-->
    <!-- Start atl slider Area -->
    <!--==================================================-->
    <div class="my_custom_hero_section" id="particles-js">
        <div class="slider-area d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider-content">
                            <!-- <h3> Work With Ayaan Tech Limited</h3> -->
                            <h1> Welcome to <br>Ayaan Tech Limited </h1>
                            <h3> Make Everything Easy</h3>
                            <!-- <p> Monotonically implement integrated commerce and distributed is conveniently unleash B2B customer service via long</p> -->
                            <p>We solve software challenges
                                in innovative ways. Build success in
                                software engineering
                                with Ayaan Tech Limited.</p>
                        </div>
                        <div class="lines pt-20 pb-40">
                            <div class="line"></div>
                        </div>
                        <div class="slider-button">
                            <a href="#"> Work Together <i class="bi bi-arrow-right-short"></i> </a>
                        </div>
                        <div class="slider-contact-box">
                            <div class="contact-icon">
                                <img src="{{ asset('assetupdated/assets/images/slider/call.png') }}" alt="">
                            </div>
                            <div class="contact-number">
                                <span> Contact Us </span>
                                <h3><a href="tel:+880 197 319 8574">+880 197 319 8574</a> <br> <a
                                        href="tel:+880 963 855 3344">+880 963 855 3344</a> </h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 ">
                        <div class="slider-thumb ">
                            @foreach ($banners as $banner)
                                <img class="mainc" class="img-fluid w-100"
                                    src="{{ asset('/storage/' . $banner['image']) }}" alt="">
                            @endforeach
                            <img class="rotateme" width="700px"
                                src="{{ asset('assetupdated/assets/images/slider/hero-img-border.png') }}" alt="">
                        </div>
                        <!-- <div class="video-icon">
                                                             <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=0B8-jNBac9Y"><i class="fa fa-play"></i></a>
                                                            </div> -->
                    </div>
                    <!-- slider shape -->
                    <div class="slider-shape">
                        <div class="slider-shape-thumb">
                            <img src="{{ asset('assetupdated/assets/images/slider/hero-shape.png') }}" alt="">
                        </div>
                        <div class="slider-shape-thumb2">
                            <img src="{{ asset('assetupdated/assets/images/slider/hero-shape2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==================================================-->
    <!--End atl slider Area  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start atl feature Area -->
    <!--==================================================-->
    <div class="service-area" id="services">
        <div class="container">
            <div class="row align-items-center mb-90">
                <div class="col-lg-12 col-md-10 pl-0">
                    <div class="atl-section-title">
                        <!-- <h2> We Provide All Kinds Of Services</h2> -->
                        <!-- <h2> From <span> Technologies </span></h2> -->
                        <h2 class="text-center"><span><u> Services </u></span></h2>
                    </div>
                </div>
                <!-- <div class="col-lg-5 col-md-6">
                                                            <div class="atl-button text-right">
                                                             <a href="#"> All Service <i class="bi bi-plus"></i> </a>
                                                            </div>
                                                           </div> -->
            </div>
            <div class="row">

                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="atech-service-box">
                            <div class="service-box-inner">
                                <div class="em-service-icon">
                                    {{-- <img src="{{asset('assetupdated/assets/images/resource/service-icon.png')}}" alt=""> --}}
                                    <img style="width: 35px; text-align: center"
                                        src="{{ asset('storage/images/admin/services') }}/{{ $service->image }}"
                                        alt="">
                                </div>
                                <div class="em-service-title">
                                    <h2> {{ $service->name }} </h2>
                                </div>

                                <div class="em-service-text">
                                    <p> {{ $service->details }} </p>
                                </div>
                                <div class="service-button">
                                    <a href="{{ route('single_service', $service['id']) }}"> Read More <i
                                            class="bi bi-plus"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End atl feature Area -->
    <!--==================================================-->

    <!-----SOCIAL MEDIA MANAGEMENTS pricing Section ----->
    <!--===================================================-->
    <!-- <div class="pricing-section">
                                                          <div class="container">
                                                           <div class="row">
                                                            <div class="col-lg-12">
                                                             <div class="atl-section-title upper text-center pb-60">
                                                              <h5> Our Pricing </h5>
                                                              <h2> Choose Your Best <span> Pricing Plans </span></h2>
                                                              <h3><span>WEBSITE DESIGN AND DEVELOPMENT</span></h3>
                                                             </div>
                                                            </div>
                                                           </div>
                                                           <div class="row align-items-center">
                                                            <div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
                                                             <div class="pricing-single-items">
                                                              <div class="pricing-thumb pt-25">
                                                               <img src="assets/images/resource/basic.png" alt="Pricing Img">
                                                              </div>
                                                              <div class="pricing-title">
                                                               <h3>Business</h3>
                                                              </div>
                                                              <div class="pricing-item-text mb-15">
                                                               <span class="currency">$</span>
                                                               <span class="tk">199</span>
                                                               <span class="month"> / mo </span>
                                                              </div>
                                                              <div class="pricing-body">
                                                               <div class="pricing-feature mb-40">
                                                                <ul>
                                                                 <li><b>Basic Informations</b></li>
                                                                 <li>30 days trial Features </li>
                                                                 <li>Synced to cloud database </li>
                                                                 <li>10 hours of support </li>
                                                                 <li>Social media integration </li>
                                                                 <li>Unlimited Features</li>
                                                                </ul>
                                                               </div>
                                                              </div>
                                                              <div class="pricing-btn">
                                                               <div class="btn-common pc-btn mb-60">
                                                                <a href="#">Select Plan</a>
                                                               </div>
                                                              </div>
                                                             </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
                                                             <div class="pricing-single-items style-2">
                                                              <div class="pricing-thumb pt-25">
                                                               <img src="assets/images/resource/standard.png" alt="Pricing Img">
                                                              </div>
                                                              <div class="pricing-title">
                                                               <h3>Economy</h3>
                                                              </div>
                                                              <div class="pricing-item-text mb-15">
                                                               <span class="currency">$</span>
                                                               <span class="tk">99</span>
                                                               <span class="month"> / mo </span>
                                                              </div>
                                                              <div class="pricing-body">
                                                               <div class="pricing-feature mb-40">
                                                                <ul>
                                                                 <li><b>Basic Informations</b></li>
                                                                 <li>30 days trial Features </li>
                                                                 <li>Synced to cloud database </li>
                                                                 <li>10 hours of support </li>
                                                                 <li>Social media integration </li>
                                                                 <li>Unlimited Features</li>
                                                                </ul>
                                                               </div>
                                                              </div>
                                                              <div class="pricing-btn">
                                                               <div class="btn-common pc-btn mb-60">
                                                                <a href="#">Select Plan</a>
                                                               </div>
                                                              </div>
                                                             </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
                                                             <div class="pricing-single-items">
                                                              <div class="pricing-thumb pt-25">
                                                               <img src="assets/images/resource/premium.png" alt="Pricing Img">
                                                              </div>
                                                              <div class="pricing-title">
                                                               <h3>Premium</h3>
                                                              </div>
                                                              <div class="pricing-item-text mb-15">
                                                               <span class="currency">$</span>
                                                               <span class="tk">149</span>
                                                               <span class="month"> / mo </span>
                                                              </div>
                                                              <div class="pricing-body">
                                                               <div class="pricing-feature mb-40">
                                                                <ul>
                                                                 <li><b>Basic Informations</b></li>
                                                                 <li>30 days trial Features </li>
                                                                 <li>Synced to cloud database </li>
                                                                 <li>10 hours of support </li>
                                                                 <li>Social media integration </li>
                                                                 <li>Unlimited Features</li>
                                                                </ul>
                                                               </div>
                                                              </div>
                                                              <div class="pricing-btn">
                                                               <div class="btn-common pc-btn mb-60">
                                                                <a href="#">Select Plan</a>
                                                               </div>
                                                              </div>
                                                             </div>
                                                            </div>
                                                           </div>
                                                          </div>
                                                         </div> -->
    <!-----WEBSITE DESIGN AND DEVELOPMENT pricing Section ----->
    <!--===================================================-->
    <!-- <div class="pricing-section">
                                                          <div class="container">
                                                           <div class="row">
                                                            <div class="col-lg-12">
                                                             <div class="atl-section-title upper text-center pb-60">
                                                              <h5> Our Pricing </h5>
                                                              <h2> Choose Your Best <span> Pricing Plans </span></h2>
                                                              <h3><span>SOCIAL MEDIA MANAGEMENTS</span></h3>
                                                             </div>
                                                            </div>
                                                           </div>
                                                           <div class="row align-items-center">
                                                            <div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
                                                             <div class="pricing-single-items">
                                                              <div class="pricing-thumb pt-25">
                                                               <img src="assets/images/resource/basic.png" alt="Pricing Img">
                                                              </div>
                                                              <div class="pricing-title">
                                                               <h3>Business</h3>
                                                              </div>
                                                              <div class="pricing-item-text mb-15">
                                                               <span class="currency">$</span>
                                                               <span class="tk">199</span>
                                                               <span class="month"> / mo </span>
                                                              </div>
                                                              <div class="pricing-body">
                                                               <div class="pricing-feature mb-40">
                                                                <ul>
                                                                 <li><b>Basic Informations</b></li>
                                                                 <li>30 days trial Features </li>
                                                                 <li>Synced to cloud database </li>
                                                                 <li>10 hours of support </li>
                                                                 <li>Social media integration </li>
                                                                 <li>Unlimited Features</li>
                                                                </ul>
                                                               </div>
                                                              </div>
                                                              <div class="pricing-btn">
                                                               <div class="btn-common pc-btn mb-60">
                                                                <a href="#">Select Plan</a>
                                                               </div>
                                                              </div>
                                                             </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
                                                             <div class="pricing-single-items style-2">
                                                              <div class="pricing-thumb pt-25">
                                                               <img src="assets/images/resource/standard.png" alt="Pricing Img">
                                                              </div>
                                                              <div class="pricing-title">
                                                               <h3>Economy</h3>
                                                              </div>
                                                              <div class="pricing-item-text mb-15">
                                                               <span class="currency">$</span>
                                                               <span class="tk">99</span>
                                                               <span class="month"> / mo </span>
                                                              </div>
                                                              <div class="pricing-body">
                                                               <div class="pricing-feature mb-40">
                                                                <ul>
                                                                 <li><b>Basic Informations</b></li>
                                                                 <li>30 days trial Features </li>
                                                                 <li>Synced to cloud database </li>
                                                                 <li>10 hours of support </li>
                                                                 <li>Social media integration </li>
                                                                 <li>Unlimited Features</li>
                                                                </ul>
                                                               </div>
                                                              </div>
                                                              <div class="pricing-btn">
                                                               <div class="btn-common pc-btn mb-60">
                                                                <a href="#">Select Plan</a>
                                                               </div>
                                                              </div>
                                                             </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
                                                             <div class="pricing-single-items">
                                                              <div class="pricing-thumb pt-25">
                                                               <img src="assets/images/resource/premium.png" alt="Pricing Img">
                                                              </div>
                                                              <div class="pricing-title">
                                                               <h3>Premium</h3>
                                                              </div>
                                                              <div class="pricing-item-text mb-15">
                                                               <span class="currency">$</span>
                                                               <span class="tk">149</span>
                                                               <span class="month"> / mo </span>
                                                              </div>
                                                              <div class="pricing-body">
                                                               <div class="pricing-feature mb-40">
                                                                <ul>
                                                                 <li><b>Basic Informations</b></li>
                                                                 <li>30 days trial Features </li>
                                                                 <li>Synced to cloud database </li>
                                                                 <li>10 hours of support </li>
                                                                 <li>Social media integration </li>
                                                                 <li>Unlimited Features</li>
                                                                </ul>
                                                               </div>
                                                              </div>
                                                              <div class="pricing-btn">
                                                               <div class="btn-common pc-btn mb-60">
                                                                <a href="#">Select Plan</a>
                                                               </div>
                                                              </div>
                                                             </div>
                                                            </div>
                                                           </div>
                                                          </div>
                                                         </div> -->

    <!--==================================================-->
    <!-- End atl about Area -->
    <!--==================================================-->
    <div class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="atech-about-thumb">
                        <img src="{{ asset('assetupdated/assets/images/about/about.png') }}" alt="">
                        <!-- about-shape -->
                        <div class="about-shape-thumb1 bounce-animate2">
                            <img src="{{ asset('assetupdated/assets/images/about/about-shape2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ">
                    <div class="atl-section-title white pb-10">
                        <h2> The Fastest Way To Achieve</h2>
                        <h2> Your Business <span> Success </span></h2>
                        <!-- <p>Continuously generate 2.0 communities and client-focused products. In synergize strategic manufactured products whereas levera.</p> -->
                    </div>
                    <div class="lines style-two pb-15">
                        <div class="line"></div>
                    </div>
                    <div class="atech-icon-box">
                        <div class="atech-icon-title">
                            <h4> We are Since <span>2020 to Present</span> in Dhaka, BANGLADESH </h4>
                        </div>
                        <div class="atech-icon-list">
                            <ul>
                                <li><i class="flaticon-tick"></i> <span> Effortlessly reinvent sticky partnerships
                                    </span></li>
                                <li><i class="flaticon-tick"></i> <span> Superior data distinctively escalate
                                        content.
                                    </span></li>
                                <li><i class="flaticon-tick"></i> <span> Monotonically faster open source </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="about-button">
                                                             <a href="#"> Learn More <i class="bi bi-plus"></i> </a>
                                                            </div> -->
                </div>
                <!-- about thumb -->
                <div class="about-shape-thumb2 bounce-animate4">
                    <img src="{{ asset('assetupdated/assets/images/resource/all-shape.png') }}" alt="">
                </div>
            </div>
            <div class="row counter-vip text-center">
                <div class="col-lg-12">
                    <div class="couter-top-title">
                        <h3> Ayaan Tech Limited has achieved the following milestone in just 3 Years </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-single-box">
                        <div class="counter-title">
                            <h4 class="counter">500</h4>
                            <p>Project Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-single-box">
                        <div class="counter-title">
                            <h4 class="counter">3</h4>
                            <span>+</span>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-single-box">
                        <div class="counter-title">
                            <h4 class="counter">17</h4>
                            <span>+</span>
                            <p>Expert Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-single-box">
                        <div class="counter-title">
                            <!-- <h4 class="counter"></h4> -->
                            <div class="star"><i class="fas fa-star"></i></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fa fa-star"></i>
                            </div>
                            <p>Satisfactions Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End atl about Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- End atl about Area -->
    <!--==================================================-->
    <div class="about-area style-two" id="about_ceo">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    @foreach ($ceos as $key => $ceo)
                        <div class="atl-section-title">
                            <h2> What Our <span style="color:#af1226">CEO</span> Says</h2>
                            <!-- <h2> Ayaan Tech Limited <span> Customers </span></h2> -->
                            <div class="lines style-three pt-20 pb-10">
                                <div class="line"></div>
                            </div>
                            <p class="about-text"> “{{ $ceo->ceosays }}” </p>
                            <p class="about-text2">{{ $ceo->paraceo }}
                            </p>
                        </div>
                        <div class="atech-ceo-box">
                            <div class="atech-ceo-title">
                                <h4> Masud Hossen </h4>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                        <div class="about-button">
                            <a href="#"> Clients Review <i class="bi bi-plus"></i> </a>
                        </div>
                </div>
                @endforeach
                <div class="col-lg-6 col-md-6">
                    <div class="atech-about-thumb1">
                        <img width="610px" height="610px" style="border-radius: 50%"
                            src="{{ asset('/storage/' . $ceo['image']) }}" alt="">
                    </div>
                    <div class="about-shape-box">
                        <div class="about-shape-thumb bounce-animate">
                            <img src="{{ asset('assetupdated/assets/images/about/ab-shape.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End atl about Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start atl case study Area -->
    <!--==================================================-->
    <div class="case-study-area" id="products">
        <div class="container">
            <div class="row case-study-bg align-items-center mb-40">
                <div class="col-lg-12 col-md-10">
                    <div class="atl-section-title white ">
                        <!-- <h2> We Serve the Best Works</h2> -->
                        <!-- <h2> View <span> Case Studies </span></h2> -->
                        <h2 class="text-center"><u>Products</u></h2>
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-md-6">
                                                            <div class="atl-button text-right">
                                                             <a href="#"> All Project <i class="bi bi-plus"></i> </a>
                                                            </div>
                                                           </div> -->
                <div class="case-study-shape">
                    <div class="case-shape-thumb bounce-animate4">
                        <img src="{{ asset('assetupdated/assets/images/resource/red-dot.png') }}" alt="">
                    </div>
                    <div class="case-shape-thumb1 bounce-animate2">
                        <img src="{{ asset('assetupdated/assets/images/resource/all-shape.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="case-study owl-carousel">
                    @foreach ($products as $product)
                        <div class="col-lg-12">
                            <div class="case-study-single-box">
                                <div class="case-study-thumb">
                                    <img width="800px" height="400px"
                                        src="{{ asset('storage/images/admin/product') }}/{{ $product->image }}"
                                        alt="">
                                    <div class="case-study-content">
                                        <div class="case-study-title">
                                            {{-- <h6> {{$product->name}}</h6> --}}
                                            <h3> <a href="{{ route('single_product', $product['id']) }}">
                                                    {{ $product->name }}</a> </h3>
                                        </div>
                                        <div class="case-button">
                                            {{-- <a a href="#">Enquiry Now <i class="bi bi-arrow-right-short"></i> </a> --}}
                                            <a href="{{ route('single_product', $product['id']) }}"> Read More <i
                                                    class="bi bi-plus"></i> </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--==================================================-->
    <!-- End atl case s tudy Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start atl process Area -->
    <!--==================================================-->
    <div class="process-area" id="about_us" style="scroll-behavior: smooth">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="row process-bg">
                        <div class="col-lg-6 col-md-6 pl-10 pr-10">
                            <div class="process-single-box">
                                <div class="process-number">
                                    <span>1</span>
                                </div>
                                <div class="process-title">
                                    <h3>Idea <span> Generate </span></h3>
                                    <p>we flourish your idea</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 pl-10 pr-10">
                            <div class="process-single-box upper">
                                <div class="process-number">
                                    <span>2</span>
                                </div>
                                <div class="process-title">
                                    <h3> System <span> Design </span></h3>
                                    <p>We help to portrait your own design</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 pl-10 pr-10">
                            <div class="process-single-box upper1">
                                <div class="process-number">
                                    <span>3</span>
                                </div>
                                <div class="process-title">
                                    <h3> 24/7 <span> Support </span></h3>
                                    <p>Call us or Message us to get your solution</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 pl-10 pr-10">
                            <div class="process-single-box upper2">
                                <div class="process-number">
                                    <span>4</span>
                                </div>
                                <div class="process-title">
                                    <h3> Sales <span> Generate </span></h3>
                                    <p>Your sales will be generated automatically</p>
                                </div>
                            </div>
                        </div>
                        <div class="process-shape">
                            <div class="process-thumb">
                                <img src="{{ asset('assetupdated/assets/images/resource/process-shape.png') }}"
                                    alt="">
                            </div>
                            <div class="process-thumb1">
                                <img src="{{ asset('assetupdated/assets/images/resource/atech-shape.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pl-50">
                    <div class="atl-section-title">
                        <!-- <h2> The Fastest Way To Achieve </h2> -->
                        <h2><span><u>About ATL</u> </span></h2>
                    </div>
                    <div class="lines style-three pt-30 pb-10">
                        <div class="line"></div>
                    </div>



                    <div class="atech-smart-title">
                        <h4> Before Choosing <span>Ayaan Tech Limited,</span> Know who we are? </h4>
                        @foreach ($abouts as $about)
                            <p class="text-justify">{{ $about->details }}</p>
                        @endforeach
                    </div>


                    <!-- <div class="about-button">
                                                             <a href="#"> More About Us <i class="bi bi-plus"></i> </a>
                                                            </div> -->
                </div>
            </div>
            <!-- <div class="row pt-50">
                                                            <div class="col-lg-12">
                                                             <div class="atechs-top-title">
                                                              <h3> More than 1K+ Brands work with Ayaan Tech Limited</h3>
                                                             </div>
                                                            </div>
                                                           </div>
                                                           <div class="row pt-30">
                                                            <div class="brand-list owl-carousel">
                                                             <div class="col-lg-12">
                                                              <div class="brand-single-box">
                                                               <div class="brand-thumb">
                                                                <img src="assets/images/resource/allian.png" alt="">
                                                               </div>
                                                              </div>
                                                             </div>
                                                             <div class="col-lg-12">
                                                              <div class="brand-single-box">
                                                               <div class="brand-thumb">
                                                                <img src="assets/images/resource/figma.png" alt="">
                                                               </div>
                                                              </div>
                                                             </div>
                                                             <div class="col-lg-12">
                                                              <div class="brand-single-box">
                                                               <div class="brand-thumb">
                                                                <img src="assets/images/resource/google.png" alt="">
                                                               </div>
                                                              </div>
                                                             </div>
                                                             <div class="col-lg-12">
                                                              <div class="brand-single-box">
                                                               <div class="brand-thumb">
                                                                <img src="assets/images/resource/redit.png" alt="">
                                                               </div>
                                                              </div>
                                                             </div>
                                                            </div>
                                                           </div> -->
        </div>
    </div>
    <!--==================================================-->
    <!-- End atl process Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start atl Skills Area Css -->
    <!--==================================================-->
    <div class="skill-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 pr-0">
                    <div class="extra-animation-div">
                        <div class="atl-section-title white">
                            <!-- <h2> Join the Community to learn </h2> -->
                            <h2> <u>Career</u> </h2>
                        </div>
                        <div class="lines style-three upper pt-30 pb-10">
                            <div class="line"></div>
                        </div>

                        <div>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                Senior Software Engineer <div class="float-right">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <strong>Skills Required: PHP, Laravel, MYSQL, 3 Years Hands on
                                                experience</strong><br>
                                            We are one of the most prominent Software Development Company In
                                            Bangladesh
                                            <a class="btn" href="#">Apply Now</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Junior Software Engineer <div class="float-right">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <strong>Skills Required: PHP, Laravel, MYSQL, 1 Years Hands on
                                                experience</strong><br>
                                            We are one of the most prominent Software Development Company In
                                            Bangladesh
                                            <a class="btn" href="#">Apply Now</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- <div class="atech-smart-title">
                                                              <p class="slill-text">Continually generate 2.0 communities and client-focused products. In synergize strategic manufactured products whereas levera.</p>
                                                             </div> -->
                    </div>
                    <!-- <div class="prossess-ber-plugin pt-20">
                                                                            <span class="prosses-bar">Business Strategy</span>
                                                                            <div id="bar1" class="barfiller">
                                                                                <div class="tipWrap">
                                                                                    <span class="tip"></span>
                                                                                </div>
                                                                                <span class="fill" data-percentage="65"></span>
                                                                            </div>
                                                                            <span class="prosses-bar">Technology Consulting</span>
                                                                            <div id="bar2" class="barfiller">
                                                                                <div class="tipWrap">
                                                                                    <span class="tip"></span>
                                                                                </div>
                                                                                <span class="fill my-class" data-percentage="90"></span>
                                                                            </div>
                                                                            <span class="prosses-bar">Product Development</span>
                                                                            <div id="bar3" class="barfiller">
                                                                                <div class="tipWrap">
                                                                                    <span class="tip"></span>
                                                                                </div>
                                                                                <span class="fill my-class2" data-percentage="80"></span>
                                                                            </div>
                                                                        </div> -->


                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="slill-single-thumb pl-50 ml-1">
                        <img src="{{ asset('assetupdated/assets/images/resource/skill.png') }}" alt="">
                        <!-- thumb content -->
                        <div class="skill-thumb-content">
                            <div class="skill-title">
                                <h3 class="counter"> 3 </h3>
                                <span>+</span>
                                <h5> YEARS EXPERIENCE </h5>
                            </div>
                        </div>
                        <!-- skill shape -->
                        <div class="skill-shape dance">
                            <img src="{{ asset('assetupdated/assets/images/resource/skill-shape.png') }}" alt="">
                        </div>
                        <div class="skill-shape1 bounce-animate2">
                            <img src="{{ asset('assetupdated/assets/images/resource/all-shape.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End atl Skill Area Css -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start atl Blog Area -->
    <!--==================================================-->
    <div class="blog-area blog-new" id="news_blog">
        <div class="container">
            <div class="row align-items-center mb-40">
                <div class="col-lg-12 col-md-10">
                    <div class="atl-section-title">
                        <!-- <h2> We’re here to share story </h2> -->
                        <h2 class="text-center"><span> <u>News & Blogs</u> </span></h2>
                    </div>
                </div>
                <!-- <div class="col-lg-5 col-md-6">
                                                             <div class="atl-button text-right">
                                                              <a href="#"> View all Blog <i class="bi bi-plus"></i> </a>
                                                             </div>
                                                            </div> -->
            </div>
            <div class="row">
                @foreach ($newses as $news)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-box">
                            <div class="single-blog-thumb">
                                <img src="{{ asset('storage/images/admin/news') }}/{{ $news->image }}" alt="">
                                <div class="blog-top-button">
                                    <a href="{{ route('single_news', $news['id']) }}"> {{ $news->name }} </a>
                                </div>
                            </div>
                            <div class="em-blog-content">
                                <div class="meta-blog-text">
                                    <p> {{ $news->created_at }}</p>
                                </div>
                                {{-- <div class="em-blog-title">
                                <h2> <a href="blog-details.html"> Popular Consultants are big Meetup 2022 </a> </h2>
                            </div> --}}
                                <div class="em-blog-icon">
                                    <div class="em-blog-thumb">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <div class="em-blog-icon-title">
                                        <h6> Alex Collins </h6>
                                    </div>
                                </div>
                                <div class="blog-button">
                                    <a href="{{ route('single_news', $news['id']) }}"> Read More <i
                                            class="bi bi-plus"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End atl Blog Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start atl Footer Middle Area -->
    <!--==================================================-->
    <div class="footer-middle">
        <div class="container d-xs-none">
            <div class="row subscribe-area">
                <div class="col-lg-6 col-md-6">
                    <div class="subscribe-title">
                        <h1>Subscribe to our Newsletter</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form action="mailto:connect@ayaantec.com" method="POST" id="atech-form">
                        <div class="subscribe_form">
                            <input type="email" name="email" id="email" class="form-control" required
                                data-error="Please enter your email" placeholder="Enter Your Email">
                            <button type="submit" class="btn">Subscribe</button>
                        </div>
                        <div class="subscribe_form_send">

                        </div>
                    </form>
                    <div id="status"></div>
                </div>
                <div class="subscribe-shape">
                    <div class="subscribe-thumb bounce-animate5">
                        <img src="{{ asset('assetupdated/assets/images/resource/small-dot.png') }}" alt="">
                    </div>
                    <div class="subscribe-thumb1">
                        <img src="{{ asset('assetupdated/assets/images/resource/big-dot.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row footer-bg">
                <div class="col-lg-4 col-md-6 pl-0">
                    <div class="widget widgets-company-info">
                        <div class="company-info-desc pr-2">
                            <h4 class="widget-title"> About Us </h4>
                            <p>Ayaan Technologies is a software development company that provides a range of services
                                including software development, web development, mobile application development, and digital
                                marketing. Their website states that they aim to provide high-quality and cost-effective
                                solutions to their clients.
                            </p>
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
                        <h4 class="widget-title">Company</h4>
                        <div class="menu-quick-link-content">
                            <ul class="footer-menu">
                                <li><a href="{{ route('home') }}"> Home </a></li>
                                <li><a href="{{ route('home') }}#services"> Services</a></li>
                                <li><a href=""> SaaS </a></li>
                                <li><a href="{{ route('home') }}#products"> Products </a></li>
                                <li><a href="{{ route('home') }}#about_us"> About Us </a></li>
                                <li><a href="{{ route('home') }}#news_blog"> News & Blogs</a></li>
                                <li><a href="{{ route('contact') }}"> Contact Us </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pl-20">
                    <div class="widget widget-nav-menu">
                        <h4 class="widget-title"> Services </h4>
                        <div class="menu-quick-link-content">
                            <ul class="footer-menu">
                                @foreach ($services as $service)
                                    <li><a href="{{ route('single_service', $service['id']) }}"> {{ $service->name }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pr-0">
                    {{-- <div id="em-recent-post-widget">
                        <div class="single-widget-item">
                            <h4 class="widget-title">Popular Posts</h4>
                            <div class="recent-post-item active">
                                <div class="recent-post-image">
                                    <a href="#">
                                        <img width="80" height="80"
                                            src="{{ asset('assetupdated/assets/images/resource/footer1.png') }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="recent-post-text">
                                    <h6><a href="#">
                                            How To Plugin Install WP server?
                                        </a>
                                    </h6>
                                    <span class="rcomment">December 12, 2022</span>
                                </div>
                            </div>
                            <div class="recent-post-item">
                                <div class="recent-post-image">
                                    <a href="#">
                                        <img width="80" height="80"
                                            src="{{ asset('assetupdated/assets/images/resource/footer2.png') }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="recent-post-text">
                                    <h6><a href="#">
                                            Top 10 Most Usefull Google Extansion
                                        </a>
                                    </h6>
                                    <span class="rcomment">December 15, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="foorer-shape">
                    <div class="footer-thumb">
                        <img src="{{ asset('assetupdated/assets/images/resource/red-dot.png') }}" alt="">
                    </div>
                    <div class="footer-thumb1 bounce-animate2">
                        <img src="{{ asset('assetupdated/assets/images/resource/all-shape.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    @endsection
