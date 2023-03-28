<!-- Start atl Main Menu Area -->
<!--==================================================-->
<div id="sticky-header" class="atl_nav_manu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo">
                    <a class="logo_img" href="{{ route('home') }}" title="atl">
                        <img class="img-fluid w-100" src="{{ asset('assetupdated/assets/images/logoayaanv2.png') }}"
                            alt="" />
                    </a>
                    <a class="main_sticky" href="{{ route('home') }}" title="atl">
                        <img class="img-fluid w-100" src="{{ asset('assetupdated/assets/images/logoayaanv2.png') }}"
                            alt="astute" />
                    </a>
                </div>
            </div>
            <div class="col-lg-9 pl-0 pr-0">
                <nav class="atl_menu">
                    <ul class="nav_scroll">
                        <li><a href="{{ route('home') }}">Home </a>
                            <!-- <ul class="sub-menu">
        <li><a href="index.html">It Consulting</a></li>
        <li><a href="index-2.html">Finance Consulting</a></li>
       </ul> -->
                        </li>
                        <!-- <li><a href="#">Company <span><i class="fas fa-angle-down"></i></span></a>
       <ul class="sub-menu">
        <li><a href="about.html">About Us</a></li>
        <li><a href="service.html">Our Service</a></li>
        <li><a href="pricing.html">Pricing</a></li>
        <li><a href="team.html">Our Team</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="blog-details.html">Blog Details</a></li>
        <li><a href="portfolio-details.html">Fortfolio Details</a></li>
       </ul>
      </li> -->
                        <!-- <li><a href="#">Services <span><i class="fas fa-angle-down"></i></span></a>
       <ul class="sub-menu">
        <li><a href="service.html">Our Service</a></li>

       </ul>
      </li> -->
                        <li><a target="" href="{{ route('home') }}#services">Services</a>
                            <!-- <ul class="sub-menu">
        <li><a href="service.html">Our Service</a></li>

       </ul> -->
                        </li>
                        <li><a href="#">SaaS<span><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a target="_blank" href="https://pharmacyss.com/">Pharmacy Management</a></li>
                                <li><a target="_blank" href="https://atlerp.xyz/">Business Management Softwares</a></li>
                                <li><a target="_blank" href="https://ayaantec.com/comming-soon">OTA Solutions</a></li>
                                <li><a target="_blank" href="https://sellerpool.com/">e-commerce platform</a></li>
                                <li><a target="_blank" href="https://biddapith.xyz/">School Management</a></li>

                            </ul>
                        </li>
                        <li><a target="" href="{{ route('home') }}#products">Products</a>
                            <!-- <ul class="sub-menu">
        <li><a href="service.html">Our Service</a></li>

       </ul> -->
                        </li>
                        <!-- <li><a href="#">Portfolio <span><i class="fas fa-angle-down"></i></span></a>
       <ul class="sub-menu">
        <li><a href="portfolio.html">Portfolio-3 Column</a></li>
        <li><a href="portfolio-3column.html">Portfolio-3 Column Full</a></li>
        <li><a href="portfolio-2.html">Portfolio-2 Column</a></li>
        <li><a href="portfolio-2column.html">Portfolio-2 Column Full</a></li>
       </ul>
      </li> -->
                        <!-- <li><a href="#">Blog <span><i class="fas fa-angle-down"></i></span></a>
       <ul class="sub-menu">
        <li><a href="blog-grid.html">Blog Gird</a></li>
        <li><a href="blog-list.html">Blog List</a></li>
        <li><a href="blog-2column.html">Blog-2Column</a></li>
       </ul>
      </li> -->
                        <li><a href="#">About<span><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('home') }}#about_us">About Us</a></li>
                                <li><a href="{{ route('home') }}#about_ceo">Meet Our CEO</a></li>

                            </ul>
                        </li>
                        <li><a href="{{ route('home') }}#news_blog">News & Blogs</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                    <div class="header-button">
                        <a type="date" href="#">Schedule Consultation</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- atl Mobile Menu Area -->
<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
    <div class="mobile-menu">
        <nav class="atl_menu">
            <ul class="nav_scroll">
                <li><a href="{{ route('home') }}">Home </a>
                    {{-- <ul class="sub-menu">
                        <li><a href="index.html">It Consulting</a></li>
                        <li><a href="index-2.html">Finance Consulting</a></li>
                    </ul> --}}
                </li>
                <li><a href="#">Services </a>
                </li>
                <li><a href="#">SaaS<span><i class="fas fa-angle-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a target="_blank" href="https://pharmacyss.com/">Pharmacy Management</a></li>
                        <li><a href="https://atlerp.xyz/">Business Management Softwares</a></li>
                        <li><a href="https://ayaantec.com/comming-soon">OTA Solutions</a></li>
                        <li><a href="https://sellerpool.com/">e-commerce platform</a></li>
                        <li><a href="https://biddapith.xyz/">School Management</a></li>

                    </ul>
                </li>

                <li><a href="#">Products </a>
                </li>
                <li><a href="#">About<span><i class="fas fa-angle-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="#about_us">About Us</a></li>
                        <li><a href="#about_ceo">Meet Our CEO</a></li>

                    </ul>
                </li>
                <li><a href="contact.html">News & Blogs</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>

            </ul>
        </nav>
    </div>
</div>
<!--==================================================-->
<!-- End atl Main Menu Area -->
<!--==================================================-->
