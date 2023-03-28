const swiper = new Swiper('.swiper-container', {
  direction: 'vertical',
  mousewheel: {},
  effect: 'cube',
  keyboard: {
    enabled: true,
    onlyInViewport: false
  }
});

// About 


// view all 


  // Responsive nav item 
/** code by webdevtrick ( https://webdevtrick.com ) **/

  
(function($) { // Begin jQuery
  $(function() { // DOM ready
      // If a link has a dropdown, add sub menu toggle.
      $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
      });
      // Clicking away from dropdown will remove the dropdown class
      $('html').click(function() {
      $('.nav-dropdown').hide();
      });
      // Toggle open and close nav styles on click
      $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
      });
      // Hamburger to X toggle
      $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
      });
     
      
  }); // end DOM ready
  })(jQuery); // end jQuery
  
  //sidebar menu hide when click link
        let menuLink = document.getElementById('menuLink');
        let bars = document.getElementById('bars');
        let menuBtn = document.getElementById('menu-btn');
        
        function myFunction(){
            let closeBtn = document.querySelector('.close-btn');
            let SideNavBar = document.getElementById('SideNavBar');
             SideNavBar.classList.remove('active');
        }
        function BarFunction(){
            let closeBtn = document.querySelector('.close-btn');
            let SideNavBar = document.getElementById('SideNavBar');
            SideNavBar.classList.toggle('active');
        }
        function CloseFunction(){
            let closeBtn = document.querySelector('.close-btn');
            let SideNavBar = document.getElementById('SideNavBar');
             SideNavBar.classList.remove('active');
        }
  
  


 