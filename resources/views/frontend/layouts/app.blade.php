<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ayaan Tech Limited</title>
    <meta name="title" content="Ayaan Tech Limited">
    <meta name="description" content="Best Software Development Company in Bangladesh. We’re a Software Development Company with aspiring developers, QA engineers, and business experts who all work together to make your project a success. We are providing the best software solution for your business.">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assetupdated/assets/images/favico.png') }}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/bootstrap.min.css') }}" type="text/css"
        media="all" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/owl.carousel.min.css') }}" type="text/css"
        media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/animate.css') }}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/animated-text.css') }}" type="text/css"
        media="all" />
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/all.min.css') }}" type="text/css" media="all" />
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/flaticon.css') }}" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/theme-default.css') }}" type="text/css"
        media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/meanmenu.min.css') }}" type="text/css"
        media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/style.css') }}" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/owl.transitions.css') }}" type="text/css"
        media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/venobox/venobox.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/particlejsstyle.css') }}">
    <!-- particle js css  -->

    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assetupdated/assets/css/responsive.css') }}" type="text/css"
        media="all" />
    <!-- modernizr js -->
    <script src="{{ asset('assetupdated/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{asset('assetupdated/cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- previous template --}}
    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/ajax.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" sizes="180x180" href="{{asset('assets/frontend/uploads/180.png')}}" type="image/jpeg" > --}}
    <link rel="stylesheet" href="{{asset('assets/frontend/css/ajax.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">


</head>
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

<body>


    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')

    <div class="whatsapp_box d-flex align-items-center gap-2">
         <span><strong>Chat by WhatsApp</strong></span>
         <a href="https://wa.me/+8801973198574?text=Welcome%20to%20Ayaantech%20Limeted%20%20for%20" target="blank"><img src="{{asset('assets/frontend/WhatsApp.svg.png')}}" alt="Whats App" width="100%" class="whatsapp_icon"></a>

     </div>



    <!-- jquery js -->
    <script src="{{ asset('assetupdated/assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assetupdated/assets/js/bootstrap.min.js') }}"></script>
    <!-- carousel js -->
    <script src="{{ asset('assetupdated/assets/js/owl.carousel.min.js') }}"></script>
    <!-- counterup js -->
    <script src="{{ asset('assetupdated/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('assetupdated/assets/js/waypoints.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assetupdated/assets/js/wow.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('assetupdated/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('assetupdated/venobox/venobox.js') }}"></script>
    <!-- ajax mail js -->
    <script src="{{ asset('assetupdated/assets/js/ajax-mail.js') }}"></script>
    <!--  animated-text js -->
    <script src="{{ asset('assetupdated/assets/js/animated-text.js') }}"></script>
    <!-- venobox min js -->
    <script src="{{ asset('assetupdated/venobox/venobox.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('assetupdated/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- jquery meanmenu js -->
    <script src="{{ asset('assetupdated/assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assetupdated/assets/js/popper.min.js') }}"></script>
    <!-- jquery scrollup js -->
    <script src="{{ asset('assetupdated/assets/js/jquery.scrollUp.js') }}"></script>
    <!-- slic slider js  -->

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- particle js  -->
    <script src="{{ asset('assetupdated/assets/js/particles.js') }}"></script>
    <script src="{{ asset('assetupdated/assets/js/particlejsapp.js') }}"></script>
    <!-- theme js -->
    <script src="{{ asset('assetupdated/assets/js/theme.js') }}"></script>
    <script src="{{ asset('assetupdated/assets/js/jquery.barfiller.js') }}"></script>
    <!-- jquery js -->


    <script src="{{asset('assets/frontend/js/script.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
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
    <script>
    //  function myFunction() {
    //       var x = document.getElementById("navBar");
    //       x.style.left = "0 !important";
    //     }
    </script>

     <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>

</body>



</html>
