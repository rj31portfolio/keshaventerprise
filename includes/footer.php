<!--footer start-->
<footer class=" footer">
  <div class="primary-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 pe-lg-8">
          <a class="navbar-brand logo footer-logo mb-4 d-inline-block" href="<?php echo $base_url; ?>index.html">
            <img class="img-fluid" src="<?php echo $base_url; ?>images/logo-keshav.png" alt="">
          </a>
          <ul class="media-icon list-unstyled">
            <li>
              <i class="flaticon-pin-1"></i>
              <p class="mb-0">H-141, Sector-1, DSIIDC Industrial Area Bawana, New Delhi- 110039 (INDIA)</p>
            </li>
            <li>
              <i class="flaticon-mail"></i>
              <a href="mailto:themeht23@gmail.com">keshaventerprises89@yahoo.com</a>
            </li>
          </ul>
          <div class="footer-number">
            <div class="footer-number-inner">
              <i class="flaticon-phone-call"></i>
              <div>
                <span>Feel Free To Call Us</span>
                <a href="tel:+919873673917">+91 9873673917</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 mt-5 mt-lg-0">
          <div class="row">
            <div class="col-md-3 footer-menu">
              <h5>Quick Links</h5>
              <ul class="list-unstyled w-100">
                <li><a href="<?php echo $base_url; ?>about-us.html">About Us</a></li>
                <li><a href="<?php echo $base_url; ?>contact.html">Contact Us</a></li>
                <li><a href="<?php echo $base_url; ?>privacy-policy.html">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-3 mt-5 mt-md-0 footer-menu">
              <h5>Our Services</h5>
              <ul class="list-unstyled">
                <li><a href="<?php echo $base_url; ?>services-single.html">D Frame Hydraulic Press</a></li>
                <li><a href="<?php echo $base_url; ?>services-single.html">NC Press Brake</a></li>
                <li><a href="<?php echo $base_url; ?>services-single.html">H Frame Mechanical Power Press</a></li>
              </ul>
            </div>
            <div class="col-md-6 mt-5 mt-md-0 ps-lg-8 footer-subscribe">
              <h5>Newsletter</h5>
              <p>Subscribe our newsletter to Get the latest news, tips and special offers.</p>
              <form id="mc-form" class="mc-form subscribe-form">
                <input type="email" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                <button type="submit"><i class="bi bi-send-fill"></i></button>
              </form>
              <ul class="list-inline ps-0 ms-0 mt-5 footer-social social-icons">
                <li><a href="https://www.facebook.com/keshaventerprisesbawanadelhi"><i class="flaticon-facebook-app-symbol"></i></a></li>
                <li><a href="https://www.instagram.com/keshaventerprises91/"><i class="flaticon-instagram"></i></a></li>
                <li><a href="https://api.whatsapp.com/send/?phone=919873673917&text&type=phone_number&app_absent=0"><i class="flaticon-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer">
    <div class="container">
      <div class="row">
        <div class="col text-center copyright">
          Copyright 2025 by 
          <u><a href="viraladsmedia.com">Viral Ads Media</a></u> | All Rights Reserved 
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer end-->

<!--color-customizer-->
<div class="d-none color-customizer closed">
  <a class="opener" href="#"><i class="bi bi-palette"></i></a>
  <div class="clearfix color-chooser text-center">
    <h4 class="mb-4">Induztry With Awesome Colors</h4>
    <ul class="colorChange clearfix">
      <li class="theme-default selected" title="theme-default" data-style="color-1"></li>
      <li class="theme-2" title="theme-2" data-style="color-2"></li>
      <li class="theme-3" title="theme-3" data-style="color-3"></li>
      <li class="theme-4" title="theme-4" data-style="color-4"></li>
      <li class="theme-5" title="theme-5" data-style="color-5"></li>
      <li class="theme-6" title="theme-6" data-style="color-6"></li>
    </ul>
  </div>
</div>

<!--back-to-top-->
<div class="scroll-top">
  <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
  // Toggle submenu on mobile
  var dropdowns = document.querySelectorAll(".dropdown-submenu > a");
  dropdowns.forEach(function (dropdown) {
    dropdown.addEventListener("click", function (e) {
      // Prevent bootstrap default dropdown toggle
      e.preventDefault();
      e.stopPropagation();

      // Close all other open submenus
      document.querySelectorAll(".dropdown-submenu .dropdown-menu").forEach(function (submenu) {
        if (submenu !== dropdown.nextElementSibling) {
          submenu.classList.remove("show");
        }
      });

      // Toggle current submenu
      let submenu = dropdown.nextElementSibling;
      submenu.classList.toggle("show");
    });
  });

  // Close submenu if user clicks outside
  document.addEventListener("click", function () {
    document.querySelectorAll(".dropdown-submenu .dropdown-menu").forEach(function (submenu) {
      submenu.classList.remove("show");
    });
  });
});
</script>

<!-- inject js start -->
<script src="<?php echo $base_url; ?>js/jquery.min.js"></script> 
<script src="<?php echo $base_url; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $base_url; ?>js/jquery-appear.js"></script> 
<script src="<?php echo $base_url; ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $base_url; ?>js/odometer.min.js"></script>
<script src="<?php echo $base_url; ?>js/jquery.countdown.min.js"></script> 
<script src="<?php echo $base_url; ?>js/gsap.min.js"></script> 
<script src="<?php echo $base_url; ?>js/scrolltrigger.min.js"></script> 
<script src="<?php echo $base_url; ?>js/swiper-bundle.min.js"></script> 
<script src="<?php echo $base_url; ?>js/induztry-swiper-init.js"></script>  
<script src="<?php echo $base_url; ?>js/color-customize/color-customizer.js"></script> 
<script src="<?php echo $base_url; ?>js/theme-script.js"></script>

</body>

</html>