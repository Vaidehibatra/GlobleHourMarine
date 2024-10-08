<link href="https://fonts.googleapis.com/css?family=Sen:400,700,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="/GlobleHourMarine/assets/css/style.css">
<link rel="stylesheet" href="/GlobleHourMarine/assets/css/all.min.css">
<link rel="stylesheet" href="/GlobleHourMarine/assets/css/animate.css">
<link rel="stylesheet" href="/GlobleHourMarine/assets/css/bootstrapp.min.css">
<link rel="stylesheet" href="/GlobleHourMarine/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="/GlobleHourMarine/assets/css/themify-icons.css">
<link rel="icon" type="image/png" href="/GlobleHourMarine/assets/images/GHM_logo2.png">

<style>
   .social-links {
      display: flex;
      justify-content: space-around;
      padding: 0;
      list-style: none;
   }

   .social-links li {
      overflow: hidden;
   }

   .social-links li a {
      font-size: 15px;
      transition: color 0.3s ease;
   }

   .social-links li a:hover {
      color: #007bff;
   }
</style>

<div id="main-3">

   <div id="mainnavbar" class="container-fluid p-0 menu-2  menu-3-color">
      <div class=" fixed-top  container-fluid">
         <div class="row menu-1-inner justify-content-between">
            <div class="col-auto menu-1-logo">
               <a class="navbar-brand" href="<?php echo base_url('/') ?>">
                  <img class="nb-light" src="/GlobleHourMarine/assets/images/GHM_logo.png">
                  <span>GLOBLE HOUR MARINE</span>
               </a>
            </div>
            <!-- <div class="col-md-7 main_nav_outer"> -->
            <div class="col menu-1-menu">
               <nav class="main_nav mt-4">
                  <div class="nav ">
                     <button type="button" class="btn btn-primary nav-toggle" data-toggle="nav">
                        <a href="<?php echo base_url("/") ?>" style="background:none">
                           Home</a>
                     </button>
                  </div>
                  <div class="nav ">
                     <button type="button" class="btn btn-primary nav-toggle" data-toggle="nav">
                        <a href="<?php echo base_url("about-us") ?>" style="background:none">
                           About us</a>
                     </button>
                     <!-- <div class="nav-menu">
                              <a class="nav-item" href="sale_listing.html">Sale Listing</a>
                              <a class="nav-item" href="sale_single.html">Sale Single</a>
                           </div> -->
                  </div>
                  <div class="nav ">
                     <button type="button" class="btn btn-primary nav-toggle" data-toggle="nav">
                        <a href="<?php echo base_url("portfolio") ?>" style="background:none">
                           Portfolio</a>
                     </button>
                     <!-- <div class="nav-menu">
                              <a class="nav-item" href="charter_listing.html">Charter Listing</a>
                              <a class="nav-item" href="charter_single.html">Charter Single</a>
                           </div> -->
                  </div>
                  <div class="nav ">
                     <button type="button" class="btn btn-primary nav-toggle" data-toggle="nav">
                        <a href="<?php echo base_url("h-our-history") ?>" style="background:none">
                           History</a>
                     </button>
                  </div>
                  <div class="nav ">
                     <button type="button" class="btn btn-primary nav-toggle" data-toggle="nav">
                        <a href="<?php echo base_url("faq") ?>" style="background:none">
                           FAQ</a>
                     </button>
                  </div>

                  <div class="nav ">
                     <button type="button" class="btn btn-primary nav-toggle" data-toggle="nav">
                        <a href="<?php echo base_url("contact_us") ?>" style="background:none">
                           Contact Us</a>
                     </button>
                  </div>
               </nav>
            </div>
            <span class=" col-toggler-2">
               <button class="navbar-toggler collapsed" type="button" onclick="openNav()">
                  <div class="hamburger hamburger--spring js-hamburger">
                     <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                     </div>
                  </div>
               </button>
            </span>
         </div>
      </div>
      <div id="mySidenav" class=" navbar-4 sidenav">
         <!-- <nav class=" "> -->
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <!-- <div class=" "> -->

         <div class="sidenav_cat sc_first">
            <h3>Social links</h3>
            <ul class="tagnav social-links">
               <li>
                  <a href="https://www.facebook.com/globlehourmarine/">
                     <i class="fab fa-facebook-f"></i>
                  </a>
               </li>
               <li>
                  <a href="https://www.instagram.com/globlehourmarine/">
                     <i class="fa-brands fa-instagram"></i>
                  </a>
               </li>
               <li>
                  <a href="https://twitter.com/">
                     <i class="fab fa-twitter"></i>
                  </a>
               </li>
               <li>
                  <a href="https://www.linkedin.com/company/globlehourmarine/?viewAsMember=true">
                     <i class="fab fa-linkedin-in"></i>
                  </a>
               </li>
               <li>
                  <a href="https://www.youtube.com/@globlehourmarine">
                     <i class="fab fa-youtube"></i>
                  </a>
               </li>
               <li>
                  <a href="https://www.quora.com/profile/Globle-Hour-Marine?ch=2&oid=2276887883&srid=3uURSB&target_type=user">
                     <i class="fa-brands fa-quora"></i>
                  </a>
               </li>
               <li>
                  <a href="https://pin.it/4ekahmsGn">
                     <i class="fa-brands fa-pinterest"></i>
                  </a>
               </li>
               <li>
                  <a href="https://x.com/__ghm__">
                     <i class="fa-brands fa-x-twitter"></i>
                  </a>
               </li>

            </ul>
         </div>
         <div class="sidenav_cat">
            <h3>Menu</h3>
            <ul class="">
               <li class="nav-item ">
                  <a class="nav-link " href="/">Home</a>

               </li>
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url("about-us") ?>">About us</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" href="<?php echo base_url("#portfolio") ?>">Portfolio</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" href="<?php echo base_url("#h-our-history-2") ?>">History</a>
               </li>

               <li class="nav-item ">
                  <a class="nav-link " href="<?php echo site_url('faq') ?>">Faq</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link " href="<?php echo site_url("contact_us") ?>">Contact us</a>
               </li>
            </ul>
         </div>
         <div class="sidenav_cat address_slide">
            <h3>Address</h3>
            <div class="sidenav_cat_inner">
               <span>Unit no 29 B, 3rd Floor <br>Motia Royal Business Park,<br>
                  Zirakpur, India, 140603</span>
            </div>
         </div>
      </div>
      </nav>
   </div>
</div>
</header>
</div>
<script>
   $(document).ready(function() {
      $(".btn").click(function() {
         $(this).css({
            "background-color": "transparent",
            "color": "inherit"
         });
      });
   });
   $(document).ready(function() {
    $(".nav-toggle").click(function(e) {
        e.preventDefault(); // Prevent the default action
        const targetUrl = $(this).find('a').attr('href'); // Get the link
        window.location.href = targetUrl; // Redirect to the correct URL
    });
});

   document.querySelectorAll(".btn").forEach(function(button) {
      button.addEventListener("click", function() {
         this.style.backgroundColor = "transparent";
         this.style.color = "inherit";
      });
   });
</script>
<script src="/GlobleHourMarine/assets/js/jquery.min.js"></script>
<script src="/GlobleHourMarine/assets/js/popper.min.js"></script>
<script src="/GlobleHourMarine/assets/js/bootstrap.min.js"></script>
<script src="/GlobleHourMarine/assets/js/owl.carousel.min.js"></script>
<script src="/GlobleHourMarine/assets/js/jquery.mousewheel.min.js"></script>
<script src="/GlobleHourMarine/assets/js/magicscroll.js" type="text/javascript"></script>
<script src="/GlobleHourMarine/assets/js/wow.min.js" type="text/javascript"></script>
<script src="/GlobleHourMarine/assets/js/jquery.paroller.min.js"></script>
<script src="/GlobleHourMarine/assets/js/custom.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/paroller.js@1.4.6/dist/jquery.paroller.min.js"></script>