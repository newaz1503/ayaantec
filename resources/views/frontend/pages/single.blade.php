<?php
use Carbon\Carbon;
use Illuminate\Support\Str;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/fontawesome.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/ajax.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" sizes="180x180" href="{{asset('assets/frontend/uploads/180.png')}}" type="image/jpeg" >
    <title>Ayaan Tech</title>
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61ed13dcb9e4e21181bb6736/1fq31b67i';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
    <section id="top-header">
        <div class="content d-flex justify-content-between">
            <div class="top-header-right"  data-aos="fade-right"  data-aos-duration="1500">
                <ul>
                    <li><a href="https://www.facebook.com/search/top?q=ayaan%20tech%20limited" target="blank"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCfHg6yMJ967P4ei_JxW--jw" target="blank"><i class="fab fa-youtube-square"></i></a></li>
                    <li><a href="https://www.linkedin.com/mwlite/company/ayaan-tech-limited" target="blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="top-header-left" data-aos="fade-left"  data-aos-duration="1500">
                <ul>
                    <li><a href=""><i class="fas fa-envelope"></i>&nbsp; &nbsp;connect@ayaantech.com.bd</a></li>
                    <li><a  href=""><i class="fas fa-phone-volume"></i>&nbsp; &nbsp;+88 01973198574</a></li>
                    <li><a href=""><i class="fas fa-map-marker-alt"></i> &nbsp; &nbsp;Dhaka Bangladesh</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="navigation">
        <nav>
            <div class="wrapper content">
              <div class="logo"><a href="#"><img style="height: 65px; width: 100%;" src="{{asset('assets/frontend/uploads/logo.png')}}" alt="Logo" srcset=""></a></div>
              <input type="radio" name="slider" id="menu-btn">
              <input type="radio" name="slider" id="close-btn">
              <ul class="nav-links">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li><a href="#">Home</a></li>
                <li><a href="#service">Services</a></li>
                <li>
                  <a href="#packages" class="desktop-item">Packages</a>
                  <input type="checkbox" id="showDrop">
                  <label for="showDrop" class="mobile-item">Packages</label>
                  <ul class="drop-menu">
                    <li><a href="#social">Social Media Managemnt</a></li>
                    <li><a href="#website">Website Maintenance</a></li>
                    <!--<li><a href="#digital">Digital Marketing</a></li>-->
                  </ul>
                </li>
                <li><a href="#blog">Products</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#news">News & Blogs</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
              <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
          </nav>
    </section>
    <section id="slider">
        <div class="heading"></div>
        <div class="swiper-container" data-aos="zoom-out-up" data-aos-duration="1500">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container-general">
                <div class="gallery-wrap wrap-effect-2">
                    @foreach ($bannsers as $banner)
                    <div class="item" style="background-image: url('{{asset('storage/images/backend/banner/'.$banner['image'])}}');"></div>
                    @endforeach
                    
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
   
    <section id="footer">
        <footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container-fluid content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Android App</a></li>
                                    <li><a href="#">ios App</a></li>
                                    <li><a href="#">Desktop</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">My tasks</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="./terms.html">FAQ</a></li>
                                    <li><a href="./terms.html">Term &amp; conditions</a></li>
                                    <li><a href="./terms.html">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                                <div style="width: 150px padding-bottom:20px; margin-bottom:20px" class="f_social_icon">
                                    <a href="https://www.facebook.com/search/top?q=ayaan%20tech%20limited" target="blank"class="fab fa-facebook"></a>
                                    <a href="https://www.youtube.com/channel/UCfHg6yMJ967P4ei_JxW--jw" target="blank" class="fab fa-twitter"></a>
                                    <a href="https://www.linkedin.com/mwlite/company/ayaan-tech-limited" target="blank" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                                <p>Don’t miss any updates of our new templates and extensions.!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
        </footer>
    </section>
   
    <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/script.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/fontawesome.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        
    </script>
    <script>
       const checkbox = document.querySelector('.my-form input[type="checkbox"]');
        const btns = document.querySelectorAll(".my-form button");

        checkbox.addEventListener("change", function() {
        const checked = this.checked;
        for (const btn of btns) {
            checked ? (btn.disabled = false) : (btn.disabled = true);
        }
        });
    </script>
   <script>
       $('.moreless-button').click(function() {
        $('.moretext').slideToggle();
        if ($('.moreless-button').text() == "View all") {
            $(this).text("Hide")
        } else {
            $(this).text("View all")
        }
        });
    </script>
    
   
</body>
</html>